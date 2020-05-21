<?php

class Employee {
    public $Photo;
    public $Surname;
    public $Name;
    public $Patronymic;
    public function __construct($photo, $surname, $name, $patronymic, $age) {
        //не делать отступ от this->
        $this->Photo = $photo;  //фото
        $this->Surname = $surname;  //Фамилию
        $this->Name = $name;    //Имя
        $this->Patronymic = $patronymic;    //Отчество
        $this->age = $age;  //возраст
    }

    public function age_get()
    {
        return $this->age;
    }

    public function age_set($val)
    {
        $val = intval($val);

        if($val >= 18 && $val <= 65)
        {
            $this->age = $val;
            return true;
        }
        else return false;
    }

    class Employee {
        //фамилия
        public $surname;
        public $name;
        public $patronymic;
        public $photo
        private $age;
        //адресс
        //улица
        private $street
        //дом
        //корпус
        //квартира
    }

    /**
     *  адрес
     *      улица
     *      дом
     *      корпус
     *      квартира
     *  контакты
     *  офис, (координаты х, у)
     *  професия
     *      стаж
     *      репутация
     *          уровень професионализма
     *          характеристики
     *  зарплата, премия
     *      включает в себя
     *      уровень професионализма (a, b, c, d)
     *      проекты
     *          уровень
     *          количество
     *   
     * стаж и репутация
     * характеристика
     */

     public function __destruct() {
         unset($Photo);
         unset($Surname);
         unset($Name);
         unset($Patronymic);
     }
}

private $age;
?>