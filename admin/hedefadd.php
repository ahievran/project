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
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Hedefler</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hedefler Başlık</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Hedefler Başlık Giriniz.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hedefler İçerik</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Hedefler İçerik Giriniz.">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php
require_once 'footer.php'; ?>