
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
             
    <title>Cinema Seats</title>
    
    <style>
        body {
            border: 1px solid black;
        }
        h3 {
            margin-bottom: 0;
            margin-top: 0;
        }
        p {
            margin: 0;
        }
        h5 {
            padding-top: 7px;
            margin-bottom: 0;
        }
        td {
            text-align: center;
            
        }
        tr {
            border: none;
        }
        th {
            font-weight: bold;
            text-align: center;
        }
        hr {
            border-top: 1px dashed black;
        }
        .sign p {
            text-align: center;
        }
    </style>
    <?php
     session_start();
     $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name = "cinema_db";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database_name);
            
            $userid = $_SESSION['userid'];
            $movie = $_SESSION['title'];
            $price = $_SESSION['price'];
            $fee = $_SESSION['fee'];
            $total = $price + $fee;
            $date =  date("l, M j Y | H:i ");
            $receipt =  uniqid();

            $query = "SELECT usename FROM accounts WHERE id = '$userid'";
            $result = $conn->query($query);
            while ($user = $result->fetch_assoc()){
                $users =  $user['usename'];
            }


            $sql = "INSERT INTO checkouts (user, receipt, movie, price, reservationFee, total, date) 
            VALUES ('$users','$receipt','$movie','$price','$fee','$total','$date')";
            $results = $conn->query($sql);

            
    ?>
</head>
<body>
<div class="row">
    <div class="col s12 center first">
        <h5><?php echo uniqid(); ?></h5>
        <h3>Cinema Seats</h3>
        <p>Antipolo City, Philippines</p>
        <p id="date">xx</p>
        <p id="time">xx</p>
    </div>
</div>
<div style="width: 100%;overflow:hidden;">
<h6>==========================================================================================================================================</h6>
</div>
<div class="row" style="margin:0;">
    <div class="col s6 center">
        <p><b>Movie Release Date:</b></p>
    </div>
    <div class="col s6 center">
        <p><b>Cinema Time:</b></p>
    </div>
</div>
<div class="row" style="margin:0;">
    <div class="col s6 center">
        <p><?php echo $_SESSION['date']; ?></p>
    </div>
    <div class="col s6 center">
        <p>7am-10am / 2pm-5pm</p>
    </div>
</div>
<div style="width: 100%;overflow:hidden;">
<h6>==========================================================================================================================================</h6>
</div>
<div class="row">
    
<table>
    <thead>
        <tr>
            <th>Movie</th>
            <th>Price (Php)</th>
            <th>Reservation Fee (Php)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_SESSION['title']; ?></td>
            <td id="price"><?php echo $_SESSION['price']; ?></td>
            <td><p id="reserve" ><?php echo $_SESSION['fee']; ?></p></td>
            
        </tr>
    </tbody>
</table>
</div>
<hr>
<br>
<div class="row">
    <div class="col s12 center">
        <p><b>TOTAL: <p id="total"> </p></b></p><br>
        <p><b>PAYMENT STAMP: </b></p><br><br>
        <p>__________________________________________________</p>
    </div>
</div><hr>

<footer>
<div class="row">
    <div class="col s12 center">
        <b><p>THIS SERVES AS YOUR PROOF OF RESERVATION</p></b>
        
        <br>
        <p>For any feedback, contact us:</p>
        <p><b>Email: </b>feedback@cinemaseats.org</p>
        <p><b>Hotline: </b>(02) 989-5555</p>
        <p><b>SMS: </b>(0917) 700-2000</p>
        <br>
        <b><p>VALID ONLY FROM THE DATE OF THE PERMIT TO USE</p></b>
    </div>
</div>
</footer>
<div class="row">
    <div class="col s6 offset-s6 sign">
        <p>____________________________</p>
        <p>Signature</p>
    </div>
</div>


    

<script>
   var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();
var newdate = year + "/" + month + "/" + day;
document.getElementById('date').innerHTML = newdate;

const d = new Date();
const hrs = d.getHours();
const mins = d.getMinutes();
var newtime = hrs + ":" + mins;
document.getElementById("time").innerHTML = newtime;

        
        var orig = document.getElementById('price').innerHTML;
        var sell = document.getElementById('reserve').innerHTML;
        
        var total = parseInt(sell) + parseInt(orig);
        var unicode = '20B1';
        
        var peso =  String.fromCharCode( parseInt(unicode, 16) );
        var totals = peso + " " + parseInt(total) + ".00";
        if (!isNaN(total)) {
                document.getElementById('total').innerHTML = totals;
            } 
</script>
    
<script>
    window.print();
</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    

</body>
</html>