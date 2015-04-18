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

class NewsletterSettings(object):
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
            
            
            'email_status': 'str',
            
            
            'twitter_status': 'str',
            
            
            'linkedin_status': 'str',
            
            
            'email_hour': 'int',
            
            
            'twitter_hour': 'int',
            
            
            'linkedin_hour': 'int',
            
            
            'facebook_hour': 'int'
            
        }

        self.attributeMap = {
            
            '_id': '_id',
            
            'email_status': 'email_status',
            
            'twitter_status': 'twitter_status',
            
            'linkedin_status': 'linkedin_status',
            
            'email_hour': 'email_hour',
            
            'twitter_hour': 'twitter_hour',
            
            'linkedin_hour': 'linkedin_hour',
            
            'facebook_hour': 'facebook_hour'
            
        }

        
        
        self._id = None # str
        
        
        self.email_status = None # str
        
        
        self.twitter_status = None # str
        
        
        self.linkedin_status = None # str
        
        
        self.email_hour = None # int
        
        
        self.twitter_hour = None # int
        
        
        self.linkedin_hour = None # int
        
        
        self.facebook_hour = None # int
        
