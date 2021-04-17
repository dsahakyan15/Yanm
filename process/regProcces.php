<?php
// Подключение к базе
include("../db/db.php");
// Переменная с всеми пользователями
$sel =  mysqli_query($mysqli, "SELECT * FROM `users` ");

if ($_POST) {

  // Все данные которые пришли с регестрации
  $username = $_POST['username'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $mail = $_POST['mail'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];
  $dateOfReg = date('Y-m-d', time());

  // Проверка зарегистрирован ли аккаунт в базе
  $userAccRegistered = false;

  // Цикл для проверки всех аккаунтов
  while ($row = mysqli_fetch_assoc($sel)) {
    if ($row['mail'] == $mail) {
      $userAccRegistered = true;
    } else {
      $userAccRegistered = false;
    }
  }
  // Добавление пользователя в базу данных
  if ($userAccRegistered == false) {
    // TODO 
    // mysqli_query($mysqli, "INSERT INTO `users` ( `username`, `name`, `surname`, `BDay`, `mail`, `gender`,`dateOfReg`,`password`) VALUES ( '" . $username . " ', '" . $name . "', '" . $surname . "', '" . $birthday . "', '" . $mail . "', '" . $gender . "', '" . $dateOfReg . "', '" . $password . "')");
    $reging = true;
  }
}

?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dve.com</title>
</head>

<body>
<?php 
if ($reging) {
  echo "<script>alert('Sucess')</script>";
}

?>

</body>

</html>