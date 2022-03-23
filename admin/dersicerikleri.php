<?php
require_once '../admin/header.php';
require_once 'sidebar.php';
include '../baglanti.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ders İçerikleri Link</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ders İçerikleri Link</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php
    if (isset($_POST["gonder"])){
        $link = $_POST["link"];

        $sql = "INSERT INTO ders_icerik (dersicerik_url) VALUE ('$link')";
        $result2 = $db->query($sql);
        mysqli_query($result);

//        header("location: dersicerikleri.php ");

        echo '<script type ="text/JavaScript">';
        echo 'alert("Link veritabanına eklendi")';
        echo '</script>';
    }
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ders İçerikleri Linki</h3>
                        </div>
                        <form method="POST" action="dersicerikleri.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" id="link" name="link" placeholder="Link Giriniz">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="gonder" name="gonder">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
require_once 'footer.php'; ?>

