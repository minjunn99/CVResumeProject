-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2022 lúc 03:53 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cvresume`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `date_start` year(4) NOT NULL,
  `date_end` year(4) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `education`
--

INSERT INTO `education` (`id`, `name`, `detail`, `date_start`, `date_end`, `id_member`) VALUES
(1, 'dang tran con a', 'primary school student', 2005, 2010, 2),
(2, 'vietnam - angieri', 'junior high school student', 2010, 2014, 2),
(3, 'dao duy tu', 'high school students', 2014, 2017, 2),
(4, 'Ta Quang Buu', 'high school', 2014, 2017, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employment`
--

CREATE TABLE `employment` (
  `id` int(11) NOT NULL,
  `undertake` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_start` year(4) NOT NULL,
  `date_end` year(4) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `employment`
--

INSERT INTO `employment` (`id`, `undertake`, `detail`, `description`, `date_start`, `date_end`, `id_member`) VALUES
(1, 'Waiter at An Huy Computer - Cybernet Game Center', '46 Ng. 41 Dong Tac Street, Kim Lien, Dong Da, Hanoi, Vietnam', 'During my time here, I have learned a lot from communicating with customers, serving their needs, and giving them the best service possible. Besides, I learned perseverance and patience.', 2018, 2019, 2),
(2, 'Php intern at Smartbooks Software Company', '5th Floor - Song Da Building 9, Nguyen Hoang Street, My Dinh 2 Ward, Nam Tu Liem District, Hanoi City.', 'I have participated and contributed a small part to the accounting software project Public investment project SmartBooks Project Finance 2020. Although the internship period was short, it left me with valuable work experience.', 2020, 2021, 2),
(3, 'Java Developer at OCG Technology JSC', '7 Floor, Vien Dong Building, 36 Hoang Cau Street, Ha Noi, Viet Nam', 'Maintain current projects. Develop Spring web applications from scratch using Java. Program in Excel using VBA. Deploy projects.', 2019, 2020, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `full_name`, `description`, `image`) VALUES
(1, 'anhtt', 'anhtt@123', 'tran tien anh', 'In my work, I try to consult, quote and provide prices of related products and services to customers. Outline product design according to customer requirements. Develop and research products according to complex design briefs. Modify the design according to customer requirements. Prepare product images for design materials. Create advertising videos, propaganda videos, ... according to customer needs.', './assets/img/member-01.jpg'),
(2, 'trunghh', 'trunghh@123', 'hoang hieu trung', 'At work, I am responsible for the look and feel of a website. In addition, they are also the designers of the user experience. To do those jobs, Frontend Developer needs to know 3 main programming languages. Those are: HTML, CSS, and JavaScript. Moreover, I am a Frontend developer, so I also have to use my own thinking about UI/UX. At the same time, they need to work closely with designers or BAs (Business Analyst). Thereby, they can analyze and improve the user experience on applications and software.', './assets/img/member-02.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL,
  `demo` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `date`, `image`, `demo`, `id_member`) VALUES
(1, 'E-Commerce Cart Project with HTML, CSS, JS', 'In this project, there are functions such as when clicking add product and cart, updating the product added to the cart and saving data in localstorage, managing the cart such as adding new products to the cart, deleting products in cart and update the quantity of each product in the cart. The knowledge I have gained in this project is how to store and get data from localstorage and do things when events in the DOM occur.', '2022-05-27', './assets/img/project/ecommerce-cart.jpeg', 'https://github.com/minjunn99/E-Commerce', 2),
(2, 'Build calculator project', 'Build calculator project with ReactJS. Learn build reactjs project with function', '2022-05-26', './assets/img/project/calculator.jpg', 'https://github.com/minjunn99/calculator/', 2),
(4, 'Mobile order', 'Is a web responsive application for ordering food. Customers can login, order food and pay money. Sellers \r\ncan login and see the order details.', '2020-06-09', './assets/img/project/mobile-order.webp', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `comment` mediumtext NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `testimonial`
--

INSERT INTO `testimonial` (`id`, `full_name`, `comment`, `id_member`) VALUES
(1, 'sims', 'It is a distinct pleasure for me to recommend Thrive Internet Marketing to any and all interested parties. They have been professional, comprehensive and competent throughout the process of our working together. We feel that we have established a relationship with them for years to come. The reaction to our new web site has been overwhelmingly positive; as one commented the site is “FANTASTIC.” The same can be said for our view of Thrive’s work for us.', 2),
(2, 'brandon', 'Since having our new website built by Thrive, we have seen a 200% increase in the number of online contact forms being filled out and returned to us. Matt and his team worked closely with us to provide a site that met all of the criteria that we were looking for. The end result was a website that is attractive, organized and effective. Thanks to Thrive for all of your hard work and support!', 2),
(3, 'wilkes', 'I speak for the trolley district when I tell you how pleased we are with the web site you designed for us. The district needed a site that addressed varied aspects of our operation. You have met those needs and then some! We have had nothing but rave comments about the site from those who are closest to it and rely on it the most. I personally want to thank you and your staff for their patience and diligence in promptly meeting each of our requests for the site during its development.', 1),
(4, 'david', 'With Thrive’s help, we were able to increase the functionality of our website dramatically while cutting our costs. Our website is much more easy to use, has tons of more features than before and is incredibly easy to maintain. We could not be more happy with our new website! Thanks Thrive!', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Chỉ mục cho bảng `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_member`);

--
-- Chỉ mục cho bảng `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Chỉ mục cho bảng `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`);

--
-- Các ràng buộc cho bảng `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`);

--
-- Các ràng buộc cho bảng `employment`
--
ALTER TABLE `employment`
  ADD CONSTRAINT `employment_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`);

--
-- Các ràng buộc cho bảng `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`);

--
-- Các ràng buộc cho bảng `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
