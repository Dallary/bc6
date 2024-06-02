<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>
<header class="header">
    <h1><a href="../index.php">Главная</a></h1>
</header>

    <!-- Профиль -->

    <form class="list">
    <img class="avatar" src="../images/slave.jpg" width="200" >
    <h2><?= $_SESSION['user']['full_name'] ?></h2>
    <p>Дата рождения : <?= $_SESSION['user']['date'] ?></p>
    <p>Эл.почта : <?= $_SESSION['user']['email'] ?><p>  
    <p> Любимые языки программирования : </br>
    <?php 
    $user_lang=$_SESSION['user']['lang'];
    $n=count( $user_lang);
             for($i=0;$i<$n;$i++){
              echo $user_lang[$i]." ";
            }
     ?>
    </p>
    <a href="vendor/logout.php">Выход</a>
    </form>


</body>
</html>