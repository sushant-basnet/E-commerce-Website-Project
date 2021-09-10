<?php
// echo $_POST["topic"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ktmmart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
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
  <br>
  <br>
  <center><a href="http://localhost/ktmmart/index.php">Go Back</a></center>
  <br>
</div>
</head>
<body>

<div class="container">
    <p class="itemname">Cart</p>
    <br>
<br>
<p class="textadmin">Product Data</p>
<?php
include("../databaselogin.php");
error_reporting(0);
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<table> <tr><th>Cart Product Id</th><th>Product Name</th> <th>Per</th> <th>Quantity</th> <th>Total</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo "<tr> <th>".$row['cartid']."</th> <th>".$row['name']."</th> <th>".$row['per']."</th> <th>".$row['num']."</th> <th>".$row['total']."</th></tr>";
  }
  echo "</table>";
} else {
  echo "<br><p class='itemname'>Cart Empty</p><br>";
}
//total adder
$finaltemp = 0;
$sql = "SELECT total FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $finaltemp += (int)$row["total"];

  }
  
} else {
 
}
$conn->close();
?>
<p class="itemname">Total : <?php echo $finaltemp;?></p>
    <br>
    <form action="editcart.php" method="post">
        <p class="itemname"> Cart ID you wanna Edit:</p>
         <input type="text"  name="cartid">
        <p class="itemname"> Enter Quantity:</p>
          <input type="text"  name="qun"> <input type="submit" class="sendmail" value="Update" name="submit">
    </form>
    <form action="sendmail.php" method="post">
        <input type="hidden" value=<?php echo '"'.$finaltemp.'"' ; ?> name="finalmoney">
        <p class="itemname">Location : </p>
        <input type="text"  name="location"><br>
        <p class="itemname">Phone Number : </p>
        <input type="text"  name="phone">
        <input type="submit" class="sendmail" value="Confirm Purchase" name="submit">
    </form>
<br>
<footer>
<div class="bottom">
        <div class="section2">
            <p class="titleboot">
                About Us
            </p>
            <p class="infoboot">
                About Ktm-Mart
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
                Sunday-Saturday: 7 AM to 5 PM (Call Center)
            </p>
            <p class="infoboot">
                Email:support@ktmmart.com
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






