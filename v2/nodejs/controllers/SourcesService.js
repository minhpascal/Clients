'use strict';

exports.findSources = function(vestorly_auth) {

  var examples = {};
  
  examples['application/json'] = {
  "sources" : [ {
    "logo_url" : "aeiou",
    "rss_publisher" : "aeiou",
    "name" : "aeiou",
    "custom_rss_feed" : true,
    "_id" : "aeiou",
    "url" : "aeiou",
    "enabled" : true
  } ]
};
  

  
  if(Object.keys(examples).length > 0)
    return examples[Object.keys(examples)[0]];
  
}
exports.createSource = function(vestorly_auth, Source) {

  var examples = {};
  
  examples['application/json'] = {
  "logo_url" : "aeiou",
  "rss_publisher" : "aeiou",
  "name" : "aeiou",
  "custom_rss_feed" : true,
  "_id" : "aeiou",
  "url" : "aeiou",
  "enabled" : true
};
  

  
  if(Object.keys(examples).length > 0)
    return examples[Object.keys(examples)[0]];
  
}
exports.getSourceByID = function(vestorly_auth, id) {

  var examples = {};
  
  examples['application/json'] = {
  "logo_url" : "aeiou",
  "rss_publisher" : "aeiou",
  "name" : "aeiou",
  "custom_rss_feed" : true,
  "_id" : "aeiou",
  "url" : "aeiou",
  "enabled" : true
};
  

  
  if(Object.keys(examples).length > 0)
    return examples[Object.keys(examples)[0]];
  
}
exports.UpdateSourceByID = function(vestorly_auth, id, Source) {

  var examples = {};
  
  examples['application/json'] = {
  "logo_url" : "aeiou",
  "rss_publisher" : "aeiou",
  "name" : "aeiou",
  "custom_rss_feed" : true,
  "_id" : "aeiou",
  "url" : "aeiou",
  "enabled" : true
};
  

  
  if(Object.keys(examples).length > 0)
    return examples[Object.keys(examples)[0]];
  
}
