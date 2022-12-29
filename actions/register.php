<?php
// Add DB file
   include "db.php";

  
// If user clicks the register button
  // if(isset($_POST["register-btn"])){
        // Get form input data
          $name = $_POST["user_name"];		
		  $email = $_POST["email"];
		  $phone = $_POST["phone"];
		  $pssw = $_POST["pass"];
		  $rep_passw = $_POST["rep_pass"];


    if($pass != $reg_pass){
         echo 'passwords incorrect';
    }
    else{
        
        
    $sql = mysqli_query($conn,"INSERT INTO user (user_name, user_mail, user_phone, user_pass, user_id) VALUES ('$user_name','$add','$mobile','$pass')");
	
	if($sql){
		header("location: hi.html?err-failedstmt");
	}
	else{   
		   header("location: hi.html?err-noerrors");
	}

    }

		  
		 

	

?>
		  