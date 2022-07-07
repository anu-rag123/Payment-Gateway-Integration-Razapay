<?php
include('db.php');
session_start();

if(isset($_POST['amt']) && isset($_POST['name']))
{
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    $sql = "insert into Donations(name,amount,payment_status,added_on) values('$name','$amt','$payment_status','$added_on')";
    if(mysqli_query($con,$sql))
    {
    	$_SESSION['OID']=mysqli_insert_id($con);
    }
    else
    {
    	echo "Unable to insert data!!" . mysqli_error($con);
    }
    
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID']))
{
    session_start();
    $_SESSION['pay_id'] = $_POST['payment_id'];
    $payment_id=$_POST['payment_id'];
    $sql = "update Donations set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'";
    if(mysqli_query($con,$sql))
    {
    	echo "Success!!!";
    }
    else
    {
    	echo "Unable to insert data!!" . mysqli_error($con);

    }
}
?>