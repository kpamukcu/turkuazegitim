<?php
require_once('header.php');

if (isset($_GET['postID'])) {
    $id = $_GET['postID'];

    $postCek = $db->prepare('select * from yazilar where durum="Yayınlandı" && id=?');
    $postCek->execute(array($id));
    $postCekSatir = $postCek->fetch();
}

echo '<meta name="description" content="' . $postCekSatir['meta'] . '">';
?>

<!-- Blog Banner Section Start -->
<section id="blogBanner" style="background-image: url(<?php echo substr($postCekSatir['gorsel'], 3); ?>);" class="mt-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4"><?php echo $postCekSatir['baslik']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- Blog Banner Section End -->

<!-- Article Section Start -->
<section id="article" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-justify">
                <article>
                    <?php echo $postCekSatir['blogYazisi']; ?>
                </article>
            </div>
            <?php require_once('aside.php'); ?>
        </div>
    </div>
</section>
<!-- Article Section End -->



<?php require_once('footer.php'); ?>