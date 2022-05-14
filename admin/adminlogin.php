<?php
ob_start();
session_start();
include 'connection.php';

if(isset($_POST['admin_login'])){

    $adminkadi=$_POST['admin_kadi'];
    $adminsifre=md5($_POST['admin_sifre']);

    $kullanicisor=$db1->prepare("SELECT * FROM admin_giris WHERE admin_kadi=:kadi and admin_sifre=:sifre");
    $kullanicisor->execute(array(
        'kadi' =>$adminkadi,
        'sifre' =>$adminsifre
    ));

    $say=$kullanicisor->rowCount();
    if($say==1){
        $_SESSION['admin_kadi']=$adminkadi;
        $_SESSION['admin_sifre']=$adminsifre;
        header("Location:index.php");
    }
    else{
        header("Location:login.php?durum=no");
    }
    exit;
}
