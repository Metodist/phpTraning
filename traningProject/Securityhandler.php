<?php
session_start();
require "functions.php";

$user_id = $_POST['user_id'];
$email = $_POST['email'];
$password = $_POST['password'];
$old_password = $_POST['hidden_password'];

$item = get_user_by_id($user_id);
//var_dump(edit_credential($user_id, $email, $password, $old_password));
if($item[0]['email'] == $email ){
    edit_credential($user_id, $email, $password, $old_password);
    set_flash_message("success","Пароль успешно обновлен ");
    redirect_to("security.php?id=$user_id");

}else{
    if(empty(get_user($email))){
        edit_credential($user_id, $email, $password, $old_password);
        set_flash_message("success","профиль успешно обновлен ");
        redirect_to("security.php?id=$user_id");
    }else{
        set_flash_message("danger","Почта занята");
        redirect_to("security.php?id=$user_id");
    }
}



?>