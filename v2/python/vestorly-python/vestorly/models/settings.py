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

class Settings(object):
    """NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually."""


    def __init__(self):
        """
        Attributes:
          swaggerTypes (dict): The key is attribute name and the value is attribute type.
          attributeMap (dict): The key is attribute name and the value is json key in definition.
        """
        self.swaggerTypes = {
            
            '_id': 'str',
            
            
            'company': 'str',
            
            
            'picture_url': 'str',
            
            
            'website': 'str',
            
            
            'disclosure': 'str',
            
            
            'adv_brochure': 'str',
            
            
            'slug': 'str',
            
            
            'name': 'str',
            
            
            'orgsetting': 'OrgSetting',
            
            
            'feature': 'Features',
            
            
            'personalsetting': 'PersonalSettings'
            
        }

        self.attributeMap = {
            
            '_id': '_id',
            
            'company': 'company',
            
            'picture_url': 'picture_url',
            
            'website': 'website',
            
            'disclosure': 'disclosure',
            
            'adv_brochure': 'adv_brochure',
            
            'slug': 'slug',
            
            'name': 'name',
            
            'orgsetting': 'orgsetting',
            
            'feature': 'feature',
            
            'personalsetting': 'personalsetting'
            
        }

        
        
        self._id = None # str
        
        
        self.company = None # str
        
        
        self.picture_url = None # str
        
        
        self.website = None # str
        
        
        self.disclosure = None # str
        
        
        self.adv_brochure = None # str
        
        
        self.slug = None # str
        
        
        self.name = None # str
        
        
        self.orgsetting = None # OrgSetting
        
        
        self.feature = None # Features
        
        
        self.personalsetting = None # PersonalSettings
        
