<cfapplication name="captchaMessage" sessionmanagement="yes">

<cfset captcha = createObject("component", "models/captcha")>
<cfset loader = createObject("component", "models/fileuploader")>
<cfset views = createObject("component", "models/views")>




<cfset imgUpload = createObject("component", "models/fileuploader")>

<cfif isdefined('url.action')>

	<cfif url.action is "validatecaptcha">
    	<cfif #form.captcha_field# is #session.captchaMessage#>
        	Congratulations you're not a robot
        <cfelse>
        	You entered the wrong characters GO AWAY ROBOT!!
            </cfif>
     </cfif>
    
	<cfif url.action is "upload">
        <cfif #form.upload# != "">
            <cfset imgUpload.up(#form.upload#)>
                Download Complete!
            <cfelse>
                Upload Image
         </cfif>
    </cfif>
</cfif>

<cfset captcha.cap()>
<cfset views.getView("../views/form.cfm")>

<cfset myimf = ImageNew('/Applications/railo-express-4.0.4.001-macosx/webapps/www/SSL/Lab6/images/Screen Shot 2013-09-09 at 4.47.49 PM.png')>
<cfset ImageResize(myimf,"120","90","blackman",2)>

<cfimage source="#myimf#" action="write" destination='/Applications/railo-express-4.0.4.001-macosx/webapps/www/SSL/Lab6/images/Screen Shot 2013-09-09 at 4.47.49 PM.png' overwrite="yes">
             
