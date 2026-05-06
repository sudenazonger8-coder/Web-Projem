<?php
session_start();

// Eğer form gönderildiyse kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    // Kendi numaranla değiştir kanki
    if ($email == "b2412100001@sakarya.edu.tr" && $sifre == "b2412100001") {
        $_SESSION['user'] = "b2412100001";
        header("Location: hosgeldin.php");
        exit();
    } else {
        $hata = "Hatalı giriş!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <h2>Öğrenci Girişi</h2>
            <form method="POST">
                <input type="email" name="email" placeholder="Mail Adresi" required>
                <input type="password" name="sifre" placeholder="Öğrenci No" required>
                <button type="submit">Giriş Yap</button>
            </form>
            <?php if(isset($hata)) echo "<p style='color:red;'>$hata</p>"; ?>
        </div>
    </div>
</body>
</html>