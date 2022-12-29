<?php
// Add DB file
   include "db.php";

  
// If user clicks the register button
  // if(isset($_POST["register-btn"])){
        // Get form input data
          $name = $_POST["user_name"];		
		  $pssw = $_POST["pass"];



    if($pass != $reg_pass){
         echo 'passwords incorrect';
    }
    else{
        
	
	if($sql){
		header("location: hi.html?err-failedstmt");
	}
	else{   
		   header("location: hi.html?err-noerrors");
	}

    }

		  
		 

	

?>
		  