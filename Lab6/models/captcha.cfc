<cfcomponent>
	
    <cffunction name="cap" returntype="void" access="public">
    
    	<cfset var char = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUIVWXYZ">
        <cfset var message = "">
        <cfset var i = "">
        <cfset var chars = "">
        
        <cfscript>
			for(i=1; i <=6; i++){
				chars = mid(char, randRange(1, len(char)),1);
				message&=chars;
			}
		</cfscript>
    <br>
    <cfimage action="captcha" fontSize="25" width="162" height="75" text="#message#" fonts="Verdana,Arial,Courier New,Courier">
        
        <cfset session.captchaMessage="#message#">
        </cffunction>
        
</cfcomponent>