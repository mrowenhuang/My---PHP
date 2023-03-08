<?php 
echo date ("d m y\n"); 

function salam ($waktu ,$nama) {
    return "selamat $waktu $nama";
}

echo salam("pagi","owen\n");

$var1 = "owen";
$var2 = "huang";

echo "hello" . " ". $var1;

// variable default
echo "\n";

function nilai_bawaan ($selamat = "selamat",$datang = "datang") {
    return "owen $selamat $datang";
}

echo nilai_bawaan("datang","pagi");
echo "\n";
echo nilai_bawaan();
echo "\n";
// test 

function makan ($menu1, $menu2) {
    echo "nama menu 1 ". $menu1 . " menu 2 ". $menu2;
}

makan ("ayam","babi")

?>


