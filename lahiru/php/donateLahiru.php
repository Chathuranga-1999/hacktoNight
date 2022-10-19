<?php

$host="localhost";
$username="root";
$password="";
$dbname="commentdb";




$conn=@mysqli_connect("localhost","root","","commentdb") or die("<p>Unable to coonect<?p>");
if(!$conn)
{
    echo "connection failed :" . mysqli_connect_error();
    exit(); 
}
include '../html/paied.html';


$fname=$_POST['name'];
$lname=$_POST['name2'];
$mobile=$_POST['mob'];
$comment=$_POST['com'];
$amount=$_POST['amou'];
$payment=$_POST['pay'];

$sql="INSERT INTO donate(id,FirstName,LastName,Mobile,Comment,Amount,PaymentMethod) VALUES('0','$fname','$lname','$mobile','$comment','$amount','$payment')" or die("Unable to add");
$rs=mysqli_query($conn,$sql);

?>