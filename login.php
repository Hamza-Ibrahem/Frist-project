<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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

    input[type="email"],
    input[type="password"] {
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

    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #4CAF50;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Login</h1>
  <form action="loginCheck.php" method="post">
    <label>Email</label>
    <input type="email" name="email" placeholder="Your email.." required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Your password.." required>

    <input type="submit" value="Login">
  </form>
  <a href="sign.php">Create New Account</a>
</div>

</body>
</html>
