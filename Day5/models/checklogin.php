<?php
class ckUser{
	public function checkUser($data){
		session_start();
		$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
		
		$q = "select username, password from users where username = :un and password = :pass";
		
		$st = $db->prepare($q);
		
		$st->execute(array(":un"=>$data["un"], ":pass"=>$data["pass"]));
		
		$st->fetchAll();
		$isgood = $st->rowCount();
		
		if($isgood > 0){
			$_SESSION["loggedin"] = 1;
			return 1;
		}else{
			$_SESSION["loggedin"] = 0;
			
			return 0;
		}
		
		
	}
}
?>