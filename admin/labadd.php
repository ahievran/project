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
                    <h1>Laboratuvar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Laboratuvar</li>
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
                <h3 class="card-title">Laboratuvar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="labname">Laboratuvar Adı</label>
                        <input type="text" class="form-control" placeholder="Laboratuvar Adı">
                    </div>
                    <div class="form-group">
                        <label for="lababout">Laboratuvar Açıklama</label>
                        <input type="text" class="form-control" placeholder="Laboratuvar Açıklama">
                    </div>
                    <div class="form-group">
                        <label for="lablife">Laboratuvar Görsel</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input">
                                <label class="custom-file-label" for="exampleInputFile">Görsel Seçin</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Kaydet</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php
require_once 'footer.php'; ?>