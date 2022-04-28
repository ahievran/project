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
                    <h1>Personel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Personel</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <?php
    //        if (isset($_POST["submit"])) {
    //            $ad = $_POST["ad"];
    //            $fakulte = $_POST["fakulte"];
    //            $bolum = $_POST["bolum"];
    //            $ofis = $_POST["ofis"];
    //            $tel = $_POST["tel"];
    //            $mail = $_POST["mail"];
    //            $video = $_POST["video"];
    //            $url = $_POST["url"];
    //
    //
    //            $sql = "INSERT INTO akademik_personel
    //                                (personel_isim_soyisim,
    //                                personel_fakülte,
    //                                personel_bölüm,
    //                                personel_ofis,
    //                                personel_telefon,
    //                                personel_email,
    //                                personel_video_url,
    //                                personel_hakkında)
    //                    VALUES
    //                                ('$ad',
    //                                 '$fakulte',
    //                                 '$bolum',
    //                                 '$ofis',
    //                                 '$tel',
    //                                 '$mail',
    //                                 '$video',
    //                                 '$url')";
    //            $result = $db->query($sql);
    //
    //            echo '<script type ="text/JavaScript">';
    //            echo 'alert("Link veritabanına eklendi")';
    //            echo '</script>';
    //
    //        }

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        $statusMsg = '';
        $targetDir = "../admin/uploads/personel/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $ad = $_POST["ad"];
        $fakulte = $_POST["fakulte"];
        $bolum = $_POST["bolum"];
        $ofis = $_POST["ofis"];
        $tel = $_POST["tel"];
        $mail = $_POST["mail"];
        $url = $_POST["url"];
        $allowTypes = array('mp4');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $db->query(
                    "INSERT INTO akademik_personel(personel_isim_soyisim,personel_fakülte,personel_bölüm,personel_ofis,personel_telefon,personel_email,personel_video_url,personel_hakkında) VALUES('$ad','$fakulte','$bolum','$ofis','$tel','$mail','$fileName','$url')"
                );
                if ($insert) {
                    echo '<script type ="text/JavaScript">';
                    echo 'alert("Veritabanına eklendi")';
                    echo '</script>';
                } else {
                    echo '<script type ="text/JavaScript">';
                    echo 'alert("File upload failed, please try again.")';
                    echo '</script>';
                }
            } else {
                echo '<script type ="text/JavaScript">';
                echo 'alert("Sorry, there was an error uploading your file.")';
                echo '</script>';
            }
        } else {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Sorry, only mp4 files are allowed to upload.")';
            echo '</script>';
        }
    }
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Personel Ekle</h3>
                        </div>
                        <form method="POST" action="personeladd.php" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ad">
                                        Adı Soyadı
                                    </label>
                                    <input type="text" class="form-control" id="ad" name="ad" placeholder="Adı Soyadı Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="fakulte">
                                        Fakülte
                                    </label>
                                    <input type="text" class="form-control" id="fakulte" name="fakulte" placeholder="Fakülteyi Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="bolum">
                                        Bölüm
                                    </label>
                                    <input type="text" class="form-control" id="bolum" name="bolum" placeholder="Bölümü Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="ofis">
                                        Ofis
                                    </label>
                                    <input type="text" class="form-control" id="ofis" name="ofis" placeholder="Adı Soyadı Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="tel">
                                        Telefon
                                    </label>
                                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="Telefon Numarası Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        E-Posta
                                    </label>
                                    <input type="mail" class="form-control" id="mail" name="mail" placeholder="Mail Adresini Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="url">
                                        Hakkında URL
                                    </label>
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Url Giriniz">
                                </div>

                                <div class="form-group">
                                    <label for="video">Video Mesajı</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                            <label class="custom-file-label" for="exampleInputFile">
                                                Dosyayı Seçiniz
                                            </label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                Yükle
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">
                                    Gönder
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once 'footer.php'; ?>