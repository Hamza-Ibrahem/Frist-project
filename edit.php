<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Instructor</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Edit Instructor</h1>

<?php
// Database connection
$host = "localhost";
$user_name = "root";
$password = "";
$dbname = "test";
$connection = mysqli_connect($host, $user_name, $password, $dbname);

if (!$connection) {
    die("fail: " . mysqli_connect_error());
}

$id = $_GET['id'];
$query = "SELECT * FROM instructors WHERE id=$id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>

  <form action="update.php" method="post">
    <!-- Hidden ID field -->
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <label>Name</label>
    <input type="text" name="name" placeholder="Your name.." value="<?= $row['name'] ?>" required>

    <label>Dept ID</label>
    <input type="text" name="dept_id" placeholder="Your dept_id.." value="<?= $row['dept_id'] ?>" required>

    <input type="submit" value="Update">
  </form>
</div>

</body>
</html>
