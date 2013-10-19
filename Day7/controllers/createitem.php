<?php
	$userModel -> createItem($_POST['shoename'], $_POST['shoecolor']);
	$data = $userModel -> getItems();

	$viewModel -> getView('views/header.php', $data);
	$viewModel -> getView('views/nav.php');
	$viewModel -> getView('views/bodytest.php', $data);