<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="style.css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="login-container">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="submit">Login</button>
      </form>
    </div>
  </body>
</html>
<style>
body {
    background-color: #f1f1f1;
  }
  
  .login-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin: auto;
    padding: 20px;
    width: 300px;
  }
  
  h1 {
    font-size: 24px;
    text-align: center;
  }
  
  input[type="text"],
  input[type="password"] {
    border-radius: 5px;
    border: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    margin: 10px 0;
    padding: 10px;
    width: 100%;
  }
  
  button[type="submit"] {
    background-color: #4CAF50;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    margin-top: 10px;
    padding: 10px;
    width: 100%;
  }
  
  button[type="submit"]:hover {
    background-color: #3e8e41;
  }
  </style>