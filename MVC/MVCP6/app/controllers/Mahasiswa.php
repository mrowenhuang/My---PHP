<?php 

class Mahasiswa extends Controller{

    public function index() {

        $data['mhs'] = $this->model("User_mahasiswa")->getAllData();
        $this->view('templates/header',"Data Mahasiswa");
        $this->view('Mahasiswa/index',$data);
        $this->view('templates/footer');
    }

}

?>