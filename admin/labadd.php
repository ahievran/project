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
        <?php

        if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
            $statusMsg = '';

            $targetDir = "../admin/uploads/labs/";
            $fileName = basename($_FILES["file"]["name"]);
            $VeriTabaninaEklenecekYolluResim = "admin/uploads/labs/" . $fileName;
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            $labName = $_POST["labName"];
            $labAbout = $_POST["labAbout"];

            // Allow certain file formats
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    // Insert image file name into database
                    $insert = $db->query("INSERT INTO laboratuvar(lab_ad, lab_aciklama, lab_resim) VALUES('$labName', '$labAbout', '" . $VeriTabaninaEklenecekYolluResim . "')");
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
                echo 'alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.")';
                echo '</script>';
            }
        }
        ?>
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Laboratuvar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="labadd.php" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="labname">Laboratuvar Adı</label>
                            <input type="text" class="form-control" name="labName" placeholder="Laboratuvar Adı">
                        </div>
                        <div class="form-group">
                            <label for="lababout">Laboratuvar Açıklama</label>
                            <input type="text" class="form-control" name="labAbout" placeholder="Laboratuvar Açıklama">
                        </div>
                        <div class="form-group">
                            <label for="lablife">Laboratuvar Görsel</label>
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