-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 01 2016 г., 13:12
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `autor` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `autor`) VALUES
(1, 'Кролики', 'Кролики - это не только ценный мех', 'Автор_1'),
(2, 'Ёжики', 'Общаются ежи при помощи свиста, но разозлившись, начинают забавно ворчать.', 'Автор_2'),
(3, 'Белки', 'Белка способна за неделю съесть пищу, весящую столько же, сколько и она сама.', 'Автор_3'),
(4, 'Панда', 'Гигантскую панду называют бамбуковым медведем.', 'Автор_4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
