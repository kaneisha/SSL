<body>
		<div id="wrap">
		<div id="cta">
			<h4>rip.your.style</h4>
			<img src="images/homepage-box.png">
			<!--style="background-color:#d7d7d7;height:300px;">-->
		</div>
		<!--<h1 style="margin-left:560px;margin-top:-180px;">CTA</h1>-->
		</div>

	</body>
	
<?
foreach($data as $par){
	echo "<br>";
	echo $par["id"]."<br>";
	echo $par["st"]."<br>";
	echo $par["username"]."<br>";
	echo " <a href='?action=delete&prid=".$par["id"]."'> delete</a>";
	echo " <a href='?action=updateform&prid=".$par["id"]."'> update</a>";
	echo " <a href='?action=createuser'> Create User</a>";

	
	echo "<br>___________________<br>";
}

?>
