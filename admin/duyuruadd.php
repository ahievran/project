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
                        <h1>Duyuru</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Duyuru</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Duyuru Ekle</h3>
                </div>
                <form method="POST" action="">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Duyuru Başlık</label>
                            <input type="text" class="form-control" name="text1" placeholder="Duyuru Başlık Giriniz.">
                        </div>
                        <div class="form-group">
                            <label>Duyuru Açıklama</label>
                            <input type="text" class="form-control" name="text2" placeholder="Duyuru Açıklama Giriniz.">
                        </div>
                        <div class="form-group">
                            <label>Duyuru Tarih</label>
                            <input type="date" class="form-control" name="text3">
                        </div>
                        <div class="form-group">
                            <label>Duyuru Resim</label>
                            <input type="file" class="form-control" name="resim">
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