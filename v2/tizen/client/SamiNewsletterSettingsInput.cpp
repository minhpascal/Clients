
#include "SamiNewsletterSettingsInput.h"
#include <FLocales.h>

using namespace Tizen::Base;
using namespace Tizen::System;
using namespace Tizen::Base::Utility;
using namespace Tizen::Base::Collection;
using namespace Tizen::Web::Json;
using namespace Tizen::Locales;


namespace Swagger {

SamiNewsletterSettingsInput::SamiNewsletterSettingsInput() {
    init();
}

SamiNewsletterSettingsInput::~SamiNewsletterSettingsInput() {
    this->cleanup();
}

void
SamiNewsletterSettingsInput::init() {
    pNewsletter_setting = null;
    
}

void
SamiNewsletterSettingsInput::cleanup() {
    if(pNewsletter_setting != null) {
        
        delete pNewsletter_setting;
        pNewsletter_setting = null;
    }
    
}


SamiNewsletterSettingsInput*
SamiNewsletterSettingsInput::fromJson(String* json) {
    this->cleanup();
    String str(json->GetPointer());
    int length = str.GetLength();

    ByteBuffer buffer;
    buffer.Construct(length);

    for (int i = 0; i < length; ++i) {
       byte b = str[i];
       buffer.SetByte(b);
    }

    IJsonValue* pJson = JsonParser::ParseN(buffer);
    fromJsonObject(pJson);
    if (pJson->GetType() == JSON_TYPE_OBJECT) {
       JsonObject* pObject = static_cast< JsonObject* >(pJson);
       pObject->RemoveAll(true);
    }
    else if (pJson->GetType() == JSON_TYPE_ARRAY) {
       JsonArray* pArray = static_cast< JsonArray* >(pJson);
       pArray->RemoveAll(true);
    }
    delete pJson;
    return this;
}


void
SamiNewsletterSettingsInput::fromJsonObject(IJsonValue* pJson) {
    JsonObject* pJsonObject = static_cast< JsonObject* >(pJson);

    if(pJsonObject != null) {
        JsonString* pNewsletter_settingKey = new JsonString(L"newsletter_setting");
        IJsonValue* pNewsletter_settingVal = null;
        pJsonObject->GetValue(pNewsletter_settingKey, pNewsletter_settingVal);
        if(pNewsletter_settingVal != null) {
            
            pNewsletter_setting = new SamiNewsletterSetting();
            jsonToValue(pNewsletter_setting, pNewsletter_settingVal, L"SamiNewsletterSetting", L"SamiNewsletterSetting");
        }
        delete pNewsletter_settingKey;
        
    }
}

SamiNewsletterSettingsInput::SamiNewsletterSettingsInput(String* json) {
    init();
    String str(json->GetPointer());
    int length = str.GetLength();

    ByteBuffer buffer;
    buffer.Construct(length);

    for (int i = 0; i < length; ++i) {
       byte b = str[i];
       buffer.SetByte(b);
    }

    IJsonValue* pJson = JsonParser::ParseN(buffer);
    fromJsonObject(pJson);
    if (pJson->GetType() == JSON_TYPE_OBJECT) {
       JsonObject* pObject = static_cast< JsonObject* >(pJson);
       pObject->RemoveAll(true);
    }
    else if (pJson->GetType() == JSON_TYPE_ARRAY) {
       JsonArray* pArray = static_cast< JsonArray* >(pJson);
       pArray->RemoveAll(true);
    }
    delete pJson;
}

String
SamiNewsletterSettingsInput::asJson ()
{
    JsonObject* pJsonObject = asJsonObject();

    char *pComposeBuf = new char[256];
    JsonWriter::Compose(pJsonObject, pComposeBuf, 256);
    String s = String(pComposeBuf);

    delete pComposeBuf;
    pJsonObject->RemoveAll(true);
    delete pJsonObject;

    return s;
}

JsonObject*
SamiNewsletterSettingsInput::asJsonObject() {
    JsonObject *pJsonObject = new JsonObject();
    pJsonObject->Construct();

    
    JsonString *pNewsletter_settingKey = new JsonString(L"newsletter_setting");
    pJsonObject->Add(pNewsletter_settingKey, toJson(getPNewsletterSetting(), "SamiNewsletterSetting", ""));

    
    return pJsonObject;
}

SamiNewsletterSetting*
SamiNewsletterSettingsInput::getPNewsletterSetting() {
    return pNewsletter_setting;
}
void
SamiNewsletterSettingsInput::setPNewsletterSetting(SamiNewsletterSetting* pNewsletter_setting) {
    this->pNewsletter_setting = pNewsletter_setting;
}



} /* namespace Swagger */

