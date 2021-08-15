<?php
function get_user(string $email){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "SELECT email FROM users WHERE email ='$email'";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email'=> $email]);
    $item = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $item;
};

function user_register(string $email, string $pass){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $pass = md5($pass);
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$pass')";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
};

function set_flash_message(string $session_key, string $message){
    $_SESSION[$session_key] = $message;
};

function display_flash_message(string $session_key){
    if(isset($_SESSION[$session_key])){
        echo "<div class=\"alert alert-{$session_key} text-dark\" role=\"alert\">{$_SESSION[$session_key]}</div>";
        unset($_SESSION[$session_key]);
        }
};

function redirect_to(string $path){
    header("Location: {$path}");
    exit;
};

function user_authorization(string $email, string $pass){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "SELECT email, password FROM users WHERE email ='$email'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $item = $statement->fetchAll(PDO::FETCH_ASSOC);
    $pass = md5($pass);
    $login_data =[["email"=>"$email","password"=>"$pass"]];
    if ($item == $login_data) {
        $_SESSION['auth'] = $login_data;
        return true;
    } else {
        return false;
    }
};


?>