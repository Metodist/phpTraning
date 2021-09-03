<?php
session_start();
require "functions.php";
//var_dump($_POST);
//var_dump($_FILES);

$user_id = $_POST['user_id'];
edit_avatar($user_id);



set_flash_message("success","Аватар успешно обновлен ");
redirect_to("media.php?id=$user_id");
?>