<?php 

class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($data) {
        require_once "../app/models/".$data.".php";
        return new $data;
    }
}

