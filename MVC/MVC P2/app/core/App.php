<?php 

class App {
    public function __construct()
    {
        echo "Test Ok <br>";
        $url = $this-> parseURL();
        var_dump($url);
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