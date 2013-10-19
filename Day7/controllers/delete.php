<?php

	$userModel -> delete($_GET['prid']);
	$data = $userModel -> getProduct();
	$viewModel -> getView("views/body.php", $data);