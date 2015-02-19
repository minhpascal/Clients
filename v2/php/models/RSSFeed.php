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
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

class RSSFeed {
  static $swaggerTypes = array(
      '_id' => 'string',
      'name' => 'string',
      'category' => 'string',
      'url' => 'url',
      'logo_url' => 'url',
      'needs_sanitize' => 'string'
    );

  
  /**
  * Id of object
  */
  public $_id; /* string */
  /**
  * Name of rss feed
  */
  public $name; /* string */
  /**
  * Category of rss feed
  */
  public $category; /* string */
  /**
  * URL of rss feed
  */
  public $url; /* url */
  /**
  * Logo URL of rss feed
  */
  public $logo_url; /* url */
  /**
  * Does the feed need to be sanatized.
  */
  public $needs_sanitize; /* string */
}