<?php 

require_once 'App/init.php';

$produk1 = new Komik ("owen","rich","owgroup",3000000,100);
$produk2 = new Film ("huang","owen","ow group",270000,2);


$data = new CetakProduk;
$data->tambahProduk($produk1);
$data->tambahProduk($produk2);

echo  $data->cetak();

echo "<br>";

new Coba();

echo "<br>";
// menggunakan nama alias
use App\Produk\Users as data;
new data;

echo "<br>";

// tidak menggunakan alias
new App\Service\Users();
?>