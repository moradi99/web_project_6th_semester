<?php
        session_start();
	    error_reporting(0);
		$servername ="localhost";
    	$username ="root";	
        $password ="";
        $dbname="loginsystem";	
    	$conn = mysqli_connect($servername, $username, $password,$dbname);
		if(!$conn){
		echo"not connected to database";
	}
	 
       

if (isset($_POST['email']) && isset($_POST['Pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['Pass']);

	if (empty($uname)) {
		header("Location: loginpage.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginpage.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM login WHERE email='$uname' AND Pass='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] == $uname && $row['Pass'] == $pass) {
            	$_SESSION['session_start();'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index1.php");
		        exit();
            }else{
				header("Location: loginpage.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: loginpage.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginpage.php");
	exit();
}

	?>