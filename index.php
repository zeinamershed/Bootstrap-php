<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.1/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
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
                <img src="bilder/b969febd1d5bab7c07e7f426bc9848ea.png" alt="">
            </div>
            <div class="icon">
                <button type="button" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-suit-heart"></i></button>
                <button type="button" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-cart3"></i></button>
                <button type="button" class="btn btn-outline-light btn-lg" onclick="person()">
                    <i class="bi bi-person"></i> 
        

                    <?php if(isset($_SESSION['loggedIn'])):?>
                        <p name="user_name"> Hallo  <?= nl2br($_SESSION['name'])?>  </p>
                        <script>
                        function person() {
                          window.location.href = 'seiten/logout.php';
                        }
                        </script>
                        <?php else:?>
                            <script>
                        function person() {
                          window.location.href = 'seiten/login.php';
                        }
                        </script>
                    <?php endif;?> 
                    
                </button>

            </div>

        </div>

        <nav>
            <ul>
                <li><a href="index.html">Page</a></li>
                <li class="dropdown"><a href="#">Parfum</a>
                <ul class="dropdown-menu">
                    <li><a href="seiten/P-herren.php">Herren</a></li>
                    <li><a href="seiten/P-damen.php">Damen</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#">Make-up</a>
                <ul class="dropdown-menu">
                    <li><a href="seiten/teint.php">Teint</a></li>
                    <li><a href="seiten/augen.php">Augen</a></li>
                    <li><a href="seiten/lippen.php">Lippen</a></li>
                    <li><a href="seiten/nagel.php">Nägel</a></li>
                    <li><a href="seiten/augenbraun.php">Augenbraun</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#">Pflege</a>
                <ul class="dropdown-menu">
                    <li><a href="seiten/haare.php">Haare</a></li>
                    <li><a href="seiten/gesicht.php">Gesicht</a></li>
                    <li><a href="seiten/korper.php">Korper</a></li>
                </ul>
               </li>
                <li><a href="seiten/sale.php">Sale</a></li>
                <li class="dropdown"><a href="#">Acssesoir</a>
                <ul class="dropdown-menu">
                    <li><a href="seiten/schmuck.php">Schmuck</a></li>
                    <li><a href="seiten/brille.php">Brille</a></li>
                </ul></li>
                <li><a href="seiten/home.php">Home & Lifestyle</a></li>
            </ul>
        </nav>

    </header>
    <section class="container">
        <div id="carouselExampleSlidsOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                 <img src="bilder/1823_OB-desktop_1700x660_FIL_TF-.jpg" class="d-block w-100" alt="">
               </div>
               <div class="carousel-item">
                 <img src="bilder/231013_GRAPHICS-743_CC_XL_Basket_GWP_SLOWDAY_DE_desktop_2.jpg" class="d-block w-100" alt="">
               </div>
               <div class="carousel-item">
                 <img src="bilder/231016_GRAPHICS-720_CC_XL_InspoLP_GoldenAutumnGlam_desktop.jpg" class="d-block w-100" alt="">
               </div>
               <div class="carousel-item">
                <img src="bilder/COT-3220-2308-4955-0001_T_HBO_44.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="bilder/COT-3220-2309-1034-0001_T_GUF_44360_GUF_GG_ELX_PARF_23_DIGITAL_BANNER_CPV_MB_2_575_1700x660_px_1700x660.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="bilder/VAL401723_desktop_full_1700x660p.jpg" class="d-block w-100" alt="">
              </div>
            </div>
        
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div> 
        <div class="logozeile">
            <img src="bilder/cocos-chanel-logo-vector-136940580.webp" alt="">
            <img src="bilder/Download.png" alt="">
            <img src="bilder/MAC-Cosmetics-logo.png" alt="">
            <img src="bilder/yves-saint-laurent-logo.jpg" alt="">
            <img src="bilder/lancome-2.svg" alt="">
            <img src="bilder/boss-hugo-boss1804.logowik.com.webp" alt="">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>