<?php 
    // Array
    $buah = ['mangga','Jeruk',100,'apel',200,2.5];

    // menampilkan semua elemen didalam variabel buah
    var_dump($buah);

    echo "<br>";
    echo "<br>";

    // Cara memanggil array
    echo $buah[1];

    echo "<br>";

    foreach ($buah as $key => $value) {
        echo $key. " => " . $value;
        echo "<br>";
        
    }
    echo "<br>";
    // Array Asosiatif (Array Berpasangan)
    $harga = ['Mangga'=>200, 'apel'=>300, 'jeruk'=>100];
    var_dump($harga);
    echo "<br>";
    echo "<br>";
    

    foreach ($harga as $key => $value) {
        echo $key." harganya ".$value;
        echo "<br>";
    }
    echo "<br>";

    echo $harga['jeruk'];

    echo "<br>";

    // menyimpan array didalam variabel baru
    $isi = array_keys($harga);
    var_dump($isi);

    echo "<br>";
    echo "<br>";

    echo $isi[0];
?>