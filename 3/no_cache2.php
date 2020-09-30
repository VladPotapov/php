<?php

// любая дата в прошлом
header("Expires: Mon, 22 May 1995 02:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

?>