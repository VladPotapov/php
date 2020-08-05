<?php

interface a {
    const b = 'Константа интерфейса';
}

echo a::b;

//нельзя переопределять константу из интерфейса
/*class b implements a {
    const b = 'Константа класса';
}*/

?>