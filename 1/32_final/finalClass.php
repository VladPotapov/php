<?php

final class finalClass {
    public function __constructor() {}
}
/* Class myClass may not inherit from final class (finalClass)
class myClass extends finalClass {}
*/

$obj1 = new finalClass;
/* Класс "myClass" не найден
$obj2 = new myClass;
*/

?>