<?php

$userModel -> update($_POST['pname'], $_POST['pdesc'], $_POST['pid']);
$data = $userModel -> getProduct();
$viewModel -> getView("views/updateform.php", $data);
