<?php
require_once('header.php');

if($_GET['pageID']){
    $id = $_GET['pageID'];
    $sayfaInfo = $db -> prepare('select * from sayfalar where id=?');
    $sayfaInfo -> execute(array($id));
    $sayfaInfoSatir = $sayfaInfo -> fetch();
}

?>

<!-- Sample Banner Start -->
<section id="sampleBanner" style="background-image: url(<?php echo substr($sayfaInfoSatir['gorsel'],3); ?>);" class="mt-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="display-4"><?php echo $sayfaInfoSatir['baslik']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- Sample Banner End -->

<!-- Sample Content Start -->
<section id="sample" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo substr($sayfaInfoSatir['video'],32); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <?php echo $sayfaInfoSatir['aciklama']; ?>
                    </div>
                </div>
            </div>
            <?php require_once('aside.php'); ?>
        </div>
    </div>
</section>
<!-- Sample Content End -->


<?php require_once('footer.php'); ?>