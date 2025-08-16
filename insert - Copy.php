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
$query= "INSERT INTO instructors (id ,name,dept_id) values ('$id','$name','$dept_id')";
mysqli_query($connection,$query); 

header('Location: crud.php');

?>