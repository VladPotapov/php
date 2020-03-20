<?php

require_once("cls.php");

$obj = new Cls();
$obj->num = 10;

//ничего не покажет
//$bool = $obj->__isset($obj->num);

var_dump($obj->num);
echo "<br>";

if(isset($obj->num))
{
    echo "yes";
}
else {
    echo "none";
}

echo "<br>";

/*Fatal error: Uncaught Error: Call to undefined method Cls::__isset()
if($obj->__isset($obj->num)) {
    echo "__isset yes";
}
else {
    echo "__isset none";
}
*/

public SolrDocument::__isset(string $obj->num) : bool


?>