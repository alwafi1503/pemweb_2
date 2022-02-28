<?php
$array_buah = ['pisang','jeruk','apel','mangga'];

echo 'Menampilkan array ke-0 => ' . $array_buah[0] . '<br>';

echo "Menampilkan Jumlah Data Array => " . count($array_buah) . '<br>' . '<br>';

foreach ($array_buah as $key => $value) {
    echo "Menambahkan Data array ke-". $key . ' => ' . $value . '<br>';
}

echo '<ol>';
foreach ($array_buah as $value) {
    echo '<li>' . $value . '</li>';
}
echo '</ol>';
?>