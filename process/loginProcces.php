<?php
session_start();
include("../db/db.php");
$sel =  mysqli_query($mysqli, "SELECT * FROM `users` ");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>

<body>
    <?php
    if ($_POST) {
        // Данные которые пришли с входа
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Проверка существования 
        $userAccExist = false;
        while ($row = mysqli_fetch_assoc($sel)) {
            // Проверка логина и пароля
            if ($row['username'] == $username && $row['password'] == $password) {
                echo "<script>alert('Sucess')</script>";
                // Сохранение id пользователя
                $_SESSION['userId'] = $row['id'];
                // Переадресация
                echo "<script>window.location.href='http://dve.com/';</script>";
                $userAccExist = true;
            }
        }
        // Ошибка входа
        if ($userAccExist == false) {
            echo "<script>alert('Error username and password')</script>";
        }
    }
    ?>
</body>

</html>