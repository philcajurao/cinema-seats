<?php
  session_start();

  // This condition is when the code detect that there is a previous user that did not logout
  // This will automatically direct you to the movie page, You will not need to login anymore
  if (isset($_SESSION['userid'])) {
    echo "<script>window.location.replace('movies.php');</script>"; 
  } 
  // Notice that we use Session Method also here
  // This Session Variable is from the id of the previous user
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo-notext.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login | Cinema Seats</title>

    <style>
        body {
            background-image: initial;
            background-color: #555;
        }
    </style>
</head>
<body>
  <!-- Image Logo -->
    <div class="log"><a href="index.php"><img src="logo.png" alt=""></a></div>

    <!-- Login container -->
    <div class="log-container">
        <div class="login-container">
            <div class="login-content">
                <div class="login-title">
                    <div class="login-title-content">
                        <h3><i class="fa fa-user-circle" aria-hidden="true"></i>
                           User Login</h3>
                    </div>
                </div>
                <!-- The Form -->
                <!-- The action of this form is to submit all the inputs it received to the login.php page -->
                <!-- The Method POST is to put the user's inputs to the database -->
                <form action="login.php" method="POST">
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Type your email here" style="background-color: #333333; color: #8c8c8c;" required><br>
    
                    <label for="pass">Password</label>
                    <input type="password" name="pass" placeholder="Password" minlength="10" style="background-color: #333333; color: #8c8c8c;" required>
                    
                      <h6 style="margin: 2px;">
                        <a href="forgotpass.php" style="color: rgb(53, 53, 255);text-decoration: none;">Forgot Password</a>
                      </h6>

                    <br>
                    <input type="submit" name="save" value="Login" class="submit">
    
                    <div class="others">
                        <h6>Don't have an account yet?
                            <a href="signup.html" style="color: rgb(53, 53, 255);">Sign Up.</a>
                            </h6>
                           
                        <h6>
                            <a href="admin.php" style="color: rgb(53, 53, 255);">Admin</a>
                            </h6>
                           
                    </div>
                </form>
            </div>
        </div>
      </div>

      <?php
      


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "cinema_db";

        $_SESSION["servername"] = $servername;
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["dbname"] = $database_name;
        $_SESSION["success"] = false;


$conn = mysqli_connect($_SESSION["servername"],$_SESSION["username"],$_SESSION["password"],$_SESSION["dbname"]);


if(isset($_POST['save']))//The Word 'save' is the name of the button of Login
                          // So when you click the button from login, it will come here
{ 
  $email = $_POST['email']; //we made a variable for the email input on login form
  $pass = $_POST['pass'];//we made a variable for the password input on login form

  
  $success = false;


  //We run a MySQL code and make it a variable
  //The code of MySQL is very easy to understand
  //It says that Select the ID from the table name "accounts" Where the email and password is similar/equal 
  //to the inputted email and password on the form
  //you can see the name of the Table on phpMyAdmin "accounts"
  $sql_query = "SELECT u.id FROM `accounts` u WHERE u.email = '$email' AND u.password = '$pass'";
  $result = $conn->query($sql_query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if($row["id"] > 0)
          {   
              //This condition is find any registered user from the database
              //When it find a user that is similar to the inputted email and password on the form
              //You will be directed to the movie page
              $success = true;
              $_SESSION["userid"] = $row["id"];//we use session method for the generated id of user who login to use it for recovery
          }
        }
      }
  if ($success == true)
  {       //if the condition is successful you will direct to movie page
    echo "<script>window.location.replace('movies.php');</script>";
  }                                        
  else {
    //if the username or password is incorrect the will alert and u will be back at the login page
    echo "<script>
          alert('Wrong Username or Password!')
          window.location.replace('login.php');; 
          </script>";
  }
  mysqli_close($conn); //closing the connection to database
}
?>

</body>
</html>