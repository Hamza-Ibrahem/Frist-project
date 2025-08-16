<?php

$host="localhost";
$user_name="root";
$password="";
$dbname="test";
$connection=mysqli_connect($host,$user_name,$password,$dbname);
if(!$connection)
{
    die("fail:" . mysqli_connect_error());
}


$id=$_GET['id'];

$query="DELETE FROM instructors WHERE id=$id";
mysqli_query($connection,$query);

header('Location: crud.php');