
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `bloodbank`
--
CREATE DATABASE IF NOT EXISTS `bloodbank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bloodbank`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `password` varchar(21) NOT NULL,
  `email_address` varchar(44) NOT NULL,
  `contact_number` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`,  `password`,`email_address`, `contact_number`) VALUES
(1, 'prasanto',  '1234', 'prasanto.cou@gmail.com', 01869201018),
(2, 'reayz', '1234',  'reayz@gmail.com',01738081339);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(44) NOT NULL,
  `password` varchar(21) NOT NULL,
  `formal_name` varchar(44) NOT NULL,
  `gender` varchar(14) NOT NULL,
  `email_address` varchar(44) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `age` int(3) NOT NULL,
  `location` varchar(24) NOT NULL,
  `last_donate_date` varchar(44) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `formal_name`, `gender`, `email_address`, `blood_group`, `contact_number`, `age`, `location`, `last_donate_date`) VALUES
(1, 'Prasanto19', '1234', 'Prashanta Kumar Dey','Male', 'prasanto.cou@gmail.com', 'A+',  01869201018, 22, 'Chittagong',  '22 Feb,2016'),
(2, 'Palash', '1234', 'Palash Chandra Roy','Male', 'palas.cou@gmail.com', 'B+',  01769251061, 23, 'Comilla',  '17 april,2015'),
(3, 'Pritam', '1234', 'Pritam Ghosh','Male', 'pritam.cou@gmail.com', 'AB-',  01696013738, 22, 'Chittagong',  '22 Feb,2016');

