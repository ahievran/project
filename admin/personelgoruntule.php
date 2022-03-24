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
                        <h1>Contacts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contacts</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-8">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <ul class="ml-4 fa-ul text-muted">
                                            <li class="large"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Fakülte:</li>
                                            <li class="large"><span class="fa-li"><i class="fas fa-lg fa-book"></i></span> Bölüm:</li>
                                            <li class="large"><span class="fa-li"><i class="fas fa-lg fa-door-closed"></i></span> Ofis:</li>
                                            <li class="large"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefon:</li>
                                            <li class="large"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> E-Mail:</li>
                                            <li class="large"><span class="fa-li"><i class="fas fa-lg fa-info-circle"></i></span> Hakkında:</li>
                                        </ul>
                                    </div>
                                    <div class="col-4 text-right">
                                        <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>
