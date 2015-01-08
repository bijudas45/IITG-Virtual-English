drop database if exists englab;
create database englab;
use englab;


-- Documentor
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE IF NOT EXISTS `content` (
  `srno` int(5) NOT NULL AUTO_INCREMENT,
  `cid` varchar(10) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `cnid` varchar(10) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `posttext` text NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`srno`, `cid`, `tid`, `cnid`, `pid`, `title`, `author`, `posttext`, `date`) VALUES
(4, 'C001', 'T001', 'CN001', 'P002', '', '', '', ''),
(3, 'C001', 'T002', 'CN001', 'P001', 'Welcome to Virtual lab', '', '<p>', ''),
(7, 'C001', 'T003', 'CN004', 'P007', 'sdf', 'sdf', '<p>dsfsdf</p>', 'May 17, 2010'),
(8, 'C001', 'T004', 'CN008', 'P008', 'Testq', 'Susahnth', '<p>sdfsdf</p>', 'May 21, 2010');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `Srno` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(5) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `caption` varchar(30) NOT NULL,
  `clink` varchar(10) NOT NULL,
  `icon` varchar(30) NOT NULL,
  PRIMARY KEY (`Srno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Srno`, `cid`, `tid`, `caption`, `clink`, `icon`) VALUES
(1, 'C001', 'T001', 'Theory', 'Cn001', 'theory.jpg'),
(2, 'C001', 'T002', 'Procedure', 'CN002', 'procedure.jpg'),
(8, 'C001', 'T003', 'Self-evaluation', 'CN006', 'eval.jpg'),
(5, 'C001', 'T004', 'Simulator', 'CN005', 'sim.jpg');


CREATE TABLE IF NOT EXISTS `documentor` (
  `id` int(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Table structure for table `topmenu`
--

CREATE TABLE IF NOT EXISTS `topmenu` (
  `Srno` int(5) NOT NULL AUTO_INCREMENT,
  `caption` varchar(30) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`Srno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


--
-- Dumping data for table `topmenu`
--

INSERT INTO `topmenu` (`Srno`, `caption`, `link`) VALUES
(1, 'Home', 'index2.php');

