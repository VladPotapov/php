<?php

interface a {
    const b = 'Константа интерфейса';
}

echo a::b;

class b implements a {
    const b = 'Константа класса';
}

?>