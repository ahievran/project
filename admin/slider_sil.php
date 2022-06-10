<?php
include '../baglanti.php';
?>

<?php

if (isset($_POST["sil"])) {
    $silinecek_id = $_POST["silinecek_id"];

    $sql = "DELETE FROM slider WHERE slider_id=$silinecek_id";

    if ($db->query($sql) === TRUE) {
        header('location:slider.php');
    } else {
        echo "Bir hata oluştu " . $db->error;
    }
}


?><?php
