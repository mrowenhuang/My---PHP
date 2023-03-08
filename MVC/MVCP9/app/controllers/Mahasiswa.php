<?php 

class Mahasiswa extends Controller{

    public function index() {

        $data['mhs'] = $this->model("User_mahasiswa")->getAllData();
        $this->view('templates/header',"Data Mahasiswa");
        $this->view('Mahasiswa/index',$data);
        $this->view('templates/footer');
    }

    public function detail($maha,$id) {
        $data['mhs'] = $this->model("User_mahasiswa")->getDetailById($id);
        $this->view('templates/header',"Detail Mahasiswa");
        $this->view('Mahasiswa/detail',$data);
        $this->view('templates/footer');
    }

    public function tambah () {
        if ( $this->model('User_mahasiswa')->TambahData($_POST)> 0) {
            Flasher::setFlash('Berhasil','Ditambahkan','success');
            header('Location: '.BaseURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal','Ditambahkan','danger');
            header('Location: '.BaseURL.'/mahasiswa');
            exit;
        }
    }

}

?>