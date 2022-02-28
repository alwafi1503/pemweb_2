<?php 
    define('PHI', 3.14);
    define('DBNAME', 'db_mahasiswa');
    define('DBSERVER', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'aziz');

    $jari = 10;
    $luas = PHI * $jari;
    $keliling = 2 * PHI * $jari;

    // TAMPIL HASIL
    echo 'Luas Lingkaran : '. $luas . '<br>';
    echo 'Keliling Lingkaran : '. $keliling . '<br>';

    echo '<hr>';

    // TAMPIL KONSTANTA
    echo 'Nama Database : '. DBNAME. '<br>';
    echo 'Server Database : '. DBSERVER. '<br>';
    echo 'Nama User Database : '. DBUSER. '<br>';
    echo 'Password Database : '. DBPASS. '<br>';
?>