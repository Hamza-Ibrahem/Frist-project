<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Instructor</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 80px auto;
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: bold;
    }

    input[type=text],
    select {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 16px;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    input[type=submit]:hover {
      background-color: #264928ff;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Create a New Instructor</h1>
    <form action="insert.php" method="post">
      <label for="id">Instructor ID</label>
      <input type="text" id="id" name="id" placeholder="Enter ID">

      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter name">

      <label for="dept_id">Department ID</label>
      <input type="text" id="dept_id" name="dept_id" placeholder="Enter department ID">

      <input type="submit" value="Add Instructor">
    </form>
  </div>

</body>
</html>
