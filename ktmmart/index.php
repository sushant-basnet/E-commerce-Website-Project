<?php $title = "Home Page";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ktmmart";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php include 'head.php';?>
 <body>
 <link rel="stylesheet" href="main.css">
 <!-- phones -->
    <p class="showname">
        Top Sell Phones
    </p>
    <div class="showcase">
    <?php
    $showgame = "select * from product where type='samsung'";
    $result = $conn->query($showgame);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        $i++;
        if($i > 5){
            break;
        }
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloca']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '<center><form action="cartconfig/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["productid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
        
      } else {
        echo "0 results";
      }
    ?>

    </div>
    <p class="showname">
        Top Sell Jacket
    </p>
    <div class="showcasemerch">
    <?php
    $showgame = "select * from product where type='jack'";
    $result = $conn->query($showgame);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        $i++;
        if($i > 5){
            break;
        }
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloca']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '<center><form action="cartconfig/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["productid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
      } 
      else
      {
        echo "0 results";
      }
?>
  
    </div>   
    <p class="showname">
        Top Sell Beverage
    </p>
    <div class="showcase">
    <?php
    $showgame = "select * from product where type='whiskey'";
    $result = $conn->query($showgame);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        $i++;
        if($i > 4){
            break;
        }
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloca']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '<center><form action="cartconfig/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["productid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
        
      } else {
        echo "0 results";
      }
    ?>
    </div>
    <?php 
    include("footer.php");
    ?>
</body>
</html>