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
class ProductPricingPlanPaymentScheduleResponse {

  static $swaggerTypes = array(    
    'id' => 'int',
    'frequency_recurrence_factor' => 'int',
    'frequency_interval' => 'int',
    'subscription_period_change' => 'float',
    'name' => 'string',
    'frequency_relative_interval' => 'string',
    'frequency_type' => 'string',
    'pricing_plan_id' => 'int',
    'end_date_offset_days' => 'int',
    'start_date_offset_days' => 'int'   
    );



    /**
     * 
     */
	 public $id;// int



    /**
     * 
     */
	 public $frequency_recurrence_factor;// int



    /**
     * 
     */
	 public $frequency_interval;// int



    /**
     * 
     */
	 public $subscription_period_change;// float



    /**
     * 
     */
	 public $name;// string



    /**
     * 
     */
	 public $frequency_relative_interval;// string



    /**
     * 
     */
	 public $frequency_type;// string



    /**
     * 
     */
	 public $pricing_plan_id;// int



    /**
     * 
     */
	 public $end_date_offset_days;// int



    /**
     * 
     */
	 public $start_date_offset_days;// int


}

?>