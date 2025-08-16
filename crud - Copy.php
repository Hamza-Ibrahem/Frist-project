<?php 
$host = "localhost";
$user_name = "root";
$password = "";
$dbname = "test";
$connection = mysqli_connect($host, $user_name, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Instructors List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      margin-top: 40px;
      color: #333;
    }

    .add-btn {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 10px;
      text-align: center;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .add-btn:hover {
      background-color: #45a049;
    }

    table {
      border-collapse: collapse;
      width: 90%;
      margin: 30px auto;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td {
      text-align: left;
      padding: 12px;
    }

    tr {
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .action-links a {
      margin-right: 10px;
      text-decoration: none;
      padding: 6px 10px;
      border-radius: 4px;
      font-size: 14px;
    }

    .action-links a.delete {
      background-color: #e74c3c;
      color: white;
    }

    .action-links a.edit {
      background-color: #3498db;
      color: white;
    }

    .action-links a:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>

<h2>Instructors Table</h2>

<a href="create.php" class="add-btn">+ Add New Instructor</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Dept ID</th>
    <th>Action</th>
  </tr>

  <?php   
    $query = "SELECT * FROM instructors";
    $result = mysqli_query($connection, $query); 
    
    while ($row = mysqli_fetch_assoc($result)) {
  ?> 
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['dept_id'] ?></td>
      <td class="action-links">
        <a href="delete.php?id=<?= $row['id'] ?>" class="delete">Delete</a>
        <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
      </td>
    </tr>
  <?php 
    }
  ?> 
</table>

</body>
</html>
