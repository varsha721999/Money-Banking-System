<!DOCTYPE html>
<html lang="en">
<head>
<title>Transactions</title>
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
        <li><a class="view" href="details.php">Customer Details</a></li>
     </ul>
     <div class="heading">
        <h1>Transaction History</h1>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th>TO</th>
            <th>FROM</th>
            <th>AMOUNT</th>
          </tr>
        </thead>
      </tr>

    
    <?php

    include 'transaction.php';
   
    ?>
        </tbody>
      </table>
      </html>