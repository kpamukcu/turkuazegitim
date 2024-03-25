<?php
require_once('header.php');

if ($_GET['egitimID']) {
    $id = $_GET['egitimID'];
    $egitimInfo = $db->prepare('select * from egitimler where id=?');
    $egitimInfo->execute(array($id));
    $egitimInfoSatir = $egitimInfo->fetch();
}
?>

<!-- Banner Section Start -->
<section id="egitimlerBanner" style="background-image: url(<?php echo  substr($egitimInfoSatir['gorsel'], 3); ?>);" class="mt-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="display-4"><?php echo $egitimInfoSatir['egitimAdi']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Content Section Start -->
<section id="egitimler" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo substr($egitimInfoSatir['video'], 32); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-12">
                            <?php echo $egitimInfoSatir['aciklama']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-warning">
                                <div class="row">
                                    <div class="col-md-4">
                                        Eğitim Süresi: <?php echo $egitimInfoSatir['sure']; ?> saat
                                    </div>
                                    <div class="col-md-4 text-center">
                                        Katılımcı: <?php echo $egitimInfoSatir['katilimci']; ?>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        Kontenjan: <?php echo $egitimInfoSatir['kontenjan']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <?php require_once('aside.php'); ?>
        </div>
    </div>
</section>
<!-- Content Section End -->


<?php require_once('footer.php'); ?>