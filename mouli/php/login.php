<?php

    extract($_POST);
    
?>

 <?php
   $servername = "localhost";
   $usname = "root";
   $pass= "";
   $dbname = "ma";
   $count=0;

$conn = new mysqli($servername, $usname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM userprofile where username='$uname' and passw='$pword' ";
// echo $sql;

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 // printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  $count=$rowcount;

  if($rowcount>0)
   echo "<h1 style=\"color:green\";> Login Successful, Welcome to my Home page </h1>";
   else
   echo "<h1 style=\"color:red\";> Invalid Username/Password </h1>";
    mysqli_free_result($result);
  }
  mysqli_close($conn);
?>
<!--
<script>
  function ajaxcall()
  {
    //alert("Hello");
    const xmlhttp = new XMLHttpRequest();
     xmlhttp.onload = function() {
     const myObj = JSON.parse(this.responseText);
 
   document.getElementById("result").innerHTML = JSON.stringify(myObj);
   //document.getElementById("result").innerHTML = myObj.name+"--"+myObj.email;
}
xmlhttp.open("GET", "jsonfile.php");
xmlhttp.send();
  }

</script>

<h1>
<a style="hover:underline;" href="Javascript:ajaxcall()" > Click here to show personal details in JSON - by getting details from jsonfile.php through AJAX call </a>
</h1>

<h1 id="result"> </h1>

-->

<?php
if($count>0)
{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="../js/profile.js"></script>



</head>
<body>
    <div class="signupFrm">
        <form action="" class="form" method="post" id="ProfileForm">
          <div class="header">
            <img src="../assets/signup.svg" alt="signup" height="100" width="100"/>
          <h1 class="title">Profile Entry</h1></div>
  
          <div class="inputContainer">
            <label for="" class="label">Age </label>
            <input type="number" class="input"  name="age" id="age" placeholder="Age">
          </div>
          
          <div class="inputContainer">
            <label for="" class="label">DOB</label>
            <input type="date" class="input" id="dob" name="dob"  placeholder="DOB">
          </div>

          <div class="inputContainer">
            <label for="" class="label">Contact </label>
            <input type="text" class="input"  name="contact" id="contact" placeholder="Address Detail" style="width:300px;height:100px;">
          </div>

          

          <input type="submit" class="submitBtn" value="Update" id="update" style="margin-top:120px"/>
          
        </div>
      </form>
    </div>

</body>
</html>
<?php
}?>
