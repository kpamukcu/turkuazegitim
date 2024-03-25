<?php
session_start();
require_once('baglan.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>

<body>

    <!-- Header Section Start -->
    <header id="header">
        <section id="topBar" class="py-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="index.php">
                            <img src="img/turkuaz-egitim-logo-116x116.png" alt="Turkuaz Eğitim Logo" style="width: 50px;">
                        </a>
                        Turkuaz Eğitim
                    </div>
                    <div class="col-md-6 text-right my-auto">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="font-size: 12px;">
                            Bilgi Talep Edin
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Form Gelecek
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="iletisim.php" class="btn btn-info" style="font-size:12px;">İletişim</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="menu" class="btn-lacivert">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- <a class="navbar-brand" href="index.php">TURKUAZ EĞİTİM</a> -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav m-auto">
                                    <!-- <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Ana Sayfa</a>
                                    </li> -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Dil Eğitimi
                                        </a>
                                        <div class="dropdown-menu">
                                            <?php
                                            $menu1 = $db->prepare('select * from egitimler where kategori="Dil Eğitimi" order by egitimAdi asc ');
                                            $menu1->execute();

                                            if ($menu1->rowCount()) {
                                                foreach ($menu1 as $menu1Satir) {
                                            ?>
                                                    <a class="dropdown-item" href="egitimler.php?egitimID=<?php echo $menu1Satir['id']; ?>"><?php echo $menu1Satir['egitimAdi']; ?></a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Sınavlara Hazırlık Kursları
                                        </a>
                                        <div class="dropdown-menu">
                                            <?php
                                            $menu2 = $db->prepare('select * from egitimler where kategori="Sınavlara Hazırlık Kursları" order by egitimAdi asc ');
                                            $menu2->execute();

                                            if ($menu1->rowCount()) {
                                                foreach ($menu2 as $menu2Satir) {
                                            ?>
                                                    <a class="dropdown-item" href="egitimler.php?egitimID=<?php echo $menu2Satir['id']; ?>"><?php echo $menu2Satir['egitimAdi']; ?></a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Yurt Dışı Eğitim
                                        </a>
                                        <div class="dropdown-menu">
                                            <?php
                                            $menu3 = $db->prepare('select * from egitimler where kategori="Yurt Dışı Eğitim" order by egitimAdi asc ');
                                            $menu3->execute();

                                            if ($menu1->rowCount()) {
                                                foreach ($menu3 as $menu3Satir) {
                                            ?>
                                                    <a class="dropdown-item" href="egitimler.php?egitimID=<?php echo $menu3Satir['id']; ?>"><?php echo $menu3Satir['egitimAdi']; ?></a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Turkuaz Akademi
                                        </a>
                                        <div class="dropdown-menu">
                                            <?php
                                            $menu4 = $db->prepare('select * from egitimler where kategori="Turkuaz Akademi" order by egitimAdi asc ');
                                            $menu4->execute();

                                            if ($menu1->rowCount()) {
                                                foreach ($menu4 as $menu4Satir) {
                                            ?>
                                                    <a class="dropdown-item" href="egitimler.php?egitimID=<?php echo $menu4Satir['id']; ?>"><?php echo $menu4Satir['egitimAdi']; ?></a>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <a class="dropdown-item" href="https://www.hizliokuma.turkuazegitim.net" target="_blank">Hızlı Okuma Programı</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Sınav Merkezleri
                                        </a>
                                        <div class="dropdown-menu">
                                            <?php
                                            $sinavMerkezi = $db->prepare('select * from sayfalar where ustMenu = "Sınav Merkezi" order by baslik asc');
                                            $sinavMerkezi->execute();

                                            if ($sinavMerkezi->rowCount()) {
                                                foreach ($sinavMerkezi as $sinavMerkeziSatir) {
                                            ?>
                                                    <a class="dropdown-item" href="sample.php?pageID=<?php echo $sinavMerkeziSatir['id']; ?>"><?php echo $sinavMerkeziSatir['baslik']; ?></a>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sample.php?pageID=XXXXX">Turkuaz Dil Eğitim Derneği</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Hakkımızda
                                        </a>
                                        <div class="dropdown-menu">
                                            <?php
                                            $hakkimizdaMenu = $db->prepare('select * from sayfalar where ustMenu="Hakkımızda" order by baslik asc');
                                            $hakkimizdaMenu->execute();

                                            if ($hakkimizdaMenu->rowCount()) {
                                                foreach ($hakkimizdaMenu as $hakkimizdaMenuSatir) {
                                            ?>
                                                    <a class="dropdown-item" href="sample.php?pageID=<?php echo $hakkimizdaMenuSatir['id']; ?>"><?php echo $hakkimizdaMenuSatir['baslik']; ?></a>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <a class="dropdown-item" href="blog.php">Ağ Günlüğü (Blog)</a>
                                        </div>
                                    </li>
                                    <!-- <li class="nav-item ml-5">
                                        <a class="nav-link btn btn-warning" href="#">Bize Ulaşın</a>
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- Header Section End -->