<?php
session_start();
require "functions.php";
//var_dump($_POST);
$user_id = $_POST['user_id'];
$status = $_POST['status'];
edit_work_status($user_id, $status);
set_flash_message("success","Статус успешно обновлен ");
redirect_to("status.php?id=$user_id");
?>
