<?php

define("DEBUG", 1); // 1 - показать ошибки, 0 - скрыть ошибки
define("ROOT", dirname(__DIR__)); // указывает на корень сайта
define("WWW", ROOT . '/public'); // указывает на публичную папку сайта
define("APP", ROOT . '/app'); // указывает на папку App
define("CORE", ROOT . '/vendor/phpstore/core'); // указывает в ядро сайта
define("LIBS", ROOT . '/vendor/phpstore/core/libs'); // библиотеки сайта
define("CACHE", ROOT . '/tmp/cache'); // кэш сайта
define("CONF", ROOT . '/config'); // конфигурация сайта
define("LAYOUT", 'watches'); // шаблон сайта по умолчанию

// http://phpstore.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://phpstore.loc/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://phpstore.loc
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';