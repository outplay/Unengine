-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 18 2012 г., 16:35
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `home`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `text`, `uid`, `date`) VALUES
(12, 'admin', 'aliaksandr_pankou@epam.com', 'Test comments', 5, '13 Dec  2012 18:52:05');

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text,
  `short_article` text,
  `full_article` text NOT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `title`, `short_article`, `full_article`, `data`) VALUES
(1, 'Article #1', 'The internet has changed a lot since HTML 4.01 became a standard in 1999.</ br>\r\n\r\nToday, some elements in HTML 4.01 are obsolete, never used, or not used the way they were intended to.', ' These elements are removed or re-written in HTML5.\r\n\r\nTo better handle today''s internet use, HTML5 includes new elements for better structure, better form handling, drawing, and for media content.', '0'),
(2, 'Article #2', 'HTML5 will be the new standard for HTML.\r\n\r\nThe previous version of HTML, HTML 4.01, came in 1999. The web has changed a lot since then.\r\n\r\n', 'HTML5 is still a work in progress. However, the major browsers support many of the new HTML5 elements and APIs.', '0'),
(3, 'Article #3', 'HTML5 is a cooperation between the World Wide Web Consortium (W3C) and the Web Hypertext Application Technology Working Group (WHATWG).\r\n', 'WHATWG was working with web forms and applications, and W3C was working with XHTML 2.0. In 2006, they decided to cooperate and create a new version of HTML.', '0'),
(4, 'Article #4', 'HTML5 is not yet an official standard, and no browsers have full HTML5 support.\r\n\r\nBut all major browsers (Safari, Chrome, Firefox, Opera, Internet Explorer) continue to add new HTML5 features to their latest versions.\r\n', 'But all major browsers (Safari, Chrome, Firefox, Opera, Internet Explorer) continue to add new HTML5 features to their latest versions.', '04 Dec  17:12:12'),
(5, 'Welcome!', 'Welcome to short article. Click Read Me to go from Full article.', 'Hi! This is full article text!', '12 Dec 17:12:10');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `title` varchar(32) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`title`, `owner`, `description`, `keywords`, `id`) VALUES
('Unengine', 'admin', 'Unengine- my php solution!', 'unengine, php, engine', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `perm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `perm`) VALUES
(12, 'test', 'test', '', '0'),
(11, 'admin', 'admin', '', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
