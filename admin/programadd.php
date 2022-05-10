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
                        <h1>Program</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Program</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <?php
        if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
            $statusMsg = '';
            $targetDir = "../admin/uploads/program/";
            $fileName = basename($_FILES["file"]["name"]);
            $VeriTabaninaEklenecekYolluResim = "uploads/program/" . $fileName;
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            $labName = $_POST["labName"];
            $labAbout = $_POST["labAbout"];
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    $insert = $db->query("INSERT INTO programlar(program_ad, program_link, program_img) VALUES('$labName', '$labAbout', '" . $VeriTabaninaEklenecekYolluResim . "')");
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
                    <h3 class="card-title">Program</h3>
                </div>
                <form method="POST" action="programadd.php" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="labname">Program Adı</label>
                            <input type="text" class="form-control" name="labName" placeholder="Program Adı">
                        </div>
                        <div class="form-group">
                            <label for="lababout">Program Link</label>
                            <input type="text" class="form-control" name="labAbout" placeholder="Program Link">
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
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="submit">Kaydet</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>