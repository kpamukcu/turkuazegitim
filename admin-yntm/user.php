<?php
require_once('header.php');

if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $userSil = $db->prepare('delete from user where id=?');
    $userSil->execute(array($id));

    if ($userSil->rowCount()) {
        echo '<script>alert("Kullanıcı Kaydı Silinmiştir")</script><meta http-equiv="refresh" content="0; url=user.php">';
    } else {
        echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=user.php">';
    }
} else if (isset($_GET['updateId'])) {
    $id = $_GET['updateId'];
    $userInfo = $db->prepare('select * from user where id=?');
    $userInfo->execute(array($id));
    $userInfoSatir = $userInfo->fetch();

    echo '    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      $("#myModal").modal("show");
    });
    </script>    
    ';
}
?>

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
            $userEkle->execute(array($_POST['adi'], $_POST['kadi'], $_POST['sifre']));

            if ($userEkle->rowCount()) {
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

<!-- User Update Model Start -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal">Kullanıcı Bilgi Güncelleme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Adı Soyadı</label>
                        <input type="text" name="adi" value="<?php echo $userInfoSatir['adi']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Kullanıcı Adı</label>
                        <input type="text" name="kadi" value="<?php echo $userInfoSatir['kadi']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Şifre</label>
                        <input type="password" name="sifre" value="<?php echo $userInfoSatir['sifre']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $userInfoSatir['id']; ?>">
                        <input type="submit" value="Güncelle" class="btn btn-success w-100" name="userUpdate">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- User Update Model End -->

<!-- User Upadate Module Start -->
<?php
if($_POST['userUpdate']){
    $userUpdate = $db -> prepare('update user set adi=?, kadi=?, sifre=? where id=?');
    $userUpdate -> execute(array($_POST['adi']),$_POST['kadi'],$_POST['sifre']);
}
?>
<!-- User Upadate Module End -->

<?php require_once('footer.php'); ?>