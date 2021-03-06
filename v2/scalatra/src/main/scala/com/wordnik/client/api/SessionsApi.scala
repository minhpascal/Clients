package com.wordnik.client.api

import com.wordnik.client.model.Session
import com.wordnik.client.model.SessionLogoutResponse

import java.io.File

import org.scalatra.{ TypedParamSupport, ScalatraServlet }
import org.scalatra.swagger._
import org.json4s._
import org.json4s.JsonDSL._
import org.scalatra.json.{ JValueResult, JacksonJsonSupport }
import org.scalatra.servlet.{FileUploadSupport, MultipartConfig, SizeConstraintExceededException}

import scala.collection.JavaConverters._

class SessionsApi (implicit val swagger: Swagger) extends ScalatraServlet 
    with FileUploadSupport
    with JacksonJsonSupport
    with SwaggerSupport {
  protected implicit val jsonFormats: Formats = DefaultFormats

  protected val applicationDescription: String = "SessionsApi"
  override protected val applicationName: Option[String] = Some("Sessions")

  before() {
    contentType = formats("json")
    response.headers += ("Access-Control-Allow-Origin" -> "*")
  }
  

  val loginOperation = (apiOperation[Session]("login")
      summary ""
      parameters(
        queryParam[String]("username").description("")
        
        
        
        
        
        ,
        queryParam[String]("password").description("")
        
        
        
        
        
        
        )
  )

  post("/sessions",operation(loginOperation)) {
    
    
    
    

    
      
      val username = params.getAs[String]("username")
      
    

    

    

    
    
    println("username: " + username)
  
    
    
    

    
      
      val password = params.getAs[String]("password")
      
    

    

    

    
    
    println("password: " + password)
  
  }

  

  val logoutOperation = (apiOperation[SessionLogoutResponse]("logout")
      summary ""
      parameters(
        queryParam[String]("vestorlyAuth").description("")
        
        
        
        
        
        ,
        
        pathParam[String]("id").description("")
        
        
        
        
        
        )
  )

  delete("/sessions/{id}",operation(logoutOperation)) {
    
    
    
    

    
      
      val vestorlyAuth = params.getAs[String]("vestorlyAuth")
      
    

    

    

    
    
    println("vestorlyAuth: " + vestorlyAuth)
  
    
    
    
      val id = params.getOrElse("id", halt(400))
    

    

    

    

    
    
    println("id: " + id)
  
  }

}