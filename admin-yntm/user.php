<?php require_once('header.php'); ?>

<!-- User Section Start -->
<div class="row">
    <div class="col-12">
        <h5>Kullanıcı Ekle</h5>
    </div>
    <div class="col-12">
        <form action="" method="post" class="form-row">
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="adi" placeholder="Ad Soyad" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="kadi" placeholder="Kullanıcı Adını Girin" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="sifre" placeholder="Şifre Girin" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="submit" value="Ekle" class="btn btn-success" name="userAdd">
                </div>
            </div>
        </form>
        <!-- User Add Module Start -->
        <?php
        if (isset($_POST['userAdd'])) {
            $userEkle = $db->prepare('insert into user(adi,kadi,sifre) values(?,?,?)');
            $userEkle -> execute(array($_POST['adi'],$_POST['kadi'],$_POST['sifre']));

            if($userEkle -> rowCount()){
                echo '<script>alert("Kullanıcı Eklendi")</script><meta http-equiv="refresh" content="0; url=user.php">';
            } else {
                echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=user.php">';
            }
        }
        ?>
        <!-- User Add Module End -->
    </div>
</div>
<!-- User Section End -->
<div class="row mt-3">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ad Soyad</th>
                    <th>Kullanıcı Adı</th>
                    <th>Şifre</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $userList = $db->prepare('select * from user order by id desc');
                $userList->execute();

                if ($userList->rowCount()) {
                    foreach ($userList as $userListSatir) {
                ?>
                        <tr>
                            <td><?php echo $userListSatir['adi']; ?></td>
                            <td><?php echo $userListSatir['kadi']; ?></td>
                            <td><?php echo $userListSatir['sifre']; ?></td>
                            <td><a href="user.php?updateId=<?php echo $userListSatir['id']; ?>" class="btn btn-warning">Düzenle</a></td>
                            <td><a href="user.php?deleteId=<?php echo $userListSatir['id']; ?>" class="btn btn-danger">Sil</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once('footer.php'); ?>