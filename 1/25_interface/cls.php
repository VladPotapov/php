<?php

interface pager {
    //..
}

interface print_list {
    //..
}

interface document {
    //..
}

//наследование нескольких интерфейсов
class cls implements pager, print_list, document {
    //..
}

?>