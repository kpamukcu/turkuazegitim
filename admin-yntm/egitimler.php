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
            <div class="modal-dialog modal-lg">
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
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Eğitimler Section End -->

<?php require_once('footer.php'); ?>