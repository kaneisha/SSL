<!--equivalent to 
$views = new views();
$views->getView("views/header.php-->
				
<cfset webRoot="/SSL/Day1/">
                
<cfset views = createObject("component", "models/views")>
<cfset products = createObject("component", "models/products")>

<cfset views.getView('../views/header.cfm')>
<cfset views.getView('../views/nav.cfm')>

<!--php  GET==url and POST==form-->

<cfif not isdefined('url.action')>
    <!--equivalent to $views->getView("views/body.php",$data);-->
    <cfset data = products.getAll()>
    <!---<cfset data = arrayNew(1)>--->
    <!---<cfset data[1]="whipple">--->
    <cfset views.getView('../views/body.cfm',data)>
<cfelse>
    
 	<cfif url.action is "additem">
   		<cfset views.getView('../views/createorder.cfm')>
    	
    <cfelseif url.action is "update">
    	<!--equivalent to $views->getView("views/body.php",$data);-->
		<cfset data = products.getOne(url.itemid)>
        <cfset views.getView('../views/updateitem.cfm',data)>
        
    <cfelseif url.action is "createitem">
   		<cfif IsDefined("form.shoename") and IsDefined("form.shoecolor")>
    		<cfset products.addProduct(#form.shoename#, #form.shoecolor#)>
        </cfif>
        <cflocation url="#webRoot#">
        
	<cfelseif url.action is "deleteitem">
    	<cfif IsDefined("url.itemid")>
    		<cfset products.deleteProduct(url.itemid)>
        </cfif>
        <cflocation url="#webRoot#">
    
    <cfelseif url.action is "updateitems">
    	<cfif IsDefined("form.sid") and IsDefined("form.sname") and IsDefined("form.scolor")>
    		<cfset products.updateProduct(#form.sid#, #form.sname#, #form.scolor#)>
        </cfif>
        <cflocation url="#webRoot#">
        
	</cfif>
</cfif>

<cfset views.getView('../views/footer.cfm')>