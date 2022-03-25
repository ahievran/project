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
        <?php
//        if (isset($_POST["submit"])) {
//            $ad = $_POST["ad"];
//            $icerik = $_POST["icerik"];
//            $date = $_POST["date"];
//            $img = $_POST["img"];
//
//            $sql = "INSERT INTO etkinlikler(etkinlik_baslik, etkinlik_icerik, etkinlik_tarih) VALUES('$ad', '$icerik', '$date')";
//            $result = $db->query($sql);
//
//            echo '<script type ="text/JavaScript">';
//            echo 'alert("Link veritabanına eklendi")';
//            echo '</script>';
//
//        }

        if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
            $statusMsg = '';

            $targetDir = "../admin/uploads/events/";
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

            $ad = $_POST["ad"];
            $icerik = $_POST["icerik"];
            $date = $_POST["date"];

            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database
                    $insert = $db->query("INSERT INTO etkinlikler(etkinlik_baslik, etkinlik_icerik, etkinlik_tarih) VALUES('$ad', '$icerik', '$date')");
                    if($insert){
                        echo '<script type ="text/JavaScript">';
                        echo 'alert("Veritabanına eklendi")';
                        echo '</script>';
                    }else{
                        echo '<script type ="text/JavaScript">';
                        echo 'alert("File upload failed, please try again.")';
                        echo '</script>';
                    }
                }else{
                    echo '<script type ="text/JavaScript">';
                    echo 'alert("Sorry, there was an error uploading your file.")';
                    echo '</script>';
                }
            }else{
                echo '<script type ="text/JavaScript">';
                echo 'alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.")';
                echo '</script>';
            }
        }

        ?>
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
                            <form method="POST" action="eventsadd.php" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="baslik">Etkinlik Başlığı</label>
                                        <input type="text" class="form-control" id="ad" name="ad"
                                               placeholder="Etkinlik Başlığı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="icerik">Etkinlik İçeriği</label>
                                        <input type="text" class="form-control" id="fakulte" name="icerik"
                                               placeholder="Etkinlik İçeriği Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="tarih">Etkinlik Tarihi</label>
                                        <input type="date" class="form-control" id="start" name="date"
                                               value="01-01-2022"
                                               min="01-01-1990"
                                               max="01-01-2099"
                                               placeholder="Etkinlik Tarihi Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="gorsel">Etkinlik Görsel</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                                <label class="custom-file-label" for="exampleInputFile">
                                                    Dosyayı Seçiniz
                                                </label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Yükle</span>
                                            </div>
                                        </div>
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
<?php require_once 'footer.php'; ?>