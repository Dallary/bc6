<?php   
// // Проверка наличия данных в $_POST
// if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
//     // Проверка наличия заполненных полей
//     if (!empty($_POST['fio']) && !empty($_POST['email']) && !empty($_POST['tel'])) {
//         // Проверка правильности заполнения поля email
//         if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//             // Все данные введены верно, можно сохранить их или отправить на почту 
//              include('helpers/checker.php') 
//                 $name=dif_XSS($_POST['fio']);
//                 $email=$_POST['email'];
//                 $tel=$_POST['tel'];
//                 $date=$_POST['date'];
//                 $gender=$_POST['gender'];
//                 $lang=$_POST['choice'];
//                 $n=count($lang);
//                 $pass=md5($_POST['pass']);
            include('../../../save_data/save_data.php');
    //         // Дальнейшие действия с данными
    //     } else {
    //         echo "Пожалуйста, введите корректный email адрес";
    //     }
    // } else {
    //     echo "Пожалуйста, заполните все поля формы";
    // }
// }
?>






   
// if (strlen($name) > 50 || empty($name)){
//     $_SESSION['message'] = 'Размер имени слишком большой или пустой';
//     header('Location: ../register.php');
//     exit();
// }
// if (!preg_match($pattern_phone, $phone)){
//     $_SESSION['message'] = 'Формат телефона не верный!';
//     header('Location: ../register.php');
//     exit();
// }
// if (empty($phone)){
//     $_SESSION['message'] = 'Поле не может быть пустым';
//     header('Location: ../register.php');
//     exit();
// }
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//     $_SESSION['message'] = 'Формат Email не верный!';
//     header('Location: ../register.php');
//     exit();
// }
// if (empty($email)){
//     $_SESSION['message'] = 'Поле не может быть пустым';
//     header('Location: ../register.php');
//     exit();
// }
// header('Location: ../register.php');
?>