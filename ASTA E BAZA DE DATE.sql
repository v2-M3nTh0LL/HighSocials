-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 11:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highsocials`
--

-- --------------------------------------------------------

--
-- Table structure for table `normal_instagram`
--

CREATE TABLE `normal_instagram` (
  `id` int(64) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg_date` varchar(20) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal_instagram`
--

INSERT INTO `normal_instagram` (`id`, `name`, `reg_date`, `count`) VALUES
(1, 'plosceac.alex', '01:01:01', 0),
(2, 'cudlaradu', '02:02:02', 0),
(3, 'jesus', '03:03:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `normal_youtube`
--

CREATE TABLE `normal_youtube` (
  `id` int(11) NOT NULL,
  `userLink` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `reg_date` varchar(20) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal_youtube`
--

INSERT INTO `normal_youtube` (`id`, `userLink`, `name`, `reg_date`, `count`) VALUES
(1, 'https://www.youtube.com/channel/UC3Md2A1m-k6Z-cq6IOIxVVQ', 'Lord VixxeN', '06:45:20', 0),
(2, 'https://www.youtube.com/channel/UCZJiWlzzBjojABV4vOra7ng', 'CipFlixTV', '02:32:12', 0),
(3, 'https://www.youtube.com/user/CodrinBradeaSatana', 'CodrinBradeaSatana', '09:02:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `premium_instagram`
--

CREATE TABLE `premium_instagram` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_instagram`
--

INSERT INTO `premium_instagram` (`id`, `name`, `count`) VALUES
(1, 'plosceac.alex', 0);

-- --------------------------------------------------------

--
-- Table structure for table `premium_youtube`
--

CREATE TABLE `premium_youtube` (
  `id` int(11) NOT NULL,
  `userLink` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_youtube`
--

INSERT INTO `premium_youtube` (`id`, `userLink`, `name`, `count`) VALUES
(1, 'https://www.youtube.com/channel/UCG5O7HXNN_dKsgD22GoiGFw', 'Motor(Bike)', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `normal_instagram`
--
ALTER TABLE `normal_instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normal_youtube`
--
ALTER TABLE `normal_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium_instagram`
--
ALTER TABLE `premium_instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium_youtube`
--
ALTER TABLE `premium_youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `normal_instagram`
--
ALTER TABLE `normal_instagram`
  MODIFY `id` int(64) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `normal_youtube`
--
ALTER TABLE `normal_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `premium_instagram`
--
ALTER TABLE `premium_instagram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `premium_youtube`
--
ALTER TABLE `premium_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


<?php
include 'header.php';


function redirect($link)
{
 // header("Location: $link",true,301);
  //exit();
}

$link = $_GET['igname'];
$db = $_GET['db'];
//if(isset($_POST['submit'])){
$sql = "UPDATE $db SET instagram_clicks=instagram_clicks + 1 WHERE id=1";
        mysqli_query($conn,$sql);
$sql = "UPDATE $db SET count=count + 1 WHERE name='$link'";
        mysqli_query($conn,$sql);
   $link = 'https://www.instagram.com/'.$link.'/';
// header("Location: $link",true,301);
// exit();
// }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="aig.css" type="text/css">
    <link rel="stylesheet" href="animate.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">

    <script type="text/javascript" src="AR.js"></script>
    <script type="text/javascript" src="AD.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Ad</title>
  </head>
  <body>
    <div class='container-fluid' id='ad'>
      <div class='row h-100'>
      <div class='col-sm-4 col-md-4 col-lg-4 col-xl-4' ></div>
      <div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'></div>
      <form method="post" action="<?php redirect($link); ?>" class='col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-wrap align-items-center'><button type="submit" name="submit" class="btn btn-success btn-lg ml-auto d-block align-middle custom" style='vertical-align:middle;'>
    <b id='time'></b></button></form>
      </div>
      </div>
    <div class='container-fluid' id='ad2'>
           <div class='row h-100  d-flex flex-wrap align-items-center'>
             <div class= 'd-flex flex-column mx-auto'>
<h1 class="text-center display-2 txt" >There is a space for an ad.</h1><br>
<h2 class='text-center'>Do you have an ad? Do you need this place?</h2><br>
<h3 class='text-center'>Contact us:</h3>
<a href="mailto:fheravem@gmail.com?subject=Need%20promotional%20space"><img src='images/index/mail.png' id='img' class='d-flex flex-column mx-auto'></a>
          </div>
           </div>
      </div>

  </body>
</html>
