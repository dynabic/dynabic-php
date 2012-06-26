<?php

include_once( dirname(__FILE__).'/../APIClient.php');
include_once( dirname(__FILE__).'/../CustomersAPI.php');

    $privateKey = "<PASTE_HERE>";
	$clientKey = "<PASTE_HERE>";
	$apiClient = new APIClient($privateKey, $clientKey, "http://stage-api.dynabic.com/billing");

	// GET
	$api = new CustomersAPI($apiClient);
	// $api->GetCustomer("14");

	// POST
	$postData = new CustomerRequest();
	$postData->first_name = "John";
	$postData->last_name = "Doe";
	$postData->email = "hopefullysome@nonexisting.email";
	$api->AddCustomer("test", $postData);

?>

