<?php

session_start();
$_SESSION["loggedin"] = 0;
$data = "<a href='?action=userlogin'>LOGIN</a>";
$viewModel -> getView("views/header.php");
$viewModel -> getView("views/nav.php");
$viewModel -> getView("views/body.php");
$viewModel -> getView('views/footer.php');
session_destroy();
