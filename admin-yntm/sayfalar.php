<?php require_once('header.php'); ?>

<!-- XXX Section Start -->
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
                        Başlık - Açıklama - Video Link - Meta Desc - Görsel - görsel alt - tarih - Üst Menü
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- XXX Section End -->

<?php require_once('footer.php'); ?>