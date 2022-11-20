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
    <div class="loading" id="load">
        <div class="container_load">
            <img src="assets/img/icons/icon_windows.png" alt="windows_load" class="windows_icon">
            <img src="assets/img/load.gif" style="width:150px;height:150px;" />
        </div>
    </div>
    <section class="desktop container">
        <div class="area">
            <button class="icons_area lixeira">
                <img src="assets/img/icons/lixeira-vazia.png" alt="">
                <span>Lixeira</span>
            </button>
            <div class="draggableIcon">
                <button class="icons_area icon_rename">
                    <img src="assets/img/icons/meus-documentos.png" alt="">
                    <span>Meus Documentos</span>
                </button>
            </div>
        </div>
        <?php include "includes/clickRight.php"; ?>
        <!--/menu-com-clique-direito-do-mouse-->
        <?php include "includes/menuBottom.php"; ?>
        <!--/menus-bottom-->
        <?php include "includes/windows.php"; ?>
        <!--/Janelas-->
    </section>
    <!--script-->
    <script src="assets/js/events.js"></script>
</body>

</html>