<html>
<body>
<?php

    extract($_POST)
?>
<h1> Welcome <?php echo $_POST["username"]; ?> </h1><br/>

<?php
   $servername = "localhost";
   $uname = "root";
   $pass= "";
   $dbname = "ma";

   // Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO userprofile(username,email,passw) VALUES ('$username','$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "<h1 style=\"color:green\";> Sigup is sucessful </h1>";
  echo "<h2> Click <a href=\"http://localhost/mouli/login.html\">here</a> to Sign in </h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
   
?>
 


</body>
</html>