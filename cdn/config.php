<?php
include_once ('../cdn/debug.php');




// Основные настройки

$enable           = true;        // Включение/Отключение сайта
$connection_text  = false;      // Показывать подключения к sql?
$mysql            = false;     // Включение/Отключение mysql логов
$debug            = false; 	  // Полный лог ошибок в меню (v1/v2)

$background       = 'https://lastcorn.cf/styles/vertiforo/img/pattern.png';    // Здесь стоит задний фон для страниц
$background_vers  = '1';    // Версия для выбора растяжения фона (1 - 2)

// Основные настройки




// Данные для подключения к sql базе

$servername = "localhost";
$database = "luajscss_logger";
$username = "luajscss_logger";
$password = "3UkJmT&r";

// Данные для подключения к sql базе




// Переменные для sql ( /404/index.php ) ( v1/index.php | v1/about/index.php ) ( v2/index.php | v2/about/index.php )

$ip = $_SERVER["REMOTE_ADDR"];
$lasturl = $_SERVER["HTTP_REFERER"];
$useragent = $_SERVER["HTTP_USER_AGENT"];
$data = date("Y-m-d H:i:s");

// Переменные для sql ( /404/index.php ) ( v1/index.php | v1/about/index.php ) ( v2/index.php | v2/about/index.php )
?>