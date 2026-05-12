<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST['adsoyad']);
    $posta = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['telefon']);
    $sehir = htmlspecialchars($_POST['sehir']);
    $mesaj = htmlspecialchars($_POST['mesaj']);

    echo "<h2>Form Başarıyla Gönderildi</h2>";
    echo "<p><b>Ad Soyad:</b> $ad </p>";
    echo "<p><b>E-posta:</b> $posta </p>";
    echo "<p><b>Telefon:</b> $tel </p>";
    echo "<p><b>Şehir:</b> $sehir </p>";
    echo "<p><b>Mesaj:</b> $mesaj </p>";
} else {
    echo "Hata: Veriler POST yöntemiyle gelmedi!";
}
?>