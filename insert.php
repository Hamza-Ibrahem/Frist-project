<?php


$host="localhost";
$user_name="root";
$password="";
$dbname="school";
$connection=mysqli_connect($host,$user_name,$password,$dbname);
if(!$connection)
{
    die("fail:" . mysqli_connect_error());
}
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$query= "INSERT INTO students (name,age,address) values ('$name',$age,'$address')";
mysqli_query($connection,$query);

header('Location: table.php');