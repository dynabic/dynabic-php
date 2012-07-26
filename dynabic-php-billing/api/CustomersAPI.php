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

class CustomersAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}



	/**
	 * GetAllCustomers
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param pageNumber  page number
   *  @param pageSize  page size
   *  
	 * @return Array<CustomerResponse> {@link CustomerResponse} 
	 * @throws APIException 
	 */

	 public function GetAllCustomers($siteSubdomain, $pageNumber, $pageSize) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomain}.{format}?pageNumber={pageNumber}&pageSize={pageSize}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($pageNumber != null) {
			$resourcePath = str_replace("{pageNumber}", $this->apiClient->toPathValue($pageNumber), $resourcePath);
		}

		if($pageSize != null) {
			$resourcePath = str_replace("{pageSize}", $this->apiClient->toPathValue($pageSize), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'CustomerResponse');
        }
        return $responseObjects;				
	 }



	/**
	 * GetCustomer
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  
	 * @return CustomerResponse {@link CustomerResponse} 
	 * @throws APIException 
	 */

	 public function GetCustomer($customerId) {

		//parse inputs
		$resourcePath = "/customers/byid/{customerId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CustomerResponse');
		return $responseObject;
				
				
	 }



	/**
	 * GetCustomerByReferenceId
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param referenceId  reference Id
   *  
	 * @return CustomerResponse {@link CustomerResponse} 
	 * @throws APIException 
	 */

	 public function GetCustomerByReferenceId($siteSubdomain, $referenceId) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomain}/reference-id/{referenceId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($referenceId != null) {
			$resourcePath = str_replace("{referenceId}", $this->apiClient->toPathValue($referenceId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CustomerResponse');
		return $responseObject;
				
				
	 }



	/**
	 * AddCustomer
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param postData  new Customer
   *  
	 * @return CustomerResponse {@link CustomerResponse} 
	 * @throws APIException 
	 */

	 public function AddCustomer($siteSubdomain, $postData) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomain}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CustomerResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateCustomer
	 *
	 * 
	 * 
   * @param postData  updated Customer
   *  @param customerId  customer Id
   *  
	 * @return CustomerResponse {@link CustomerResponse} 
	 * @throws APIException 
	 */

	 public function UpdateCustomer($postData, $customerId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CustomerResponse');
		return $responseObject;
				
				
	 }



	/**
	 * DeleteCustomer
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  
	 * @throws APIException 
	 */

	 public function DeleteCustomer($customerId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }



	/**
	 * GetCreditCard
	 *
	 * 
	 * 
   * @param creditCardId  credit Card Id
   *  
	 * @return CreditCardResponse {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function GetCreditCard($creditCardId) {

		//parse inputs
		$resourcePath = "/customers/credit-card/{creditCardId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($creditCardId != null) {
			$resourcePath = str_replace("{creditCardId}", $this->apiClient->toPathValue($creditCardId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreditCardResponse');
		return $responseObject;
				
				
	 }



	/**
	 * GetCreditCards
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  
	 * @return Array<CreditCardResponse> {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function GetCreditCards($customerId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/credit-cards.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'CreditCardResponse');
        }
        return $responseObjects;				
	 }



	/**
	 * GetCreditCardsByReferenceId
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param customerReferenceId  customer Reference Id
   *  
	 * @return Array<CreditCardResponse> {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function GetCreditCardsByReferenceId($siteSubdomain, $customerReferenceId) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomain}/reference-id/{customerReferenceId}/credit-cards.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($customerReferenceId != null) {
			$resourcePath = str_replace("{customerReferenceId}", $this->apiClient->toPathValue($customerReferenceId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'CreditCardResponse');
        }
        return $responseObjects;				
	 }



	/**
	 * GetCustomersFirstCreditCard
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  
	 * @return CreditCardResponse {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function GetCustomersFirstCreditCard($customerId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/credit-card.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreditCardResponse');
		return $responseObject;
				
				
	 }



	/**
	 * GetFirstCreditCardForCustomerByReferenceId
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param customerReferenceId  customer Reference Id
   *  
	 * @return CreditCardResponse {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function GetFirstCreditCardForCustomerByReferenceId($siteSubdomain, $customerReferenceId) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomain}/reference-id/{customerReferenceId}/credit-card.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($customerReferenceId != null) {
			$resourcePath = str_replace("{customerReferenceId}", $this->apiClient->toPathValue($customerReferenceId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreditCardResponse');
		return $responseObject;
				
				
	 }



	/**
	 * AddCreditCard
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  @param postData  new Credit Card
   *  
	 * @return CreditCardResponse {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function AddCreditCard($customerId, $postData) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/credit-card.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreditCardResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateCreditCard
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  @param creditCardId  credit Card Id
   *  @param postData  updated Credit Card
   *  
	 * @return CreditCardResponse {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function UpdateCreditCard($customerId, $creditCardId, $postData) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/credit-card/{creditCardId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

		if($creditCardId != null) {
			$resourcePath = str_replace("{creditCardId}", $this->apiClient->toPathValue($creditCardId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreditCardResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateCreditCardByCustomerReferenceId
	 *
	 * 
	 * 
   * @param siteSubdomanin  site Subdomanin
   *  @param customerReferenceId  customer Reference Id
   *  @param creditCardId  credit Card Id
   *  @param postData  updated Credit Card
   *  
	 * @return CreditCardResponse {@link CreditCardResponse} 
	 * @throws APIException 
	 */

	 public function UpdateCreditCardByCustomerReferenceId($siteSubdomanin, $customerReferenceId, $creditCardId, $postData) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomanin}/reference-id/{customerReferenceId}/credit-card/{creditCardId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomanin != null) {
			$resourcePath = str_replace("{siteSubdomanin}", $this->apiClient->toPathValue($siteSubdomanin), $resourcePath);
		}

		if($customerReferenceId != null) {
			$resourcePath = str_replace("{customerReferenceId}", $this->apiClient->toPathValue($customerReferenceId), $resourcePath);
		}

		if($creditCardId != null) {
			$resourcePath = str_replace("{creditCardId}", $this->apiClient->toPathValue($creditCardId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreditCardResponse');
		return $responseObject;
				
				
	 }



	/**
	 * DeleteCreditCard
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  @param creditCardId  credit Card Id
   *  
	 * @throws APIException 
	 */

	 public function DeleteCreditCard($customerId, $creditCardId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/credit-card/{creditCardId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

		if($creditCardId != null) {
			$resourcePath = str_replace("{creditCardId}", $this->apiClient->toPathValue($creditCardId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }



	/**
	 * GetBillingAddresses
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  
	 * @return Array<AddressResponse> {@link AddressResponse} 
	 * @throws APIException 
	 */

	 public function GetBillingAddresses($customerId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/billing-addresses.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'AddressResponse');
        }
        return $responseObjects;				
	 }



	/**
	 * GetBillingAddresses
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  
	 * @return AddressResponse {@link AddressResponse} 
	 * @throws APIException 
	 */

	 public function GetBillingAddress($customerId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/first-billing-address.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddressResponse');
		return $responseObject;
				
				
	 }



	/**
	 * GetFirstBillingAddressForCustomerByReferenceId
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param customerReferenceId  customer Reference Id
   *  
	 * @return AddressResponse {@link AddressResponse} 
	 * @throws APIException 
	 */

	 public function GetFirstBillingAddressForCustomerByReferenceId($siteSubdomain, $customerReferenceId) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomain}/reference-id/{customerReferenceId}/first-billing-address.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($customerReferenceId != null) {
			$resourcePath = str_replace("{customerReferenceId}", $this->apiClient->toPathValue($customerReferenceId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddressResponse');
		return $responseObject;
				
				
	 }



	/**
	 * AddBillingAddress
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  @param postData  new Billing Address
   *  
	 * @return AddressResponse {@link AddressResponse} 
	 * @throws APIException 
	 */

	 public function AddBillingAddress($customerId, $postData) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/billing-address.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddressResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateBillingAddress
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  @param billingAddressId  billing Address Id
   *  @param postData  updated Billing Address
   *  
	 * @return AddressResponse {@link AddressResponse} 
	 * @throws APIException 
	 */

	 public function UpdateBillingAddress($customerId, $billingAddressId, $postData) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/billing-address/{billingAddressId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

		if($billingAddressId != null) {
			$resourcePath = str_replace("{billingAddressId}", $this->apiClient->toPathValue($billingAddressId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddressResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateBillingAddressByCustomerReferenceId
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param customerReferenceId  customer Reference Id
   *  @param billingAddressId  billing Address Id
   *  @param postData  updated Billing Address
   *  
	 * @return AddressResponse {@link AddressResponse} 
	 * @throws APIException 
	 */

	 public function UpdateBillingAddressByCustomerReferenceId($siteSubdomain, $customerReferenceId, $billingAddressId, $postData) {

		//parse inputs
		$resourcePath = "/customers/{siteSubdomain}/reference-id/{customerReferenceId}/billing-address/{billingAddressId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($customerReferenceId != null) {
			$resourcePath = str_replace("{customerReferenceId}", $this->apiClient->toPathValue($customerReferenceId), $resourcePath);
		}

		if($billingAddressId != null) {
			$resourcePath = str_replace("{billingAddressId}", $this->apiClient->toPathValue($billingAddressId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddressResponse');
		return $responseObject;
				
				
	 }



	/**
	 * DeleteBillingAddress
	 *
	 * 
	 * 
   * @param customerId  customer Id
   *  @param billingAddressId  billing Address Id
   *  
	 * @throws APIException 
	 */

	 public function DeleteBillingAddress($customerId, $billingAddressId) {

		//parse inputs
		$resourcePath = "/customers/{customerId}/billing-address/{billingAddressId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		

		if($customerId != null) {
			$resourcePath = str_replace("{customerId}", $this->apiClient->toPathValue($customerId), $resourcePath);
		}

		if($billingAddressId != null) {
			$resourcePath = str_replace("{billingAddressId}", $this->apiClient->toPathValue($billingAddressId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }



}