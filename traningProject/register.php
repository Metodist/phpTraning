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

function user_register(string $email, string $pass){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$pass')";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $a = $statement->fetchAll(PDO::FETCH_ASSOC);
}

if(!empty($item)){
    $message = "<strong>Уведомление!</strong> Этот эл. адрес уже занят другим пользователем.";
    $_SESSION['danger'] = $message;
    header("Location: /traningProject/page_register.php");
    exit;
}else{
    user_register($email, $pass);
    $message = "Регистрация успешна";
    $_SESSION['success'] = $message;
    header("Location: /traningProject/page_login.php");
    exit;
}





?>