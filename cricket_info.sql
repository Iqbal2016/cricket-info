-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2015 at 12:04 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cricket_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`admin_id` int(2) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `admin_images` varchar(255) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `first_name`, `admin_email_address`, `admin_password`, `phone`, `admin_images`, `last_name`, `Address`, `city`, `country`) VALUES
(14, 'iqbal', 'iqbal@yahoo.com', 'eedae20fc3c7a6e9c5b1102098771c70', '', '', '', '', '', ''),
(18, 'Maruf', 'maruf@yahoo.com', '4b7562c798c20e3dd523b2298cad5327', '01813084716', 'http://localhost/cricket-info123/images/admin_images/1897727_843435722354397_2089446613903111859_n.jpg', 'Billa', 'Dhaka', 'Dhaka', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
`blog_id` int(5) NOT NULL,
  `category_id` int(2) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_short_description` text NOT NULL,
  `blog_description` text NOT NULL,
  `blog_images` varchar(250) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `category_id`, `blog_title`, `blog_short_description`, `blog_description`, `blog_images`, `author_name`, `author_email`, `publication_status`, `created_date_time`) VALUES
(25, 9, 'চ্যালেঞ্জ ছুড়ে দিল জিম্বাবুয়ে!', 'সকালে স্টেডিয়ামের আবহ দেখে বোঝার উপায় ছিল না, এটা প্রস্তুতি ম্যাচ! আন্তর্জাতিক ম্যাচের আমেজ স্টেডিয়ামজুড়ে! অবশ্য দিন শেষে পরাজয়ের হতাশা নিয়েই ফিরতে হয়েছে দর্শকদের। জিম্বাবুয়ের কাছে বিসিবি একাদশ হেরে গেছে ৭ উইকেটে।\r\nপ্রস্তুতি ম্যাচে হারে হতাশার কী আছে? কেউ কেউ বলতে পারেন, বিসিবি একাদশে যে ছিলেন মাশরাফি বিন মুর্তজা, মুশফিকুর রহিম, ইমরুল কায়েস, সাব্বির রহমানের মতো কয়েকটি উজ্জ্বল নাম! শেষ মুহূর্তে দলে ডাক পাওয়া ইমরুল অবশ্য এ পরাজয়কে বড় করে দেখেন না। নিজে রান পেয়েছেন, রান পেয়েছেন মুশফিকও। এর মধ্যেই ইমরুল খুঁজে পাচ্ছেন ইতিবাচক কিছু, ‘এটা প্রস্তুতি ম্যাচ। হেরে যাওয়ার চেয়ে বড় কথা, মুশফিক ভালো রান করেছে। অন্য ব্যাটসম্যানরাও রান করেছে। ওয়ানডে যারা খেলবে তাদের ভালো একটা অনুশীলন হলো। অনুশীলন ম্যাচে আসলে সবাইকে সুযোগ দেওয়া হয়। ১২-১৩ জন খেলার সুযোগ পায়। এখানকার পারফরম্যান্স নিয়ে চিন্তা না করাই ভালো।’', '<p>সকালে স্টেডিয়ামের আবহ দেখে বোঝার উপায় ছিল না, এটা প্রস্তুতি ম্যাচ! আন্তর্জাতিক ম্যাচের আমেজ স্টেডিয়ামজুড়ে! অবশ্য দিন শেষে পরাজয়ের হতাশা নিয়েই ফিরতে হয়েছে দর্শকদের। জিম্বাবুয়ের কাছে বিসিবি একাদশ হেরে গেছে ৭ উইকেটে।<br />\r\nপ্রস্তুতি ম্যাচে হারে হতাশার কী আছে? কেউ কেউ বলতে পারেন, বিসিবি একাদশে যে ছিলেন মাশরাফি বিন মুর্তজা, মুশফিকুর রহিম, ইমরুল কায়েস, সাব্বির রহমানের মতো কয়েকটি উজ্জ্বল নাম! শেষ মুহূর্তে দলে ডাক পাওয়া ইমরুল অবশ্য এ পরাজয়কে বড় করে দেখেন না। নিজে রান পেয়েছেন, রান পেয়েছেন মুশফিকও। এর মধ্যেই ইমরুল খুঁজে পাচ্ছেন ইতিবাচক কিছু, &lsquo;এটা প্রস্তুতি ম্যাচ। হেরে যাওয়ার চেয়ে বড় কথা, মুশফিক ভালো রান করেছে। অন্য ব্যাটসম্যানরাও রান করেছে। ওয়ানডে যারা খেলবে তাদের ভালো একটা অনুশীলন হলো। অনুশীলন ম্যাচে আসলে সবাইকে সুযোগ দেওয়া হয়। ১২-১৩ জন খেলার সুযোগ পায়। এখানকার পারফরম্যান্স নিয়ে চিন্তা না করাই ভালো।&rsquo;<br />\r\nজিম্বাবুয়ের অবশ্য বিপরীত অবস্থা। ঘরের মাঠে একের পর এক সিরিজ হারের পর এমন জয় নিঃসন্দেহে বিরাট স্বস্তি। অল্পের জন্য সেঞ্চুরি হাতছাড়া করা ক্রেগ আরভিন মনে করছেন, এ জয় বাড়িয়ে দেবে তাদের আত্মবিশ্বাস, &lsquo;জয় দিয়ে একটা সফর শুরু করা সব সময়ই ভালো। বিশেষ করে হাতে অনেকগুলো উইকেট রেখে বড় লক্ষ্য পেরিয়ে যাওয়া। দারুণ অনুশীলন হলো আমাদের জন্য। ওয়ানডেতে বাংলাদেশের বিপক্ষে খেলা সহজ হবে না। সিরিজ শুরু করতে এটি আমাদের ভালো আত্মবিশ্বাস জোগাবে।&rsquo;<br />\r\nবিসিবি একাদশের ব্যাটিংটা মন্দ হয়নি। নির্ধারিত ৫০ ওভারে ৮ উইকেটে করেছে ২৭৭। তবে ইমরুল-এনামুল যেভাবে শুরু করেছিলেন, স্কোর আরও বড়ই হতে পারত। উদ্বোধনী জুটিতে দুজনের ১০৫ রানের পর খানিকটা ছন্দপতন। বিনা উইকেটে ১০৫ থেকে বিসিবি একাদশ পরিণত হয় ৪ উইকেটে ১৪৯ রানে।<br />\r\nখেলাটা ধরেন মুশফিকুর রহিম ও শাহরিয়ার নাফীস। দুজনের পঞ্চম উইকেট জুটিতে আসে ৯০। অনেক দিন পর এমন একটা ম্যাচ খেলতে নামা বলেই কিনা শাহরিয়ারের মধ্যে দেখা গেল বেশ জড়তা। মুশফিক অবশ্য সাবলীল ব্যাটিংয়ে মাতিয়ে তুললেন ফতুল্লার পূর্ণ গ্যালারি। তবে শেষ ১০ ওভারে তুলনায় রান হলো কমই। থিতু হওয়া মুশফিক-শাহরিয়ার উইকেটে, হাতে ৬ উইকেট। রান হলো ৬৫।<br />\r\n২৭৮ রানের লক্ষ্যটা যথেষ্ট হতে পারত, যদি বোলাররা ঠিকমতো ফণা তুলতে পারতেন। ৫১ রানে ২ উইকেট ফেলে দেওয়ার পরও ছন্দটা ধরে রাখতে পারলেন না বোলাররা। তৃতীয় উইকেটে শন উইলিয়ামস ও ক্রেগ আরভিনের অবিচ্ছিন্ন ১২৫ রানের জুটি বদলেই দিলে ম্যাচের ছবি। উইলিয়ামসকে তো আউটই করা গেল না। ৫৪ রানে স্বেচ্ছায় অবসর নিয়ে ফিরলেন সাজঘরে। সানজামুল ইসলামের বাঁহাতি স্পিনে আউট হওয়ার আগে আরভিন করলেন ৯৫। ২০ বল হাতে রেখে সমাপ্তিরেখা টানল এলটন চিগুম্বুরা-সিকান্দার রাজার অবিচ্ছিন্ন চতুর্থ উইকেট।<br />\r\nপরাজয়ে বিসিবির ফিল্ডারদের পিচ্ছিল হাতের দায় যেমন আছে, দায় আছে নির্বিষ বোলিংয়েরও। বড় প্রাপ্তি হতে পারে ডেঙ্গু থেকে সেরে ওঠা মাশরাফির বোলিং। দুই স্পেলে করলেন ৭ ওভার। ৩১ রানে উইকেটশূন্য থাকলেও মিলল সিরিজে সামনে থেকে নেতৃত্ব দেওয়ার ইঙ্গিত।<br />\r\nবাংলাদেশ ঘরের মাঠে সর্বশেষ চারটি ওয়ানডে সিরিজ জিতেছে। তারপরও কি জিম্বাবুয়ে এবার বাংলাদেশকে ছুড়ে দিল বড় চ্যালেঞ্জ?</p>\r\n', 'http://localhost/cricket-info123/images/blog_images/bloggird-2.jpg', 'Iqbal Hossain', 'iqbal@gmail.com', 1, '0000-00-00'),
(24, 9, 'র‍্যাঙ্কিংয়ের চাপ নিতে চায় না বাংলাদেশ', 'একটা সময় জিম্বাবুয়ের বিপক্ষেই জয়ের স্বপ্ন দেখা ছিল কঠিন। তখন খেলোয়াড়দের প্রধান চাপ থাকত ‘ভালো খেলার’। সময়ের পরিক্রমায় সেই ‘চাপ’ বাঁক নিয়েছে ভিন্ন দিকে। এখন জিম্বাবুয়ের বিপক্ষে বাংলাদেশের খেলোয়াড়দের একটাই লক্ষ্য—জিততে হবে। হারলেই সর্বনাশ! ', '<p>একটা সময় জিম্বাবুয়ের বিপক্ষেই জয়ের স্বপ্ন দেখা ছিল কঠিন। তখন খেলোয়াড়দের প্রধান চাপ থাকত &lsquo;ভালো খেলার&rsquo;। সময়ের পরিক্রমায় সেই &lsquo;চাপ&rsquo; বাঁক নিয়েছে ভিন্ন দিকে। এখন জিম্বাবুয়ের বিপক্ষে বাংলাদেশের খেলোয়াড়দের একটাই লক্ষ্য&mdash;জিততে হবে। হারলেই সর্বনাশ!&nbsp;<br />\r\nএ সিরিজেও একই কথা প্রযোজ্য। তবে এর সঙ্গে যোগ হয়েছে আরেকটি &lsquo;চাপ&rsquo;&mdash;র&zwj;্যাঙ্কিং। ২০১৯ বিশ্বকাপে সরাসরি খেলার শর্তটাই এমন, চাইলেও র&zwj;্যাঙ্কিংয়ের ভাবনা দূরে সরিয়ে রাখা যাচ্ছে না। এই সিরিজের পরই যেমন বাংলাদেশ প্রায় এক বছর কোনো ওয়ানডে খেলবে না! সেখানে একেকটি রেটিং পয়েন্ট বাংলাদেশ দলের জন্য তো প্লাটিনামের চেয়েও দামি হওয়ারই কথা।<br />\r\nআবার এও সত্যি, এ নিয়ে বেশি মাথা ঘামিয়ে চাপ নেওয়াটাও বুদ্ধিমানের কাজ হবে না। বাংলাদেশ অধিনায়ক মাশরাফি বিন মুর্তজা তাই র&zwj;্যাঙ্কিং নিয়ে ভাবতেই চান না, &lsquo;আসলে এসব নিয়ে একেবারেই ভাবিনি। ম্যাচের আগে এ নিয়ে আলোচনা করাটাই নেতিবাচক। সবাই আত্মবিশ্বাসের সঙ্গে খেলতে চায়। যেভাবে খেলে আসছিলাম, সেভাবে খেললেই ভালো। র&zwj;্যাঙ্কিংয়ে আমরা যে ৭ নম্বর উঠব, এ সব চিন্তা করেও কখনো খেলিনি। এখন র&zwj;্যাঙ্কিংয়ে নেমে যাবে এমন চিন্তা করাটা নেতিবাচক।&rsquo;&nbsp;<br />\r\nচিন্তা খানিকটা বাড়িয়ে দিয়েছে ফতুল্লায় কাল বিসিবি একাদশের বিপক্ষে পরাজয়। হেরে যাওয়ায় অধিনায়ক ও খেলোয়াড় হিসেবে খারাপ লাগছে বটে, তবে অনুশীলনের উদ্দেশ্য অনেকটা পূরণ হওয়ায় ইতিবাচক দিকও খুঁজে পাচ্ছেন মাশরাফি, &lsquo;যেকোনো খেলায় হারতে অবশ্যই ভালো লাগে না। অনুশীলনের যে উদ্দেশ্য ছিল সেটা পূরণ হয়েছে। মুশফিক রান পেয়েছে, ইমরুল-লিটন খেলেছে। রুম্মন (সাব্বির) হয়তো সেভাবে ব্যাটিং করতে পারিনি। আমি ৭ ওভার বোলিং করেছি। আমাদের যেটা অনুশীলনের দরকার ছিল, সেটা হয়েছে। ম্যাচটা অবশ্য আমরা হেরে গিয়েছি।&rsquo;</p>\r\n', 'http://localhost/cricket-info123/images/blog_images/f3e349273c5943b8ba715e25acaa9585-Mash.jpg', 'Iqbal Hossain', 'iqbal@gmail.com', 1, '0000-00-00'),
(23, 8, 'গ্যাবায় প্রথম দিনে রান ওঠার রেকর্ড', 'এমনিতে টেস্টে এক দিনে ৪০০-এর বেশি রান ওঠার রেকর্ড ভূরি ভূরি নেই। তবে খুব বিরলও নয়। ম্যাচের প্রথম দিনেও ৪০০ কিংবা এর বেশি রান উঠেছে ৩৮ বার। এর মধ্যে ১৪ বারই এই ২০০০ সালের পর, সেটিও এখনকার ক্রিকেটের আক্রমণাত্মক চরিত্র ফুটিয়ে তুলছে। আর উইকেটে যদি থাকে ডেভিড ওয়ার্নারের মতো কেউ, রানের স্রোতে বাধ দেওয়া প্রতিপক্ষের জন্য কঠিনই।', '<p>এমনিতে টেস্টে এক দিনে ৪০০-এর বেশি রান ওঠার রেকর্ড ভূরি ভূরি নেই। তবে খুব বিরলও নয়। ম্যাচের প্রথম দিনেও ৪০০ কিংবা এর বেশি রান উঠেছে ৩৮ বার। এর মধ্যে ১৪ বারই এই ২০০০ সালের পর, সেটিও এখনকার ক্রিকেটের আক্রমণাত্মক চরিত্র ফুটিয়ে তুলছে। আর উইকেটে যদি থাকে ডেভিড ওয়ার্নারের মতো কেউ, রানের স্রোতে বাধ দেওয়া প্রতিপক্ষের জন্য কঠিনই।</p>\r\n\r\n<p>আজ প্রায় ৪০০ তুলেই ফেলেছিল অস্ট্রেলিয়া। দুই ওভার আগেই খেলা শেষ না হলে হয়তো হয়েও যেতে পারত। মাত্র যে ১১ রান দরকার ছিল। সেটি না হলেও অস্ট্রেলিয়ার তোলা ২ উইকেটে ৩৯৮-ই ব্রিসবেনের গ্যাবায় প্রথম দিনে সবচেয়ে বেশি রান তোলার নতুন রেকর্ড।<br />\r\nব্রিসবেনে সিরিজের প্রথম টেস্টের প্রথম দিন শেষে নিউজিল্যান্ডের তাই উপলব্ধি হয়তো, একে ওয়ার্নারে রক্ষে নেই, তায় জো বার্নস আর উসমান খাজা দোসর। প্রথমে বার্নসের সঙ্গে ১৬১, এর পর খাজার সঙ্গে ১৫০ রানের জুটি গড়েছেন ওয়ার্নার। ১ উইকেটেই ৩১১ তুলে ফেলেছিল অস্ট্রেলিয়া। বার্নস ৭১ করে আউট হলেও ওয়ার্নার-খাজা দুজনই পেয়েছেন সেঞ্চুরির দেখা। ওভারে সাড়ে চারের কাছাকাছি রান তোলার &lsquo;নির্যাতন&rsquo; নিউজিল্যান্ডের বোলারদের ওপর। সবচেয়ে বেশি রান দিয়েছেন বোল্ট আর ক্রেগ। একজন ৯০, অন্যজন ৯৬। আরেকটু হলে &lsquo;সেঞ্চুরি&rsquo; হয়ে যেত এঁদেরও।<br />\r\nমাত্রই চোট সেরে ফেরা ওয়ার্নার করেছেন ১৬৩। ১৭ ইনিংস খেলে ফেলেও কেন প্রথম সেঞ্চুরি পেলেন না সেই বিস্ময়ের আপাত সমাধান দিয়ে খাজা অপরাজিত ১০২ রানে অপরাজিত। ২০০২ অ্যাশেজে গ্যাবার প্রথম দিনে অস্ট্রেলিয়া তুলেছিল ৩৬৪। সেটি তো পেরিয়ে গেলই, গ্যাবায় নিউজিল্যান্ডের বিপক্ষে শতরানের ওপেনিং জুটি অস্ট্রেলিয়া সর্বশেষ গড়েছিল ​২০০১ সালে।<br />\r\nটেস্টের প্রথম দিনে সবচেয়ে বেশি রান তোলার রেকর্ডটা অস্ট্রেলিয়ারই। ১৯১০ সালে সিডনিতে দক্ষিণ আফ্রিকার বিপক্ষে তারা তুলেছিল ৪৯৪ রান। তবে ম্যাচের পাঁচ দিনের যেকোনো এক​ দিনের হিসাব ধরলে সেই রেকর্ডটা ইংল্যান্ডের। ১৯৩৬ সালে ওল্ড ট্র্যাফোর্ড টেস্টের দ্বিতীয় দিনে ভারতের বিপক্ষে ৫৮৮ রান তুলেছিল তারা।</p>\r\n', 'http://localhost/cricket-info123/images/blog_images/blogfull-width-1.jpg', 'Iqbal Hossain', 'iqbal@gmail.com', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogger`
--

CREATE TABLE IF NOT EXISTS `tbl_blogger` (
`blogger_id` int(5) NOT NULL,
  `blogger_name` varchar(50) NOT NULL,
  `blogger_email_address` varchar(100) NOT NULL,
  `blogger_password` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_blogger`
--

INSERT INTO `tbl_blogger` (`blogger_id`, `blogger_name`, `blogger_email_address`, `blogger_password`, `address`, `country`) VALUES
(4, 'moon', 'moon@gmail.com', '6d4db5ff0c117864a02827bad3c361b9', 'dhaka', 'BD'),
(2, 'Iqbal', 'iqbal@gmail.com', 'eedae20fc3c7a6e9c5b1102098771c70', 'dhaka', 'AZ'),
(3, 'Maruf billa', 'maruf@yahoo.com', '4b7562c798c20e3dd523b2298cad5327', 'Dhaka', 'BD'),
(5, 'tareq', 'tareq@gmail.com', '0d20b93812a60f072cbcf2ac64b271a6', 'Dhaka', 'AQ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
`category_id` int(2) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(7, 'মোবাইল', 'আমার মোবাইল খুব সুন্দর', 1),
(8, 'Mobile', 'Samsung Galaxy s4 mini', 1),
(9, 'Love Story', 'A quick born fox jams over the lazy dog', 1),
(12, 'Moon', 'I love you Moon', 1),
(11, 'Test Category', 'A quick born fox jams over the lazy dog', 1),
(13, 'Khala Dula', 'ম্যাড়মেড়ে একটা দিনই গেল কাল ওয়ালটন প্রিমিয়ার লিগে। মোহামেডান ৪৯ রানে ওল্ড ডিওএইচএসকে, আবাহনী ৬ উইকেটে কলাবাগান ক্রীড়াচক্রকে এবং ভিক্টোরিয়া ৭ উইকেটে...\r\n', 1),
(15, 'iqbal', 'dasghdasdfhasgfda', 1),
(16, 'moonnit', 'moon', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
`comments_id` int(9) NOT NULL,
  `blog_id` int(5) NOT NULL,
  `blogger_id` int(3) NOT NULL,
  `comments` text NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `blog_id`, `blogger_id`, `comments`, `created_date_time`) VALUES
(1, 11, 2, 'good good', '2015-11-02 05:20:36'),
(2, 11, 2, 'okkkkkkk', '2015-11-02 05:22:02'),
(3, 11, 2, 'কাটা ঘায়ে পড়েছে নুনের ছিটাও। চতুর্থ ওয়ানডেতে মন্থর ওভার রেটের কারণে জরিমানা করা হয়েছে দলের খেলোয়াড়দের। অধিনায়ক এলটন চিগুম্বুরার ম্যাচ ফি থেকে কাটা যাবে ২০ শতাংশ, অন্যান্য খেলোয়াড়দের ম্যাচ ফি থেকে ১০ শতাংশ করে', '2015-11-02 09:05:34'),
(4, 11, 3, 'হোম সিরিজের সুবিধা নিয়ে একটা একটা করে ম্যাচের দল দিচ্ছে ফারুক আহমেদের নেতৃত্বাধীন নির্বাচক কমিটি। আগামীকালের পঞ্চম ও শেষ ওয়ানডের জন্য যেমন কাল নতুন করে দল ঘোষণা করলেন তাঁরা। দলে নতুন বলতে অবশ্য শুধু সৌম্য সরকারই। সঙ্গে আগের ম্যাচের স্কোয়াডে থাকা ১৩ জনসহ শেষ ম্যাচের স্কোয়াডে খেলোয়াড় ১৪ জন। দলে নতুন একজন এলেও শেষ ম্যাচের একাদশে খুব বেশি পরিবর্তন আনার পক্ষে নয় নির্বাচক কমিটি। ', '2015-11-02 09:31:37'),
(5, 18, 3, 'এদিকে গতকাল সময় প্রকাশনা সংস্থার মালিক ফরিদ আহমেদকে মুঠোফোনে খুদে বার্তা পাঠিয়ে হুমকি দেওয়া হয়েছে। নিজের ফেসবুক স্ট্যাটাসে তিনি এ কথা জানিয়েছেন। ছাত্র মৈত্রীর সাবেক সভাপতি ও গণজাগরণ মঞ্চের একাংশের সংগঠক বাপ্পাদিত্য বসুকেও হুমকি দেওয়া হয়েছে। যোগাযোগ করা হলে বাপ্পাদিত্য প্রথম আলোকে বলেন, রাত নয়টা নয় মিনিটে একটি নম্বর বিহীন মুঠোফোন খুদে বার্তায় তাঁকে হুমকি দেওয়া হয়।', '2015-11-02 10:26:32'),
(6, 11, 2, 'ওভার রেটের কারণে জরিমানা করা হয়েছে দলের খেলোয়াড়দের। অধিনায়ক এলটন চিগুম্বুরার ম্যাচ ফি থেকে কাটা যাবে ২০ শতাংশ, অন্যান্য খেলোয়াড়দের ম্যাচ ফি থেকে ১০ শতাংশ করে', '2015-11-04 06:56:07'),
(7, 11, 4, 'ওয়ানডেতে মন্থর ওভার রেটের কারণে জরিমানা করা হয়েছে দলের খেলোয়াড়দের। অধিনায়ক এলটন চিগুম্বুরার ম্যাচ ফি থেকে কাটা যাবে ২০ শতাংশ, অন্যান্য খেলোয়াড়দের ম্যাচ ফি থেকে ১০ শতাংশ করে', '2015-11-04 14:08:29'),
(8, 19, 4, 'মর্যাদা পাওয়ার যোগ্য কি না, তা নিয়ে সন্দেহ করতে পারেন। তবে খোদ অস্ট্রেলিয়ারই ফক্স স্পোর্টস শিরোনাম করেছে: ওয়ার্নের বল অব দ্য সেঞ্চুরির মতোই এক ডেলিভারিতে ইয়াসির ক্লিন বোল্ড করলেন প্যাটেলকে। সূত্র: ফক্স স্পোর্টস।\r\n', '2015-11-04 15:18:31'),
(9, 23, 3, 'টেস্টের প্রথম দিনে সবচেয়ে বেশি রান তোলার রেকর্ডটা অস্ট্রেলিয়ারই। ১৯১০ সালে সিডনিতে দক্ষিণ আফ্রিকার বিপক্ষে তারা তুলেছিল ৪৯৪ রান। তবে ম্যাচের পাঁচ দিনের যেকোনো এক​ দিনের হিসাব ধরলে সেই রেকর্ডটা ইংল্যান্ডের। ১৯৩৬ সালে ওল্ড ট্র্যাফোর্ড টেস্টের দ্বিতীয় দিনে ভারতের বিপক্ষে ৫৮৮ রান তুলেছিল তারা।\r\n', '2015-11-06 06:10:35'),
(10, 23, 3, 'মাত্রই চোট সেরে ফেরা ওয়ার্নার করেছেন ১৬৩। ১৭ ইনিংস খেলে ফেলেও কেন প্রথম সেঞ্চুরি পেলেন না সেই বিস্ময়ের আপাত সমাধান দিয়ে খাজা অপরাজিত ১০২ রানে অপরাজিত। ২০০২ অ্যাশেজে গ্যাবার প্রথম দিনে অস্ট্রেলিয়া তুলেছিল ৩৬৪। সেটি তো পেরিয়ে গেলই, গ্যাবায় নিউজিল্যান্ডের বিপক্ষে শতরানের ওপেনিং জুটি অস্ট্রেলিয়া সর্বশেষ গড়েছিল ​২০০১ সালে।', '2015-11-06 06:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_player`
--

CREATE TABLE IF NOT EXISTS `tbl_player` (
`player_Id` int(11) NOT NULL,
  `player_Name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `player_Country` varchar(250) CHARACTER SET utf8 NOT NULL,
  `player_Description` text CHARACTER SET utf8 NOT NULL,
  `player_Weight` int(11) NOT NULL,
  `player_Height` varchar(250) CHARACTER SET utf8 NOT NULL,
  `player_Age` int(11) NOT NULL,
  `player_Image` varchar(250) CHARACTER SET utf8 NOT NULL,
  `player_Position` varchar(250) CHARACTER SET utf8 NOT NULL,
  `publication_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_player`
--

INSERT INTO `tbl_player` (`player_Id`, `player_Name`, `player_Country`, `player_Description`, `player_Weight`, `player_Height`, `player_Age`, `player_Image`, `player_Position`, `publication_status`) VALUES
(8, 'Nasir Hossain', 'BD', 'okkkkkkkkkkkkkkkkkkkk', 60, '5.5', 25, 'http://localhost/cricket-info123/images/player_Image/iqbal.PNG', 'okkkk', 1),
(10, 'সৌম্যর ', 'BD', 'অনিশ্চয়তা দেখা দিয়েছিল গতকালই। পরশু অনুশীলনে বোলিং করতে গিয়ে বাঁ পাজরে চোট পেয়েছিলেন সৌম্য সরকার। আর তাতেই জিম্বাবুয়ে সিরিজে তাঁর খেলা হচ্ছে না। জিম্বাবুয়ের সঙ্গে ওয়ানডে ও টি-টোয়েন্টি সিরিজের পুরোটাই হয়তো মাঠের বাইরে বসে কাটাতে হচ্ছে বাঁহাতি ওপেনারকে। তাঁর পরিবর্তে দলে আসছেন টেস্ট ওপেনার ইমরুল কায়েস।', 70, '5.6', 30, 'http://localhost/cricket-info123/images/player_Image/Mushfiqur_Rahim_batting_against_England_at_Lords_in_2010,_cropped1.jpg', ' বাঁহাতি ওপেনারকে', 1),
(11, 'ইমরুল', 'AZ', 'ফতুল্লায় আজ বিসিবি একাদশের প্রস্তুতি ম্যাচ দেখতে গিয়েছেন প্রধান নির্বাচক ফারুক আহমেদ। সৌম্যর সিরিজে খেলার সম্ভাবনা নিয়ে অবশ্য সরাসরি কিছু বলেননি প্রধান নির্বাচক। তবে আনুষ্ঠানিকভাবে জানিয়েছেন, তিন সপ্তাহের জন্য মাঠের বাইরে থাকছেন সৌম্য। সেই হিসাবে জিম্বাবুয়ে সিরিজ তো বটেই, সৌম্য খেলতে পারবেন না ২২ নভেম্বর শুরু হতে যাওয়া বিপিএলের কয়েকটি ম্যাচেও।', 70, '5.6', 30, 'http://localhost/cricket-info123/images/player_Image/a73111d90e8eaa975aad99738998a445-imrul.jpg', ' বাঁহাতি ওপেনারকে', 1),
(12, 'জিম্বাবুয়ে', 'CA', 'সকালে স্টেডিয়ামের আবহ দেখে বোঝার উপায় ছিল না, এটা প্রস্তুতি ম্যাচ! আন্তর্জাতিক ম্যাচের আমেজ স্টেডিয়ামজুড়ে! অবশ্য দিন শেষে পরাজয়ের হতাশা নিয়েই ফিরতে হয়েছে দর্শকদের। জিম্বাবুয়ের কাছে বিসিবি একাদশ হেরে গেছে ৭ উইকেটে।\r\n', 70, '5.6', 30, 'http://localhost/cricket-info123/images/player_Image/a0e17aa51d2073e1d465da363c6e6cec-9.jpg', ' বাঁহাতি ওপেনারকে', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio` (
  `portfolio_title` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `portfolio_status` int(11) NOT NULL,
  `portfolio_description` text NOT NULL,
  `portfolio_images` varchar(250) NOT NULL,
`portfolio_id` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`portfolio_title`, `category_id`, `portfolio_status`, `portfolio_description`, `portfolio_images`, `portfolio_id`) VALUES
('iqbal', 7, 1, 'iqbalhossain', '', 1),
('hgdgsgds', 7, 1, 'dsgsdgsd', 'grass.PNG', 2),
('dgdsgdsg', 7, 1, 'gsdgdsgsdg', 'grass.PNG', 3),
('gdsgdsgsd', 11, 1, 'dgsdgsdgdsg', '', 4),
('fsdfsdf', 7, 1, 'sdfsdfsdf', '', 5),
('dfsfdsf', 7, 1, 'sdfsdfd', '', 6),
('dasdas', 11, 1, 'sfsdfs', 'http://localhost/moon_it/images/portfolio_images/grass.PNG', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE IF NOT EXISTS `tbl_slide` (
`slide_id` int(11) NOT NULL,
  `slide_title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `slide_image` varchar(250) CHARACTER SET utf8 NOT NULL,
  `slide_short_description` text CHARACTER SET utf8 NOT NULL,
  `slide_description` text CHARACTER SET utf8 NOT NULL,
  `publication_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`slide_id`, `slide_title`, `slide_image`, `slide_short_description`, `slide_description`, `publication_status`) VALUES
(2, 'FULLY RESPONSIVE THEME', 'http://localhost/cricket-info123/images/slide_image/slide1.jpg', 'Sed ut perspiciatis unde omnis iste natuserror sit accusantium dolore', '<p>Sed ut perspiciatis unde omnis iste natuserror sit accusantium dolore&nbsp;Sed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium dolore&nbsp;Sed ut perspiciatis unde omnis iste natuserror sit accusantium dolore&nbsp;Sed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium dolore</p>\r\n', 1),
(3, 'RETINA READY', 'http://localhost/cricket-info123/images/slide_image/slide2.jpg', 'Sed ut perspiciatis unde omnis iste natuserror sit accusantium dolore', '<p>Sed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium doloreSed ut perspiciatis unde omnis iste natuserror sit accusantium dolore</p>\r\n', 1),
(4, 'KICKOFF SPORTS THEME', 'http://localhost/cricket-info123/images/slide_image/slide3.jpg', 'Sed ut perspiciatis unde omnis iste natus \r\nerror sit accusantium dolore\r\nmque laudantium', '<p>Sed ut perspiciatis unde omnis iste natus&nbsp;error sit accusantium dolore&nbsp;mque laudantium&nbsp;Sed ut perspiciatis unde omnis iste natus&nbsp;error sit accusantium dolore&nbsp;mque laudantium&nbsp;Sed ut perspiciatis unde omnis iste natus&nbsp;error sit accusantium dolore&nbsp;mque laudantium&nbsp;Sed ut perspiciatis unde omnis iste natus&nbsp;error sit accusantium dolore&nbsp;mque laudantium&nbsp;Sed ut perspiciatis unde omnis iste natus&nbsp;error sit accusantium dolore&nbsp;mque laudantium&nbsp;Sed ut perspiciatis unde omnis iste natus&nbsp;error sit accusantium dolore&nbsp;mque laudantium</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`adminId` int(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `manager` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `phone` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notes` text NOT NULL,
  `userRole` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`adminId`, `firstName`, `lastName`, `userName`, `password`, `email`, `title`, `manager`, `location`, `phone`, `status`, `notes`, `userRole`) VALUES
(1, 'iqbal', 'hossain', 'iqbalhossain', '21232f297a57a5a743894a0e4a801fc3', 'erient@gmail.com', 'admin', '', 'Dhaka', 1813084716, 'active', 'ok', ''),
(2, 'suman', 'kumar', 'sumankumar', '1533c67e5e70ae7439a9aa993d6a3393', 'suman@yahoo.com', 'customer', '', 'Dhaka', 2147483647, '', 'okkkkkkkkkkkkkkkk', ''),
(6, 'Noman', 'Hossain', 'noman', '0c1300db57bef58404261cc20c271cd1', 'noman@gmail.com', 'assistant', '', 'dhaka', 5325235, '1', '0', 'Global Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
 ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_blogger`
--
ALTER TABLE `tbl_blogger`
 ADD PRIMARY KEY (`blogger_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
 ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `tbl_player`
--
ALTER TABLE `tbl_player`
 ADD PRIMARY KEY (`player_Id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
 ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
 ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`adminId`,`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_blogger`
--
ALTER TABLE `tbl_blogger`
MODIFY `blogger_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
MODIFY `comments_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_player`
--
ALTER TABLE `tbl_player`
MODIFY `player_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
MODIFY `portfolio_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `adminId` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
