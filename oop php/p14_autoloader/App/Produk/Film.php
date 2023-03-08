<?php 

class Film extends Produk implements InfoProduk{
    public $waktu;
    
    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga",$waktu=0) {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktu=$waktu;
        
    }

    public function InfoDataProduk () {
        $data = "$this->judul | {$this->GetData()},Rp.$this->harga";
        return $data;
    }

    public function infoproduk(){
        $data = "Film : ". $this->InfoDataProduk() ." - {$this->waktu} Jam";
        return $data;
    }
}


?>