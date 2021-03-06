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

namespace VestorlyClient\models;

use \ArrayAccess;

class Group implements ArrayAccess {
  static $swaggerTypes = array(
      '_id' => 'string',
      'name' => 'string',
      'is_default' => 'boolean',
      'is_hidden' => 'boolean',
      'new_weekly_mailer_content' => 'string',
      'newsletter_subject' => 'string',
      'autopublish' => 'boolean',
      'number_articles_per_group' => 'int',
      'number_articles_per_newsletter' => 'int'
  );

  static $attributeMap = array(
      '_id' => '_id',
      'name' => 'name',
      'is_default' => 'is_default',
      'is_hidden' => 'is_hidden',
      'new_weekly_mailer_content' => 'new_weekly_mailer_content',
      'newsletter_subject' => 'newsletter_subject',
      'autopublish' => 'autopublish',
      'number_articles_per_group' => 'number_articles_per_group',
      'number_articles_per_newsletter' => 'number_articles_per_newsletter'
  );

  
  public $_id; /* string */
  public $name; /* string */
  public $is_default; /* boolean */
  public $is_hidden; /* boolean */
  public $new_weekly_mailer_content; /* string */
  public $newsletter_subject; /* string */
  public $autopublish; /* boolean */
  public $number_articles_per_group; /* int */
  public $number_articles_per_newsletter; /* int */

  public function __construct(array $data = null) {
    $this->_id = $data["_id"];
    $this->name = $data["name"];
    $this->is_default = $data["is_default"];
    $this->is_hidden = $data["is_hidden"];
    $this->new_weekly_mailer_content = $data["new_weekly_mailer_content"];
    $this->newsletter_subject = $data["newsletter_subject"];
    $this->autopublish = $data["autopublish"];
    $this->number_articles_per_group = $data["number_articles_per_group"];
    $this->number_articles_per_newsletter = $data["number_articles_per_newsletter"];
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
