-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2021 at 03:10 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sieuthisuadinhduong_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtb_bill`
--

DROP TABLE IF EXISTS `dtb_bill`;
CREATE TABLE IF NOT EXISTS `dtb_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `id_employee` int(10) UNSIGNED NOT NULL,
  `date_order` date NOT NULL,
  `amount` int(10) NOT NULL,
  `total` float NOT NULL,
  `note` mediumtext,
  PRIMARY KEY (`id`),
  KEY `FK_idcustomer_customer` (`id_customer`),
  KEY `FK_idemployee_employee` (`id_employee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dtb_billdetail`
--

DROP TABLE IF EXISTS `dtb_billdetail`;
CREATE TABLE IF NOT EXISTS `dtb_billdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_bill` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_idbill` (`id_bill`),
  KEY `FK_idproduct_billdetail` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dtb_customer`
--

DROP TABLE IF EXISTS `dtb_customer`;
CREATE TABLE IF NOT EXISTS `dtb_customer` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtb_customer`
--

INSERT INTO `dtb_customer` (`id`, `full_name`, `phone`, `address`, `email`, `password`) VALUES
(52, 'Sang', 'sss', 'ss', 'ssss', '8f60c8102d29fcd525162d02eed4566b'),
(53, 'Sang', 'dd', 'dd', 'sđsdsc', '77963b7a931377ad4ab5ad6a9cd718aa'),
(54, '58588', '5555', '555', '5555', '6074c6aa3488f3c2dddff2a7ca821aab'),
(55, 'sang', '88', '888', '5588', '0a113ef6b61820daa5611c870ed8d5ee'),
(56, '113', 'hhh', 'hhhh', 'hhhh', 'c1181aacf646b97f0a0a782db351a405'),
(57, 'Sang Nguyễn', 'ssss', 'sss', 'bbbb', '8f60c8102d29fcd525162d02eed4566b'),
(58, 'Sang', 'ssss', 'sss', '1aa1a1a', '8f60c8102d29fcd525162d02eed4566b'),
(59, 'Sang', 'ss', 'sss', 'ssssssssssssssss', '8f60c8102d29fcd525162d02eed4566b'),
(60, 'Đỗ Văn Giang', 'sss', 'sss', 'abc', '83b861efd4ce3bb438dd07435c9e7044'),
(61, 'SAng', 'ee', 'ee', '123', 'd2f2297d6e829cd3493aa7de4416a18f'),
(62, 'Sang', 'dđ', 'dd', 'sang123', '2fab4064ea4dd866f9ffe0d8302404e8'),
(63, 'Sang', 'fff', 'fff', 'hii', '343d9040a671c45832ee5381860e2996'),
(64, 'Sang', '0373853489', 'dđ', 'longdz@gmail.com', '440ac85892ca43ad26d44c7ad9d47d3e'),
(65, 'Nguyen Van Sang', '1222', '123323', 'sanghjp@gmail.com', '4297f44b13955235245b2497399d7a93'),
(66, 'Nguyễn Văn Sang', '037385449', 'BN', 'sanghjp12345s21@gmail.com', '4297f44b13955235245b2497399d7a93'),
(67, 'Sang', '1222', 'a', 'aa1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `dtb_detailproduct`
--

DROP TABLE IF EXISTS `dtb_detailproduct`;
CREATE TABLE IF NOT EXISTS `dtb_detailproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trademark` varchar(50) DEFAULT 'Đang cập nhật',
  `manufacturing_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `weight` int(5) NOT NULL,
  `user_object` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtb_detailproduct`
--

INSERT INTO `dtb_detailproduct` (`id`, `trademark`, `manufacturing_date`, `expiry_date`, `weight`, `user_object`) VALUES
(121, 'Meji Nhật Bản', '2021-01-01', '2023-01-01', 900, 'Sữa dành cho bé từ 0-1 tuổi'),
(122, 'BLACKMORES', '2021-03-01', '2023-03-01', 900, 'Sữa dành chó bé từ 1 tuổi trở lên'),
(123, 'Eneright Nutrition', '2021-03-01', '2023-03-01', 700, 'Sữa dành cho các bé lớn trên 3 tuổi.'),
(124, 'Abbott', '2021-04-01', '2023-04-01', 900, 'Người lớn, người ăn uống kém.'),
(125, 'Nestlé Thụy Sĩ', '2021-04-01', '2023-04-01', 750, 'Dành cho người Kém Hấp Thu'),
(126, 'ILDONG FOODIS – Hàn Quốc', '2021-04-01', '2023-04-01', 700, 'Dành cho trẻ từ 1-9 tuổi'),
(127, 'ILDONG FOODIS – Hàn Quốc', '2021-04-01', '2023-04-01', 650, 'Dành cho bé từ 1 tuổi trở lên'),
(128, 'VITADAIRY', '2021-05-01', '2023-05-01', 900, 'Dinh dưỡng cho người bệnh tiểu đường'),
(129, 'NUTRICARE', '2021-05-01', '2023-05-01', 900, 'Dinh dưỡng cho người bệnh ung thư tăng đề kháng'),
(130, ' VITADAIRY', '2021-05-01', '2023-05-01', 900, 'Dinh dưỡng giảm Protein cho bệnh nhân thận'),
(131, 'VITADAIRY', '2021-01-01', '2023-01-01', 900, 'Dinh dưỡng cao năng lượng cho người cao tuổi'),
(132, 'Nutricia', '2021-01-01', '2023-12-01', 2000, 'Dinh dưỡng cho người bệnh ung thư'),
(133, 'BLACKMORES', '2021-01-01', '2023-12-01', 900, 'Dinh dưỡng cao năng lượng cho trẻ từ 0-6 tháng'),
(134, 'BLACKMORES', '2021-01-01', '2023-12-01', 900, 'Dinh dưỡng cao năng lượng cho trẻ từ 6-12 tháng'),
(135, ' Nestlé HealthScience', '2021-01-01', '2023-12-01', 800, 'Dinh dưỡng cao năng lượng giúp trẻ tăng trưởng tốt'),
(136, 'Nestlé Thụy Sĩ', '2021-01-01', '2023-12-01', 800, 'Dinh dưỡng cao năng lượng giúp trẻ tăng trưởng tốt'),
(137, 'HAVIT', '2021-01-01', '2023-12-01', 900, 'Dinh dưỡng giúp trẻ phát triển khỏe mạnh, tăng cân'),
(140, 'BABY SANGA', '2021-01-01', '2023-12-01', 1000, ' Dành cho trẻ biếng ăn, suy dinh dưỡng'),
(141, 'Đang cập nhật', '2021-01-12', '2023-01-12', 500, 'Trẻ em bị rối loạn tiêu hóa,chậm lớn,suy dinh dưỡng, người lớn mệt mỏi và ăn ngủ kém.'),
(142, 'Đang cập nhật', '2021-01-12', '2023-01-12', 200, 'Hỗ trợ điều trị hắt hơi, sổ mũi, ngạt mũi, viêm họng, cảm cúm'),
(143, 'TNHH NUTRIFOOD Trúc Linh', '2021-01-12', '2023-01-12', 100, 'Hỗ trợ trẻ em trên 1 tuổi trong trường hợp tiêu hóa kém, suy dinh dưỡng'),
(144, 'HERA MILK', '2020-01-12', '2022-01-12', 100, 'Hỗ trợ Trẻ em, phụ nữ mang thai và người cao tuổi bị táo bón'),
(145, 'NUTRICARE', '2021-01-01', '2023-01-01', 800, 'Dinh dưỡng tăng sức đề kháng cho trẻ 0 – 12 tháng tuổi.'),
(146, 'NUTRICARE', '2021-01-01', '2023-01-01', 800, 'Dinh dưỡng tăng sức đề kháng cho trẻ 1 – 10 tuổi.'),
(147, ' VITADAIRY', '2021-01-01', '2023-01-01', 800, 'Sữa non cho trẻ từ 0 – 12 tháng'),
(148, ' VITADAIRY', '2020-01-01', '2022-01-01', 800, 'Sữa non cho trẻ 1-2 tuổi'),
(149, ' VITADAIRY', '2020-01-01', '2022-01-01', 800, 'Trẻ từ 1-2 tuổi.'),
(150, 'VITADAIRY', '2021-01-01', '2023-01-01', 800, 'Sữa non cho trẻ 1-2 tuổi'),
(151, 'VITADAIRY', '2021-01-01', '2023-01-01', 800, 'Sữa non dành cho bé từ 1-2 tuổi'),
(152, 'SỮA SỨC SỐNG', '2020-12-01', '2022-12-01', 900, 'Trẻ từ 0-12 tháng'),
(153, 'ILDONG FOODIS KOREA', '2021-01-01', '2023-01-01', 500, 'Rối loạn tiêu hóa do,người bệnh phải sử dụng kháng sinh dài ngày.'),
(154, 'NEW IMAGE', '2021-01-01', '2023-01-01', 450, 'Dành cho trẻ em trên 3 tuổi, người trưởng thành'),
(155, 'ILDONG FOODIS KOREA', '2021-01-01', '2023-01-01', 100, 'Dành cho trẻ từ 6 tháng tuổi trở lên'),
(156, 'Sữa Milkraft_Đức', '2021-01-11', '2023-01-11', 480, 'Người già hay mắc bệnh tim mạch, tiểu đường hoặc Gut'),
(157, 'Nutricia – Hà Lan', '2021-01-01', '2023-01-01', 400, 'Trẻ em suy dinh dưỡng, nguy cơ suy dinh dưỡng.'),
(158, 'Nutricia – Hà Lan', '2021-01-01', '2023-01-01', 400, 'Trẻ từ 1 tuổi trở lên'),
(159, 'Nestlé Thụy Sĩ', '2021-01-01', '2023-01-01', 800, 'Dành cho trẻ từ 0 – 6 tháng(Số 1)'),
(160, 'Nestlé Thụy Sĩ', '2021-01-06', '2023-01-06', 800, 'Dành cho trẻ từ 6-12 tháng(Số 2)'),
(161, 'Nestlé Thụy Sĩ', '2021-01-06', '2023-01-06', 800, 'Dành cho trẻ từ 12 tháng trở lên(Số 3)'),
(162, 'Nestlé Thụy Sĩ', '2021-01-03', '2023-01-03', 800, 'Dành cho trẻ từ 18 tháng trở lên(Số 4)'),
(163, 'Meiji Company Limited', '2020-12-01', '2022-12-01', 900, 'Dành cho trẻ từ 1-3 tuổi'),
(164, 'France Lait Pháp', '2020-10-01', '2022-10-01', 900, 'Dành cho bé từ 6 - 12 tháng tuổi(Số 2)'),
(165, 'France Lait Pháp', '2020-10-01', '2022-10-01', 900, 'Dành cho bé từ 1-10 tuổi(Số 3)'),
(166, 'HUGGIES', '2020-12-01', '2022-12-01', 1000, 'Dành cho bé từ 12-17kg(XL62 quần)'),
(167, 'HUGGIES', '2020-12-01', '2022-12-01', 1000, 'Dành cho bé từ 6kg - 11 kg(M74 quần)'),
(168, 'HUGGIES', '2020-12-01', '2022-12-01', 1000, 'Dành cho bé từ 9kg - 14kg(Dán L68)'),
(169, 'HUGGIES', '2020-12-01', '2022-12-01', 1000, 'Dành cho bé từ 10kg - 15kg(Dán NB58)'),
(170, 'HUGGIES', '2020-12-01', '2022-12-01', 1000, 'Dành cho bé từ 4kg - 8kg(Dán S56)'),
(171, 'HUGGIES', '2020-12-01', '2022-12-01', 1000, 'Dành cho bé từ 6 tới 11 kg(Dán M76)'),
(172, 'HUGGIES', '2020-12-01', '2022-12-01', 1000, 'Dành cho bé từ 9 tới 14 kg(Quần L68)'),
(173, 'MERRIS', '2020-12-01', '2022-12-01', 800, 'Dành cho bé từ 6 tới 11 kg(size M)'),
(174, 'MERRIS', '2020-12-01', '2022-12-01', 800, 'Phù hợp cho trẻ từ 9 - 14 kg(size L)'),
(175, 'MERRIS', '2020-12-01', '2022-12-01', 800, ' Phù hợp cho trẻ từ 12 - 22 kg(size XL)');

-- --------------------------------------------------------

--
-- Table structure for table `dtb_employee`
--

DROP TABLE IF EXISTS `dtb_employee`;
CREATE TABLE IF NOT EXISTS `dtb_employee` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `position` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtb_employee`
--

INSERT INTO `dtb_employee` (`id`, `full_name`, `address`, `phone`, `position`, `email`, `password`) VALUES
(10, 'Nguyễn Văn Sang ', 'abc', '0373853348', 'abc', 'sangkenny@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `dtb_product`
--

DROP TABLE IF EXISTS `dtb_product`;
CREATE TABLE IF NOT EXISTS `dtb_product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_type` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `unit_price` float NOT NULL,
  `promotion_price` float NOT NULL,
  `image_product` mediumtext NOT NULL,
  `description_product` mediumtext NOT NULL,
  `id_detailproduct` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_idtype` (`id_type`),
  KEY `FK_iddetailproduct` (`id_detailproduct`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtb_product`
--

INSERT INTO `dtb_product` (`id`, `id_type`, `name`, `unit_price`, `promotion_price`, `image_product`, `description_product`, `id_detailproduct`) VALUES
(6, 1002, 'Gluvita gold 900g', 560000, 500000, '\\mockup\\images\\sua-gluvita-gold-900g.jpg||\\mockup\\images\\sua-gluvita-gold-900g-2.jpg||\\mockup\\images\\sua-gluvita-gold-900g-3.jpg', 'Sữa Gluvita Gold dinh dưỡng dành cho người đái tháo đường và tiền đái tháo đường, người có nguy cơ mắc bệnh tiểu đường.\r\n\r\nGluvita Gold giúp bổ sung năng lượng và các dưỡng chất cần thiết cho cơ thể. Sản phẩm cung cấp một chế độ ăn cân đối lành mạnh, giúp kiểm soát và ổn định đường huyết cho người bị đái tháo đường hoặc tiền đái tháo đường.\r\nGluvita Gold rất dễ tiêu hóa, đặc biệt được bổ sung các thành phần giúp bảo vệ hệ tim mạch và thị lực.\r\n\r\nVới người đái tháo đường, người rối loạn dung nạp Glucose, áp dụng một chế độ ăn khoa học là yếu tố giúp kiểm soát đường huyết và nâng cao chất lượng sống.', 128),
(7, 1002, 'Sữa Nutricare Fine 900g', 600000, 500000, '\\mockup\\images\\nutricare-fine-3.jpg||\\mockup\\images\\nutricare-fine-1.jpg||\\mockup\\images\\nutricare-fine-2.jpg', 'Sữa Nutricare Fine dinh dưỡng y hoc chuyên biệt giúp tăng cường miễn dịch cho bệnh nhân ung thư.\r\n\r\nBạn có biết, các tế bào ung thư vẫn có thể xuất hiện ở người bình thường, nhưng được hệ miễn dịch phát hiện và tiêu diệt. Khi hệ miễn dịch bị suy yếu, không đủ khỏe mạnh để nhận biết được các tế bào ung thư này khiến chúng phát triển một cách không kiểm soát, lâu dần dẫn đến hình thành khối u.\r\n\r\nHậu quả tế bào ung thư không được kiểm soát làm tăng các phản ứng chuyển hóa cơ thể, khiến bệnh nhân bị sụt cân, suy mòn và dần tới suy kiệt, ảnh hưởng trầm trọng tới thể trạng và tâm lý người bệnh.', 129),
(8, 1002, 'Sữa Nepro 1 900g', 500000, 450000, '\\mockup\\images\\sua_nepro_1.jpg||\\mockup\\images\\sua-nepro-1-1-1.jpg||\\mockup\\images\\sua-nepro-1-2-1.jpg||mockup\\images\\sua-nepro-1-3-1.jpg', 'Sữa Nepro 1 dinh dưỡng đặc chế giàu năng lượng, giảm Protein dành riêng cho người bệnh suy thận có Ure huyết tăng. 1 ly Nepro cung cấp 100Kcal giúp bù đắp lại nguồn năng lượng thiếu hụt khi bệnh nhân chán ăn, bỏ bữa.\r\nĐối với bệnh nhân thận, việc kiểm soát chế độ ăn uống và cung cấp lượng thức ăn đảm bảo dinh dưỡng là một vấn đề quan trọng. Tuy nhiên, người bệnh thận thường gặp khó khăn trong việc bài tiết, đồng thời khả năng lọc máu bị hạn chế, do vậy họ cần phải tuân thủ một chế độ dinh dưỡng khắt khe, kiêng khem nhiều loại thực phẩm.\r\n\r\nKhi đó, lựa chọn sữa Nepro 1 là giải pháp tốt nhất giúp cung cấp một chế độ ăn có tỷ lệ protein thấp, ít muối, đảm bảo năng lượng và các acid amin, vitamin và khoáng chất thiết yếu cho đối tượng cần chế độ giảm protien, người có ure huyết tăng, người bệnh thận.\r\n\r\nSữa Nepro số 1 giúp người bệnh thận hấp thu và tiêu hóa tốt để phục hồi sức khỏe nhanh chóng. Khi lựa chọn Nepro 1 người bệnh hoàn toàn yên tâm, với công thức được tư vấn bởi Viện Dinh Dưỡng Quốc Gia. Nepro 1 đậm độ năng lượng cao, giảm lượng Natri, Kali và Phospho xuống mức an toàn. Giảm gánh nặng cho thận, tránh các tổn thương ở tim của người bệnh.', 130),
(9, 1002, 'Sữa Calosure 900g', 450000, 405000, '\\mockup\\images\\sua-calosure-xanh-1.jpg||\\mockup\\images\\sua-calosure-xanh-1-1.jpg||\\mockup\\images\\sua-calosure-xanh-1-2.jpg||\\mockup\\images\\sua-calosure-xanh-1-3.jpg', 'Sữa CaloSure dinh dưỡng cao năng lượng giúp bổ sung dinh dưỡng, tốt cho tim mạch, trí não và tiêu hoá.\r\n\r\nCalosure có thành phần dinh dưỡng cân đối, đậm độ năng lượng cao giúp tăng cường năng lượng và dưỡng chất cho khẩu phần ăn, hoặc có thể thay thế bữa ăn chính khi cần.\r\n\r\nTrong 1 ly sữa Calosure (200ml) cung cấp 200 kcal tương đương với dinh dưỡng của một bữa ăn. Vì là thực phẩm giàu dinh dưỡng, vitamin và khoáng chất nên các chuyên gia dinh dưỡng khuyến cáo có thể sử dụng nguồn dưỡng chất từ sữa như một bữa ăn trong ngày.\r\n\r\nSữa Calosure với công thức dinh dưỡng có hơn 25 loại vitamin và khoáng chất, giúp bổ sung năng lượng, phục hồi sức khỏe và duy trì sức khỏe dài lâu. Sử dụng sữa hàng ngày sẽ giúp phục hồi, tăng cường sưc khỏe, hỗ trợ tiêu hóa, tốt cho tim mạch và phòng ngừa loãng xương.\r\n\r\nTrong trường hợp, người ốm, người kém ăn, người cần phục hồi dinh dưỡng có thể sử dụng từ 06 – 08 ly sữa Calosure mỗi ngày vẫn hoàn toàn đảm bảo năng lượng và dinh dưỡng cần thiết cho cơ thể.', 131),
(10, 1002, 'Sữa Foticare', 99000, 80000, '\\mockup\\images\\d955b6b86be6d123d02b70b2797316c3.jpg', 'Forticare - Dinh dưỡng phù hợp cho bệnh nhân ung thư.', 132),
(11, 1001, 'Sữa Meiji Số 0 900g', 600000, 530000, '\\mockup\\images\\meji_so_1.jpg||\\mockup\\images\\meji số 0 900g.jpg||\\mockup\\sieu-thi-happy-sua-meiji-so-0-2.jpg', 'Sữa Meiji số 0 nội địa Nhật Bản nhập khẩu chính hãng nay đã có mặt tại Việt Nam dành cho trẻ từ 0 đến 1 tuổi.\r\n\r\nNếu bạn đặt câu hỏi “Sữa công thức nào là tốt nhất cho con” thì câu trả lời đó là sữa Meiji của Nhật. Vì sao có thể khẳng định được như vậy? Bởi vì Meiji là dòng sản phẩm nổi tiếng trên toàn thế giới mà bất cứ bà mẹ nào cũng đã từng nghe đến. Và đây cũng là dòng sản phẩm sữa công thức được dùng phổ biến nhất tại Nhật Bản.\r\n\r\nVậy “Sữa Meiji tốt cho trẻ em Nhật thì có phù hợp với trẻ em Việt Nam hay không?” câu trả lời là “có”. Bởi vì Việt Nam và Nhật bản có sự phù hợp về 2 vùng thổ nhưỡng và con người có giá trị tương tự nhau. Người Nhật làm ra sản phẩm cho người Nhật nhưng do sự trùng lặp trong nhiều yếu tố về sức khỏe, cơ chế hấp thu mà sản phẩm Meiji rất phù hợp với trẻ nhỏ em Việt.\r\n\r\nNgoài ra, một yếu tố quyết định nữa đó là thị trường người tiêu dùng sản phẩm Meiji là rất lớn và đánh giá sản phẩm có hiệu quả tốt. Đó là căn cứ sắc đáng nhất để nói lên sản phẩm sữa Meiji tốt cho trẻ em Việt.', 121),
(12, 1001, 'Blackmore số 3 900g', 560000, 440000, '\\mockup\\images\\sua_blackmores_so_3.jpg||\\mockup\\images\\sua-blackmores-so-3-1.jpg||\\mockup\\sua-blackmores-1-3.jpg', 'Sữa Blackmores số 3 công thức đột phá INFAT được chứng minh lâm sàng giúp thúc đẩy sự hấp thu chất béo và canxi hiệu quả giúp trẻ tăng trưởng cân nặng và chiều cao.\r\n\r\nSản phẩm dinh dưỡng công thức Blackmores được mẹ Việt biết đến nhiều chủ yếu là từ các mẹ đã cho con dùng Blackmores xách tay có hiệu quả nên đã chia sẻ qua facebook, các hội nhóm. Tiếng lành đồn xa, dần dần nhiều mẹ khác biết được và cho con dùng thử, từ đó trung thành với sản phẩm luôn.\r\n\r\nSữa Blackmores được các mẹ đánh giá chung là thơm ngon dễ uống, không bị táo bón, giúp trẻ ngủ sâu giấc, dùng một thời gian sẽ thấy con phát triển chiều cao cân nặng đều đặn, ít ốm vặt và ăn ngon miệng hơn. Ngoài ra sữa rất dễ pha, dễ uống, không lo con bị ọc sữa hay trào ngược rất phù hợp với trẻ kén sữa, lười uống sữa.\r\n\r\nVới nhu cầu sử dụng sữa Blackmores tăng lên rất nhanh mà sữa xách tay không đáp ứng đủ. Chính vì vậy mà sản phẩm đã được nhập khẩu chính hãng nhằm đáp ứng kịp thời sữa cho các con dùng không còn bị ngắt quãng nữa. Nếu mẹ đang tìm hiểu sữa Blackmores cho con thì hãy xem những ưu điểm vượt trội dưới đây sẽ hiểu tại sao nhiều mẹ tin dùng nhé.', 122),
(13, 1001, 'Sữa Diamond Kid 2', 400000, 300000, '\r\n\\mockup\\images\\Diamond_kid_2.jpg||\\mockup\\images\\sua-diamond-nutrientkid-2-1.jpg||\\mockup\\images\\sua-diamond-nutrientkid-2-2.jpg||\\mockup\\sua-diamond-nutrientkid-2-3.jpg', 'Sữa Diamond Nutrient Kid 2 dinh dưỡng cao năng lượng đặc trị cho trẻ biếng ăn, suy dinh dưỡng thấp còi, trẻ cần tăng cân từ 3 tuổi trở lên\r\n\r\nCon biếng ăn, suy dinh dưỡng, chậm tăng cân là nỗi lo lắng của rất nhiều bà mẹ. Nếu tình trạng này kéo dài sẽ ảnh hưởng rất nhiều đến sự phát triển của trẻ. Cân bằng dinh dưỡng trong khẩu phần ăn hàng ngày, và bổ sung sữa cao năng lượng là giải pháp hàng đầu để khắc phục tình trạng này.\r\n\r\nSữa Diamond Nutrient Kid là dòng sản phẩm công thức cao năng lượng, với mỗi 1 ly 200ml sữa đã cung cấp tới 240Kcal. Vì thế, Diamond Nutrient Kid giúp bé không cần tăng thể tích bữa ăn, không làm trẻ khó chịu phải ăn thêm nhiều.\r\n\r\nMỗi ly sữa Diamond Nutrient Kid là một bữa ăn dinh dưỡng cân đối giúp trẻ tăng cân bắt kịp đà tăng trưởng. Sản phẩm được nhiều chuyên gia dinh dưỡng đánh giá cao trong việc cải thiện tình trạng biếng ăn, cân nặng ở trẻ.', 123),
(14, 1001, 'Sữa Ensure Gold', 900000, 700000, '\\mockup\\images\\ensure gold.jpg||\\mockup\\images\\sua-ensure-1.jpg||\\mockup\\sua-ensure-2.jpg', 'Sữa Ensure Gold HMB 850g dinh dưỡng y học cao cấp được chứng minh lâm sàng giúp tăng cường sức khỏe trong 90 ngày.\r\n\r\nVới hơn 30 nghiên cứu lâm sàng trong suốt 45 năm, Ensure Gold là nguồn dinh dưỡng đầy đủ và cân đối, được chứng minh giúp đáp ứng nhu cầu dinh dưỡng cho người lớn tuổi, hỗ trợ tăng cường sức khỏe, thể chất và chất lượng cuộc sống.\r\n\r\nSữa Ensure là thức uống cung cấp dinh dưỡng đầy đủ và cân đối dùng thay thế bữa ăn hoặc bổ sung cho chế độ ăn hàng ngày. Sản phẩm thích hợp cho người lớn, người ăn uống kém, đặc biệt cho người bệnh cần phục hồi nhanh.\r\n\r\nSản phẩm được đặc chế với hỗn hợp chất béo giàu PUFA, MUFA tốt cho tim mạch. Ensure Gold cung cấp các acid béo thiết yếu như Linoleic và Iinolenic với hàm lượng acid béo no và Cholesterol thấp có lợi cho chế độ ăn lành mạnh. Ensure Gold chứa FOS là chất xơ hòa tan giúp hệ tiêu hóa khỏe mạnh và hoạt động tốt.\r\n\r\nEnsure Gold chứa đầy đủ Vitamin và khoáng chất cần thiết giúp đáp dứng năng lượng đầy đủ ngay cả khi người bệnh không ăn uống được và rất thích hợp khi cần phục hồi sức khỏe nhanh.\r\n\r\nVới Ensure Gold, bạn đang được hưởng thụ những thành tựu khoa học mới nhất về dinh dưỡng.  Ensure Gold có thể được sử dụng để bổ sung vào khẩu phần ăn khi có nhu cầu tăng thêm về năng lượng và chất đạm, hoặc để duy trì tình trạng dinh dưỡng tốt.', 124),
(15, 1001, 'Sữa Peptament 400g', 400000, 350000, '\\mockup\\images\\sua_peptament.jpg||\\mockup\\images\\sua-peptamen-1.jpg||\\mockup\\sua-peptamen-2.jpg||\\mockup\\images\\sua-peptamen-3.jpg', 'Sữa Peptamen dinh dưỡng y học dành cho người kém hấp thu, người bệnh ung thư, công thức đặc biệt từ Nestlé Thụy Sĩ.\r\n\r\nPeptamen là công thức dinh dưỡng có thể thay thế hoàn toàn bữa ăn và có thể ăn qua ống thông hoặc dùng bổ sung cho chế độ ăn hàng ngày. Sản phẩm với công thức chứa đạm whey thủy phân thành Peptides giàu chất béo chuỗi trung bình MCT. Đây là loại đạm có gía trị sinh học cao và đã được chứng minh khoa học về các lợi ích: Tiêu hóa háp thu tốt hơn các loại đạm khác, thúc đẩy quá trình đồng hóa giúp tạo cơ, giúp hỗ trợ chống oxi hóa, bảo vệ tế bào phù hợp với người bệnh ung thư.', 125),
(16, 1001, 'Sữa Non ILDONG số 1 ', 500000, 350000, '\\mockup\\images\\sua-non-ildong-1.jpg||\\mockup\\images\\sua-non-ildong-1-1.jpg||\\mockup\\sua-non-ildong-1-2.jpg', 'Sữa Non ILDONG số 1 giúp tăng cường sức đề kháng tự nhiên cho bé từ 0-12 tháng tuổi được các mẹ đánh giá tốt nhất hiện nay.', 126),
(17, 1001, 'Sữa Non ILDONG số 2', 500000, 350000, '\\mockup\\images\\sua-non-ildong-2.jpg||\\mockup\\images\\sua-non-ildong-2-1.jpg||\\mockup\\sua-non-ildong-2-2.jpg', 'Sữa non ILDong số 2 dinh dưỡng cao cấp cần thiết cho những em bé còi xương, suy dinh dưỡng, bé mới ốm dậy, không được khỏe và những bé biếng ăn.', 127),
(18, 1003, 'Sữa Blackmore Số 1', 560000, 545000, '\\mockup\\images\\sua-blackmores-so-1.jpg||\\mockup\\images\\sua-blackmores-so-1-1.jpg||\\mockup\\sua-blackmores-1-3.jpg', 'Sữa Blackmores số 1 dinh dưỡng cao năng lượng nhập khẩu nguyên lon từ Australia giúp trẻ tăng trưởng cân nặng, chiều cao tối đa.', 133),
(19, 1003, 'Sữa Blackmore Số 2', 590000, 540000, '\\mockup\\images\\sua-blackmores-so-2.jpg||\\mockup\\images\\sua-blackmores-so-2-1.jpg||\\mockup\\sua-blackmores-so-2-2.jpg', 'Sữa Blackmores số 2 nhập khẩu nguyên hộp từ Úc giàu năng lượng, vitamin và khoáng chất giúp trẻ tăng trưởng, phát triển khỏe mạnh.', 134),
(20, 1003, 'Sữa Kid Essentials 800g', 600000, 540000, '\\mockup\\images\\sua-kid-essentials-4.jpg||\\mockup\\images\\sua-kid-essentials-3.jpg||\\mockup\\sua-kid-essentials-2.jpg||\\mockup\\sua-kid-essentials-1.jpg', 'Sữa Kid Essentials – Dinh dưỡng cao năng lượng chuyên biệt cho trẻ từ 1-10 tuổi bị biếng ăn, nhẹ cân, trẻ mới ốm dậy cần phục hồi sức khỏe.', 135),
(21, 1003, 'Sữa Nutrent Junior', 600000, 435000, '\\mockup\\images\\sua-nutren-junior-4.jpg||\\mockup\\images\\sua-nutren-junior-1.jpg||\\mockup\\sua-nutren-junior-2.jpg||\\mockup\\sua-nutren-junior-3.jpg', 'Sữa Nutren Junior thương hiệu nổi tiếng của Nestle được nhập khẩu nguyên lon từ Thụy Sĩ chuyên biệt dành cho trẻ suy dinh dưỡng.', 136),
(22, 1003, 'Sữa Kidsure Bebe 900g', 480000, 420000, '\\mockup\\images\\kidsurebebe900g.jpg||\\mockup\\images\\sua-kidsure-bebe-900g-2.jpg||\\mockup\\sua-kidsure-bebe-900g-3.jpg||\\mockup\\sua-kidsure-bebe-900g-4.jpg', 'Sữa Kidsure bebe dinh dưỡng cao năng lượng dành cho trẻ nhẹ cân, sinh thiếu tháng, trẻ biếng ăn, suy dinh dưỡng từ 0-12 tháng', 137),
(23, 1004, 'Men vi sinh Couple 5', 185000, 150000, '\\mockup\\images\\ab3d645c6790ef05348aa41d6869926e.jpg', 'Để tìm cho giải pháp các câu hỏi tại sao thì nay TPDD TRÚC LINH sẽ giới thiệu tới các mẹ dòng sản phẩm Men Vi Sinh- Hỗ trợ cân bằng Hệ Vi Sinh Đường Ruột Yasma& Couple 5. ', 141),
(24, 1004, 'Dầu Tỏi Bạch Dương', 290000, 250000, '\\mockup\\images\\bb63a9ce6992641f72549dd078e10cc8.jpg', 'Giải pháp an toàn, điều trị dứt điểm các bệnh về đường hô hấp, tiêu hóa của bé đó là Dầu tỏi Bạch dương Organic – Bài Thuốc hay, khỏi ngay các bệnh. Dầu Tỏi Bạch Dương là một loại kháng sinh tự nhiên giúp con vượt qua cơn ốm dễ dàng và tăng sức đề kháng trong môi trường thời tiết khắc nghiệt này.', 142),
(25, 1004, 'Hồng Sâm SangA hàn Quốc', 470000, 450000, '\\mockup\\images\\hong_sam_baby_sanga_30_goi_1.jpg||\\mockup\\images\\42456940_330395270853170_1377404760675581952_n.jpg||\\mockup\\images\\sam-bay_71a9a491f3ed4b5d8bc7742dacb22878.jpg', 'Hồng Sâm Baby Sanga Hàn Quốc\r\n\r\nMÙA NÀY THỜI TIẾT GIAO MÙA DỄ ỐM VẶT NÊN RẤT CẦN BỔ SUNG CHO CÁC CON ĐỂ CÓ 1 SỨC KHOẺ THẬT TỐT \r\n\r\nVÌ SỨC KHOẺ VÀ SỰ PHÁT TRIỂN CỦA CON YÊU', 140),
(26, 1004, 'Men vi sinh Antokid', 300000, 160000, '\\mockup\\images\\antokid.jpg||\\mockup\\images\\antokid.jpg||\\mockup\\images\\antokid.jpg', 'Nếu Trẻ hay trằn trọc quấy khóc về đêm, ngủ không sâu giấc là nỗi băn khoăn lo lắng của nhiều cha mẹ. Trẻ ngủ không đủ giấc, không ngủ đúng giờ sẽ dẫn đến nhiều hệ lụy như khó tăng chiều cao, suy giảm hệ miễn dịch, khả năng nhận thức bị tổn hại…  Vậy làm thế nào để giúp con ngủ ngon, ngủ đủ và ngủ đúng? Để giải quyết vấn đề này thì hôm nay công ty TNHH NUTRIFOOD Trúc Linh xin giới thiệu sản phẩm Men vi sinh Antokid.', 143),
(27, 1004, 'Chất xơ chống táo bón Eco Fos', 190000, 100000, '\\mockup\\images\\eco_fos.jpg||\\mockup\\images\\eco_fos.jpg||\\mockup\\images\\eco_fos.jpg', 'Táo bón ở trẻ gần như đã trở thành “chuyện thường ngày ở huyện” ở mỗi gia đình. Khiến không ít ông bố bà mẹ “xót xa”  đứng ngồi không yên khi nhìn cảnh con đau bụng,khó chịu, quấy khóc, bỏ bữa.\r\n  -> Muốn con dứt hẳn chứng táo bón, mẹ cần bổ sung chất xơ hàng ngày cho bé. Tuy nhiên, các con thường rất lười ăn rau \r\nDo vậy, bật mí một chút! Xơ  #EcoFos  là món \"bảo bối\" cung cấp hàm lượng chất xơ dồi dào cho bé:\r\n- Hỗ trợ hiệu quả cải thiện tình trạng táo bón của các bé, phụ nữ mang thai và người cao tuổi\r\nvới chất xơ hòa tan (FOS) được chiết xuất từ rau diếp xoăn - Chicory Root (Nhập khẩu từ Chile)\r\n- Hỗ trợ tăng cường miễn dịch cho bé nhờ dưỡng chất HMO (Nhập khẩu từ CHLB Đức)\r\n- Sản phẩm có chứa đường Vitanose (Isomaltulose) an toàn cho người cho người tiểu đường\r\n- Hương vị thơm dịu nhẹ dễ sử dụng; pha, trộn vào thực phẩm khác mà không bị biến vị của thực phẩm\r\n- Mùi vị: thơm ngon như kẹo bông có vị ngọt nên trẻ rất thích ', 144),
(28, 1000, 'Sữa Colos Care 0+ 800g', 500000, 480000, '\\mockup\\images\\sua-coloscare-0-800g.jpg||\\mockup\\images\\sua-coloscare-0-800g-1.jpg||\\mockup\\images\\sua-coloscare-0-800g-2.jpg||\\mockup\\images\\sua-coloscare-0-800g-3.jpg', 'Sữa Colos Care 0+ tăng cường miễn dịch sức mạnh từ bên trong, phòng nhiễm khuẩn hô hấp, tiêu hóa bảo vệ trẻ khỏi tác nhân gây bệnh', 145),
(29, 1000, 'Sữa Colos Care 1+ 800g', 500000, 460000, '\\mockup\\images\\sua-coloscare-1-800g.jpg||\\mockup\\images\\sua-coloscare-1-800g-1.jpg||\\mockup\\images\\sua-coloscare-1-800g-2.jpg||\\mockup\\images\\sua-coloscare-1-800g-3.jpg', 'Sữa non ColosCare 1+ cung cấp hàm lượng sữa non cao IgG 1200+, Beta-Glucan, HMO 2`FL HMO, Lactoferrin giúp tăng cường miễn dịch, phát triển khỏe mạnh.', 146),
(30, 1000, 'Sữa Colosbaby 0+ 800g', 500000, 400000, '\\mockup\\images\\sua-colosbaby-0-4.jpg||\\mockup\\images\\sua-colosbaby-0-1.jpg||\\mockup\\images\\sua-colosbaby-0-2.jpg||\\mockup\\images\\sua-colosbaby-0-3.jpg', 'Sữa ColosBaby Gold 0+ dgiúp bổ sung kháng thể IgG tự nhiên từ sữa non nhập khẩu từ Mỹ dành riêng cho trẻ từ 0 đến 12 tháng.', 147),
(31, 1000, 'Sữa Colosbaby 1+ 800g', 500000, 470000, '\\mockup\\images\\sua-colosbaby-1-1.jpg||\\mockup\\images\\sua-colosbaby-1-2.jpg||\\mockup\\images\\sua-colosbaby-1-3.jpg||', 'Sữa ColosBaby 1+ là dinh dưỡng sữa non cao cấp dành cho trẻ từ 1 đến 2 tuổi, trẻ biếng ăn, suy dinh dưỡng, thấp còi.', 148),
(32, 1000, 'Sữa non Colosbaby Gold 1 dạng thanh 546G', 500000, 400000, '\\mockup\\images\\sua-colosbaby-so-1-thanh.jpg', 'Sữa ColosBaby Gold là dinh dưỡng sữa non cao cấp dành cho trẻ từ 1 đến 2 tuổi, trẻ biếng ăn, suy dinh dưỡng, thấp còi.', 149),
(33, 1000, 'Sữa non Santé Baby Colostrum 800g', 470000, 455000, '\\mockup\\images\\sua-sante-baby-colostrum-800g.jpg||\\mockup\\images\\sua-sante-baby-colostrum-800g-1.jpg||\\mockup\\images\\sua-sante-baby-colostrum-800g-2.jpg||\\mockup\\images\\sua-sante-baby-colostrum-800g-3.jpg', 'Sữa non Santé Baby dinh dưỡng giàu sữa non nhập khẩu từ Pháp giúp hệ miễn dịch của trẻ khỏe mạnh và tăng trưởng tốt.', 152),
(34, 1000, 'Sữa Non ILDONG số 1', 400000, 360000, '\\mockup\\images\\sua-non-ildong-1.jpg||\\mockup\\images\\sua-non-ildong-1-1.jpg||\\mockup\\images\\sua-non-ildong-1-2.jpg', 'Sữa Non ILDONG số 1 giúp tăng cường sức đề kháng tự nhiên cho bé từ 0-12 tháng tuổi được các mẹ đánh giá tốt nhất hiện nay.', 153),
(35, 1000, 'Sữa non ALPHA LIPID 450G ', 1340000, 1100000, '\\mockup\\images\\sua_non_alpha_lipid_lifeline_tang_cuong_suc_khoe_toan_dien_5d78c311bcd25_11092019164905.jpg||\\mockup\\images\\sua-non-alpha-lipid-lifeline-1.jpg||\\mockup\\images\\sua-non-alpha-lipid-lifeline-2.jpg', 'Sữa non Alpha Lipid có tốt không và tại sao chúng ta nên sử dụng nó mỗi ngày?', 154),
(36, 1000, 'Sữa PediaCare Gold 1 900g', 425000, 375000, '\\mockup\\images\\sua-pediacare-gold-1-1.jpg||\\mockup\\images\\sua-pediacare-gold-1-1-1.jpg||\\mockup\\images\\sua-pediacare-gold-1-2.jpg||\\mockup\\images\\sua-pediacare-gold-1-3.jpg', 'Sữa PediaCare Gold 1 dinh dưỡng cao năng lượng giúp trẻ biếng ăn bắt kịp tốc độ tăng trưởng, trẻ suy dinh dưỡng gầy yếu tăng cân tốt, trẻ phục hồi sức khỏe sau khi ốm dậy.', 150),
(37, 1000, 'Sữa PediaCare Gold 2 900g', 495000, 420000, '\\mockup\\images\\sua-pedia-care-gold-2-1.jpg||\\mockup\\images\\sua-pedia-care-gold-2-1-1.jpg||\\mockup\\images\\sua-pedia-care-gold-2-2.jpg||\\mockup\\images\\sua-pedia-care-gold-2-3.jpg', 'Sữa PediaCare Gold 2 dinh dưỡng cao năng lượng giúp cải thiện chiều cao, câng nặng, hỗ trợ tăng cường sức đề kháng, tiêu hóa cho trẻ từ 3 tuổi.', 151),
(38, 1005, 'Sữa Milk Raft 480g', 610000, 499000, '\\mockup\\images\\milkraft.jpg||\\mockup\\images\\milkraft.jpg||\\mockup\\images\\milkraft.jpg', 'Milkraft là loại sữa hàng đầu hệ thống y tế Đức. Sản phẩm với công thức sản xuất đảm bảo không hormone sinh trưởng, không nguyên liệu biến đổi gen, không dư lượng kháng sinh và thuốc trừ sâu, không chất bảo quản mang đến cho người sử dụng sự an tâm khi dùng', 156),
(39, 1005, 'Sữa Nutrini Drink Vani 400g', 400000, 300000, '\\mockup\\images\\15e03b9feff0adc7cfa1b8ad4d99d6ef.jpg||\\mockup\\images\\sua-nutrini-vani-1.jpg||\\mockup\\images\\sua-nutrini-vani-2.jpg', 'Sữa Nutrini Drink dinh dưỡng cao năng lượng dành cho trẻ suy dinh dưỡng từ 1 tuổi trở lên nhập khẩu nguyên lon từ Đức. Sản phẩm được chứng minh lâm sàng giúp trẻ tăng trưởng trong vòng 28 ngày và được các chuyên gia dinh dưỡng khuyên dùng.', 157),
(40, 1005, 'Sữa NutriniDrink Powder Neutral 400g', 500000, 300000, '\\mockup\\images\\62cc9a6a8be42e76116241f53abf6aca.jpg||\\mockup\\images\\sua-nutrinidrink-trung-tinh-1.jpg||\\mockup\\images\\sua-nutrinidrink-trung-tinh-2.jpg', 'Sữa NutriniDrink Powder Neutral hương trung tính tự nhiên dành cho trẻ suy dinh dưỡng từ 1 tuổi trở lên, giúp tăng trưởng trong vòng 28 ngày. Sữa có mùi vị nhẹ dễ uống nên các mẹ có thể trộn cùng đồ ăn và đồ uống cho bé.', 158),
(41, 1005, 'Sữa NAN NGA Số 1 800G', 500000, 395000, '\\mockup\\images\\sua-nan-nga-so-1.jpg||\\mockup\\images\\sua-nan-nga-so-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-1-2.jpg||\\mockup\\images\\sua-nan-nga-so-1-3.jpg', 'Sữa NAN NGA số 1 là dòng sữa mát, hỗ trợ tiêu hóa, tăng sức đề kháng rất tốt cho trẻ sơ sinh từ 0-6 tháng.', 159),
(42, 1005, 'Sữa NAN NGA Số 2 800G OPTIPRO', 500000, 395000, '\\mockup\\images\\sua-nan-nga-so-2-1.jpg||\\mockup\\images\\sua-nan-nga-so-2-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-2-2.jpg||\\mockup\\images\\sua-nan-nga-so-2-3.jpg', 'Sữa NAN Nga số 2 được hầu hết các mẹ đánh giá là mát, nhạt giống sữa mẹ giúp trẻ tiêu hóa rất tốt, phát triển khỏe mạnh.', 160),
(43, 1005, 'Sữa NAN NGA Số 3 800G OPTIPRO', 500000, 395000, '\\mockup\\images\\sua-nan-nga-so-3-1.jpg||\\mockup\\images\\sua-nan-nga-so-3-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-3-2.jpg||\\mockup\\images\\sua-nan-nga-so-3-3.jpg', 'Sữa NAN Nga số 3 được hầu hết các mẹ đánh giá là mát, nhạt giống sữa mẹ và đặc biệt là trẻ dùng tiêu hóa rất tốt, ít bị bệnh do được tăng cường đề kháng.', 161),
(44, 1005, 'Sữa NAN NGA số 4 800G OPTIPRO ', 500000, 385000, '\\mockup\\images\\sua-nan-nga-so-4-1.jpg||\\mockup\\images\\sua-nan-nga-so-4-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-4-2.jpg||\\mockup\\images\\sua-nan-nga-so-4-3.jpg', 'Sữa NAN Nga số 4 là siêu phẩm về dinh dưỡng công thức hỗ trợ tiêu hóa, tăng cường đề kháng và trí não toàn diện cho trẻ từ 18 tháng tuổi.', 162),
(45, 1005, 'Sữa Meiji số 9', 500000, 445000, '\\mockup\\images\\sua-meiji-so-9-nhat-820g-1_1.jpg||\\mockup\\images\\sua-meiji-so-9-noi-dia-1.jpg||\\mockup\\images\\sua-meiji-so-9-noi-dia-2.jpg', 'Sữa Meiji số 9 nội địa Nhật Bản đảm bảo cung cấp đầy đủ các chất dinh dưỡng cần thiết cho sự phát triển của trẻ nhỏ. Chính vì vậy mà sản phẩm đã dành được vị trí đứng đầu doanh thu tại thị trường Nhật Bản.', 163),
(46, 1005, 'Francelait 2 900g', 492000, 400000, '\\mockup\\images\\818acf5fcec471a43aa0b1501fd5999a.jpg||\\mockup\\images\\hinh-anh-sua-france-lait-so-2.jpg', 'Sữa France Lait 2 900g chính hãng dành cho bé từ 6 - 12 tháng tuổi được nhập khẩu trực tiếp nguyên hộp từ Pháp giúp thay thế bữa ăn phụ, bổ sung cho chế độ ăn thiếu đạm và vi chất dinh dưỡng, hỗ trợ sự phát triển các tố chất và sức khỏe của trẻ theo sinh lý lứa tuổi. France Lait luôn ưu tiên đến sự phát triển tự nhiên và toàn diện của trẻ và sử dụng chỉ một công thức chung cho toàn thế giới giúp bé được sử dụng nguồn sữa với tỉ lệ hoàn hảo gần như nguồn sữa mẹ.', 164),
(47, 1005, 'Francelait 3 900g', 488000, 420000, '\\mockup\\images\\sua-france-lait-so-3.jpg||\\mockup\\images\\hinh-anh-sua-france-lait-3.jpg', 'Sữa France Lait là hàng được nhập khẩu trực tiếp từ Pháp. Nguồn gốc sản phẩm uy tín, được sản xuất tại nhà máy France Lait tại pháp, France lait chỉ đặt nhà máy sản xuất tại pháp, không đặt nhà máy sản xuất nhượng quyền tại các nước khác. Sữa France Lait có nhiều loại phù hợp cho bé: Sữa France Lait cho bé sinh non nhẹ cân, sữa France Lait cho bé hay nôn trớ trào ngược, sữa France lait cho bé dị ứng với sữa bò.', 165),
(48, 1006, 'Bỉm Huggies Quần XL62', 350000, 310000, '\\mockup\\images\\Bỉm Huggies Quần XL62.jpg', 'Bỉm huggies quần Dry XL62 được các chuyên gia hàng đầu của hãng Huggies thiết kế với bề mặt bên trong có khả năng Siêu thấm hút. thấm hút tăng cường, khóa chặt chất lỏng bên trong và ngăn thấm ngược vào cơ thể trẻ nhỏ. Sản phẩm tiện dụng, đơn giản, giữ vệ sinh, thấm hút tốt và sử dụng 1 lần, đem đén sự hài lòng tuyệt đối cho các bậc cha mẹ. Tã quần Huggies đem đến cảm giác thoải mái dễ chịu mỗi khi bé vui chơi, hoạt động, mà da bé vẫn luôn khô ráo và thơm tho.\r\n\r\nBỉm Huggies Quần XL62', 166),
(49, 1006, 'Bỉm Huggies Quần M74', 350000, 310000, '\\mockup\\images\\Bỉm Huggies Quần M74.jpg', 'Tã quần Huggies size M74 miếng cho bé thoải mái vui đùa cả ngày mà không lo hăm da. Ban đêm bé nhà bạn sẽ ngủ ngon giấc hơn vì đã có bỉm quần Huggies thấm hút cực tốt, mùi thơm tự nhiên. Thun co dãn mềm mại không làm hằn da bé. Các mẹ sử dụng bỉm Huggies cho con đều cảm thấy rất hài lòng.', 167),
(50, 1006, 'Bỉm Huggies Dán L68', 310000, 270000, '\\mockup\\images\\Bỉm dán Huggies size L68.jpg', 'Thiết kế thông minh\r\n\r\n    Màng đáy thoát ẩm 100% cho phép không khí thoát ra khỏi màng đáy nhanh gấp 10 lần , giữ cho làn da bé luôn khô thoáng .\r\n\r\n    Hệ thống khóa chặt chất lỏng giúp chống tràn : Lớp thấm siêu nhanh, nhanh chóng hút mọi chất lỏng/ Dàn đều chất lỏng trên bề mặt tã./Thấm hút, khóa chặt chất lỏng trong lõi siêu thấm giúp da bé khô thoáng.\r\n\r\n    Bỉm Huggies với lớp ngăn tràn kép bảo vệ và ngăn tràn xuống chân bé.\r\n\r\n    Chứng nhận y khoa giúp ngăn ngừa hăm tã : Với công thức khô thoáng và thoát ẩm Huggies được chứng nhận y khoa giúp ngăn ngừa hăm tã và các chứng viêm da.\r\n\r\nChất liệu tốt, an toàn\r\n\r\n    Được sản xuất bằng chất liệu có tính khử mùi, chống hăm da, thấm hút an toàn, tã giấy Huggies chống tràn hiệu quả, cho bé sự thoải mái, dễ chịu.\r\n\r\n    Các miếng lót kỳ diệu giúp nới và thắt chặt cho vừa vặn một cách dễ dàng hơn, lớp phủ mềm và thoáng: giúp tạo sự mềm mại và cảm giác thoải mái.', 168),
(51, 1006, 'Bỉm Huggies Dán NB58', 200000, 155000, '\\mockup\\images\\ta_dan_so_sinh_huggies_new_58_2.jpg', 'Tã dán sơ sinh Huggies 58+2 sẽ đem đến cho bé cảm giác thoải mái tối đa, giúp bé tha hồ vui chơi và tự do khám phá thế giới xung quanh. Với thiết kế bọc kén con tằm mới với vùng lưng có lớp đệm siêu mềm như bọc kén, giúp nâng niu bảo vệ da bé ngay từ lúc chào đời, cùng màng đáy thoát ẩm 100% cho phép không khí lưu thông dễ dàng, thoát ra khỏi màng đáy nhanh gấp 10 lần, giúp da bé luôn khô thoáng và ngăn ngừa hăm tã. Huggies tự hào là hãng nổi tiếng với các thương hiệu về bỉm, tã dán an toàn cho bé.', 169),
(52, 1006, 'Bỉm Huggies Dán S56', 220000, 180000, '\\mockup\\images\\TÃ DÁN SƠ SINH HUGGIES S56.jpg', 'Bỉm Tã dán Huggies size S là dòng Bỉm dán dành cho các bé sơ sinh với size S phù hợp cho bé 4 - 8kg. Những đặc điểm ưu việt của dòng Tã Huggies mới như: bọc kén con tằm ngăn hằn đỏ ở mọi vị trí tiếp xúc, 1000 phễu thấm hút giúp thấm nhanh thần tốc và khóa chất lỏng, mặt đáy thoáng khí 100%,... mang đến cho bé yêu nhà bạn những trải nghiệm thật thích thú và thoải mái khi vận động. Sản phẩm sẽ là giải pháp hoàn hảo cho các ông bố bà mẹ khi chăm sóc con yêu trong những năm tháng đầu đời.', 170),
(53, 1006, 'Bỉm Huggies Dán M76', 310000, 266000, '\\mockup\\images\\Tã dán huggies M76.jpg', 'Tã Dán Huggies Dry Gói Cực Đại M76 (76 Miếng) - Bao Bì Mới với mẫu bao bì mới cùng sự cải tiến công nghệ thấm hút an toàn, sẽ mang lại sự an tâm cho mẹ và dễ chịu cho bé khi sử dụng sản phẩm.\r\n\r\n    Sản xuất theo công nghệ dây chuyền hiện đại và sử dụng chất liệu có tính khử mùi, chống hăm da, thấm hút an toàn, chống tràn hiệu quả, cho bé sự thoải mái, dễ chịu.\r\n    Các miếng lót giúp nới và thắt chặt cho vừa vặn một cách dễ dàng hơn, lớp phủ mềm và thoáng giúp tạo sự mềm mại và cảm giác thoải mái.\r\n    Tã dán giúp mẹ thuận tiện hơn trong việc mặc, tháo hoặc nới lỏng diện tích tã cho phù hợp với người bé một cách dễ dàng và thuận tiện.\r\n    Với chất liệu keo dán thế hệ một giúp mẹ dễ dàng cố định tã và đặc biệt không gây đau rát, hay xảy ra tình trạng hăm da bé dù bé có vận động mạnh. Đồng thời hỗ trợ việc khóa các dịch lỏng vào sâu trong miếng tã, giữ cho da bé luôn khô ráo, không bị trào ngay cả khi các mẹ sử dụng suốt đêm (trong thời gian 6 tiếng đồng hồ).\r\n    Với mặt đáy thoáng khí 100% giúp thông thoáng không khí và hơi ẩm thoát ra khỏi màng đáy nhanh chóng, cho da bé luôn khô thoáng, ngăn ngừa hăm tã hiệu quả.', 171),
(54, 1006, 'Bỉm Huggies quần L68', 350000, 310000, '\\mockup\\images\\Bỉm Quần Huggies L68 Miếng.jpg', 'Bỉm quần Huggies size L 68 miếng cho bé 9-14kg\r\n\r\n- Tã Quần Huggies size L 68 miếng (9- 14 kg) thấm hút tốt, không trào ngược, không gây khó chịu cho da bé, được sản xuất dựa trên công nghệ hiện đại với các lõi bông kết hợp hạt thấm hút, giúp trẻ luôn khô thoáng suốt ngày và đêm. Tã sở hữu độ thoáng khí tốt, có khả năng chống hăm nên mang lại cảm giác thoải mái và dễ chịu tuyệt đối cho bé. Giờ đây, thiên thần nhỏ của bạn có thể vô tư chơi đùa mà không lo bị gián đoạn cuộc vui.', 172),
(55, 1006, 'Bỉm Merries size M', 420000, 380000, '\\mockup\\images\\bim-merries-dan-m64-6-11kg-5.jpg', 'Bỉm tã Merries size M 64 - Bỉm cho bé thương hiệu số 1 Nhật Bản\r\n\r\nBỉm Tã dán Merries size M siêu mềm, siêu thấm, siêu thông thoáng và siêu linh hoạt trong chuyển động.\r\nSiêu mềm mại\r\n\r\n    Bề mặt tiếp xúc điểm xốp mịn, tạo cảm giác êm ái, nâng cao da bé giúp hạn chế tiếp xúc với chất bẩn và những tác nhân có hại.\r\n\r\n    Chất liệu mềm mại, giúp làn da của bé không hẳn đỏ và dễ chịu.', 173),
(56, 1006, 'Bỉm Merries size L', 420000, 380000, '\\mockup\\images\\ta-quan-merries-l44-9-14kg-5.jpg', 'Tã quần Merries size L44+6  được thiết kế đặc biệt dạng quần ôm vừa vặn với người bé và giúp bố mẹ tiết kiệm tối đa thời gian thay tã. Với bề mặt mịn màng, thông thoáng, tã giúp hạn chế tối đa hiện tượng hăm và ngứa ngáy khi mặc tã nên rất phù hợp với khí hậu nóng ẩm của Việt Nam. Lõi thấm hút kép giúp thấm hút nhanh, đều và ngăn thấm ngược giúp bé yêu của bạn luôn khô ráo đến 8 tiếng. Bé sẽ không còn cảm giác khó chịu vì phải mặc tã quá lâu hoặc trở mình khi ngủ. Tã quần Merries giúp hạn chế chất dịch lỏng tràn ra ngoài khi bé cử động. Sản phẩm được thiết kế với bề mặt tiếp xúc xốp mịn, vạch báo thay tã thông minh, khi vạch chuyển sang màu xanh lá sẽ là lúc bố mẹ cần thay tã cho trẻ luôn khô thoáng.', 174),
(57, 1006, 'Bỉm Merries size XL', 420000, 380000, '\\mockup\\images\\bim-merries-quan-xl38-1.jpg', 'Tã quần Merries size XL 38+6 được thiết kế đặc biệt dạng quần ôm vừa vặn với người bé và giúp bố mẹ tiết kiệm tối đa thời gian thay tã. Với bề mặt mịn màng, thông thoáng, tã giúp hạn chế tối đa hiện tượng hăm và ngứa ngáy khi mặc tã nên rất phù hợp với khí hậu nóng ẩm của Việt Nam. Lõi thấm hút kép giúp thấm hút nhanh, đều và ngăn thấm ngược giúp bé yêu của bạn luôn khô ráo đến 8 tiếng. Sản phẩm phù hợp cho trẻ từ 12 - 22 kg. Tã quần Merries size XL có thiết kế dạng quần tiện dụng ôm vừa vặn người bé và hạn chế chất dịch lỏng tràn ra ngoài khi bé cử động hoặc trở mình khi ngủ. Ngoài ra, thiết kế đặc biệt này cũng giúp mẹ tiết kiệm được thời gian mỗi khi thay tã cho bé. Độ thấm hút rất cao nhờ lõi siêu thấm hút kép. Công nghệ tiên tiến ngăn chất lỏng và chất bẩn thấm ngược trở lại, giữ miếng tã khô ráo trong một khoảng thời gian từ 6 đến 8 tiếng nên bố mẹ có thể yên tâm rằng bé sẽ ngon giấc suốt đêm. Tã quần Merries được thiết kế với bề mặt tiếp xúc xốp mịn. Thêm vào đó là màng đáy thoát khí đặc biệt giúp hạn chế tối đa hiện tượng hăm tã. Bé sẽ không cảm thấy khó chịu ngay cả khi phải mặc tã trong một thời gian dài. Vạch báo thay tã thông minh, khi vạch chuyển sang màu xanh lá sẽ là lúc bố mẹ cần thay tã cho trẻ luôn khô thoáng. Thiết kế ưu việt giúp tã ôm vừa vặn với người bé, cho bé luôn cảm thấy thoải mái mỗi khi vận động hoặc trở mình khi ngủ. Bé sẽ không còn cảm giác khó chịu vì phải mặc tã quá lâu.', 175);

-- --------------------------------------------------------

--
-- Table structure for table `dtb_silde`
--

DROP TABLE IF EXISTS `dtb_silde`;
CREATE TABLE IF NOT EXISTS `dtb_silde` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_silde` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dtb_typeproduct`
--

DROP TABLE IF EXISTS `dtb_typeproduct`;
CREATE TABLE IF NOT EXISTS `dtb_typeproduct` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_type` varchar(100) NOT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtb_typeproduct`
--

INSERT INTO `dtb_typeproduct` (`id`, `name_type`, `description`) VALUES
(1000, 'Sữa non', 'Sữa non hay sữa đầu, còn được gọi là thức ăn đầu tiên của sự sống (tên khoa học gọi là colostrum) là một loại sữa mẹ đặc biệt, một dạng vật chất có màu vàng, đặc dính, xuất hiện vào cuối thời kỳ mang thai và lưu thông qua tuyến vú của người mẹ trong vòng 72 giờ đầu sau khi sinh con và xuất hiện ở hai ngày đầu sau khi sinh con,sữa non có chứa đầy đủ các chất dinh dưỡng cân đối, các kháng thể diệt vi khuẩn, vi rút độc hại và các chất điều hòa miễn dịch giúp cho một cơ thể trẻ sơ sinh chống lại bệnh tật, phát triển và khỏe mạnh. Sữa non của bò có thành phần rất toàn diện đã được sử dụng rộng rãi ở các nước Châu Âu, Châu Mỹ, Châu Á,... trong những thực phẩm để nuôi sống con người thì sữa non được ví như một thực phẩm vàng cho trẻ mới sinh'),
(1001, 'Sữa giảm giá nhiều', NULL),
(1002, 'Sữa Đặc Trị Người Bệnh', 'Sữa đặc trị dành cho trẻ em dinh dưỡng, sinh non, thấp còi, biếng ăn, tiêu hóa kém, dị ứng, bệnh nặng mới phục hồi… Bên cạnh các sản phẩm dinh dưỡng hàng ngày, sản phẩm đặc trị cần thiết cho các loại bệnh lý hoặc trẻ không thể sử dụng sữa thông thường.'),
(1003, 'Sữa Tăng Cân Cho Bé', 'Sữa tăng cân (hay còn gọi là sữa giàu chất béo) là thực phẩm có hàm lượng calo cao hơn một số sản phẩm sữa thông thường khác. Đây là loại thực phẩm bổ sung nhiều chất dinh dưỡng cần thiết cho cơ thể như carbohydrate, chất béo, protein, các loại vitamin và khoáng chất.'),
(1004, 'Thực Phẩm Chức Năng', 'Thực phẩm chức năng (functional foods) còn gọi là dinh dưỡng bổ sung (dietary supplement) là thực phẩm có chức năng liên quan, hổ trợ cho công việc chữa bệnh, hổ trợ cho thuốc hay dinh dưỡng, nâng cao thể trạng trong khi chữa bệnh, còn bản thân lại không phải là thuốc.'),
(1005, 'Sữa Nhập Khẩu', 'Sữa nhập khẩu là sữa ngoại, được sản xuất tại nước chủ quản, và được 1 đơn vị nhập khẩu uy tín thương thảo nhập về theo đường chính ngạch, vận chuyển qua đường biển hay đường hàng không với số lượng lớn (container).'),
(1006, 'Các sản phẩm bỉm', 'Bỉm hay tã giấy là để chỉ những sản phẩm dùng một lần, có khả năng thấm hút nước thải của bé, mặc vào sẽ giúp bé khô ráo, tránh bị ướt mỗi khi đi vệ sinh.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dtb_bill`
--
ALTER TABLE `dtb_bill`
  ADD CONSTRAINT `FK_idcustomer_customer` FOREIGN KEY (`id_customer`) REFERENCES `dtb_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idemployee_employee` FOREIGN KEY (`id_employee`) REFERENCES `dtb_employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dtb_billdetail`
--
ALTER TABLE `dtb_billdetail`
  ADD CONSTRAINT `FK_idbill` FOREIGN KEY (`id_bill`) REFERENCES `dtb_bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idproduct_billdetail` FOREIGN KEY (`id_product`) REFERENCES `dtb_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dtb_product`
--
ALTER TABLE `dtb_product`
  ADD CONSTRAINT `FK_iddetailproduct` FOREIGN KEY (`id_detailproduct`) REFERENCES `dtb_detailproduct` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idtype` FOREIGN KEY (`id_type`) REFERENCES `dtb_typeproduct` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
