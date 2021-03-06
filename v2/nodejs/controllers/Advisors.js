'use strict';

var url = require('url');


var Advisors = require('./AdvisorsService');


module.exports.findAdvisorByID = function findAdvisorByID (req, res, next) {
  var vestorlyAuth = req.swagger.params['vestorly_auth'].value;
  var id = req.swagger.params['id'].value;
  

  var result = Advisors.findAdvisorByID(vestorlyAuth, id);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};
