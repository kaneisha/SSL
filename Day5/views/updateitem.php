
<?

	foreach ($data as $par) { ?>
		<form action="?action=updateitems" method="post">
			
			Product Id:
			<input type="text" name="sid" readonly="readonly" value="<?=$par["itemid"]?>" />
			
			Shoe Name:
			<input type="text" name="sname" value="<?=$par["itemName"]?>" /><br />
			
			Shoe Color:
			<input type="text" name="scolor" value="<?=$par["itemColor"]?>" /><br />
			
			<input type="submit" value="update" />
			
		</form>
	<? }?>