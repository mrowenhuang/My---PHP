<?php 

class Komik extends Produk implements InfoProduk{
    public $halaman;

    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga",$halaman=0) {

        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->halaman=$halaman;
        
    }

    // seluruh implementasi di jalankan di dalam child class bukan di dalam interface
    public function InfoDataProduk () {
        $data = "$this->judul | {$this->GetData()},Rp.$this->harga";
        return $data;
    }

    public function InfoProduk() {
        $data =  "Komik : ". $this->InfoDataProduk() ." - $this->halaman Halaman";
        return $data;
    }
}

?>