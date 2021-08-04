<?php
session_start();
$pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
$text=$_POST['text'];

$sql = "SELECT * FROM text9 WHERE post_text ='$text'";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=> $text]);
$a = $statement->fetchAll(PDO::FETCH_ASSOC);

if(!empty($a)){
    $message = "Такая запись уже имеется";
    $_SESSION['danger'] = $message;
    header("Location: /1/task_10.php");
    exit;
}


$sql = "INSERT INTO text9 (post_text) VALUES ('$text')";
$statement = $pdo->prepare($sql);
$statement->execute();
$a = $statement->fetchAll(PDO::FETCH_ASSOC);

$message = "Запись добавлена";
$_SESSION['succes'] = $message;

header("Location: /1/task_10.php");
?>
