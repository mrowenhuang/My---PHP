<?php 

class About extends Controller{
    public function index($name="owen",$nama='Owen Huang', $job = "Crazy Rich",$umur = 18) {
        
        $masukan['name'] = $nama;
        $masukan['job'] = $job;
        $masukan['umur'] = $umur;

        $this->view('templates/header',"About Me");
        $this->view('about/index',$masukan);
        $this->view('templates/footer');
    }
    public function page()
    {
        $this->view('templates/header',"My Page");
        $this->view('about/page');
        $this->view('templates/footer');
    }
}