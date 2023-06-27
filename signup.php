<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "cinema_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name );


if(isset($_POST['save']))
{ 
  $email = $_POST['email'];
  $usename = $_POST['usename'];
  $contact = $_POST['contact'];
  $pass = $_POST['pass'];
  

  $sql_query = "INSERT INTO accounts (email,usename,contact,password)
  VALUES ('$email','$usename','$contact','$pass')";

  if (mysqli_query($conn, $sql_query))
  {
    echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
          <div style='text-align:center;margin-top:20%;font-family:Segoe UI;'>
          <h3>You successfully signed up your account!</h3>
          <h4><i class='fa fa-arrow-left' aria-hidden='true'></i><a href='login.php' style='text-decoration:none;'> Click here to try logging in.</a></h4>
          </div>";
  }
  else {
    echo "Error" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>