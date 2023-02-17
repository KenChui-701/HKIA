-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 05 月 30 日 19:03
-- 伺服器版本： 5.7.29-log
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `exchange`
--

CREATE TABLE `exchange` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `exchange`
--

INSERT INTO `exchange` (`ID`, `Name`, `Value`) VALUES
(1, 'USD', 7.8),
(2, 'CNY', 0.89),
(3, 'EUR', 8.7),
(4, 'JPY', 0.07),
(5, 'GBP', 10.1),
(6, 'MOP', 0.97),
(7, 'AUD', 5.1615);

-- --------------------------------------------------------

--
-- 資料表結構 `newspaper`
--

CREATE TABLE `newspaper` (
  `email` char(255) NOT NULL,
  `phone` int(8) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `question`
--

CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `Name` char(255) NOT NULL,
  `answer` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `question`
--

INSERT INTO `question` (`ID`, `Name`, `answer`) VALUES
(1, 'How can I contant you?', 'You can call 12345678'),
(2, 'Where I can find your company', 'You go to 32/F Sing Wah Hse, Fanling NT'),
(3, 'Service is free?', 'Yes all free');

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `dataid` char(10) NOT NULL,
  `name` char(30) NOT NULL,
  `phone` int(8) DEFAULT NULL,
  `birth` char(30) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `password` char(10) NOT NULL,
  `userid` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `record`
--

INSERT INTO `record` (`dataid`, `name`, `phone`, `birth`, `gender`, `password`, `userid`) VALUES
('1', 'may', 12345678, '12/9/1995', 'men', 'password', '1'),
('2', 'ken', 17645678, '5/9/1995', 'men', '12345678', '2'),
('3', 'simon', 47589607, '23/4/2001', 'woman', 'qwerty', '3');

-- --------------------------------------------------------

--
-- 資料表結構 `stock`
--

CREATE TABLE `stock` (
  `stockid` int(5) NOT NULL,
  `price` float NOT NULL,
  `bid` float NOT NULL,
  `ask` float NOT NULL,
  `open` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `stock`
--

INSERT INTO `stock` (`stockid`, `price`, `bid`, `ask`, `open`) VALUES
(1, 30, 30.2, 29, 31),
(2, 3, 3.5, 3.44, 3.09);

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--

CREATE TABLE `test` (
  `dataid` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `t_user`
--

INSERT INTO `t_user` (`id`, `name`, `password`) VALUES
(215, 'sion', 'fds'),
(216, '\'\'', '\"1or1'),
(217, 'simon', 'simon'),
(218, 'simon', 'simon'),
(219, 'simon', 'simon'),
(220, 'simon', 'simon'),
(221, 'simon', 'simon'),
(222, 'simon', 'simon'),
(223, 'simon', 'simon'),
(224, 'simon', 'simon'),
(225, 'simon', 'simon'),
(226, 'simon', 'simon'),
(227, 'gg', 'gg'),
(229, ';', ';'),
(230, '@@', '@@'),
(231, 'ff', 'simon'),
(232, 'ss', 'ss'),
(233, 'ss', 'ss'),
(234, 'ss', 'ss'),
(235, 'ss', 'ss'),
(236, 'ss', 'ss'),
(237, 'ss', 'ss'),
(238, 'ss', 'ss'),
(239, 'May', 'asd'),
(240, 'May', 'asd'),
(241, 'May', 'asd'),
(242, 'sa', '0'),
(243, '``', '``'),
(244, 'May', 'asd'),
(245, 'May', '1232'),
(246, 'May', 'asd'),
(247, 'May', 'asd'),
(248, 'May', 'asd'),
(249, 'May', 'asd'),
(250, '@@', '@@'),
(251, '123', '0'),
(252, 'May', 'asd'),
(253, 'May', 'asd'),
(255, 'asd', '123123'),
(258, 'asd', '123123'),
(259, 'May', 'asd'),
(260, 'May', 'asd'),
(261, 'May', 'asd'),
(262, 'May', 'asd'),
(263, '\" or \"\"=\"', '\" or \"\"=\"'),
(264, 'May', 'asd'),
(265, 'May', 'asd'),
(266, 'May', 'asd'),
(267, 'May', 'asd'),
(268, 'May', 'asd'),
(269, 'May', 'asd'),
(270, 'asd', '123123'),
(271, 'qwe', '453'),
(272, 'asd', '123123'),
(273, 'asd', '123123'),
(274, 'May', 'asd'),
(275, 'asd', '123123'),
(276, 'May', 'asd'),
(277, 'May', 'asd'),
(278, 'May', 'asd'),
(279, 'May', 'asd'),
(280, 'May', 'asd'),
(281, 'May', 'asd'),
(282, 'May', 'asd'),
(283, 'May', 'asd'),
(284, 'May', 'asd'),
(285, 'May', 'asd'),
(286, 'May', 'asd'),
(287, 'May', 'asd'),
(288, 'May', 'asd'),
(289, 'May', 'asd'),
(290, 'May', 'asd'),
(291, 'May', 'asd'),
(292, 'May', 'asd'),
(293, 'May', 'asd'),
(294, 'May', 'asd'),
(295, 'May', 'asd'),
(296, 'May', 'asd'),
(297, 'May', 'asd'),
(298, 'May', 'asd'),
(299, 'ken', 'asd'),
(300, 'ken', 'asd'),
(301, 'ken', 'asd'),
(302, 'ken', 'asd'),
(303, 'ken', 'asd'),
(304, 'ken', 'asd'),
(305, 'ken', 'asd'),
(306, 'May', 'asd'),
(307, 'May', 'asd'),
(308, 'May', 'asd'),
(309, 'May', 'asd'),
(310, 'May', 'asd'),
(311, 'May', 'asd'),
(312, 'May', 'asd'),
(313, 'May', 'asd'),
(314, 'May', 'asd'),
(315, 'May', 'asd'),
(316, 'May', 'asd'),
(317, 'May', 'asd'),
(318, 'May', 'asd'),
(319, 'May', 'asd'),
(320, 'May', 'asd'),
(321, 'May', 'asd'),
(322, 'May', 'asd'),
(323, 'May', 'asd'),
(324, 'May', 'asd'),
(325, 'May', 'asd'),
(326, 'May', '123'),
(327, 'May', '123'),
(328, 'as', 'as'),
(329, 'May', 'asd'),
(330, 'May', 'asd'),
(331, 'May', 'asd'),
(332, 'May', 'asd'),
(333, 'May', 'asd'),
(334, 'asd', '123123'),
(335, 'asd', 'asd'),
(336, 'May', 'asd'),
(337, 'May', 'asd'),
(338, 'May', 'asd'),
(339, 'May', 'asd'),
(340, 'May', 'asd'),
(341, 'May', 'asd'),
(342, 'May', 'asd'),
(343, 'May', 'asd'),
(344, 'May', 'asd'),
(345, 'May', 'asd'),
(346, 'May', 'asd'),
(347, 'May', 'asd'),
(348, 'May', 'asd'),
(349, 'May', 'asd'),
(350, 'May', 'asd'),
(351, 'May', 'asd'),
(352, 'May', 'asd'),
(353, 'May', 'asd'),
(354, 'May', 'asd'),
(355, 'May', 'asd'),
(356, 'May', 'asd'),
(357, 'May', 'asd'),
(358, 'May', 'asd'),
(359, 'May', 'asd'),
(360, 'May', 'asd'),
(361, 'May', 'asd'),
(362, 'May', 'asd'),
(363, 'May', 'asd'),
(364, 'May', 'asd'),
(365, 'May', 'asd'),
(366, 'May', 'asd'),
(367, 'May', 'asd'),
(368, 'May', 'asd'),
(369, 'May', 'asd'),
(370, 'May', 'asd'),
(371, 'May', 'asd'),
(372, 'ad', 'ad'),
(375, 'ds', 'ds'),
(380, 'May', 'asd'),
(381, 'May', 'asd'),
(382, 'May', 'asd'),
(384, 'May', 'asd'),
(385, 'May', 'asd');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `pwd`) VALUES
('ken', 'password'),
('may', '123456'),
('noni', 'qwerty'),
('simon', '111111111');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `newspaper`
--
ALTER TABLE `newspaper`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`dataid`);

--
-- 資料表索引 `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockid`);

--
-- 資料表索引 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`dataid`);

--
-- 資料表索引 `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `exchange`
--
ALTER TABLE `exchange`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `newspaper`
--
ALTER TABLE `newspaper`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `question`
--
ALTER TABLE `question`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 05 月 30 日 19:03
-- 伺服器版本： 5.7.29-log
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ForL5`
--

-- --------------------------------------------------------

--
-- 資料表結構 `Record`
--

CREATE TABLE `Record` (
  `dataid` char(10) NOT NULL,
  `name` char(30) NOT NULL,
  `phone` int(8) DEFAULT NULL,
  `birth` char(30) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `password` char(10) NOT NULL,
  `userid` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `Record`
--
ALTER TABLE `Record`
  ADD PRIMARY KEY (`dataid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

