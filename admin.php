
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Admin</title>

  <style>
    body {
      background-color:#222;
      color: white;
    }
    hr {
      border: 1px solid black;
    }
    h1 {
      color:#f42222;
      font-family:Nunito, Sans-serif;
    }
    .inv {
      border-left:10px solid #f42222;
      padding-left: 30px;
      background-color: white;
      color: black;
      border-radius: 10px;
      width: 85%;
      box-shadow: 10px 10px 10px rgba(43, 30, 30, 0.7);
    }
    .cinema img {
      width: 100px;
      margin-left: 100px;
      margin-top: 5px;
    }
    
    .navi li a{
      font-size: 20px;
    }
    .navi li:hover{
      background-color: #f42222;
      transition: 0.5s;
      border-radius:none;
    }

  </style>
</head>
<body>

    <?php
        session_start();
        if(empty($_SESSION['adminid'])):
            header('Location:admin-login.php');
        endif;
         
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "cinema_db";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database_name);
    ?>

 <div class="navbar-fixed">   
<nav>
    <div class="nav-wrapper black navi">
      <a href="index.php" class="brand-logo cinema"><img src="logo.png" alt=""></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#dash">Home</a></li>
        <li><a href="#checkout">Checkout</a></li>
        <li><a href="#account">Accounts</a></li>
      </ul>
    </div>
  </nav>
  </div>
    <div style="position:fixed;text-align:right;width:100%;">   
  <a href="admin-logout.php" class="btn red darken-3 right" style="margin-right:5px;width:100px;">Logout</a>
  <a href="admin-signup.html" class="btn red darken-3 right" style="margin-right:9px;width:190px;">Create an Admin</a>
  </div>   
  
  
  <section class="container center scrollspy" id="dash">
  <br><br><br><br><br><br><br>
  <i class="material-icons" style="font-size:100px;color:black;">account_circle</i>
    <h1>WELCOME!</h1>
    <h1>You are on the Admin page</h1>
  </section>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


  <section class="container center inv scrollspy" id="checkout">
    <h3 class="left">Checkout Records</h3>
    
    <input type="search" id="records" name="item" onkeyup="myFunction()">
    <label for="" class="left">Search Receipt ID</label>
    
    <table id="myTable" class="reponsive-table">
      
        <tr>
          <th>Receipt ID</th>
          <th>User</th>
          <th>Movie</th>
          <th>Price</th>
          <th>Reservation Fee</th>
          <th>Total</th>
          <th>Date</th>
        </tr>
      
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database_name = "cinema_db";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database_name);
      
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete= mysqli_query($conn, "DELETE FROM `checkouts` WHERE id = '$id'");
      }
  
  

      $sql = "SELECT * FROM checkouts";
      $results = $conn->query($sql);
          if ($results->num_rows > 0) {     
              while($row = $results->fetch_assoc()) {
              echo "
              
                  <tr>
                      <td>" . $row["receipt"] . "</td>
                      <td>" . $row["user"] . "</td>
                      <td>" . $row["movie"] . "</td>
                      <td>" . $row["price"] . "</td>
                      <td>" . $row["reservationFee"] . "</td>
                      <td>&#8369; " . $row["total"] . ".00</td>
                      <td>" . $row["date"] . "</td>
                      <td>" . "<a href='admin.php?id=" . $row['id'] . "#checkout' class='btn red' '>Remove</a> " . "</td>
                  </tr>
              ";
              if($row["id"] > 0)
                      {
                          $success = true;
                      }
              }
      } 
      if ($success == true)
      {       
          echo "<script>yuo = 'success';
                alert.(yuo);</script>";
      }
      
      else {
          echo "Error" . mysqli_error($conn);
        }
      
      ?>
    </table>
  </section>

  <br><br><hr><br><br>

  <section class="container center inv scrollspy" style="margin-bottom:100px;" id="account">
    <h3 class="left">Accounts</h3>
    <table>
      <thead>
        <tr>
          <th>Email</th>
          <th>Username</th>
          <th>Contacts</th>
          <th>Password</th>
        </tr>
      </thead>
      <?php

      if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete= mysqli_query($conn, "DELETE FROM `accounts` WHERE id = '$id'");
      }

      $sql = "SELECT * FROM accounts";
                    
      $result = $conn->query($sql);
          if ($result->num_rows > 0) {     
              while($row = $result->fetch_assoc()) {
              echo "
              <tbody>
                  <tr>
                      <td>" . $row["email"] . "</td>
                      <td>" . $row["usename"] . "</td>
                      <td>" . $row["contact"] . "</td>
                      <td>" . $row["password"] . "</td>
                      <td>" . "<a href='admin.php?id=" . $row['id'] . "#account' class='btn red' '>Remove</a> " . "</td>
                  </tr>
              </tbody>";
              if($row["id"] > 0)
              {
                  $success = true;
              }
              }
          }
      if ($success == true)
      {       
          echo "<script>yuo = 'success';
                  alert.(yuo);</script>";
      }
      else {
          echo "Error" . mysqli_error($conn);
        }
        mysqli_close($conn);      
      ?>
    </table>
  </section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("records");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>