-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2022 at 01:45 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Name`, `Surname`, `Contact`, `Email`, `adminPassword`) VALUES
('2001', 'Taylor', 'Smith', 796857645, 'Tay@gmail.com', 'wertyuiolk,mnbvcx54'),
('2002', 'Reuben', 'Links', 785643232, 'links@linkedin', 'qwetrgd5a5'),
('2003', 'Candice', 'Yela', 795670004, 'Yela@hotmail.com', '65s4affffffffffffgdfa646ae'),
('2004', 'Zinhle', 'Zwane', 654769991, 'zeexonline@gmail.com', 'qwretryfn'),
('2005', 'Kendrick', 'Bull', 891125467, 'bullz@gmail.com', 'sfgafga3333a5158e'),
('2006', 'Amukelani', 'Khipa', 891115342, 'khanya@gmail.com', 'qwergsdhf64846s5d'),
('2007', 'Lindelani', 'Msomi', 756734423, 'Msomi@icloud.com', 'adgfsga648asd46g'),
('2008', 'Calvin', 'Holmes', 774356654, 'holmes@icloud.com', 'FSf4e64fs6f4a6sd4f6');

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `Name`, `Description`, `Author`, `Price`, `rrp`, `quantity`, `image`) VALUES
(1, 'Big Data, Big Challenges', 'This is the first book to offer a comprehensive yet concise overview of the challenges and opportunities presented by the use of big data in healthcare', 'Mowafa Huseh, Andre,W. Kushnrick, Elizabeth, M. Boyrcki', 1500, '0.00', 5, 'image/Big Data, Big Challenges.jpg'),
(5, 'Information Technology Law', 'Do you download music or shop online?Who regulates large companies such as Google and Facebook?How safe is your personal data on the internet?Information technology affects all aspects of modern life', 'Ian J. Lloyd', 456, '0.00', 5, 'image/Information Technology Law.jpg'),
(2, 'Information Security Fundamentals', ' One of the fastest growing issues in Information Technology (IT) is the increasing need for security, both internal and external, to protect valuable enterprise data and resources. IT security is a multifaceted field that includes both technical and behavioral components', 'Glen Sagers, Bryan Hosack ', 659, '0.00', 5, 'image/Information Technology Security Fundamentals.jpg'),
(4, 'Scientific Research in Information Systems ', ' This book is designed to introduce doctoral and other higher-degree research students to the process of scientific research in the fields of Information Systems as well as fields of Information Technology, Business Process Management and other related disciplines within the social sciences. It guides research students in their process of learning the life of a researcher', 'Jan Recker', 786, '0.00', 5, 'image/Scientific Research in Information Systems.jpg'),
(3, 'PHP Programming with MySQL', 'covers the basics of PHP and MySQL along with introductions to advanced topics including object-oriented programming and how to build websites that incorporate authentication and security', 'Gosselin,D.,Kokoska,D.,Eaterbrooks,R.', 475, '0.00', 5, 'image/9780538745840-pdpxl.jpg'),
(8, 'Principles of Information Security', 'This overview explores important terms and examines what is needed to manage an effective information security ', 'Whitman,M.E., Mattord,H.J', 864, '0.00', 5, 'image/imageServlet.jpg'),
(10, 'Certified Software Tester CSTE', 'Is intended for the training of the user to be able to quality test software', 'N/A', 872, '0.00', 5, 'image/200.jpg'),
(9, 'Interaction Design: Beyond Human Interaction', 'Explains how to use design and evaluation techniques for developing successful interactive technologies. Provides thought-provoking design dilemmas and interviews with expert designers and researchers', 'Helen Sharp', 1587, '0.00', 5, 'image/51uPl9ue9LL._SX404_BO1,204,203,200_.jpg'),
(7, 'Oracle Database 11g', 'focuses on creating database objects, including tables, constraints, indexes , sequences, manipulating data and more ', 'Anita R', 799, '0.00', 5, 'image/71rFVIflH7L.jpg'),
(11, 'Cyber Exposure Management', 'The world is changing fast, and so is cyber exposure management. Companies are investing more money in cybersecurity than ever before, but they are also reporting more threats. We’ve seen a range of notable hacks and cybercrimes over the last few years, including government-sanctioned attacks on valuable IT infrastructure, such as the attacks on SolarWinds and Colonial Pipeline. Despite the rapid rise in potential risk, many companies struggle to implement a robust cybersecurity risk management system. Learn how to manage cyber exposure in today’s increasingly unpredictable world.', 'NopSec', 579, '0.00', 5, 'image/cyber-exposure-management-nopsec-obooko-pdf-ebook-0211e567c4e37144700da7c8dd1b0a48.jpg'),
(12, 'Android Tutorial', 'Android (a mobile operating system based on a modified version of the Linux kernel) was developed by the Open Handset Alliance,  		led by Google, and other companies – and has now garnered the interest of a million 			smartphone users. 		This book is for all android developers, whether you are a novice or an experienced pro. The 		beginner will find its carefully paced discussions and many examples especially helpful.  		Of course those who have already familiar with android programming are likely to derive 		more benefits from this book.  		After completing this book you will find yourself at a moderate level of expertise in Android 		programming from where you can take yourself to next levels.', 'Manjunath. R', 895, '0.00', 5, 'image/android-tutorial-manjunath-r-obooko-d383f1eddbbb2566fe10e47cf665eda8.jpg');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Surname`, `EmailAddress`, `Password`) VALUES
(1, 'John', 'Doe', 'j.doe@abc.co.za', '29ef52e7563626a96cea7f4b4085c124'),
(3, 'Chuco', 'Mance', 'Chuco.M@outlook.com', 'oth6yt7h65ht34gr4tf5ghyjkiol891p'),
(4, 'Calvin', 'Holmes', 'Holmes25@gmail.com', 'pyhtug777772ryfhsg5823ehtg44yt56'),
(5, 'Tevin', 'Sherlock', 'Sherlockinit@linkedin', 'th65hty564rthfy36ths65ydt37the34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
