 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="../process/loginProcces.php" method="post" name="login">
        <label>Username:</label><br>
        <input required type="text" name="username" placeholder="Type Username"><br>
        <label>Password:</label><br>
        <input required type="password" name="password" placeholder="Type Password"><br>
        <input type="submit" name="done" value="Done">
    </form>
    <a href="reg.php">Regestration</a>
  </body>
</html>
