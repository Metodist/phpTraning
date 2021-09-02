<?php
session_start();
require "functions.php";

$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$position = $_POST['position'];
$phone = $_POST['phone'];
$address = $_POST['address'];

edit_general_information($user_id, $first_name, $position, $phone, $address);

set_flash_message("success", "Профиль успешно обновлен");
redirect_to("edit.php?id=$user_id");

?>