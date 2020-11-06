<?php 
$mod = (isset($_GET['mod'])?$_GET['mod']:'');
$act = (isset($_GET['act'])?$_GET['act']:'form');

switch ($mod) {
	case 'login':
		require_once('controllers/LoginController.php');
		$controller_obj = new LoginController();
		switch ($act) {
			case 'form':
				$controller_obj->form();
				break;

			case 'login_action':
				$controller_obj->login();
				break;

			case 'logout':
				$controller_obj->logout();
				break;
			
			default:
				# code...
				break;
		}
		break;
	
	default:
		# code...
		break;
}


?>