<?php

// получаем текущее значение ограничения
$cache_limiter_fst = session_cache_limiter();
// ограничения кэша в public
session_cache_limiter('public');
// текущее значение ограничителя
$cache_limiter_snd = session_cache_limiter();

echo "ограничение на кэш изменено ".
"с $cache_limiter_fst на $cache_limiter_snd";

?>