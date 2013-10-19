<?php

	$userModel -> deleteShoes($_GET['itemid']);

	$data = $userModel -> getItems();
	$viewModel -> getView('views/member_header.php', $data);
	$viewModel -> getView('views/nav.php');
	$viewModel -> getView('views/bodytest.php', $data);