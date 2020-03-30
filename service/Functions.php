<?php
	
	require('db.php');
	
	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from reg where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from reg";
		$result = mysqli_query($con, $sql);
		return $result;
	}

?>