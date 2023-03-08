<?php 

class User_mahasiswa {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData() {
        
        $this->db->query('SELECT * FROM mahasiswa');

        return $this->db->resultSet();

    }

    public function getDetailById($id)
    {
        $this->db->query('SELECT * FROM mahasiswa WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function TambahData ($data) {
        $query = "INSERT INTO mahasiswa VALUES('',:Name,:Jurusan,:Umur)";

        $this->db->query($query);
        $this->db->bind('Name',$data['Name']);
        $this->db->bind('Jurusan',$data['Jurusan']);
        $this->db->bind('Umur',$data['Umur']);
        
        $this->db->execute();
        return $this->db->RowCount();
    }


}


?>