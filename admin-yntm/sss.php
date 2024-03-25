<?php require_once('header.php'); ?>

<!-- SSS Add Section Start -->
<div class="row">
    <div class="col-md-6">
        <h4>Sık Sorulan Sorular</h4>
    </div>
    <div class="col-md-6 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#soruEkle">
            Soru & Cevap EKle
        </button>

        <!-- Modal -->
        <div class="modal fade" id="soruEkle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="soruEkle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="soruEkle">Soru & Cevap Ekle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="soru" placeholder="Sık Sorulan Soru Giriniz" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="cevap"></textarea>
                                <script>
                                    CKEDITOR.replace('cevap', {
                                        height: "280px",
                                        extraPlugins: 'editorplaceholder',
                                        editorplaceholder: 'Cevap Girin'
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Konu</label>
                                        <select name="konu" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="DUS">DUS</option>
                                            <option value="e-YDS">e-YDS</option>
                                            <option value="IELTS">IELTS</option>
                                            <option value="KPDS">KPDS</option>
                                            <option value="KPSS">KPSS</option>
                                            <option value="ÖYP">ÖYP</option>
                                            <option value="TIP DİL SINAVI">TIP DİL SINAVI</option>
                                            <option value="TOFEL">TOFEL</option>
                                            <option value="UDS">UDS</option>
                                            <option value="YDS">YDS</option>
                                            <option value="YDT/YKS-DİL">YDT/YKS-DİL</option>
                                            <option value="YÖK DİL">YÖK DİL</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label>Kategori</label>
                                        <select name="kategori" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Yurt Dışı Dil Yeterlilik Sınavları">Yurt Dışı Dil Yeterlilik Sınavları</option>
                                            <option value="Yurt İçi Dil Yeterlilik Sınavları">Yurt İçi Dil Yeterlilik Sınavları</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 align-self-end">
                                        <button type="submit" class="btn btn-success w-100" name="sssKaydet">Kaydet</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SSS Add Section End -->

<!-- Sss Add Module Start -->
<?php

if (isset($_POST['sssKaydet'])) {
    $sssAdd = $db->prepare('insert into sss(soru,cevap,konu,kategori) values(?,?,?,?)');
    $sssAdd->execute(array($_POST['soru'], $_POST['cevap'], $_POST['konu'], $_POST['kategori']));

    if ($sssAdd->rowCount()) {
        echo '<script>alert("Kayıt Eklendi")</script><meta http-equiv="refresh" content="0; url=sss.php">';
    } else {
        echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=sss.php">';
    }
}

?>
<!-- Sss Add Module End -->

<!-- Sss List Section Start -->
<section id="sssList" class="mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Soru</th>
                            <th>Cevap</th>
                            <th>Konu</th>
                            <th>Kategori</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sssList = $db->prepare('select * from sss order by konu asc');
                        $sssList->execute();

                        if ($sssList->rowCount()) {
                            foreach ($sssList as $sssListSatir) {
                        ?>
                                <tr>
                                    <td><?php echo $sssListSatir['soru']; ?></td>
                                    <td><?php echo substr($sssListSatir['cevap'],0,100); ?>...</td>
                                    <td><?php echo $sssListSatir['konu']; ?></td>
                                    <td><?php echo $sssListSatir['kategori']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Sss List Section End -->

<?php require_once('footer.php'); ?>