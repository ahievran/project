<?php
require_once '../admin/header.php';
require_once 'sidebar.php';
include '../baglanti.php';
?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hedefler</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Hedefler</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <?php
        if (isset($_POST["gonder"])) {
            $text1 = $_POST["text1"];
            $text2 = $_POST["text2"];

            $sql = "INSERT INTO hedeflerimiz(hedef_baslik, hedef_icerik) VALUES('$text1', '$text2')";
            $result = $db->query($sql);

            echo '<script type ="text/JavaScript">';
            echo 'alert("Veritabanına eklendi")';
            echo '</script>';
        }
        ?>
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Hedefler</h3>
                </div>
                <form method="POST" action="hedefadd.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hedefler Başlık</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="text1" placeholder="Hedefler Başlık Giriniz.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hedefler İçerik</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="text2" placeholder="Hedefler İçerik Giriniz.">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="gonder">Kaydet</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>