<?php
require_once('Connection.php');
class Model
{
	var $connection;
	var $table = '';

	function __construct()
	{
		$conn_obj = new Connection();
		$this->connection = $conn_obj->conn;
	}

	function login_info($Email,$Password)
	{
		$query = "SELECT a.ID, a.Email, a.Name FROM ".$this->table." a WHERE a.Email = '".$Email."' AND a.Password = '".$Password."' AND a.Status = 1";
		$account = $this->connection->query($query)->fetch_assoc();
		echo $query;
		return $account;
	}
}

?>