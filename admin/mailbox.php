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
                        <h1>Mesajlar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Mesajlar</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Mesaj Ara">
                                    <div class="input-group-append">
                                        <div class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="mailbox-controls">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </div>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                                <div class="float-right">
                                </div>

                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>G??nderen</th>
                                            <th>Email</th>
                                            <th>Konu</th>
                                            <th>Tarih</th>
                                            <th>G??r??nt??le</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM mesaj ORDER BY mesaj_id DESC";
                                        $result = $db->query($sql);
                                        while ($row = $result->fetch_array()) { ?>
                                        <form method='post' action='read-mail.php'>
                                            <tr>
                                                <td class="mailbox-name"><?php echo $row["mesaj_isim_soyisim"]; ?>
                                                </td>
                                                <td class="mailbox-name"><?php echo $row["mesaj_email"]; ?>
                                                </td>
                                                <td class="mailbox-subject"><b><?php echo $row["mesaj_konu"]; ?></b>
                                                </td>
                                                <td class="mailbox-date"><?php echo $row["mesaj_tarih"]; ?>
                                                </td>
                                                <td>
                                                    <a href="read-mail.php">
                                                        <input type='hidden' name='mesaj_isim' value='<?php echo $row["mesaj_isim_soyisim"]; ?>'/>
                                                        <input type='hidden' name='mesaj_konu' value='<?php echo $row["mesaj_konu"]; ?>'/>
                                                        <input type='hidden' name='mesaj_date' value='<?php echo $row["mesaj_tarih"]; ?>'/>
                                                        <input type='hidden' name='mesaj_icerik' value='<?php echo $row["mesaj_icerik"]; ?>'/>
                                                        <input type='hidden' name='mesaj_mail' value='<?php echo $row["mesaj_email"]; ?>'/>
                                                        <button class="btn btn-success" name='message_see'>G??r??nt??le</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </form>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="mailbox-controls">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                    <div class="float-right">
                                        1-50/200
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fas fa-chevron-left"></i>
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fas fa-chevron-right"></i>
                                            </button>
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
require_once 'footer.php';
?>