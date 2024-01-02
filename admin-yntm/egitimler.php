<?php

require_once('header.php');


if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];
    $egitimSec = $db->prepare('select * from egitimler where id=?');
    $egitimSec->execute(array($id));
    $egitimSecRow = $egitimSec->fetch();

    echo '
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      $("#myModal").modal("show");
    });
    </script>
    ';
} elseif (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];
    $egitimSil = $db->prepare('delete from egitimler where id=?');
    $egitimSil->execute(array($id));

    if ($egitimSil->rowCount()) {
        echo '<script>alert("Eğitim Silindi")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
    } else {
        echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
    }
}
?>

<!-- Eğitimler Section Start -->
<div class="row">
    <div class="col-md-6">
        <h4>Eğitimler</h4>
    </div>
    <div class="col-md-6 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#egitimekle">
            Eğitim Ekle
        </button>

        <!-- Modal -->
        <div class="modal fade" id="egitimekle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="egitimekle" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="egitimekle">Yeni Eğitim Ekle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="egitimAdi" placeholder="Eğitim Adını Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="aciklama"></textarea>
                                <script>
                                    CKEDITOR.replace('aciklama', {
                                        height: "300px",
                                        extraPlugins: 'editorplaceholder',
                                        editorplaceholder: 'Eğitim Açıklaması Girin'
                                    });
                                </script>
                            </div>
                            <div class="form-group text-left">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Eğitim Süresi (Saat)</label>
                                        <input type="number" name="sure" placeholder="Ör: 35" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Kimler Katılabilir</label>
                                        <select name="katilimci" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Herkes">Herkes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Kontenjan</label>
                                        <input type="number" name="kontenjan" placeholder="Ör: 20" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kategori</label>
                                        <select name="kategori" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Dil Eğitimi">Dil Eğitimi</option>
                                            <option value="Sınavlara Hazırlık Kursları">Sınavlara Hazırlık Kursları</option>
                                            <option value="Turkuaz Akademi">Turkuaz Akademi</option>
                                            <option value="Yurt Dışı Eğitim">Yurt Dışı Eğitim</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Görsel (1920x540px)</label>
                                        <input type="file" name="gorsel">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <input type="submit" value="Kaydet" class="btn btn-success" name="egitimEkle">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Eğitimler Section End -->

<!-- Eğitim Add Module Start -->
<?php
if (isset($_POST['egitimEkle'])) {
    $gorsel = '../img/' . $_FILES['gorsel']['name'];

    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
        $egitimEkle = $db->prepare('insert into egitimler(egitimAdi,aciklama,sure,katilimci,kontenjan,kategori,gorsel) values(?,?,?,?,?,?,?)');
        $egitimEkle->execute(array($_POST['egitimAdi'], $_POST['aciklama'], $_POST['sure'], $_POST['katilimci'], $_POST['kontenjan'], $_POST['kategori'], $gorsel));

        if ($egitimEkle->rowCount()) {
            echo '<script>alert("Eğitim Kayıt Edildi")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script>';
        }
    } else {
        echo '<script>alert("Görsel Yüklenemedi. Tekrar Deneyin")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
    }
}
?>
<!-- Eğitim Add Module End -->

<!-- Eğitim List Section Start -->
<section id="egitimList" class="mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Görsel</th>
                            <th>Eğitim</th>
                            <th>Açıklama</th>
                            <th class="text-center">Süre</th>
                            <th class="text-center">Katılımcı</th>
                            <th class="text-center">Kontenjan</th>
                            <th class="text-center">Düzenle</th>
                            <th class="text-center">Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Eğitim List Modüle Start -->
                        <?php
                        $egitimList = $db->prepare('select * from egitimler order by egitimAdi asc');
                        $egitimList->execute();

                        if ($egitimList->rowCount()) {
                            foreach ($egitimList as $egitimListSatir) {
                        ?>
                                <tr>
                                    <td class="w-25"><img src="<?php echo $egitimListSatir['gorsel']; ?>" class="w-75"></td>
                                    <td><?php echo $egitimListSatir['egitimAdi']; ?></td>
                                    <td class="w-25"><?php echo substr($egitimListSatir['aciklama'], 0, 101); ?>...</td>
                                    <td class="text-center"><?php echo $egitimListSatir['sure']; ?></td>
                                    <td class="text-center"><?php echo $egitimListSatir['katilimci']; ?></td>
                                    <td class="text-center"><?php echo $egitimListSatir['kontenjan']; ?></td>
                                    <td class="text-center"><a href="egitimler.php?updateID=<?php echo $egitimListSatir['id']; ?>" class="btn btn-warning">Düzenle</a></td>
                                    <td class="text-center"><a href="egitimler.php?deleteID=<?php echo $egitimListSatir['id']; ?>" class="btn btn-danger">Sil</a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                        <!-- Eğitim List Modüle End -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Eğitim List Section End -->

<!-- Eğitim Update Modal Start -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal">Güncelle - <?php echo $egitimSecRow['egitimAdi']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="egitimAdiUP" value="<?php echo $egitimSecRow['egitimAdi']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="aciklamaUP">
                        <?php echo $egitimSecRow['aciklama']; ?>
                        </textarea>
                        <script>
                            CKEDITOR.replace('aciklamaUP', {
                                height: "300px"
                            });
                        </script>
                    </div>
                    <div class="form-group text-left">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Eğitim Süresi (Saat)</label>
                                <input type="number" name="sureUP" value="<?php echo $egitimSecRow['sure']; ?>" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label>Kimler Katılabilir</label>
                                <select name="katilimciUP" class="form-control">
                                    <option value="<?php echo $egitimSecRow['katilimci']; ?>"><?php echo $egitimSecRow['katilimci']; ?></option>
                                    <option value="Herkes">Herkes</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Kontenjan</label>
                                <input type="number" name="kontenjanUP" value="<?php echo $egitimSecRow['kontenjan']; ?>" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label>Kategori</label>
                                <select name="kategoriUP" class="form-control">
                                    <option value="<?php echo $egitimSecRow['kategori']; ?>"><?php echo $egitimSecRow['kategori']; ?></option>
                                    <option value="Dil Eğitimi">Dil Eğitimi</option>
                                    <option value="Sınavlara Hazırlık Kursları">Sınavlara Hazırlık Kursları</option>
                                    <option value="Turkuaz Akademi">Turkuaz Akademi</option>
                                    <option value="Yurt Dışı Eğitim">Yurt Dışı Eğitim</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Görsel (1920x540px)</label>
                                <input type="file" name="gorsel">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <input type="hidden" name="id" value="<?php echo $egitimSecRow['id']; ?>">
                        <input type="submit" value="Kaydet" class="btn btn-success" name="egitimUpdate">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Eğitim Update Modal End -->

<!-- Eğitim Update Module Start -->
<?php
if (isset($_POST['egitimUpdate'])) {
    $gorsel = '../img/' . $_FILES['gorsel']['name'];

    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
        $egitimGuncelle = $db->prepare('update egitimler set egitimAdi=?, aciklama=?, sure=?, katilimci=?, kontenjan=?, kategori=?, gorsel=? where id=?');
        $egitimGuncelle->execute(array($_POST['egitimAdiUP'], $_POST['aciklamaUP'], $_POST['sureUP'], $_POST['katilimciUP'], $_POST['kontenjanUP'], $_POST['kategoriUP'], $gorsel, $_POST['id']));

        if ($egitimGuncelle->rowCount()) {
            echo '<script>alert("Eğitim Güncellendi")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
        }
    } else {
        echo '<script>alert("Görsel Yüklenemedi")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
    }
}
?>
<!-- Eğitim Update Module End -->

<?php require_once('footer.php'); ?>