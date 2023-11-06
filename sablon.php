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
    <header id="header" class="bg-light">
        <section id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Ana Sayfa</a>
                                    </li>
                                    <li class="nav-item dropdown mx-3">
                                        <a class="nav-link dropdown-toggle" href="egitimler.php" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Eğitimlerimiz
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Eğitim 1</a>
                                            <a class="dropdown-item" href="#">Eğitim 2</a>
                                            <a class="dropdown-item" href="#">Eğitim 3</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
                                    </li>
                                    <li class="nav-item mx-3">
                                        <a class="nav-link" href="blog.php">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="iletisim.php">İletişim</a>
                                    </li>
                                    <li class="nav-item ml-5">
                                        <a class="nav-link btn btn-warning" href="#">Bize Ulaşın</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section id="mainBanner" class="py-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 my-auto">
                        <h1 style="font-size:60px;">Turkuaz Eğitim</h1>
                        <p style="font-size:28px;" class="mb-5">Daha İyi Bir Dünya İçin Daha İyi Bir Eğitim</p>
                        <a href="egitimlerimiz.php" class="btn btn-warning">Eğitimlerimiz</a>
                    </div>
                    <div class="col-md-5">
                        <img src="img/turkuaz-egitim-1705x1773.webp" alt="Turkuaz Eğitim Banner" class="w-100">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- Header Section End -->


    <!-- Footer Section Start -->
    <footer id="footer" class="bg-mavi pt-5 pb-2">
        <section id="topFooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/turkuaz-egitim-logo-116x116.png" alt="Turkuaz Eğitim Logo" class="w-25 mb-3"> <br>
                        <small>Dili ezberletmeyen, dili öğreten tek kurum Turkuz Eğitim!</small>
                        <div>
                            <a href="https://www.facebook.com/turkuazdilegitim" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/turkuazdil" target="_blank"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/turkuazdilegitim/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://vimeo.com/turkuazdil" target="_blank"><i class="bi bi-vimeo"></i></a>
                            <a href="https://www.linkedin.com/company/turkuazdilegitim/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3094.1050111552368!2d34.15716807651433!3d39.14959313178328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d572b662675563%3A0xe5fa3ce3f167d9bd!2sTurkuaz%20Dil%20Et%C3%BCt%20ve%20E%C4%9Fitim%20Merkezi!5e0!3m2!1str!2str!4v1699277799198!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section id="bottomFooter" class="pt-5 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <small>Her Hakkı Saklıdır &copy; <?php echo Date('Y'); ?> Turkuaz Eğitim</small>
                    </div>
                    <div class="col-md-6 text-right">
                        <small><a href="https://www.kaanpamukcu.com" class="text-white">Web Tasarım</a></small>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer Section End -->



    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>