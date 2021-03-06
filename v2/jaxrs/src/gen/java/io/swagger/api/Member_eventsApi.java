package io.swagger.api;

import io.swagger.model.*;
import io.swagger.api.Member_eventsApiService;
import io.swagger.api.factories.Member_eventsApiServiceFactory;

import com.wordnik.swagger.annotations.ApiParam;

import com.sun.jersey.multipart.FormDataParam;

import io.swagger.model.MemberEvents;

import java.util.List;
import io.swagger.api.NotFoundException;

import java.io.InputStream;

import com.sun.jersey.core.header.FormDataContentDisposition;
import com.sun.jersey.multipart.FormDataParam;

import javax.ws.rs.core.Response;
import javax.ws.rs.*;

@Path("/member_events")


@com.wordnik.swagger.annotations.Api(value = "/member_events", description = "the member_events API")
public class Member_eventsApi  {

   private final Member_eventsApiService delegate = Member_eventsApiServiceFactory.getMember_eventsApi();

    @GET
    
    
    
    @com.wordnik.swagger.annotations.ApiOperation(value = "", notes = "Returns all MemberEvents", response = MemberEvents.class)
    @com.wordnik.swagger.annotations.ApiResponses(value = { 
        @com.wordnik.swagger.annotations.ApiResponse(code = 200, message = "member event response") })

    public Response findMemberEvents(@ApiParam(value = "Vestorly Auth Token",required=true) @QueryParam("vestorly_auth") String vestorlyAuth)
    throws NotFoundException {
    return delegate.findMemberEvents(vestorlyAuth);
    }
}

