<?php
	 session_start();

	 $name=$_POST['name'];

	 if($name== null){

	 	echo "Name cannot be empty";
	 }

	 else if(strlen($name)<2){
	 	echo "name must contain two letters";
	 }
	 else if(preg_match("/^[a-z][a-zA-z.-]+$/",$_POST['name'])===0){

	 	echo "Must start with a letetr and  Only letters,dot and dash are allowd";
	 }
	
	 	
	 
	 ?>
	
            
	


	 