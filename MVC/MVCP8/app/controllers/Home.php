<?php 


class Home extends Controller{
    Public function index()
    {
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header',"Home");
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}