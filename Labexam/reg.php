<html>

<head>
	<title>Registration</title>
</head>
<body>
	<form  action="regcheck.php" method=post enctytpe="">
		<fieldset>
			<legend>REGISTRATION</legend>
			     ID:  <input type="text" name="id" value=""><br>
			Password: <input type="password" name="password" placeholder="" value=""><br>
	Confirm password: <input type="password" name="confirm_password" placeholder="" value=""><br>
			  Name:   <input type="text" name="name" value=""><br>
			Usertype:

			          <input type="radio" name="usertype"    value="user"
			          <label for="user">User</lebel>
			          <input type="radio" name="usertype"value="">
			           <label for="admin">Admin</lebel><br>
			           	<input type="submit" name="submit" value="submit">


			 <a href="reg.php">Signup</a> 
			 <a href="login.php">Signin</a>
		</fieldset>



</html>