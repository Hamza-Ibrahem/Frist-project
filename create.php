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
<?php

session_start();
echo "hello ". $_SESSION['name'];

if(!isset($_SESSION['name'])){
  header('Location: login.php');
}

?>

<div>
    <h1> create student</h1>
  <form action="insert.php" method="post">
    <label > Name</label>
    <input type="text" name="name" placeholder="Your name..">

    <label >age</label>
    <input type="text" name="age" placeholder="Your age..">

    <label >address</label>
    <input type="text" name="address" placeholder="Your address..">
  
    <input type="submit" >
  </form>

</div>

</body>
</html>


