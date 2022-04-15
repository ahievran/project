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
                    <h1>Duyurular</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Duyurular</h3>
                            <a href="hedefadd.php">
                                <button style="float:right" class="btn btn-success ">Ekle</button>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Resim
                                        </th>
                                        <th>
                                            Başlık
                                        </th>
                                        <th>
                                            Açıklama
                                        </th>
                                        <th>
                                            Görüntüle
                                        </th>
                                        <th>
                                            Sil
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Resim
                                        </td>
                                        <td>
                                            Başlık
                                        </td>
                                        <td>
                                            Açıklama
                                        </td>
                                        <td>
                                            <a href="duyurugoruntule.php">
                                                <button class="btn btn-primary">Görüntüle</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-danger">Sil</button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php require_once 'footer.php'; ?>