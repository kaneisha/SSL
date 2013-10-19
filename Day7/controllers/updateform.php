<?php

$data = $userModel -> getProduct($_GET['prid']);
$viewModel -> getView("views/updateform.php", $data);
