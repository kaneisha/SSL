
<?
//controller (index)
include 'models/viewModel.php';
include 'models/validationModel.php';


$viewModel = new viewModel();
$validate = new validationModel();

if(!empty($_GET["action"])){
	if($_GET["action"] == "login"){

		$em = $_POST["username_login"];
		$pass = $_POST["password_login"];

		$result = $validate->getLogin($em, $pass);

		echo $result;
	}
}


if(!empty($_GET["action"])){
	if($_GET["action"] == "purchase"){

		$dd = $_POST["purchase_datee"];
		$int = $_POST["number_of_shoes"];
		$tt = $_POST["price"];
		$link = $_POST["link"];
		$color = $_POST["colors"];
		$shoesize = $_POST["size"];

		$result = $validate->getPurchase($dd, $int,$tt, $link,$color,$shoesize);

		if($result == "true"){
			echo "success";
		}else{
			echo "fail $result";
		}
	}
}



$data = array("name" => "orcun");
//Just telling it to get the view
$viewModel->getView('views/header.php',$data);
$viewModel->getView('views/nav.php');
// $viewModel->getView('views/body.php');
// $viewModel->getView('views/footer.php');
$viewModel->getView('views/purchase.php');



//if action exists in the url
// if(!empty($_GET["action"])){
// 	if($_GET["action"] == "form"){

// 		$viewModel->getView('views/form.php',$data);

// 	}else if($_GET["action"] =="process"){

// 		//var_dump($_POST);
// 		$em = $_POST["username"];
// 		$str = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
// 		if(preg_match($str, $em)){
// 			echo "true";
// 		}else{
// 			echo "false";
// 		}

// 	}


// }else{

// 		$viewModel->getView('views/form.php',$data);
// 	}




//<cfdump var="">
?>

<!--equivalent to a trace or console.log-->
<!--var_dump($_GET);-->




