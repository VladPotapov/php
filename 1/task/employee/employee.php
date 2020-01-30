<?php

class Employee {
    public $Photo;
    public $Surname;
    public $Name;
    public $Patronymic;
    public function __construct($photo = "", $surname = "", $name = "", $patronymic = "") {
        //фото
        //не делать отступ от this->
        $this->Photo = $photo;

        //Фамилию
        $this->Surname = $surname;

        //Имя
        $this->Name = $name;

        //Отчество
        $this->Patronymic = $patronymic;
    }

    /**
     *  дата рождения
     *  адрес, контакты
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

?>