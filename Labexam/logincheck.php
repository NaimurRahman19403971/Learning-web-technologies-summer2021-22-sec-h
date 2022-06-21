<?php
$userid=$_REQUEST['id'];
$password=$_REQUEST['password'];

if($userid==null || $password==null){
	echo "null username/password";

}
else{
	$file=fopen('users.txt','r');
	 while(!feof($file)){
	 	$data=fgets($file);
	 	$user=explode("|",$data);
	 	if($userid==trim($user[0]) && $password==trim($user[1])){
	 		setcookie('status','true',time()+3600,'/');
	 		header('location: home.php?name='.$user[3]);
	 	}

	 }
	 echo "Invalid username/password";
}
?>