<?php 

class User_mahasiswa {
//     private $mhs = [
//         ["nama"=>"owen","jurusan"=>"Penjas","umur"=>18],
//         ["nama"=>"rich","jurusan"=>"IT","umur"=>20],
//         ["nama"=>"huang","jurusan"=>"ppkn","umur"=>30],
//     ];

    private $dbh; //database handler
    private $stmt; //database statemen


    public function __construct()
    {
        // data source name
        // membuat variable baru dengan tujuan database yang di gunakan serta host dan nama database yang di pakai
        $dsn = 'mysql:host=localhost;dbname=phpmvc;';

        try {
            // PDO (PHP Data Object)
            // memanggil variable $dbh dan di isi dengan PDO yang berisi variable $dsn dan berisi username dan password localhost
            $this->dbh = new PDO($dsn,'root','');
            // mengankap semua pesan kesalahan dan di masukan ke dalam $e
        } catch(PDOException $e) {
            // memberhentikan program jika menerima pesan error dan tampilkan pesan error
            die($e->getMessage());
        }
    }

    Public function getAllData() {
        // membuat statemen
        // memanggil $stmt yang di isi dengan $dbh lalu di siapkan isi data yang berupa query (select * from mahasiswa)
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // jalankan program $stmt
        $this->stmt->execute();
        // kembalikan $stmt lalu di tangkap semua data nya dengan menggunakan tipe assoc yang dapat menggunakan nama atau id nya
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>