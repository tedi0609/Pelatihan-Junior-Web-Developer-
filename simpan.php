<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<?php
$nama = $_POST['nama'];
$harga = $_POST['harga'];
?> 
<div class="container">
  	<div class="p-5 my-4 bg-light rounded-3">
        <h1>Nama yang diketikkan</h1>
        <p class="lead">Judul Buku anda adalah<strong> <?php echo ucwords($nama) ?> .</strong> Total yang anda Pinjam adalah : <?php echo $_POST['harga']; ?></p>
    </div>
    <button type="button" class="btn btn-secondary" onclick="self.history.back()">Kembali</button>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>