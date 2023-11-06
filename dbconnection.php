<?php
	    error_reporting(0);
		$servername ="localhost";
    	$username ="root";	
        $password ="";
        $dbname="loginsystem";	
    	$conn = mysqli_connect($servername, $username, $password,$dbname);
		if(!$conn){
		echo"not connected to database";
	}
	else{
		
	}
	
        $id=$_post['id'];
		$fname=$_POST['Firstname'];
		$lname=$_POST['Lastname'];
		$uname=$_POST['Username'];
		$mail=$_POST['Email'];
		$sex=$_POST['Gender'];
		$pass=$_POST['Password'];

			$sql="INSERT INTO signup (fname,Lastname,Email,Gender,Username,pass,id) values
			('$fname','$lname','$mail','$sex','$uname','$pass','')";
			$result=mysqli_query($conn,$sql);
            
			$sql="INSERT INTO  login(pass, Email, id) values
			('$pass','$mail','')";
			$result=mysqli_query($conn,$sql);
			if($result){
				header("Location: index.php");
			  }
			else{
			echo"mysqli_error()";
		   }

		
	
		 
		  

		  
	
	?>

	