<?php
//Memanggil file atau class_PersegiPanjang.PHP
require_once 'class_PersegiPanjang.php';
$persegipanjang1 = new Persegipanjang(2, 4);
$persegipanjang2 = new Persegipanjang(5, 10);

// Menghitung luas
echo "luas persegi panjang I adalah = " .$persegipanjang1->getluas();
echo "<br> luas persegi panjang II adalah = " .$persegipanjang2->getluas();
echo "<br>";

// Menghitung keliling
echo "<br> luas persegi panjang I adalah = " .$persegipanjang1->getKeliling();
echo "<br> luas persegi panjang II adalah = " .$persegipanjang2->getkeliling();
?>