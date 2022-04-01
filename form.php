<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="p-5 my-4 bg-light rounded-3">
    <h2>Input Data</h2>

    <form method="POST" action="simpan.php">
    <div class="mb-3">
        <label class="form-label">Nama:</label>
        <input type="text" name="nama" id="" class="form-control" placeholder="Masukan Nama" required />
    </div>
        <input type="hidden" name="waktu" value="<?=date('Y-m-d H:i:s')?>">
    </br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
    </form>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>



