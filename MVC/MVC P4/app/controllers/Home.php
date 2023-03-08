<?php 


class Home extends Controller{
    Public function index()
    {
        $this->view('templates/header',"Home");
        $this->view('home/index');
        $this->view('templates/footer');
    }
}