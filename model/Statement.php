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
class Statement {

  static $swaggerTypes = array(    
    'subscription_id' => 'int',
    'status' => 'string',
    'statement_date' => 'string',
    'current_charges' => 'float',
    'customer_first_name' => 'string',
    'billing_address_id' => 'int',
    'id' => 'int',
    'statement_details' => 'array<StatementDetail>',
    'customer_last_name' => 'string',
    'starting_balance' => 'float',
    'payments_and_credits' => 'float',
    'email' => 'string',
    'billing_start_date' => 'string',
    'billing_end_date' => 'string'   
    );


    /**
     * 
     */
	 public $subscription_id;// int


    /**
     * 
     */
	 public $status;// string


    /**
     * 
     */
	 public $statement_date;// string


    /**
     * 
     */
	 public $current_charges;// float


    /**
     * 
     */
	 public $customer_first_name;// string


    /**
     * 
     */
	 public $billing_address_id;// int


    /**
     * 
     */
	 public $id;// int


    /**
     * 
     */
	 public $statement_details =  array();// array<StatementDetail>


    /**
     * 
     */
	 public $customer_last_name;// string


    /**
     * 
     */
	 public $starting_balance;// float


    /**
     * 
     */
	 public $payments_and_credits;// float


    /**
     * 
     */
	 public $email;// string


    /**
     * 
     */
	 public $billing_start_date;// string


    /**
     * 
     */
	 public $billing_end_date;// string


}

?>