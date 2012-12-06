SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `text` text,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;



INSERT INTO `content` (`id`, `title`, `text`, `data`) VALUES
(1, 'Article #1', 'The internet has changed a lot since HTML 4.01 became a standard in 1999.</ br>\r\n\r\nToday, some elements in HTML 4.01 are obsolete, never used, or not used the way they were intended to. These elements are removed or re-written in HTML5.\r\n\r\nTo better handle today''s internet use, HTML5 includes new elements for better structure, better form handling, drawing, and for media content.', '0'),
(2, 'Article #2', 'HTML5 will be the new standard for HTML.\r\n\r\nThe previous version of HTML, HTML 4.01, came in 1999. The web has changed a lot since then.\r\n\r\nHTML5 is still a work in progress. However, the major browsers support many of the new HTML5 elements and APIs.', '0'),
(3, 'Article #3', 'HTML5 is a cooperation between the World Wide Web Consortium (W3C) and the Web Hypertext Application Technology Working Group (WHATWG).\r\n\r\nWHATWG was working with web forms and applications, and W3C was working with XHTML 2.0. In 2006, they decided to cooperate and create a new version of HTML.', '0'),
(4, 'Article #4', 'HTML5 is not yet an official standard, and no browsers have full HTML5 support.\r\n\r\nBut all major browsers (Safari, Chrome, Firefox, Opera, Internet Explorer) continue to add new HTML5 features to their latest versions.\r\n', '04 Dec  17:12:12');



CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usr` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `regIP` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `usr` (`usr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
