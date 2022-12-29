<?php
// Add DB file
   include "db.php";

   $sql = "SELECT * FROM users";
   $result = $conn->query($sql);

  

    $name = $_POST["user_name"];		
	$pssw = $_POST["pass"];


    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            echo "id: " . $row["user_name"]. " - Name: " . $row["user_mail"]. " " . $row["user_phone"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();



  

		  
		 

	

?>
		  