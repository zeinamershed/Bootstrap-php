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
      
            header("Location: ../index.php");
        } else {
           
            $_SESSION['error_msg'] = "<div id='message'>Invalid username or password.</div>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-icons-1.11.1/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
</head>

<body>
    <header>
        <div class="kopf">

            <div class="search-box">
                <button type="submit"><i class="bi bi-search-heart"></i>
                    <input type="text" placeholder="wonach suchst du">
                </button>
            </div>

            <div class="logo">
                <img src="../bilder/b969febd1d5bab7c07e7f426bc9848ea.png" alt="">
            </div>
            <div class="icon">
                <button type="button" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-suit-heart"></i></button>
                <button type="button" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-cart3"></i></button>
                <button type="button" class="btn btn-outline-light btn-lg">
                    <a href="/WEBFULL101a-05.1/Uebungen/BootstrapProjekt/seiten/login.php" ><i class="bi bi-person"></i></a>
                    <label name="user_name"></label>
                </button>

            </div>

        </div>

        <nav>
            <ul>
                <li><a href="../index.html">Page</a></li>
                <li class="dropdown"><a href="#">Parfum</a>
                <ul class="dropdown-menu">
                    <li><a href="P-herren.php">Herren</a></li>
                    <li><a href="P-damen.php">Damen</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#">Make-up</a>
                <ul class="dropdown-menu">
                    <li><a href="teint.php">Teint</a></li>
                    <li><a href="augen.php">Augen</a></li>
                    <li><a href="lippen.php">Lippen</a></li>
                    <li><a href="nagel.php">Nägel</a></li>
                    <li><a href="augenbraun.php">Augenbraun</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#">Pflege</a>
                <ul class="dropdown-menu">
                    <li><a href="haare.php">Haare</a></li>
                    <li><a href="gesicht.php">Gesicht</a></li>
                    <li><a href="korper.php">Korper</a></li>
                </ul>
               </li>
                <li><a href="sale.php">Sale</a></li>
                <li class="dropdown"><a href="#">Acssesoir</a>
                <ul class="dropdown-menu">
                    <li><a href="schmuck.php">Schmuck</a></li>
                    <li><a href="brille.php">Brille</a></li>
                </ul></li>
                <li><a href="home.php">Home & Lifestyle</a></li>
            </ul>
        </nav>

    </header>
    <section class="container">
        <div class="col-sm-12">
           <h3>Willkommen bei MY</h3>  
           <p>Ich bin bereits MY-Kund*in</p>
           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 
           <input type="text" name="mail" placeholder="E-Mail-Adresse" class="form-control"required><br>
           <input type="password" name="pwd" placeholder="Password" class="form-control" required> <br>

           <button type="submit" name="submit_login" class="form-control">Anmelden</button>
            <a href="register.php">neue Konto erstellen</a>

           <?php if(isset($_SESSION['error_msg'])):?>
             <div class="alert alert-danger fs-8 m-4">
                 <?= nl2br($_SESSION['error_msg'])?>
           </div>
            <?php endif;?>
        </form>
        </div>
        </div>
    </section>
    <footer class="row">
        <article>
            <div>
                <p>Sicher bezahlen</p>
                <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal Logo">
                <img src="https://cdn.icon-icons.com/icons2/1186/PNG/512/1490135017-visa_82256.png" alt="Visa Logo">
                <img src="https://cdn.icon-icons.com/icons2/1186/PNG/512/1490135012-discover_82255.png" alt="Discover Logo">
                <img src="https://cdn.icon-icons.com/icons2/2163/PNG/512/american_express_icon_133068.png" alt="Amex Logo">
            </div>
        </article>
        <article>
            <div>
                <p>schnell versendet</p>
                <img src="https://assets.dpdhl-brands.com/guides/dhl/guides/design-basics/logo-and-claim/logo/versions-01.png" alt="DHL"><img src="https://hamburg.nabu.de/imperia/md/nabu/images/regional/hamburg/fittosize_680_453_76d798d06a7e64abfa6ebdb1a8f3950d_hermes-logo-x453.jpeg" alt="hermes logo">
            </div>


        </article>
        <article>
            <div class="app">
                <p>MY App</p>
                <img src="https://www.laden-fahren.de/wp-content/uploads/2021/02/37-374927_google-play-logo-png-1.jpg" alt="google-play app-store logo">
            </div>
        </article>

        <hr>
        <div class="row2">
            <p>&copy; My company 2023</p>
            <div>
            <p>MY folgen
            <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
            </p>
            </div>
        </div>
       


    </footer>
</body>

</html>