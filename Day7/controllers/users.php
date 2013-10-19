<?php

//echo "users";
$data = $userModel -> getUsers();
$data = $userModel -> getProduct();
//var_dump($data);
$viewModel -> getView('views/body.php', $data);
