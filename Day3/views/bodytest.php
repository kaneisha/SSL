
	
<?
	echo " <p><a href='?action=create'> Create Order</a></p>";
	
foreach($data as $par){
	echo '<div class="info_view">';
	//echo "<br>";
	//echo $par["itemid"]."<br>";
	echo "<p><b>Shoe Name:</b> " .$par["itemName"]. '</p>';
	echo "<p><b>Shoe Color:</b> " .$par["itemColor"]."</p>";
	echo " <a href='?action=deleteitem&itemid=".$par["itemid"]."'> delete</a>";
	echo " <a href='?action=update&itemid=".$par["itemid"]."'> update</a>";
	
	echo '</div>';
	
	//echo "<br>___________________<br>";
}

?>
