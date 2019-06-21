-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-12 07:55:36
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
-- 資料表結構 `board`
--

CREATE TABLE `board` (
  `contenct` longtext COLLATE utf8_unicode_ci NOT NULL,
  `href` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `board`
--

INSERT INTO `board` (`contenct`, `href`, `ID`) VALUES
('108學年度第1學期學生註冊須知。', 'http://www.nuk.edu.tw/files/14-1000-20320,r112-1.php?Lang=zh-tw', 12),
('107學年度第2學期休(退)學辦理完成截止時間及相關說明。', 'http://www.nuk.edu.tw/files/14-1000-20243,r112-1.php?Lang=zh-tw', 13),
('2019暑假兒英(魔法保姆麥克菲)', 'http://www.nuk.edu.tw/files/14-1000-11293,r112-1.php?Lang=zh-tw', 14),
('2019暑期外語學習密集班招生中', 'http://www.nuk.edu.tw/files/14-1000-22542,r112-1.php?Lang=zh-tw', 15),
('2019夏季英(外)語文進修班陸續開課中~', 'http://www.nuk.edu.tw/files/14-1000-6784,r112-1.php?Lang=zh-tw', 16),
('2019外籍人士華語進修班！(2019 Mandarin Class)', 'http://www.nuk.edu.tw/files/14-1000-17386,r112-1.php?Lang=zh-tw', 17);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`ID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
