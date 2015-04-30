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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace Vestorly;

class ArticlesApi {

  function __construct($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * findArticles
   *
   * 
   *
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @param int $limit Limit on the number of articles to return (required)
   * @param string $text_query Search query parameter (required)
   * @param string $sort_direction Direction of sort (used with sort_by parameter) (required)
   * @param string $sort_by Field on model to sort by (required)
   * @return Articles
   */
   public function findArticles($vestorly_auth, $limit, $text_query, $sort_direction, $sort_by) {

      // parse inputs
      $resourcePath = "/articles";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = '';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly-auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($text_query !== null) {
        $queryParams['text_query'] = $this->apiClient->toQueryValue($text_query);
      }// query params
      if($sort_direction !== null) {
        $queryParams['sort_direction'] = $this->apiClient->toQueryValue($sort_direction);
      }// query params
      if($sort_by !== null) {
        $queryParams['sort_by'] = $this->apiClient->toQueryValue($sort_by);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") !== FALSE) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Articles');
  		return $responseObject;
  }
  
  /**
   * findArticleByID
   *
   * 
   *
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @param string $id Article Id to fetch (required)
   * @return Articleresponse
   */
   public function findArticleByID($vestorly_auth, $id) {

      // parse inputs
      $resourcePath = "/articles/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = '';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly-auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }
      
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") !== FALSE) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Articleresponse');
  		return $responseObject;
  }
  

}
