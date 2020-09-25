<?php

class user {
    public function __construct($name, $password) {
        $this->name = $name;
        $this->password = $password;
        $this->referrer = $_SERVER['PHP_SELF'];
        $this->time = time();
    }
    
    public function __sleep() {
        $obj = clone $this;
        $obj->password = "";
        return $obj;
    }

    public function __wekeup() {
        $this->time = time();
    }

    

    public $name;
    public $password;
    // последняя посещённая страница
    public $referrer;
    // время авторизации
    public $time;
}

?>