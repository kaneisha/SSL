
<?
//controller (index)
//include 'models/view.php';

//Date Validation 	
//^(((((((0?[13578])|(1[02]))[\.\-/]?((0?[1-9])|([12]\d)|(3[01])))|(((0?[469])|(11))[\.\-/]?((0?[1-9])|([12]\d)|(30)))|((0?2)[\.\-/]?((0?[1-9])|(1\d)|(2[0-8]))))[\.\-/]?(((19)|(20))?([\d][\d]))))|((0?2)[\.\-/]?(29)[\.\-/]?(((19)|(20))?(([02468][048])|([13579][26])))))$

//Integer Validation
//^-?\d*(\d+)?$

//Dollar Validation
//^\$(\d{1,3}(\,\d{3})*|(\d+))(\.\d{2})?$

//URL Validation	
//^(ht|f)tp(s?)\:\/\/[a-zA-Z0-9\-\._]+(\.[a-zA-Z0-9\-\._]+){2,}(\/?)([a-zA-Z0-9\-\.\?\,\'\/\\\+&amp;%\$#_]*)?$



class validationModel{

	/*public function __construct(){


	}*/
	
	public function getLogin($email="",$password=""){
		//$loginErr = "";

		$email_match = '/^[a-zA-Z]+[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/';
		$password_match = '/^[a-zA-Z]\w{7,14}$/';
		
		
		if(preg_match($email_match, $email) &&  preg_match($password_match, $password)){
			echo "true";
		}else{
			//$loginErr = '*You put in the wrong information please try again';
			echo "false";
			
		}
		
		
	}

		public function getPurchase($date="",$integer="",$total="",$url="")
	{
	
		$date_match = "/^(([1-9])|(0[1-9])|(1[0-2]))\/(([0-9])|([0-2][0-9])|(3[0-1]))\/(([0-9][0-9])|([1-2][0,9][0-9][0-9]))$/";
		$integer_match = '/^-?\d*(\d+)?$/';
		$total_match = '/^\$(\d{1,3}(\,\d{3})*|(\d+))(\.\d{2})?$/';
		$url_match = '/^(ht|f)tp(s?)\:\/\/[a-zA-Z0-9\-\._]+(\.[a-zA-Z0-9\-\._]+){2,}(\/?)([a-zA-Z0-9\-\.\?\,\'\/\\\+&amp;%\$#_]*)?$/';
		
		if(!preg_match($date_match, $date)){
			//echo "true";
			echo "Invalid Date";
		}else if(!preg_match($integer_match, $integer)){
			//$loginErr = '*You put in the wrong information please try again';
			//echo "false";
			echo "Invalid Amount";
			
		}else if(!preg_match($total_match, $total)){
			echo "Invalid Total";
		}else if(!preg_match($url_match, $url)){
			echo "Invalid Link";
		}else if(!isset($_POST['colors'])){
        	echo "Please choose a color";
    	}else if(!isset($_POST['size'])){
        	echo "Please choose a size";
		}else{
			return "true";
		}
			
	}



}

?>