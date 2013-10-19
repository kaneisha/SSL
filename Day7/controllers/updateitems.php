<?php

$userModel -> updateItem($_POST['sname'], $_POST['scolor'], $_POST['sid']);

$data = $userModel -> getItems();
$viewModel -> getView('views/header.php', $data);
$viewModel -> getView('views/nav.php');
$viewModel -> getView('views/bodytest.php', $data);
