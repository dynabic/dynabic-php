<?php
/**
 * APIClient.php
 */


/* Autoload the model definition files */
/**
 *
 *
 * @param string $className the class to attempt to load
 */
function __autoload($className) {
	$currentDir = substr(__FILE__, 0, strrpos(__FILE__, '/'));
	if (file_exists($currentDir . '/' . $className . '.php')) {
		include $currentDir . '/' . $className . '.php';
	} elseif (file_exists($currentDir . '/../model/' . $className . '.php')) {
		include $currentDir . '/../model/' . $className . '.php';
	}
}


class APIClient {

	public static $POST = "POST";
	public static $GET = "GET";
	public static $PUT = "PUT";
	public static $DELETE = "DELETE";

	/**
	 * @param string $privateKey your Private key
	 * @param string $apiServer the address of the API server
	 */
	function __construct($privateKey, $clientKey, $apiServer) {
		$this->privateKey = $privateKey;
		$this->clientKey = $clientKey;
		$this->apiServer = $apiServer;
	}


    /**
	 * @param string $resourcePath path to method endpoint
	 * @param string $method method to call
	 * @param array $queryParams parameters to be place in query URL
	 * @param array $postData parameters to be placed in POST body
	 * @param array $headerParams parameters to be place in request header
	 * @return unknown
	 */
	public function callAPI($resourcePath, $method, $queryParams, $postData,
		$headerParams) {

		$headers = array();

		$filename = false;
		if (empty($postData)){
			$headers[] = "Content-type: text/html";

		} else if (is_string($postData) && strpos($postData, "file://") === 0) {
			$filename = substr($postData, 7);
			$headers[] = "Content-type: ".mime_content_type($filename);
			$headers[] = "Content-Length: ".filesize($filename);

		} else if (is_object($postData) or is_array($postData)) {
			$headers[] = "Content-type: application/json";
			$postData = json_encode(self::object_to_array($postData));
                        print $postData;
                        print "\n\r";
		}

        # Allow API key from $headerParams to override default
        $added_api_key = False;
		if ($headerParams != null) {
			foreach ($headerParams as $key => $val) {
				$headers[] = "$key: $val";
			}
		}

		$url = $this->apiServer . $resourcePath;

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, 0);
		// return the result on success, rather than just TRUE
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		if ($method == self::$GET) {
			if (! empty($queryParams)) {
				$url = ($url . '?' . http_build_query($queryParams));
			}
		} else if ($method == self::$POST) {
			if($filename){
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($curl, CURLOPT_TIMEOUT, 0);
				curl_setopt($curl, CURLOPT_PUT, true);
				curl_setopt($curl, CURLOPT_INFILE, fopen($filename, "rb"));
				curl_setopt($curl, CURLOPT_INFILESIZE, filesize($filename));
			} else {
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
				$headers[] = "clientkey: ".$this->clientKey;
				$headers[] = "signature: ".self::signRequestBody($postData);
			}
		} else if ($method == self::$PUT) {
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
			$headers[] = "clientkey: ".$this->clientKey;
			$headers[] = "signature: ".self::signRequestBody($postData);
		} else if ($method == self::$DELETE) {
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
			$headers[] = "clientkey: ".$this->clientKey;
			$headers[] = "signature: ".self::signRequestBody($postData);
		} else {
			throw new Exception('Method ' . $method . ' is not recognized.');
		}

		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_URL, self::sign($url));

		// Make the request
		$response = curl_exec($curl);
		print $response;
		print "\n\r";

		$response_info = curl_getinfo($curl);

		// Handle the response
		if ($response_info['http_code'] == 0) {
			throw new Exception("TIMEOUT: api call to " . $url .
				" took more than 5s to return" );
		} else if (in_array($response_info['http_code'], array(200, 201, 202))) {
			$data = json_decode($response);
		} else if ($response_info['http_code'] == 401) {
			throw new Exception("Unauthorized API request to " . $url .
					": ".json_decode($response)->message );
		} else if ($response_info['http_code'] == 404) {
			$data = null;
		} else {
			throw new Exception("Can't connect to the api: " . $url .
				" response code: " .
				$response_info['http_code']);
		}

		return $data;
	}



	/**
	 * Take value and turn it into a string suitable for inclusion in
	 * the path or the header
	 * @param object $object an object to be serialized to a string
	 * @return string the serialized object
	 */
	public static function toPathValue($object) {
        if (is_array($object)) {
            return str_replace("%2F", "/", rawurlencode(implode(',', $object)));
        } else {
            return str_replace("%2F", "/", rawurlencode($object));
        }
	}


	/**
	 * Derialize a JSON string into an object
	 *
	 * @param object $object object or primitive to be deserialized
	 * @param string $class class name is passed as a string
	 * @return object an instance of $class
	 */
	public static function deserialize($object, $class) {

		if (in_array($class, array('string', 'int', 'float', 'bool'))) {
			settype($object, $class);
			return $object;
		} else {
			if(empty($class)){
				return;
			}
			$instance = new $class(); // this instantiates class named $class
			$classVars = get_class_vars($class);
		}

		foreach ($object as $property => $value) {

			// Need to handle possible pluralization differences
			$true_property = $property;

			if (! property_exists($class, $true_property)) {
				if (property_exists($class, ucfirst($property))) {
					$true_property = ucfirst($property);
				} else if (substr($property, -1) == 's') {
					$true_property = substr($property, 0, -1);
					if (! property_exists($class, $true_property)) {
						trigger_error("class $class has no property $property"
							. " or $true_property", E_USER_WARNING);
					}
				} else {
					trigger_error("class $class has no property $property",
						E_USER_WARNING);
				}
			}

			$type = $classVars['swaggerTypes'][$true_property];
			if (in_array($type, array('string', 'int', 'float', 'bool'))) {
				settype($value, $type);
				$instance->{$true_property} = $value;
			} elseif (preg_match("/array<(.*)>/", $type, $matches)) {
				$sub_class = $matches[1];
				$instance->{$true_property} = array();
				foreach ($value as $sub_property => $sub_value) {
					$instance->{$true_property}[] = self::deserialize($sub_value,
						$sub_class);
				}
			} else {
				$instance->{$true_property} = self::deserialize($value, $type);
			}
		}
		return $instance;
	}

        public static function object_to_array($data) {
            if (is_array($data) || is_object($data))
            {
                $result = array();
                foreach ($data as $key => $value)
                {
                    if(!is_null($value)){
                        $result[$key] = self::object_to_array($value);
                    }
                }
                return $result;
            }
            return $data;
        }

	public function sign($url) {
		$urlParts = parse_url($url);
		$url = $url . (empty($urlParts['query']) ? "?" : "&") . "clientkey=" . $this->clientKey;
		$signature = base64_encode(hash_hmac("sha1", strtolower($url), $this->privateKey, true));
		if(substr($signature, -1) == '='){
			$signature = substr($signature, 0, - 1);
		}
		$url = $url . '&signature=' . str_replace("+", "-", str_replace("/", "_", $signature));
		return $url;
	}

	public function signRequestBody($body) {
		$signature = base64_encode(hash_hmac("sha1", strtolower($body), $this->privateKey, true));
		if(substr($signature, -1) == '='){
			$signature = substr($signature, 0, - 1);
		}
		return str_replace("+", "-", str_replace("/", "_", $signature));
	}

}


?>

