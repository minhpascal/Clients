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

namespace VestorlyClient;

class NewslettersettingsApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new APIClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }
  }

  private $apiClient; // instance of the APIClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * findNewsletterSettings
   *
   * 
   *
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @return NewsletterSettings
   */
   public function findNewsletterSettings($vestorly_auth) {
      
      // verify the required parameter 'vestorly_auth' is set
      if ($vestorly_auth === null) {
        throw new \InvalidArgumentException('Missing the required parameter $vestorly_auth when calling findNewsletterSettings');
      }
      

      // parse inputs
      $resourcePath = "/newsletter_settings";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly_auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'NewsletterSettings');
      return $responseObject;
  }
  
  /**
   * findNewsletterSettingsByID
   *
   * 
   *
   * @param string $id Mongo ID of newsletter settings to fetch (required)
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @return Newslettersettingresponse
   */
   public function findNewsletterSettingsByID($id, $vestorly_auth) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling findNewsletterSettingsByID');
      }
      
      // verify the required parameter 'vestorly_auth' is set
      if ($vestorly_auth === null) {
        throw new \InvalidArgumentException('Missing the required parameter $vestorly_auth when calling findNewsletterSettingsByID');
      }
      

      // parse inputs
      $resourcePath = "/newsletter_settings/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly_auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }
      
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'Newslettersettingresponse');
      return $responseObject;
  }
  
  /**
   * updateNewsletterSettingsByID
   *
   * 
   *
   * @param string $id Mongo ID of newsletter settings to update (required)
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @param NewsletterSettingsInput $newsletter_setting newsletter settings (required)
   * @return Newslettersettingresponse
   */
   public function updateNewsletterSettingsByID($id, $vestorly_auth, $newsletter_setting) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling updateNewsletterSettingsByID');
      }
      
      // verify the required parameter 'vestorly_auth' is set
      if ($vestorly_auth === null) {
        throw new \InvalidArgumentException('Missing the required parameter $vestorly_auth when calling updateNewsletterSettingsByID');
      }
      
      // verify the required parameter 'newsletter_setting' is set
      if ($newsletter_setting === null) {
        throw new \InvalidArgumentException('Missing the required parameter $newsletter_setting when calling updateNewsletterSettingsByID');
      }
      

      // parse inputs
      $resourcePath = "/newsletter_settings/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "PUT";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly_auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }
      
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      // body params
      $_tempBody = null;
      if (isset($newsletter_setting)) {
        $_tempBody = $newsletter_setting;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'Newslettersettingresponse');
      return $responseObject;
  }
  

}
