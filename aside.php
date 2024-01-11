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
            $guncelYazilar = $db->prepare('select * from yazilar where id not in (?) order by id desc');
            $guncelYazilar->execute(array($id));

            if ($guncelYazilar->rowCount()) {
                foreach ($guncelYazilar as $guncelYazilarSatir) {
            ?>
                    <a href="makale.php?postID=<?php echo $guncelYazilarSatir['id']; ?>"><small><?php echo $guncelYazilarSatir['baslik']; ?></small></a>
            <?php
                }
            }
            ?>

        </div>
    </aside>
</div>