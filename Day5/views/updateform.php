<form action="?action=process" method="post">

	<input type="text" name="username" />

	<input type="submit" value="SEND" />

</form>

<?

	foreach ($data as $par) { ?>
		<form action="?action=updatepr" method="post">
			
			Product Id:
			<input type="text" name="pid" readonly="readonly" value="<?=$par["id"]?>" />
			
			Product Name:
			<input type="text" name="pname" value="<?=$par["username"]?>" /><br />
			
			Product Desc:
			<input type="text" name="pdesc" value="<?=$par["st"]?>" /><br />
			
			<input type="submit" value="update" />
			
		</form>
	<? }?>
