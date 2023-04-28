<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
</head>

<body>
  <form action="login.php" method="POST">
    <fieldset>
      <legend>Login</legend>
      <p>
        <label>Username:</label>
        <input type="text" name="username" placeholder="username..." />
      </p>
      <p>
        <label>Password:</label>
        <input type="password" name="password" placeholder="password..." />
      </p>
      <p>
        <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
      </p>
      <p>
        <input type="submit" name="submit" value="Login" />
      </p>
    </fieldset>
  </form>
</body>

</html>