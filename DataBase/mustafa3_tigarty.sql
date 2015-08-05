-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 يوليو 2015 الساعة 10:24
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mustafa3_tigarty`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` text CHARACTER SET utf8 NOT NULL,
  `username` text CHARACTER SET utf8 NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `orgname` text CHARACTER SET utf8,
  `orgtype` text CHARACTER SET utf8,
  `email` text CHARACTER SET utf8,
  `phone` text CHARACTER SET utf8,
  `place` text CHARACTER SET utf8,
  `website` text CHARACTER SET utf8,
  `profilepicture` text CHARACTER SET utf8,
  `lastlogin` text CHARACTER SET utf8,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`AdminID`, `FullName`, `username`, `password`, `orgname`, `orgtype`, `email`, `phone`, `place`, `website`, `profilepicture`, `lastlogin`) VALUES
(1, 'mustafa muhammed kassab', 'mustafa1995', '123456', 'fify', 'fify', 'zord.1@msn.com', '12332131', 'gaza', 'ddd', 'ede', '1213'),
(2, 'kmkm', 'hhbhjgj', 'gvg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `admin_supplier_product`
--

CREATE TABLE IF NOT EXISTS `admin_supplier_product` (
  `AdminID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  KEY `admin_supplier_product_ibfk_1` (`ProductID`),
  KEY `admin_supplier_product_ibfk_2` (`AdminID`),
  KEY `admin_supplier_product_ibfk_3` (`SupplierID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `customersinvoice`
--

CREATE TABLE IF NOT EXISTS `customersinvoice` (
  `invoiceID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) DEFAULT NULL,
  `AdminID` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`invoiceID`),
  KEY `customersinvoice_ibfk_2` (`EmployeeID`),
  KEY `customersinvoice_ibfk_3` (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- إرجاع أو استيراد بيانات الجدول `customersinvoice`
--

INSERT INTO `customersinvoice` (`invoiceID`, `EmployeeID`, `AdminID`, `date`) VALUES
(1, 1, 1, '0000-00-00'),
(6, 2, 1, '0000-00-00'),
(7, NULL, 1, '0000-00-00'),
(8, NULL, 1, '0000-00-00'),
(9, NULL, 1, '0000-00-00'),
(10, NULL, 1, '0000-00-00'),
(11, NULL, 1, '0000-00-00'),
(12, NULL, 1, '0000-00-00'),
(13, NULL, 1, '0000-00-00'),
(14, NULL, 1, '0000-00-00'),
(15, NULL, 1, '0000-00-00'),
(16, NULL, 1, '0000-00-00'),
(17, NULL, 1, '0000-00-00'),
(18, NULL, 1, '0000-00-00'),
(19, NULL, 1, '0000-00-00'),
(20, NULL, 1, '0000-00-00'),
(21, NULL, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- بنية الجدول `customersinvoiceitem`
--

CREATE TABLE IF NOT EXISTS `customersinvoiceitem` (
  `InvoiceID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productname` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `date` text CHARACTER SET utf8,
  `adminid` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `customersinvoiceitem_ibfk_1` (`InvoiceID`),
  KEY `customersinvoiceitem_ibfk_2` (`productID`),
  KEY `customersinvoiceitem_ibfk_3` (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- إرجاع أو استيراد بيانات الجدول `customersinvoiceitem`
--

INSERT INTO `customersinvoiceitem` (`InvoiceID`, `productID`, `productname`, `price`, `quantity`, `date`, `adminid`, `id`) VALUES
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 2),
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 3),
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 4),
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 5),
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 6),
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 7),
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 8),
(1, 24, 'mmmm', 5225, 66, 'x.mx', 1, 9),
(1, 25, 'mmmm', NULL, NULL, NULL, 2, 10),
(1, 25, 'mmmm', NULL, NULL, NULL, 2, 11),
(1, 25, NULL, NULL, NULL, NULL, 1, 12),
(1, 25, 'kmkm', 5464556, 55465, 'JLJ', 1, 13),
(1, 25, ';lds;dslk', NULL, NULL, NULL, 1, 14),
(16, 25, NULL, 30, 29, NULL, 1, 16),
(16, 25, 'بطاطا', 30, 29, NULL, 1, 17),
(21, 25, '51', 5, 11, NULL, 1, 18);

-- --------------------------------------------------------

--
-- بنية الجدول `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeid` int(11) NOT NULL AUTO_INCREMENT,
  `AdminID` int(11) NOT NULL,
  `fullname` text CHARACTER SET utf8,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `orgname` text CHARACTER SET utf8,
  `orgtype` text CHARACTER SET utf8,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phone` text CHARACTER SET utf8,
  `place` text CHARACTER SET utf8,
  `website` text CHARACTER SET utf8,
  `profilepicture` text CHARACTER SET utf8,
  `hiredate` text CHARACTER SET utf8,
  `lastlogin` text CHARACTER SET utf8,
  PRIMARY KEY (`employeeid`),
  UNIQUE KEY `email` (`email`),
  KEY `employee_ibfk_1` (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `employee`
--

INSERT INTO `employee` (`employeeid`, `AdminID`, `fullname`, `username`, `password`, `orgname`, `orgtype`, `email`, `phone`, `place`, `website`, `profilepicture`, `hiredate`, `lastlogin`) VALUES
(1, 1, NULL, 'kk', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, NULL, 'kk', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) NOT NULL,
  `notification` varchar(300) NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=447 ;

--
-- إرجاع أو استيراد بيانات الجدول `notification`
--

INSERT INTO `notification` (`id`, `adminid`, `notification`, `seen`, `date`) VALUES
(441, 1, ' المنتج0 قد أصبحت كميته 9 , معرف التاجر الجالب للسعلة هو 1', 0, '2015-05-19 06:11:06'),
(442, 1, '  المنتج 0 قد أصبحت كميته 9 , معرف التاجر الجالب للسعلة هو 1', 0, '2015-05-19 09:12:22'),
(443, 1, '  المنتج 0 قد أصبحت كميته 9 , معرف التاجر الجالب للسعلة هو 1', 0, '2015-05-19 09:13:03'),
(444, 1, '  المنتج 0 قد أصبحت كميته 9 , معرف التاجر الجالب للسعلة هو 1', 0, '2015-05-19 09:15:34'),
(445, 1, '  المنتج 0 قد أصبحت كميته 9 , معرف التاجر الجالب للسعلة هو 1', 0, '2015-05-19 09:16:07'),
(446, 1, '  المنتج 0 قد أصبحت كميته 9 , معرف التاجر الجالب للسعلة هو 1', 0, '2015-05-19 10:06:23');

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `parcode` text CHARACTER SET utf8,
  `productname` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`productid`),
  UNIQUE KEY `name` (`productname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- إرجاع أو استيراد بيانات الجدول `product`
--

INSERT INTO `product` (`productid`, `parcode`, `productname`) VALUES
(24, NULL, 'l'),
(25, NULL, 'mm'),
(27, NULL, 'lll'),
(28, NULL, 'ناقة'),
(29, NULL, 'بطاطا'),
(30, NULL, '51'),
(31, NULL, '');

-- --------------------------------------------------------

--
-- بنية الجدول `productdetails`
--

CREATE TABLE IF NOT EXISTS `productdetails` (
  `productdetailsid` int(11) NOT NULL AUTO_INCREMENT,
  `productID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `quantity` int(20) DEFAULT NULL,
  `wholesale` double DEFAULT NULL,
  `onesale` double DEFAULT NULL,
  `expiredate` text CHARACTER SET utf8,
  `kind` text CHARACTER SET utf8,
  `productname` varchar(40) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`productdetailsid`),
  KEY `productdetails_ibfk_1` (`productID`),
  KEY `productdetails_ibfk_2` (`AdminID`),
  KEY `productdetails_ibfk_3` (`SupplierID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- إرجاع أو استيراد بيانات الجدول `productdetails`
--

INSERT INTO `productdetails` (`productdetailsid`, `productID`, `SupplierID`, `AdminID`, `quantity`, `wholesale`, `onesale`, `expiredate`, `kind`, `productname`) VALUES
(1, 24, 1, 1, 9, 12, 12, NULL, NULL, '0'),
(2, 25, 1, 1, 29, 50, 60, '31232', '5313', 'بطاطا'),
(3, 25, 1, 1, 1155, 50, 60, '31232', '5313', '51'),
(4, 25, 1, 1, 1155, 50, 60, '31232', '5313', '51'),
(5, 25, 1, 1, 1155, 50, 60, '31232', '5313', '51'),
(6, 25, 1, 1, 1155, 50, 60, '31232', '5313', '51');

-- --------------------------------------------------------

--
-- بنية الجدول `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplierid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text CHARACTER SET utf8,
  `place` text CHARACTER SET utf8,
  `phone` text CHARACTER SET utf8,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `website` text CHARACTER SET utf8,
  PRIMARY KEY (`supplierid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- إرجاع أو استيراد بيانات الجدول `supplier`
--

INSERT INTO `supplier` (`supplierid`, `fullname`, `place`, `phone`, `email`, `website`) VALUES
(1, 'kmkm', NULL, NULL, NULL, NULL),
(2, 'kmkm', NULL, NULL, NULL, NULL),
(3, 'fllk', 'ljl', '7979', 'adel@adelbios.com', 'lfkf');

-- --------------------------------------------------------

--
-- بنية الجدول `suppliersinvoice`
--

CREATE TABLE IF NOT EXISTS `suppliersinvoice` (
  `supplierInvoiceID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminID` int(11) NOT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  `Date` text,
  `supplierID` int(11) DEFAULT NULL,
  PRIMARY KEY (`supplierInvoiceID`),
  KEY `suppliersinvoice_ibfk_1` (`supplierID`),
  KEY `suppliersinvoice_ibfk_2` (`AdminID`),
  KEY `suppliersinvoice_ibfk_3` (`EmployeeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- إرجاع أو استيراد بيانات الجدول `suppliersinvoice`
--

INSERT INTO `suppliersinvoice` (`supplierInvoiceID`, `AdminID`, `EmployeeID`, `Date`, `supplierID`) VALUES
(1, 1, 1, NULL, 1),
(11, 1, NULL, NULL, 2),
(12, 1, NULL, NULL, 2),
(13, 1, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- بنية الجدول `suppliersinvoiceitem`
--

CREATE TABLE IF NOT EXISTS `suppliersinvoiceitem` (
  `supplierInvoiceID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ProductName` text,
  `Price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `wholesale` double DEFAULT NULL,
  `expiredate` text,
  `productdetailsid` int(11) NOT NULL,
  `Adminid` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `productdetailsid` (`productdetailsid`),
  KEY `supplierInvoiceID` (`supplierInvoiceID`),
  KEY `ProductID` (`ProductID`),
  KEY `Adminid` (`Adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- إرجاع أو استيراد بيانات الجدول `suppliersinvoiceitem`
--

INSERT INTO `suppliersinvoiceitem` (`supplierInvoiceID`, `ProductID`, `ProductName`, `Price`, `quantity`, `wholesale`, `expiredate`, `productdetailsid`, `Adminid`, `id`) VALUES
(1, 25, NULL, 60, 20, 50, NULL, 2, 1, 2),
(1, 25, NULL, NULL, NULL, NULL, NULL, 2, 1, 3),
(11, 29, 'بطاطا', 30, 2, 60, NULL, 2, 1, 8),
(12, 30, '51', 50, 55, 20, NULL, 6, 1, 9),
(13, 30, '51', 800, 900, 700, NULL, 6, 1, 10);

-- --------------------------------------------------------

--
-- بنية الجدول `supplier_product`
--

CREATE TABLE IF NOT EXISTS `supplier_product` (
  `SupplierID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  KEY `supplier_product_ibfk_1` (`SupplierID`),
  KEY `supplier_product_ibfk_2` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `supplier_product_productdetailes`
--

CREATE TABLE IF NOT EXISTS `supplier_product_productdetailes` (
  `supplierid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productdetailesid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `admin_supplier_product`
--
ALTER TABLE `admin_supplier_product`
  ADD CONSTRAINT `admin_supplier_product_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `admin_supplier_product_ibfk_2` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `admin_supplier_product_ibfk_3` FOREIGN KEY (`SupplierID`) REFERENCES `supplier` (`supplierid`);

--
-- القيود للجدول `customersinvoice`
--
ALTER TABLE `customersinvoice`
  ADD CONSTRAINT `customersinvoice_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`employeeid`),
  ADD CONSTRAINT `customersinvoice_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`employeeid`),
  ADD CONSTRAINT `customersinvoice_ibfk_3` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`);

--
-- القيود للجدول `customersinvoiceitem`
--
ALTER TABLE `customersinvoiceitem`
  ADD CONSTRAINT `customersinvoiceitem_ibfk_1` FOREIGN KEY (`InvoiceID`) REFERENCES `customersinvoice` (`invoiceID`),
  ADD CONSTRAINT `customersinvoiceitem_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `customersinvoiceitem_ibfk_3` FOREIGN KEY (`adminid`) REFERENCES `admin` (`AdminID`);

--
-- القيود للجدول `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`);

--
-- القيود للجدول `productdetails`
--
ALTER TABLE `productdetails`
  ADD CONSTRAINT `productdetails_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `productdetails_ibfk_2` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `productdetails_ibfk_3` FOREIGN KEY (`SupplierID`) REFERENCES `supplier` (`supplierid`);

--
-- القيود للجدول `suppliersinvoice`
--
ALTER TABLE `suppliersinvoice`
  ADD CONSTRAINT `suppliersinvoice_ibfk_1` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierid`),
  ADD CONSTRAINT `suppliersinvoice_ibfk_2` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `suppliersinvoice_ibfk_3` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`employeeid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
