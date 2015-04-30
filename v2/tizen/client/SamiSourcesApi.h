#ifndef SamiSourcesApi_H_
#define SamiSourcesApi_H_

#include <FNet.h>
#include "SamiApiClient.h"
#include "SamiError.h"

#include "SamiSources.h"
using Tizen::Base::String;
#include "SamiSource.h"
#include "SamiSourceInput.h"
#include "SamiSourceresponse.h"

using namespace Tizen::Net::Http;

namespace Swagger {

class SamiSourcesApi {
public:
  SamiSourcesApi();
  virtual ~SamiSourcesApi();

  
  SamiSources* 
  findSourcesWithCompletion(String* vestorly-auth, void (* handler)(SamiSources*, SamiError*));
  
  SamiSource* 
  createSourceWithCompletion(String* vestorly-auth, SamiSourceInput* source, void (* handler)(SamiSource*, SamiError*));
  
  SamiSourceresponse* 
  getSourceByIDWithCompletion(String* vestorly-auth, String* _id, void (* handler)(SamiSourceresponse*, SamiError*));
  
  SamiSourceresponse* 
  updateSourceByIDWithCompletion(String* vestorly-auth, String* _id, SamiSourceInput* source, void (* handler)(SamiSourceresponse*, SamiError*));
  
  static String getBasePath() {
    return L"https://staging.vestorly.com/api/v2";
  }

private:
  SamiApiClient* client;
};


} /* namespace Swagger */

#endif /* SamiSourcesApi_H_ */
