
<?php 
session_start();
require_once 'baglanti.php';

<<<<<<< Updated upstream
$konu 	=(trim($_POST['subject']));
$ad		=(trim($_POST['name']));
$mail	=(trim($_POST['email']));
$message	=(trim($_POST['message']));

if(isset($_POST['send'])){
    if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
    if($konu !="" and $ad !="" and $mail !="" and $message!=""){    
        $dkayit=$dkayit="INSERT INTO `mesaj` (`mesaj_isim_soyisim`, `mesaj_konu`, `mesaj_email`, `mesaj_icerik`) VALUES ('$ad', '$konu', '$mail', '$message')";
        $dsonuc=mysqli_query($db,$dkayit);  
        if (isset ($dkayit)){
            echo '<script type="text/javascript">alert("MESAJINIZ GÖNDERİLDİ");</script>';
            echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';    
            }
            else{
                echo '<script type="text/javascript">alert("MESAJINIZ GÖNDERİLMEDİ");</script>';
                echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';   
                }  
                
=======
$konu   = (trim($_POST['subject']));
$ad    = (trim($_POST['name']));
$mail  = (trim($_POST['email']));
$mesaj  = (trim($_POST['message']));
$ip = $_SERVER['REMOTE_ADDR'];
if (isset($_POST['send'])) {
  if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    if ($konu != "" and $ad != "" and $mail != "" and $mesaj != "") {
      $dkayit = $kayit = "INSERT INTO `mesaj` (`mesaj_id`, `mesaj_isim_soyisim`, `mesaj_konu`, `mesaj_email`, `mesaj_icerik`) VALUES ('$ip', '$ad', '$konu', '$mail', '$message');";
      $dsonuc = mysqli_query($baglanti, $dkayit);
      if (isset($dkayit)) {
        echo '<script type="text/javascript">alert("MESAJINIZ GÖNDERİLDİ");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';
      } else {
        echo '<script type="text/javascript">alert("MESAJINIZ GÖNDERİLMEDİ");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';
>>>>>>> Stashed changes
      }
    } else {
      echo '<script type="text/javascript">alert("BOŞ ALAN BIRAKMAYINIZ");</script>';
      echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';
    }
  } else {
    echo '<script type="text/javascript">alert("YANLIŞ EMAİL BELİRTTİNİZ");</script>';
    echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';
  }
}

?>