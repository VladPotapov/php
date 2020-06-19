<?php

class Base3 {
    private $var;
    protected function __construct($var) {
        $this->var = $var;
    }
}

class Derived3 extends Base3 {
    public function __construct($var) {
        parent::__construct($var);
    }
}

//$bs3 = new Base3(); Call to protected Base3::__construct() from invalid context
$dr3 = new Derived3(50);
echo "<pre>";
print_r($dr3);
echo "<br>";
echo "</pre>";

echo "<h2>Много уровневое наследование</h2>";


?>