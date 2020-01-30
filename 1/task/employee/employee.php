<?php

class Employee {
    public $Foto;
    public $Surname;
    public $Name;
    public $Patronymic;
    public function __construct($foto = "", $surname = "", $name = "", $patronymic = "") {
        //фото
        //не делать отступ от this->
        $this->Foto = $foto;

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
}

?>