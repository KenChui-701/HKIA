-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 05 月 30 日 19:01
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
-- 資料庫： `superailgun_com`
--

-- --------------------------------------------------------

--
-- 資料表結構 `attack`
--

CREATE TABLE `attack` (
  `username` char(20) NOT NULL,
  `Lesson1` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson1_mark` int(1) DEFAULT '0',
  `Lesson2` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson2_mark` int(1) DEFAULT '0',
  `Lesson3` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson3_mark` int(1) DEFAULT '0',
  `Lesson4` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson4_mark` int(1) DEFAULT '0',
  `Lesson5` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson5_mark` int(1) DEFAULT '0',
  `Lesson6` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson6_mark` int(1) DEFAULT '0',
  `Lesson7` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson7_mark` int(1) DEFAULT '0',
  `Lesson8` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson8_mark` int(1) DEFAULT '0',
  `Lesson9` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson9_mark` int(1) DEFAULT '0',
  `Lesson10` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson10_mark` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `attack`
--

INSERT INTO `attack` (`username`, `Lesson1`, `Lesson1_mark`, `Lesson2`, `Lesson2_mark`, `Lesson3`, `Lesson3_mark`, `Lesson4`, `Lesson4_mark`, `Lesson5`, `Lesson5_mark`, `Lesson6`, `Lesson6_mark`, `Lesson7`, `Lesson7_mark`, `Lesson8`, `Lesson8_mark`, `Lesson9`, `Lesson9_mark`, `Lesson10`, `Lesson10_mark`) VALUES
('johnny', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('kkip', 1, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('qw', 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3),
('sa', 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('sam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('simon', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
('simonn', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0),
('sw', 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `defense`
--

CREATE TABLE `defense` (
  `username` char(20) NOT NULL,
  `Lesson1` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson1_mark` int(1) DEFAULT '0',
  `Lesson2` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson2_mark` int(1) DEFAULT '0',
  `Lesson3` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson3_mark` int(1) DEFAULT '0',
  `Lesson4` tinyint(1) NOT NULL DEFAULT '0',
  `Lesson4_mark` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `defense`
--

INSERT INTO `defense` (`username`, `Lesson1`, `Lesson1_mark`, `Lesson2`, `Lesson2_mark`, `Lesson3`, `Lesson3_mark`, `Lesson4`, `Lesson4_mark`) VALUES
('johnny', 0, 0, 0, 0, 0, 0, 0, 0),
('kkip', 0, 0, 0, 0, 0, 0, 0, 0),
('qw', 1, 4, 1, 4, 1, 9, 1, 9),
('sa', 0, 0, 0, 0, 0, 0, 0, 0),
('sam', 0, 0, 0, 0, 0, 0, 0, 0),
('simon', 0, 0, 0, 0, 0, 0, 0, 0),
('simonn', 0, 0, 0, 0, 0, 0, 1, 0),
('sw', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `t_user`
--

CREATE TABLE `t_user` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `t_user`
--

INSERT INTO `t_user` (`ID`, `name`) VALUES
(1, 'test'),
(21, 'ee');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('johnny', '$argon2i$v=19$m=65536,t=4,p=1$oNgMxO91PkcKu4Sn2/X8Lg$NSc1I4bJ1dlpByyBtozCdmk2p2ioL+KVrAGDaWcuOZQ'),
('kkip', '$argon2i$v=19$m=65536,t=4,p=1$6HGtZ6yws6orqsCa8pRm2w$GutsZjLseIHwsAD1JfMuILLme3JbJy0uxPBbCqxuQ30'),
('qw', '$argon2i$v=19$m=65536,t=4,p=1$ZqdP2hlZdlB8k48/xjCcMg$t8AWv34uxK792ClqZ/kK3jEZ4JjLao0jsse9bd+ogLM'),
('sa', '$argon2i$v=19$m=65536,t=4,p=1$LA+l8dN5MDCfwaOCtGBRNA$wsVslDUVxMKPeLjWSDu1LzmXXuJjHyCKaqwufxTLeus'),
('sam', '$argon2i$v=19$m=65536,t=4,p=1$n3uFguaL4iwTY70CRoj5Qg$3PtQtOqJx+EglUumgCdaYWEf6cnCZy7zY2KxncKZ/dE'),
('simon', '$argon2i$v=19$m=65536,t=4,p=1$0/T9W7AWYZ6P2LEAv5RaqQ$EAFzFhh4gr6lX3HdCbq3Ae23T0CZsSUvNCAyry4Gwcc'),
('simonn', '$argon2i$v=19$m=65536,t=4,p=1$h22pcOJZy+ESzZZEozWWag$4Jk3C1a0VkMSk5Etcc3Ho36vnNJr+RNNK2OA91xaoZI'),
('sw', '$argon2i$v=19$m=65536,t=4,p=1$qpxkxeaiFE2pyY4HW3Hkhg$/BogkcktsNEQO44sK2OaEhmjttZ2CIAPzVZ8GeBXPVg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `attack`
--
ALTER TABLE `attack`
  ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `defense`
--
ALTER TABLE `defense`
  ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t_user`
--
ALTER TABLE `t_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
