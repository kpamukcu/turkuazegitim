<?php require_once('header.php'); ?>

<!-- Banner Section Start -->
<!-- Banner Section End -->

<!-- Content Section Start -->
<section id="blogList">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                $blogList = $db->prepare('select * from yazilar order by id desc');
                $blogList->execute();

                if ($blogList->rowCount()) {
                    foreach ($blogList as $blogListSatir) {
                ?>
                        <img src="<?php echo substr($blogListSatir['gorsel'], 3); ?>" alt="<?php echo $blogListSatir['alt']; ?>" class="w-100 mb-3">
                        <h2><?php echo $blogListSatir['baslik']; ?></h2>
                        <?php echo substr($blogListSatir['blogYazisi'], 0, 600); ?>
                        <a href="makale.php?postID=<?php echo $blogListSatir['id']; ?>" class="btn btn-lacivert my-4">Devamını Okuyun</a>
                <?php
                    }
                }
                ?>
            </div>
            <?php require_once('aside.php'); ?>
        </div>
    </div>
</section>
<!-- Content Section End -->

<?php require_once('footer.php'); ?>