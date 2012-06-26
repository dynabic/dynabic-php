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
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class SubscriptionRequest {

  static $swaggerTypes = array(    
    'product_id' => 'int',
    'is_cancelled_at_end_of_period' => 'bool',
    'next_product' => 'ProductRequest',
    'next_product_pricing_plan' => 'PricingPlanRequest',
    'customer' => 'CustomerRequest',
    'next_assesment' => 'string',
    'cancellation_details' => 'string',
    'currency' => 'Currency',
    'billing_address_id' => 'int',
    'product' => 'ProductRequest',
    'product_pricing_plan' => 'PricingPlanRequest',
    'end_date' => 'string',
    'credit_card_id' => 'int',
    'credit_card' => 'CreditCardRequest',
    'current_ballance' => 'float',
    'pricing_plan_id' => 'int',
    'start_date' => 'string',
    'customer_id' => 'int',
    'billing_address' => 'AddressRequest',
    'subscription_items' => 'array<SubscriptionItemRequest>'   
    );


    /**
     * 
     */
	 public $product_id;// int


    /**
     * 
     */
	 public $is_cancelled_at_end_of_period;// bool


    /**
     * 
     */
	 public $next_product;// ProductRequest


    /**
     * 
     */
	 public $next_product_pricing_plan;// PricingPlanRequest


    /**
     * 
     */
	 public $customer;// CustomerRequest


    /**
     * 
     */
	 public $next_assesment;// string


    /**
     * 
     */
	 public $cancellation_details;// string


    /**
     * 
     */
	 public $currency;// Currency


    /**
     * 
     */
	 public $billing_address_id;// int


    /**
     * 
     */
	 public $product;// ProductRequest


    /**
     * 
     */
	 public $product_pricing_plan;// PricingPlanRequest


    /**
     * 
     */
	 public $end_date;// string


    /**
     * 
     */
	 public $credit_card_id;// int


    /**
     * 
     */
	 public $credit_card;// CreditCardRequest


    /**
     * 
     */
	 public $current_ballance;// float


    /**
     * 
     */
	 public $pricing_plan_id;// int


    /**
     * 
     */
	 public $start_date;// string


    /**
     * 
     */
	 public $customer_id;// int


    /**
     * 
     */
	 public $billing_address;// AddressRequest


    /**
     * 
     */
	 public $subscription_items =  array();// array<SubscriptionItemRequest>


}

?>