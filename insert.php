<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "view transactions";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['TRANSFER'])){

    if(!empty($_POST['to']) && !empty($_POST['from']) && !empty($_POST['amount'])){

        $to = $_POST['to'];
        $from = $_POST['from'];
        $amount = $_POST['amount'];

        $query = "INSERT INTO `transactions`(`To`, `From`, `Amount`) VALUES('$to', '$from', '$amount')" ;

        $run = mysqli_query($conn, $query) or die (mysqli_error($conn));

        if($run){
         echo "transaction successful" ;

        }
        else{

         echo "transaction failed";
        }

    }
    else{
        echo "all fields required";
    }
}


?>