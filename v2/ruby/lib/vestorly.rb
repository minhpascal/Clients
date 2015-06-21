# Swagger common files
require 'vestorly/monkey'
require 'vestorly/swagger'
require 'vestorly/swagger/configuration'
require 'vestorly/swagger/request'
require 'vestorly/swagger/response'
require 'vestorly/swagger/version'

# Models
require 'vestorly/models/base_object'
require 'vestorly/models/advisorresponse'
require 'vestorly/models/advisor'
require 'vestorly/models/advisors'
require 'vestorly/models/posts'
require 'vestorly/models/postresponse'
require 'vestorly/models/postrequest'
require 'vestorly/models/post'
require 'vestorly/models/post_input'
require 'vestorly/models/session_logout_response'
require 'vestorly/models/session'
require 'vestorly/models/settings'
require 'vestorly/models/org_setting'
require 'vestorly/models/features'
require 'vestorly/models/personal_settings'
require 'vestorly/models/user'
require 'vestorly/models/member_report'
require 'vestorly/models/member_reports'
require 'vestorly/models/truncated_member'
require 'vestorly/models/member_event'
require 'vestorly/models/member_events'
require 'vestorly/models/article'
require 'vestorly/models/articleresponse'
require 'vestorly/models/articles'
require 'vestorly/models/newsletterresponse'
require 'vestorly/models/newsletter'
require 'vestorly/models/newsletter_input'
require 'vestorly/models/newsletters'
require 'vestorly/models/memberresponse'
require 'vestorly/models/meta'
require 'vestorly/models/members'
require 'vestorly/models/member'
require 'vestorly/models/event_content'
require 'vestorly/models/eventresponse'
require 'vestorly/models/eventcreateresponse'
require 'vestorly/models/event_input'
require 'vestorly/models/event'
require 'vestorly/models/events'
require 'vestorly/models/group'
require 'vestorly/models/group_input'
require 'vestorly/models/groups'
require 'vestorly/models/groupresponse'
require 'vestorly/models/newslettersettingresponse'
require 'vestorly/models/newsletter_settings'
require 'vestorly/models/newsletter_settings_input'
require 'vestorly/models/newsletter_setting'
require 'vestorly/models/sourceresponse'
require 'vestorly/models/source'
require 'vestorly/models/source_input'
require 'vestorly/models/sources'

# APIs
require 'vestorly/api/groups_api'
require 'vestorly/api/sessions_api'
require 'vestorly/api/posts_api'
require 'vestorly/api/newslettersettings_api'
require 'vestorly/api/memberreports_api'
require 'vestorly/api/advisors_api'
require 'vestorly/api/events_api'
require 'vestorly/api/sources_api'
require 'vestorly/api/members_api'
require 'vestorly/api/newsletters_api'
require 'vestorly/api/articles_api'
require 'vestorly/api/memberevents_api'

module Vestorly
  # Initialize the default configuration
  Swagger.configuration ||= Swagger::Configuration.new
end