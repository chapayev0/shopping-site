<?php
// Add DB file
   include "db.php";

   $sql = "SELECT * FROM user";
   $result = $conn->query($sql);

  

    $name = $_POST["user_name"];		
	$pssw = $_POST["pass"];


    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            if ($row["user_name"] == $name and $row["user_pass"] == $pssw){

                if ($row["user_type"] == "Seller Account"){

                    header("location: /shopping-site/seller_page.html");

                }else{

                    header("location: /shopping-site/buyer_page.html");


                }




                


            }

        }
    } else {
        echo "0 results";
    }
    $conn->close();



  

		  
		 

	

?>
		  