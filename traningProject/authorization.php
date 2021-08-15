<?php
session_start();
require "functions.php";

$email = $_POST['email'];
$pass = $_POST['password'];

if(user_authorization($email, $pass)){
    set_flash_message("success","Добро пожаловать");
    redirect_to("/traningProject/users.php");

}else{
    set_flash_message("danger","Имя пользователя или пароль не опознаны");
    redirect_to("/traningProject/page_login.php");

}
