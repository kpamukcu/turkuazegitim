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
} elseif (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];
    $talepCek = $db->prepare('select * from detayli_bilgi where id=?');
    $talepCek->execute(array($id));
    $talepCekSatir = $talepCek->fetch();

    echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
      $("#myModal").modal("show");
    });
    </script>';
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
<!-- Bilgi Talepleri Section End -->

<!-- Bilgi Talebi Update Section Start -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal">Talep Bilgi Ekle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <b>Talep No: </b><?php echo $talepCekSatir['id']; ?> <br>
                <b>Ad Soyad: </b><?php echo $talepCekSatir['adi']; ?> <br>
                <b>Telefon: </b><?php echo $talepCekSatir['tel']; ?> <br>
                <b>E-Posta: </b><?php echo $talepCekSatir['email']; ?> <br>
                <b>Talep Tarihi: </b><?php echo $talepCekSatir['tarih']; ?> <br>
                <b>Durum: </b><?php echo $talepCekSatir['durum']; ?> <br>
                <b>Açıklama: </b>
            </div>
            <div class="modal-footer" style="justify-content: flex-start;">
                <h6 class="modal-title">Açıklama Ekleyin</h6>
                <form action="" method="post">
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Bilgi Talebi Update Section End -->

<?php require_once('footer.php'); ?>