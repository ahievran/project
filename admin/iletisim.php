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
                        <h1>İletişim</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">İletişim</h3>
                            </div>
                            <form method="POST" action="iletisimadd.php" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="baslik">Google Maps Linki</label>
                                        <input type="text" class="form-control" name="link" placeholder="Harita Linki Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="icerik">Adres</label>
                                        <input type="text" class="form-control"  name="adres" placeholder="Adres">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="link">Email</label>
                                        <input type="text" class="form-control"  name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Telefon</label>
                                        <input type="text" class="form-control"  name="telefon" placeholder="Telefon">
                                    </div>
                                    
                                    
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submit">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>
