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
	
        $uname=$_POST['Username'];  
        $title=$_POST['JobTitle']; 
        $com=$_POST['Company'];
        $Add=$_POST['Address'];
        $phone=$_POST['phonenumber']; 
        $cover=$_POST['coverletter'];
        $id=$_post['id'];
		
		
		
		

			$sql="INSERT INTO registration(Username,JobTitle,Company,Address,phonenumber,coverletter,id) values
			('$uname','$title','$com','$Add','$phone','$cover','')";
			$result=mysqli_query($conn,$sql);
			if($result){
				header("Location: end.html");
			  }
			else{
			echo"mysqli_error()";
		   }

		
	
		 
		  

		  
	
	?>

	