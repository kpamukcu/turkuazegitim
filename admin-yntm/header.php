<?php
require_once('baglan.php');
session_start();
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Ck Editör Cdn-->
    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>


    <title>Document</title>
</head>

<body>

    <?php
    if (!isset($_SESSION['user'])) {
        die('<section id="loginstate"><div class="container"><div class="row" style="height: 60vh;"><div class="col-4 m-auto"><div class="alert alert-danger text-center">Giriş Yetkiniz Yoktur</div></div></div></div></section>');
    }
    ?>

    <section id="topBar" class="bg-dark text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <small>Turkuaz Eğitim Admin Paneli</small>
                </div>
                <div class="col-md-6 text-right">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-white" href="logout.php" role="button" data-toggle="dropdown" aria-expanded="false">
                            <small><?php echo $_SESSION['user']['adi']; ?></small>
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="logout.php">Güvenli Çıkış</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 bg-dark" style="min-height: 96.7vh;">
                    <ul class="list-group mt-3">
                        <li class="list-group-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="list-group-item"><a href="user.php">Kullanıcılar</a></li>
                        <li class="list-group-item"><a href="kategori.php">Kategoriler</a></li>
                        <li class="list-group-item"><a href="yazilar.php">Yazılar</a></li>
                        <li class="list-group-item"><a href="sayfalar.php">Sayfalar</a></li>
                        <li class="list-group-item"><a href="egitimler.php">Eğitimler</a></li>
                        <li class="list-group-item"><a href="ayarlar.php">Ayarlar</a></li>
                    </ul>
                </div>
                <div class="col-md-10 py-4">