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

    public function hapus ($data,$id) {
        if ( $this->model('User_mahasiswa')->HapusData($id)> 0) {
            Flasher::setFlash('Berhasil','Dihapus','success');
            header('Location: '.BaseURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal','Dihapus','danger');
            header('Location: '.BaseURL.'/mahasiswa');
            exit;
        }
    }

    public function getubah() {
        json_encode($this->model('User_mahasiswa')->getDetailById($_POST['id']));
    }

    public function ubah() {
        if ( $this->model('User_mahasiswa')->UbahData($_POST)> 0) {
            Flasher::setFlash('Berhasil','Diubah','success');
            header('Location: '.BaseURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal','Diubah','danger');
            header('Location: '.BaseURL.'/mahasiswa');
            exit;
        }
    }
}

?>