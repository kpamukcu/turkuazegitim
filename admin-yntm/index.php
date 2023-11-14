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

    <title>Admin Giriş Paneli</title>
</head>

<body>

    <!-- Login Section Start -->
    <section id="login">
        <div class="container">
            <div class="row" style="height: 70vh;">
                <div class="col-4 m-auto">
                    <img src="" alt="">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="kadi" placeholder="Kullanıcı Adınız" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="sifre" placeholder="Şireniz" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Giriş" class="btn btn-success w-100" name="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['login'])) {
            $kadi = $_POST['kadi'];
            $sifre = $_POST['sifre'];

            $userbul = $db -> prepare('select * from user where kadi=? && sifre=?');
            $userbul -> execute(array($kadi,$sifre));
            $userbulSatir = $userbul -> fetch();

            if($userbulSatir){
                $_SESSION['user'] = $userbulSatir;
                echo '<div class="alert alert-success">Kullanıcı Adı ve Şifre Doğru. Lütfen Bekleyin</div><meta http-equiv="refresh" content="1; url=dashboard.php">';
            } else{
                echo '<div class="alert alert-danger">Kullanıcı Adı ve/veya Şifre Hatalı. Lütfen Tekrar Deneyin</div><meta http-equiv="refresh" content="1; url=index.php">';
            }
        }
        ?>
    </section>
    <!-- Login Section End -->


    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

