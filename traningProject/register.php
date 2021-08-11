<?php
session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

$pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
$sql = "SELECT email FROM users WHERE email ='$email'";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=> $email]);
$item = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($item);

if(!empty($item)){
    $message = "<strong>Уведомление!</strong> Этот эл. адрес уже занят другим пользователем.";
    $_SESSION['danger'] = $message;
    header("Location: /traningProject/page_register.php");
    exit;
}else{
    echo 'регистрация возможна';
}





?>