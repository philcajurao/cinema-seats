<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Online links for Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Picture logo at the tab -->
    <link rel="shortcut icon" href="logo-notext.png">
    <link rel="stylesheet" href="style.css">
    <title>Cinema Seats</title>
    <?php
    // Session method is for when you create a variable and use it at different page of your website
    // To able to use it, you need to put session start at every page of your website
        session_start();
    ?>
</head>
<body>

    <!-- PHP code to connect to MySQL Database -->
    <!-- We put this on every page so that page is connected to the Database -->
    <?php 
    $servername = "localhost"; //the name of your server in xampp is localhost (take notice of your link address it is from "localhost" server)
    $username = "root"; //default username
    $password = ""; //put a blank when you dont want to put a password in your database
    $database_name = "cinema_db"; //the name of database in your phpMyAdmin MySQL


    // Hence the use of Session method for us to use it all over our website to avoid repetition of connection to database
        $_SESSION["servername"] = $servername; // We use the variables above and make it a Session variable
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["dbname"] = $database_name;
        $_SESSION["success"] = false;
        

        //We use mysqli_connect to connect all the varibles to Database as one
        $conn = mysqli_connect($_SESSION["servername"],$_SESSION["username"],$_SESSION["password"],$_SESSION["dbname"]) or die("Unable to CONNECT");

?>
    <!-- Navigation Bar -->
    <nav class="nav-bar">
        <!-- Image logo -->
            <div class="logo"><a href="index.php"><img src="logo.png"></a></div> 

        <!-- The Login button on Top-right -->
            <ul>   
                <li><a href="login.php" ><i class="fa fa-user-circle" style="font-size: 20px;" aria-hidden="true">&nbsp;</i>Login/Sign up</a></li>
            </ul>
    </nav>

    <!-- Center of the Homepage -->
    <div class="welcome">
        <center>
            <div class="welcome-content"> 
                <div class="pic"><span><img src="logo.png" alt=""></span></div>
                        <h1>Watch with your Friends or Family together.</h1>
                        <h2>Hurry and reserve your seats!</h2>
                        <form action="movies.php">
                            <input type="submit" value="Reserve A Seat"  style="background-color: #F42222;
    border-radius: 7px;
    color: white;
    padding: 15px;
    border: none;
    font-size: 20px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;">
                        </form>
                </div>
        </center>
    </div>

    
    <!-- The Contents Below the Homepage -->
    <div class="content">
            <div class="first-come-first-serve">
                <div class="column">
                    <h2>First come first serve</h2>
                    <p>We encourage you to go early as you reserve your seats.</p>
                </div>
                <div class="column">
                    <img src="Late.gif" alt="">
                </div>
            </div>
            <div class="free-popcorn">
                <div class="column">
                    <img src="popcorn.gif" alt="">
                </div>
                <div class="column">
                    <h2>FREE Popcorn!</h2>
                    <p>Enjoy your watching on cinema with a free popcorn.</p>
                </div>
            </div>
            <div class="family-discount">
                <div class="column">
                    <h2>Family discount</h2>
                    <p>Happy seeing you bond with your family. So now, we offer a family discount.</p>
                </div>
                <div class="column">
                    <img src="Family.gif" alt="">
                </div>
            </div>
    </div>


    <!-- Footer below the Contents -->
    <div class="contacts">
        <h4><a href="about.html">About us</a></h4>
       
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Email</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </div>
    
    <footer class="footer">
        <span>All rights reserved 2021 Cinema Seats</span>
    </footer>
</body>
</html>