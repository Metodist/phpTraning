<?php
session_start();
require "functions.php";

$email = $_POST['email'];
$pass = $_POST['password'];

$item = get_user($email);

if(!empty($item)){
    set_flash_message("danger", "<strong>Уведомление!</strong> Этот эл. адрес уже занят другим пользователем." );
    redirect_to("/traningProject/page_register.php");
}else{
    user_register($email, $pass);
    set_flash_message("success", "Регистрация успешна");
    redirect_to("/traningProject/page_login.php");
}
?>