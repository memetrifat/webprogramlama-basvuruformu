<html>
<?php
$tc = $_POST["tc"];
$adSoyad = $_POST["adSoyad"];
$yas = $_POST["yas"];
$ePosta = $_POST["ePosta"];
$tarih = $_POST["tarih"];
$deneyim = $_POST["deneyim"];
$pDil = $_POST["pDil"];

$uploadDir = "uploads/*";
    $fileName = basename($_FILES["profil"]["name"]);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Sadece resim dosyalarını kabul et
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (in_array($fileType, $allowedTypes)){
        // Dosya yükleme
        if (move_uploaded_file($_FILES["profil"]["tmp_name"], $targetFilePath)) {
            echo "Fotoğraf başarıyla yüklendi.";
        } else {
            echo "Fotoğraf yüklenirken bir hata oluştu.";
        }
    }
    else {
        echo "Sadece JPG, JPEG, PNG & GIF dosyaları kabul edilir.";
    }

echo " <br> TC: $tc <br>";
echo "Ad Soyad: $adSoyad <br>";
echo "Yaş: $yas <br>";
echo "ePosta: $ePosta <br>";
echo "Profil: <img src=$targetFilePath> <br>";
echo "Tarih: $tarih <br>";
echo "Deneyim: $deneyim <br>";
echo "Programlama Dili: $pDil";
?>
</html>