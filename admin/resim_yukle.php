<?php
include '../baglanti.php';
?>

<?php
$kaynak = $_FILES['file']['tmp_name'];
$isim = $_FILES['file']['name'];
$tip = $_FILES['file']['type'];
$buyukluk = $_FILES['file']['size'];

$rand = substr(md5(uniqid(rand())), 0, 5);
$desteklenenformatlar = array("image/jpeg", "image/pjpeg", "image/png", "image/gif");
$kaydedilecekyer = "../assets/img/scenery";
if (in_array($_FILES['file']['type'], $desteklenenformatlar)) {
    $dosya = $kaydedilecekyer . "/" . $rand . $_FILES['file']['name'];
    $hangitipteKayitEdilcek = "assets/img/scenery/" . $rand . $_FILES['file']['name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], $dosya)) {

        echo "<font color = '#009900'><b>Dosyaniz basarili bir sekilde yuklendi!</b></font>" . "<br/><br/>";

        echo "<b>Dosyanizin ismi :</b> " . "$isim" . "<br/>";
        echo "<b>Dosyanizin tipi : </b>" . "$tip" . "<br/>";
        echo "<b>Dosyanizin buyuklugu : </b>" . "$buyukluk" . "kb'tir" . "<br/>";
        $dosya_Adi = "assets/img/scenery/" . $_FILES['file']['name'];
        $sql = "INSERT INTO galeri (galeri_resim) VALUES ('$hangitipteKayitEdilcek')";
        if ($query = $db->query($sql)) {
            echo "veri tabanına da eklendi<br>";
            echo "<font color = '#009900'><b>Geri dönmek için <a href='galleryadd.php'>tıklayınız<a> f5'e basmayınız veya sayfayı yenilemeyiniz.</b></font>" . "<br/><br/>";
        } else {
            echo "veritabanına eklenemedi";
        }

    }

}

?>