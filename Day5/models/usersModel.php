<?

	class usersModel{
		
		public function getUsers(){
			//echo "sql";
			$dbs = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			//echo "run";
			$st = $dbs->prepare("Select * from users");
			//echo "work";
			
			$st->execute();
			//echo "runner";
			//"select name from users";
			
			$obj = $st->fetchAll();
			return  $obj;
		}
//-------------------------------------------------------------------------------------		
		public function getItems(){
			$dbs = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			$st = $dbs->prepare("Select * from items");
			
			$st->execute();
			
			$obj = $st->fetchAll();
			return  $obj;
			
		}
		
		public function getShoes($itemid){
			//echo "sql";
			//echo $itemid;
			$dbs = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			$sql = "Select * from items where itemid= :itemid";
			//echo "run";
			$st = $dbs->prepare($sql);
			//echo "work";
			
			$st->execute(array(":itemid"=>$itemid));
			//echo "runner";
			//"select name from users";
			
			$obj = $st->fetchAll();
			return  $obj;
		}
		
		public function updateItem($sname='',$scolor='',$sid=0){
			$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			// var_dump($_POST);
			// echo $pname;
			// echo $pdesc;
			// echo $pid;
			
			$sql = "update items set itemName = :itemName, itemColor = :itemColor where itemid = :itemid";
			
			$statement = $db->prepare($sql);
			$statement->execute(array(":itemName"=>$sname,":itemColor"=>$scolor,":itemid"=>$sid));
		}
		
		public function deleteShoes($sid)
		{
			$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			$sql = "delete from items where itemid = :itemid";
			
			$statement = $db->prepare($sql);
			$statement->execute(array(":itemid" => $sid));
		}
		
		public function createItem($sname='',$scolor=''){
			$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			$sql = "insert into items (itemName, itemColor) values (:itemName, :itemColor)";
			
			$statement = $db->prepare($sql);
			$statement->execute(array(":itemName"=>$sname,":itemColor"=>$scolor));
			
		}
		
//---------------------------------------------------------------------------------------------		
		public function getProduct($userid){
			//echo "sql";
			$dbs = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			$sql = "Select * from users where id= :id";
			//echo "run";
			$st = $dbs->prepare($sql);
			//echo "work";
			
			$st->execute(array(":id"=>$userid));
			//echo "runner";
			//"select name from users";
			
			$obj = $st->fetchAll();
			return  $obj;
		}
		
		public function update($pname='',$pdesc='',$pid=0){
			$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			var_dump($_POST);
			echo $pname;
			echo $pdesc;
			echo $pid;
			
			$sql = "update users set username = :username, st = :st where id = :id";
			
			$statement = $db->prepare($sql);
			$statement->execute(array(":username"=>$pname,":st"=>$pdesc,":id"=>$pid));
		}
		
		public function delete($pid)
		{
			$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			$sql = "delete from users where id = :id";
			
			$statement = $db->prepare($sql);
			$statement->execute(array(":id" => $pid));
		}
		
		public function createUser($pname='',$pdesc=''){
			$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			$sql = "insert into users (username, st) values (:username, :st)";
			
			$statement = $db->prepare($sql);
			$statement->execute(array(":username"=>$pname,":st"=>$pdesc));
			
		}
		
//---------------------------------------------------------------------------------------------			
			public function addUser($em, $pass){
			
		$db = new PDO("mysql:hostname=localhost;dbname=ssl","root","root");
			
			$sql = "select username from users where username = :un";
			
			$statement = $db->prepare($sql);
			$statement->execute(array(":un" => $em));
			
			if($statement->rowCount() > 0){
				return false;
			}else{
				$protectPass = (md5($pass));
				$sql = "insert into users (username, password) values (:un, :pass)";
				$statement = $db->prepare($sql);
				$statement->execute(array(":un" => $em, ":pass" => $protectPass));
				
				return true;
				
			}
		
		
	}
	
		
	}


		
?>