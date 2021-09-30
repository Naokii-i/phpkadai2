-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 9 月 30 日 07:00
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `books_gs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `books_an_table`
--

CREATE TABLE `books_an_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `books_an_table`
--

INSERT INTO `books_an_table` (`id`, `title`, `comment`, `date`) VALUES
(6, 'test1', 'test1', '2021-09-30 02:29:59'),
(7, 'test2', 'test2', '2021-09-30 02:30:44'),
(8, 'テスト４', 'テスト４', '2021-09-30 02:40:54'),
(9, 'test5', 'test5', '2021-09-30 02:43:16'),
(10, 'tesutt56', 'test5', '2021-09-30 02:47:11'),
(11, 'aaaa', 'aa', '2021-09-30 03:00:42'),
(12, 'aa', 'aa', '2021-09-30 03:15:55'),
(13, 'テストです', 'テスト1', '2021-09-30 15:35:20'),
(14, '会議ながくない？', '誰が会議の前にアジェンダつくってほしい。終わる時間を決めて欲しい。。。', '2021-09-30 15:59:16');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `books_an_table`
--
ALTER TABLE `books_an_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `books_an_table`
--
ALTER TABLE `books_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
