<?php 
// inheritance problem

// (pada program ini terdapat masalah di mana pada saaat menambah data baru maka data property mesti di tamvah lagi dan itu akan sangat merepotkan)


// class 
class Produk {
    // membuat property yang merupakan variable yang ada di dalam class
    public $judul,$penulis,$penerbit,$harga,$halaman,$waktu,$tipe;

    // membuat constructer method method yang merupakan function di dalam class 
    // cara kerja dari construct method dia akan langsung berjalan dengan di buatnya object baru 
    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga",$halaman=0,$waktu=0,$tipe="tipe") {
        // menerima data yang ada pada object dan data yang terdapat pada object di ubah menjadi nilai dari variable property yang ada di luar method function
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
        $this->tipe = $tipe;
    }
    //mengambil variable/property yang nilainya sudah di ubah oleh method construct dan di ambil oleh method function biasa
    public function GetData() {
        return "$this->penulis,$this->penerbit";
    }

    public function AllInfo() {
        $data = "{$this->tipe} : {$this->judul} | {$this->GetData()},Rp. {$this->harga}";
        if ($this->tipe === "komik") {
            $data .= " {$this->halaman} Halaman";
        } elseif ($this->tipe === "film" ){
            $data.= " {$this->waktu} Jam";
        }
    
        return $data;
    }


}

class CetakProduk {
    function Data(Produk $data) {
        $output = "{$data->judul} | {$data->GetData()},Rp :{$data->harga}";
        return $output;
    }
}



// object
// mengirimkan data ke dalam method construct
$produk1 = new Produk("owen","rich","owgroup",3000000,100,0,"komik");
$produk2 = new Produk("huang","owen","ow group",270000,0,2,"film");


echo $produk1->AllInfo();
echo"<br>";
echo $produk2->AllInfo();



?>