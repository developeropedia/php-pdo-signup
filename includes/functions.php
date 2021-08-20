<?php

session_start();

include('connection.php');
global $pdo;
$conn = $pdo->open();
$message = '';

function signup() {
    global $conn;
    global $message;

    if(isset($_POST['signup'])) {
        [
            'fname' => $fName,
            'lname' => $lName,
            'email' => $email,
            'username' => $username,
            'password' => $password
        ] = $_POST;

        // PASSWORD TO HASHED PASSWORD
        $password = password_hash($password, PASSWORD_BCRYPT);

        // SAVE DATA INTO DATABASE
        $query = 'INSERT INTO login.users(fname, lname, email, username, password) VALUES (?,?,?,?,?)';
        $stmt = $conn->prepare($query);
        $res = $stmt->execute([$fName, $lName, $email, $username, $password]);

        if($res){
            $message = 'Success';
        }else{
            $message = "Sorry! Registration not successful.";
        }
    }
}

?>