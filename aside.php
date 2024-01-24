<div class="col-md-3">
    <aside>
        <div>
            <h5>Bizi Takip Edin</h5>
            <a href="https://www.facebook.com/turkuazdilegitim" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://twitter.com/turkuazdil" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/turkuazdilegitim/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://vimeo.com/turkuazdil" target="_blank"><i class="bi bi-vimeo"></i></a>
            <a href="https://www.linkedin.com/company/turkuazdilegitim/" target="_blank"><i class="bi bi-linkedin"></i></a>
        </div>
        <div class="my-3">
            <h5>Güncel Yazılar</h5>

            <?php

            if (isset($_GET['postID'])) {
                $guncelYazilar = $db->prepare('select * from yazilar where id not in (?) order by id desc');
                $guncelYazilar->execute(array($_GET['postID']));

                if ($guncelYazilar->rowCount()) {
                    foreach ($guncelYazilar as $guncelYazilarSatir) {
            ?>
                        <a href="makale.php?postID=<?php echo $guncelYazilarSatir['id']; ?>" class="text-dark"><small style="text-transform: capitalize;">- <?php echo $guncelYazilarSatir['baslik']; ?></small></a>
                    <?php
                    }
                }
            } else {
                $guncelYazilar = $db->prepare('select * from yazilar order by id desc');
                $guncelYazilar->execute();

                if ($guncelYazilar->rowCount()) {
                    foreach ($guncelYazilar as $guncelYazilarSatir) {
                    ?>
                        <a href="makale.php?postID=<?php echo $guncelYazilarSatir['id']; ?>" class="text-dark" style="text-transform: capitalize;">- <?php echo $guncelYazilarSatir['baslik']; ?></a> <br>
            <?php
                    }
                }
            }

            ?>

        </div>
        <div>
            <h5>Eğitimlerimiz</h5>
            <?php
            $egitimList = $db->prepare('select * from egitimler order by egitimAdi && kategori asc');
            $egitimList->execute();

            if ($egitimList->rowCount()) {
                foreach ($egitimList as $egitimListSatir) {
            ?>
                    <a href="egitimler.php?egitimID=<?php echo $egitimListSatir['id']; ?>" class="text-dark" style="text-transform: capitalize;">- <?php echo $egitimListSatir['egitimAdi']; ?></a><br>
            <?php
                }
            }
            ?>
        </div>
        <div class="my-3">
            <form action="" method="post" class="text-white bg-lacivert p-3 text-center rounded shadow mb-2">
                <h5>Detaylı Bilgi Alın</h5>
                <p>Sizi Hemen Arayalım</p>
                <div class="form-group">
                    <input type="text" name="adi" placeholder="Adınız Soyadınız" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="tel" placeholder="Telefon Numaranız" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-Posta Adresiniz" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Gönder" class="btn btn-warning w-100" name="detayliBilgi">
                </div>
            </form>

            <?php
            if (isset($_POST['detayliBilgi'])) {
                $bilgiTalep = $db->prepare('insert into detayli_bilgi(adi,tel,email,tarih,durum) values(?,?,?,?,?)');
                $bilgiTalep->execute(array($_POST['adi'], $_POST['tel'], $_POST['email'], date('d.m.Y'), 'Aranmadı'));

                if ($bilgiTalep->rowCount()) {
                    echo '<div class="alert alert-success w-100 text-center">Talebiniz İletildi</div>';
                } else {
                    echo '<div class="alert alert-danger w-100 text-center">Hata Oluştu</div>';
                }
            }
            ?>
        </div>
    </aside>
</div>