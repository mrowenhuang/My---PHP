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



}


?>