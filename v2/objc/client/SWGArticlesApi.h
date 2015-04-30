#import <Foundation/Foundation.h>
#import "SWGArticles.h"
#import "SWGArticleresponse.h"
#import "SWGObject.h"


@interface SWGArticlesApi: NSObject

-(void) addHeader:(NSString*)value forKey:(NSString*)key;
-(unsigned long) requestQueueSize;
+(SWGArticlesApi*) apiWithHeader:(NSString*)headerValue key:(NSString*)key;
+(void) setBasePath:(NSString*)basePath;
+(NSString*) getBasePath;
/**

 
 Returns all articles

 @param vestorly-auth Vestorly Auth Token
 @param limit Limit on the number of articles to return
 @param text_query Search query parameter
 @param sort_direction Direction of sort (used with sort_by parameter)
 @param sort_by Field on model to sort by
 

 return type: SWGArticles*
 */
-(NSNumber*) findArticlesWithCompletionBlock :(NSString*) vestorly-auth 
     limit:(NSNumber*) limit 
     text_query:(NSString*) text_query 
     sort_direction:(NSString*) sort_direction 
     sort_by:(NSString*) sort_by 
    
    completionHandler: (void (^)(SWGArticles* output, NSError* error))completionBlock;
    


/**

 
 Returns a single article

 @param vestorly-auth Vestorly Auth Token
 @param _id Article Id to fetch
 

 return type: SWGArticleresponse*
 */
-(NSNumber*) findArticleByIDWithCompletionBlock :(NSString*) vestorly-auth 
     _id:(NSString*) _id 
    
    completionHandler: (void (^)(SWGArticleresponse* output, NSError* error))completionBlock;
    



@end