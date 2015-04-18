#!/usr/bin/env python
# coding: utf-8

"""
PostsApi.py
Copyright 2015 Reverb Technologies, Inc.

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.

NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
"""
import sys
import os
import urllib

from models import *


class PostsApi(object):

    def __init__(self, apiClient):
      self.apiClient = apiClient

    
    
    def findPosts(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            filter_by, str: Filter post by parameters (required)
            
            
        
        Returns: Posts
        """

        allParams = ['vestorly_auth', 'filter_by']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method findPosts" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/posts'
        resourcePath = resourcePath.replace('{format}', 'json')
        method = 'GET'

        queryParams = {}
        headerParams = {}
        formParams = {}
        files = {}
        bodyParam = None

        accepts = []
        headerParams['Accept'] = ', '.join(accepts)

        content_types = []
        headerParams['Content-Type'] = content_types[0] if len(content_types) > 0 else 'application/json'

        
        if ('vestorly_auth' in params):
            queryParams['vestorly_auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        
        if ('filter_by' in params):
            queryParams['filter_by'] = self.apiClient.toPathValue(params['filter_by'])
        

        

        

        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Posts')
        return responseObject
        
        
        
    
    def createPost(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            post, str: Post (required)
            
            
        
        Returns: Post
        """

        allParams = ['vestorly_auth', 'post']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method createPost" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/posts'
        resourcePath = resourcePath.replace('{format}', 'json')
        method = 'POST'

        queryParams = {}
        headerParams = {}
        formParams = {}
        files = {}
        bodyParam = None

        accepts = []
        headerParams['Accept'] = ', '.join(accepts)

        content_types = ['application/x-www-form-urlencoded', ]
        headerParams['Content-Type'] = content_types[0] if len(content_types) > 0 else 'application/json'

        
        if ('vestorly_auth' in params):
            queryParams['vestorly_auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        

        

        

        
        if ('post' in params):
            formParams['Post'] = params['post']
        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Post')
        return responseObject
        
        
        
    
    def getPostByID(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            id, str: ID of post to fetch (required)
            
            
            filter_by, str: Filter post by parameters (required)
            
            
        
        Returns: Post
        """

        allParams = ['vestorly_auth', 'id', 'filter_by']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method getPostByID" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/posts/{id}'
        resourcePath = resourcePath.replace('{format}', 'json')
        method = 'GET'

        queryParams = {}
        headerParams = {}
        formParams = {}
        files = {}
        bodyParam = None

        accepts = []
        headerParams['Accept'] = ', '.join(accepts)

        content_types = []
        headerParams['Content-Type'] = content_types[0] if len(content_types) > 0 else 'application/json'

        
        if ('vestorly_auth' in params):
            queryParams['vestorly_auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        
        if ('filter_by' in params):
            queryParams['filter_by'] = self.apiClient.toPathValue(params['filter_by'])
        

        

        
        if ('id' in params):
            replacement = str(self.apiClient.toPathValue(params['id']))
            replacement = urllib.quote(replacement)
            resourcePath = resourcePath.replace('{' + 'id' + '}',
                                                replacement)
        

        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Post')
        return responseObject
        
        
        
    
    def updatePostByID(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            id, str: ID of post to fetch (required)
            
            
            post, str: Post (required)
            
            
        
        Returns: Post
        """

        allParams = ['vestorly_auth', 'id', 'post']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method updatePostByID" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/posts/{id}'
        resourcePath = resourcePath.replace('{format}', 'json')
        method = 'PUT'

        queryParams = {}
        headerParams = {}
        formParams = {}
        files = {}
        bodyParam = None

        accepts = []
        headerParams['Accept'] = ', '.join(accepts)

        content_types = []
        headerParams['Content-Type'] = content_types[0] if len(content_types) > 0 else 'application/json'

        
        if ('vestorly_auth' in params):
            queryParams['vestorly_auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        

        

        
        if ('id' in params):
            replacement = str(self.apiClient.toPathValue(params['id']))
            replacement = urllib.quote(replacement)
            resourcePath = resourcePath.replace('{' + 'id' + '}',
                                                replacement)
        

        
        if ('post' in params):
            formParams['Post'] = params['post']
        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Post')
        return responseObject
        
        
        
    


