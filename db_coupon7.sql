-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 30, 2022 at 03:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coupon7`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `skills`, `address`, `designation`, `age`) VALUES
(1, 'harsh', 'adlf', 'ajskdfl', 'asjdfl', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `fName` char(15) NOT NULL,
  `lName` char(15) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `fName`, `lName`, `contact`, `email`, `pass`) VALUES
(1, 'Harsh', 'Tejani', 996969658, 'tejani317@gmail.com', 'Surat123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `couponId` int(11) NOT NULL,
  `couponCode` char(10) NOT NULL,
  `shopId` int(11) NOT NULL,
  `couponImage` varchar(255) NOT NULL,
  `discount` float NOT NULL,
  `offer` varchar(120) NOT NULL,
  `couponDate` date NOT NULL,
  `couponExpireDate` date NOT NULL,
  `isApprove` int(11) NOT NULL DEFAULT '0',
  `review` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`couponId`, `couponCode`, `shopId`, `couponImage`, `discount`, `offer`, `couponDate`, `couponExpireDate`, `isApprove`, `review`) VALUES
(21, 'save10', 2, '60392766589e8coupon1.png', 10, 'Get 10 % Discount On  Your Bill', '2021-02-26', '2021-06-05', 1, NULL),
(22, 'Coupon50', 2, '603927de4b382coupon2.jpg', 50, 'Get fLAT 50 RS OFF', '2021-02-26', '2021-05-10', 1, NULL),
(23, 'Coupon30', 2, '6039280271696coupon3.png', 30, 'Flat 30', '2021-02-26', '2021-06-28', 1, NULL),
(24, 'Mon10', 2, '60392832c69f1coupon4.png', 10, 'Get 10% off on monday', '2021-02-27', '2021-05-28', 1, NULL),
(25, 'B1G1', 2, '60392883a5e2fcoupon5.jpeg', 100, 'Buy 100', '2021-02-26', '2021-06-05', 1, NULL),
(26, 'Dollar10', 2, '6039291246511coupon6.jpeg', 10, 'Get 10 Rs cashback', '2021-02-27', '2021-06-05', 1, NULL),
(27, 'Smit101', 2, '6039a6e9a832ecoupon7.jpg', 15, 'Get 15 % off on your bill', '2021-02-27', '2021-06-05', 1, NULL),
(28, 'Qwert12', 2, '603a18174d260coupon7.jpg', 15, 'Get 15% off on bill of 1000', '2021-02-27', '2021-06-06', 1, NULL),
(29, 'bumber10', 2, '603fc59e08ffecoupon8.jpeg', 10, 'get Flat 10% off', '2021-03-03', '2021-06-06', 1, NULL),
(30, 'Lalu10', 1, '603fc66968973coupon8.jpeg', 10, 'Get 10% offf', '2021-03-03', '2021-06-05', 1, NULL),
(31, 'Bmiit101', 1, '60408e8d12a91coupon9.jpeg', 50, 'get 50 % off on selected items', '2021-03-04', '2021-06-05', 1, NULL),
(32, 'Swiggy20', 1, '604091f4413f9coupon9.jpeg', 40, 'Get 40 % discount', '2021-03-04', '2021-05-17', 1, NULL),
(33, 'Harshal', 2, '6048f237cf4a3coupon3.png', 30, 'Get 30% off on your bill', '2021-03-10', '2021-03-31', 1, NULL),
(34, 'finaldemo', 2, '604a478bb87b7coupon1.png', 50, 'get 50 from under mifflin', '2021-03-10', '2021-04-10', 1, NULL),
(35, 'Raj10', 2, '604ef03014267coupon2.jpg', 50, 'get 50 % off ', '2021-03-15', '2021-03-21', 1, NULL),
(36, 'v10', 5, '604f2009bd425coupon8.jpeg', 10, 'Get 10% (utu)', '2021-03-15', '2021-03-22', 1, NULL),
(37, 'v50', 5, '604f205424c25coupon9.jpeg', 50, 'Get 50 utu', '2021-03-15', '2021-03-21', 1, NULL),
(38, 'h33', 2, '60530d4fd8a6acoupon2.jpg', 50, 'get 50 % instant', '2021-03-10', '2021-03-21', 1, NULL),
(39, 'save40', 2, '60546121125dbcoupon5.jpeg', 40, 'Get 40% Discount', '2021-03-19', '2021-03-29', 1, NULL),
(40, 'save40', 2, '605461894e470coupon5.jpeg', 40, 'Get 40% Discount', '2021-03-19', '2021-03-29', 1, NULL),
(41, 'save40', 2, '6054619a9cd78coupon5.jpeg', 40, 'Get 40% Discount', '2021-03-19', '2021-03-29', 1, NULL),
(42, 'deim', 2, '6054621f5bdd1coupon3.png', 30, 'demom saf', '2021-03-10', '2021-04-10', 1, NULL),
(43, 'Swiggy10', 2, '60557f406e9dccoupon2.jpg', 10, 'asdf', '2021-03-27', '2021-03-17', 1, NULL),
(44, 'Swiggy10', 2, '60557f6cad6e7coupon2.jpg', 10, 'asdf', '2021-03-27', '2021-03-17', 1, NULL),
(45, 'Final10', 2, '6055894695621coupon1.png', 55, 'Get 55 % off on final', '2021-03-21', '2021-03-31', 1, NULL),
(46, 'giftCard', 2, '607c833f97043couponimg.jpg', 70, '70 % discount on purchase of 100 rs', '2021-04-19', '2021-05-20', 2, NULL),
(47, 'giftCard', 2, '607c83cd44f59couponimg.jpg', 70, '70 off', '2021-04-19', '2021-04-30', 1, NULL),
(48, '50off', 2, '607c844abbdc7604a478bb87b7coupon1.png', 50, 'get 50 off', '2021-04-19', '2021-04-30', 1, NULL),
(49, 'giftCard', 2, '607c848a4f49b6039a6e9a832ecoupon7.jpg', 70, 'xcfbgv', '2021-04-19', '2021-04-27', 1, NULL),
(50, 'Rajesh10', 6, '607fc221e817ecoupon10p.png', 10, 'GET 10 % OFF ON ANY OF OUR PURCHASES', '2021-04-21', '2021-09-22', 1, NULL),
(51, 'Bumper10', 2, '608ec67279cf3couponimg.jpg', 10, 'Get 10 %off', '2021-05-02', '2021-05-26', 1, NULL),
(52, '50off', 2, '608ff5e19a4cdcoupon10p.png', 50, 'get 50%off', '2021-05-04', '2021-05-19', 0, NULL),
(53, 'Cafe10', 7, '6094b92e4a367couponimg.jpg', 80, 'flat 80%', '2021-05-07', '2021-05-22', 1, NULL),
(54, 'giftCard1', 2, '6094bd6838449index.php', 200, 'Buy 1 get 1', '2021-05-07', '2021-05-08', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cId` int(11) NOT NULL,
  `fName` char(15) NOT NULL,
  `lName` char(15) NOT NULL,
  `contactNo` bigint(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `DoB` date DEFAULT NULL,
  `DateofRegistration` date NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `isApprove` char(1) NOT NULL DEFAULT '0',
  `is_Verified` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cId`, `fName`, `lName`, `contactNo`, `gender`, `email`, `password`, `DoB`, `DateofRegistration`, `address`, `isApprove`, `is_Verified`) VALUES
(1, 'Arvind', 'Tejani', 9825291596, 'M', 'hytechsurat1@gmail.com', 'Surat123@@', '1975-02-10', '2021-02-19', 'The Legends utu', '2', 0),
(2, 'Harsh', 'Tejani', 9537283602, 'M', 'tejani317@gmail.com', 'Surat123', '2000-09-22', '2021-02-19', '73 Suncity Row House Peddar Road Mota varachha Surat', '1', 1),
(3, 'RekhaBen', 'Tejani', 9909282857, 'F', 'rtejani@gmail.com', 'Zxcvbnm123@', NULL, '2021-02-20', NULL, '1', 0),
(4, 'Narendra', 'Modi', 9090909090, 'M', 'modi@pmo.in', 'Modi4indiai', NULL, '2021-02-20', NULL, '1', 0),
(5, 'Rahul', 'Gandhi', 9090909090, 'M', 'raga@gandhi.com', 'Zxc123123', NULL, '2021-02-22', NULL, '2', 0),
(6, 'Smit', 'Donga', 7043410709, 'M', '18bmiit066@gmail.com', 'Zxc123123', NULL, '2021-02-22', NULL, '2', 0),
(7, 'Harsh', 'Tejani', 7990231714, 'M', '18bmiit113@gmail.com', 'Surat123', NULL, '2021-02-22', NULL, '1', 0),
(11, 'John', 'Doe', 1234567384, 'M', 'smitdonga126@gmail.com', 'Zxc123123', '2001-06-12', '2021-02-22', 'Patel Park', '0', 1),
(13, 'Jayesh', 'Hirpara', 9898974853, 'M', '19bmiitbscit009@gmail.com', 'Zxc123123', NULL, '2021-02-22', NULL, '1', 1),
(14, 'Nirav', 'Savani', 9786079455, 'M', '18bmiit038@gmail.com', 'Asdf12345', NULL, '2021-02-22', NULL, '0', 1),
(15, 'Jeet', 'Donga', 9876767656, 'M', 'jvnasriwala@utu.ac.in', 'Surat123', NULL, '2021-02-22', NULL, '1', 1),
(16, 'joey', 'Tribuano', 9898967564, 'M', 'joey@friend.com', 'Surat123', NULL, '2021-02-26', NULL, '2', 0),
(17, 'Harshal', 'Shiyani', 9925260954, 'M', 'harshal.shiyani@gmail.com', 'Zxc123123', '1999-12-25', '2021-05-02', '28 Patel Park', '1', 1),
(18, 'Harsh', 'Sutariya', 8347345829, 'M', '18bmiit126@gmail.com', 'Surat123', NULL, '2021-03-18', NULL, '2', 1),
(19, 'Bhumika', 'Maam', 9898989898, 'F', 'bhumika.patel@utu.ac.in', 'Surat123', NULL, '2021-03-19', NULL, '2', 0),
(20, 'Chintan', 'Boghani', 9925608227, 'M', 'harshu.shiyani@gmail.com', 'Zxc123123', NULL, '2021-03-19', NULL, '1', 1),
(21, 'Rohan', 'Gada', 9825236985, 'M', 'harshtejani71@gmail.com', 'Zxc123123', NULL, '2021-04-21', NULL, '1', 1),
(22, 'Arvind', 'Patel', 9825291596, 'M', 'qualitychemceo@gmail.com', 'Zxc123123', NULL, '2021-05-03', NULL, '1', 1),
(23, 'heel', 'doe', 9685874563, 'M', 'manish.vala@utu.ac.in', 'Surat123', NULL, '2021-05-07', NULL, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imagetemp`
--

CREATE TABLE `tbl_imagetemp` (
  `imageId` int(11) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageData` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_imagetemp`
--

INSERT INTO `tbl_imagetemp` (`imageId`, `imageType`, `imageData`) VALUES
(1, 'image/png', 0x89504e470d0a1a0a0000000d494844520000012200000122010300000067704df500000006504c5445ffffff00000055c2d37e000000097048597300000ec400000ec401952b0e1b00000100494441546881edd84d1283200c8661663c0047e2ea1cc903388342127f5adc1116edfb2d8a3f4f5719123504420821ff93a2d98ee3b88592a35dc9286f252702f4e77e03e5a96a49b215477c2d186aa2b253d47ca5fd083551b5c5eeb5a3fb0d94a33a27f2d59e3a1319e5a06ebe7f19e5a64a59973a878bfc58a3aaa7286f25dbe1a02d21adb66332ca5f1d632009a8b50a8b3e8ea2fc55bbfc28987994b3ba3a532b93fef3eb6908355e3d7c5da2b6a797a0c6a9a2b137b04a7b731be5a0725be2c7cbd7f2f6b51335529d5f7d927d6fd06e859aa6a43325d922af154279a8200fa1b6315013545ba4423d80f253d744ce36157a6f01a8f18a1042c8af67073f745a50e488efc40000000049454e44ae426082),
(2, 'image/png', 0x89504e470d0a1a0a0000000d494844520000012200000122010300000067704df500000006504c5445ffffff00000055c2d37e000000097048597300000ec400000ec401952b0e1b00000100494441546881edd84d1283200c8661663c0047e2ea1cc903388342127f5adc1116edfb2d8a3f4f5719123504420821ff93a2d98ee3b88592a35dc9286f252702f4e77e03e5a96a49b215477c2d186aa2b253d47ca5fd083551b5c5eeb5a3fb0d94a33a27f2d59e3a1319e5a06ebe7f19e5a64a59973a878bfc58a3aaa7286f25dbe1a02d21adb66332ca5f1d632009a8b50a8b3e8ea2fc55bbfc28987994b3ba3a532b93fef3eb6908355e3d7c5da2b6a797a0c6a9a2b137b04a7b731be5a0725be2c7cbd7f2f6b51335529d5f7d927d6fd06e859aa6a43325d922af154279a8200fa1b6315013545ba4423d80f253d744ce36157a6f01a8f18a1042c8af67073f745a50e488efc40000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_redeemcoupon`
--

CREATE TABLE `tbl_redeemcoupon` (
  `redeemCouponid` int(11) NOT NULL,
  `couponId` int(11) NOT NULL,
  `customerId` int(11) DEFAULT NULL,
  `udate` date DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `finalAmount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_redeemcoupon`
--

INSERT INTO `tbl_redeemcoupon` (`redeemCouponid`, `couponId`, `customerId`, `udate`, `mrp`, `discount`, `finalAmount`) VALUES
(1, 21, 2, '2021-04-18', 3500, 10, 3150),
(2, 24, 7, '2021-04-18', 9000, 10, 8100),
(3, 50, 21, '2021-04-21', 1500, 10, 1350),
(4, 50, 2, '2021-04-29', 1500, 10, 1350),
(5, 51, 2, '2021-05-02', 90000, 10, 81000),
(6, 22, 22, '2021-05-03', 50000, 50, 25000),
(7, 24, 2, '2021-05-03', 50000, 10, 45000),
(8, 23, 2, '2021-05-06', 20000, 30, 14000),
(9, 53, 2, '2021-05-07', 90000, 80, 18000),
(10, 21, 23, '2021-05-07', 60000, 10, 54000),
(11, 27, 2, '2021-05-10', 60000, 15, 51000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shopId` int(11) NOT NULL,
  `fName` char(15) NOT NULL,
  `lName` char(15) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` char(32) NOT NULL,
  `shopName` char(30) NOT NULL,
  `gst` char(15) NOT NULL,
  `shopCategoryId` int(11) NOT NULL,
  `shopAdd` varchar(50) NOT NULL,
  `DateofRegistration` date NOT NULL,
  `is_Approve` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`shopId`, `fName`, `lName`, `contact`, `email`, `pass`, `shopName`, `gst`, `shopCategoryId`, `shopAdd`, `DateofRegistration`, `is_Approve`) VALUES
(1, 'Lalu', 'Lal', 9234582129, 'lalulal@gmail.com', 'Zxc123123', 'Shoppozone', '24AABCU9603R1ZT', 1, 'Laxmi Enclave', '2021-02-21', 0),
(2, 'Michael', 'Scot', 9283749323, 'ms@gmail.com', 'Zxc123123', 'DunderMifflin', '24AZBCU9203R1ZT', 2, 'Scranton Business Park', '2021-02-21', 0),
(4, 'Amit', 'Shah', 9687865675, 'amit@gmail.com', 'Surat123', 'Amitshop', '24BZBCU9203R1ZT', 1, 'CircuitHouse', '2021-02-26', 0),
(5, 'Vipulsir', 'Gamit', 9714995568, 'vipul.gamit@gmail.com', 'Surat123', 'Utu', '24AZBCU9403R1ZT', 1, 'Bmiit', '2021-03-15', 0),
(6, 'Rajesh', 'Metha', 9825236985, 'rm@gmail.com', 'Zxc123123', 'Metha Cafe', '26BZBCU9203R1ZT', 3, 'b-202,Raghvir Shopper ', '2021-04-21', 0),
(7, 'Smit', 'Donga', 9985867536, 'smitdonga066@gmail.com', 'Zxc123123', 'Smit Kitchen', '24AZBCU9203R1ZT', 3, 'Patel Park', '2021-05-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shopcategory`
--

CREATE TABLE `tbl_shopcategory` (
  `shopCategoryId` int(11) NOT NULL,
  `shopCategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shopcategory`
--

INSERT INTO `tbl_shopcategory` (`shopCategoryId`, `shopCategory`) VALUES
(21, '123'),
(1, 'Barber Shop'),
(3, 'Cafe'),
(2, 'Cake Shop'),
(22, 'Fast food'),
(17, 'Grocery Shop '),
(20, 'Optical Shop'),
(12, 'Pan Shop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`couponId`),
  ADD KEY `shopId` (`shopId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_imagetemp`
--
ALTER TABLE `tbl_imagetemp`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `tbl_redeemcoupon`
--
ALTER TABLE `tbl_redeemcoupon`
  ADD PRIMARY KEY (`redeemCouponid`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`shopId`);

--
-- Indexes for table `tbl_shopcategory`
--
ALTER TABLE `tbl_shopcategory`
  ADD PRIMARY KEY (`shopCategoryId`),
  ADD UNIQUE KEY `shopCategory` (`shopCategory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `couponId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_imagetemp`
--
ALTER TABLE `tbl_imagetemp`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_redeemcoupon`
--
ALTER TABLE `tbl_redeemcoupon`
  MODIFY `redeemCouponid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `shopId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_shopcategory`
--
ALTER TABLE `tbl_shopcategory`
  MODIFY `shopCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD CONSTRAINT `tbl_coupon_ibfk_1` FOREIGN KEY (`shopId`) REFERENCES `tbl_shop` (`shopId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
