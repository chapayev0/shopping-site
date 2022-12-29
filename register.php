<?php
// Add DB file
   include "db.php";

  
// If user clicks the register button
  // if(isset($_POST["register-btn"])){
        // Get form input data
          $fname = $_POST["name"];		
		  $name = $_POST["user_name"];
		  $email = $_POST["email"];
		  $phone = $_POST["phone"];
		  $pass = $_POST["pass"];
		  $rep_pass = $_POST["password_repeat"];

    if($pass != $reg_pass){
         echo 'passwords incorrect';
    }
    else{
        
        
    $sql = mysqli_query($conn,"INSERT INTO user (name, address, telephone, password) VALUES ('$fname','$add','$mobile','$pass')");
	
	if($sql){
		header("location: hi.html?err-failedstmt");
	}
	else{   
		   header("location: hi.html?err-noerrors");
	}

    }

		  
		 

	

?>
		  