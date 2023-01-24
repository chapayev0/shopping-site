<?php
   include "db.php";


    $item_name = $_POST['item_name'];
    $image_link= $_POST['item_image'];
    $itemDes = $_POST['discription'];
    $price = $_POST['price'];
  $user_id;



if($item_name != "" and $image_link != "" and $itemDes != "" and $price != ""){
              
    $sql = mysqli_query($conn,"INSERT INTO items (id, item_name, item_image, discription, price) VALUES ('$user_id','$item_name','$image_link','$itemDes', '$price')");
    
    header("location: /shopping-site/list_success.html");

    } else {

  echo 'fillout all the data';


}

    
?>