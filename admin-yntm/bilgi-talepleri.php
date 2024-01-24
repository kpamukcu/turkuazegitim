<?php require_once('header.php'); ?>

<!-- XXX Section Start -->
<div class="row">
    <div class="col-12">
        <h4>Bilgi Talepleri</h4>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Talep No</th>
                    <th>Adı Soyadı</th>
                    <th>Telefon</th>
                    <th>E-Posta</th>
                    <th>Tarih</th>
                    <th>Durum</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $talepList = $db->prepare('select * from detayli_bilgi order by id desc');
                $talepList->execute();

                if ($talepList->rowCount()) {
                    foreach ($talepList as $talepListSatir) {
                ?>
                        <tr>
                            <td><?php echo $talepListSatir['id']; ?></td>
                            <td><?php echo $talepListSatir['adi']; ?></td>
                            <td><?php echo $talepListSatir['tel']; ?></td>
                            <td><?php echo $talepListSatir['email']; ?></td>
                            <td><?php echo $talepListSatir['tarih']; ?></td>
                            <td><?php echo $talepListSatir['durum']; ?></td>
                            <td><a href="bilgi-talepleri.php?updateID=<?php echo $talepListSatir['id']; ?>" class="btn btn-warning">Düzenle</a></td>
                            <td><a href="bilgi-talepleri.php?deleteID=<?php echo $talepListSatir['id']; ?>" class="btn btn-danger">Sil</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- XXX Section End -->

<?php require_once('footer.php'); ?>