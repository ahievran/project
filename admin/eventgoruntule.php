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
                        <h1>Etkinlik Adı</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Etkinlik Adı</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="col-12">
                                <img src="../assets/img/cerenAkman.jpeg" class="product-image" alt="Laboratuvar Resim">
                            </div>
                        </div>
                        <div class="col-1">

                        </div>
                        <div class="col-6">
                            <h3 class="my-3">Etkinlik Adı:</h3>
                            <p>Etkinlik Açıklaması:</p>
                            <p>Etkinlik Tarihi:</p>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

<?php require_once 'footer.php'; ?>