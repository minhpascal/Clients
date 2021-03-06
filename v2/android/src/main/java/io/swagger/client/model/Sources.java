package io.swagger.client.model;

import io.swagger.client.model.Source;
import java.util.*;

import com.wordnik.swagger.annotations.*;
import com.google.gson.annotations.SerializedName;


@ApiModel(description = "")
public class Sources  {
  
  @SerializedName("sources")
  private List<Source> sources = new ArrayList<Source>() ;

  
  /**
   **/
  @ApiModelProperty(value = "")
  public List<Source> getSources() {
    return sources;
  }
  public void setSources(List<Source> sources) {
    this.sources = sources;
  }

  

  @Override
  public String toString()  {
    StringBuilder sb = new StringBuilder();
    sb.append("class Sources {\n");
    
    sb.append("  sources: ").append(sources).append("\n");
    sb.append("}\n");
    return sb.toString();
  }
}
