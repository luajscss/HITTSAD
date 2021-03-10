<?php
include_once ('../cdn/debug.php');

// Данные для подключения к sql базе

$servername = "localhost";
$database = "database";
$username = "login";
$password = "password";

// Данные для подключения к sql базе



// Основные настройки

$enable           = true;        // Включение/Отключение сайта
$connection_text  = false;      // Показывать подключения к sql?
$mysql            = false;      // Включение/Отключение mysql логов
$debug            = false; 	  // Полный лог ошибок в меню (v1/v2)

$background       = 'https://lastcorn.cf/styles/vertiforo/img/pattern.png';    // Здесь стоит задний фон для страниц
$background_vers  = '1';    // Версия для выбора растяжения фона (1 - 2)

// Основные настройки



// Настройки аккаунтов (Страница about) (Только для v2)

$account_name_1 = "ITACHI";
$account_discord_1 = 'ɪᴛᴀᴄʜɪ#5218';
$account_job_1 = "Разработчик ПО";
$account_sound_1 = "https://hittsad.ml/cdn/v2/1.mp3";
$account_background_1 = "https://hittsad.ml/cdn/v2/img/Itachi.png";

$account_name_2 = "Errda";
$account_discord_2 = "!Errda#4982";
$account_job_2 = "Дизайнер";
$account_sound_2 = "https://hittsad.ml/cdn/v2/2.wav";
$account_background_2 = "https://hittsad.ml/cdn/v2/img/Errda.png";

$account_name_3 = "Senpai";
$account_discord_3 = "Senpai#3111";
$account_job_3 = "Front-End Разработчик";
$account_sound_3 = "https://hittsad.ml/cdn/v2/3.mp3";
$account_background_3 = "https://hittsad.ml/cdn/v2/img/Senpai.png";

// Настройки аккаунтов (Страница about) (Только для v2)



// Переменные для sql ( /404/index.php ) ( v1/index.php | v1/about/index.php ) ( v2/index.php | v2/about/index.php )

$ip = $_SERVER["REMOTE_ADDR"];
$lasturl = $_SERVER["HTTP_REFERER"];
$useragent = $_SERVER["HTTP_USER_AGENT"];
$data = date("Y-m-d H:i:s");

// Переменные для sql ( /404/index.php ) ( v1/index.php | v1/about/index.php ) ( v2/index.php | v2/about/index.php )
?>