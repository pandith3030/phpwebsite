-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 09:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technosmarter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$7JeJwRKyABgHffP7htWTX.4GUTJdr12c4qaXImLJX5cv81lUS/Zg2'),
(2, 'demo', 'demo@gmail.com', '$2y$10$S6xVKVTxLj5BeWShytMEiOG/P5JHAUIr9m.lbawh5j.bI8vDiniMu');

-- --------------------------------------------------------

--
-- Table structure for table `techno_blog`
--

CREATE TABLE `techno_blog` (
  `articleId` int(30) NOT NULL,
  `articleTitle` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `articleSlug` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `articleDescrip` text CHARACTER SET latin1 DEFAULT NULL,
  `articleContent` text CHARACTER SET latin1 DEFAULT NULL,
  `articleDate` datetime DEFAULT NULL,
  `articleTags` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `articleImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techno_blog`
--

INSERT INTO `techno_blog` (`articleId`, `articleTitle`, `articleSlug`, `articleDescrip`, `articleContent`, `articleDate`, `articleTags`, `articleImage`) VALUES
(57, 'Student Visa USA: All You Need to Know in 2022!', 'usa', '<p>Studying in America can be an exciting experience, but it also comes with its own set of challenges. One such challenge is getting your US student visa approved by the US embassy or consulate</p>', '<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"12\">\r\n<div id=\"hs_cos_wrapper_widget_36151662091\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\">\r\n<p>The United States is the most popular destination for international students. It has a long history of welcoming foreign students and offers some of the best universities in the world. The US Student Visa is a non-immigrant visa that allows foreign nationals to pursue academic studies, language training programs or other types of vocational or technical training.&nbsp;</p>\r\n<p>The challanges that comes with student visa is generally the interview process. In this post, we will tell everything that you need to know about for applying a study visa and the tips for the interview.</p>\r\n</div>\r\n<span id=\"hs_cos_wrapper_module_1590680745943369\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1590680722840364\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"6\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595095132308476\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"12\"><span id=\"hs_cos_wrapper_module_15951024437831858\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_15951036396001982\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"4\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_15951036396001983\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"8\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_15951036396001984\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595325042619269\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"6\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595325042619270\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"12\">\r\n<div id=\"hs_cos_wrapper_widget_36151662093\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\"><span class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"><a id=\"what\" data-hs-anchor=\"true\"></a></span>\r\n<h2 class=\"mt50\"><strong>What is a US Student Visa?</strong></h2>\r\n<p>A (F or M) Student Visa is required for foreign nationals to study in the United States. Foreign nationals will not be able to study in the US if they have entered through the visitor (B) visa or through the&nbsp;<a href=\"https://www.kansaz.in/blog/visa-free-countries-for-indians\" target=\"_blank\" rel=\"noopener\">VWP (Visa Waiver Program)</a>. You can however undertake recreational studies on a&nbsp;<a href=\"https://www.kansaz.in/visit-visa/usa\" rel=\"noopener\">tourist visa</a>.</p>\r\n<span id=\"hs_cos_wrapper_widget_36151662093_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n<span id=\"hs_cos_wrapper_module_1595096673930812\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2022-12-08 11:06:28', 'studyvisa, usa', 'uploads/big-ben-2393098.jpg'),
(58, 'Canada Study Visa : Apply In 6 Simple Steps ', 'canada', '<div class=\"span7 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"7\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell md-tc white-content\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell large-text\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text md-mb20\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">\r\n<p>Applying for a study visa in Canada is not an easy task. It involves several steps and the process can be very time-consuming.</p>\r\n<span id=\"hs_cos_wrapper_module_158969320346406\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"span5 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"7\" data-w=\"5\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell pl50 md-pl0 md-mt30 sm-hidden\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell form-box md-mlra md-fn md-w500\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text form-box-header theme no-border\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>A lot of students who apply for this visa end up frustrated because they are unable to complete their application on time, or even worse, they don&rsquo;t get approved at all. Luckily, we have simplified the entire process by creating a step-by-step guide that will help you through every stage of your application.</p>\r\n<h2 class=\"mt50\"><strong>What is a Canada Study Visa?</strong></h2>\r\n<p>A&nbsp;<a href=\"https://www.kansaz.in/blog/ms-in-canada\" rel=\"noopener\">Canada study visa</a>&nbsp;allows you to travel to and study in Canada. This visa also allows you to work part-time to bear your expenses, and qualify for student facilities.</p>\r\n<p>According to The Times Higher Education&rsquo;s World University Rankings 2022, Canada is home to 30 of the world&rsquo;s top 500 universities. The number of international students opting to study in Canada keeps growing every year. A sizable number of these students stay back in Canada after finishing their studies.</p>\r\n<p>Canada&rsquo;s universities and community colleges provide some of the best international study programs alongside the best research facilities for foreign students. Canada should be at the top of your list if you are planning to study abroad.</p>', '2022-12-08 11:07:57', 'studyvisa, canada', 'uploads/canada-5148191_1280.jpg'),
(59, 'Australia Student Visa in 2022 Guide: Process, Requirements, Age Limit, and more!', 'australia', '<div class=\"span7 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"7\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell md-tc white-content\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell large-text\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text md-mb20\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">\r\n<p>A complete guide to the Australian Student Visa &amp; Universities.</p>\r\n<span id=\"hs_cos_wrapper_module_158969320346406\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"span5 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"7\" data-w=\"5\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell pl50 md-pl0 md-mt30 sm-hidden\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell form-box md-mlra md-fn md-w500\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text form-box-header theme no-border\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div id=\"hs_cos_wrapper_widget_1601716101210\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\">\r\n<h2 class=\"mt50\">What is an Australian Study Visa?</h2>\r\n<p>An Australian study visa is a&nbsp;<a href=\"https://www.kansaz.in/temporary-visa/\" rel=\"noopener\">temporary visa</a>, that enables you to remain in Australia for the duration of your study.</p>\r\n<p>Guidelines issued as per the notification and w.e.f. July 1, 2016, for the Australian Student Visa, have changed, and a Simplified Student Visa Framework (SSVF) has been initiated.</p>\r\n<p>According to the Department of Immigration and Border Protection, all international students planning to study in Australia are now required to apply for a visa under Subclass 500 and this effectively combines the erstwhile subclasses 571 &ndash; 576 into one.</p>\r\n<span id=\"hs_cos_wrapper_widget_1601716101210_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n<div id=\"hs_cos_wrapper_widget_1601716173906\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\"><span class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"><a id=\"key-highlight2\" data-hs-anchor=\"true\"></a></span>\r\n<h2 class=\"mt50\">Upcoming Intakes in Australia</h2>\r\n<p>Australian universities have two intakes every year:</p>\r\n<ul>\r\n<li><strong>Intake 1:&nbsp;</strong>&nbsp;Extends from February/early March to late May/early June</li>\r\n<li><strong>Intake 2:</strong>&nbsp;Extends from July/early August through to November&nbsp;</li>\r\n</ul>\r\n<p>The first intake is usually treated as the main intake by most Indian students. The best thing to do is to prepare for the next upcoming intake.</p>\r\n<span id=\"hs_cos_wrapper_widget_1601716173906_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>', '2022-12-08 11:09:26', 'studyvisa, australia', 'uploads/australia-1281935_1280.jpg'),
(60, 'US Visit Visa: Know all the details to travel to the United States', 'usa', '<div class=\"span7 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"7\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell md-tc white-content\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell large-text\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text md-mb20\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">\r\n<p>This page provides the most essential information that is necessary for obtaining a US Tourist Visa.</p>\r\n<span id=\"hs_cos_wrapper_module_158969320346406\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"span5 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"7\" data-w=\"5\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell pl50 md-pl0 md-mt30 sm-hidden\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell form-box md-mlra md-fn md-w500\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text form-box-header theme no-border\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"12\">\r\n<div id=\"hs_cos_wrapper_widget_35921622790\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\">\r\n<p>When it comes to international tourism, the United States is at the top of the list. The country receives about 79.6 million international visitors annually. These people travel to the country for business or sightseeing. It also impacts the economy of the country massively. Read along.</p>\r\n</div>\r\n<span id=\"hs_cos_wrapper_module_1590680745943369\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1590680722840364\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"6\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595095132308476\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"12\"><span id=\"hs_cos_wrapper_module_15951024437831858\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_15951036396001982\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"4\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_15951036396001983\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"8\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_15951036396001984\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595325042619269\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"6\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595325042619270\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"12\">\r\n<div id=\"hs_cos_wrapper_widget_35921622792\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\"><span class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"><a id=\"what\" data-hs-anchor=\"true\"></a></span>\r\n<h2 class=\"mt50\"><strong>What is a US Tourist Visa?</strong></h2>\r\n<p>A&nbsp;<a href=\"https://www.kansaz.in/blog/us-tourist-visa-from-india\" rel=\"noopener\">US Tourist Visa&nbsp;</a>is a type of non-immigrant visa. It allows people to enter the United States. The purpose can either be business or tourism. It can also be a combination of both.</p>\r\n<span id=\"hs_cos_wrapper_widget_35921622792_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n<span id=\"hs_cos_wrapper_module_1595096673930812\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595096690228838\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span6 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"6\" data-w=\"6\"><span id=\"hs_cos_wrapper_module_1595096690228840\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_1595096656513781\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"4\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_1595096656513783\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n<div class=\"span4 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"8\" data-w=\"4\"><span id=\"hs_cos_wrapper_module_1595096656513785\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row-fluid-wrapper row-depth-1 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-widget_container \" data-widget-type=\"widget_container\" data-x=\"0\" data-w=\"12\">\r\n<div id=\"hs_cos_wrapper_widget_35921622789\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\"><span class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"><a id=\"eligibility\" data-hs-anchor=\"true\"></a></span>\r\n<h2 class=\"mt50\"><strong>What are the eligibility criteria of the US tourist visa?</strong></h2>\r\n<p>The eligibility criteria of the US tourist visa are:</p>\r\n<ul>\r\n<li>Show proof of your travel:\r\n<ul>\r\n<li>If it is tourism, then you must display a travel itinerary, tickets, etc.</li>\r\n<li>If it is a visit to family or friends, then you must show an invitation letter.</li>\r\n<li>If it is for medical purposes, then you must show the necessary medical documents.</li>\r\n<li>If it is for business, then:\r\n<ul>\r\n<li>You must display business invitations, etc.</li>\r\n<li>You must show proof that you are a foreigner.</li>\r\n<li>You must display the intent to leave the country to the immigration officer.</li>\r\n<li>You must not work, study, or do paid performances.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>You must display sufficient proof of funds.</li>\r\n<li>You must have a residence in your home country.</li>\r\n</ul>\r\n<span id=\"hs_cos_wrapper_widget_35921622789_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n<span id=\"hs_cos_wrapper_module_1595096887422977\" class=\"hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container\" data-hs-cos-general-type=\"widget_container\" data-hs-cos-type=\"widget_container\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2022-12-08 12:34:19', 'visitvisa, usa', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `techno_blog_users`
--

CREATE TABLE `techno_blog_users` (
  `userId` int(20) NOT NULL,
  `username` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(300) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techno_blog_users`
--

INSERT INTO `techno_blog_users` (`userId`, `username`, `password`, `email`) VALUES
(1, 'admin', '0,6Rbsehdf.9I', 'pandit.kansas@gmail.com'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'pandit.kansas@gmail.com'),
(4, 'admin', '0,6Rbsehdf.9I', 'praneeth.kansas@gmail.com'),
(5, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'pandit.kansas@gmail.com'),
(6, 'admin1', '*0', 'pandit.kansas@gmail.com'),
(7, 'demo', '*0', 'demo@gmail.com'),
(8, 'admin2', '*0', 'admin2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `techno_category`
--

CREATE TABLE `techno_category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `categorySlug` varchar(300) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techno_category`
--

INSERT INTO `techno_category` (`categoryId`, `categoryName`, `categorySlug`) VALUES
(19, 'study visa', 'study-visa'),
(20, 'canada immigration', 'canada-immigration'),
(21, 'australia immigration', 'australia-immigration'),
(22, 'visit visa', 'visit-visa');

-- --------------------------------------------------------

--
-- Table structure for table `techno_cat_links`
--

CREATE TABLE `techno_cat_links` (
  `id` int(20) NOT NULL,
  `articleId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techno_cat_links`
--

INSERT INTO `techno_cat_links` (`id`, `articleId`, `categoryId`) VALUES
(55, 57, 19),
(56, 58, 19),
(57, 59, 19),
(59, 60, 22);

-- --------------------------------------------------------

--
-- Table structure for table `techno_pages`
--

CREATE TABLE `techno_pages` (
  `pageId` int(50) NOT NULL,
  `pageTitle` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `pageSlug` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `pageDescrip` text CHARACTER SET latin1 DEFAULT NULL,
  `pageContent` text CHARACTER SET latin1 DEFAULT NULL,
  `pageKeywords` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `pageImage` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techno_pages`
--

INSERT INTO `techno_pages` (`pageId`, `pageTitle`, `pageSlug`, `pageDescrip`, `pageContent`, `pageKeywords`, `pageImage`) VALUES
(14, 'Canada Immigration 2022: A Complete Guide To Migrate to Canada From India', 'canada-immigration', '<div class=\"span7 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"7\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell md-tc white-content\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell large-text\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text md-mb20\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">\r\n<p>Getting a Canadian Permanent Residency is not easy. It can take years of waiting and several attempts to get approved for the program that you want.</p>\r\n<span id=\"hs_cos_wrapper_module_158969320346406\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"span5 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"7\" data-w=\"5\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell pl50 md-pl0 md-mt30 sm-hidden\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell form-box md-mlra md-fn md-w500\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text form-box-header theme no-border\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div id=\"hs_cos_wrapper_widget_1603088588007\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\">\r\n<p>Canada\'s demand for skilled workers is high, but the government has strict requirements when it comes to approving applicants in its immigration programs. This means that many deserving candidates are left out because they don\'t meet all the criteria required by the government.</p>\r\n<p>The Canadian government has a tough job when it comes to selecting immigrants who are allowed to live in this country. They have several different programs but each one has its own criteria that must be met by any applicant interested in settling down there.</p>\r\n<span id=\"hs_cos_wrapper_widget_1603088588007_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n<div id=\"hs_cos_wrapper_widget_36209957568\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"><a id=\"what\" data-hs-anchor=\"true\"></a>\r\n<h2 class=\"mt50\"><strong>Canadian Immigration Program</strong></h2>\r\n<p>There are more than 80 immigration programs run by the Canadian government to let people work and settle in Canada.</p>\r\n<p>There are both permanent and temporary&nbsp;<a href=\"https://www.kansaz.in/blog/canada-pr-categories-for-skilled-immigrants\" rel=\"noopener\">Canadian Immigration categories</a>&nbsp;that you can apply for.&nbsp;</p>\r\n<p>As a Canadian permanent resident, you get access to the healthcare policies and most of the other benefits that the citizens of Canada get .&nbsp;</p>\r\n</div>', 'canada immigration, canada pr', 'images/flag-958290_1920.jpg'),
(15, 'Australian Immigration: A Complete Guide', 'australia-immigration', '<div class=\"span7 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"0\" data-w=\"7\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell md-tc white-content\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell large-text\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-3 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text md-mb20\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">\r\n<p>This article will tell you about various types of Australian Visas that can help you to immigrate to this gracious island nation.</p>\r\n<span id=\"hs_cos_wrapper_module_158969320346406\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"span5 widget-span widget-type-cell \" data-widget-type=\"cell\" data-x=\"7\" data-w=\"5\">\r\n<div class=\"row-fluid-wrapper row-depth-2 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell pl50 md-pl0 md-mt30 sm-hidden\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-1 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-cell form-box md-mlra md-fn md-w500\" data-widget-type=\"cell\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"row-fluid-wrapper row-depth-3 row-number-2 \">\r\n<div class=\"row-fluid \">\r\n<div class=\"span12 widget-span widget-type-rich_text form-box-header theme no-border\" data-widget-type=\"rich_text\" data-x=\"0\" data-w=\"12\">\r\n<div class=\"cell-wrapper layout-widget-wrapper\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div id=\"hs_cos_wrapper_widget_1602820277987\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\">\r\n<h2 class=\"mt50\"><strong>Australian Skilled Visas</strong></h2>\r\n<p>Graduate Visas,&nbsp;There are two types of Graduate Visas:</p>\r\n<ul>\r\n<li>Temporary Graduate Visa (Subclass 485)</li>\r\n<li>Skilled Recognition Graduate Visa (<a href=\"https://www.kansaz.in/temporary-visa/australia-subclass-476-visa\" rel=\"noopener\">Subclass 476</a>)</li>\r\n</ul>\r\n<span id=\"hs_cos_wrapper_widget_1602820277987_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>\r\n<div id=\"hs_cos_wrapper_widget_1602820480572\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"module\">\r\n<h2 class=\"mt50\"><strong>Temporary Graduate Visa (Subclass 485)</strong></h2>\r\n<p>The Temporary Graduate Visa (Subclass 485) is designed for international students. This visa allows them to live and work in Australia temporarily. This can be done after finishing their studies in Australia.&nbsp;</p>\r\n<p>This visa allows you to:</p>\r\n<ul>\r\n<li>Stay and work in Australia without any restrictions</li>\r\n<li>No travel restriction to and from Australia</li>\r\n<li>Bring family members as dependents</li>\r\n</ul>\r\n<span id=\"hs_cos_wrapper_widget_1602820480572_\" class=\"hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text\" data-hs-cos-general-type=\"widget\" data-hs-cos-type=\"rich_text\"></span></div>', 'australia immigration, australia pr', 'images/Australia-TOP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `techno_blog`
--
ALTER TABLE `techno_blog`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `techno_blog_users`
--
ALTER TABLE `techno_blog_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `techno_category`
--
ALTER TABLE `techno_category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `techno_cat_links`
--
ALTER TABLE `techno_cat_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techno_pages`
--
ALTER TABLE `techno_pages`
  ADD PRIMARY KEY (`pageId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `techno_blog`
--
ALTER TABLE `techno_blog`
  MODIFY `articleId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `techno_blog_users`
--
ALTER TABLE `techno_blog_users`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `techno_category`
--
ALTER TABLE `techno_category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `techno_cat_links`
--
ALTER TABLE `techno_cat_links`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `techno_pages`
--
ALTER TABLE `techno_pages`
  MODIFY `pageId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
