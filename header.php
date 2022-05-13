<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $_SESSION["title"]; ?></title>
    <meta name="description" content="<?php echo $_SESSION["description"]; ?>">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/anasayfa.css" />
    <link rel="stylesheet" href="assets/css/akademik.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/anasayfaslider.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/etkinlik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/footer.css">
    <link href="https://mf.ahievran.edu.tr/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/navbar.js"></script>



</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div>
                <img src='assets/img/pnglogo.png' id='yuklenmelogo'></img>
            </div>
        </div>
    </div>
    <?php include 'baglanti.php'; ?>
    <nav class="autohide navbar navbar-light navbar-expand-lg fixed-top clean-navbar" id="navbar">
        <div class="container-fluid">
            <img class='animate__animated animate__fadeInBottomRight' src="assets/img/pnglogo.png" id="logo">
            <div class="col-sm-3">
                <h1 class='animate__animated animate__fadeInBottomRight' id="logo-sag-yazi1">Mühendislik Mimarlık Fakültesi</h1>
                <h2 class='animate__animated animate__fadeInBottomRight' id="logo-sag-yazi2">Bilgisayar Mühendisliği</h2>
            </div>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="height: -21.8px;">
                <ul class="navbar-nav ms-auto" id="ul">
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'index') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'index') {
                                                                        echo 'active';
                                                                    } ?>" href="index.php">Ana Sayfa</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'hakkimizda') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'hakkimizda') {
                                                                        echo 'active';
                                                                    } ?>" href="hakkimizda.php">Hakkımızda</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'hedeflerimiz') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'hedeflerimiz') {
                                                                        echo 'active';
                                                                    } ?>" href="hedeflerimiz.php">hedeflerimiz</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'what') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'what') {
                                                                        echo 'active';
                                                                    } ?>" href="https://drive.google.com/file/d/1Yb06Gk6EkdBtBqWi571LP36LchOooLb_/view" target="_blank">Ders İçerikleri</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'labs') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'labs') {
                                                                        echo 'active';
                                                                    } ?>" href="labs.php">Laboratuvarlarımız</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'akademik') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'akademik') {
                                                                        echo 'active';
                                                                    } ?>" href="akademik.php">Akademik Personel</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'etkinlikler') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'etkinlikler') {
                                                                        echo 'active';
                                                                    } ?>" href="events.php">Etkinlikler</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'galeri') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'galeri') {
                                                                        echo 'active';
                                                                    } ?>" href="galeri.php">Galeri</a></li>
                    <li class="nav-item <?php if ($_SESSION["sayfa"] == 'iletisim') {
                                            echo 'active';
                                        } ?>"><a class="nav-link <?php if ($_SESSION["sayfa"] == 'iletisim') {
                                                                        echo 'active';
                                                                    } ?>" href="iletisim.php">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>