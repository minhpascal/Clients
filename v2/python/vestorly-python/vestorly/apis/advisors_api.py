#!/usr/bin/env python
# coding: utf-8

"""
AdvisorsApi.py
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
from __future__ import absolute_import

import sys
import os

# python 2 and python 3 compatibility library
from six import iteritems

from ..util import remove_none

from ..swagger import ApiClient

class AdvisorsApi(object):

    def __init__(self, api_client):
        self.api_client = api_client
    
    def find_advisor_by_id(self, vestorly_auth, id, **kwargs):
        """
        
        Returns a single advisor given their ID

        :param str vestorly_auth: Vestorly Auth Token (required)
        :param str id: Advisor Id to fetch (required)
        
        :return: Advisor
        """
        
        # verify the required parameter 'vestorly_auth' is set
        if vestorly_auth is None:
            raise ValueError("Missing the required parameter `vestorly_auth` when calling `find_advisor_by_id`")
        
        # verify the required parameter 'id' is set
        if id is None:
            raise ValueError("Missing the required parameter `id` when calling `find_advisor_by_id`")
        
        all_params = ['vestorly_auth', 'id']

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError("Got an unexpected keyword argument '%s' to method find_advisor_by_id" % key)
            params[key] = val
        del params['kwargs']

        resource_path = '/advisors/{id}'.replace('{format}', 'json')
        method = 'GET'

        path_params = remove_none(dict(id=params.get('id')))
        query_params = remove_none(dict(vestorly_auth=params.get('vestorly_auth')))
        header_params = remove_none(dict())
        form_params = remove_none(dict())
        files = remove_none(dict())
        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = ApiClient.select_header_accept([])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = ApiClient.select_header_content_type([])

        response = self.api_client.call_api(resource_path, method, path_params, query_params, header_params,
                                            body=body_params, post_params=form_params, files=files,
                                            response='Advisor')
        
        return response
        








