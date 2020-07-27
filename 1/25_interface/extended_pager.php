<?php

//интерфейсы как и классы могут наследоваться
interface pager {
    public function get_total();
    public function get_number();
    public function get_page_link();
    public function get_parametrs();
}

interface extended_pager extends pager {
    public function get_page();
}

class pager_class implements extended_pager {
    public function get_total() {
        //..
    }

    public function get_number() {
        //..
    }

    public function get_page_link() {
        //..
    }

    public function get_parametrs() {
        //..
    }

    public function get_page() {
        //..
    }
}

$pager_cls = new pager_class();

echo "<pre>";

print_r($pager_cls);

echo "</pre>";

?>