<?php 

// cara lama dan di lakukan secara manual
// require_once "Produk/InfoProduk.php";
// require_once "Produk/Produk.php";
// require_once "Produk/Komik.php";
// require_once "Produk/Film.php";
// require_once "Produk/CetakProduk.php";


spl_autoload_register(function ( $class ) {
    require_once __DIR__.'produk/'.$class.'.php';
})

?>