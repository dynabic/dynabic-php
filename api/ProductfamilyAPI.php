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

class ProductfamilyAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}


	/**
	 * GetProductFamilies
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param isArchived  is Archived
   *  @param pageNumber  page number
   *  @param pageSize  page size
   *  
	 * @return Array<ProductFamilyResponse> {@link ProductFamilyResponse} 
	 * @throws APIException 
	 */

	 public function GetProductFamilies($siteSubdomain, $isArchived, $pageNumber, $pageSize) {

		//parse inputs
		$resourcePath = "/productfamily/{siteSubdomain}/{format}?isArchived={isArchived}&pageNumber={pageNumber}&pageSize={pageSize}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}
		if($isArchived != null) {
			$resourcePath = str_replace("{isArchived}", $this->apiClient->toPathValue($isArchived), $resourcePath);
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
          $responseObjects[] = $this->apiClient->deserialize($object, 'ProductFamilyResponse');
        }
        return $responseObjects;				
	 }


	/**
	 * GetProductFamilyById
	 *
	 * 
	 * 
   * @param productFamilyId  product Family Id
   *  
	 * @return ProductFamilyResponse {@link ProductFamilyResponse} 
	 * @throws APIException 
	 */

	 public function GetProductFamilyById($productFamilyId) {

		//parse inputs
		$resourcePath = "/productfamily/{productFamilyId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productFamilyId != null) {
			$resourcePath = str_replace("{productFamilyId}", $this->apiClient->toPathValue($productFamilyId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductFamilyResponse');
		return $responseObject;
				
				
	 }


	/**
	 * GetProductFamilyByName
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param productFamilyName  product Family Name
   *  
	 * @return ProductFamilyResponse {@link ProductFamilyResponse} 
	 * @throws APIException 
	 */

	 public function GetProductFamilyByName($siteSubdomain, $productFamilyName) {

		//parse inputs
		$resourcePath = "/productfamily/{siteSubdomain}/[{productFamilyName}].{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}
		if($productFamilyName != null) {
			$resourcePath = str_replace("{productFamilyName}", $this->apiClient->toPathValue($productFamilyName), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductFamilyResponse');
		return $responseObject;
				
				
	 }


	/**
	 * AddProductFamily
	 *
	 * 
	 * 
   * @param postData  new product Family
   *  
	 * @return ProductFamilyResponse {@link ProductFamilyResponse} 
	 * @throws APIException 
	 */

	 public function AddProductFamily($postData) {

		//parse inputs
		$resourcePath = "/productfamily/{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductFamilyResponse');
		return $responseObject;
				
				
	 }


	/**
	 * UpdateProductFamily
	 *
	 * 
	 * 
   * @param postData  updated Family
   *  @param productFamilyId  product Family Id
   *  
	 * @return ProductFamilyResponse {@link ProductFamilyResponse} 
	 * @throws APIException 
	 */

	 public function UpdateProductFamily($postData, $productFamilyId) {

		//parse inputs
		$resourcePath = "/productfamily/{productFamilyId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productFamilyId != null) {
			$resourcePath = str_replace("{productFamilyId}", $this->apiClient->toPathValue($productFamilyId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductFamilyResponse');
		return $responseObject;
				
				
	 }


	/**
	 * DeleteProductFamily
	 *
	 * 
	 * 
   * @param productFamilyId  product Family Id
   *  
	 * @throws APIException 
	 */

	 public function DeleteProductFamily($productFamilyId) {

		//parse inputs
		$resourcePath = "/productfamily/{productFamilyId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productFamilyId != null) {
			$resourcePath = str_replace("{productFamilyId}", $this->apiClient->toPathValue($productFamilyId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }


	/**
	 * ArchiveProductFamily
	 *
	 * 
	 * 
   * @param productFamilyId  product Family Id
   *  
	 * @throws APIException 
	 */

	 public function ArchiveProductFamily($productFamilyId) {

		//parse inputs
		$resourcePath = "/productfamily/archive/{productFamilyId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productFamilyId != null) {
			$resourcePath = str_replace("{productFamilyId}", $this->apiClient->toPathValue($productFamilyId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }


	/**
	 * ActivateProductFamily
	 *
	 * 
	 * 
   * @param productFamilyId  product Family Id
   *  @param activateProducts  activate Products
   *  
	 * @throws APIException 
	 */

	 public function ActivateProductFamily($productFamilyId, $activateProducts) {

		//parse inputs
		$resourcePath = "/productfamily/activate/{productFamilyId}?activateProducts={activateProducts}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productFamilyId != null) {
			$resourcePath = str_replace("{productFamilyId}", $this->apiClient->toPathValue($productFamilyId), $resourcePath);
		}
		if($activateProducts != null) {
			$resourcePath = str_replace("{activateProducts}", $this->apiClient->toPathValue($activateProducts), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }



}