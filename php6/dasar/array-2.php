<?php 

    $apel = ['manalagi', 'merah', 'washington'];
    $buah = ['mangga'=>100, 'jeruk'=>200, 'apel'=>$apel];

    $isi = 1;

    var_dump($buah);

    echo "<br>";

    // Pola tampilan array
    echo "<pre>";
    print_r($buah);
    echo "</pre>";

    // menampilkan array didalam array
    echo $buah['apel'][0]."<br>"."<br>";

    foreach ($buah as $key => $value) {
        if (!is_array($value)) {
            echo $key. "=>".$value;

            echo "<br>";
        }
        else {
            echo $key;
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
                echo "<br>";
            }
        }
    }

?>