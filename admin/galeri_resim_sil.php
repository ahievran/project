<?php
include '../baglanti.php';
?>

<?php 

if(isset($_POST["sil"]))
{
    $silinecek_id = $_POST["silinecek_id"];

    $sql = "DELETE FROM galeri WHERE galeri_id=$silinecek_id";

    if ($db->query($sql) === TRUE) {
        header('location:gallery.php');
      } else {
        echo "Bir hata oluştu " . $db->error;
      }
}


?>