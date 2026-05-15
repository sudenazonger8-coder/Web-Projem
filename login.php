<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">

    <div class="container-fluid">

        <a href="index.html">Ana Sayfa</a>
        <a href="cv.html">CV</a>
        <a href="sehir.html">Şehrim</a>
        <a href="iletisim.html">İletişim</a>
        <a href="ilgialanlarim.html">İlgi Alanlarım</a>
        <a href="login.php">Login</a>
        <a href="mirasimiz.html">Mirasımız</a>

    </div>

</nav>
    <section class="login-page">

    <h2>Giriş Yap</h2>

    <form action="hosgeldin.php" method="POST" onsubmit="return loginKontrol()">

        <input type="email" id="email" name="email" placeholder="Öğrenci maili">

        <input type="password" id="password" name="sifre" placeholder="Şifre">

        <button type="submit">Giriş Yap</button>

    </form>

    <p id="loginError"></p>

</section>

<script>
function loginKontrol() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    if (email === "" || password === "") {
        document.getElementById("loginError").innerText = "Alanlar boş bırakılamaz.";
        return false;
    }

    if (!email.includes("@") || !email.endsWith("@sakarya.edu.tr")) {
        document.getElementById("loginError").innerText = "Geçerli bir Sakarya Üniversitesi maili giriniz.";
        return false;
    }

    return true;
}
</script>
</body>
</html>