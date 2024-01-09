<?php

require_once('header.php');

if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];

    $sayfaSil = $db->prepare('delete from sayfalar where id=?');
    $sayfaSil->execute(array($id));

    if ($sayfaSil->rowCount()) {
        echo '<script>alert("Kayıt Silindi")</script><meta http-equiv="refresh" content="0; url=sayfalar.php">';
    } else {
        echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=sayfalar.php">';
    }
} else if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];
    $selectPage = $db->prepare('select * from sayfalar where id=?');
    $selectPage->execute(array($id));
    $selectPageSatir = $selectPage->fetch();

    echo '
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      $("#updatePage").modal("show");
    });
    </script>
    ';
}
?>

<!-- Page Add Section Start -->
<div class="row">
    <div class="col-md-6">
        <h4>Sayfalar</h4>
    </div>
    <div class="col-md-6 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#sayfaEkle">
            Sayfa Ekle
        </button>

        <!-- Modal -->
        <div class="modal fade" id="sayfaEkle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="sayfaEkle" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sayfaEkle">Yeni Sayfa Ekleyin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <form action="" method="post" class="form-row" enctype="multipart/form-data">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="baslik" placeholder="Sayfa Başlığını Girin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="aciklama"></textarea>
                                    <script>
                                        CKEDITOR.replace('aciklama', {
                                            height: "350px",
                                            extraPlugins: 'editorplaceholder',
                                            editorplaceholder: 'Açıklama Girin'
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Tanıtım İçerik Videosu</label>
                                    <input type="url" name="video" placeholder="Youtube Linkini Yapıştırın" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="meta" placeholder="Kısa Açıklama Girin (Max. 160 Karakter)" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Görsel Ekleyin</label>
                                    <input type="file" name="gorsel">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Görsel Kısa Açıklama</label>
                                    <input type="text" name="alt" placeholder="Max.70 Karakter Açıklama Girin" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Üst Menü Seçin</label>
                                    <select name="ustMenu" class="form-control">
                                        <option value="">Seçiniz</option>
                                        <option value="yok">Üst Menü Yok</option>
                                        <option value="Dil Eğitimi">Dil Eğitimi</option>
                                        <option value="Sınavlara Hazırlık Kursları">Sınavlara Hazırlık Kursları</option>
                                        <option value="Yurt İçi Eğitim">Yurt İçi Eğitim</option>
                                        <option value="Sınav Merkezi">Sınav Merkezi</option>
                                        <option value="Hakkımızda">Hakkımızda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 align-self-end text-right">
                                <div class="form-group">
                                    <input type="submit" value="Kaydet" class="btn btn-success" name="sayfaekle">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Add Section End -->

<!-- Page Add Module Start -->
<?php
if (isset($_POST['sayfaekle'])) {
    $gorsel = '../img/' . $_FILES['gorsel']['name'];
    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
        $sayfaEkle = $db->prepare('insert into sayfalar(baslik,aciklama,video,meta,gorsel,alt,ustMenu) values(?,?,?,?,?,?,?)');
        $sayfaEkle->execute(array($_POST['baslik'], $_POST['aciklama'], $_POST['video'], $_POST['meta'], $gorsel, $_POST['alt'], $_POST['ustMenu']));

        if ($sayfaEkle->rowCount()) {
            echo '<script>alert("Sayfa Kaydı Gerçekleşti")</script><meta http-equiv="refresh" content="0; url=sayfalar.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=sayfalar.php">';
        }
    }
}
?>
<!-- Page Add Module End -->

<!-- Page List Section Start -->
<div class="row pt-4">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Görsel</th>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th class="text-center">Üst Menü</th>
                    <th class="text-center">Düzenle</th>
                    <th class="text-center">Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $pageList = $db->prepare('select * from sayfalar order by id desc');
                $pageList->execute();

                if ($pageList->rowCount()) {
                    foreach ($pageList as $pageListSatir) {
                ?>
                        <tr>
                            <td class="w-25"><img src="<?php echo $pageListSatir['gorsel']; ?>" class="w-75"></td>
                            <td><?php echo $pageListSatir['baslik']; ?></td>
                            <td><?php echo substr($pageListSatir['aciklama'], 0, 100); ?></td>
                            <td class="text-center"><?php echo $pageListSatir['ustMenu']; ?></td>
                            <td class="text-center"><a href="sayfalar.php?updateID=<?php echo $pageListSatir['id']; ?>" class="btn btn-warning">Düzenle</a></td>
                            <td class="text-center"><a href="sayfalar.php?deleteID=<?php echo $pageListSatir['id']; ?>" class="btn btn-danger">Sil</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Page List Section End -->

<!-- Page Update Modal Start -->
<div class="modal fade" id="updatePage" tabindex="-1" aria-labelledby="updatePage" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePage">Sayfa Güncelle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" class="form-row" enctype="multipart/form-data">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="baslikUP" value="<?php echo $selectPageSatir['baslik']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="aciklamaUP"><?php echo $selectPageSatir['aciklama']; ?></textarea>
                            <script>
                                CKEDITOR.replace('aciklamaUP', {
                                    height: "350px"
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Tanıtım İçerik Videosu</label>
                            <input type="url" name="videoUP" value="<?php echo $selectPageSatir['video']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="metaUP" rows="4" class="form-control"><?php echo $selectPageSatir['meta']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label><?php echo $selectPageSatir['gorsel']; ?></label>
                            <input type="file" name="gorselUP">
                        </div>
                    </div>
                    <div class="col-md-4 align-self-end">
                        <div class="form-group">
                            <label>Görsel Kısa Açıklama</label>
                            <input type="text" name="altUP" value="<?php echo $selectPageSatir['alt']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 align-self-end">
                        <div class="form-group">
                            <label>Üst Menü Seçin</label>
                            <select name="ustMenuUP" class="form-control">
                                <option value="<?php echo $selectPageSatir['ustMenu']; ?>"><?php echo $selectPageSatir['ustMenu']; ?></option>
                                <option value="yok">Üst Menü Yok</option>
                                <option value="Dil Eğitimi">Dil Eğitimi</option>
                                <option value="Sınavlara Hazırlık Kursları">Sınavlara Hazırlık Kursları</option>
                                <option value="Yurt İçi Eğitim">Yurt İçi Eğitim</option>
                                <option value="Sınav Merkezi">Sınav Merkezi</option>
                                <option value="Hakkımızda">Hakkımızda</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 align-self-end text-right">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $selectPageSatir['id']; ?>">
                            <input type="submit" value="Kaydet" class="btn btn-success" name="sayfaUP">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Page Update Modal End -->

<!-- Page Update Method Start -->
<?php
if(isset($_POST['sayfaUP'])){
    $gorselUP = '../img/'.$_FILES['gorselUP']['name'];

    if(move_uploaded_file($_FILES['gorselUP']['tmp_name'],$gorselUP)){
        $pageUP = $db -> prepare('update sayfalar set baslik=?, aciklama=?, video=?, meta=?, gorsel=?, alt=?, ustMenu=? where id=?');
        $pageUP -> execute(array($_POST['baslikUP'],$_POST['aciklamaUP'],$_POST['videoUP'],$_POST['metaUP'],$gorselUP,$_POST['altUP'],$_POST['ustMenuUP'],$_POST['id']));

        if($pageUP -> rowCount()){
            echo '<script>alert("Kayıt Güncellendi")</script><meta http-equiv="refresh" content="0; url=sayfalar.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=sayfalar.php">';
        }
    }
}
?>
<!-- Page Update Method End -->

<?php require_once('footer.php'); ?>