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

class Source(object):
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
            'name': 'str',
            'url': 'str',
            'logo_url': 'str',
            'enabled': 'bool',
            'custom_rss_feed': 'bool',
            'rss_publisher': 'str'
        }

        self.attribute_map = {
            '_id': '_id',
            'name': 'name',
            'url': 'url',
            'logo_url': 'logo_url',
            'enabled': 'enabled',
            'custom_rss_feed': 'custom_rss_feed',
            'rss_publisher': 'rss_publisher'
        }
        
        
        self._id = None  # str
        
        
        self.name = None  # str
        
        
        self.url = None  # str
        
        
        self.logo_url = None  # str
        
        
        self.enabled = None  # bool
        
        
        self.custom_rss_feed = None  # bool
        
        
        self.rss_publisher = None  # str
        

    def __repr__(self):
        properties = []
        for p in self.__dict__:
            if p != 'swaggerTypes' and p != 'attributeMap':
                properties.append('{prop}={val!r}'.format(prop=p, val=self.__dict__[p]))

        return '<{name} {props}>'.format(name=__name__, props=' '.join(properties))


