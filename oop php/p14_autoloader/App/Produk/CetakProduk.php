<?php 

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

?>