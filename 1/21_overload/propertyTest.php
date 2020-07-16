<?php

class PropertyTest {
    /** место хранения перегружаемых данных */
    private $data = array();

    /** перезагрузка не применяется к объявленным свойствам */
    public $declared = 1;

    /** перегрузка будет действовать только в не класса */
    private $hidden = 2;

    public function __set($name, $value) {
        echo "Установка  '$name' в '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo "подключение '$name'\n";

        if(array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace  = debug_backtrace();

        trigger_error(
            'Неопределённое свойство в __get(): '.$name.
            ' в файле '.$trace[0]['file'].
            ' на строке '.$trace[0]['line'], 
            E_USER_NOTICE);
        
        return null;
    }

    /** начиная с php 5.1.0 */
    public function __iset($name) {
        echo "Установленно ли '$name'?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        echo "Уничтожение '$name'\n";
        unset($this->data[$name]);
    }

    /**не магический метод, просто для примера */
    public function getHidden() {
        return $this->hidden;
    }
}

echo "<pre><br>";

$obj = new PropertyTest();
$obj->a = 1;

echo $obj->a."\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));

echo "\n";
echo $obj->declared."\n\n";
echo "закрытое свойство hidden:\n";
echo "Закрытые свойства видны внутри класса, поэтому __get() не используется...\n";
echo $obj->getHidden()."\n";
echo "Закрытые свойства не видны вне класса, поэтому __get() используется...\n";
echo $obj->hidden."\n";

echo "</pre><br>";

?>