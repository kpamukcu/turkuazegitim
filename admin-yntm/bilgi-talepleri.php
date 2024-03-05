<?php
require_once('header.php');

if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];
    $talepSil = $db->prepare('delete from detayli_bilgi where id=?');
    $talepSil->execute(array($id));

    if ($talepSil->rowCount()) {
        echo '<script>alert("Talep Silindi")</script><meta http-equiv="refresh" content="0; url=bilgi-talepleri.php">';
    } else {
        echo '<script>alert("Hata Oluştu. Lütfen Tekrar Deneyin.")</script><meta http-equiv="refresh" content="0; url=bilgi-talepleri.php">';
    }
}
?>

<!-- Bilgi Talepleri Section Start -->
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
<!-- Bilgi Talepleri Section End -->

<?php require_once('footer.php'); ?>