<cfloop query="data">
	
  		<form action="?action=updateitems" method="post">
			
			Product Id:
			<input type="hidden" name="sid" readonly value="<cfoutput>#itemid#</cfoutput>" />
			
			Shoe Name:
			<input type="text" name="sname" value="<cfoutput>#itemName#</cfoutput>" /><br />
			
			Shoe Color:
			<input type="text" name="scolor" value="<cfoutput>#itemColor#</cfoutput>" /><br />
			
			<input type="submit" value="update" />
			
		</form>

</cfloop>