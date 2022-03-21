<?php
require_once "class_persegipanjang.php";

$persegipanjang = new PersegiPanjang(7, 9);

echo "Nilai Panjang dan Lebar Adalah ".$persegipanjang->p." dan ".$persegipanjang->l."<br/>";
echo "<hr/>";
echo "Luas Persegi Panjang: ".$persegipanjang->getLuas()."<br/>";
echo "Keliling Persegi Panjang: ".$persegipanjang->getKeliling();
?>