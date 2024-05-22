<?php

session_start();
 unset($_SESSION['error_msg']);

 require_once dirname(__DIR__,1).'/config/db.php';

if(!empty($_POST)) {
    $nachname = '';
    if(isset($_POST['nachname'])) $nachname = (string) $_POST['nachname'];
    $vorname = '';
    if(isset($_POST['vorname'])) $vorname = (string) $_POST['vorname'];
    $mail = '';
    if(isset($_POST['mail'])) $mail = (string) $_POST['mail'];
    $pwd = '';
    if(isset($_POST['pwd'])) $pwd = (string) $_POST['pwd'];

    #---------------------------------------------------------
    if(!empty($nachname) && !empty($vorname) && !empty($mail) && !empty($pwd)) {
      
      $stmt = $db->prepare('SELECT `email` FROM `my_projekt` WHERE `email` = :mail');
      $stmt->bindValue('mail', $mail);
      $stmt->execute();
      $result = $stmt->fetch();    
     
      #------------------------
      if(!empty($result['email'])) {
        $_SESSION['error_msg'] = 'E-Mail existiert bereit schon!';
       
      }else {
          $name = $vorname . " " . $nachname;
      
        $stmt = $db->prepare( 'INSERT INTO `my_projekt` (`name`,`email`,`password`) 
                                          VALUES(:name, :mail, :pwd)' );
        $stmt->bindValue('name', $name);
        $stmt->bindValue('mail', $mail);
        $stmt->bindValue('pwd', password_hash($pwd, PASSWORD_DEFAULT));
        $stmt->execute();

        $_SESSION['name'] =$name;

        $_SESSION['loggedIn'] = true;
  
        $_SESSION['msg'] = 'Login erfolgreich';
        header("Location: ../index1.php");
      }
      #------------------------
    } else {
      $_SESSION['error_msg'] = 'Alle Felder sind Pflichtfelder (dürfen nicht leer sein)';
    }
    #---------------------------------------------------------
  }
?>
