<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input buku</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <header class="py-5 bg-success">
      <div class="container"text-align:left>
      <h1 class="display-4 text-white">Form Perhitungan</h1>
      </div>
      </header>
</head>
<body>
    <script src="js/bootstrap.min.js"></script>
    <div class="container ml-5">
      <div class="row">
        <div class="col-7">

    <div class="container">
    <form method="POST" action="simpan.php">
    <div class="mb-3">
    <label class="form-label">Judul:</label>
        <input type="text" name="nama" id="" class="form-control" placeholder="Masukan Nama" required />
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga</label>
        <input type="number" name = "harga" class="form-control" id="exampleFormControlInput1" placeholder="Isikan Jumlah Sewa">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Lama Pinjam</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lama anda Meminjam Buku">
    </div>
       <select class="form-select" aria-label="Default select example">
        <option selected>Kategori Buku</option>
        <option value="Ekonomi">Ekonomi</option>
        <option value="Sosial">Sosial</option>
        <option value="Komputer">Komputer</option>
        <option value="Agama">Agama</option>
        <option value="Fisika">Fisika</option>
      </select>
    <input type="hidden" name="waktu" value="<?=date('Y-m-d H:i:s')?>">
    </br>
        <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
		<button type="button" class="btn btn-secondary" onclick="self.history.back()">Reset</button>
    </form>
    </div>
</div>
  </div>
  </div>
  </div>
</div>
</body>
</html>