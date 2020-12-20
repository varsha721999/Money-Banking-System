<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:lightskyblue;">

     <ul>
        <li><a class="head" href="index.php">Send money</a></li>
        <li><a class="active" href="INDEX.html">Home</a></li>
        <li><a class="view" href="view.php">Transactions History</a></li>
     </ul>
     <div class="heading">
        <h1>Customer details</h1>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Email</th>
            <th>Current Balance</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Abhishek</td>
            <td>abhi@email.com</td>
            <td>21234</td>
          </tr>      
          <tr class="success">
            <td>Aman</td>
            <td>aman@email.com</td>
            <td>12342</td>
          </tr>
          <tr class="danger">
            <td>John</td>
            <td>john@email.com</td>
            <td>232667</td>
          </tr>
          <tr class="info">
            <td>Marry</td>
            <td>marry@email.com</td>
            <td>24356</td>
          </tr>
          <tr class="warning">
            <td>Shilpa</td>
            <td>shilpa@gmail.com</td>
            <td>12345</td>
            
          </tr>
          <tr class="active">
            <td>Rohn</td>
            <td>rohn@gmail.com</td>
            <td>23457</td>
           
          </tr>
        </tbody>
      </table>
      
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<button class="open-button" onclick="openForm()">Add  A  Customer</button>

<div class="form-popup" id="myForm">
  <form action="db.php" method="POST" class="form-container">
    
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="firstName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <label for="psw"><b>Current Balance</b></label>
    <input type="number" placeholder="Current Balance" name="psw" required>


    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" name="submit" onclick="closeForm()">Close</button> 
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
</bodystyle>



<?php

include 'db.php';

if(isset($_POST['submit'])){

    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $insertquery = " insert into customer_details(Name, Email, Current Balance) values('$firstName', '$email', '$psw')";

    $res = mysqli_query($con,$insertquery);

    if($res){
        ?>
        <script>
            alert("data inserted properly");
            </script>
            <?php
    }else{
        ?>
        <script>
            alert("data not inserted properly");
            </script>
            <?php
    }

}

?>
    
