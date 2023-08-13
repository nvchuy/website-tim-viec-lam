-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2022 lúc 03:32 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `final`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL,
  `ten_cong_viec` varchar(50) NOT NULL,
  `ten_cong_ty` varchar(50) NOT NULL,
  `tt_cong_viec` varchar(100) NOT NULL,
  `yc_cong_viec` varchar(100) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `ngaydang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bookmark`
--

INSERT INTO `bookmark` (`id`, `ten_cong_viec`, `ten_cong_ty`, `tt_cong_viec`, `yc_cong_viec`, `salary`, `ngaydang`, `username`) VALUES
(4, 'Fullstack Developer', 'KOFAX', 'Work with international customers and colleagues from Germany, France, the Czech Republic, and the U', 'Good verbal and written communication in English is required. 2  years of professional experience in', 'Negotiable', '2022/12/8', '5@gmail.com'),
(5, 'Java Software Engineer', 'NTT DATA Vietnam', 'Analyze and challenge product specifications. Actively participate in committees. Manage software de', 'At least 3 year of experience in a similar role. Good Full-stack mastery of Java and Angular. Indust', '15.000.000 VNĐ', '2022/12/3', '5@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `ID_comp` int(11) NOT NULL,
  `name_comp` text COLLATE utf8_unicode_ci NOT NULL,
  `img_comp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address_comp` text COLLATE utf8_unicode_ci NOT NULL,
  `info_comp` text COLLATE utf8_unicode_ci NOT NULL,
  `website_comp` text COLLATE utf8_unicode_ci NOT NULL,
  `email_comp` text COLLATE utf8_unicode_ci NOT NULL,
  `pass_comp` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`ID_comp`, `name_comp`, `img_comp`, `address_comp`, `info_comp`, `website_comp`, `email_comp`, `pass_comp`) VALUES
(1, 'Công ty TNHH NEC Việt Nam', 'images/company/h6.jpg', 'Lầu 9, Etown 3, 364 Cộng Hòa, Phường 13, Quận Tân Bình, Thành phố Hồ Chí Minh', 'Công ty TNHH NEC Việt Nam (NEC Việt Nam) là công ty con của NEC Corporation -Tập đoàn đa quốc gia về công nghệ viễn thông, công nghệ thông tin và tích hợp hệ thống hàng đầu của Nhật Bản với bề dày lịch sử hơn 122 năm hoạt động.Cùng với sự phát triển lâu đời, những thế mạnh cốt lõi của một tập đoàn công nghệ hàng đầu thế giới, và cam kết nỗ lực hết sức đóng góp vào phát triển doanh nghiệp cũng cho cho con người và xã hội Việt Nam, chúng tôi tin rằng chúng tôi sẽ tiếp tục tạo ra giá trị hơn nữa cho cộng đồng và mang lại hạnh phúc cho tất cả nhân viên.', 'https://www.nec.com/', 'comp_necvietnam@gmail.com', '123456'),
(2, 'Treehouse Finance', 'images/company/h5.jpg', '90 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, Thành phố Hồ Chí Minh', 'We are transparent. We move fast. We disrupt.Treehouse Finance provides digital asset users with analytics and risk metrics of their positions. We are building a user-friendly platform to help users successfully manage their portfolio in the ever-changing world of decentralized finance. As a tech company, our company culture always delivers high-quality products with the greatest talent who are eager to succeed, with a vibrant work environment, and prioritize work-life balance.', 'https://www.treehouse.finance/', 'comp_treehousefinance@gmail.com', '123456'),
(3, 'NTT DATA Vietnam', 'images/company/h2.png', 'R202, HITC Building, 239 Xuân Thủy, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội', 'NTT DATA is a world-wide group born in Japan. We are the top 6 global business and IT services provider with more than 139,000 professionals in over 50 countries.Therefore, when you work at NTT DATA Vietnam, there are the following possibilities.Develop and operate systems not only for customers in Vietnam but also for customers in other countries such as Japan, Thailand, Singapore, and European countries. In that case, your work partner may be people of those other countries.', 'https://www.nttdata.com/vn/en/', 'comp_nttdatavietnam@gmail.com', '123456'),
(4, 'Positive Thinking Company', 'images/company/h4.jpg', 'E-town 3, 364 Cộng Hòa, Phường 13, Quận Tân Bình, Thành phố Hồ Chí Minh', 'Positive Thinking Company is a global independent tech consultancy group. We are Great Place to Work-Certified™ with 90% of our team members in Vietnam agreeing that we are a great place to work! With a team of more than 3,000 talented tech specialists on the ground in over 35 cities across Europe, the USA, Asia, Australia, and Africa, we serve clients of all sizes. We believe that collaboration betters our world.', 'https://positivethinking.tech/﻿', 'comp_positivetthinking@gmail.com', '123456'),
(5, 'M2 Vietnam', 'images/company/h3.png', 'Tầng 2, Số 2 Đường Nguyễn Huy Lượng, Phường 14, Quận Bình Thạnh, Thành phố Hồ Chí Minh', 'Master your 2morrow with M2 And we have an excellent team of Vietnamese engineers. Amid calls for exhaustion of domestic resources, we have established a scaleable development system in Vietnam, which has abundant IT human resources. Japanese employees are stationed locally, and we strive to improve the site every day and strive to provide even higher value.', 'https://m2vietnam.com.vn/﻿', 'comp_m2vietnam@gmail.com', '123456'),
(6, 'KOFAX', 'images/company/h7.jpg', '11 Fl., A tower, Handi Resco Bld., 521 Kim Mã str., Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội', 'Work Like Tomorrow Kofax is a leading provider of software to simplify and transform the First Mile™ of business. Success in the First Mile can dramatically improve the customer experience, greatly reduce operating costs and increase competitiveness, growth and profitability. Kofax software and solutions provide a rapid return on investment to more than 20,000 customers in financial services, insurance, government, healthcare, supply chain, business process outsourcing and other markets.', 'https://www.kofax.com/﻿', 'comp_kofax@gmail.com', '123456'),
(7, 'Clear Path', 'images/company/h8.jpg', '65 Doãn Kế Thiện, Phường Khuê Mỹ, Quận Ngũ Hành Sơn, Thành phố Đà Nẵng', 'Công ty TNHH Phát Triển Phần Mềm Con Đường Sáng Đà Nẵng (Clearpath) trải qua hơn mười năm thành lập, là doanh nghiệp chuyên sản xuất gia công phần mềm, nhập liệu. Với đội ngũ nhân viên năng động, sáng tạo, chuyên môn cao, công ty đã mang đến những sản phẩm chất lượng, tiến độ đảm bảo đáp ứng yêu cầu của khách hàng trong và ngoài nước. Thế mạnh tạo nên thượng hiệu của công ty đó là năng lực chuyên môn cao, tinh thần trách nhiệm, sự nghiêm túc, cẩn thận trong quá trình phát triển sản phẩm và thực hiện công việc khách hàng giao.', 'https://www.clearpathdevelopment.com﻿', 'comp_clearpath@gmail.com', '123456'),
(8, 'NGÂN HÀNG Á CHÂU (ACB)', 'images/company/h1.jpg', '442 Nguyễn Thị Minh Khai, Phường 05, Quận 3, Thành phố Hồ Chí Minh', 'Khởi đầu con đường thành công mang dấu ấn của riêng bạn.Chúng tôi đang bắt đầu một sự khởi động tại ACB để phục vụ hàng triệu khách hàng của chúng ta. Chúng tôi đang tìm kiếm các tài năng đặc biệt để thúc đẩy tăng trưởng. Việc định hình đội ngũ quản lý  sẽ cung cấp các dịch vụ công nghệ hàng đầu thế giới để thu hút được hàng triệu khách hàng tiếp theo.', 'https://www.clearpathdevelopment.com﻿', 'comp_acbbank@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv_user`
--

CREATE TABLE `cv_user` (
  `cv_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `vi_tri_ung_tuyen` varchar(50) NOT NULL,
  `gioi_tinh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dien_thoai` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `gioi_thieu_ban_than` varchar(100) NOT NULL,
  `kinh_nghiem` varchar(100) NOT NULL,
  `ky_nang_khac` varchar(100) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cv_user`
--

INSERT INTO `cv_user` (`cv_id`, `user_id`, `full_name`, `vi_tri_ung_tuyen`, `gioi_tinh`, `email`, `dien_thoai`, `ngay_sinh`, `dia_chi`, `gioi_thieu_ban_than`, `kinh_nghiem`, `ky_nang_khac`, `trang_thai`) VALUES
(8, '5@gmail.com', 'User 5', 'CEO', 'Nam', '5@gmail.com', '0123123123', '2003-02-13', 'abc Đ.xyz, p.x, q,y, VN', ' ', ' ', ' ', 'Chưa ứng tuyển');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `ID_job` int(11) NOT NULL,
  `name_job` text COLLATE utf8_unicode_ci NOT NULL,
  `ID_comp` int(11) NOT NULL,
  `name_comp` text COLLATE utf8_unicode_ci NOT NULL,
  `info_job` text COLLATE utf8_unicode_ci NOT NULL,
  `require_job` text COLLATE utf8_unicode_ci NOT NULL,
  `salary` text COLLATE utf8_unicode_ci NOT NULL,
  `date_posted` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`ID_job`, `name_job`, `ID_comp`, `name_comp`, `info_job`, `require_job`, `salary`, `date_posted`) VALUES
(1, 'Senior QA Engineer', 2, 'Treehouse Finance', 'Collaborate with cross-functional team members within and across business units to leverage internal product knowledge and expertise for optimum efficiency Interact with product management, project management and development teams to develop a strong understanding of the project and testing objectives. Design and create test cases and scripts to address business and technical use cases.', 'Have relevant 3-6 years working experience in development and/ or testing role. Excellent verbal and written communication skills. Technical background and an understanding of software testing. Good development/ scripting skills in common languages like Python, Shell script, etc', '2.000 USD', '2022/12/1'),
(2, 'Java Software Engineer', 3, 'NTT DATA Vietnam', 'Analyze and challenge product specifications. Actively participate in committees. Manage software development. Urgently address defects highlighted by the Certification team. Ensure the continuous update of the JIRA activity repository', 'At least 3 year of experience in a similar role. Good Full-stack mastery of Java and Angular. Industry knowledge of the development process (Code Review, Merge Request, Release Maven, …)', '15.000.000 VNĐ', '2022/12/3'),
(3, 'Senior Database', 1, 'Công ty TNHH NEC Việt Nam', 'Responsible for database creation, maintenance and administration functions for all database environments including database tuning, upgrading, patching.... Manage users & user rights on the database system. Support for daily operation of Production and other departments in data mining and data manipulation', '4+ years of database experience (MySQL, NoSQL Redis/ MongoDB, PostgreSQL), in addition to educational requirements', '3.000 USD', '2022/12/7'),
(4, 'Fullstack Developer', 6, 'KOFAX', 'Work with international customers and colleagues from Germany, France, the Czech Republic, and the US. Independent conception and implementation of new functions in complex application landscapes', 'Good verbal and written communication in English is required. 2+ years of professional experience in international software projects (flexible depending on how fast your learning and technical developing capabilities are)', 'Negotiable', '2022/12/8'),
(5, 'ServiceNow Developer', 7, 'Clear Path', 'Working for customers from the US. Develops ServiceNow software solutions using JavaScript, Jelly, Web Services, MYSQL, XML, HTML and CSS. Configuration Management (CMDB)', 'Must have a bachelors Degree in a software development-related field. 3+ Years of ServiceNow Software Development, Administrative Experience', 'Negotiable', '2022/12/10'),
(6, 'Back-end Developer', 8, 'NGÂN HÀNG Á CHÂU (ACB)', 'Thiết kế và phát triển các back-ends APIs cho hệ thống ứng dụng có khả năng xử lý hàng triệu giao dịch mỗi ngày. Tận dụng các thư viện mã nguồn mở hoặc thương mại có sẵn (có license) để giảm thiểu thời gian phát triển ứng dụng;', 'Tốt nghiệp đại học các ngành liên quan đến Công nghệ thông tin;Có tối thiểu 03 năm kinh nghiệm tham gia phát triển ứng dụng phần mềm;Có nhiều kinh nghiệm phát triển RESTFul API (level 2) sử dụng ngôn ngữ Java; Có kiến thức về Micro-Service, SOA,…', 'Thương lượng', '2022/12/12'),
(7, 'Lead Java Engineer', 4, 'Positive Thinking Company', 'Provide hands-on leadership to the design, development, and deployment of technical solutions. Design, develop, review, implement, and manage on the web-based application product in JAVA-related technologies', 'Proven hands-on experience on Java ecosystem, Spring boot, Microservices Experience with one of NoSQL databases: MongoDB/ Cassandra/ graph DB (Neo4j). Well-versed in writing structured, well-documented, maintainable, and clean code. Cloud-based technologies: AWS, OpenShift, Docker is a BIG plus', '2.000 USD', '2022/12/15'),
(8, 'Middle Frontend Developer', 5, 'M2 Vietnam', 'Develop reliable, scalable and maintainable web applications. Design application functions and views based on provided definitions. Building reusable code and libraries for future use. Maintain software to ensure optimization and functionality.', 'More than 3 years of experience in WEB application Frontend development. More than 3 years of experience with JavaScript frontend framework listed :React,Vue.js,Angular. Have knowledge to appropriately use HTML5 and CSS. Have experience with editing style with SCSS or SASS.', '35.000.000 VNĐ', '2022/12/15'),
(10, 'Android Developer', 3, 'NTT DATA Vietnam', 'Android app maintenance operation and project participation. Outsourcing project deliverables management and collaboration.', 'Android development for more than 5 years. Basic understanding of Android Platform. Those who have experience from application design to PlayStore deployment (those with sufficient standalone capabilities).', '3.000 USD', '2022/12/19'),
(15, 'IT', 5, 'M2 Vietnam', 'abv', 'abc', '12', '2022/12/18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_applied`
--

CREATE TABLE `job_applied` (
  `id` int(11) NOT NULL,
  `ten_vi_tri` varchar(50) NOT NULL,
  `ten_cong_ty` varchar(50) NOT NULL,
  `ngay_ung_tuyen` varchar(50) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `job_applied`
--

INSERT INTO `job_applied` (`id`, `ten_vi_tri`, `ten_cong_ty`, `ngay_ung_tuyen`, `trang_thai`, `username`) VALUES
(1, 'Senior QA Engineer', 'Treehouse Finance', '18-12-2022', 'Waitting', '5@gmail.com'),
(2, 'Lead Java Engineer', 'Positive Thinking Company', '18-12-2022', 'Waitting', '5@gmail.com'),
(3, 'Java Software Engineer', 'NTT DATA Vietnam', '18-12-2022', 'Waitting', '6@gmail.com'),
(4, 'Back-end Developer', 'NGÂN HÀNG Á CHÂU (ACB)', '18-12-2022', 'Waitting', '6@gmail.com'),
(5, 'Middle Frontend Developer', 'M2 Vietnam', '18-12-2022', 'Waitting', '6@gmail.com'),
(6, 'Senior Database', 'Công ty TNHH NEC Việt Nam', '18-12-2022', 'Waitting', '6@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `STT` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `birth` date NOT NULL,
  `phone` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `token_reset_password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`STT`, `name`, `birth`, `phone`, `gender`, `address`, `email`, `pass`, `token_reset_password`) VALUES
(16, 'User 5', '2003-12-09', '0123123123', 'Nam', 'abc Đ.xyz, p.x, q,y, VN', '5@gmail.com', '123456', NULL),
(17, 'User 6', '2001-02-22', '0123123123', 'Nam', 'abc Đ.xyz, p.x, q,y, VN', '6@gmail.com', '123456', NULL),
(18, 'admin', '2002-12-18', '031245671', 'nam', 'HCM', 'admin', '123456', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID_comp`);

--
-- Chỉ mục cho bảng `cv_user`
--
ALTER TABLE `cv_user`
  ADD PRIMARY KEY (`cv_id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`ID_job`);

--
-- Chỉ mục cho bảng `job_applied`
--
ALTER TABLE `job_applied`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`STT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cv_user`
--
ALTER TABLE `cv_user`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `ID_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `job_applied`
--
ALTER TABLE `job_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `STT` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
