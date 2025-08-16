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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Instructors Table</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #6a11cb, #2575fc);
    }

    h2 {
      text-align: center;
      margin-top: 40px;
      color: #fff;
    }

    .add-btn {
      display: block;
      width: 220px;
      margin: 30px auto 10px auto;
      padding: 12px;
      text-align: center;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .add-btn:hover {
      background-color: #45a049;
    }

    table {
      border-collapse: collapse;
      width: 90%;
      margin: 30px auto;
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    th, td {
      text-align: left;
      padding: 14px 16px;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .action-links a {
      margin-right: 8px;
      text-decoration: none;
      padding: 6px 12px;
      border-radius: 4px;
      font-size: 14px;
      display: inline-block;
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
      opacity: 0.85;
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
