-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-11 14:11:47
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `phpproject`
--

-- --------------------------------------------------------

--
-- 資料表結構 `classevaluation`
--

CREATE TABLE `classevaluation` (
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `classyear` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `department` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `score` int(10) NOT NULL,
  `score2` text COLLATE utf8_unicode_ci NOT NULL,
  `hw` text COLLATE utf8_unicode_ci NOT NULL,
  `other` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `classevaluation`
--

INSERT INTO `classevaluation` (`subject`, `classyear`, `department`, `name`, `score`, `score2`, `hw`, `other`) VALUES
('經濟學', '106-1', '資管系', '楊書成', 5, '20%出席\r\n30%期中考\r\n30%期末考\r\n20%期末報告\r\n', '老師很多考題都會從課本裡的習題出，讀熟課本內容很重要！其他題目也不會太艱澀，只要有讀書及格並不難哦\r\n', ''),
('網頁程式設計', '106-2', '資管系', '丁一賢', 5, '10%作業\r\n30%期中考\r\n30%期末考\r\n30%期末專題報告\r\n', '作業都是老師當週教的內容，我們這屆期中期末出蠻多作業練習過的，有去聽課、寫作業要得高分應該不難', '丁丁很可愛呦，上他的課很療癒٩(๑❛ᴗ❛๑)۶'),
('經濟學', '107-1', '資管系', '楊書成', 5, '20%出席\r\n30%期中考\r\n30%期末考\r\n20%期末報告\r\n', '課本的習題大概佔考卷的20%，建議先從課本開始下手再讀其他資料', '老師上課很認真，這門課很值得修！'),
('網頁程式設計', '106-2', '資管系', '丁一賢', 5, '10%作業\r\n30%期中考\r\n30%期末考\r\n30%期末專題報告\r\n', '期中期末出很多跟作業有關的，前幾年的考古可能也會出，建議考試前練習作業跟考古題', '丁丁的上課方式很輕鬆~'),
('網頁程式設計', '106-2', '資管系', '丁一賢', 5, '10%作業\r\n30%期中考\r\n30%期末考\r\n30%期末專題報告\r\n', '考前練習作業和考古很重要！！！', ''),
('Python程式設計', '107-2', '資管系', '蕭漢威', 5, '30%作業\r\n30%期中報告\r\n40%期末報告\r\n', '老師幾乎每週都會出作業，但都不會太難，而且這門課沒有考試喔！', '有問題的時候，老師都會很仔細的講解程式碼，也不會一開始就交太艱澀的東西，很推薦這門課！'),
('Python程式設計', '105-2', '資管系', '蕭漢威', 5, '30%作業\r\n30%期中報告\r\n40%期末報告\r\n', '老師每次出的作業都是當週教的內容', '對程式有興趣但還沒什麼經驗的同學，很推薦修這門課，老師會一步一步來，可以學到一些程式的基礎，而且學習過程中也不會有太大壓力'),
('Python程式設計', '106-2', '資管系', '蕭漢威', 5, '30%作業\r\n30%期中報告\r\n40%期末報告\r\n', '期中報告會要介紹Python相關套件，期末會把期中用的套件寫的更完整，\r\n題目可以自己決定\r\n', '蠻推薦的一門課，老師教的內容不會到太難，有興趣的同學可以修修看'),
('行銷管理', '107-1', '資管系', '王凱', 5, '35%課堂參與+作業+小考\r\n20%個人品牌行銷\r\n20%小組期末作業\r\n25%期末考\r\n', '期中有一個個人行銷的作業，老師記不記得你很重要，有機會回答問題時也要多舉手發言，印象分數佔蠻重的', '老師對於專業領域的知識很充足，會講解很多實例，能學到很多相關知識'),
('行銷管理', '106-1', '資管系', '王凱', 5, '35%課堂參與+作業+小考\r\n10%個人品牌行銷\r\n25%小組期末作業\r\n30%期末考\r\n', '課堂發言很重要，可以加很多分，期末考會考到一些上課講過的例子，上課記得認真聽', ''),
('經濟學', '105-1', '資管系', '楊書成', 5, '20%出席\r\n30%期中考\r\n30%期末考\r\n20%期末報告\r\n', '阿就課本習題會佔一部分', 'lalalalaalalalalaalalala'),
('經濟學', '106-1', '資管系', '楊書成', 5, '20%出席\r\n30%期中考\r\n30%期末考\r\n20%期末報告\r\n', '課本裡的習題很重要！\r\n課本裡的習題很重要！\r\n課本裡的習題很重要！\r\n', '很重要所以說三遍'),
('經濟學', '105-1', '資管系', '楊書成', 5, '20%出席\r\n30%期中考\r\n30%期末考\r\n20%期末報告\r\n', '', '很喜歡書成老師上的課，很好玩!!'),
('網頁程式設計', '106-2', '資管系', '丁一賢', 5, '10%作業\r\n30%期中考\r\n30%期末考\r\n30%期末專題報告\r\n', '記得練習期中期末考古和作業，考題都在裡面惹', '我愛丁丁~~'),
('網頁程式設計', '105-2', '資管系', '丁一賢', 5, '10%作業\r\n30%期中考\r\n30%期末考\r\n30%期末專題報告\r\n', '秘密ㄏㄏ', 'yoyoyoyoyoyoyoyo吃肉囉');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
