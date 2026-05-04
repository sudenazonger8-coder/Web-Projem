<?php 
    $no = isset($_GET['no']) ? $_GET['no'] : "Misafir"; 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Başarılı Giriş</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div style="text-align: center; margin-top: 100px;">
        <h1>Hoşgeldiniz <?php echo $no; ?></h1>
        <p>Giriş işleminiz başarıyla tamamlandı.</p>
        <a href="index.html" style="color: #3498db;">Ana Sayfaya Dön</a>
    </div>
</body>
</html>