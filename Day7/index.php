<?

require_once 'models/viewModel.php';
require_once 'models/validationModel.php';
require_once 'models/usersModel.php';
require_once 'models/checklogin.php';

$viewModel = new viewModel();
$validate = new validationModel();
$logins = new ckUser();
$userModel = new usersModel();

$GLOBALS['web_root'] = '/Day3/';

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = "";
}

if ($action == "") {
	require 'controllers/main.php';
} else {

	if (file_exists('controllers/' . $action . '.php')) {
		require 'controllers/' . $action . '.php';
	} else {
		require 'controllers/error_404.php';
	}

}
