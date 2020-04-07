<?php

class Message {
    public function show_message() {
        echo "Hello world";
    }
}

class Dannie {
    //закрытые члены
    private $phone;

    public function get_phone() {
        return $this->phone;
    }

    public function set_phone($val) {
        $this->phone = $val;
        return true;
    }

    public function get_full_info() {
        return "{$this->get_phone()}";
    }
}

?>