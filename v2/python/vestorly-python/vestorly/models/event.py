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

class Event(object):
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
            
            
            'referrer': 'str',
            
            
            'original_url': 'str',
            
            
            'originator_email': 'str',
            
            
            'subject_email': 'str',
            
            
            'advisor_email': 'str',
            
            
            'originator_group_name': 'str',
            
            
            'newsletter': 'str'
            
        }

        self.attributeMap = {
            
            '_id': '_id',
            
            'referrer': 'referrer',
            
            'original_url': 'original_url',
            
            'originator_email': 'originator_email',
            
            'subject_email': 'subject_email',
            
            'advisor_email': 'advisor_email',
            
            'originator_group_name': 'originator_group_name',
            
            'newsletter': 'newsletter'
            
        }

        
        
        self._id = None # str
        
        
        self.referrer = None # str
        
        
        self.original_url = None # str
        
        
        self.originator_email = None # str
        
        
        self.subject_email = None # str
        
        
        self.advisor_email = None # str
        
        
        self.originator_group_name = None # str
        
        
        self.newsletter = None # str
        