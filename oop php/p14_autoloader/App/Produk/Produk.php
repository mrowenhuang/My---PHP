<?php 

abstract class Produk {
    protected $judul,$penulis,$penerbit,$harga,$diskon=0;


    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga") {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function SetDiskon($diskon) {
        if (!is_integer($diskon)) {
            throw new Exception("Must be interger");
        }
        $this->diskon = $diskon;
    }
    public function SetJudul ($judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }
    public function GetDiskon() {
        return $this->diskon;
    }
    public function GetJudul() {
        return $this->judul;
    }
    public function GetPenulis() {
        return $this->penulis;
    }
    public function GetPenerbit() {
        return $this->penerbit;
    }
    public function GetHarga() {
        return $this->harga - ($this->harga * $this->diskon /100);
    }


    // normal area
    public function GetData() {
        return "$this->penulis,$this->penerbit";
    }

    abstract public function InfoDataProduk();
}

?>