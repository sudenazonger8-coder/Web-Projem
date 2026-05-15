<?php

$ad = $_POST["adsoyad"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];
$sehir = $_POST["sehir"];
$cinsiyet = $_POST["cinsiyet"];
$mesaj = $_POST["mesaj"];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Bilgileri</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-sonuc">

    <h2>Gönderilen Bilgiler</h2>

    <p><strong>Ad Soyad:</strong> <?php echo $ad; ?></p>

    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <p><strong>Telefon:</strong> <?php echo $telefon; ?></p>

    <p><strong>Şehir:</strong> <?php echo $sehir; ?></p>

    <p><strong>Cinsiyet:</strong> <?php echo $cinsiyet; ?></p>

    <p><strong>Mesaj:</strong> <?php echo $mesaj; ?></p>

</div>

</body>
</html>