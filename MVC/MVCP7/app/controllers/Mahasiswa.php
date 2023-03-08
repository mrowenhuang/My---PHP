<?php 

class Mahasiswa extends Controller{

    public function index() {

        $data['mhs'] = $this->model("User_mahasiswa")->getAllData();
        $this->view('templates/header',"Data Mahasiswa");
        $this->view('Mahasiswa/index',$data);
        $this->view('templates/footer');
    }

    public function detail($maha,$id) {
        $id = (int)$id;
        $data['mhs'] = $this->model("User_mahasiswa")->getDetailById($id);
        $this->view('templates/header',"Detail Mahasiswa");
        $this->view('Mahasiswa/detail',$data);
        $this->view('templates/footer');
    }

}

?>