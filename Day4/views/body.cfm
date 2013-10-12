
<!---<cfdump var="#data#">--->
<a href="?action=additem">create</a>
<cfloop query="data">
	<cfoutput><div class="info_view"></cfoutput>
    <!--Equivalent to an echo-->
   
    <cfoutput><h4>Order: #itemid#</h4></cfoutput>
	<cfoutput><b>Shoe Name</b>: #itemName#</cfoutput><br />
    <cfoutput><b>Shoe Color</b>: #itemColor#</cfoutput><br />
    <a href="?action=deleteitem&itemid=<cfoutput>#itemid#</cfoutput>">delete</a>
    <a href="?action=update&itemid=<cfoutput>#itemid#</cfoutput>"> update</a>
  <cfoutput></div></cfoutput>
    

</cfloop>