<?php 
// overriding

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
        return "$this->penulis,$this->penerbit";
    }

    public function InfoProduk() {
        $data = "$this->judul | {$this->GetData()},Rp.$this->harga";
        return $data;
    }
}

// inheritance atau pewarisan merupakan sebuah cara pewarisan di mana kita dapat membuat class baru namun memiliki sifat atau perilaku seperti parentnya seperti contoh di bawah ini
// dibuat class komik dengan mengikuti pewasiran dari parentnya/ data yang ada di dalam produk dapat di akses juga oleh class komik jika menggunakan heritance 

class Komik extends Produk {
    public $halaman;

    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga",$halaman=0) {
        // mengambil method __construct dari class produk dan di isi dengan data dari class komik lalu data di kirim ke dalam property dan method dari class
        // funsgi parent:: sendiri memiliki kegunaan memanggil suatu dat adari parent nya atau nama dari suatu property yang sama 
        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->halaman=$halaman;
        
    }

    function InfoProduk() {
        $data =  "Komik : ". parent::InfoProduk() ." - $this->halaman Halaman";
        return $data;
    }
}



class Film extends Produk {
    public $waktu;
    
    public function __construct($judul="judul",$penulis='penulis',$penerbit="penerbit",$harga="harga",$waktu=0) {

        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->waktu=$waktu;
        
    }

    function InfoProduk()
    {
        $data = "Film : ". parent::InfoProduk() ." - {$this->waktu} Jam";
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
$produk1 = new Komik ("owen","rich","owgroup",3000000,100);
$produk2 = new Film ("huang","owen","ow group",270000,2);


echo $produk1->InfoProduk();
echo"<br>";
echo $produk2->InfoProduk();



?>