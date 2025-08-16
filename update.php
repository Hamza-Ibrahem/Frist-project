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
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$id=$_POST['id'];

$query="UPDATE students SET name='$name' ,age='$age' , address='$address' WHERE id=$id ";
mysqli_query($connection,$query);
header('Location: table.php');