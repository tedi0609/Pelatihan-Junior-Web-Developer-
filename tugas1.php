<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
          <div class="card">
            <div class="card-title bg-dark">
        <h1 class="text-white text-center">Table Bootstrap</h1>
      </div>
      <div class="card-body">
          <?php
            $mahasiswa = [
                ["Firman", "Basic Computer Assembly", "Gresik",23],
                ["Achi", "Office Profesional", "Sidoarjo", 22],
                ["Yoga", "Web Developer", "Surabaya",24],
                ["Nestia", "Data Management Staff", "Gresik", 20],
                ["Rania", "Practical Ofiice Advanced", "Surabaya", 21]
            ];
          ?>
        <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Skema</th>
              <th scope="col">Kota</th>
              <th scope="col">Usia</th>
            </tr>
          </thead>
          <tbody>
            <?php            
                $no = 0;
                for ($row = 0; $row < 5; $row++) {
                    $no++;
                    echo 
                    "<tr>
                        <td>".$no;
                        for ($col = 0; $col < 4; $col++) {
                            echo "<td>".$mahasiswa[$row][$col]."</td>";
                        }
                    echo 
                      "</td>
                    </tr>";
                }
            ?>
          </tbody>
        </table>
      </div>
      </div>
</div>



<script src="js/bootstrap.min.js"></script>
</body>
</html>