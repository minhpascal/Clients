#!/usr/bin/env python
# coding: utf-8

"""Swagger generic API client. This client handles the client-
server communication, and is invariant across implementations. Specifics of
the methods and models for each application are generated from the Swagger
templates."""

from __future__ import absolute_import
from . import models
from .rest import RESTClient

import os
import re
import urllib
import json
import datetime
import mimetypes
import random

# python 2 and python 3 compatibility library
from six import iteritems

try:
  # for python3
  from urllib.parse import quote
except ImportError:
  # for python2
  from urllib import quote


class ApiClient(object):
  """
  Generic API client for Swagger client library builds

  :param host: The base path for the server to call
  :param header_name: a header to pass when making calls to the API
  :param header_value: a header value to pass when making calls to the API
  """
  def __init__(self, host=None, header_name=None, header_value=None):
    self.default_headers = {}
    if header_name is not None:
      self.default_headers[header_name] = header_value
    self.host = host
    self.cookie = None
    # Set default User-Agent.
    self.user_agent = 'Python-Swagger'

  @property
  def user_agent(self):
    return self.default_headers['User-Agent']

  @user_agent.setter
  def user_agent(self, value):
    self.default_headers['User-Agent'] = value

  def set_default_header(self, header_name, header_value):
    self.default_headers[header_name] = header_value

  def call_api(self, resource_path, method, path_params=None, query_params=None, header_params=None,
               body=None, post_params=None, files=None, response=None):

    # headers parameters
    headers = self.default_headers.copy()
    headers.update(header_params)
    if self.cookie:
      headers['Cookie'] = self.cookie
    if headers:
      headers = ApiClient.sanitize_for_serialization(headers)

    # path parameters
    if path_params:
      path_params = ApiClient.sanitize_for_serialization(path_params)
      for k, v in iteritems(path_params):
        replacement = quote(str(self.to_path_value(v)))
        resource_path = resource_path.replace('{' + k + '}', replacement)

    # query parameters
    if query_params:
      query_params = ApiClient.sanitize_for_serialization(query_params)
      query_params = {k: self.to_path_value(v) for k, v in iteritems(query_params)}

    # post parameters
    if post_params:
      post_params = self.prepare_post_parameters(post_params, files)
      post_params = ApiClient.sanitize_for_serialization(post_params)

    # body
    if body:
      body = ApiClient.sanitize_for_serialization(body)

    # request url
    url = self.host + resource_path

    # perform request and return response
    response_data = self.request(method, url, query_params=query_params, headers=headers,
                                 post_params=post_params, body=body)

    # deserialize response data
    if response:
      return self.deserialize(response_data, response)
    else:
      return None

  def to_path_value(self, obj):
    """
    Convert a string or object to a path-friendly value

    :param obj: object or string value

    :return string: quoted value
    """
    if type(obj) == list:
      return ','.join(obj)
    else:
      return str(obj)

  @staticmethod
  def sanitize_for_serialization(obj):
    """
    Sanitize an object for Request.

    If obj is None, return None.
    If obj is str, int, float, bool, return directly.
    If obj is datetime.datetime, datetime.date convert to string in iso8601 format.
    If obj is list, santize each element in the list.
    If obj is dict, return the dict.
    If obj is swagger model, return the properties dict.
    """
    if isinstance(obj, type(None)):
      return None
    elif isinstance(obj, (str, int, float, bool, tuple)):
      return obj
    elif isinstance(obj, list):
      return [ApiClient.sanitize_for_serialization(sub_obj) for sub_obj in obj]
    elif isinstance(obj, (datetime.datetime, datetime.date)):
      return obj.isoformat()
    else:
      if isinstance(obj, dict):
        obj_dict = obj
      else:
        # Convert model obj to dict except attributes `swagger_types`, `attribute_map`
        # and attributes which value is not None.
        # Convert attribute name to json key in model definition for request.
        obj_dict = {obj.attribute_map[key]: val
                    for key, val in iteritems(obj.__dict__)
                    if key != 'swagger_types' and key != 'attribute_map' and val is not None}
      return {key: ApiClient.sanitize_for_serialization(val)
              for key, val in iteritems(obj_dict)}

  def deserialize(self, obj, obj_class):
    """
    Derialize a JSON string into an object.

    :param obj: string or object to be deserialized
    :param obj_class: class literal for deserialzied object, or string of class name

    :return object: deserialized object
    """
    # Have to accept obj_class as string or actual type. Type could be a
    # native Python type, or one of the model classes.
    if type(obj_class) == str:
      if 'list[' in obj_class:
        match = re.match('list\[(.*)\]', obj_class)
        sub_class = match.group(1)
        return [self.deserialize(sub_obj, sub_class) for sub_obj in obj]

      if obj_class in ['int', 'float', 'dict', 'list', 'str', 'bool', 'datetime']:
        obj_class = eval(obj_class)
      else:  # not a native type, must be model class
        obj_class = eval('models.' + obj_class)

    if obj_class in [int, float, dict, list, str, bool]:
      return obj_class(obj)
    elif obj_class == datetime:
      return self.__parse_string_to_datetime(obj)

    instance = obj_class()

    for attr, attr_type in iteritems(instance.swagger_types):
        if obj is not None and instance.attribute_map[attr] in obj and type(obj) in [list, dict]:
          value = obj[instance.attribute_map[attr]]
          if attr_type in ['str', 'int', 'float', 'bool']:
            attr_type = eval(attr_type)
            try:
              value = attr_type(value)
            except UnicodeEncodeError:
              value = unicode(value)
            except TypeError:
              value = value
            setattr(instance, attr, value)
          elif attr_type == 'datetime':
            setattr(instance, attr, self.__parse_string_to_datetime(value))
          elif 'list[' in attr_type:
            match = re.match('list\[(.*)\]', attr_type)
            sub_class = match.group(1)
            sub_values = []
            if not value:
              setattr(instance, attr, None)
            else:
              for sub_value in value:
                sub_values.append(self.deserialize(sub_value, sub_class))
              setattr(instance, attr, sub_values)
          else:
            setattr(instance, attr, self.deserialize(value, attr_type))

    return instance

  def __parse_string_to_datetime(self, string):
    """
    Parse datetime in string to datetime.

    The string should be in iso8601 datetime format.
    """
    try:
        from dateutil.parser import parse
        return parse(string)
    except ImportError:
        return string

  def request(self, method, url, query_params=None, headers=None, post_params=None, body=None):
    """
    Perform http request using RESTClient.
    """
    if method == "GET":
      return RESTClient.GET(url, query_params=query_params, headers=headers)
    elif method == "HEAD":
      return RESTClient.HEAD(url, query_params=query_params, headers=headers)
    elif method == "POST":
      return RESTClient.POST(url, headers=headers, post_params=post_params, body=body, query_params=query_params)
    elif method == "PUT":
      return RESTClient.PUT(url, headers=headers, post_params=post_params, body=body, query_params=query_params)
    elif method == "PATCH":
      return RESTClient.PATCH(url, headers=headers, post_params=post_params, body=body)
    elif method == "DELETE":
      return RESTClient.DELETE(url, query_params=query_params, headers=headers)
    else:
      raise ValueError("http method must be `GET`, `HEAD`, `POST`, `PATCH`, `PUT` or `DELETE`")

  def prepare_post_parameters(self, post_params=None, files=None):
    params = {}

    if post_params:
      params.update(post_params)

    if files:
      for k, v in iteritems(files):
        with open(v, 'rb') as f:
          filename = os.path.basename(f.name)
          filedata = f.read()
          mimetype = mimetypes.guess_type(filename)[0] or 'application/octet-stream'
        params[k] = tuple([filename, filedata, mimetype])

    return params

  @staticmethod
  def select_header_accept(accepts):
    """
    Return `Accept` based on an array of accepts provided
    """
    if not accepts:
      return

    accepts = list(map(lambda x: x.lower(), accepts))

    if 'application/json' in accepts:
      return 'application/json'
    else:
      return ', '.join(accepts)

  @staticmethod
  def select_header_content_type(content_types):
    """
    Return `Content-Type` baseed on an array of content_types provided
    """
    if not content_types:
      return 'application/json'

    content_types = list(map(lambda x: x.lower(), content_types))

    if 'application/json' in content_types:
      return 'application/json'
    else:
      return content_types[0]
