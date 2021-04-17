<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <form action="../process/regProcces.php" method="post" name="regestration">
    <label>Username:</label><br>
    <input required type="text" name="username" placeholder="Type Username"><br>
    <label>Name:</label><br>
    <input required type="text" name="name" placeholder="Type Name"><br>
    <label>Surname:</label><br>
    <input required type="text" name="surname" placeholder="Type Surname"><br>
    <label>Bithday:</label><br>
    <input required type="date" name="birthday"><br>
    <label>Mail:</label><br>
    <input required type="text" name="password"><br>
    <label>Password:</label><br>
    <input required type="text" name="mail" placeholder="Type Mail"><br>
    <label>Gender:</label><br>
    <input required type="radio" name="gender" value="male"> Male<br>
    <input required type="radio" name="gender" value="female"> Female<br>
    <input type="submit" name="done" value="Done">
  </form>
  <a href="login.php">Login</a>
</body>

</html>