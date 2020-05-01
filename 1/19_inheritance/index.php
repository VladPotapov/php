<?php

require_once("base.php");
require_once("foo.php");
require_once("person.php");

$bobj = new Base();

echo "<pre>";
print_r($bobj);
print_r(get_class_methods($bobj));
echo "</pre>";

$dobj = new Derived();

echo "<pre>";
print_r($dobj);
print_r(get_class_methods($dobj));

$foo = new Foo();
$bar = new Bar();

$foo->printItem('baz');
$foo->printPHP();
$bar->printItem('baz');
$bar->printPHP();

$sotrudnik = new Person(89027608942);
// есле не указать телефон в дочернем классе 
// php выведит ошибку
// Fatal error:  Uncaught ArgumentCountError: Too few arguments to function Person::__construct()
$name = new Tom(24465);

echo "<br>";

echo "<pre>";
var_export($sotrudnik);
echo "<br>";
var_export($name);
echo "<br>";
echo "</pre>";

echo "<pre>";
print_r($sotrudnik);
echo "<br>";
print_r($name);
echo "<br>";
echo "</pre>";

echo $sotrudnik->talk();
echo "<br>";
echo $name->talk();
echo "<br>";

//Base2............................
require_once("base2.php");

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
echo $dr2->var;

?>