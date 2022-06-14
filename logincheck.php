<?php
	 session_start();

	 $name=$_POST['name'];

	 if($name== null){

	 	echo "Name cannot be empty";
	 }

	 else if(strlen($name)>2){
	 	echo "name must contain two letters";
	 }
	 ?>

