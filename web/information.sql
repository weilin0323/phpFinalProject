-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-09 03:02:14
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
-- 資料表結構 `information`
--

CREATE TABLE `information` (
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `credit` int(5) NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `book` text COLLATE utf8_unicode_ci NOT NULL,
  `objectives` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `information`
--

INSERT INTO `information` (`subject`, `name`, `credit`, `category`, `book`, `objectives`) VALUES
('經濟學', '楊書成', 3, '必修', '陳正倉、林惠玲、林建甫、林世昌(2018)，經濟學-理論與實際，雙葉書廊。', '經濟學絕對不是深奧的學問，只要充分了解供需所形成的市場機制及成本效益原則，就能解釋日常所發生的一切食衣住行育樂活動。這門課希望透過較為生活化的例子及輕鬆的上課方式，為同學介紹各種經濟理論和原則，並輔以極少量的數學運算和理論解說，讓同學對經濟學能有通盤性的了解。\r\n這門課採用中文教科書，但仍需閱讀CNN的商業文章(http://money.cnn.com/INTERNATIONAL/)，並於期末上台報告。'),
('行銷管理', '王凱', 3, '必修', '教科書：曾光華著，行銷管理：理論解析與實務應用，前程文化出版\r\n\r\n參考書：林建煌，行銷管理，華泰文化出版', '網路環境的快速發展，使得行銷活動透過網路媒體更受到挑戰。同時，對於實體與線上環境中的消費者行為模式，更增加了企業行銷的挑戰性。本課程即欲針對行銷管理的主題，透過上課講述、課堂討論、在地實踐行銷專案（小組專題）設計及執行等方式，共同探討，期望協助同學瞭解行銷管理之原理，以及相關管理、技術、消費者等議題之發展與影響。\r\n\r\n本課程亦將透過實際案例的操作與討論，使同學在理論之外，學習行銷活動的分析與設計經驗。'),
('網頁程式設計', '丁一賢', 3, '必修', '教科書:新觀念 PHP7+MySQL+AJAX 網頁設計範例教本 第五版, 陳會安, 旗標\r\n\r\n參考書:PHP函數參考大全，明日科技，文魁出版社，ISBN：9789862041925', '網頁程式設計為資訊相關科系學生必須具備與厚植的技能之ㄧ\r\n在此課程中將以PHP程式語言為主，並輔以網頁設計及網站架設以及資料庫等概念，期望學生在學習本課程之後，能夠掌握PHP網頁程式設計的技巧。\r\n學生在修習此課程後，能具有獨立網頁程式專案開發之基本能力，因此本課程將與資料庫課程舉辦期末聯合專題報告，期望學生可以融合兩個科目的所學，於期末專題中有良好呈現。\r\n本課程培養學生達成以下核心能力：\r\n資訊基本能力\r\n決策問題解決能力\r\n應用整合與系統開發能力\r\n本課程培養學生達成以下基本素養：\r\n資訊素養與資訊倫理'),
('Python程式設計', '蕭漢威', 3, '選修', 'Handout', 'Python程式設計這一課是為高雄大學資訊管理學系所設計的進階資訊技術課程，教學內容以簡介開放原始碼(Open Source)資源中經常被應用於多領域的 Python 程式語言為核心，並介紹其於相關網路應用領域的程式設計基礎技術為主要目標。\r\n\r\nPython 具易學易用之特性，適合於資訊技術進階的操作，並且當前有許多重要的網路應用服務也以 Python 為程式開發工具，並且 Python 程式語言也具跨不同作業系統平台與物件導向的特性，希望能透過這門課的介紹讓資訊管理學系高年級的學生能具備更優秀的應用工具程式。'),
('統計學(二)', '吳建興', 3, '必修', 'Text book: Bowerman, B.L. & O’Connell, R.T., Business Statistics in Practice, McGraw Hill, 8th edition, 2017.', 'Students are expected to know how to collect, summarize, and analyze data for decision support. Based on the Statistics(I), this course (Statistics (II)) focuses on inferential statistics learning how to derive information from collected data for business decision support'),
('資料結構', '楊新章', 3, '必修', 'Fundamentals of Data Structure in C, Second Edition by Ellis Horowitz, Sartaj Sahni, and Susan Anderson-Freed Silicon Press, 2008 開發書局代理', '教導學生有關程式設計所用資料結構之概念及其運用。'),
('Web 前端開發', '廖洧杰', 3, '選修', '', '1.能夠不倚賴前端Framework的網頁排版能力(sublime、DIV+CSS、Responsive) \r\n2.了解基礎native javascript、jQuery，可使用jQuery Plugin管理動畫效果 \r\n3.掌握Ajax/JSON技術，進以實踐single page application(SPA) \r\n4.完成codeschool / codecademy HTML/CSS、JS線上題目\r\n5.實作網站Wireframe > mockup > prototype規劃細節 \r\n6.實際投入參與過社群聚會、技術研討會，了解業界生態 \r\n7.懂得使用線上Paas服務，快速實踐最小MVP服務(Github、Heroku)'),
('企業管理', '郭英峰', 3, '必修', '主要教材：\r\n老師自編投影片\r\n參考教材： \r\n1.方至民、曾志弘(2018)，管理學：理論探索與實務應用 2.鄭紹成(2015)，企業管理：全球導向的運作，前程文化 \r\n，前程文化 \r\n3.林孟彥, 林均妍譯，Robbins, S. P. and Coulter, M. (2015)，管理學，華泰文化 \r\n指定閱讀書籍(必讀)： \r\n1.Blanchard, K. and Bowles, S.著，郭菀玲譯(1998)，共好，哈佛管理 \r\n2.王利芬, 李翔(2015)，穿布鞋的馬雲：阿里巴巴成功的27個關鍵時刻，天下文化', '因應全球化的競爭，企業界面臨國際化之必然趨勢，管理人才的培育與企業管理課程愈來愈重要。本課程主要在介紹企業管理的基本概念，藉由相關理論的講授與實務案例的探討，使學生了解企業的本質、意義、整體運作及管理技巧，以便學生日後能有效利用此企業管理的知識，協助企業提升營運績效。'),
('專案管理', '趙建雄', 3, '必修', '使用教材：今年將採新教材，將於課堂上說明。 暫定 Project Management A system approach to planning, scheduling, and controlling 9th ed. by Harold Kerzner (Wiley) 參考教材： 1. Project Management the Management Process 2nd ed. by Clifford F. Gray & Erik W. Larson (Mc Graw Hill) 2. Project Management A system Approach to Planning, Scheduling, and Controlling 8th ed. by Harold Kerzner (Wiley) 參考資料： 1. Project Management (David I. Cleland and Lewis R. Ireland)) 2. Effective Project Management (Robert K. Wysocki) 3. Project Management Engineering, Technology, and Implementation (Avraham Shtub) 4. Strategy Maps (Robert S. Kaplan) 5. 課堂案例講義', '一個成功之專案管理者，必需掌握其開發專案之各項變數，如時程、預算、品質及人力等各項資源，並在客觀的環境因素下將有限的資源與人力導入最關鍵之管理行動中以收劍及履及，事半功倍之效。本課程之規劃主要在介紹專案管理之觀念與實行方法，期能以淺顯易懂的方式來介紹管理理論，並採問題導向式學習PBL (Problem-Based Learning or Problem-Based Practices)及Case Study，鼓勵學員參與，培養學員獨力思考、搜尋資料解決問題的能力，逐步將專案管理的精神灌輸與學員，藉由案例分析與上機實作專案管理軟體以達到理論與實務配合。 本課程之最終目標即希望學員能藉課程之學習而步入專案管理的殿堂，成為e世代優異之專案管理者或經理人。 本課程培養學生達成以下核心能力： 資訊基本能力 基礎管理能力 決策問題解決能力 應用整合與系統開發能力 資訊運用的知識力與判斷力 職場需求為導向的專業能力 創新思維與主動學習的能力 本課程培養學生達成以下基本素養： 資訊素養與資訊倫理 社會倫理及世界公民責任 具備當代思維與國際視野 社會關懷及世界公民責任 當代思維與國際視野');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
