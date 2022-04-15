<?php
include '../baglanti.php';
?>

<?php

if(isset($_POST["sil"]))
{
    $silinecek_id = $_POST["silinecek_id"];

    $sql = "DELETE FROM hakkimizda WHERE hakkinda_id=$silinecek_id";

    if ($db->query($sql) === TRUE) {
        header('location:hakkimizda.php');
    } else {
        echo "Bir hata oluştu " . $db->error;
    }
}


?>