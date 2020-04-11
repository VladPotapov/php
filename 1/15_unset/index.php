<?php

require_once("cls.php");

$obj = new Cls();
$obj->name = "Новое свойство класса";

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

unset($obj->name);  //delete name


$foo = 'bar';

echo $foo;
echo "<br>";

$obj->destroy_foo();

echo $foo;
echo "<br>";

$obj->foo = 'bar 2';

echo $obj->foo;
echo "<br>";

$obj->destroy_foo();

echo $obj->foo;
echo "<br>";

$doo = 'super star';
echo $doo;
echo "<br>";

$obj->destroy_doo();

//echo $doo;  Notice: Undefined variable: doo if (name file)
echo "<br>";


$bar = "somareBar";
echo $bar;
echo "<br>";

$obj->destroy_bar($bar);

echo $bar;
echo "<br>";

$obj->destroy_pls();
$obj->destroy_pls();
$obj->destroy_pls();
echo "<br>";

$foo = 1;
$foo1 = "2";
$foo2 = "string";
$foo3 = true;

echo $foo ."<br>";
echo $foo1 ."<br>";
echo $foo2 ."<br>";
echo $foo3 ."<br>";
echo "<br>";

unset($foo);
unset($foo1, $foo2, $foo3);

/**Notice: Undefined variable: foo, foo1, foo2, foo3 */
/*echo $foo ."<br>";
echo $foo1 ."<br>";
echo $foo2 ."<br>";
echo $foo3 ."<br>";
echo "<br>";*/

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

?>