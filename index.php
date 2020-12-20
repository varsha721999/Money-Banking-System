<!DOCTYPE html>
<html lang="en">
<head>
<title>Send Money</title>



<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:lightskyblue; text-align:center">

     <ul>
        <li><a class="head" href="details.php">Customer Details</a></li>
        <li><a class="active" href="INDEX.html">Home</a></li>
        <li><a class="view" href="view.php">Transactions History</a></li>
     </ul>
     <!DOCTYPE html>
<html>

<body>
<div class="formframe">
    <form action="insert.php" method="post">
    <label for="fname">TO</label><br></br>
    <input type="text" id="fname" name="to" placeholder="Enter Name"><br></br>

    <label for="lname">FROM</label><br></br>
    <input type="text" id="lname" name="from" placeholder="Enter Name"><br></br>

    <label for="country">AMOUNT</label><br></br>
    <input type="text" id="lname" name="amount" placeholder="Enter Amount">
    <br></br>
   
    <button type="TRANSFER" name="TRANSFER">TRANSFER</button>
  </form>
</div>
</body>
</html>



<?php

include 'insert.php';

if(isset($_POST['TRANSFER'])){

    $to = $_POST['to'];
    $from = $_POST['from'];
    $amount = $_POST['amount'];

    $insertquery = " insert into transactions(to, from, amount) values('$to', '$from', '$amount')";

    $res = mysqli_query($con,$insertquery);

    if($res){
        ?>
        <script>
            alert("successful");
            </script>
            <?php
    }else{
        ?>
        <script>
            alert("failed");
            </script>
            <?php
    }

}

?>