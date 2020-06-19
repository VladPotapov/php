<?php

class Base5 {
    private $a = "private";
    protected $b = "protected";
    public $c = "public";
    static $d = "static";

    public function __construct() {
        $this->e = 'constructed';
    }

    public function __set($property, $value) {
        echo ' set '.$property.' = '.$value;
        $this->$property=$value;
    }

    public function __get($property) {
        echo ' get '.$property.'<br>';
        $this->$property = 'dynamic <br>';
        return $this->$property;
    }
}

class Heir_b5 extends Base5 {
    public function constructMe() {
        $this->e = 'Constructed2';
    }
}

class Heir_c5 extends Heir_b5 {
    public function __construct() {
        parent::ConstructMe();
    }
}

echo "<br>";
echo "<h2>base5.php</h2>";

$bs5 = new Base5();
echo "<br>";

$hr_b5 = new Heir_b5();
echo "<br>";
echo "Heir_b5:c = ".$hr_b5->c;
echo "<br>";
//сначала выполниться метод __get()
//потом только $hr_b5->d
echo "\nHeir_b5:d = ".$hr_b5->d;
echo "<br>";

$hr_c5 = new Heir_c5();
echo "<br>";

print_r($bs5);
echo "<br>";
print_r($hr_b5);
echo "<br>";
print_r($hr_c5);
echo "<br>";
echo "<br>";

print_r(Base5::$d);
echo "<br>";
print_r(Heir_b5::$d);
echo "<br>";
print_r(Heir_c5::$d);
echo "<br>";
echo "<br>";

echo  'Base5 class';
echo "<br>";
$R = new reflectionclass('Base5');
//отображает массив переменных
//указывая их статус (public, private и т.д.)
print_r($R->getdefaultproperties());
echo "<br>";
//показывает массив статических переменных
print_r($R->getstaticproperties());
echo "<br>";
?>