<?php
// interface
// Kelas abstract yang sama sekali tidak memiliki implementasi


// jika ingin menggunakan interface pada class wajib menggunakan interface sebagai pengganti class
interface InfoProduk {
    // jika menggunakna interface hanya boleh menggunakan deklarasi method tidak boleh ada property
    public function InfoProduk();
}

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

// penggunakan interface pad child class nya dengan menambahkan implements (nama interface)
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



class CetakProduk {
    public $daftarProduk = [];

    public function tambahProduk(produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak (){
        $str = "daftar Produk : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "-{$p->InfoProduk()}<br>";
        }

        return $str;

    }
}


$produk1 = new Komik ("owen","rich","owgroup",3000000,100);
$produk2 = new Film ("huang","owen","ow group",270000,2);


$data = new CetakProduk;
$data->tambahProduk($produk1);
$data->tambahProduk($produk2);

echo  $data->cetak()


// penjelasan cara penggunaan interface
// interface hanya memberikan penggunaan layaknya sebiah template dan hanya menyediakan method method yang sudah di beri nama tanpa adanya implementasi dan seluruh data implementasi di lakukan di child class dan pengggunakan interface layaknya class namun tidak menggunakan class di awal melainkan interface (nama interface) lalu penggunaannya di child class dengan menuliskan implements(nama interface).



?>