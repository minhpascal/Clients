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

class SessionsApi {

  function __construct($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * login
   *
   * 
   *
   * @param string $username Username in the vestorly platform (required)
   * @param string $password Password in Vestorly Platform (required)
   * @return Session
   */
   public function login($username, $password) {

      // parse inputs
      $resourcePath = "/sessions";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = '';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array('application/x-www-form-urlencoded',);
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($username !== null) {
        $queryParams['username'] = $this->apiClient->toQueryValue($username);
      }// query params
      if($password !== null) {
        $queryParams['password'] = $this->apiClient->toQueryValue($password);
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
  		                                                'Session');
  		return $responseObject;
  }
  
  /**
   * logout
   *
   * 
   *
   * @param string $vestorly_auth Authenication token (required)
   * @param string $id ID of pet to session (required)
   * @return Session
   */
   public function logout($vestorly_auth, $id) {

      // parse inputs
      $resourcePath = "/sessions/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "DELETE";
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
  		                                                'Session');
  		return $responseObject;
  }
  

}
