<?php

class Base2 {
    protected $var;
    
    public function __construct($var) {
        $this->var = $var;
    }
}

class Derived2 extends Base2 {
    public function __construct($var) {
        $this->var = $var;
    }
}

$bs2 = new Base2("Какой-то текст");
$dr2 = new Derived2(35);

echo "<pre>";
//при указании неверной переменной выведет сообщение
// Notice:  Undefined variable: (неопределенная переменная)
print_r($bs2);
echo "<br>";
print_r($dr2);
echo "</pre>";
echo "<br>";
//echo $dr2->var; Cannot access protected property Derived2::$var

?>