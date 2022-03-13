<?php
    $array_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    echo $array_buah[0]. '<br>';
    echo "menampilkan jumlah data array".count($array_buah). '<br>';
    foreach ($array_buah as $key => $value) {
        echo "menambahkan data array ke-".$key. '=>' .$value. '<br>';
    }
    echo '<hr>';
    echo '<ol>';
        foreach($array_buah as $value) {
            echo '<il>' .$value. '</li>' ;
        }
    echo '</ol>'
?>