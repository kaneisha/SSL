<?php

	$userModel -> createUser($_POST['username'], $_POST['password']);
	$data = $userModel -> getUsers();
	$viewModel -> getView("views/createuser.php", $data);