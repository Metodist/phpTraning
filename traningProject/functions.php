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
    return $pdo->lastInsertId();
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
        $_SESSION['auth'] = $email;
        return true;
    } else {
        return false;
    }
};

function is_not_logged_in(){
    if(empty($_SESSION['auth'])){
        return true;
    }else{
        return false;
    }
}

function logout(){
    if (isset($_GET['logout'])){
        unset($_SESSION['auth']);
        redirect_to("page_login.php");
    }

}

function check_for_admin(){
    $email = $_SESSION['auth'];
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "SELECT role FROM users WHERE email ='$email'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $item = $statement->fetchAll(PDO::FETCH_ASSOC);
    if($item == [['role' => 'admin']]){
        return true;
    }else{
        return false;
    }
}

function all_users_withdrawal(){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "SELECT * FROM users";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $i = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $i;
}

function edit_first_name(int $user_id, string $first_name){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET first_name = '$first_name' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}

function edit_position(int $user_id, string $position){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET position = '$position' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}

function edit_phone(int $user_id, string $phone){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET phone = '$phone' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}

function edit_address($user_id, $address){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET address = '$address' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}

function edit_work_status($user_id, $work_status){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET work_status = '$work_status' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}

function edit_vk($user_id, $vk){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET vk = '$vk' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}

function edit_telegram($user_id, $telegram){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET telegram = '$telegram' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}

function edit_instagram($user_id, $instagram){
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=phptraning;", "root", "root");
    $sql = "UPDATE users SET instagram = '$instagram' WHERE id = $user_id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $statement->fetchAll(PDO::FETCH_ASSOC);
}


?>