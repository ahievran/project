<?php
include '../baglanti.php';
?>

<?php 

if(isset($_POST["sil"]))
{
    $silinecek_id = $_POST["silinecek_id"];

    $sql = "DELETE FROM galeri WHERE galeri_id=$silinecek_id";

    if ($db->query($sql) === TRUE) {
        echo "Dosya başarı ile silinmiştir geri dönmek için <a href='gallery.php'>TIKLAYINIZ</a> F5 e basmayınız veya ekranı yenilemeyiniz. ";
      } else {
        echo "Bir hata oluştu " . $db->error;
      }
}


?>