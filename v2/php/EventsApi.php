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
class EventsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  
	/**
	 * index
   *
	 * Read a list of events
   * vestorly-auth, string: Authentication token (required)
   * 
	 * @return void
	 */

   public function index($vestorly-auth) {

  		// parse inputs
  		$resourcePath = "api/events.json";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $headerParams['Accept'] = '';
      $headerParams['Content-Type'] = '';

      // query params
      if($vestorly-auth !== null) {
  		  $queryParams['vestorly-auth'] = $this->apiClient->toQueryValue($vestorly-auth);
  		}
      
      
      
      

      $body = $body ?: $formParams;

      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $body = http_build_query($body);
      }

  		// make the API Call
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'void');
  		return $responseObject;
  }
  
	/**
	 * create
   *
	 * Create a event
   * event, string: JSON block of event data (required)
   * 
	 * @return void
	 */

   public function create($event) {

  		// parse inputs
  		$resourcePath = "api/events.json";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $headerParams['Accept'] = '';
      $headerParams['Content-Type'] = '';

      
      
      
      
      if ($event !== null) {
        $formParams[event] = $event;
      }
      

      $body = $body ?: $formParams;

      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $body = http_build_query($body);
      }

  		// make the API Call
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'void');
  		return $responseObject;
  }
  
	/**
	 * show
   *
	 * Read a specific event
   * vestorly-auth, string: Authentication token (required)
   * * id, string: Id of event (required)
   * 
	 * @return void
	 */

   public function show($vestorly-auth, $id) {

  		// parse inputs
  		$resourcePath = "api/events/{id}.json";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $headerParams['Accept'] = '';
      $headerParams['Content-Type'] = '';

      // query params
      if($vestorly-auth !== null) {
  		  $queryParams['vestorly-auth'] = $this->apiClient->toQueryValue($vestorly-auth);
  		}
      
      // path params
      if($id !== null) {
  			$resourcePath = str_replace("{" . "id" . "}",
  			                            $this->apiClient->toPathValue($id), $resourcePath);
  		}
      
      

      $body = $body ?: $formParams;

      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $body = http_build_query($body);
      }

  		// make the API Call
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'void');
  		return $responseObject;
  }
  
	/**
	 * update
   *
	 * Create a event
   * id, string: Id of g (required)
   * * event, string: JSON block of event data (required)
   * 
	 * @return void
	 */

   public function update($id, $event) {

  		// parse inputs
  		$resourcePath = "api/events/{id}.json";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $headerParams['Accept'] = '';
      $headerParams['Content-Type'] = '';

      
      
      // path params
      if($id !== null) {
  			$resourcePath = str_replace("{" . "id" . "}",
  			                            $this->apiClient->toPathValue($id), $resourcePath);
  		}
      
      if ($event !== null) {
        $formParams[event] = $event;
      }
      

      $body = $body ?: $formParams;

      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $body = http_build_query($body);
      }

  		// make the API Call
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'void');
  		return $responseObject;
  }
  

}