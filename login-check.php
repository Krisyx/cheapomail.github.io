<?php
	
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];


	$connect = mysql_connect("localhost","root","") or die(mysql_error());

	mysql_select_db("cheapomail")or die(mysql_error());


	$logcheck = mysql_query(" SELECT * FROM users WHERE username = '$username' ");

	//$query = "SELECT * FROM users WHERE 'username' = $username";
		

	$nrow = mysql_num_rows($logcheck);
	
	//echo $nrow;
	if($nrow !=0){
		while($rows = mysql_fetch_assoc($logcheck)){
			$dbusername = $rows['username'];
			$dbpassword = $rows['password'];

		}
		
		if($username == $dbusername && $password == $dbpassword){

			
			header("Location: http://localhost/CheapoMail2/private_message.php");
			$_SESSION['username']=$username;
		}else{
			
			//echo"inside if else";
			header("Location: http://localhost/CheapoMail2/index.php");
			//header("Location: http://localhost/CheapoMail2/private_message.php");

		}
	}else{

		//echo "main if else";
		header("Location: http://localhost/CheapoMail2/index.php");
		//header("Location: http://localhost/CheapoMail2/private_message.php");

	}

?>