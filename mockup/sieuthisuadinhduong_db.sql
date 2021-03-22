-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 22, 2021 lúc 02:59 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cnweb`
--
CREATE DATABASE IF NOT EXISTS `cnweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cnweb`;
--
-- Cơ sở dữ liệu: `sieuthisuadinhduong_db`
--
CREATE DATABASE IF NOT EXISTS `sieuthisuadinhduong_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sieuthisuadinhduong_db`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `Id` int(10) UNSIGNED NOT NULL,
  `TenLoai` varchar(100) NOT NULL,
  `MoTa` longtext,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`Id`, `TenLoai`, `MoTa`) VALUES
(1, 'Sữa cho trẻ em từ 12 Tháng trở lên', 'Mô tả 1'),
(1000, 'Sữa Non', 'Sữa non hay sữa đầu, còn được gọi là thức ăn đầu tiên của sự sống (tên khoa học gọi là colostrum) là một loại sữa mẹ đặc biệt, một dạng vật chất có màu vàng, đặc dính, xuất hiện vào cuối thời kỳ mang thai và lưu thông qua tuyến vú của người mẹ trong vòng 72 giờ đầu sau khi sinh con và xuất hiện ở hai ngày đầu sau khi sinh con.'),
(1001, 'Sữa giảm giá nhiều', 'Các sản phẩm đang được khuyến mãi lớn.'),
(1002, 'Sữa Đặc Trị Người Bệnh', 'Sữa đặc trị dành cho trẻ em dinh dưỡng, sinh non, thấp còi, biếng ăn, tiêu hóa kém, dị ứng, bệnh nặng mới phục hồi… Bên cạnh các sản phẩm dinh dưỡng hàng ngày, sản phẩm đặc trị cần thiết cho các loại bệnh lý hoặc trẻ không thể sử dụng sữa thông thường.'),
(1003, 'Sữa Tăng Cân Cho Bé', 'Sữa tăng cân (hay còn gọi là sữa giàu chất béo) là thực phẩm có hàm lượng calo cao hơn một số sản phẩm sữa thông thường khác. Đây là loại thực phẩm bổ sung nhiều chất dinh dưỡng cần thiết cho cơ thể như carbohydrate, chất béo, protein, các loại vitamin và khoáng chất.'),
(1004, 'Thực Phẩm Chức Năng', 'Thực phẩm chức năng (functional foods) còn gọi là dinh dưỡng bổ sung (dietary supplement) là thực phẩm có chức năng liên quan, hổ trợ cho công việc chữa bệnh, hổ trợ cho thuốc hay dinh dưỡng, nâng cao thể trạng trong khi chữa bệnh, còn bản thân lại không phải là thuốc.'),
(1005, 'Sữa Nhập Khẩu', 'Sữa nhập khẩu là sữa ngoại, được sản xuất tại nước chủ quản, và được 1 đơn vị nhập khẩu uy tín thương thảo nhập về theo đường chính ngạch, vận chuyển qua đường biển hay đường hàng không với số lượng lớn (container).'),
(1006, 'Các sản phẩm bỉm', 'Bỉm hay tã giấy là để chỉ những sản phẩm dùng một lần, có khả năng thấm hút nước thải của bé, mặc vào sẽ giúp bé khô ráo, tránh bị ướt mỗi khi đi vệ sinh.'),
(1013, 'Sữa cho trẻ em từ 0-12 Tháng', 'Sữa dinh dưỡng'),
(1019, 'Sữa cho trẻ em từ 0-36 Tháng', 'Sữa dinh dưỡng'),
(10111, 'Sữa Dành cho người bệnh Thận', 'Mô tả ví du'),
(101111, 'Sữa Dinh Dưỡng 1', 'Mô tả ví du'),
(1011111, 'Sữa Dinh Dưỡng 11', 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(50) NOT NULL,
  `SoDT` varchar(10) NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `PassWord` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Id`, `HoTen`, `SoDT`, `DiaChi`, `Email`, `PassWord`) VALUES
(1, 'Bùi Toại Nguyện', '0377772199', 'Hòa Bình', 'buitoainguyendz@gmail.com', 'nguyendz'),
(2, 'Đào Hoàng Long', '0919999911', 'Hà Nội', 'hoanglong@gmail.com', 'hoanglong123'),
(3, 'Hoàng Bảo Trung', '0918993323', 'Hà Nội', 'hoangbaotrung123@gmali.com', 'baotrung123'),
(4, 'Trần Thu Liễu', '0919999232', 'Nam Định', 'thulieutran@gmail.com', 'lieu123'),
(5, 'Đào Sỹ Tú', '0911827343', 'Yên Phong Bắc Ninh', 'daosytu@gmail.com', 'tu123'),
(6, 'Bùi Toại Nguyện', '0373853447', 'Hòa Bình', 'nguyen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Sang', '0373853447', 'BN', 'sanghjp2333@gmail.com', '4739c5c11d833bb199c16ff95a92b267'),
(8, 'Sang', '0373853447', 'BN', 'sanghjp233e3@gmail.com', '4739c5c11d833bb199c16ff95a92b267');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(50) NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `SoDT` varchar(10) DEFAULT NULL,
  `ViTri` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PassWord` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`Id`, `HoTen`, `DiaChi`, `SoDT`, `ViTri`, `Email`, `PassWord`) VALUES
(1, 'Nguyễn Văn Sang', 'Yên Phong Bắc Ninh', '0373853448', '', 'sanghjp12345s2@gmail.com', '123456'),
(2, 'Nguyễn Thành Long', 'Thái Bình', '0377772117', '', 'longnguyen@gmail.com', '123456'),
(3, 'Nguyễn Thị Hoài Anh', 'Bắc Ninh', NULL, '', 'miacute@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IdDM` int(10) UNSIGNED NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `GiaCT` float NOT NULL,
  `GiaKM` float NOT NULL,
  `AnhSP` mediumtext NOT NULL,
  `ThuongHieu` varchar(20) NOT NULL,
  `NSX` date DEFAULT NULL,
  `HSD` date DEFAULT NULL,
  `DoiTuongSD` varchar(100) NOT NULL,
  `MoTaSP` mediumtext NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_idtype` (`IdDM`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`Id`, `IdDM`, `TenSP`, `GiaCT`, `GiaKM`, `AnhSP`, `ThuongHieu`, `NSX`, `HSD`, `DoiTuongSD`, `MoTaSP`) VALUES
(6, 1002, 'Gluvita gold 900g', 560000, 500000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-gluvita-gold-900g.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-gluvita-gold-900g-2.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-gluvita-gold-900g-3.jpg', 'VITADAIRY', '2021-03-01', '2023-03-01', 'Trẻ từ 1 tuổi trờ lên', 'Sữa Gluvita Gold dinh dưỡng dành cho người đái tháo đường và tiền đái tháo đường, người có nguy cơ mắc bệnh tiểu đường.'),
(7, 1002, 'Sữa Nutricare Fine 900g', 600000, 500000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\nutricare-fine-3.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\nutricare-fine-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\nutricare-fine-2.jpg', 'Nutricare', '2021-03-01', NULL, 'Trẻ từ 1 tuổi trờ lên', 'Sữa Nutricare Fine dinh dưỡng y hoc chuyên biệt giúp tăng cường miễn dịch cho bệnh nhân ung thư.'),
(8, 1002, 'Sữa Nepro 1 900g', 500000, 450000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua_nepro_1.jpg||\\mockup\\images\\sua-nepro-1-1-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-nepro-1-2-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-nepro-1-3-1.jpg', 'VITADAIRY', '2021-03-01', NULL, 'Trẻ từ 6 tuổi trờ lên', 'Sữa Nepro 1 dinh dưỡng đặc chế giàu năng lượng, giảm Protein dành riêng cho người bệnh suy thận có Ure huyết tăng. 1 ly Nepro cung cấp 100Kcal giúp bù đắp lại nguồn năng lượng thiếu hụt khi bệnh nhân chán ăn, bỏ bữa.'),
(9, 1002, 'Sữa Calosure 900g', 450000, 405000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-calosure-xanh-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-calosure-xanh-1-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-calosure-xanh-1-2.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-calosure-xanh-1-3.jpg', 'VITADAIRY', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Sữa CaloSure dinh dưỡng cao năng lượng giúp bổ sung dinh dưỡng, tốt cho tim mạch, trí não và tiêu hoá.'),
(10, 1002, 'Sữa Foticare', 99000, 80000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\d955b6b86be6d123d02b70b2797316c3.jpg', 'FOTICARE', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Forticare - Dinh dưỡng phù hợp cho bệnh nhân ung thư.'),
(11, 1001, 'Sữa Meiji Số 0 900g', 600000, 530000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\meji_so_1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\meji số 0 900g.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sieu-thi-happy-sua-meiji-so-0-2.jpg', 'MEIJI', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Sữa Meiji số 0 nội địa Nhật Bản nhập khẩu chính hãng nay đã có mặt tại Việt Nam dành cho trẻ từ 0 đến 1 tuổi.'),
(12, 1001, 'Blackmore số 3 900g', 560000, 440000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua_blackmores_so_3.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-blackmores-so-3-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sua-blackmores-1-3.jpg', 'Blackmores', '2021-03-01', NULL, 'Trẻ từ 1 tuổi trờ lên', 'Sữa Blackmores số 3 công thức đột phá INFAT được chứng minh lâm sàng giúp thúc đẩy sự hấp thu chất béo và canxi hiệu quả giúp trẻ tăng trưởng cân nặng và chiều cao.'),
(13, 1001, 'Sữa Diamond Kid 2', 400000, 300000, '\r\n\\cnpm\\websitebansuadinhduong\\mockup\\images\\Diamond_kid_2.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-diamond-nutrientkid-2-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-diamond-nutrientkid-2-2.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sua-diamond-nutrientkid-2-3.jpg', 'Eneright Nuitrition', '2021-03-01', NULL, 'Trẻ từ 1 tuổi trờ lên', 'Sữa Diamond Nutrient Kid 2 dinh dưỡng cao năng lượng đặc trị cho trẻ biếng ăn, suy dinh dưỡng thấp còi, trẻ cần tăng cân từ 3 tuổi trở lên'),
(14, 1001, 'Sữa Ensure Gold', 900000, 700000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\ensure gold.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-ensure-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sua-ensure-2.jpg', 'Abott', '2021-03-01', NULL, 'Trẻ từ 0-12 tháng tuôi', 'Sữa Ensure Gold HMB 850g dinh dưỡng y học cao cấp được chứng minh lâm sàng giúp tăng cường sức khỏe trong 90 ngày.'),
(15, 1001, 'Sữa Peptament 400g', 400000, 350000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua_peptament.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-peptamen-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sua-peptamen-2.jpg||\\mockup\\images\\sua-peptamen-3.jpg', 'VITADIARY', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuôi', 'Sữa Peptamen dinh dưỡng y học dành cho người kém hấp thu, người bệnh ung thư, công thức đặc biệt từ Nestlé Thụy Sĩ.'),
(16, 1001, 'Sữa Non ILDONG số 1 ', 500000, 350000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-non-ildong-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-non-ildong-1-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sua-non-ildong-1-2.jpg', 'ILDONG ', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Sữa Non ILDONG số 1 giúp tăng cường sức đề kháng tự nhiên cho bé từ 0-12 tháng tuổi được các mẹ đánh giá tốt nhất hiện nay.'),
(17, 1001, 'Sữa Non ILDONG số 2', 500000, 350000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-non-ildong-2.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-non-ildong-2-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sua-non-ildong-2-2.jpg', 'ILDONG ', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Sữa non ILDong số 2 dinh dưỡng cao cấp cần thiết cho những em bé còi xương, suy dinh dưỡng, bé mới ốm dậy, không được khỏe và những bé biếng ăn.'),
(18, 1003, 'Sữa Blackmore Số 1', 560000, 545000, '\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-blackmores-so-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\images\\sua-blackmores-so-1-1.jpg||\\cnpm\\websitebansuadinhduong\\mockup\\sua-blackmores-1-3.jpg', 'Blackmores', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Sữa Blackmores số 1 dinh dưỡng cao năng lượng nhập khẩu nguyên lon từ Australia giúp trẻ tăng trưởng cân nặng, chiều cao tối đa.'),
(19, 1003, 'Sữa Blackmore Số 2', 590000, 540000, '\\mockup\\images\\sua-blackmores-so-2.jpg||\\mockup\\images\\sua-blackmores-so-2-1.jpg||\\mockup\\sua-blackmores-so-2-2.jpg', 'Blackmores', '2021-03-01', NULL, 'Trẻ từ 1 tuổi trờ lên', 'Sữa Blackmores số 2 nhập khẩu nguyên hộp từ Úc giàu năng lượng, vitamin và khoáng chất giúp trẻ tăng trưởng, phát triển khỏe mạnh.'),
(20, 1003, 'Sữa Kid Essentials 800g', 600000, 540000, '\\mockup\\images\\sua-kid-essentials-4.jpg||\\mockup\\images\\sua-kid-essentials-3.jpg||\\mockup\\sua-kid-essentials-2.jpg||\\mockup\\sua-kid-essentials-1.jpg', 'Eneright Nuitrition', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Sữa Kid Essentials – Dinh dưỡng cao năng lượng chuyên biệt cho trẻ từ 1-10 tuổi bị biếng ăn, nhẹ cân, trẻ mới ốm dậy cần phục hồi sức khỏe.'),
(21, 1003, 'Sữa Nutrent Junior', 600000, 435000, '\\mockup\\images\\sua-nutren-junior-4.jpg||\\mockup\\images\\sua-nutren-junior-1.jpg||\\mockup\\sua-nutren-junior-2.jpg||\\mockup\\sua-nutren-junior-3.jpg', 'Eneright Nuitrition', '2021-03-01', NULL, 'Trẻ từ 6-36 tháng tuổi', 'Sữa Nutren Junior thương hiệu nổi tiếng của Nestle được nhập khẩu nguyên lon từ Thụy Sĩ chuyên biệt dành cho trẻ suy dinh dưỡng.'),
(22, 1003, 'Sữa Kidsure Bebe 900g', 480000, 420000, '\\mockup\\images\\kidsurebebe900g.jpg||\\mockup\\images\\sua-kidsure-bebe-900g-2.jpg||\\mockup\\sua-kidsure-bebe-900g-3.jpg||\\mockup\\sua-kidsure-bebe-900g-4.jpg', 'Eneright Nuitrition', '2021-03-01', NULL, 'Trẻ từ 0-12 tháng tuổi', 'Sữa Kidsure bebe dinh dưỡng cao năng lượng dành cho trẻ nhẹ cân, sinh thiếu tháng, trẻ biếng ăn, suy dinh dưỡng từ 0-12 tháng'),
(23, 1004, 'Men vi sinh Couple 5', 185000, 150000, '\\mockup\\images\\ab3d645c6790ef05348aa41d6869926e.jpg', '', '2021-03-01', NULL, '', 'Để tìm cho giải pháp các câu hỏi tại sao thì nay TPDD TRÚC LINH sẽ giới thiệu tới các mẹ dòng sản phẩm Men Vi Sinh- Hỗ trợ cân bằng Hệ Vi Sinh Đường Ruột Yasma& Couple 5. '),
(24, 1004, 'Dầu Tỏi Bạch Dương', 290000, 250000, '\\mockup\\images\\bb63a9ce6992641f72549dd078e10cc8.jpg', '', '2021-03-01', NULL, '', 'Giải pháp an toàn, điều trị dứt điểm các bệnh về đường hô hấp, tiêu hóa của bé đó là Dầu tỏi Bạch dương Organic – Bài Thuốc hay, khỏi ngay các bệnh. Dầu Tỏi Bạch Dương là một loại kháng sinh tự nhiên giúp con vượt qua cơn ốm dễ dàng và tăng sức đề kháng trong môi trường thời tiết khắc nghiệt này.'),
(25, 1004, 'Hồng Sâm SangA hàn Quốc', 470000, 450000, '\\mockup\\images\\hong_sam_baby_sanga_30_goi_1.jpg||\\mockup\\images\\42456940_330395270853170_1377404760675581952_n.jpg||\\mockup\\images\\sam-bay_71a9a491f3ed4b5d8bc7742dacb22878.jpg', '', '2021-03-01', NULL, '', 'Hồng Sâm Baby Sanga Hàn Quốc\r\n\r\nMÙA NÀY THỜI TIẾT GIAO MÙA DỄ ỐM VẶT NÊN RẤT CẦN BỔ SUNG CHO CÁC CON ĐỂ CÓ 1 SỨC KHOẺ THẬT TỐT \r\n\r\nVÌ SỨC KHOẺ VÀ SỰ PHÁT TRIỂN CỦA CON YÊU'),
(26, 1004, 'Men vi sinh Antokid', 300000, 160000, '\\mockup\\images\\antokid.jpg||\\mockup\\images\\antokid.jpg||\\mockup\\images\\antokid.jpg', '', '2021-03-01', NULL, '', 'Nếu Trẻ hay trằn trọc quấy khóc về đêm, ngủ không sâu giấc là nỗi băn khoăn lo lắng của nhiều cha mẹ. Trẻ ngủ không đủ giấc, không ngủ đúng giờ sẽ dẫn đến nhiều hệ lụy như khó tăng chiều cao, suy giảm hệ miễn dịch, khả năng nhận thức bị tổn hại…  Vậy làm thế nào để giúp con ngủ ngon, ngủ đủ và ngủ đúng? Để giải quyết vấn đề này thì hôm nay công ty TNHH NUTRIFOOD Trúc Linh xin giới thiệu sản phẩm Men vi sinh Antokid.'),
(27, 1004, 'Chất xơ chống táo bón Eco Fos', 190000, 100000, '\\mockup\\images\\eco_fos.jpg||\\mockup\\images\\eco_fos.jpg||\\mockup\\images\\eco_fos.jpg', '', '2021-03-01', NULL, '', 'Táo bón ở trẻ gần như đã trở thành “chuyện thường ngày ở huyện” ở mỗi gia đình. Khiến không ít ông bố bà mẹ “xót xa”  đứng ngồi không yên khi nhìn cảnh con đau bụng,khó chịu, quấy khóc, bỏ bữa.\r\n  -> Muốn con dứt hẳn chứng táo bón, mẹ cần bổ sung chất xơ hàng ngày cho bé. Tuy nhiên, các con thường rất lười ăn rau \r\nDo vậy, bật mí một chút! Xơ  #EcoFos  là món \"bảo bối\" cung cấp hàm lượng chất xơ dồi dào cho bé:\r\n- Hỗ trợ hiệu quả cải thiện tình trạng táo bón của các bé, phụ nữ mang thai và người cao tuổi\r\nvới chất xơ hòa tan (FOS) được chiết xuất từ rau diếp xoăn - Chicory Root (Nhập khẩu từ Chile)\r\n- Hỗ trợ tăng cường miễn dịch cho bé nhờ dưỡng chất HMO (Nhập khẩu từ CHLB Đức)\r\n- Sản phẩm có chứa đường Vitanose (Isomaltulose) an toàn cho người cho người tiểu đường\r\n- Hương vị thơm dịu nhẹ dễ sử dụng; pha, trộn vào thực phẩm khác mà không bị biến vị của thực phẩm\r\n- Mùi vị: thơm ngon như kẹo bông có vị ngọt nên trẻ rất thích '),
(28, 1000, ' Sữa Colos Care 0+ 800g', 510000, 480000, ' mockupimagessua-coloscare-0-800g.jpg|| mockupimagessua-coloscare-0-800g-1.jpg|| mockupimagessua-coloscare-0-800g-2.jpg', 'Eneright Nuitrition', '2021-03-01', NULL, 'Eneright Nuitrition', ' S?a Colos Care 0+ t?ng c??ng mi?n d?ch s?c m?nh t? bï¿½n trong, phï¿½ng nhi?m khu?n hï¿½ h?p, tiï¿½u hï¿½a b?o v? tr? kh?i tï¿½c nhï¿½n gï¿½y b?nh  '),
(29, 1005, ' Sữa Colos Care 1+ 800g', 500000, 460000, ' mockupimagessua-coloscare-1-800g.jpg|| mockupimagessua-coloscare-1-800g-1.jpg|| mockupimagessua-coloscare-1-800g-2.jpg', 'Eneright Nuitrition', '2021-03-02', NULL, 'Trẻ từ 6-36 tháng tuôi', ' S?a non ColosCare 1+ cung c?p hï¿½m l??ng s?a non cao IgG 1200+, Beta-Glucan, HMO 2`FL HMO, Lactoferrin giï¿½p t?ng c??ng mi?n d?ch, phï¿½t tri?n kh?e m?nh.  '),
(30, 1000, 'Sữa Colosbaby 0+ 800g', 500000, 400000, '\\mockup\\images\\sua-colosbaby-0-4.jpg||\\mockup\\images\\sua-colosbaby-0-1.jpg||\\mockup\\images\\sua-colosbaby-0-2.jpg||\\mockup\\images\\sua-colosbaby-0-3.jpg', 'Eneright Nuitrition', '2021-03-01', NULL, 'Trẻ từ 0-12 tháng tuổi', 'Sữa ColosBaby Gold 0+ dgiúp bổ sung kháng thể IgG tự nhiên từ sữa non nhập khẩu từ Mỹ dành riêng cho trẻ từ 0 đến 12 tháng.'),
(31, 1000, 'Sữa Colosbaby 1+ 800g', 500000, 470000, '\\mockup\\images\\sua-colosbaby-1-1.jpg||\\mockup\\images\\sua-colosbaby-1-2.jpg||\\mockup\\images\\sua-colosbaby-1-3.jpg||', '', NULL, NULL, '', 'Sữa ColosBaby 1+ là dinh dưỡng sữa non cao cấp dành cho trẻ từ 1 đến 2 tuổi, trẻ biếng ăn, suy dinh dưỡng, thấp còi.'),
(32, 1000, 'Sữa non Colosbaby Gold 1 dạng thanh 546G', 500000, 400000, '\\mockup\\images\\sua-colosbaby-so-1-thanh.jpg', '', NULL, NULL, '', 'Sữa ColosBaby Gold là dinh dưỡng sữa non cao cấp dành cho trẻ từ 1 đến 2 tuổi, trẻ biếng ăn, suy dinh dưỡng, thấp còi.'),
(33, 1000, 'Sữa non Santé Baby Colostrum 800g', 470000, 455000, '\\mockup\\images\\sua-sante-baby-colostrum-800g.jpg||\\mockup\\images\\sua-sante-baby-colostrum-800g-1.jpg||\\mockup\\images\\sua-sante-baby-colostrum-800g-2.jpg||\\mockup\\images\\sua-sante-baby-colostrum-800g-3.jpg', '', NULL, NULL, '', 'Sữa non Santé Baby dinh dưỡng giàu sữa non nhập khẩu từ Pháp giúp hệ miễn dịch của trẻ khỏe mạnh và tăng trưởng tốt.'),
(35, 1000, 'Sữa non ALPHA LIPID 450G ', 1340000, 1100000, '\\mockup\\images\\sua_non_alpha_lipid_lifeline_tang_cuong_suc_khoe_toan_dien_5d78c311bcd25_11092019164905.jpg||\\mockup\\images\\sua-non-alpha-lipid-lifeline-1.jpg||\\mockup\\images\\sua-non-alpha-lipid-lifeline-2.jpg', '', NULL, NULL, '', 'Sữa non Alpha Lipid có tốt không và tại sao chúng ta nên sử dụng nó mỗi ngày?'),
(36, 1000, 'Sữa PediaCare Gold 1 900g', 425000, 375000, '\\mockup\\images\\sua-pediacare-gold-1-1.jpg||\\mockup\\images\\sua-pediacare-gold-1-1-1.jpg||\\mockup\\images\\sua-pediacare-gold-1-2.jpg||\\mockup\\images\\sua-pediacare-gold-1-3.jpg', '', NULL, NULL, '', 'Sữa PediaCare Gold 1 dinh dưỡng cao năng lượng giúp trẻ biếng ăn bắt kịp tốc độ tăng trưởng, trẻ suy dinh dưỡng gầy yếu tăng cân tốt, trẻ phục hồi sức khỏe sau khi ốm dậy.'),
(37, 1000, 'Sữa PediaCare Gold 2 900g', 495000, 420000, '\\mockup\\images\\sua-pedia-care-gold-2-1.jpg||\\mockup\\images\\sua-pedia-care-gold-2-1-1.jpg||\\mockup\\images\\sua-pedia-care-gold-2-2.jpg||\\mockup\\images\\sua-pedia-care-gold-2-3.jpg', '', NULL, NULL, '', 'Sữa PediaCare Gold 2 dinh dưỡng cao năng lượng giúp cải thiện chiều cao, câng nặng, hỗ trợ tăng cường sức đề kháng, tiêu hóa cho trẻ từ 3 tuổi.'),
(38, 1005, 'Sữa Milk Raft 480g', 610000, 499000, '\\mockup\\images\\milkraft.jpg||\\mockup\\images\\milkraft.jpg||\\mockup\\images\\milkraft.jpg', '', NULL, NULL, '', 'Milkraft là loại sữa hàng đầu hệ thống y tế Đức. Sản phẩm với công thức sản xuất đảm bảo không hormone sinh trưởng, không nguyên liệu biến đổi gen, không dư lượng kháng sinh và thuốc trừ sâu, không chất bảo quản mang đến cho người sử dụng sự an tâm khi dùng'),
(39, 1005, 'Sữa Nutrini Drink Vani 400g', 400000, 300000, '\\mockup\\images\\15e03b9feff0adc7cfa1b8ad4d99d6ef.jpg||\\mockup\\images\\sua-nutrini-vani-1.jpg||\\mockup\\images\\sua-nutrini-vani-2.jpg', '', NULL, NULL, '', 'Sữa Nutrini Drink dinh dưỡng cao năng lượng dành cho trẻ suy dinh dưỡng từ 1 tuổi trở lên nhập khẩu nguyên lon từ Đức. Sản phẩm được chứng minh lâm sàng giúp trẻ tăng trưởng trong vòng 28 ngày và được các chuyên gia dinh dưỡng khuyên dùng.'),
(40, 1005, 'Sữa NutriniDrink Powder Neutral 400g', 500000, 300000, '\\mockup\\images\\62cc9a6a8be42e76116241f53abf6aca.jpg||\\mockup\\images\\sua-nutrinidrink-trung-tinh-1.jpg||\\mockup\\images\\sua-nutrinidrink-trung-tinh-2.jpg', '', NULL, NULL, '', 'Sữa NutriniDrink Powder Neutral hương trung tính tự nhiên dành cho trẻ suy dinh dưỡng từ 1 tuổi trở lên, giúp tăng trưởng trong vòng 28 ngày. Sữa có mùi vị nhẹ dễ uống nên các mẹ có thể trộn cùng đồ ăn và đồ uống cho bé.'),
(41, 1005, 'Sữa NAN NGA Số 1 800G', 500000, 395000, '\\mockup\\images\\sua-nan-nga-so-1.jpg||\\mockup\\images\\sua-nan-nga-so-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-1-2.jpg||\\mockup\\images\\sua-nan-nga-so-1-3.jpg', '', NULL, NULL, '', 'Sữa NAN NGA số 1 là dòng sữa mát, hỗ trợ tiêu hóa, tăng sức đề kháng rất tốt cho trẻ sơ sinh từ 0-6 tháng.'),
(42, 1005, 'Sữa NAN NGA Số 2 800G OPTIPRO', 500000, 395000, '\\mockup\\images\\sua-nan-nga-so-2-1.jpg||\\mockup\\images\\sua-nan-nga-so-2-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-2-2.jpg||\\mockup\\images\\sua-nan-nga-so-2-3.jpg', '', NULL, NULL, '', 'Sữa NAN Nga số 2 được hầu hết các mẹ đánh giá là mát, nhạt giống sữa mẹ giúp trẻ tiêu hóa rất tốt, phát triển khỏe mạnh.'),
(43, 1005, 'Sữa NAN NGA Số 3 800G OPTIPRO', 500000, 395000, '\\mockup\\images\\sua-nan-nga-so-3-1.jpg||\\mockup\\images\\sua-nan-nga-so-3-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-3-2.jpg||\\mockup\\images\\sua-nan-nga-so-3-3.jpg', '', NULL, NULL, '', 'Sữa NAN Nga số 3 được hầu hết các mẹ đánh giá là mát, nhạt giống sữa mẹ và đặc biệt là trẻ dùng tiêu hóa rất tốt, ít bị bệnh do được tăng cường đề kháng.'),
(44, 1005, 'Sữa NAN NGA số 4 800G OPTIPRO ', 500000, 385000, '\\mockup\\images\\sua-nan-nga-so-4-1.jpg||\\mockup\\images\\sua-nan-nga-so-4-1-1.jpg||\\mockup\\images\\sua-nan-nga-so-4-2.jpg||\\mockup\\images\\sua-nan-nga-so-4-3.jpg', '', NULL, NULL, '', 'Sữa NAN Nga số 4 là siêu phẩm về dinh dưỡng công thức hỗ trợ tiêu hóa, tăng cường đề kháng và trí não toàn diện cho trẻ từ 18 tháng tuổi.'),
(45, 1005, 'Sữa Meiji số 9', 500000, 445000, '\\mockup\\images\\sua-meiji-so-9-nhat-820g-1_1.jpg||\\mockup\\images\\sua-meiji-so-9-noi-dia-1.jpg||\\mockup\\images\\sua-meiji-so-9-noi-dia-2.jpg', '', NULL, NULL, '', 'Sữa Meiji số 9 nội địa Nhật Bản đảm bảo cung cấp đầy đủ các chất dinh dưỡng cần thiết cho sự phát triển của trẻ nhỏ. Chính vì vậy mà sản phẩm đã dành được vị trí đứng đầu doanh thu tại thị trường Nhật Bản.'),
(46, 1005, 'Francelait 2 900g', 492000, 400000, '\\mockup\\images\\818acf5fcec471a43aa0b1501fd5999a.jpg||\\mockup\\images\\hinh-anh-sua-france-lait-so-2.jpg', '', NULL, NULL, '', 'Sữa France Lait 2 900g chính hãng dành cho bé từ 6 - 12 tháng tuổi được nhập khẩu trực tiếp nguyên hộp từ Pháp giúp thay thế bữa ăn phụ, bổ sung cho chế độ ăn thiếu đạm và vi chất dinh dưỡng, hỗ trợ sự phát triển các tố chất và sức khỏe của trẻ theo sinh lý lứa tuổi. France Lait luôn ưu tiên đến sự phát triển tự nhiên và toàn diện của trẻ và sử dụng chỉ một công thức chung cho toàn thế giới giúp bé được sử dụng nguồn sữa với tỉ lệ hoàn hảo gần như nguồn sữa mẹ.'),
(47, 1005, 'Francelait 3 900g', 488000, 420000, '\\mockup\\images\\sua-france-lait-so-3.jpg||\\mockup\\images\\hinh-anh-sua-france-lait-3.jpg', '', NULL, NULL, '', 'Sữa France Lait là hàng được nhập khẩu trực tiếp từ Pháp. Nguồn gốc sản phẩm uy tín, được sản xuất tại nhà máy France Lait tại pháp, France lait chỉ đặt nhà máy sản xuất tại pháp, không đặt nhà máy sản xuất nhượng quyền tại các nước khác. Sữa France Lait có nhiều loại phù hợp cho bé: Sữa France Lait cho bé sinh non nhẹ cân, sữa France Lait cho bé hay nôn trớ trào ngược, sữa France lait cho bé dị ứng với sữa bò.'),
(48, 1006, 'Bỉm Huggies Quần XL62', 350000, 310000, '\\mockup\\images\\Bỉm Huggies Quần XL62.jpg', '', NULL, NULL, '', 'Bỉm huggies quần Dry XL62 được các chuyên gia hàng đầu của hãng Huggies thiết kế với bề mặt bên trong có khả năng Siêu thấm hút. thấm hút tăng cường, khóa chặt chất lỏng bên trong và ngăn thấm ngược vào cơ thể trẻ nhỏ. Sản phẩm tiện dụng, đơn giản, giữ vệ sinh, thấm hút tốt và sử dụng 1 lần, đem đén sự hài lòng tuyệt đối cho các bậc cha mẹ. Tã quần Huggies đem đến cảm giác thoải mái dễ chịu mỗi khi bé vui chơi, hoạt động, mà da bé vẫn luôn khô ráo và thơm tho.\r\n\r\nBỉm Huggies Quần XL62'),
(49, 1006, 'Bỉm Huggies Quần M74', 350000, 310000, '\\mockup\\images\\Bỉm Huggies Quần M74.jpg', '', NULL, NULL, '', 'Tã quần Huggies size M74 miếng cho bé thoải mái vui đùa cả ngày mà không lo hăm da. Ban đêm bé nhà bạn sẽ ngủ ngon giấc hơn vì đã có bỉm quần Huggies thấm hút cực tốt, mùi thơm tự nhiên. Thun co dãn mềm mại không làm hằn da bé. Các mẹ sử dụng bỉm Huggies cho con đều cảm thấy rất hài lòng.'),
(50, 1006, 'Bỉm Huggies Dán L68', 310000, 270000, '\\mockup\\images\\Bỉm dán Huggies size L68.jpg', '', NULL, NULL, '', 'Thiết kế thông minh\r\n\r\n    Màng đáy thoát ẩm 100% cho phép không khí thoát ra khỏi màng đáy nhanh gấp 10 lần , giữ cho làn da bé luôn khô thoáng .\r\n\r\n    Hệ thống khóa chặt chất lỏng giúp chống tràn : Lớp thấm siêu nhanh, nhanh chóng hút mọi chất lỏng/ Dàn đều chất lỏng trên bề mặt tã./Thấm hút, khóa chặt chất lỏng trong lõi siêu thấm giúp da bé khô thoáng.\r\n\r\n    Bỉm Huggies với lớp ngăn tràn kép bảo vệ và ngăn tràn xuống chân bé.\r\n\r\n    Chứng nhận y khoa giúp ngăn ngừa hăm tã : Với công thức khô thoáng và thoát ẩm Huggies được chứng nhận y khoa giúp ngăn ngừa hăm tã và các chứng viêm da.\r\n\r\nChất liệu tốt, an toàn\r\n\r\n    Được sản xuất bằng chất liệu có tính khử mùi, chống hăm da, thấm hút an toàn, tã giấy Huggies chống tràn hiệu quả, cho bé sự thoải mái, dễ chịu.\r\n\r\n    Các miếng lót kỳ diệu giúp nới và thắt chặt cho vừa vặn một cách dễ dàng hơn, lớp phủ mềm và thoáng: giúp tạo sự mềm mại và cảm giác thoải mái.'),
(51, 1006, 'Bỉm Huggies Dán NB58', 200000, 155000, '\\mockup\\images\\ta_dan_so_sinh_huggies_new_58_2.jpg', '', NULL, NULL, '', 'Tã dán sơ sinh Huggies 58+2 sẽ đem đến cho bé cảm giác thoải mái tối đa, giúp bé tha hồ vui chơi và tự do khám phá thế giới xung quanh. Với thiết kế bọc kén con tằm mới với vùng lưng có lớp đệm siêu mềm như bọc kén, giúp nâng niu bảo vệ da bé ngay từ lúc chào đời, cùng màng đáy thoát ẩm 100% cho phép không khí lưu thông dễ dàng, thoát ra khỏi màng đáy nhanh gấp 10 lần, giúp da bé luôn khô thoáng và ngăn ngừa hăm tã. Huggies tự hào là hãng nổi tiếng với các thương hiệu về bỉm, tã dán an toàn cho bé.'),
(52, 1006, 'Bỉm Huggies Dán S56', 220000, 180000, '\\mockup\\images\\TÃ DÁN SƠ SINH HUGGIES S56.jpg', '', NULL, NULL, '', 'Bỉm Tã dán Huggies size S là dòng Bỉm dán dành cho các bé sơ sinh với size S phù hợp cho bé 4 - 8kg. Những đặc điểm ưu việt của dòng Tã Huggies mới như: bọc kén con tằm ngăn hằn đỏ ở mọi vị trí tiếp xúc, 1000 phễu thấm hút giúp thấm nhanh thần tốc và khóa chất lỏng, mặt đáy thoáng khí 100%,... mang đến cho bé yêu nhà bạn những trải nghiệm thật thích thú và thoải mái khi vận động. Sản phẩm sẽ là giải pháp hoàn hảo cho các ông bố bà mẹ khi chăm sóc con yêu trong những năm tháng đầu đời.'),
(53, 1006, 'Bỉm Huggies Dán M76', 310000, 266000, '\\mockup\\images\\Tã dán huggies M76.jpg', '', NULL, NULL, '', 'Tã Dán Huggies Dry Gói Cực Đại M76 (76 Miếng) - Bao Bì Mới với mẫu bao bì mới cùng sự cải tiến công nghệ thấm hút an toàn, sẽ mang lại sự an tâm cho mẹ và dễ chịu cho bé khi sử dụng sản phẩm.\r\n\r\n    Sản xuất theo công nghệ dây chuyền hiện đại và sử dụng chất liệu có tính khử mùi, chống hăm da, thấm hút an toàn, chống tràn hiệu quả, cho bé sự thoải mái, dễ chịu.\r\n    Các miếng lót giúp nới và thắt chặt cho vừa vặn một cách dễ dàng hơn, lớp phủ mềm và thoáng giúp tạo sự mềm mại và cảm giác thoải mái.\r\n    Tã dán giúp mẹ thuận tiện hơn trong việc mặc, tháo hoặc nới lỏng diện tích tã cho phù hợp với người bé một cách dễ dàng và thuận tiện.\r\n    Với chất liệu keo dán thế hệ một giúp mẹ dễ dàng cố định tã và đặc biệt không gây đau rát, hay xảy ra tình trạng hăm da bé dù bé có vận động mạnh. Đồng thời hỗ trợ việc khóa các dịch lỏng vào sâu trong miếng tã, giữ cho da bé luôn khô ráo, không bị trào ngay cả khi các mẹ sử dụng suốt đêm (trong thời gian 6 tiếng đồng hồ).\r\n    Với mặt đáy thoáng khí 100% giúp thông thoáng không khí và hơi ẩm thoát ra khỏi màng đáy nhanh chóng, cho da bé luôn khô thoáng, ngăn ngừa hăm tã hiệu quả.'),
(54, 1006, 'Bỉm Huggies quần L68', 350000, 310000, '\\mockup\\images\\Bỉm Quần Huggies L68 Miếng.jpg', '', NULL, NULL, '', 'Bỉm quần Huggies size L 68 miếng cho bé 9-14kg\r\n\r\n- Tã Quần Huggies size L 68 miếng (9- 14 kg) thấm hút tốt, không trào ngược, không gây khó chịu cho da bé, được sản xuất dựa trên công nghệ hiện đại với các lõi bông kết hợp hạt thấm hút, giúp trẻ luôn khô thoáng suốt ngày và đêm. Tã sở hữu độ thoáng khí tốt, có khả năng chống hăm nên mang lại cảm giác thoải mái và dễ chịu tuyệt đối cho bé. Giờ đây, thiên thần nhỏ của bạn có thể vô tư chơi đùa mà không lo bị gián đoạn cuộc vui.'),
(55, 1006, 'Bỉm Merries size M', 420000, 380000, '\\mockup\\images\\bim-merries-dan-m64-6-11kg-5.jpg', '', NULL, NULL, '', 'Bỉm tã Merries size M 64 - Bỉm cho bé thương hiệu số 1 Nhật Bản\r\n\r\nBỉm Tã dán Merries size M siêu mềm, siêu thấm, siêu thông thoáng và siêu linh hoạt trong chuyển động.\r\nSiêu mềm mại\r\n\r\n    Bề mặt tiếp xúc điểm xốp mịn, tạo cảm giác êm ái, nâng cao da bé giúp hạn chế tiếp xúc với chất bẩn và những tác nhân có hại.\r\n\r\n    Chất liệu mềm mại, giúp làn da của bé không hẳn đỏ và dễ chịu.'),
(56, 1006, 'Bỉm Merries size L', 420000, 380000, '\\mockup\\images\\ta-quan-merries-l44-9-14kg-5.jpg', '', NULL, NULL, '', 'Tã quần Merries size L44+6  được thiết kế đặc biệt dạng quần ôm vừa vặn với người bé và giúp bố mẹ tiết kiệm tối đa thời gian thay tã. Với bề mặt mịn màng, thông thoáng, tã giúp hạn chế tối đa hiện tượng hăm và ngứa ngáy khi mặc tã nên rất phù hợp với khí hậu nóng ẩm của Việt Nam. Lõi thấm hút kép giúp thấm hút nhanh, đều và ngăn thấm ngược giúp bé yêu của bạn luôn khô ráo đến 8 tiếng. Bé sẽ không còn cảm giác khó chịu vì phải mặc tã quá lâu hoặc trở mình khi ngủ. Tã quần Merries giúp hạn chế chất dịch lỏng tràn ra ngoài khi bé cử động. Sản phẩm được thiết kế với bề mặt tiếp xúc xốp mịn, vạch báo thay tã thông minh, khi vạch chuyển sang màu xanh lá sẽ là lúc bố mẹ cần thay tã cho trẻ luôn khô thoáng.'),
(57, 1006, 'Bỉm Merries size XL', 420000, 380000, '\\mockup\\images\\bim-merries-quan-xl38-1.jpg', '', NULL, NULL, '', 'Tã quần Merries size XL 38+6 được thiết kế đặc biệt dạng quần ôm vừa vặn với người bé và giúp bố mẹ tiết kiệm tối đa thời gian thay tã. Với bề mặt mịn màng, thông thoáng, tã giúp hạn chế tối đa hiện tượng hăm và ngứa ngáy khi mặc tã nên rất phù hợp với khí hậu nóng ẩm của Việt Nam. Lõi thấm hút kép giúp thấm hút nhanh, đều và ngăn thấm ngược giúp bé yêu của bạn luôn khô ráo đến 8 tiếng. Sản phẩm phù hợp cho trẻ từ 12 - 22 kg. Tã quần Merries size XL có thiết kế dạng quần tiện dụng ôm vừa vặn người bé và hạn chế chất dịch lỏng tràn ra ngoài khi bé cử động hoặc trở mình khi ngủ. Ngoài ra, thiết kế đặc biệt này cũng giúp mẹ tiết kiệm được thời gian mỗi khi thay tã cho bé. Độ thấm hút rất cao nhờ lõi siêu thấm hút kép. Công nghệ tiên tiến ngăn chất lỏng và chất bẩn thấm ngược trở lại, giữ miếng tã khô ráo trong một khoảng thời gian từ 6 đến 8 tiếng nên bố mẹ có thể yên tâm rằng bé sẽ ngon giấc suốt đêm. Tã quần Merries được thiết kế với bề mặt tiếp xúc xốp mịn. Thêm vào đó là màng đáy thoát khí đặc biệt giúp hạn chế tối đa hiện tượng hăm tã. Bé sẽ không cảm thấy khó chịu ngay cả khi phải mặc tã trong một thời gian dài. Vạch báo thay tã thông minh, khi vạch chuyển sang màu xanh lá sẽ là lúc bố mẹ cần thay tã cho trẻ luôn khô thoáng. Thiết kế ưu việt giúp tã ôm vừa vặn với người bé, cho bé luôn cảm thấy thoải mái mỗi khi vận động hoặc trở mình khi ngủ. Bé sẽ không còn cảm giác khó chịu vì phải mặc tã quá lâu.');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_idtype` FOREIGN KEY (`IdDM`) REFERENCES `danhmuc` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
