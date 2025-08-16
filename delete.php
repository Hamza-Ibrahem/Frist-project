<?php

//connection
$host="localhost";
$user_name="root";
$password="";
$dbname="school";
$connection=mysqli_connect($host,$user_name,$password,$dbname);
if(!$connection)
{
    die("fail:" . mysqli_connect_error());
}


$id=$_GET['id'];

//query
$query="DELETE FROM students WHERE id=$id";
mysqli_query($connection,$query);

header('Location: table.php');