<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="shortcut icon" href="logo-notext.png">

<style>
  body {
    background-image: none;
    background-color: #333;
  }
  td {
    padding: 10px;
  }
  th{
    border-bottom: 1px solid #333;
    padding-right: 20px;
  }
  .container {
    position: relative;
   margin: auto;
   background-color: #111;
   width: 700px;
   border-radius: 5px;
   padding: 50px;
  }
  h2 {
    padding: 0px 0px 0px 30px;
    color: white;
  }
  table {
    margin: auto;
   padding: 10px;
   color: white;
   text-align: center;
  }
  .whole {
   width: 100%;
  
  }
  .button1 {
    background-color: #f4222280;
          color: white;
          padding: 10px;
          border: none;
          border-radius: 7px;
          font-size: 18px;
          box-shadow: 10px 10px 10px rgba(43, 30, 30, 0.7);
          cursor: pointer;
          transition: 0.3s;
  }
  .slot1 {
    width: 100%;
    margin: auto;
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 2em;
    color: white;
    font-weight: bold;
  }
  .row {
  
  display: flex;
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  
  flex: 25%;
}

.col-50 {
  
  flex: 50%;
}

.col-75 {
  
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container1 {
  background-color: #f2f2f2;
  padding: 5px 20px 40px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin: auto;
  width: 700px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:  #f42222;
  color: white;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 20px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
  
</style>

</head>
<body>

    

<div class="whole">
  
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "cinema_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);
if(isset($_GET['id'])){
  $id=$_GET['id'];
 }

  $limit = "SELECT COUNT(movie) AS sum FROM checkouts WHERE movie = '$id'";
  $maxresult = $conn->query($limit);

  if ($maxresult->num_rows > 0) {  
  // output data of each row
  while($row = $maxresult->fetch_assoc()) 
  { 
    $movie = $row["sum"];
    $sum = "<header>Reserved &nbsp;slots</header><span
      id='full' style='color:rgb(0, 174, 219);margin:0;top:5%;position:relative;padding:4px;
      border-bottom:5px solid black;'>" . $movie . "/50</span>";
      $_SESSION['total'] = $sum;

      if ($movie == 49) {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function(event) {
          document.getElementById('checkout').disabled = false;
          document.getElementById('checkout').style.backgroundColor = '#f42222';
          document.getElementById('checkout').style.cursor = 'pointer';
        });
        
        </script>";
    } elseif ($movie < 49) {
      echo "<script>
      document.addEventListener('DOMContentLoaded', function(event) {
        document.getElementById('checkout').disabled = false;
        document.getElementById('checkout').style.backgroundColor = '#f42222';
        document.getElementById('checkout').style.cursor = 'pointer';
      });
      </script>";
  }
  } 
} else {}

  echo "<div class='slot1'>" . $_SESSION['total'] . "</div>";
  ?>
  <div class="container">
  <div class="log"><a href="index.php"><img src="logo.png" alt=""></a></div>
    <h2>Checkout Confirmation</h2>
<table>

  
  <thead>
    <tr>
      <th>Movie title</th>
      <th>Movie Price (Php)</th>
      <th>Reservation Fee (Php)</th>
      <th>Date of Release</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><p id="title"> <b>
      <?php 
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        $_SESSION['title']=$id;
      
      echo $id; }
      ?>
      </b>
      </p></td>
      <td><p id="price">
      <?php 
      if(isset($_GET['class'])){
        $class=$_GET['class'];
        $_SESSION['price']=$class;
      
      echo $class; }
      ?>
      </p></td>
      <td><p id="reserve">
      <?php
      $fee= "20.00";
      $_SESSION['fee']=$fee;
    
    echo $fee;
      ?>
      </p></td>
      <td><p id="date">
      <?php
      if(isset($_GET['date'])){
        $date=$_GET['date'];
        $_SESSION['date']=$date;
      
      echo $date; }
      ?>
      </p></td>
    </tr>
    <tr>
      <td colspan="4" style="background-color:#f42222;"><hr style="border:1px solid black;"></td>
    </tr>
  </tbody>
</table>

</div>
</div>
<br><br><br>

<div class="row">
  <div class="col-75">
    <div class="container1">
     

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <a href="print.php"><button class="button1" id="checkout" style="width: 100%;cursor:not-allowed;" disabled>Checkout</button></a>
      
    </div>
  </div>

  <br><br><br>
<div class="container transparent"></div>
</body>
</html>
