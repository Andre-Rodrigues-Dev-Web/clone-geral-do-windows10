<?php 
    include "functions/main.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Windows 10 | Versão do André Rodrigues</title>
    <!--SEO-->
    <meta name="description" content="Windows 10">
    <meta name="keywords" content="Windows 10">
    <meta name="author" content="André Laurentino">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--font-awesome-cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Font-Awesome-cdn-regular-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/regular.min.css">
</head>

<body>
    <section class="desktop container">
        <nav class="menu_right_clique">
            <ul class="links"></ul>
        </nav>
        <!--/menu-com-clique-direito-do-mouse-->
        <nav class="menu">
            <div class="container_windows">
                <div class="menu_windows__logo">
                    <img src="assets/img/icons/icon_windows.png" alt="Windows 10" title="Iniciar">
                </div>
                <div class="menu_iniciar">
                    <div class="container_menu">
                        <div class="left">
                            <div class="container_bars">
                                <button>
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <ul class="actions">
                                <li>
                                    <a href="index.php">
                                        <i class="fas fa-user-circle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="fas fa-file"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="far fa-image"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="fas fa-power-off"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="main">
                            <h2>Adicionados recentemente</h2>
                            <ul class="programas">
                                <li>
                                    <a href="#">
                                        <img src="assets/img/icons/chrome.png" alt="Google">
                                        <span>Google Chrome</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/icons/firefox.png" alt="Firefox">
                                        <span>Firefox</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/icons/vsc.png" alt="Visua-Studio-Code">
                                        <span>Visual Studio Code</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right"></div>
                    </div>
                </div>
                <!--/dropdown-iniciar-->
                <div class="menu_windows__search">
                    <input type="text" placeholder="Digite aqui para pesquisar">
                </div>
                <div class="menu_windows__icons">
                    <ul>
                        <li><a href="#"><img src="assets/img/icons/chrome.png" alt="Windows 10"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--script-->
    <script src="assets/js/events.js"></script>
</body>

</html>