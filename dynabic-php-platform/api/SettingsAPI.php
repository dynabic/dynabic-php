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

class SettingsAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}



	/**
	 * GetSettings
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  
	 * @return Array<SettingResponse> {@link SettingResponse} 
	 * @throws APIException 
	 */

	 public function GetSettings($siteSubdomain) {

		//parse inputs
		$resourcePath = "/settings/{siteSubdomain}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		
        $responseObjects = array();
        foreach ($response as $object) {
          $responseObjects[] = $this->apiClient->deserialize($object, 'SettingResponse');
        }
        return $responseObjects;				
	 }



	/**
	 * GetSettingById
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param settingId  setting Id
   *  
	 * @return SettingResponse {@link SettingResponse} 
	 * @throws APIException 
	 */

	 public function GetSettingById($siteSubdomain, $settingId) {

		//parse inputs
		$resourcePath = "/settings/{siteSubdomain}/{settingId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($settingId != null) {
			$resourcePath = str_replace("{settingId}", $this->apiClient->toPathValue($settingId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'SettingResponse');
		return $responseObject;
				
				
	 }



	/**
	 * GetSettingByName
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param settingName  setting Name
   *  
	 * @return SettingResponse {@link SettingResponse} 
	 * @throws APIException 
	 */

	 public function GetSettingByName($siteSubdomain, $settingName) {

		//parse inputs
		$resourcePath = "/settings/{siteSubdomain}/name={settingName}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($settingName != null) {
			$resourcePath = str_replace("{settingName}", $this->apiClient->toPathValue($settingName), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'SettingResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateSetting
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param settingId  setting Id
   *  @param postData  setting Request
   *  
	 * @return SettingResponse {@link SettingResponse} 
	 * @throws APIException 
	 */

	 public function UpdateSetting($siteSubdomain, $settingId, $postData) {

		//parse inputs
		$resourcePath = "/settings/{siteSubdomain}/{settingId}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($settingId != null) {
			$resourcePath = str_replace("{settingId}", $this->apiClient->toPathValue($settingId), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'SettingResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateSettingWithExplicitParameters
	 *
	 * 
	 * 
   * @param settingsSettingsInput  
   *  
	 * @return SettingResponse {@link SettingResponse} 
	 * @throws APIException 
	 */

	 public function UpdateSettingWithExplicitParameters($settingsSettingsInput) {

		//parse inputs
		$resourcePath = "/settings/{siteSubdomain}/id={settingId}/name={settingName}/value={settingValue}/description={settingDescription}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
	
		

		if($settingsSettingsInput != null && $settingsSettingsInput->siteSubdomain != null) {
		 	$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($settingsSettingsInput->siteSubdomain), $resourcePath);	
		}

		if($settingsSettingsInput != null && $settingsSettingsInput->settingId != null) {
		 	$resourcePath = str_replace("{settingId}", $this->apiClient->toPathValue($settingsSettingsInput->settingId), $resourcePath);	
		}

		if($settingsSettingsInput != null && $settingsSettingsInput->settingName != null) {
		 	$resourcePath = str_replace("{settingName}", $this->apiClient->toPathValue($settingsSettingsInput->settingName), $resourcePath);	
		}

		if($settingsSettingsInput != null && $settingsSettingsInput->settingValue != null) {
		 	$resourcePath = str_replace("{settingValue}", $this->apiClient->toPathValue($settingsSettingsInput->settingValue), $resourcePath);	
		}

		if($settingsSettingsInput != null && $settingsSettingsInput->settingDescription != null) {
		 	$resourcePath = str_replace("{settingDescription}", $this->apiClient->toPathValue($settingsSettingsInput->settingDescription), $resourcePath);	
		}

	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'SettingResponse');
		return $responseObject;
				
				
	 }



	/**
	 * UpdateSettingWithExplicitParameters2
	 *
	 * 
	 * 
   * @param siteSubdomain  site Subdomain
   *  @param settingId  setting Id
   *  @param settingValue  setting Value
   *  
	 * @return SettingResponse {@link SettingResponse} 
	 * @throws APIException 
	 */

	 public function UpdateSettingWithExplicitParameters2($siteSubdomain, $settingId, $settingValue) {

		//parse inputs
		$resourcePath = "/settings/{siteSubdomain}/id={settingId}/value={settingValue}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		

		if($siteSubdomain != null) {
			$resourcePath = str_replace("{siteSubdomain}", $this->apiClient->toPathValue($siteSubdomain), $resourcePath);
		}

		if($settingId != null) {
			$resourcePath = str_replace("{settingId}", $this->apiClient->toPathValue($settingId), $resourcePath);
		}

		if($settingValue != null) {
			$resourcePath = str_replace("{settingValue}", $this->apiClient->toPathValue($settingValue), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'SettingResponse');
		return $responseObject;
				
				
	 }



	/**
	 * GetDefaultSetting
	 *
	 * 
	 * 
   * @param settingName  setting Name
   *  
	 * @return SettingResponse {@link SettingResponse} 
	 * @throws APIException 
	 */

	 public function GetDefaultSetting($settingName) {

		//parse inputs
		$resourcePath = "/settings/default/{settingName}.{format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		

		if($settingName != null) {
			$resourcePath = str_replace("{settingName}", $this->apiClient->toPathValue($settingName), $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'SettingResponse');
		return $responseObject;
				
				
	 }



}