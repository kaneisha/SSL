<cfcomponent>

	<cffunction name="getAll" returntype="query">
    	
        <cfquery datasource="ssl" name="shoes">
        
        	select * from items
        
        </cfquery>
       
    	<cfreturn shoes>
    </cffunction>
<!-------------------Get One Function------------------------------------------>        
    <cffunction name="getOne" returntype="query">
    	
        <cfquery datasource="ssl" name="shoe">
        
        	select * from items where itemid = 
    		<cfqueryparam value="#itemid#">
        
        </cfquery>
       
    	<cfreturn shoe>
    </cffunction>
    
    
<!-------------------Delete Function------------------------------------------>    
    <cffunction name="deleteProduct" returntype="void">
    in delete product
    	<cfargument name="itemid" required="yes">
        	<cfquery datasource="ssl" name="shoes">
        		delete from items where itemid = 
            <cfqueryparam value="#itemid#">
        
        </cfquery>
       
    </cffunction>
<!-------------------Add Function------------------------------------------>      
       <cffunction name="addProduct" returntype="void">
 
            <cfargument name="itemName" required="yes">
            <cfargument name="itemColor" required="yes">
                <cfquery datasource="ssl" name="addshoes">
                    insert into items (itemName, itemColor) values (
                    <cfqueryparam value="#itemName#">,
                    <cfqueryparam value="#itemColor#">)
       			 </cfquery>
       	
   	 	</cffunction>
 <!-------------------Update Function------------------------------------------>       
          <cffunction name="updateProduct" returntype="void">
 
 			<cfargument name="itemid" required="yes">
            <cfargument name="itemName" required="yes">
            <cfargument name="itemColor" required="yes">
                <cfquery datasource="ssl" name="addshoes">
                    update items set itemName = <cfqueryparam value="#itemName#">, itemColor = <cfqueryparam value="#itemColor#"> where itemid = <cfqueryparam value="#itemid#">
              
       			 </cfquery>
       	
   	 	</cffunction>
    
</cfcomponent>