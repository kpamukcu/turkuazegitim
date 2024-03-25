<?php require_once('header.php'); ?>

<!-- SSS Banner Section Start -->
<section id="sssBanner" class="mt-1 bg-mavi">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="display-4">Sık Sorulan Sorular</h1>
            </div>
        </div>
    </div>
</section>
<!-- SSS Banner Section End -->

<!-- SSS Content Section Start -->
<section id="sssContent" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3>Yurt Dışı Dil Yeterlilik Sınavları</h3>
            </div>
            <div class="col-md-6">
                <h2>TOEFL</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="TOFEL" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>IELTS</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="IELTS" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 text-center my-4">
                <h3>Yurt İçi Dil Yeterlilik Sınavları</h3>
            </div>
            <div class="col-md-6 mb-4">
                <h2>e-YDS</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="e-YDS" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>YDS</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="YDS" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>YÖK DİL</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="YÖK DİL" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>ÖYP</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="ÖYP" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>TIP DİL SINAVI</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="TIP DİL SINAVI" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>DUS</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="DUS" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>KPSS</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="KPSS" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>YDT / YKS-DİL</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="YDT/YKS-DİL" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>KPDS</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="KPDS" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>UDS</h2>
                <div class="accordion" id="accordionExample">
                    <?php

                    $sssListe = $db->prepare('select * from sss where konu="UDS" order by id asc');
                    $sssListe->execute();

                    if ($sssListe->rowCount()) {
                        foreach ($sssListe as $sssListeSatir) {
                    ?>
                            <div class="card">
                                <div class="card-header" id="sss<?php echo $sssListeSatir['id']; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sssListeSatir['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sssListeSatir['id']; ?>">
                                            <?php echo $sssListeSatir['soru']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $sssListeSatir['id']; ?>" class="collapse" aria-labelledby="sss<?php echo $sssListeSatir['id']; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $sssListeSatir['cevap']; ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SSS Content Section End -->

<?php require_once('footer.php'); ?>