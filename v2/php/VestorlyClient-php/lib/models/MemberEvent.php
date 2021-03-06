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

class MemberEvent implements ArrayAccess {
  static $swaggerTypes = array(
      '_id' => 'string',
      'created_at' => 'string',
      'type' => 'string',
      'source' => 'string',
      'referer' => 'string',
      'original_url' => 'string',
      'originator_email' => 'string',
      'originator_name' => 'string',
      'parent_originator_id' => 'string',
      'parent_event_id' => 'string',
      'originator_type' => 'string',
      'originator_group_id' => 'string',
      'event_type' => 'string',
      'event_source' => 'string',
      'content_url' => 'string',
      'event_date' => 'string',
      'username' => 'string',
      'member_id' => 'string',
      'originator_id' => 'string',
      'subject_id' => 'string'
  );

  static $attributeMap = array(
      '_id' => '_id',
      'created_at' => 'created_at',
      'type' => 'type',
      'source' => 'source',
      'referer' => 'referer',
      'original_url' => 'original_url',
      'originator_email' => 'originator_email',
      'originator_name' => 'originator_name',
      'parent_originator_id' => 'parent_originator_id',
      'parent_event_id' => 'parent_event_id',
      'originator_type' => 'originator_type',
      'originator_group_id' => 'originator_group_id',
      'event_type' => 'event_type',
      'event_source' => 'event_source',
      'content_url' => 'content_url',
      'event_date' => 'event_date',
      'username' => 'username',
      'member_id' => 'member_id',
      'originator_id' => 'originator_id',
      'subject_id' => 'subject_id'
  );

  
  public $_id; /* string */
  public $created_at; /* string */
  public $type; /* string */
  public $source; /* string */
  public $referer; /* string */
  public $original_url; /* string */
  public $originator_email; /* string */
  public $originator_name; /* string */
  public $parent_originator_id; /* string */
  public $parent_event_id; /* string */
  public $originator_type; /* string */
  public $originator_group_id; /* string */
  public $event_type; /* string */
  public $event_source; /* string */
  public $content_url; /* string */
  public $event_date; /* string */
  public $username; /* string */
  public $member_id; /* string */
  public $originator_id; /* string */
  public $subject_id; /* string */

  public function __construct(array $data = null) {
    $this->_id = $data["_id"];
    $this->created_at = $data["created_at"];
    $this->type = $data["type"];
    $this->source = $data["source"];
    $this->referer = $data["referer"];
    $this->original_url = $data["original_url"];
    $this->originator_email = $data["originator_email"];
    $this->originator_name = $data["originator_name"];
    $this->parent_originator_id = $data["parent_originator_id"];
    $this->parent_event_id = $data["parent_event_id"];
    $this->originator_type = $data["originator_type"];
    $this->originator_group_id = $data["originator_group_id"];
    $this->event_type = $data["event_type"];
    $this->event_source = $data["event_source"];
    $this->content_url = $data["content_url"];
    $this->event_date = $data["event_date"];
    $this->username = $data["username"];
    $this->member_id = $data["member_id"];
    $this->originator_id = $data["originator_id"];
    $this->subject_id = $data["subject_id"];
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
