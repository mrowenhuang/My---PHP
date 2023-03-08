<?php 

class App {
    protected $controller = "home";
    protected $method = "Index";
    protected $params = [];


    public function __construct()
    {
        // mengecek data controller
        // cara kerja bila di url terdapat nama yang sesuai dengan yang ada di dalam folder controller maka data variable contoller mengikuti data dari url
        $url = $this-> parseURL();
        // pemanggilan di lakukan di dalam file index
        if ( file_exists('../app/controllers/'. $url[0].'.php' )) {
            $this->controller = $url[0];
            unset($url[0]);

        }

        // mengambil data data di dalam folder controller pemanggilan di lakukan di dalam file index
        require_once '../app/controllers/' . $this->controller. '.php';
        // 
        $this->controller = new $this->controller();


        if ( isset($url[1]) ) {
            if (method_exists($this->controller,$url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }


    if ( !empty ($url)) {
        $this->params = array_values($url);
    }


    call_user_func_array([$this->controller,$this->method], $this->params);

    }
    
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            // mengambil data dari url dan menghilangkan tanda / pada bagian akhir url
            $url = rtrim($_GET['url'], '/');
            // menjaga agar situs url tetap aman
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // melakukan pemecahan terhadap url agar di ubah menjadi string
            $url = explode('/',$url);
            return $url;
        }
    }
}