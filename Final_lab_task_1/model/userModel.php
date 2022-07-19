<?php




	require_once('db.php');

function login($username, $password){
	
	$conn = getconnection();
	$sql = "select * from users where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count > 0){
		return true;
	}else{
		return false;
	}
}

	function registration($username, $password){
	
	$conn = getconnection();
	$sql = insert into users values('username','passwword');
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count > 0){
		return true;
	}else{
		return false;
	}
}




