<?php

interface a {
    public function foo();
}

interface b extends a {
    public function baz(Baz $baz);
}

//сработает
class c implements b {
    public function foo() {
        //..
    }

    public function baz(Baz $baz) {
        //..
    }
}

//не сработает (выдаст фатальную ошибку)
/*class d implements b {
    public function foo() {
        //..
    }

    public function baz(Foo $foo) {
        //..
    }
}*/

?>