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
                        <h1>Hakkında</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Hakkında</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <?php
        if (isset($_POST["gonder"])) {
            $text = $_POST["text"];

            $sql = "INSERT INTO hakkimizda(hakkinda_icerik) VALUES('$text')";
            $result = $db->query($sql);

            echo '<script type ="text/JavaScript">';
            echo 'alert("Link veritabanına eklendi")';
            echo '</script>';
        }
        ?>
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Hakkında</h3>
                </div>
                <form method="POST" action="aboutadd.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hakkında İçerik</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="text"
                                   placeholder="Hakkında İçerik Giriniz.">
                        </div>
                        <div class="form-check">
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