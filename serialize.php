<!--simpan array ke dalam file dengan serialize dan json -->
<?php
//menyimpan array dengan seralize

// $karyawan = [
//     ['nama'=>'Toni','alamat'=>'Bandung'],
//     ['nama'=>'Naufal','alamat'=>'Bandung'],
//     ['nama'=>'Davi','alamat'=>'Jakarta']
// ];
// $save = file_put_contents('data.txt', serialize($karyawan));
// if ($save){
//     echo "sukses";
// }else{
//     echo "gagal";
// }


//menyimpan array dengan json

// $karyawan = [
//     ['nama'=>'Toni','alamat'=>'Bandung'],
//     ['nama'=>'Naufal','alamat'=>'Bandung'],
//     ['nama'=>'Davi','alamat'=>'Jakarta']
// ];
// $save = file_put_contents('data.txt', json_encode($karyawan));
// if ($save){
//     echo "sukses";
// }else{
//     echo "gagal";
// }


//menampilkan array dengan unserialize
$getData = file_get_contents('data.txt');
$hasil = json_decode($getData, true);//kalau object tidak pakai true

echo '<pre>';
print_r($hasil);
echo '</pre>';

//echo "JWD =".$hasil[0]->nama;
echo "JWD =".$hasil[0]['nama'];


?>