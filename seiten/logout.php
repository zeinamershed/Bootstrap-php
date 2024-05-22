<?php 

session_start();



if( isset($_SESSION['loggedIn'] )) {

  unset($_SESSION['name']);
  unset($_SESSION['loggedIn']);
  unset($_SESSION['msg']);

  $_SESSION['msg'] = 'Du bist abgemeldet';
} else {
  $_SESSION['msg'] = 'Fehler bei der Abmeldung';
}

header('Location: ../index.php');