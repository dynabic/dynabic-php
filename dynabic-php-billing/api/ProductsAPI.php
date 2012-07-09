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

class ProductsAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}


	/**
	 * GetProductsBySite
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param isArchived  is Archived
   *  @param pageNumber  page number
   *  @param pageSize  page size
   *  
	 * @return Array<ProductResponse> {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function GetProductsBySite($siteSubdomain, $isArchived, $pageNumber, $pageSize) {

		//parse inputs
		$resourcePath = "/products/bysite/{siteSubdomain}/{format}?isArchived={isArchived}&pageNumber={pageNumber}&pageSize={pageSize}";
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
          $responseObjects[] = $this->apiClient->deserialize($object, 'ProductResponse');
        }
        return $responseObjects;				
	 }


	/**
	 * GetProductsBySiteAndFamily
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param productFamilyName  product Family Name
   *  @param isArchived  is Archived
   *  
	 * @return Array<ProductResponse> {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function GetProductsBySiteAndFamily($siteSubdomain, $productFamilyName, $isArchived) {

		//parse inputs
		$resourcePath = "/products/bysite/{siteSubdomain}/[{productFamilyName}]/{format}?isArchived={isArchived}";
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
		if($isArchived != null) {
			$resourcePath = str_replace("{isArchived}", $this->apiClient->toPathValue($isArchived), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'ProductResponse');
        }
        return $responseObjects;				
	 }


	/**
	 * GetProductsBySiteAndProductName
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param productName  product Name
   *  
	 * @return Array<ProductResponse> {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function GetProductsBySiteAndProductName($siteSubdomain, $productName) {

		//parse inputs
		$resourcePath = "/products/bysite/{siteSubdomain}/[{productName}].{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}
		if($productName != null) {
			$resourcePath = str_replace("{productName}", $this->apiClient->toPathValue($productName), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'ProductResponse');
        }
        return $responseObjects;				
	 }


	/**
	 * GetProductByApiRef
	 *
	 * 
	 * 
   * @param siteId  site Id
   *  @param apiRef  api Ref
   *  
	 * @return ProductResponse {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function GetProductByApiRef($siteId, $apiRef) {

		//parse inputs
		$resourcePath = "/products/byapiref/{siteId}/{apiRef}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($siteId != null) {
			$resourcePath = str_replace("{siteId}", $this->apiClient->toPathValue($siteId), $resourcePath);
		}
		if($apiRef != null) {
			$resourcePath = str_replace("{apiRef}", $this->apiClient->toPathValue($apiRef), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductResponse');
		return $responseObject;
				
				
	 }


	/**
	 * GetProductsByFamilyId
	 *
	 * 
	 * 
   * @param productFamilyId  product Family Id
   *  @param isArchived  is Archived
   *  
	 * @return Array<ProductResponse> {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function GetProductsByFamilyId($productFamilyId, $isArchived) {

		//parse inputs
		$resourcePath = "/products/byfamily/{productFamilyId}/{format}?isArchived={isArchived}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productFamilyId != null) {
			$resourcePath = str_replace("{productFamilyId}", $this->apiClient->toPathValue($productFamilyId), $resourcePath);
		}
		if($isArchived != null) {
			$resourcePath = str_replace("{isArchived}", $this->apiClient->toPathValue($isArchived), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'ProductResponse');
        }
        return $responseObjects;				
	 }


	/**
	 * GetProductByFamilyIdAndProductName
	 *
	 * 
	 * 
   * @param productFamilyId  product Family Id
   *  @param productName  product Name
   *  
	 * @return ProductResponse {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function GetProductByFamilyIdAndProductName($productFamilyId, $productName) {

		//parse inputs
		$resourcePath = "/products/byfamily/{productFamilyId}/[{productName}].{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productFamilyId != null) {
			$resourcePath = str_replace("{productFamilyId}", $this->apiClient->toPathValue($productFamilyId), $resourcePath);
		}
		if($productName != null) {
			$resourcePath = str_replace("{productName}", $this->apiClient->toPathValue($productName), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductResponse');
		return $responseObject;
				
				
	 }


	/**
	 * GetProductById
	 *
	 * 
	 * 
   * @param productId  product Id
   *  
	 * @return ProductResponse {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function GetProductById($productId) {

		//parse inputs
		$resourcePath = "/products/{productId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productId != null) {
			$resourcePath = str_replace("{productId}", $this->apiClient->toPathValue($productId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductResponse');
		return $responseObject;
				
				
	 }


	/**
	 * AddProduct
	 *
	 * 
	 * 
   * @param postData  new Product
   *  
	 * @return ProductResponse {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function AddProduct($postData) {

		//parse inputs
		$resourcePath = "/products/{format}";
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
		$responseObject = $this->apiClient->deserialize($response, 'ProductResponse');
		return $responseObject;
				
				
	 }


	/**
	 * UpdateProduct
	 *
	 * 
	 * 
   * @param postData  updated Product
   *  @param productId  product Id
   *  
	 * @return ProductResponse {@link ProductResponse} 
	 * @throws APIException 
	 */

	 public function UpdateProduct($postData, $productId) {

		//parse inputs
		$resourcePath = "/products/{productId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productId != null) {
			$resourcePath = str_replace("{productId}", $this->apiClient->toPathValue($productId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ProductResponse');
		return $responseObject;
				
				
	 }


	/**
	 * DeleteProduct
	 *
	 * 
	 * 
   * @param productId  product Id
   *  
	 * @throws APIException 
	 */

	 public function DeleteProduct($productId) {

		//parse inputs
		$resourcePath = "/products/{productId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productId != null) {
			$resourcePath = str_replace("{productId}", $this->apiClient->toPathValue($productId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }


	/**
	 * ArchiveProduct
	 *
	 * 
	 * 
   * @param productId  product Id
   *  
	 * @throws APIException 
	 */

	 public function ArchiveProduct($productId) {

		//parse inputs
		$resourcePath = "/products/archive/{productId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productId != null) {
			$resourcePath = str_replace("{productId}", $this->apiClient->toPathValue($productId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }


	/**
	 * ActivateProduct
	 *
	 * 
	 * 
   * @param productId  product Id
   *  
	 * @throws APIException 
	 */

	 public function ActivateProduct($productId) {

		//parse inputs
		$resourcePath = "/products/activate/{productId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($productId != null) {
			$resourcePath = str_replace("{productId}", $this->apiClient->toPathValue($productId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
		
	 }



}