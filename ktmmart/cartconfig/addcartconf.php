<?php
// echo $_POST["topic"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ktmmart";
session_start();

if($_SESSION["username"] == "Guest"){
    echo '<script> window.location.replace("http://localhost/ktmmart/login.php"); </script>';
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// print_r($_SESSION);
//show in page
?>
<?php
$stat = "";
$statlink = "";
// session_start();
if(empty($_SESSION["username"])){
  $_SESSION["username"] = "Guest";
  $stat = "Login";
  $statlink = "login.php";
}
else{
  $stat = "Logout";
  $statlink = "logout.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
// print_r($_SESSION);
// echo "<p class='textadmin'> ID here:".$_SESSION['username']."</p>";
if(empty($_SESSION["username"])){
  $usernamemain = "Guest";
  
}
else{
  $usernamemain = $_SESSION["username"];
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="stylesheet" href="../main.css">
    <div class="home">
    <div class="nav">
        <div class="logo">
        <p class="name">Ktm-Mart</p>
       </div>
        <div class="search">
        <form action="search.php" method="$_GET">
            <input type="text" placeholder=" Search.." name="name" class="boxsearch">
            <button type="submit"class="searchbutton"><img src="../homepageimg/search.png" alt="search" height="50px"> </button>
            </form>
        </div>
        <div class="user">
            <img src="../homepageimg/profile.png" alt="user" height="40px">
        </div>
        <p class="usertext">
                <?php echo $_SESSION["username"]; ?>

        </p>
         <img src="../homepageimg/cart.png" alt="cart" class="cartimg" height="40px">
         <a href="#" class="cartre">Add Cart</a>
       
        <br>
        </div>
    </div>
    <div class="navbar">
  <a href="http://localhost/ktmmart/index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Mobile Phones
 
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ktmmart/apple.php">Apple</a>
      <a href="http://localhost/ktmmart/mi.php">Mi</a>
      <a href="http://localhost/ktmmart/samsung.php">Samsung</a>
      
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Men's wear
     
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ktmmart/jack.php">Jacket</a>
      <a href="http://localhost/ktmmart/jeans.php">jeans Pant</a>
      <a href="http://localhost/ktmmart/tshirt.php">T-shirt</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">
      Beverage
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ktmmart/rum.php">Rum</a>
      <a href="http://localhost/ktmmart/whiskey.php">Whiskey</a>
    </div>
  </div>
 <br>
</div>
</head>
<body>
<?php
$tempimg = "";
$tempprice = "";
$tempname = "";
 $sql = "SELECT * FROM product WHERE productid = '".$_POST['topic']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
   $tempname = $row['name'];
   $tempprice = $row['price'];
   $tempimg = "../".$row['imgloca'];
  }
  
} else {
  echo "0 results";
} 

?>
<div class="container">
    <div class="imgshowpart">
<img src=<?php echo '"'.$tempimg.'"'; ?> alt="Img here" height="400px">
<div class="cartshow">
    <p class="itemname"><?php echo $tempname; ?></p>
</div>
</div>
<div class="datacollect">
    <p class="itemname">Per item Rs: <?php echo $tempprice ?></p><br>
    <form action="addercart.php" method="post">
        <input type="hidden" name="nameproduct" value=<?php echo '"'.$tempname.'"' ?>><br>
        <input type="hidden" name="perprice" value=<?php echo '"'.$tempprice.'"' ?>><br>
        <input type="number" class="itembox" name="number"><br>
        <input type="submit" name="submit" value="Confirm" class="addbtn">
    </form>
    
</div>
</div>
<footer>

<div class="bottom">
        <div class="section2">
            <p class="titleboot">
                About Us
            </p>
            <p class="infoboot">
                About Ktm Mart
            </p>
        </div>
        <div class="section">
            <p class="titleboot">
                Information
            </p>
            <p class="infoboot">
                FAQ
            </p>
            <p class="infoboot">
                Return & Refund Policy
            </p>
            <p class="infoboot">
                Privacy Policy
            </p>
        </div>
        <div class="section">
            <p class="titleboot">
                Follow us on
            </p>
            <p class="infoboot">
                @Ktm-mart
            </p>
            <br>
            <br>
            <p class="imgboot">
                <a href="https://www.facebook.com/">
                <img src="../homepageimg/facebok.png" height="20px" class="imgboot">
                </a>
            </p>
            <p class="imgboot">
            <a href="https://www.instagram.com/">
                <img src="../homepageimg/insta.png" height="20px" class="imgboot">
            </a>
            </p>
            <p class="imgboot">
            <a href="https://youtube.com/">
                <img src="../homepageimg/youtube.png" height="20px" class="imgboot">
</a>
            </p>
        </div>
        <div class="section1">
            <p class="titleboot">
                Customer Support
            </p>
            <p class="infoboot">
                Call us at 015777888
            </p>
            <p class="infoboot">
                Ktm-mart Customer Service Hours:
            </p>
            <p class="infoboot">
                Sunday-Saturday: 9 AM to 5 PM (Call Center)
            </p>
            <p class="infoboot">
                Email:support@Ktm-mart
            </p>
        </div>
    </div>
    <center>
        <div class="footer">
            <p class="forfoot">
            Ktm-Mart Pvt Ltd. Golfutar,Kathmandu,Nepal
            </p>
        </div>
    </center>
</footer>
</body>
</html>

