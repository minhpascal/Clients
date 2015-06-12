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

class User(object):
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
            'company': 'str',
            'picture_url': 'str',
            'website': 'str',
            'user_type': 'str',
            'slug': 'str',
            'name': 'str',
            'username': 'str',
            'first_name': 'str',
            'last_name': 'str',
            'new_user': 'bool',
            'show_tour': 'bool',
            'plan_setup': 'bool',
            'plan_expired': 'bool',
            'plan_status': 'str',
            'plan_id': 'str',
            'plan_stripe': 'bool'
        }

        self.attribute_map = {
            '_id': '_id',
            'company': 'company',
            'picture_url': 'picture_url',
            'website': 'website',
            'user_type': 'user_type',
            'slug': 'slug',
            'name': 'name',
            'username': 'username',
            'first_name': 'first_name',
            'last_name': 'last_name',
            'new_user': 'new_user',
            'show_tour': 'show_tour',
            'plan_setup': 'plan_setup',
            'plan_expired': 'plan_expired',
            'plan_status': 'plan_status',
            'plan_id': 'plan_id',
            'plan_stripe': 'plan_stripe'
        }
        
        
        self._id = None  # str
        
        
        self.company = None  # str
        
        
        self.picture_url = None  # str
        
        
        self.website = None  # str
        
        
        self.user_type = None  # str
        
        
        self.slug = None  # str
        
        
        self.name = None  # str
        
        
        self.username = None  # str
        
        
        self.first_name = None  # str
        
        
        self.last_name = None  # str
        
        
        self.new_user = None  # bool
        
        
        self.show_tour = None  # bool
        
        
        self.plan_setup = None  # bool
        
        
        self.plan_expired = None  # bool
        
        
        self.plan_status = None  # str
        
        
        self.plan_id = None  # str
        
        
        self.plan_stripe = None  # bool
        

    def __repr__(self):
        properties = []
        for p in self.__dict__:
            if p != 'swaggerTypes' and p != 'attributeMap':
                properties.append('{prop}={val!r}'.format(prop=p, val=self.__dict__[p]))

        return '<{name} {props}>'.format(name=__name__, props=' '.join(properties))


