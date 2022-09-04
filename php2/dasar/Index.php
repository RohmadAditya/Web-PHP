<?php 
    // Penulisan Huruf 
    echo "Belajar"; 
    // Penulisan Simbol HTML
    echo "<br>";
    // Penulisan Angka
    echo 100;

    echo "<br>";

    // Penulisan Variabel
    $huruf = "Belajar PHP";
    $angka = 500;
    //Memanggil atau menampilkan isi dari Variabel
    // echo $huruf;
    echo "<br>";
?>

<!-- Bisa dipanggil meskipun berbeda blok -->
<?php 
    echo $huruf;

    echo "<br>";
    echo "<br>";
?>

<!-- Bisa menggunakan "=" sebagai pengganti dari echo -->
<?= $huruf  ?>

<!-- Tanda (.) sebagai penyambung -->
<?= "<br>"."Lagi ".$huruf."<br>".$angka."<br>"  ?>

<!-- Jika menggunakan tanda petik 1 maka akan dianggap string -->
<?= '$huruf' ?>

<!-- dengan variasi html -->
<?= "<h1>Belajar PHP</h1>" ?>

<h2> <?= "Belajar PHP" ?> </h2>