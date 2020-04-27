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

$sotrudnik = new Person();
$name = new Tom();

echo "<br>";

echo "<pre>";
var_export($sotrudnik);
echo "<br>";
var_export($name);
echo "<br>";
echo "</pre>";



?>