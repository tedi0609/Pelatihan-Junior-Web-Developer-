<?php

//perulangan for

// for(initial; condition; increment) {
//     // kode yang harus dieksekusi;
// }


// for ($i = 1; $i <= 15; $i++) {
//     echo "Angka $i <br />";
// } 

// //perulangan while
// $i = 1;
// while ($i <= 15) {
// 	echo "Angka $i <br />";
// 	$i++;
// }

// //perulangan do while
// $i = 1;
// do {
// 	echo "Angka $i <br />";
// 	$i++;
// } while ($i <= 15);

$items = ['Andi', 'Jakarta', 'IT Staf'];

// for ($i = 0; $i < count($items); $i++) {
//   echo $items[$i] . '</br>';
// }
// var_dump($items).'</br>';

// foreach ($items as $item) {
//   echo $item . '</br>';
// }

$items = [
    'nama' => 'Andi', 
    'kota' => 'Jakarta',
    'Pekerjaan' => 'IT Staf'
    ];
    
    foreach ($items as $key => $value) {
      echo $key . ':' . $value . '</br>';
    }
    





?>