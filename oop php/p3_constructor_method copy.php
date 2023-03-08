<?php 
// constructer method
// class 
class Produk {
    // membuat property yang merupakan variable yang ada di dalam class
    public $judul,$penulis,$penerbit,$harga;

    // membuat constructer method method yang merupakan function di dalam class 
    // cara kerja dari construct method dia akan langsung berjalan dengan di buatnya object baru 
    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga") {
        // menerima data yang ada pada object dan data yang terdapat pada object di ubah menjadi nilai dari variable property yang ada di luar method function
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    //mengambil variable/property yang nilainya sudah di ubah oleh method construct dan di ambil oleh method function biasa
    public function GetData() {
        return "$this->judul,$this->penulis";
    }
}
// object
// mengirimkan data ke dalam method construct
$produk1 = new Produk("owen","rich","owgroup",3000000);
$produk2 = new Produk("huang");

echo "komik : ". $produk1->GetData();
echo "<br>";
echo "Movie : ". $produk2->GetData();

?>