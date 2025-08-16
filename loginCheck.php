<?php
session_start();

$host="localhost";
$user_name="root";
$password="";
$dbname="test";
$connection=mysqli_connect($host,$user_name,$password,$dbname);
if(!$connection)
{
    die("fail:" . mysqli_connect_error());
}

$email=$_POST['email'];
$password=md5($_POST['password']);

$query="SELECT * FROM admins WHERE email='$email' and password ='$password'";
$result =mysqli_query($connection,$query); //object
// print_r($result);


if($result->num_rows==1){
    $user=mysqli_fetch_assoc($result); //array
    $_SESSION['name']=$user['name'];
    $_SESSION['email']=$user['email'];


    setcookie("theme","dark",time()+(60*60));

    header('Location: crud.php');
}else{
    header('Location: login.php');
}