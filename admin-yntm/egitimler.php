<?php require_once('header.php'); ?>

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
                                    <div class="col-md-3">
                                        <label>Eğitim Süresi (Saat)</label>
                                        <input type="number" name="sure" placeholder="Ör: 35" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kimler Katılabilir</label>
                                        <select name="katilimci" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Herkes">Herkes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kontenjan</label>
                                        <input type="number" name="kontenjan" placeholder="Ör: 20" class="form-control">
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
if(isset($_POST['egitimEkle'])){
    $gorsel = '../img/'.$_FILES['gorsel']['name'];

    if(move_uploaded_file($_FILES['gorsel']['tmp_name'],$gorsel)){
        $egitimEkle = $db -> prepare('insert into egitimler(egitimAdi,aciklama,sure,katilimci,kontenjan,gorsel) values(?,?,?,?,?,?)');
        $egitimEkle -> execute(array($_POST['egitimAdi'],$_POST['aciklama'],$_POST['sure'],$_POST['katilimci'],$_POST['kontenjan'],$gorsel));

        if($egitimEkle -> rowCount()){
            echo '<script>alert("Eğitim Kayıt Edildi")</script><meta http-equiv="refresh" content="0; url=egitimler.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script>';
        }
    } else {
        echo '<script>alert("Görsel Yüklenemedi. Tekrar Deneyin")</script><meta http-equiv="refresh" content="0; url=kategori.php">';
    }  
}
?>
<!-- Eğitim Add Module End -->

<?php require_once('footer.php'); ?>