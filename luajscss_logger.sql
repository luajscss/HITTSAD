-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 08 2021 г., 15:48
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `luajscss_logger`
--

-- --------------------------------------------------------

--
-- Структура таблицы `selecter`
--
-- Создание: Мар 08 2021 г., 09:41
-- Последнее обновление: Мар 08 2021 г., 12:40
--

DROP TABLE IF EXISTS `selecter`;
CREATE TABLE `selecter` (
  `ip` text NOT NULL,
  `lasturl` text NOT NULL,
  `useragent` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `str_error`
--
-- Создание: Мар 08 2021 г., 07:05
-- Последнее обновление: Мар 08 2021 г., 12:47
--

DROP TABLE IF EXISTS `str_error`;
CREATE TABLE `str_error` (
  `ip` text NOT NULL,
  `lasturl` text NOT NULL,
  `useragent` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `v1`
--
-- Создание: Мар 08 2021 г., 09:41
-- Последнее обновление: Мар 08 2021 г., 12:46
--

DROP TABLE IF EXISTS `v1`;
CREATE TABLE `v1` (
  `ip` text NOT NULL,
  `lasturl` text NOT NULL,
  `useragent` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `v1_about`
--
-- Создание: Мар 08 2021 г., 07:07
-- Последнее обновление: Мар 08 2021 г., 12:46
--

DROP TABLE IF EXISTS `v1_about`;
CREATE TABLE `v1_about` (
  `ip` text NOT NULL,
  `lasturl` text NOT NULL,
  `useragent` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `v2`
--
-- Создание: Мар 08 2021 г., 09:52
-- Последнее обновление: Мар 08 2021 г., 12:46
--

DROP TABLE IF EXISTS `v2`;
CREATE TABLE `v2` (
  `ip` text NOT NULL,
  `lasturl` text NOT NULL,
  `useragent` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `v2_about`
--
-- Создание: Мар 08 2021 г., 07:09
-- Последнее обновление: Мар 08 2021 г., 12:47
--

DROP TABLE IF EXISTS `v2_about`;
CREATE TABLE `v2_about` (
  `ip` text NOT NULL,
  `lasturl` text NOT NULL,
  `useragent` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
