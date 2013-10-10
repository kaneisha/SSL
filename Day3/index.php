
<?
//echo "hello";
//controller (index)
include 'models/viewModel.php';
include 'models/validationModel.php';
include 'models/usersModel.php';

$viewModel = new viewModel();
$validate = new validationModel();
//echo "get";
$userModel = new usersModel();

if(!empty($_GET["action"])){
	//echo "hi";
	//echo $_GET["action"];
	if($_GET["action"] == "login"){

		$em = $_POST["username_login"];
		$pass = $_POST["password_login"];

		$result = $validate->getLogin($em, $pass);

		echo $result;
	}
	
	else if($_GET["action"] == "users"){
		//echo "users";
		$data = $userModel->getUsers();
		$data = $userModel->getProduct();
		//var_dump($data);
		$viewModel->getView('views/body.php',$data);
	}
	
		else if($_GET["action"] == "productinfo"){
			 $data = $userModel->getUsers(); 
			 //var_dump($data); 
			 $viewModel->getView("views/body.php", $data); 
		}else if($_GET["action"] == "updateform"){
			 $data = $userModel->getProduct($_GET['prid']); 
			 $viewModel->getView("views/updateform.php", $data); 
		}
		else if($_GET["action"] == "updatepr"){
			$userModel->update($_POST['pname'],$_POST['pdesc'],$_POST['pid']);
			 $data = $userModel->getProduct(); 
			 $viewModel->getView("views/updateform.php", $data); 
		}
		else if($_GET["action"] == "delete"){
			 $userModel->delete($_GET['prid']);
			 $data = $userModel->getProduct(); 
			 $viewModel->getView("views/body.php", $data); 
		}
		else if($_GET["action"] == "createuser"){
			
			 $userModel->createUser($_POST['username'],$_POST['password']);
			 $data = $userModel->getUsers(); 
			 $viewModel->getView("views/createuser.php", $data); 
		}
//---------------------------------------------------------------------------------------------------------------------------------
		else if($_GET["action"] == "item"){
			$data = $userModel->getItems();
			$viewModel->getView('views/header.php',$data);
			$viewModel->getView('views/nav.php');
			$viewModel->getView('views/bodytest.php',$data);
		}
		else if($_GET["action"] == "update"){
			 $data = $userModel->getShoes($_GET['itemid']); 
			 //$data = $userModel->getItems();
			
			//$viewModel->getView('views/bodytest.php',$data);
			$viewModel->getView('views/header.php',$data);
			$viewModel->getView('views/nav.php');
			$viewModel->getView("views/updateitem.php", $data); 
		}
		else if($_GET["action"] == "updateitems"){
			$userModel->updateItem($_POST['sname'],$_POST['scolor'],$_POST['sid']);
			
			 $data = $userModel->getItems();
			$viewModel->getView('views/header.php',$data);
			$viewModel->getView('views/nav.php');
			 $viewModel->getView('views/bodytest.php',$data);
		}
		else if($_GET["action"] == "deleteitem"){
			
			 $userModel->deleteShoes($_GET['itemid']);
			 
			 $data = $userModel->getItems();
				$viewModel->getView('views/header.php',$data);
			$viewModel->getView('views/nav.php');
			$viewModel->getView('views/bodytest.php',$data);
		}
		else if($_GET["action"] == "create"){
			$data = $userModel->getShoes($_GET['itemid']); 
			 //$data = $userModel->getItems();
			
			$viewModel->getView('views/header.php',$data);
			$viewModel->getView('views/nav.php');
			 $viewModel->getView("views/createitem.php");
		}
		else if($_GET["action"] == "createitem"){
			
			 $userModel->createItem($_POST['shoename'],$_POST['shoecolor']);
			 $data = $userModel->getItems(); 
			
			 $viewModel->getView('views/header.php',$data);
			$viewModel->getView('views/nav.php');
			 $viewModel->getView('views/bodytest.php',$data);
			// $viewModel->getView("views/createitem.php", $data);
		}
		
		
//---------------------------------------------------------------------------------------------------------------------------------		
		
		else if($_GET["action"] == "purchase"){

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
 }//else{
// 		
	// }



$data = array("name" => "orcun");
//Just telling it to get the view
// $viewModel->getView('views/header.php',$data);
// $viewModel->getView('views/nav.php');
// $viewModel->getView('views/body.php');
// $viewModel->getView('views/footer.php');
//$viewModel->getView('views/purchase.php');



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




