<?php
$title = "Jackets";
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


include("head.php");
?>
</body>
<p class="showname">
        Jackets:
    </p>
    <div class="showcase">
    <?php
    $showgame = "select * from product where sub ='jack'";
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


<br>
<br>
<?php 
include("footer.php");
?>
</html>