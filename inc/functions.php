<?php 

function e($value) {
  return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
#------------------------------------------------------------------

function csrf_token() {
  $csrfToken = bin2hex(random_bytes(64));
  if( !isset($_SESSION['token']) || empty($_SESSION['token'])) {
    $_SESSION['token'] = $csrfToken;
  }
  return $_SESSION['token'];
}

#------------------------------------------------------------------

function formatiereDatum($dbDatum, $format = 'd.m.Y H:i') {
    $datum_db = new DateTime($dbDatum);
    return $datum_db->format($format);
}

  #------------------------------------------------------------------

function userIstLogged() {
    if(    (!isset($_SESSION['id']) && !isset($_SESSION['loggedIn']))  || empty($_SESSION['id'])     ) {
      echo '<p class="fs-2 text-light fw-bold p-2">Bitte sich anmelden oder registrieren</p>';
      die();
    }
}