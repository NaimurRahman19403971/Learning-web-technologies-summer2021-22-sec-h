<?php  
$id=$_REQUEST['id'];
$password=$_REQUEST['password'];
$confirm_password= $_REQUEST['confirm_password'];
$name=$_REQUEST['name'];
$usertype=$_REQUEST['usertype'];

if($id==null || $password==null || $confirm_password==null || $name==null || $usertype==null){
	echo "Invalid";
}
//else if($confirm_password==$password){
//echo "confirm password must same as password";
//}
else{
	$user=$id. "|".$password."|".$confirm_password."|".$name."|".$usertype."\r\n";
	$file=fopen('users.txt','a');
	fwrite($file,$user);

}

?>