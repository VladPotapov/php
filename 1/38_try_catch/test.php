<?php

function test() {
    try {
        new Exception('foo');
    }
    catch(Exception $e) {
        return 'catch';
    }
    finally {
        return 'finally';
    }
}

$obj = test();

echo $obj;

?>