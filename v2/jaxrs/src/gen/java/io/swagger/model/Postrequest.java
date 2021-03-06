package io.swagger.model;

import io.swagger.model.PostInput;

import com.wordnik.swagger.annotations.*;
import com.fasterxml.jackson.annotation.JsonProperty;


@ApiModel(description = "")
public class Postrequest  {
  
  private PostInput post = null;

  
  /**
   **/
  @ApiModelProperty(value = "")
  @JsonProperty("post")
  public PostInput getPost() {
    return post;
  }
  public void setPost(PostInput post) {
    this.post = post;
  }

  

  @Override
  public String toString()  {
    StringBuilder sb = new StringBuilder();
    sb.append("class Postrequest {\n");
    
    sb.append("  post: ").append(post).append("\n");
    sb.append("}\n");
    return sb.toString();
  }
}
