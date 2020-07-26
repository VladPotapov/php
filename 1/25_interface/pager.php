<?php

interface page {
    public function get_total();
    public function get_number();
    public function get_page_link();
    public function get_parametrs();
}

class pager_sample implements pager {
    public function get_total() {
        //...
    }

    public function get_number() {
        //...
    }

    public function get_page_link() {
        //..
    }

    public function get_parametrs() {
        //..
    }
}

class pager_example implements pager {
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
}

?>