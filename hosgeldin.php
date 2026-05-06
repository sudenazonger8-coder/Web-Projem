<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hoşgeldiniz <?php echo $_SESSION['user']; ?></h1>
    <p>Başarıyla giriş yaptınız</p>
    <a href="index.html">Ana Sayfaya Dön</a>
</body>
</html>