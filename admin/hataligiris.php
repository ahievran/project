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
                        <h1>Hatalı Girişler/Engellenen IP'ler</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Hatalı Girişler</h3>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 240px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>IP Adresi</th>
                                        <th>Tarih/Saat</th>
                                        <th>Girilen Kullanıcı Adı</th>
                                        <th>Girilen Şifre</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM hatali_giris ORDER BY hatali_giris_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $row['hatali_giris_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['hatali_giris_ip']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['hatali_giris_tarih']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['admin_kadi']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['admin_sifre']; ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Engellenen IP'ler</h3>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 240px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>IP Adresi</th>
                                        <th>Tarih/Saat</th>
                                        <th>Girilen Kullanıcı Adı</th>
                                        <th>Girilen Şifre</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM hatali_giris ORDER BY hatali_giris_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $row['hatali_giris_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['hatali_giris_ip']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['hatali_giris_tarih']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['admin_kadi']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['admin_sifre']; ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>