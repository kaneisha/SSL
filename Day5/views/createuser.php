<form action="?action=createuser" method="post">

	<input type="text" name="username" />
	<input type="text" name="password" />

	<input type="submit" value="SEND" />

</form>

<?	
foreach ($data as $par) { ?>	
	<form action="?action=create" method="post">
			
			Product Id:
			<input type="text" name="pid" readonly="readonly" value="<?=$par["id"]?>" />
			
			User Name:
			<input type="text" name="pname" value="<?=$par["username"]?>" /><br />
			
			User state:
			<input type="text" name="pdesc" value="<?=$par["st"]?>" /><br />
			
			<input type="submit" value="create" />
			
		</form>
<? }?>