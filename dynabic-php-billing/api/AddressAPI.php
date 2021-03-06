<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
 
/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

class AddressAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}



	/**
	 * GetAddressXml
	 *
	 * 
	 * 
   * @param addressId  address id
   *  
	 * @return Address {@link Address} 
	 * @throws APIException 
	 */

	 public function GetAddressXml($addressId) {

		//parse inputs
		$resourcePath = "/address/{addressId}.xml";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($addressId != null) {
			$resourcePath = str_replace("{addressId}", $this->apiClient->toPathValue($addressId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'Address');
		return $responseObject;
				
				
	 }



	/**
	 * GetAddressJson
	 *
	 * 
	 * 
   * @param addressId  address id
   *  
	 * @return Address {@link Address} 
	 * @throws APIException 
	 */

	 public function GetAddressJson($addressId) {

		//parse inputs
		$resourcePath = "/address/{addressId}.json";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($addressId != null) {
			$resourcePath = str_replace("{addressId}", $this->apiClient->toPathValue($addressId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'Address');
		return $responseObject;
				
				
	 }



}