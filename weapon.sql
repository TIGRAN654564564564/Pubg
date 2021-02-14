-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2021 at 01:58 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pubg`
--

-- --------------------------------------------------------

--
-- Table structure for table `weapon`
--

CREATE TABLE IF NOT EXISTS `weapon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `weapon`
--

INSERT INTO `weapon` (`id`, `title`, `price`, `image`, `description`) VALUES
(1, 'M416 Pirate KIM', 150, 'https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/e/ef/Weapon_skin_Pirate_KIM%27s_M416.png?version=e6d3ba7f2c15a7b190269502ef25b12a', '<li>Muzzles:Compensator(AR), Flash Hider(AR), Suppressor(AR).</li> <li>Sights:Red Dot Sight, Holographic Sight, 2x Scope, 3x Scope, 4x Scope, 6x Scope.</li><li>Magazines:Extended Mag(AR), Quickdraw(AR), Extended Quickdraw Mag(AR).</li>'),
(2, 'M416 GLACIER', 200, 'https://i.pinimg.com/originals/4b/3c/0d/4b3c0d598f5586ff2e892823219f7843.jpg', '<li>Muzzles:Compensator(AR), Flash Hider(AR), Suppressor(AR).</li><li>Sights:Red Dot Sight, Holographic Sight, 2x Scope, 3x Scope, 4x Scope, 6x Scope.</li><li>Magazines:Extended Mag(AR), Quickdraw(AR), Extended Quickdraw Mag(AR).</li>'),
(3, 'AWM Wakgood', 100, 'https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/4/4f/Weapon_skin_Wakgood%27s_AWM.png?version=80ae125d522efc5614a78d8d9c7fb22f', '<li>Muzzle:Compensator(Snipers), Flash Hider(Snipers), Suppressor(Snipers)(recommended).</li><li>Sights:Red Dot Sight, Holographic Sight, 2x Scope, 3x Scope, 4x Scope, 6x Scope, 8X Scope(recomended).</li><li>Stock:Cheek Pad (recommended).</li>'),
(5, 'AKM GLACIER', 100, 'https://1.bp.blogspot.com/-B1uAhpzeUcg/Xz-ki-XoqgI/AAAAAAAAAL8/PQUKsxvin8QU5mWFsgR3eSsRUl-ANiGcgCLcBGAsYHQ/s1600/Screenshot_2020_0509_190754.png', '<li>Muzzles:Compensator(AR), Flash Hider(AR), Suppressor(AR).</li>                                     <li>Sights:Red Dot Sight, Holographic Sight, 2x Scope, 3x Scope, 4x Scope, 6x Scope.</li>                                     <li>Magazines:Extended Mag(AR), Quickdraw(AR), Extended Quickdraw Mag(AR).</li>'),
(7, 'Kar98k Speed & Momentum', 90, 'https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/1/10/Weapon_skin_Speed_%26_Momentum_Kar98k.png?version=52b71ca85df043671c219baf6f3068d5', '<li>Muzzle:Compensator(Snipers), Flash Hider(Snipers), Suppressor(Snipers)(recommended).</li>                                     <li>Sights:Red Dot Sight, Holographic Sight, 2x Scope, 3x Scope, 4x Scope, 6x Scope, 8X Scope(recomended).</li>                                     <li>Stock:Cheek Pad (recommended),Bullet loops(Shotgun)</li>'),
(8, 'Groza Weathered Mustang', 85, 'https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/3/3c/Weapon_skin_Weathered_Mustang_Groza.png?version=1130e6c3a3fdf906a074caf90e7ab7f8', '<li>Muzzles: Suppressor (AR).</li>                                     <li>Sights:Red Dot Sight, Holographic Sight, 2x Scope, 3x Scope, 4x Scope, 6x Scope.</li>                                     <li>Magazines:Extended Mag(AR), Quickdraw(AR), Extended Quickdraw Mag(AR).</li>'),
(9, 'AUG Silver Plate', 80, 'https://static-prod.weplay.tv/2020-03-04/1bdddfe3dc70a261c86e892e4e02a355.272627-BAB7B7-8C9490.png', '<li>Muzzles:Compensator(AR), Flash Hider(AR), Suppressor(AR).</li>                                     <li>Foregrips: Vertical Foregrip, Angled Foregrip, Thumb Grip, Light Grip, Half Grip, Laser Sight.</li>                                     <li>Sights:Red Dot Sight, Holographic Sight, 2x Scope, 3x Scope, 4x Scope, 6x Scope.</li>                                     <li>Magazines:Extended Mag(AR), Quickdraw(AR), Extended Quickdraw Mag(AR).</li>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
