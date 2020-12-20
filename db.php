<?php


$username = "root";
$password = "";
$server = 'localhost';
$db="add_customer";

$con = mysqli_connect($server, $username, $password,$db );

if($con){
    //echo "connection successful";
    echo '<Script>alert("Connection Done")</script>';

}else{
    echo "No connection";
}


function add_customer(){
    $username = "root";
$password = "";
$server = 'localhost';
$db="add_customer";
    $con = mysqli_connect($server, $username, $password,$db );
    //INSERT INTO `customer_details`(`Name`, `Email`, `Current Balance`) VALUES ([value-1],[value-2],[value-3])
    $stmt=mysqli_prepare($con,'INSERT INTO `customer_details`(`Name`, `Email`, `Current Balance`) VALUES (?,?,?)');
    $name="Varsha";$email="99999000";$balance="1000";
    mysqli_stmt_bind_param($stmt, "sss",$name,$email,$balance);
    $result=mysqli_stmt_execute($stmt);
    print_r($result);
}

