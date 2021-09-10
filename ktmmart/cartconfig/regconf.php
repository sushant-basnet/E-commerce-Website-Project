<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ktmmart";
$tempname = "";
$temptype = "";
$tempprice = "";
$tempsub = "";
if(isset($_POST['submit']) && !empty($_POST['name'])){

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tempname = $_POST['name'];
$tempemail = $_POST['email'];
$temppass = ($_POST['pass']);


echo '<p class="textadmin">';
print_r($_POST);
echo '</p>';
unset($_POST);
$sql = "INSERT INTO people (name, email, pass, role) VALUES ('".$tempname."', '".$tempemail."', '".$temppass."','user')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<script> window.location.replace("http://localhost/ktmmart/login.php"); </script>';



}

?>
