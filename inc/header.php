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
                          window.location.href = 'inc/logout.php';
                        }
                        </script>
                        <?php else:?>
                            <script>
                        function person() {
                          window.location.href = 'index1.php?page=login';
                        }
                        </script>
                    <?php endif;?> 
                    
                </button>

            </div>

        </div>

        <nav>
            <ul>
                <li><a href="index1.php">Page</a></li>
                
                <li class="dropdown"><a href="#">Parfum</a>
                <ul class="dropdown-menu">
                    <li><a href="index1.php?page=herren" class="nav-link <?= ($page === 'herren') ? 'active fw-bold' : ''; ?>">Herren</a></li>
                    <li><a href="index1.php?page=damen" class="nav-link <?= ($page === 'damen') ? 'active fw-bold' : ''; ?>">Damen</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#">Make-up</a>
                <ul class="dropdown-menu">
                    <li><a href="index1.php?page=teint" class="nav-link <?= ($page === 'teint') ? 'active fw-bold' : ''; ?>">Teint</a></li>
                    <li><a href="index1.php?page=augen" class="nav-link <?= ($page === 'augen') ? 'active fw-bold' : ''; ?>">Augen</a></li>
                    <li><a href="index1.php?page=lippen" class="nav-link <?= ($page === 'lippen') ? 'active fw-bold' : ''; ?>">Lippen</a></li>
                    <li><a href="index1.php?page=nagel" class="nav-link <?= ($page === 'nagel') ? 'active fw-bold' : ''; ?>">Nagel</a></li>
                    <li><a href="index1.php?page=augenbraun" class="nav-link <?= ($page === 'augenbraun') ? 'active fw-bold' : ''; ?>">Augenbraun</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#">Pflege</a>
                <ul class="dropdown-menu">
                <li><a href="index1.php?page=haare" class="nav-link <?= ($page === 'haare') ? 'active fw-bold' : ''; ?>">Haare</a></li>
                <li><a href="index1.php?page=gesicht" class="nav-link <?= ($page === 'gesicht') ? 'active fw-bold' : ''; ?>">Gesicht</a></li>
                <li><a href="index1.php?page=korper" class="nav-link <?= ($page === 'korper') ? 'active fw-bold' : ''; ?>">Korper</a></li>
                </ul>
               </li>
               <li><a href="index1.php?page=sale" class="nav-link <?= ($page === 'sale') ? 'active fw-bold' : ''; ?>">Sale</a></li>
                <li class="dropdown"><a href="#">Acssesoir</a>
                <ul class="dropdown-menu">
                <li><a href="index1.php?page=schmuck" class="nav-link <?= ($page === 'schmuck') ? 'active fw-bold' : ''; ?>">Schmuck</a></li>
                    <li><a href="index1.php?page=brille" class="nav-link <?= ($page === 'brille') ? 'active fw-bold' : ''; ?>">Brille</a></li>
                </ul></li>
                <li><a href="index1.php?page=home" class="nav-link <?= ($page === 'home') ? 'active fw-bold' : ''; ?>">Home & Lifestyle</a></li>
            </ul>
        </nav>

    </header>