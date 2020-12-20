<?php
require_once "config/config.php";
class Customer{
    private $loginstatus;
    private $con;
    function __construct($type=0)
    {
        $this->con=new mysqli(MS_HOST,MS_USER,MS_PSWD,MS_DB);
        if(!$this->con){
            echo (apioutput($type,returnResult(-1,"Some Error Occured. ".ec(1,1)),"<h1>Some Error Occured. ".ec(1,1)));
        }
        $loginstatus=false;
    }
    function add_customer($name,$email,$amount){
        $stmt=$this->con->prepare('INSERT INTO `customer_details`(`Name`, `Email`, `Current Balance`) VALUES (?,?,?)');
        $stmt->bind_param("sss",$name,$email,$amount);
        $stmt->execute();
        if($stmt->affected_rows==1){
            return true;
        }else{
            return false;
        }
    }
}

/* money.php */

require_once "config/config.php";
class transaction{
    private $transactions;
    private $con;
    function __transaction($type=0)
    {
        $this->con=new mysqli(MS_HOST,MS_USER,MS_PSWD,MS_DB);
        if(!$this->con){
            echo (apioutput($type,returnResult(-1,"Some Error Occured. ".ec(1,1)),"<h1>Some Error Occured. ".ec(1,1)));
        }
        $transactions=false;
    }
    function view transactions($to,$from,$amount){
        $stmt=$this->con->prepare('INSERT INTO `transactions`(`to`, `from`, `amount`) VALUES (?,?,?)');
        $stmt->bind_param("sss",$to,$from,$amount);
        $stmt->execute();
        if($stmt->affected_rows==1){
            return true;
        }else{
            return false;
        }
    }
}
?>