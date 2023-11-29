<?php

require_once('header.php');

if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $katSil = $db->prepare('delete from kategoriler where id=?');
    $katSil->execute(array($id));

    if ($katSil->rowCount()) {
        echo '<script>alert("Kategori Silindi")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
    } else {
        echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
    }
} elseif (isset($_GET['updateId'])) {
    $id = $_GET['updateId'];
    $katSec = $db->prepare('select * from kategoriler where id=?');
    $katSec->execute(array($id));
    $katSecList = $katSec->fetch();

    if ($katSec->rowCount()) {
        echo '
        <script>
        document.addEventListener("DOMContentLoaded", function() {
          $("#katUpdate").modal("show");
        });
        </script>';
    }
}

?>

<!-- Category Add Section Start -->
<div class="row">
    <div class="col-md-6">
        <h4>Kategoriler</h4>
    </div>
    <div class="col-md-6 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#katEkle">
            Kategori Ekle
        </button>

        <!-- Modal -->
        <div class="modal fade" id="katEkle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="katEkle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="katEkle">Yeni Kategori Ekleme</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="katadi" placeholder="Kategori Adı Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <select name="katturu" class="form-control">
                                    <option value="">Kategori Türünü Seçiniz</option>
                                    <option value="Üst Kategori">Üst Kategori</option>
                                    <option value="Alt Kategori">Alt Kategori</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="ustkategori" class="form-control">
                                    <option value="">Üst Kategori Seçiniz</option>
                                    <option value="-">Yok</option>
                                    <?php
                                    $katTuruSec = $db->prepare('select * from kategoriler');
                                    $katTuruSec->execute();

                                    if ($katTuruSec->rowCount()) {
                                        foreach ($katTuruSec as $katTuruSecSatir) {
                                    ?>
                                            <option value="<?php echo $katTuruSecSatir['katadi']; ?>"><?php echo $katTuruSecSatir['katadi']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="aciklama" placeholder="Kategori Açıklaması Girin(Max. 160 Karakter)" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group text-left">
                                <label>Kategori Görseli Seçiniz</label>
                                <input type="file" name="gorsel">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Kaydet" class="btn btn-success w-100" name="katekle">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category Add Section End -->

<!-- Category Add Module Start -->
<?php
if (isset($_POST['katekle'])) {
    $gorsel = '../img/' . $_FILES['gorsel']['name'];

    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
        $katekle = $db->prepare('insert into kategoriler(katadi,katturu,ustkategori,aciklama,gorsel) values(?,?,?,?,?)');
        $katekle->execute(array($_POST['katadi'], $_POST['katturu'], $_POST['ustkategori'], $_POST['aciklama'], $gorsel));

        if ($katekle->rowCount()) {
            echo '<script>alert("Yeni Kategori Eklendi")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
        }
    } else {
        echo '<script>alert("Görsel Yüklenemedi. Tekrar Deneyin")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
    }
}
?>
<!-- Category Add Module End -->

<!-- Category List Section Start -->
<div class="row mt-4">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Görsel</th>
                    <th>Kategori Adı</th>
                    <th>Kategori Türü</th>
                    <th>Üst Kategorisi</th>
                    <th class="text-center">Düzenle</th>
                    <th class="text-center">Sil</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $katList = $db->prepare('select * from kategoriler order by id desc');
                $katList->execute();

                if ($katList->rowCount()) {
                    foreach ($katList as $katListSatir) {
                ?>
                        <tr>
                            <td><img src="<?php echo $katListSatir['gorsel']; ?>" class="w-25"></td>
                            <td><?php echo $katListSatir['katadi']; ?></td>
                            <td><?php echo $katListSatir['katturu']; ?></td>
                            <td><?php echo $katListSatir['ustkategori']; ?></td>
                            <td class="text-center"><a href="kategori.php?updateId=<?php echo $katListSatir['id']; ?>" class="btn btn-warning">Güncelle</a></td>
                            <td class="text-center"><a href="kategori.php?deleteId=<?php echo $katListSatir['id']; ?>" class="btn btn-danger">Sil</a></td>
                        </tr>
                <?php
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Category List Section End -->

<!-- Category Update Modal Start -->
<div class="modal fade" id="katUpdate" tabindex="-1" aria-labelledby="katUpdate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="katUpdate"><?php echo $katSecList['katadi']; ?> Kategorisini Güncelle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?php echo $katSecList['gorsel']; ?>"><br><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kategori Adı</label>
                        <input type="text" name="katadi" value="<?php echo $katSecList['katadi']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori Türü</label>
                        <select name="katturu" class="form-control">
                            <option value="<?php echo $katSecList['katturu']; ?>"><?php echo $katSecList['katturu']; ?></option>
                            <option value="Alt Kategori">Alt Kategori</option>
                            <option value="Üst Kategori">Üst Kategori</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Üst Kategori Seçiniz</label>
                        <select name="ustkategori" class="form-control">
                            <option value="<?php echo $katSecList['katadi']; ?>"><?php echo $katSecList['katadi']; ?></option>
                            <?php
                            $ustKatSec = $db->prepare('select * from kategoriler');
                            $ustKatSec->execute();

                            if ($ustKatSec->rowCount()) {
                                foreach ($ustKatSec as $ustKatSecSatir) {
                            ?>
                                    <option value="<?php echo $ustKatSecSatir['ustkategori']; ?>"><?php echo $ustKatSecSatir['ustkategori']; ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="aciklama" rows="4" class="form-control"><?php echo $katSecList['aciklama']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kategori Görseli Seçiniz</label>
                        <input type="file" name="gorsel">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $katSecList['id']; ?>">
                        <input type="submit" value="Güncelle" class="btn btn-success w-100" name="katGuncelle">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Category Update Modal End -->

<!-- Category Update Modul Start -->
<?php
if (isset($_POST['katGuncelle'])) {
    $gorsel = '../img/' . $_FILES['gorsel']['name'];

    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
        $katGuncelle = $db->prepare('update kategoriler set katadi=?, katturu=?, ustkategori=?, aciklama=?, gorsel=? where id=?');
        $katGuncelle->execute(array($_POST['katadi'], $_POST['katturu'], $_POST['ustkategori'], $_POST['aciklama'], $gorsel, $_POST['id']));
        if ($katGuncelle->rowCount()) {
            echo '<script>alert("Kategori Güncellendi")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
        }
    }
}
?>
<!-- Category Update Modul End -->


<?php require_once('footer.php'); ?>