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

$id=$_POST['id'];
$name=$_POST['name'];
$dept_id=$_POST['dept_id'];

$query="UPDATE instructors SET name='$name' ,dept_id='$dept_id' WHERE id=$id ";
mysqli_query($connection,$query);
header('Location: crud.php');