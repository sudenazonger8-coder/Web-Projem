<?php
$email = $_POST['email'];
$sifre = $_POST['sifre'];

$ogrenciNo = "b251210062"; 
$dogruMail = $ogrenciNo . "@sakarya.edu.tr";

// Kontrol mekanizması
if ($email == $dogruMail && $sifre == $ogrenciNo) {
    // Bilgiler doğruysa başarı sayfasına yönlendir
    header("Location: hosgeldin.php?no=" . $ogrenciNo);
} else {
    // Hatalıysa tekrar giriş sayfasına geri gönder
    header("Location: login.html");
}
?>