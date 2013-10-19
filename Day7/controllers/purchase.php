<?php

$dd = $_POST["purchase_datee"];
	$int = $_POST["number_of_shoes"];
	$tt = $_POST["price"];
	$link = $_POST["link"];
	$color = $_POST["colors"];
	$shoesize = $_POST["size"];

	$result = $validate -> getPurchase($dd, $int, $tt, $link, $color, $shoesize);

	if ($result == "true") {
		$viewModel -> getView("views/member_header.php");
		$viewModel -> getView("views/nav.php");
		$viewModel -> getView('views/aftershowroom.php');
	} else {
		echo "fail $result";
	}