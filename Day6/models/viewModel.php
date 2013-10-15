<?
//controller (index)
//include 'models/view.php';

class viewModel{

	/*public function __construct(){


	}*/
	public function getView($myfile="", $data=array()){

		include $myfile;

	}



}

?>