<?php

session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recovery</title>
    <style>
        body {
            background-image: none;
            background-color: #555;
        }
        .container {
            display: block;
            width: 100%;
            margin-top: 200px;
            line-height: 2;
        }
        .container h1 {
            display: block;
            margin: auto;
            width: 90%;
            text-align: center;
            font-size: 50px;
        }
        .container p {
            display: block;
            margin: auto;
            width: 90%;
            text-align: center;
            font-size: 30px;
        }
        .container a {
           text-decoration: none;
           color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Here is your password</h1>
   <p style="text-decoration: underline;">
    <?php

    // Notice that we use the session method here that we did on the first page of the website to shorten are code
    $conn = mysqli_connect($_SESSION["servername"],$_SESSION["username"],$_SESSION["password"],$_SESSION["dbname"]);
    

    // This code finds the id of the Phone number that is inputted from the user
    // After Finding the id, it will get the password of the id and sho it to you
    $pass = $_SESSION['recov'];
    $sql = "SELECT u.password FROM `accounts` u WHERE u.id = $pass ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo $row["password"]. "<br>"; //Echo the password if it has find the alike Phone number that the user inputted
        }
      } else {
        echo "0 results"; //echo 0 results if it not find the number the user typed
      }
      $conn->close();
    
    ?></p>

    <p>Go back to <a href="login.php">login</a></p>
     </div>
</body>
</html>