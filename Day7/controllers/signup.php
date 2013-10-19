<?php

if ($validate -> validateSignUp() == true) {
	if ($userModel -> addUser($_POST["add_uname"], $_POST["add_pass"])) {
		$viewModel -> getView("views/member_header.php");
		$viewModel -> getView("views/nav.php");
		$viewModel -> getView('views/member_body.php');
	}

} else {
	$msg = "Please try a new Sign Up";
	$viewModel -> getView("views/header.php");
	$viewModel -> getView("views/nav.php");
	$viewModel -> getView('views/login.php');
}
