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
    edit_first_name($user_id, $first_name);
    edit_position($user_id, $position);
    edit_phone($user_id, $position);
    edit_address($user_id, $address);
    edit_work_status($user_id, $work_status);
    edit_vk($user_id, $vk);
    edit_telegram($user_id, $telegram);
    edit_instagram($user_id, $instagram);

    $uploaddir = 'C:\\OpenServer\\domains\\php.lol\\traningProject\\img\\demo\\avatars\\';
    $uploadfile = $uploaddir . $user_id . basename($_FILES['avatar']['name']);
    move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
    $link = 'img/demo/avatars/' . $user_id . $_FILES['avatar']['name'];
    edit_avatar($user_id, $link);

    set_flash_message("success", "<strong>Уведомление!</strong> Пользователь создан" );
    redirect_to("/traningProject/users.php");
}else{
    set_flash_message("danger", "<strong>Уведомление!</strong> Этот эл. адрес уже занят другим пользователем." );
    redirect_to("/traningProject/page_create_user.php");
}

//
//var_dump($user_id);






?>