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
include '../html/joinSuccess.html';


$name=$_POST['name'];
$address=$_POST['add'];
$mobile=$_POST['mob'];
$city=$_POST['city'];
$skills=$_POST['skill'];
$experience=$_POST['exp'];
$hours=$_POST['hour'];

$sql="INSERT INTO register(Id,FullName,Address,Mobile,City,Skills,Experience,ServiceHours) VALUES('0','$name','$address','$mobile','$city','$skills','$experience','$hours')"
 or die("Unable to add");
$rs=mysqli_query($conn,$sql);

?>