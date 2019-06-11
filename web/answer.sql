-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-11 16:03:00
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php`
--

-- --------------------------------------------------------

--
-- 資料表結構 `answer`
--

CREATE TABLE `answer` (
  `ID` int(20) NOT NULL,
  `answer` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `answer`
--

INSERT INTO `answer` (`ID`, `answer`) VALUES
(21, '12'),
(21, 'twoooo'),
(21, '123'),
(21, '我也有問題'),
(21, '我也有問題'),
(21, '我也有問題');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `answer`
--
ALTER TABLE `answer`
  ADD KEY `ID` (`ID`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `comment` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
