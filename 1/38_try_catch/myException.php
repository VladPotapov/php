<?php

class MyException extends Exception{}

class Test {
    public function testing() {
        try {
            try {
                throw new MyException("foo!!!");
            }
            catch (MyException $e) {
                // повторный выброс исключения
                throw $e;
            }
        }
        catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

$foo = new Test;
// показывает строку и количество символов в ней
$foo->testing();

?>