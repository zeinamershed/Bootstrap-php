<?php

 unset($_SESSION['error_msg']);

require_once dirname(__DIR__,1).'/config/db.php';
require_once dirname(__DIR__,1).'/inc/functions.php';

if(!empty($_POST)) {
    $mail = '';
    if(isset($_POST['mail'])) $mail = (string) $_POST['mail'];
    $pwd = '';
    if(isset($_POST['pwd'])) $pwd = (string) $_POST['pwd'];


    try {
        $stmt = $db->prepare("SELECT * FROM my_projekt WHERE email=:username");
        $stmt->bindValue(":username", $mail);

        $stmt->execute();
        $result = $stmt->fetch();
        if ($stmt->rowCount() == 1 &&  password_verify($pwd, $result['password'])) {
            session_start();

            $_SESSION['name'] = $result['name'];
            $_SESSION['loggedIn'] = true;
            $_SESSION['msg'] = 'Login erfolgreich';
      
            header("Location: ../index1.php");
        } else {
           
            $_SESSION['error_msg'] = "<div id='message'>Invalid username or password.</div>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
 
}
