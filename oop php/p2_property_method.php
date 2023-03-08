<?php 
// membuat property dan method
// class 
class Produk {
    // membuat property yang merupakan variable yang ada di dalam class
    // membuat nilai default dari property
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

    // membuat method yang merupakan function di dalam class
    function GetData() {
        // memanggil data di luar function dengan menggunkan $this->(namavariable tanpa tanda $) global(tidak berfungsi di dalam class)
        return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
    }

}

// object
$produk1 = new Produk();
// mengubah/menimpa nilai default pada property 
$produk1->judul = "batman";
var_dump($produk1);

$produk2 = new Produk();
// jika tidak di temukan property yang tidak ada di dalam class maka akan di buat baru
$produk2 -> tambahdata = "hello world";
var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "rich";
$produk3 -> penulis = "owen";
$produk3 -> penerbit = "huang company";
$produk3 -> harga = "200000";

// mengeluarkan output ke layar 

echo "komik : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";

echo "<br>";

echo "komik : ". $produk3->GetData();

echo "<br>";

$produk4 = new Produk();
$produk4 -> judul = "crazy";
$produk4 -> penulis = "huang";
$produk4 -> penerbit = "ow group";
$produk4 -> harga = "200000";

echo "Movie : ". $produk4->GetData();

?>