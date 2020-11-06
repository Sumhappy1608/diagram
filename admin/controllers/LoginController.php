<?php
require_once('models/login_model.php');
class LoginController
{
	var $login_model;

	function __construct()
	{
		$this->login_model = new login_model();
	}

	function login()
	{
		$data['Email'] = $_POST['Email'];
		$data['Password'] = $_POST['Password'];

		$account = $this->login_model->login_info($data['Email'],$data['Password']);

		if($account != NULL)
		{
			//exit(header('Location: ../'));
			echo "đã đăng nhập được";
		}
		else
		{
			//header('Location: ?mod=login&act=form');
			echo "không có tài khoản";
		}
	}

	function form()
	{
		require_once('views/login.php');
	}

	function logout()
	{
		require_once('../?mod=login');
	}

}


?>