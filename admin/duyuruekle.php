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

       <?php

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
   

    $targetDir = "../admin/uploads/duyuru/";
    $fileName = basename($_FILES["file"]["name"]);
    $yuklenecekResim = "admin/uploads/duyuru/".$fileName;
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    $duyurubaslik = $_POST["duyuruBaslik"];
    $duyuruaciklama = $_POST["duyuruAciklama"];

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT INTO duyuru(duyuru_baslik, duyuru_aciklama, duyuru_resim) VALUES('$duyurubaslik', '$duyuruaciklama', '".$yuklenecekResim."')");
            if($insert){
                echo '<script type="text/javascript">alert("Duyuru Gönderildi");</script>';
                echo '<meta http-equiv="refresh" content="0;URL=duyuru.php">';
            }else{
                echo '<script type="text/javascript">alert("Duyuru Gönderilmedi");</script>';
                echo '<meta http-equiv="refresh" content="0;URL=duyuru.php">';
            }
        }else{
                echo '<script type="text/javascript">alert("Dosya Yüklenirken Hata Oluştu");</script>';
            echo '<meta http-equiv="refresh" content="0;URL=duyuru.php">';
        }
    }else{
        echo '<script type="text/javascript">alert("Yüklediğiniz Dosya Uzantısı Uygun Değildir");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=duyuru.php">';
    }
}
?>
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Duyurular</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="duyuruekle.php" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="duyurubaslik">Duyuru Adı</label>
                        <input type="text" class="form-control" name="duyuruBaslik" placeholder="Duyuru Adı">
                    </div>
                    <div class="form-group">
                        <label for="duyuruaciklama">Duyuru Açıklama</label>
                        <textarea type="text" class="form-control" name="duyuruAciklama" placeholder="Duyuru Açıklama"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lablife">Duyuru Resim</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file">
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
                    <button type="submit" class="btn btn-primary" name="submit">Kaydet</button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php
require_once 'footer.php'; ?>