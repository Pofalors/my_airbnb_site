<?php

//Ένα session είναι ένας τρόπος αποθήκευσης πληροφοριών
//που θα χρησιμοποιηθούν σε πολλές σελίδες
session_start();


if(isset($_POST['submit'])){
	
	include 'database.php';
	
	$uid = $_POST['uid'];
	$password= $_POST['pwd'];
	
	
	//xeirismos errors
	
	if( empty($uid) || empty($password)){
		header("Location: ../login_scr.php?login=empty");
	     exit();
		
	}else{
		
		$sql = "SELECT *FROM USERS WHERE user_uid='$uid';";
		$result = mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		
		if($resultCheck == 0){
			
			header("Location: ../login_scr.php?login=error");
	        exit();
			
		}else{
			//επιστρέφει τα αποτελέσματα ως σχεσιακό πίνακα
			//χρησιμοποιώντας ως keys τις ονομασίς των πεδίων
			$row=mysqli_fetch_assoc($result);
			if($row  > 0){
				
				$hashedpwd=password_verify($password,$row['user_pwd']);
				if($hashedpwd==false){
					header("Location: ../login_scr.php?login=error");
	                exit();
					
				}elseif($hashedpwd==true){
					
					//o user kanei login
					//global variable
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first_name'];
					$_SESSION['u_last'] = $row['user_last_name'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_username'] = $row['user_uid'];
					$_SESSION['avatar'] = 'images/avatar.png';
					header("Location: ../mmb.php?login=success");
	                exit();
					
					
					
				}
				
				
			}
			
			
		}
		
	}
	
}else{
	
	header("Location: ../login_scr.php?login=error");
	exit();
}






?>