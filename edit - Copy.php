<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>


<div>
        <h1>Edit instructor</h1>
<?php
//connection
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
$query="SELECT * FROM instructors WHERE id=$id";
$result=mysqli_query($connection,$query); 
$row=mysqli_fetch_assoc($result);
?>
  <form action="update.php" method="post">
    <label > id</label>
    <input type="text" name="id" placeholder="Your id.." value="<?= $row['id']?>">

    <label >name</label>
    <input type="text" name="name" placeholder="Your name.." value="<?= $row['name']?>">

    <label >dept_id</label>
    <input type="text" name="dept_id" placeholder="Your dept_id.."  value="<?= $row['dept_id']?>">

    <input type="hidden" name="id"  value="<?= $row['id']?>">


    <input type="submit" value="edit">
  </form>
</div>

</body>
</html>


