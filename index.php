<?php include './actions/db.php' ?>
<?php
//To Load The Store Item 
$sql = "SELECT * FROM items";

$result = mysqli_query($conn, $sql);

$item = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>


.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  position: sta;
  width: 100%;
  
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

/* footer */


body{
    background: #fcfcfc;
    font-family: sans-serif;
}
footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;

    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    background: #111;
}
.footer-content h3{
  color: #fff;
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;

    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
  color: #fff;
    background: #000;
    width: 100vw;
    padding: 20px;
padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
float: left;
color: #fff;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color: #fff;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}
    </style>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>preficient store - Buyer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="app.js"></script>

    <header>
 
    <div class="header">
      <a href="index.html" class="logo"><img src="assest/online shoping logo.jpg" alt="Company logo" width="50" height="50">Preficient store</a>
      <div class="header-right">
        <a class="active" href="listing.html">Listing</a>
        <a href="register.html">SignUp</a>
        <a href="login.html">Log in</a>
      </div>
    </div>

  </header>

    <div class="flex items-center" style="font-family: 'Muli', sans-serif">
      <div class="container ml-auto mr-auto flex flex-wrap items-start">
        <div class="w-full pl-5 lg:pl-2 mb-4 mt-4 p-4 text-center">

        <center><img src="assest/b2.png" alt="online shoping logo"></center>
      
        </div>

        <?php foreach ($item as $oneItem): ?>
          

<form action="cart.php" method="POST">
<div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
<div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">

  <div class="w-64 p-3 bg-base-50 shadow-xl  sm:w-48px-2 hover:-translate-y-1 border rounded-lg">

    <figure><img src=" <?php echo htmlspecialchars($oneItem['item_image']) ?>" alt="Shoes" /></figure>
    <div class="card-body">

    <div class="rounded-lg p-4 bg-purple-700 flex flex-col">
    <h5 class="text-white text-2xl font-bold leading-none">
        <?php echo htmlspecialchars($oneItem['item_name']) ?>
      </h5>
      
        Discription : <?php echo htmlspecialchars($oneItem['discription']) ?> <br>
        <h5> Price : <?php echo htmlspecialchars($oneItem['price']) ?> </h5><br>
        
      </p>
      <input type="hidden" name="id" value="<?php echo $oneItem['id'] ?>">
      <input type="hidden" name="Name" value="<?php echo $oneItem['name'] ?>">
      <input type="hidden" name="Price" value="<?php echo $oneItem['price'] ?>">
      <input type="hidden" name="Discount" value="<?php echo $oneItem['discount'] ?>">


      </p>
      <div class="card-actions justify-end">

        <input type="submit" name="Update" value="Add To Cart" class="btn  btn-info btn-xs">

      </div>
    </div>
    </div>
  </div>
</div>
  </div>
</form>
<?php endforeach; ?>


        
        

        
      </div>
    </div>


    <div class="flex items-center" style="font-family: 'Muli', sans-serif">
      <div class="container ml-auto mr-auto flex flex-wrap items-start">
        <div class="w-full pl-5 lg:pl-2 mb-4 mt-4 bg-orange-500 p-4 text-center">
          <h1 class="text-3xl lg:text-4xl text-gray-700 font-extrabold text-white">
            My Cart <i class="fa-solid fa-cart-shopping"></i>
          </h1> 
        </div>
        <div>
          <ul id="cartItems" class="flex">
          </ul>

          
        </div>
        

         
    
      </div>
    </div>

    <div class="footer-content">
      <h3>Preficient store</h3>
      <p>Sri lanka largest online laptop sale.</p>
      <ul class="socials">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
  </div>
  <div class="footer-bottom">
      <p>copyright &copy; <a href="#">FCT</a>  </p>
              <div class="footer-menu">
                <ul class="f-menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Contact</a></li>
        
                </ul>
              </div>
  </div>

 
</body>


</html>
