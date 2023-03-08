<?php 
// static keyword

class ContohStatic {
    public static $data=1;

    public static function sapa() {
        return "Hello world " . self::$data++ . " kali";
    }
}


echo ContohStatic::sapa();
echo "<br>";
echo ContohStatic::sapa();
echo "<br>";
echo ContohStatic::sapa();
echo "<br>";
echo ContohStatic::sapa();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "Perbedaan Static Keyword dengan membuat instansiasi atau object <br>";
echo "<hr>";
class ContohDataInstansiasi {
    public $data = 1;

    public function sapa(){
        return "hello world ". $this->data++ ." kali";
    }
    
}

$data1 = new ContohDataInstansiasi;
echo $data1->sapa();
echo "<br>";
echo $data1->sapa();
echo "<br>";
echo $data1->sapa();
echo "<br>";
echo "<hr>";
$data2 = new ContohDataInstansiasi;
echo $data2->sapa();
echo "<br>";
echo $data2->sapa();
echo "<br>";
echo $data2->sapa();
echo "<br>";

echo "<br>";
echo "<br>";
echo "<hr>";


class ContohStatic2 {
    public static $data=1;

    public static function sapa() {
        return "Hello world " . self::$data++ . " kali";
    }
}


$data1 = new ContohStatic2;
echo $data1->sapa();
echo "<br>";
echo $data1->sapa();
echo "<br>";
echo $data1->sapa();
echo "<br>";
echo "<hr>";
$data2 = new ContohStatic2;
echo $data2->sapa();
echo "<br>";
echo $data2->sapa();
echo "<br>";
echo $data2->sapa();
echo "<br>";


?>