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
                        <h1>Hedeflerimiz</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php if (isset($_POST["see"])) {
        $hedef_id = $_POST["hedef_id"];
        $hedef_baslik = $_POST["hedef_baslik"];
        $hedef_icerik = $_POST["hedef_icerik"];
        $hedef_icon = $_POST["hedef_icon"];
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo $hedef_baslik ?></h3>
                            </div>
                            <div class="col-8 col-sm-6 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <h2 class="lead"><b><?php echo $hedef_baslik ?></b></h2>
                                                <br>
                                                <p class="text-muted text-sm"><b>İçerik: </b> <?php echo $hedef_icerik ?> </p>

                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="<?php echo $hedef_icon ?>" alt="hedef icon"
                                                     class="img-circle img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="card-footer">-->
                                    <!--                                        <div class="text-right">-->
                                    <!--                                            <a href="#" class="btn btn-sm bg-teal">-->
                                    <!--                                                <i class="fas fa-comments"></i>-->
                                    <!--                                            </a>-->
                                    <!--                                            <a href="#" class="btn btn-sm btn-primary">-->
                                    <!--                                                <i class="fas fa-user"></i> View Profile-->
                                    <!--                                            </a>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                </div>
                            </div>
                            <?php } ?>
                            <!-- /.card-header -->
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php
require_once 'footer.php'; ?>