<?php
session_start();
require "functions.php";
//var_dump($_POST);
//var_dump($_FILES);

$email = $_POST['email'];
$pass = $_POST['password'];
$first_name = $_POST['first_name'];
$position = $_POST['position'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$work_status = $_POST['work_status'];
$vk = $_POST['vk'];
$telegram = $_POST['telegram'];
$instagram = $_POST['instagram'];



if(empty(get_user($email))){
    $user_id = user_register($email, $pass);
    edit_general_information($user_id, $first_name, $position, $phone, $address);
    edit_work_status($user_id, $work_status);
    edit_social($user_id, $vk, $telegram, $instagram);
    edit_avatar($user_id);

    set_flash_message("success", "<strong>Уведомление!</strong> Пользователь создан" );
    redirect_to("/traningProject/users.php");
}else{
    set_flash_message("danger", "<strong>Уведомление!</strong> Этот эл. адрес уже занят другим пользователем." );
    redirect_to("/traningProject/page_create_user.php");
}

//
//var_dump($user_id);






?>