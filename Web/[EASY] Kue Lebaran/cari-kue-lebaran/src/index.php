<?php
$FREE = md5("free");
$ADMIN = md5("admin");

if (!isset($_COOKIE['user'])) {
    setcookie("user", $FREE, time()+3600, "/");
    $_COOKIE['user'] = $FREE;
}

$user = $_COOKIE['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cari Kue Lebaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>🍪 Cari Kue Lebaran</h1>
    <div class="profile">
        <?php if ($user === $ADMIN): ?>
            <span>👑 Admin</span>
        <?php else: ?>
            <span>🙂 User Free</span>
        <?php endif; ?>
        <button onclick="alert('Login Admin hanya untuk pemilik toko!')">Login Admin</button>
    </div>
</header>

<main>
<?php if ($user === $ADMIN): ?>
    <h2>🎂 Toko Rahasia Admin</h2>
    <div class="products">
        <div class="card">Kue Sultan</div>
        <div class="card">Nastar Platinum</div>
        <div class="card">Putri Salju Elsa</div><br>
    </div>
    <h1>RAMADHAN22{T1d4k_Sab4r_makan_Cookie_l3b4r4n}</h1>
<?php else: ?>
    <h2>🧁 Daftar Kue Lebaran</h2>
    <div class="products">
        <div class="card">Nastar</div>
        <div class="card">Kastangel</div>
        <div class="card">Putri Salju</div>
        <div class="card">Lidah Kucing</div>
        <div class="card">Cookies Coklat</div>
        <div class="card">Sagu Keju</div>
        <div class="card">Kue Kacang</div>
        <div class="card">Semprit Susu</div>
        <div class="card">Kue Chocochip</div>
        <div class="card">Akar Kelapa</div>
        <div class="card">Ketapang</div>
        <div class="card">Kue Garpu</div>
        <div class="card">Kue Almond</div>
        <div class="card">Kue Cubir</div>
        <div class="card">Kue Kering Kurma</div>
        <div class="card">Kue Pandan</div>
        <div class="card">Kue Keju Panggang</div>
        <div class="card">Kue Kelapa</div>
        <div class="card">Kue Mentega</div>
        <div class="card">Kue Kering Kismis</div>
        <div class="card">Lapis Legit</div>
        <div class="card">Wafer Coklat</div>
        <div class="card">Wafer Keju</div>
        <div class="card">Wafer Strowberi</div>
        <div class="card">Kue Sus</div>
        <div class="card">Kue Kacang Merah</div>
        <div class="card">Nutella Cookies</div>
        <div class="card">Kue Gula Pasir</div>
        <div class="card">Keripik Pisang</div>
        <div class="card">Roti Kering</div>
        <div class="card">Kue Kacang Mete</div>
        <div class="card">Onde Onde</div>
        <div class="card">Kue Putu</div>
        <div class="card">Bakpia</div>
        <div class="card">Kue Jahe</div>
        <div class="card">Selai Pisang</div>
        <div class="card">Kue Ubi</div>
        <div class="card">Nastar Coklat</div>
        <div class="card">Kue Gemblong</div>
        <div class="card">Khong Guan</div>
    </div>
<?php endif; ?>
</main>

<script src="script.js"></script>
</body>
</html>
