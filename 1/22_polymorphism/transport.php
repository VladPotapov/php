<?php

abstract class Transport {
    //вид транспорта
    //воздушный, наземный, водный
    abstract function mode_of_transport();

    //автомобиль, грузовик и т.д.
    abstract function category();
    abstract function name();
    abstract function speed();

    //вид двигателя
    abstract function engine_type();
    
    //объём двигателя
    abstract function engine_volume();
}

?>