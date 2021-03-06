#ifndef ModelFactory_H_
#define ModelFactory_H_

#include "SamiObject.h"

#include "SamiAdvisorresponse.h"
#include "SamiAdvisor.h"
#include "SamiAdvisors.h"
#include "SamiPosts.h"
#include "SamiPostresponse.h"
#include "SamiPostrequest.h"
#include "SamiPost.h"
#include "SamiPostInput.h"
#include "SamiSessionLogoutResponse.h"
#include "SamiSession.h"
#include "SamiSettings.h"
#include "SamiOrgSetting.h"
#include "SamiFeatures.h"
#include "SamiPersonalSettings.h"
#include "SamiUser.h"
#include "SamiMemberReport.h"
#include "SamiMemberReports.h"
#include "SamiTruncatedMember.h"
#include "SamiMemberEvent.h"
#include "SamiMemberEvents.h"
#include "SamiArticle.h"
#include "SamiArticleresponse.h"
#include "SamiArticles.h"
#include "SamiNewsletterresponse.h"
#include "SamiNewsletter.h"
#include "SamiNewsletterInput.h"
#include "SamiNewsletters.h"
#include "SamiMemberresponse.h"
#include "SamiMeta.h"
#include "SamiMembers.h"
#include "SamiMember.h"
#include "SamiEventContent.h"
#include "SamiEventresponse.h"
#include "SamiEventcreateresponse.h"
#include "SamiEventInput.h"
#include "SamiEvent.h"
#include "SamiEvents.h"
#include "SamiGroup.h"
#include "SamiGroupInput.h"
#include "SamiGroups.h"
#include "SamiGroupresponse.h"
#include "SamiNewslettersettingresponse.h"
#include "SamiNewsletterSettings.h"
#include "SamiNewsletterSettingsInput.h"
#include "SamiNewsletterSetting.h"
#include "SamiSourceresponse.h"
#include "SamiSource.h"
#include "SamiSourceInput.h"
#include "SamiSources.h"

namespace Swagger {
  void*
  create(String type) {
    if(type.Equals(L"SamiAdvisorresponse", true)) {
      return new SamiAdvisorresponse();
    }
    if(type.Equals(L"SamiAdvisor", true)) {
      return new SamiAdvisor();
    }
    if(type.Equals(L"SamiAdvisors", true)) {
      return new SamiAdvisors();
    }
    if(type.Equals(L"SamiPosts", true)) {
      return new SamiPosts();
    }
    if(type.Equals(L"SamiPostresponse", true)) {
      return new SamiPostresponse();
    }
    if(type.Equals(L"SamiPostrequest", true)) {
      return new SamiPostrequest();
    }
    if(type.Equals(L"SamiPost", true)) {
      return new SamiPost();
    }
    if(type.Equals(L"SamiPostInput", true)) {
      return new SamiPostInput();
    }
    if(type.Equals(L"SamiSessionLogoutResponse", true)) {
      return new SamiSessionLogoutResponse();
    }
    if(type.Equals(L"SamiSession", true)) {
      return new SamiSession();
    }
    if(type.Equals(L"SamiSettings", true)) {
      return new SamiSettings();
    }
    if(type.Equals(L"SamiOrgSetting", true)) {
      return new SamiOrgSetting();
    }
    if(type.Equals(L"SamiFeatures", true)) {
      return new SamiFeatures();
    }
    if(type.Equals(L"SamiPersonalSettings", true)) {
      return new SamiPersonalSettings();
    }
    if(type.Equals(L"SamiUser", true)) {
      return new SamiUser();
    }
    if(type.Equals(L"SamiMemberReport", true)) {
      return new SamiMemberReport();
    }
    if(type.Equals(L"SamiMemberReports", true)) {
      return new SamiMemberReports();
    }
    if(type.Equals(L"SamiTruncatedMember", true)) {
      return new SamiTruncatedMember();
    }
    if(type.Equals(L"SamiMemberEvent", true)) {
      return new SamiMemberEvent();
    }
    if(type.Equals(L"SamiMemberEvents", true)) {
      return new SamiMemberEvents();
    }
    if(type.Equals(L"SamiArticle", true)) {
      return new SamiArticle();
    }
    if(type.Equals(L"SamiArticleresponse", true)) {
      return new SamiArticleresponse();
    }
    if(type.Equals(L"SamiArticles", true)) {
      return new SamiArticles();
    }
    if(type.Equals(L"SamiNewsletterresponse", true)) {
      return new SamiNewsletterresponse();
    }
    if(type.Equals(L"SamiNewsletter", true)) {
      return new SamiNewsletter();
    }
    if(type.Equals(L"SamiNewsletterInput", true)) {
      return new SamiNewsletterInput();
    }
    if(type.Equals(L"SamiNewsletters", true)) {
      return new SamiNewsletters();
    }
    if(type.Equals(L"SamiMemberresponse", true)) {
      return new SamiMemberresponse();
    }
    if(type.Equals(L"SamiMeta", true)) {
      return new SamiMeta();
    }
    if(type.Equals(L"SamiMembers", true)) {
      return new SamiMembers();
    }
    if(type.Equals(L"SamiMember", true)) {
      return new SamiMember();
    }
    if(type.Equals(L"SamiEventContent", true)) {
      return new SamiEventContent();
    }
    if(type.Equals(L"SamiEventresponse", true)) {
      return new SamiEventresponse();
    }
    if(type.Equals(L"SamiEventcreateresponse", true)) {
      return new SamiEventcreateresponse();
    }
    if(type.Equals(L"SamiEventInput", true)) {
      return new SamiEventInput();
    }
    if(type.Equals(L"SamiEvent", true)) {
      return new SamiEvent();
    }
    if(type.Equals(L"SamiEvents", true)) {
      return new SamiEvents();
    }
    if(type.Equals(L"SamiGroup", true)) {
      return new SamiGroup();
    }
    if(type.Equals(L"SamiGroupInput", true)) {
      return new SamiGroupInput();
    }
    if(type.Equals(L"SamiGroups", true)) {
      return new SamiGroups();
    }
    if(type.Equals(L"SamiGroupresponse", true)) {
      return new SamiGroupresponse();
    }
    if(type.Equals(L"SamiNewslettersettingresponse", true)) {
      return new SamiNewslettersettingresponse();
    }
    if(type.Equals(L"SamiNewsletterSettings", true)) {
      return new SamiNewsletterSettings();
    }
    if(type.Equals(L"SamiNewsletterSettingsInput", true)) {
      return new SamiNewsletterSettingsInput();
    }
    if(type.Equals(L"SamiNewsletterSetting", true)) {
      return new SamiNewsletterSetting();
    }
    if(type.Equals(L"SamiSourceresponse", true)) {
      return new SamiSourceresponse();
    }
    if(type.Equals(L"SamiSource", true)) {
      return new SamiSource();
    }
    if(type.Equals(L"SamiSourceInput", true)) {
      return new SamiSourceInput();
    }
    if(type.Equals(L"SamiSources", true)) {
      return new SamiSources();
    }
    
    if(type.Equals(L"String", true)) {
      return new String();
    }
    if(type.Equals(L"Integer", true)) {
      return new Integer();
    }
    if(type.Equals(L"Long", true)) {
      return new Long();
    }
    if(type.Equals(L"DateTime", true)) {
      return new DateTime();
    }
    return null;
  }
} /* namespace Swagger */

#endif /* ModelFactory_H_ */
