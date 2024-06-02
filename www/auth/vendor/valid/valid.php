<?php
function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = strip_tags($val);
    $val = htmlspecialchars($val);
    return $val;
}
 
$name = clear_data($_POST['name']);
$phone = clear_data($_POST['phone']);
$email = clear_data($_POST['email']);
 
$pattern_phone = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';
 
$pattern_name = '/^[А-ЯЁ][а-яё]*$/';
$flag = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
    if (preg_match($pattern_name, $name)){
        $_SESSION['err_name'] = '<small class="error">Здесь только русские буквы</small>';
        $flag = 1;
    }
    if (mb_strlen($name) > 10 || empty($name)){
        $_SESSION['err_name'] = '<small class="error">Имя должно быть не больше 10 символов</small>';
        $flag = 1;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['err_email'] = '<small class="error">Формат Email не верный!</small>';
        $flag = 1;
    }
    if (empty($email)){
        $_SESSION['err_email'] = '<small class="error">Поле не может быть пустым</small>';
        $flag = 1;
    }
    if (!preg_match($pattern_phone, $phone)){
        $_SESSION['err_tel'] = '<small class="error">Формат телефона не верный!</small>';
        $flag = 1;
    }
    if (empty($phone)){
        $_SESSION['err_tel'] = '<small class="error">Поле не может быть пустым</small>';
        $flag = 1;
    }
    if ($flag == 0){
        include('../../../save_data/save_data.php');
    }
    else {
        header('Location: ../register.php');
    }
}



?>