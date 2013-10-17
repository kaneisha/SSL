<cfcomponent>

	<cffunction name="getView" returntype="void">
    
        <cfargument name="page" required="yes">
        <cfargument name="data">
        <!--have to wrap name in #-->
    		<cfinclude template="#page#">
    </cffunction>
</cfcomponent>