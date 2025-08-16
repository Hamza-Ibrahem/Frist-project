<?php 
session_start();
echo "hello ". $_SESSION['name'];

if(!isset($_SESSION['name'])){
  header('Location: login.php');
}


$host="localhost";
$user_name="root";
$password="";
$dbname="school";
$connection=mysqli_connect($host,$user_name,$password,$dbname);
if(!$connection)
{
    die("fail:" . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<a href="logout.php">Logout</a>
<h1>Students</h1>

<a href="create.php">add new student</a>

<table id="customers">
  <tr>
    <th>name</th>
    <th>age</th>
    <th>address</th>
    <th>
       action
    </th>
  </tr>
  <?php   /******* */
  $query="SELECT * FROM students";
  $result=mysqli_query($connection ,$query); //object
//   print_r($result); 
  
  while($row=mysqli_fetch_assoc($result)   /***assoc array**/  )
  {
    ?> 
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['address'] ?></td>
            <td>
            <a href="delete.php?id=<?= $row['id'] ?>"> delete</a>
            <a href="edit.php?id=<?= $row['id'] ?>"> edit</a>

            </td>
        </tr>
<?php 
  }
  ?> 
  
</table>

</body>
</html>