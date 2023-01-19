<?php
// Add DB file
   include "db.php";

   $sql = "SELECT * FROM user";
   $result = $conn->query($sql);

  

    $name = $_POST["user_name"];		
	$pssw = $_POST["pass"];
    $pssw_re = $_POST["pass_retype"];


    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            if ($name == $row["user_name"]){

                if ( $pssw == $pssw_re){

                    $sql1 = "UPDATE user SET user_pass = $pssw WHERE user_name = 'kasuni'";

                    mysqli_query($conn, $sql);



                    header("location: /shopping-site/index.html");

                }else{

                    header("location: /shopping-site/reset_fail.html");


                }


            }else{

                header("location: /shopping-site/reset_fail.html");
            }


        }
    } else {
        echo "0 results";
    }
    $conn->close();



  

		  
		 

	

?>
		  