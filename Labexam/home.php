<?php
if(isset($_COOKIE['status']))
{
	$name=$_REQUEST['name'];


?>

<html>

<head>
	<title>Home</title>
</head>
	<body>
		<h1>Welcome <?php echo $name; ?></h1>
		<a href="profile.php">Profile</a> 
		<a href="change_password.php">Change Password</a> 
		<a href="logout.php">Logout</a> 
	</body>

</html>
<?php
}else{
	echo "Ivalid request";
}
?>
