<?php
ob_start();
session_start();
include 'connection.php';

if (isset($_POST['admin_login'])) {

    $adminkadi = $_POST['admin_kadi'];
    $adminsifre = md5($_POST['admin_sifre']);

    $kullanicisor = $db1->prepare("SELECT * FROM admin_giris WHERE admin_kadi=:kadi and admin_sifre=:sifre");
    $kullanicisor->execute(array(
        'kadi' => $adminkadi,
        'sifre' => $adminsifre
    ));


    $say = $kullanicisor->rowCount();
    if ($say == 1) {
        $_SESSION['admin_kadi'] = $adminkadi;
        $_SESSION['admin_sifre'] = $adminsifre;
        header("Location:index.php");
    } else {
        $hataligiris = $db1->prepare
        ("INSERT INTO hatali_giris SET 
        hatali_giris_ip=:hatali_giris_ip,
        hatali_giris_tarih=:hatali_giris_tarih,
        admin_kadi=:admin_kadi,
        admin_sifre=:admin_sifre");

        $update = $hataligiris->execute(array(
            'hatali_giris_ip' => $_SERVER['REMOTE_ADDR'],

            'hatali_giris_tarih' => date("d.m.Y / H:i:s"),

            'admin_kadi' => $adminkadi,

            'admin_sifre' => $_POST["admin_sifre"]
        ));
        header("Location:login.php?durum=no");
    }
    exit;
}
