'use strict';

var url = require('url');


var Newsletters = require('./NewslettersService');


module.exports.findNewsletters = function findNewsletters (req, res, next) {
  var vestorly_auth = req.swagger.params['vestorly_auth'].value;
  

  var result = Newsletters.findNewsletters(vestorly_auth);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};

module.exports.getNewsletterByID = function getNewsletterByID (req, res, next) {
  var vestorly_auth = req.swagger.params['vestorly_auth'].value;
  var id = req.swagger.params['id'].value;
  

  var result = Newsletters.getNewsletterByID(vestorly_auth, id);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};

module.exports.updateNewsletter = function updateNewsletter (req, res, next) {
  var vestorly_auth = req.swagger.params['vestorly_auth'].value;
  var id = req.swagger.params['id'].value;
  var Newsletter = req.swagger.params['Newsletter'].value;
  

  var result = Newsletters.updateNewsletter(vestorly_auth, id, Newsletter);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};
