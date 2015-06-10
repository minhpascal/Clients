#!/usr/bin/env python
# coding: utf-8

"""
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
"""

class Session(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """

    def __init__(self):
        """
        Swagger model

        :param dict swaggerTypes: The key is attribute name and the value is attribute type.
        :param dict attributeMap: The key is attribute name and the value is json key in definition.
        """
        self.swagger_types = {
            '_id': 'str',
            'vestorly_auth': 'str',
            'new_user': 'bool',
            'current_user': 'User',
            'settings': 'Settings'
        }

        self.attribute_map = {
            '_id': '_id',
            'vestorly_auth': 'vestorly-auth',
            'new_user': 'new_user',
            'current_user': 'current_user',
            'settings': 'settings'
        }
        
        
        self._id = None  # str
        
        
        self.vestorly_auth = None  # str
        
        
        self.new_user = None  # bool
        
        
        self.current_user = None  # User
        
        
        self.settings = None  # Settings
        

    def __repr__(self):
        properties = []
        for p in self.__dict__:
            if p != 'swaggerTypes' and p != 'attributeMap':
                properties.append('{prop}={val!r}'.format(prop=p, val=self.__dict__[p]))

        return '<{name} {props}>'.format(name=__name__, props=' '.join(properties))


