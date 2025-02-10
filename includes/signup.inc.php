<?php

if(isset($_POST['submit'])){
	include_once 'database.php';
	
	$firstname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$email=$_POST['email'];
	$username=$_POST['uid'];
	$password=$_POST['pwd'];
	
	//diaxeirish sfalmatwn
	//elegxos gia adeia pedia
	
	if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
			
			header("Location: ../signup.php?signup=empty");
		    exit();
	}
	else{
		
		//elegxoume an oi metablhtes mas exoun egkures times
		
		if( !preg_match("/[a-zA-Z]/",$firstname) || !preg_match("/[a-zA-Z]/",$lastname)){
			header("Location: ../signup.php?signup=invalid");
		    exit();
			
		}
		else{
			
			//elegxoume an to mail einai egkuro
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=email");
		        exit();
			}
			else{
				
				$sql = "SELECT *FROM USERS WHERE user_uid='$username';";
				$result = mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				
				if($resultCheck>0){
					
					header("Location: ../signup.php?signup=usertaken");
		           exit();	
				}
				else{
					//password
					$hashedpwd=password_hash($password,PASSWORD_DEFAULT);
					
					//eisagoume ta stoixeia tou xrhsth sthn bash
					
					$sql = "INSERT INTO users(user_first_name,user_last_name,user_email,user_uid,user_pwd) VALUES('$firstname','$lastname','$email','$username','$hashedpwd'); ";
					$result = mysqli_query($conn,$sql);
					
					header("Location: ../login_scr.php?signup=success");
		            exit();
				}
			}
			
		}
		
	}		
		
	
	
}
else{
	
	header("Location: ../signup.php");
	exit();
	
}



?>