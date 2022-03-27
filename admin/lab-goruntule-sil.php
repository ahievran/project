<?php
include '../baglanti.php';
?>

<?php

if(isset($_POST["see"]))
 {
     $goruntulenecek_resim = $_POST["goruntulencek_resim"];
     echo "<img src='$goruntulenecek_resim' style='width:990px;height:700px;'></img>";
 }
 if(isset($_POST["sil"]))
 {
     $silinecek_id = $_POST["sil_id"];
 
     $sql = "DELETE FROM laboratuvar WHERE lab_id=$silinecek_id";
 
     if ($db->query($sql) === TRUE) {
         echo "Dosya başarı ile silinmiştir geri dönmek için <a href='labs.php'>TIKLAYINIZ</a> F5 e basmayınız veya ekranı yenilemeyiniz. ";
       } else {
         echo "Bir hata oluştu " . $db->error;
       }
 }

?>