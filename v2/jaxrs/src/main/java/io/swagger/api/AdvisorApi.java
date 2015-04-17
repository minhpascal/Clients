package io.swagger.api;

import io.swagger.model.*;

import com.wordnik.swagger.annotations.ApiParam;

import com.sun.jersey.multipart.FormDataParam;

import io.swagger.model.Advisor;

import java.util.List;
import io.swagger.api.NotFoundException;

import java.io.InputStream;

import com.sun.jersey.core.header.FormDataContentDisposition;
import com.sun.jersey.multipart.FormDataParam;

import javax.ws.rs.core.Response;
import javax.ws.rs.*;

@Path("/advisor")
@com.wordnik.swagger.annotations.Api(value = "/advisor", description = "the advisor API")
public class AdvisorApi {
  
  @GET
  @Path("/{id}")
  
  
  @com.wordnik.swagger.annotations.ApiOperation(value = "", notes = "Returns a single advisor if the user has access", response = Advisor.class)
  @com.wordnik.swagger.annotations.ApiResponses(value = { 
    @com.wordnik.swagger.annotations.ApiResponse(code = 200, message = "Advisor response") })

  public Response findAdvisorByID(@ApiParam(value = "Mongo ID of advisor to fetch",required=true ) @PathParam("id") String id,
    @ApiParam(value = "Vestorly Auth Token",required=true) @QueryParam("vestorly-auth") String vestorlyAuth)
      throws NotFoundException {
      // do some magic!
      return Response.ok().entity(new ApiResponseMessage(ApiResponseMessage.OK, "magic!")).build();
  }

  
}