<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
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

namespace SwaggerPetstore\models;

use \ArrayAccess;

class Event implements ArrayAccess {
  static $swaggerTypes = array(
      '_id' => 'string',
      'referrer' => 'string',
      'original_url' => 'string',
      'originator_email' => 'string',
      'subject_email' => 'string',
      'advisor_email' => 'string',
      'originator_group_name' => 'string',
      'newsletter' => 'string'
  );

  static $attributeMap = array(
      '_id' => '_id',
      'referrer' => 'referrer',
      'original_url' => 'original_url',
      'originator_email' => 'originator_email',
      'subject_email' => 'subject_email',
      'advisor_email' => 'advisor_email',
      'originator_group_name' => 'originator_group_name',
      'newsletter' => 'newsletter'
  );

  
  public $_id; /* string */
  public $referrer; /* string */
  public $original_url; /* string */
  public $originator_email; /* string */
  public $subject_email; /* string */
  public $advisor_email; /* string */
  public $originator_group_name; /* string */
  public $newsletter; /* string */

  public function __construct(array $data = null) {
    $this->_id = $data["_id"];
    $this->referrer = $data["referrer"];
    $this->original_url = $data["original_url"];
    $this->originator_email = $data["originator_email"];
    $this->subject_email = $data["subject_email"];
    $this->advisor_email = $data["advisor_email"];
    $this->originator_group_name = $data["originator_group_name"];
    $this->newsletter = $data["newsletter"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
