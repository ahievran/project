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
                    <h1>Personel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Personel</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- main column -->
                <div class="col-sm-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Personel Ekle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="baslik">Etkinlik Başlığı</label>
                                    <input type="text" class="form-control" id="ad" placeholder="Etkinlik Başlığı Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="icerik">Etkinlik İçeriği</label>
                                    <input type="text" class="form-control" id="fakulte" placeholder="Etkinlik İçeriği Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="tarih">Etkinlik Tarihi</label>
                                    <input type="date" class="form-control" id="start" value="01-01-2022" min="01-01-1990" max="01-01-2099" placeholder="Etkinlik Tarihi Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="gorsel">Etkinlik Görsel</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Dosyayı Seçiniz</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Yükle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once 'footer.php'; ?>