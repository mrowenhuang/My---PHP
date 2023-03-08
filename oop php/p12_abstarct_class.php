<?php 
// abstract class
// membuat class tersebut tidak dapat di akses

// class 
// membuat class produk tidak dapat di akses dengan menggunakan abstract
abstract class Produk {

    private $judul,$penulis,$penerbit,$harga,$diskon=0;

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

    public function GetData() {
        return "$this->penulis,$this->penerbit";
    }
    
    //  ini adalah abstract method yang wajib di guanakan jika menggunakan abstract class karena ini menjadi kerangka dasar dan pada class turunannya juga wajib di gunakan
    abstract public function InfoProduk();

    public function InfoDataProduk () {
        $data = "$this->judul | {$this->GetData()},Rp.$this->harga";
        return $data;
    }
}

class Komik extends Produk {
    public $halaman;

    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga",$halaman=0) {

        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->halaman=$halaman;
        
    }
    // nama dari abstract method di dalam class komik 
    public function InfoProduk() {
        $data =  "Komik : ". $this->InfoDataProduk() ." - $this->halaman Halaman";
        return $data;
    }
}



class Film extends Produk {
    public $waktu;
    
    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga",$waktu=0) {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktu=$waktu;
        
    }

    // nama dari abstract method di dalam class film  
    public function infoproduk(){
        $data = "Film : ". $this->InfoDataProduk() ." - {$this->waktu} Jam";
        return $data;
    }
}


// mencetak data agar jauh lebih rapi dengan hanya 1 class
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


?>