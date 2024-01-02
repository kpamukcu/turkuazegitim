<?php

require_once('header.php');

if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];
    $yaziCek = $db->prepare('select * from yazilar where id=?');
    $yaziCek->execute(array($id));
    $yaziCekSatir = $yaziCek->fetch();

    echo '
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      $("#guncelle").modal("show");
    });
    </script>
    ';
} elseif(isset($_GET['deleteID'])){
    $id = $_GET['deleteID'];
    $yaziSil = $db -> prepare('delete from yazilar where id=?');
    $yaziSil -> execute(array($id));
    
    if($yaziSil -> rowCount()){
        echo '<script>alert("Yazı Silindi")</script><meta http-equiv="refresh" content="0; url=yazilar.php">';
    } else {
        echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=yazilar.php">';
    }
}
?>

<!-- Blog Add Section Start -->
<div class="row">
    <div class="col-md-6">
        <h4>Yazılar</h4>
    </div>
    <div class="col-md-6 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#yaziEkle">
            Yazı Ekleyin
        </button>

        <!-- Modal -->
        <div class="modal fade" id="yaziEkle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="yaziEkle" aria-hidden="true">
            <div class="modal-dialog modal-xl text-left">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="yaziEkle">Blog Yazısı Ekle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" class="form-row" enctype="multipart/form-data">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="baslik" placeholder="Başlık Ekleyin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="blogYazisi"></textarea>
                                    <script>
                                        CKEDITOR.replace('blogYazisi', {
                                            height: "350px",
                                            extraPlugins: 'editorplaceholder',
                                            editorplaceholder: 'Blog Yazısını Girin'
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <textarea name="meta" placeholder="Kısa Tanıtım Yazısı Girin (Max. 160 Karakter)" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Görsel (1920x540px)</label>
                                    <input type="file" name="gorsel">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Görsel Açıklaması Girin</label>
                                    <input type="text" name="alt" placeholder="Max. 70 Karakter" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>Tarih</label>
                                    <input type="date" name="tarih" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Yayın Dili</label>
                                    <select name="lang" class="form-control">
                                        <option value="">Seçiniz</option>
                                        <option value="Türkçe">Türkçe</option>
                                        <option value="İngilizce">İngilizce</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Yayın Durumu</label>
                                    <select name="durum" id="" class="form-control">
                                        <option value="">Seçiniz</option>
                                        <option value="Yayınlandı">Yayınlandı</option>
                                        <option value="Taslak">Taslak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1 align-self-end">
                                <div class="form-group">
                                    <input type="submit" value="Kaydet" class="btn btn-success" name="blogKaydet">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Add Section End -->

<!-- Blog Add Module Start -->
<?php

if (isset($_POST['blogKaydet'])) {
    $gorsel = '../img/' . $_FILES['gorsel']['name'];
    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
        $yaziEkle = $db->prepare('insert into yazilar(baslik,blogYazisi,meta,gorsel,alt,tarih,lang,durum) values(?,?,?,?,?,?,?,?)');
        $yaziEkle->execute(array($_POST['baslik'], $_POST['blogYazisi'], $_POST['meta'], $gorsel, $_POST['alt'], $_POST['tarih'], $_POST['lang'], $_POST['durum']));

        if ($yaziEkle->rowCount()) {
            echo '<script>alert("Blog Yazısı Eklendi")</script><meta http-equiv="refresh" content="0; url=yazilar.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=yazilar.php">';
        }
    } else {
        echo '<script>alert("Görsel Eklenemedi")</script><meta http-equiv="refresh" content="0; url=yazilar.php">';
    }
}

?>
<!-- Blog Add Module End -->

<!-- Yazılar List Section Start -->
<div class="row mt-3">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Görsel</th>
                    <th>Başlık</th>
                    <th>Dil</th>
                    <th>Tarih</th>
                    <th>Durum</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $yaziList = $db->prepare('select * from yazilar order by id desc');
                $yaziList->execute();

                if ($yaziList->rowCount()) {
                    foreach ($yaziList as $yaziListSatir) {
                ?>
                        <tr>
                            <td class="w-25"><img src="<?php echo $yaziListSatir['gorsel']; ?>" class="w-75"></td>
                            <td><?php echo $yaziListSatir['baslik']; ?></td>
                            <td><?php echo $yaziListSatir['lang']; ?></td>
                            <td><?php echo $yaziListSatir['tarih']; ?></td>
                            <td><?php echo $yaziListSatir['durum']; ?></td>
                            <td><a href="yazilar.php?updateID=<?php echo $yaziListSatir['id']; ?>" class="btn btn-warning">Düzenle</a></td>
                            <td><a href="yazilar.php?deleteID=<?php echo $yaziListSatir['id']; ?>" class="btn btn-danger">Sil</a></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<!-- Yazılar List Section End -->

<!-- Post Update Modal Start -->
<div class="modal fade" id="guncelle" tabindex="-1" aria-labelledby="guncelle" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guncelle"><?php echo $yaziCekSatir['baslik']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" class="form-row" enctype="multipart/form-data">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="baslik" value="<?php echo $yaziCekSatir['baslik']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="blogMetni"><?php echo $yaziCekSatir['blogYazisi']; ?></textarea>
                            <script>
                                CKEDITOR.replace('blogMetni', {
                                    height: "350px"
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <textarea name="meta" rows="3" class="form-control"><?php echo $yaziCekSatir['meta']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label><?php echo substr($yaziCekSatir['gorsel'], 7); ?></label>
                            <input type="file" name="gorsel">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Görsel Açıklaması Girin</label>
                            <input type="text" name="alt" value="<?php echo $yaziCekSatir['alt']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>Tarih</label>
                            <input type="date" name="tarih" class="form-control" value="<?php echo $yaziCekSatir['tarih']; ?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Yayın Dili</label>
                            <select name="lang" class="form-control">
                                <option value="<?php echo $yaziCekSatir['lang']; ?>"><?php echo $yaziCekSatir['lang']; ?></option>
                                <option value="Türkçe">Türkçe</option>
                                <option value="İngilizce">İngilizce</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Yayın Durumu</label>
                            <select name="durum" id="" class="form-control">
                                <option value="<?php echo $yaziCekSatir['durum']; ?>"><?php echo $yaziCekSatir['durum']; ?></option>
                                <option value="Yayınlandı">Yayınlandı</option>
                                <option value="Taslak">Taslak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1 align-self-end">
                        <div class="form-group">
                            <input type="hidden" name="blogID" value="<?php echo $yaziCekSatir['id']; ?>">
                            <input type="submit" value="Kaydet" class="btn btn-success" name="blogGuncelle">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Post Update Modal End -->

<!-- Post Update Module Start -->
<?php

if (isset($_POST['blogGuncelle'])) {

    $gorsel = '../img/' . $_FILES['gorsel']['name'];

    if (move_uploaded_file($_FILES['gorsel']['tmp_name'],$gorsel)) {
        $gorselUpdate = $db->prepare('update yazilar set baslik=?,blogYazisi=?,meta=?,gorsel=?,alt=?,tarih=?,lang=?,durum=? where id=?');
        $gorselUpdate->execute(array($_POST['baslik'], $_POST['blogMetni'], $_POST['meta'], $gorsel, $_POST['alt'], $_POST['tarih'], $_POST['lang'], $_POST['durum'], $_POST['blogID']));

        if($gorselUpdate -> rowCount()){
            echo '<script>alert("Makale Güncellendi")</script><meta http-equiv="refresh" content="0; url=yazilar.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=yazilar.php">';
        }
    }
}

?>
<!-- Post Update Module End -->

<?php require_once('footer.php'); ?>