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
    <title>Movies | Cinema Seats</title>
    <?php
        session_start();
        if(empty($_SESSION['userid'])):
            header('Location:login.php');
        endif;
    ?>
    <style>
        body {
            background-image: initial;
            background-color: rgb(24, 26, 27);
            color: rgb(211, 208, 202);
        }

        .nav-bar-mov {
          background-color: black;
        }
        .nav-bar-mov ul {
          width: 75%;
          list-style-type: none;
          padding: 11px;
          overflow: hidden;
        }
        .nav-bar-mov li {
          float: right;
        }
        .nav-bar-mov li a {
          text-decoration: none;
          color: White;
          padding: 20px 30px 20px;
          text-align: center;
          display: block;
          font-size: 20px;
          font-weight: bold;
         
        }

        .col {
          float: left;
          width: 19.998%;
          padding: 0px 10px 0px 10px;
          position: relative;
        }
        @media only screen and (max-width: 930px) {
          .col {
            width: 33.33%;
          }
          .logout input {
            margin-top: 60px;
            float: right;
          }
        }
        @media only screen and (max-width: 900px) {
          .col {
            width: 99%;
            height: auto;
          }
          
        }
        .col img {
            width: 100%;
            height: 90%;
            object-fit: cover;
            transition: 1s;
            cursor: pointer;
            backface-visibility: hidden;
        }
        .col:hover .image{
          transition: 0.3s;
          opacity: 0.3;
        }
        .col:hover .middle {
          opacity: 1;
        }
        .col a {
          cursor:default;
        }
        .row {
          padding: 15px;
          height: 420px;
          margin-bottom: 20px;
        }
        .row::after {
          content: "";
          clear: both;
          display: table;
        }
        
        .container {
           padding: 9px 16px;
           background-color: transparent;
           color: black;
           border-bottom-left-radius: 10px;
           border-bottom-right-radius: 10px;
        }
        .container h4 {
          color: #F8F9FA;
          text-overflow: ellipsis;
          overflow: hidden;
          white-space: nowrap;
        }
        .container p {
          color: #6C757D;
          font-size: 10px;
        }
          

        .movie-content {
          margin-bottom: 100px;
          color: #F8F9FA;
        }
        .movie-title {
          padding: 30px;
          width: 50%;
          float: left;
        }

        .search {
          width: 40%;
          float: left;
          padding: 30px ;     
        }
        .search-bar {
          width: 300px;
          height: 50px;
          background-color: #3a3a3a;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 30px;
          padding: 0px 20px;
          margin-left: 100px;
        }
        .search-bar i {
          color: #b9b9b9;
          font-size: 20px;
        }
        .search input {
          width: 100%;
          height: 30px;
          border: none;
          outline: none;
          background-color: transparent;
          color: white;
        }
        .logout {
          width: 10%;
          float: left;
          margin-top: 35px;
        }
       

        #myUL {
          list-style-type: none;
        }
        #myUL li a {
          text-decoration: none;
        }

        .middle {
          transition: .5s ease;
          opacity: 0;
          position: absolute;
          top: 45%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          text-align: center;
        }
        .btn {
          background-color: #F42222;
          color: white;
          padding: 10px;
          border: none;
          border-radius: 7px;
          font-size: 18px;
          box-shadow: 10px 10px 10px rgba(43, 30, 30, 0.7);
          cursor: pointer;
          transition: 0.3s;
        }
        .btn:hover{
          box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
        }
        .btn i {
          font-size: 20px;
          float: left;
        }

        
        </style>

</head>
<body>
        <!-- Navigation Bar -->
    <div class="nav-bar-mov">
        <div class="logo"><a href="index.php"><img src="logo.png"></a></div>
        <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>



        <!-- Whole Content -->
    <div class="movie-content">
    <div class="movie-title">
      <h1>Movies and Release Dates</h1>
    </div>

    <!-- The Search Bar -->
      <div class="search">
      <div class="search-bar">
        <input type="text" id="myInput" title="Search" onkeyup="myFunction()" placeholder="Find your movie here..">
        <i class="fa fa-search" aria-hidden="true"> </i>
      </div>
    </div>

    <!-- The Logout Button -->
    <div class="logout">
      <!-- This action will send to the logout.php page -->
      <!-- This will delete the user id so that nobody can access your account when another user use it -->
      <!-- Remember that wrote a condition on login page that if it not detect any user id, it will not automatically go to your user account -->
      <!-- This serves a SECURITY so that nobody can access your account -->
      <form action="logout.php">
        <input type="submit" value="Logout" style="background-color: #F42222;border-radius: 7px;
    color: white;
    padding: 10px;
    border: none;
    font-size: 17px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;">
      </form>
    </div>
  </div>
  
      
      <!-- We use the id myUL for javascript search bar..  -->
  <ul id="myUL">

  <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database_name = "cinema_db";

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $database_name);

  ?>
    <!-- We apply s and col(columns) to arrange the Movies by  -->
      <div class="">
        <div class="col">
          <li><img src="movies1/1.jpg" class="image" style="width:100%;height:400px;">
            <div class="middle">

            <!-- When you click the button, this will direct you to the Payment page -->
              <a href="payment.php?id=Red Notice&class=450.00&date=February 10, 2022"><button class="btn" id="myBtn" title="Red Notice" type="submit" value="Submit"><i class="fa fa-ticket" aria-hidden="true">&nbsp;</i>Php450.00</button></a>
            </div>
            <div class="container" id="RedNotice" title="Red Notice">
              <a href="#" id="name"><h4><b>Red Notice</b></h4></a><p style="float: right;">Release: February 10, 2022</p>
              <p>Duration: 118 min</p>
              <p>Genre: Action</p>
            </div></li>
            

        </div>
        <div class="col">
          <li><img src="movies1/2.jpg" class="image" style="width:100%;height:400px;">
            <div class="middle">
              <a href="payment.php?id=Shang Chi and the Legend of Ten Rings&class=480.00&date=February 14, 2022"><button class="btn" id="myBtn1" title="Shang Chi and Legend of Ten Rings" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php480.00</button></a>
            </div>
            <div class="container" title="Shang Chi and Legend of Ten Rings">
              <a href="#"><h4><b>Shang Chi and the Legend of Ten Rings</b></h4></a><p style="float: right;">Release: February 14, 2022</p>
              <p>Duration: 132 min</p>
              <p>Genre: Action</p>
            </div></li>
            
            
        </div>
        <div class="col">
          <li><img src="movies1/3.jpg" class="image" style="width:100%;height:400px;">
            <div class="middle">
              <a href="payment.php?id=Venom: Let There Be Carnage&class=550.00&date=March 10, 2022"><button class="btn" id="myBtn2" title="Venom: Let There Be Carnages" type="submit" value="Submit"><i class="fa fa-ticket" aria-hidden="true">&nbsp;</i> Php550.00</button></a>
            </div>
            <div class="container" title="Venom: Let There Be Carnage">
              <a href="#"><h4><b>Venom: Let There Be Carnage</b></h4></a><p style="float: right;">Release: March 10, 2022</p>
              <p>Duration: 97 min</p>
              <p>Genre: Action</p>
          </div></li>
          
        </div>
        <div class="col">
            <li><img src="movies1/4.jpg" class="image" style="width:100%;height:400px;">
              <div class="middle">
                <a href="payment.php?id=Eternals&class=350.00&date=March 23, 2022"><button class="btn" id="myBtn3" title="Eternals" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php350.00</button></a>
              </div>
              <div class="container" title="Eternals">
                <a href="#"><h4><b>Eternals</b></h4></a><p style="float: right;">Release: March 23, 2022</p>
                <p>Duration: 156 min</p>
                <p>Genre: Action</p>
              </div></li>
              
        </div>
        <div class="col">
          <li><img src="movies1/5.jpg" class="image" style="width:100%;height:400px;">
            <div class="middle">
              <a href="payment.php?id=Escape Room&class=600.00&date=April 10, 2022"><button class="btn" id="myBtn4" title="Escape Room" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php600.00</button></a>
            </div>
            <div class="container" title="Escape Room">
              <a href="#"><h4><b>Escape Room</b></h4></a><p style="float: right;">Release: April 10, 2022</p>
              <p>Duration: 114 min</p>
              <p>Genre: Adventure</p>
            </div></li>
            
        </div>
     </div>
      
      <div class="">
        <div class="col">
          <li><img src="movies/1.jpg" class="image" style="width:100%;height:400px;">
            <div class="middle">
              <a href="payment.php?id=Start Trek: Into Darkness&class=370.00&date=April 25, 2022"><button class="btn" id="myBtn5" title="Start Trek: Into Darkness" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php370.00</button></a>
            </div>
            <div class="container" title="Start Trek: Into Darkness">
              <a href="#"><h4><b>Start Trek: Into Darkness</b></h4></a><p style="float: right;">Release: April 25, 2021</p>
              <p>Duration: 104 min</p>
              <p>Genre: Action</p>
            </div></li>
            
          </div>
        <div class="col">
          <li><img src="movies/2.jpg" class="image" style="width:100%;height:400px;">
            <div class="middle">
              <a href="payment.php?id=Fantastic Beasts&class=430.00&date=May 3, 2022"><button class="btn" id="myBtn6" title="Fantastic Beasts" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php430.00</button></a>
            </div>
            <div class="container" title="Fantastic Beasts">
              <a href="#"><h4><b>Fantastic Beasts</b></h4></a><p style="float: right;">Release: May 3, 2022</p>
              <p>Duration: 93 min</p>
              <p>Genre: Action</p>
            </div></li>
            
        </div>
        <div class="col">
          <li><img src="movies/3.jpg" class="image" style="width:100%;height:400px;">
            <div class="middle">
              <a href="payment.php?id=The Croods&class=650.00&date=May 6, 2022"><button class="btn" id="myBtn7" title="The Croods" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php650.00</button></a>
            </div>
            <div class="container" title="The Croods">
              <a href="#"><h4><b>The Croods</b></h4></a><p style="float: right;">Release: May 6, 2022</p>
              <p>Duration: 102 min</p>
              <p>Genre: Adventure</p>
            </div></li>
            
        </div>
        <div class="col">
            <li><img src="movies/4.jpg" class="image" style="width:100%;height:400px;">
              <div class="middle">
                <a href="payment.php?id=Toy Story 3&class=700.00&date=May 20, 2022"><button class="btn" id="myBtn8" title="Toy Story 3" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php700.00</button></a>
              </div>
              <div class="container" title="Toy Story 3">
                <a href="#"><h4><b>Toy Story 3</b></h4></a><p style="float: right;">Release: May 20, 2022</p>
                <p>Duration: 130 min</p>
                <p>Genre: Adventure</p>
              </div></li>
              
        </div>
        <div class="col">
            <li><img src="movies/5.jpg" class="image" style="width:100%;height:400px;">
              <div class="middle">
                <a href="payment.php?id=Coco&class=320.00&date=June 12, 2022"><button class="btn" id="myBtn9" title="Coco" type="submit" value="Submit"><i class="fa fa-ticket"  aria-hidden="true">&nbsp;</i> Php320.00</button></a>
              </div>
              <div class="container" title="Coco">
                <a href="#"><h4><b>Coco</b></h4></a><p style="float: right;">Release: June 12, 2022</p>
                <p>Duration: 97 min</p>
                <p>Genre: Adventure</p>
              </div></li>
              
        </div>
    </div><br>
  </div>
</ul>
 


        <!-- Footer -->
<div>
    <div class="contacts" style=" margin-top: 1000px;">
    <br>
    <hr><br>
        <h4>Questions? Contact us.</h4>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Email</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </div>
    
    <footer class="footer">
        <span>All rights reserved 2021 Cinema Seats</span>
    </footer></div>


    <script>
      // This javascript is the reason why we can search on the search bar
      //It finds any similar letter or phrases that you type on the search bar
      function myFunction() {
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName("li");
          for (i = 0; i < li.length; i++) {
              a = li[i].getElementsByTagName("h4")[0];
              txtValue = a.textContent || a.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  li[i].style.display = "";
              } else {
                  li[i].style.display = "none";
              }
          }
      }

          

      </script>
      
</body>
</html>