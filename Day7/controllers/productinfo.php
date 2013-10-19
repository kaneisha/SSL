<?php

	$data = $userModel -> getUsers();
	//var_dump($data);
	$viewModel -> getView("views/body.php", $data);
