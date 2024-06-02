<?php
    session_start();
    if (!empty($_SESSION['user'])) {
        header('Location: profile.php');
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
    <form class="form" action="vendor/valid.php" method="post">
        <label>ФИО</label>
        <?php
        if(!empty($_SESSION['errors']['name'])){
            echo $_SESSION['errors']['name'];
        }
        unset($_SESSION['errors']['name']);
        ?>

        <input class="input-field" type="text" name="fio"
        value="<?php if (!empty($_SESSION['values']['name'])){ echo $_SESSION['values']['name'];}?>">
        <label class="input-label">Почта</label>
        <?php
        if(!empty($_SESSION['errors']['email'])){
            echo $_SESSION['errors']['email'];
        }
        unset($_SESSION['errors']['email']);
        ?>
        <input class="input-field" type="text" name="email"
        value="<?php if (!empty($_SESSION['values']['email'])){ echo $_SESSION['values']['email'];}?>">
        <label>Телефон</label>
        <?php
        if(!empty($_SESSION['errors']['tel'])){
            echo $_SESSION['errors']['tel'];
        }
        unset($_SESSION['errors']['tel']);
        ?>
        <input class="input-field" type="text" name="tel"
        value="<?php if (!empty($_SESSION['values']['tel'])){ echo $_SESSION['values']['tel'];}?>">
        <label>Дата рождения</label>
        <input class="input-field" type="date" name="date" required>
        <div class='field'>
            <label class='label'>Язык програмирования</label>
            <ul class='checkboxes'>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-0' name='choice[]' type='checkbox' value='Pascal' >
                    <label class='checkbox-label' for='choice-0'> Pascal</label>
                </li>

                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-1' name='choice[]' type='checkbox' value='C'>
                    <label class='checkbox-label' for='choice-1'>C</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-2' name='choice[]' type='checkbox' value='C++'>
                    <label class='checkbox-label' for='choice-2'>C++</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-3' name='choice[]' type='checkbox' value='JavaScript'>
                    <label class='checkbox-label' for='choice-3'>JavaScript</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-4' name='choice[]' type='checkbox' value='PHP'>
                    <label class='checkbox-label' for='choice-4'>PHP</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-5' name='choice[]' type='checkbox' value='Python'>
                    <label class='checkbox-label' for='choice-5'>Python</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-6' name='choice[]' type='checkbox' value='Java'>
                    <label class='checkbox-label' for='choice-6'>Java</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-7' name='choice[]' type='checkbox' value='Assembler'>
                    <label class='checkbox-label' for='choice-7'>Assembler</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-8' name='choice[]' type='checkbox' value='Clojure'>
                    <label class='checkbox-label' for='choice-8'>Clojure</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-9' name='choice[]' type='checkbox' value='Prolog'>
                    <label class='checkbox-label' for='choice-9'>Prolog</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice-10' name='choice[]' type='checkbox' value='Scala'>
                    <label class='checkbox-label' for='choice-10'>Scala</label>
                </li>
            </ul>
        </div>
        <div class='field'>
            <label class='label'>Пол</label>
            <ul class='options'>
                <li class='option' >
                    <input class='option-input' id='option-0' name='gender' type='radio' value='муж' required>
                    <label class='option-label' for='option-0'>Myж</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-1' name='gender' type='radio' value='жен'>
                    <label class='option-label' for='option-1'>Жен</label>
                </li>

            </ul>
        </div>
        <label>Пароль</label>
        <input class="input-field" type="password" name="pass" placeholder="Придумайте пароль" required>
        <button type="submit" class="action-button">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="auth.php">авторизируйтесь</a>!
        </p>
        <?php
            if (!empty($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>