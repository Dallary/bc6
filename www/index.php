<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/main.css">


</head>
<body>
    <header class="header">
    <h1><a href="#">Главная</a></h1>
    <h1><a href="admin/login.php">Админ</a></h1>
    <?php if(!empty($_SESSION['user'])){
        echo '<h1><a href="auth/profile.php">'.
            $_SESSION['user']['full_name'].'</a></h1>';
    }
    else{
        echo '<h1><a href="auth/auth.php">Вход</a></h1>';
    }
    ?>


</header>
</body>
</html>