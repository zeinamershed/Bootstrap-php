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
                <button type="button" class="btn btn-outline-light btn-lg" onclick="person()">
                    <i class="bi bi-person"></i>
                    <script>
                        function person() {
                          window.location.href = 'login.php';
                        }
                        </script>
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
                    </ul>
                </li>
                <li><a href="home.php">Home & Lifestyle</a></li>
            </ul>
        </nav>

    </header>
    <section class="container">
        <div class="cards">
            <div class="parfum-card">
                <img src="../bilder/artdeco-soft-eye-liner-waterproof-eyeliner-nr-10-black-1-2g_1.webp" alt="parfum">
                <h3>ARTDECO</h3>
                <p>Kajalstift</p>
                <p>5,32€</p>
                <p class="text-warning mt-0">Du sparst 5%</p>
                <div class="card-button">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path
                            d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z">
                        </path>
                        <path
                            d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z">
                        </path>
                        <path
                            d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z">
                        </path>
                    </svg>
                </div>

            </div>
            <div class="parfum-card">
                <img src="../bilder/3274872454460_c.webp" alt="parfum">
                <h3>KENZO</h3>
                <p>Eau de Parfum</p>
                <p>61,60€</p>
                <p class="text-warning mt-0">Du sparst 5%</p>
                <div class="card-button">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path
                            d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z">
                        </path>
                        <path
                            d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z">
                        </path>
                        <path
                            d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z">
                        </path>
                    </svg>
                </div>

            </div>
            <div class="parfum-card">
                <img src="../bilder/l-occitane-verbene-badeschaum-500-ml-3253581506141.webp" alt="parfum">
                <h3>L'Occitane</h3>
                <p>Badöl</p>
                <p>26,99€</p>
                <p class="text-warning mt-0">Du sparst 5%</p>
                <div class="card-button">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path
                            d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z">
                        </path>
                        <path
                            d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z">
                        </path>
                        <path
                            d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z">
                        </path>
                    </svg>
                </div>

            </div>
            <div class="parfum-card">
                <img src="../bilder/biotherm-aquasource-bb-cream-hell-getoente-gesichtscreme-30ml.webp" alt="Parfum">
                <h3>Biotherm</h3>
                <p>BB Cream</p>
                <p>19,90€</p>
                <p class="text-warning mt-0">Du sparst 5%</p>
                <div class="card-button">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path
                            d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z">
                        </path>
                        <path
                            d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z">
                        </path>
                        <path
                            d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z">
                        </path>
                    </svg>
                </div>

            </div>

            <div class="parfum-card">
                <img src="../bilder/essie-stay-longer-premium-nagelueberlack-13-5-ml-no-color-3600531663414.webp"
                    alt="parfum">
                <h3>NARS</h3>
                <p>Nagellack</p>
                <p>19,60€</p>
                <p class="text-warning mt-0">Du sparst 5%</p>
                <div class="card-button">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path
                            d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z">
                        </path>
                        <path
                            d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z">
                        </path>
                        <path
                            d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z">
                        </path>
                    </svg>
                </div>

            </div>
            <div id="img">
                <img src="../bilder/Sale-Banner_orange.jpg" alt="">
            </div>  
        </div>
    </section>

    <footer class="row">
        <article>
            <div>
                <p>Sicher bezahlen</p>
                <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png"
                    alt="PayPal Logo">
                <img src="https://cdn.icon-icons.com/icons2/1186/PNG/512/1490135017-visa_82256.png" alt="Visa Logo">
                <img src="https://cdn.icon-icons.com/icons2/1186/PNG/512/1490135012-discover_82255.png"
                    alt="Discover Logo">
                <img src="https://cdn.icon-icons.com/icons2/2163/PNG/512/american_express_icon_133068.png"
                    alt="Amex Logo">
            </div>
        </article>
        <article>
            <div>
                <p>schnell versendet</p>
                <img src="https://assets.dpdhl-brands.com/guides/dhl/guides/design-basics/logo-and-claim/logo/versions-01.png"
                    alt="DHL"><img
                    src="https://hamburg.nabu.de/imperia/md/nabu/images/regional/hamburg/fittosize_680_453_76d798d06a7e64abfa6ebdb1a8f3950d_hermes-logo-x453.jpeg"
                    alt="hermes logo">
            </div>


        </article>
        <article>
            <div class="app">
                <p>MY App</p>
                <img src="https://www.laden-fahren.de/wp-content/uploads/2021/02/37-374927_google-play-logo-png-1.jpg"
                    alt="google-play app-store logo">
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