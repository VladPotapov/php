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
//echo $dr2->var; Cannot access protected property Derived2::$var

//Base3-------------------------------
require_once("base3.php");
//$bs3 = new Base3(); Call to protected Base3::__construct() from invalid context
$dr3 = new Derived3(50);
echo "<pre>";
print_r($dr3);
echo "<br>";
echo "</pre>";

echo "<h2>Много уровневое наследование</h2>";

require_once("base4.php");
$c = new C();
$b = new B();

echo $c->name." B = ".$b->get_age()." C = ".$c->get_age();
/**
 * Cannot access protected property (C::$age, B::$age)
 * echo $c->age
 * echo $b->age
 */

 require_once("base5.php");

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
 print_r($hr_b5);
 print_r($hr_c5);
?>