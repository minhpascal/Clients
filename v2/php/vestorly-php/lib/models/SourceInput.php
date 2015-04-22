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

namespace Vestorly\models;

use \ArrayAccess;

class SourceInput implements ArrayAccess {
  static $swaggerTypes = array(
      'name' => 'string',
      'url' => 'string',
      'logo_url' => 'string',
      'enabled' => 'boolean',
      'custom_rss_feed' => 'boolean',
      'rss_publisher' => 'string'
  );

  static $attributeMap = array(
      'name' => 'name',
      'url' => 'url',
      'logo_url' => 'logo_url',
      'enabled' => 'enabled',
      'custom_rss_feed' => 'custom_rss_feed',
      'rss_publisher' => 'rss_publisher'
  );

  
  public $name; /* string */
  public $url; /* string */
  public $logo_url; /* string */
  public $enabled; /* boolean */
  public $custom_rss_feed; /* boolean */
  public $rss_publisher; /* string */

  public function __construct(array $data = null) {
    $this->name = $data["name"];
    $this->url = $data["url"];
    $this->logo_url = $data["logo_url"];
    $this->enabled = $data["enabled"];
    $this->custom_rss_feed = $data["custom_rss_feed"];
    $this->rss_publisher = $data["rss_publisher"];
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
