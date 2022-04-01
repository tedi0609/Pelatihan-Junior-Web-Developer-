<?php
//mengembalikan nilai dan tidak mengembalikan nilai
//function procedure (tanpa return)
// function perkalian($angka1, $angka2) {
//     $hasil= $angka1 * $angka2;
//     echo 'Hasil perkalian '.$angka1.' x '.$angka2.'= '.$hasil;
//  }
//  perkalian(10, 5);

function perkalian($angka1, $angka2) {
    $hasil= $angka1 * $angka2;
    return $hasil;
 }
 
 $hasil = perkalian(4, 5);
 echo 'Hasil perkalian 4x5:' . $hasil;


 

?>