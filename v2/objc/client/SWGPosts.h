#import <Foundation/Foundation.h>
#import "SWGObject.h"
#import "SWGPost.h"


@protocol SWGPosts
@end
  
@interface SWGPosts : SWGObject


@property(nonatomic) NSArray<SWGPost>* posts;

@end
