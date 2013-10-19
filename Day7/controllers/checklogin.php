<?php

$data = array("un"=>$_POST["username_login"],"pass"=>md5($_POST["password_login"]));
$test = $logins->checkUser($data);
$msg="Invalid Login";

// $em = $_POST["username_login"];
// $pass = $_POST["password_login"];
if($test == 1){
	
	//$test = $logins->checkUser($data);
	$viewModel->getView("views/member_header.php");
	$viewModel->getView("views/nav.php");
	$viewModel->getView('views/member_body.php');

}else{
	
	$viewModel->getView("views/header.php",$msg);
	$viewModel->getView("views/nav.php");
	$viewModel->getView("views/body.php");
	$viewModel->getView('views/footer.php');
	
}


// if($test == 1){
	// $viewModel->getView('views/purchase.php');
// }else{
	// $viewModel->getView("views/header.php",$msg);
// }