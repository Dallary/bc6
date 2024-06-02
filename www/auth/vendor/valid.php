<?php
session_start();
// Защита XSS
function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = strip_tags($val);
    $val = htmlspecialchars($val);
    return $val;
}
 
$name = clear_data($_POST['fio']);
$email = clear_data($_POST['email']);
$phone = clear_data($_POST['tel']);
 
$pattern_phone = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';
$errors=array();
$values=array();
$registr = TRUE;
$values['name']=$name;
$values['email']=$email;
$values['tel']=$phone;
if (empty($name)){
        $errors['name'] = '<p style="color:red;"> Поле не может быть пустым</p>';
        $registr= FALSE;
    }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = '<p style="color:red;"">Формат Email не верный!</p>';
        $registr = FALSE;
    }
if (empty($email)){
        $errors['email'] = '<p style="color:red;"> Поле не может быть пустым</p>';
        $registr = FALSE;
    }
    if (!preg_match($pattern_phone, $phone)){
        $errors['tel'] = '<p style="color:red;">Формат телефона не верный!</p>';
        $registr = FALSE;
    }
    if (empty($phone)){
        $errors['tel'] = '<p style="color:red;">Поле не может быть пустым</p>';
        $registr = FALSE;
    }
if ($registr){
    unset( $_SESSION['errors']);
    unset($_SESSION['values']);
    include('../../../save_data/save_data.php');
      
    }
    else {
        $_SESSION['errors']=$errors;
        $_SESSION['values']=$values;
        header('Location: ../register.php');
    }



?>