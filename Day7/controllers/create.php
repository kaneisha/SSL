<?php

	$data = $userModel -> getShoes($_GET['itemid']);
	//$data = $userModel->getItems();

	$viewModel -> getView('views/header.php', $data);
	$viewModel -> getView('views/nav.php');
	$viewModel -> getView("views/createitem.php");
