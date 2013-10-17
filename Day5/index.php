<?
//echo "hello";
//controller (index)
include 'models/viewModel.php';
include 'models/validationModel.php';
include 'models/usersModel.php';
include 'models/checklogin.php';


$viewModel = new viewModel();
$validate = new validationModel();
$logins = new ckUser();
$userModel = new usersModel();



if(isset($_GET["action"])){
		$action = $_GET["action"];
	}else{
		$action = "";
	}
	
	if($action==""){
		//$data = "<a href='?action=userlogin'>LOGIN</a>";
		$viewModel->getView("views/header.php");
		$viewModel->getView("views/nav.php");
		$viewModel->getView("views/body.php");
		$viewModel->getView('views/footer.php');
		
		
	}else if($_GET["action"] =="checklogin"){
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
	}else if($action=="signupview"){
		$viewModel->getView("views/header.php");
		$viewModel->getView("views/nav.php");
		$viewModel->getView('views/login.php');
	
	}else if($action == "signup"){
		
		if($validate->validateSignUp() == true){
			if($userModel->addUser($_POST["add_uname"], $_POST["add_pass"])){
				$viewModel->getView("views/member_header.php");
				$viewModel->getView("views/nav.php");
				$viewModel->getView('views/member_body.php');
			}
			
		}else{
			$msg="Please try a new Sign Up";
				$viewModel->getView("views/header.php");
				$viewModel->getView("views/nav.php");
				$viewModel->getView('views/login.php');
		}
	}
	
	else if($action=="logout"){
		session_start();
		$_SESSION["loggedin"] = 0;
		$data = "<a href='?action=userlogin'>LOGIN</a>";
		$viewModel->getView("views/header.php");
		$viewModel->getView("views/nav.php");
		$viewModel->getView("views/body.php");
		$viewModel->getView('views/footer.php');
		session_destroy();
	}
	




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
//$viewModel->getView('views/header.php',$data);
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