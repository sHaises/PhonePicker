-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 12, 2023 la 08:18 PM
-- Versiune server: 10.4.25-MariaDB
-- Versiune PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `proiectcolectiv`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `mobiles_for_site`
--

CREATE TABLE `mobiles_for_site` (
  `ID_MOBILE` int(100) NOT NULL DEFAULT 0,
  `Model` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `Raiting` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `Sim` varchar(57) CHARACTER SET utf8 DEFAULT NULL,
  `Procesor` varchar(51) CHARACTER SET utf8 DEFAULT NULL,
  `Ram` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `Battery` varchar(59) CHARACTER SET utf8 DEFAULT NULL,
  `Dispaly` varchar(65) CHARACTER SET utf8 DEFAULT NULL,
  `Camera` varchar(66) CHARACTER SET utf8 DEFAULT NULL,
  `Card` varchar(67) CHARACTER SET utf8 DEFAULT NULL,
  `OS` varchar(34) CHARACTER SET utf8 DEFAULT NULL,
  `likes` int(11) DEFAULT 0,
  `dislikes` int(11) DEFAULT 0,
  `picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `mobiles_for_site`
--

INSERT INTO `mobiles_for_site` (`ID_MOBILE`, `Model`, `Price`, `Raiting`, `Sim`, `Procesor`, `Ram`, `Battery`, `Dispaly`, `Camera`, `Card`, `OS`, `likes`, `dislikes`, `picture`) VALUES
(1, 'OnePlus 11 5G', '604.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 8 Gen2, Octa Core, 3.2 GHz Processor', '12 GB RAM, 256 GB inbuilt', '5000 mAh Battery with 100W Fast Charging', '6.7 inches, 1440 x 3216 px, 120 Hz Display with Punch Hole', '50 MP + 48 MP + 32 MP Triple Rear & 16 MP Front Camera', 'Memory Card Not Supported', 'Android v13', 0, 0, 'CSS/Others/Phones/oneplus.avif'),
(771, 'Realme GT 2 Pro 5G (12GB RAM + 256GB)', '516.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 8 Gen1, Octa Core, 3 GHz Processor', '12 GB RAM, 256 GB inbuilt', '5000 mAh Battery with 65W Fast Charging', '6.7 inches, 1440 x 3216 px, 120 Hz Display with Punch Hole', '50 MP + 50 MP + 2 MP Triple Rear & 32 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/realme.avif'),
(265, 'Samsung Galaxy A53 (8GB RAM + 256GB)', '401.49', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Exynos 1280, Octa Core, 2.4 GHz Processor', '8 GB RAM, 256 GB inbuilt', '5000 mAh Battery with 25W Fast Charging', '6.5 inches, 1080 x 2400 px, 120 Hz Display with Punch Hole', '64 MP Quad Rear & 32 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/samsung53.webp'),
(273, 'Google Pixel 6 Pro', '597.30', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Google  Tensor, Octa Core, 2.8 GHz Processor', '12 GB RAM, 128 GB inbuilt', '5003 mAh Battery with 30W Fast Charging', '6.71 inches, 1440 x 3120 px, 120 Hz Display with Punch Hole', '50 MP + 48 MP + 12 MP Triple Rear & 11.1 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/googlepixel6.webp'),
(277, 'Xiaomi 12 Pro 5G', '560.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC, IR Blaster', 'Snapdragon 8 Gen1, Octa Core, 3 GHz Processor', '8 GB RAM, 256 GB inbuilt', '4600 mAh Battery with 120W Fast Charging', '6.73 inches, 1440 x 3200 px, 120 Hz Display with Punch Hole', '50 MP + 50 MP + 50 MP Triple Rear & 32 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/xiaomi12.webp'),
(541, 'ZTE Axon 40 Ultra 5G', '681.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 8 Gen1, Octa Core, 3 GHz Processor', '8 GB RAM, 128 GB inbuilt', '5000 mAh Battery with 65W Fast Charging', '6.8 inches, 1116 x 2480 px, 120 Hz Display', '64 MP + 64 MP + 64 MP Triple Rear & 16 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/zteaxon.webp'),
(299, 'Xiaomi 13 5G', '516.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC, IR Blaster', 'Snapdragon 8 Gen2, Octa Core, 3.2 GHz Processor', '8 GB RAM, 128 GB inbuilt', '4500 mAh Battery with 67W Fast Charging', '6.36 inches, 1080 x 2400 px, 120 Hz Display with Punch Hole', '50 MP + 12 MP + 10 MP Triple Rear & 32 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/xiaomi13.avif'),
(570, 'Samsung Galaxy Z Fold 3', '1220.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 888, Octa Core, 2.84 GHz Processor', '12 GB RAM, 256 GB inbuilt', '4400 mAh Battery with 25W Fast Charging', '7.6 inches, 1768 x 2208 px, 120 Hz Display with Punch Hole', '12 MP + 12 MP + 12 MP Triple Rear & 10 MP + 4 MP Dual Front Camera', 'Memory Card (Hybrid), upto 2 T', 'Android v11', 0, 0, 'CSS/Others/Phones/samsungfold.webp'),
(59, 'Samsung Galaxy S23 Plus', '934.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Vo5G, Wi-Fi, NFC', 'Snapdragon 8 Gen2, Octa Core, 3.2 GHz Processor', '8 GB RAM, 256 GB inbuilt', '4700 mAh Battery with 45W Fast Charging', '6.6 inches, 1080 x 2340 px, 120 Hz Display with Punch Hole', '50 MP + 12 MP + 10 MP Triple Rear & 12 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/samsungs23.avif'),
(571, 'LG Wing 5G', '604.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon  765G , Octa Core, 2.4 GHz Processor', '8 GB RAM, 128 GB inbuilt', '4000 mAh Battery with Fast Charging', '6.8 inches, 1080 x 2460 px Display', '64 MP + 13 MP + 12 MP Triple Rear & 32 MP Front Camera', 'Memory Card (Hybrid), upto 2 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/lgwing.jpg'),
(67, 'OnePlus 10 Pro 5G', '670.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon  8 Gen1, Octa Core, 3 GHz Processor', '8 GB RAM, 128 GB inbuilt', '5000 mAh Battery with 80W Fast Charging', '6.7 inches, 1440 x 3216 px, 120 Hz Display with Punch Hole', '50 MP + 48 MP + 8 MP Triple Rear & 32 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/oneplus10.webp'),
(584, 'Motorola Edge 40 Pro 5G', '659.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 8 Gen2, Octa Core, 3.2 GHz Processor', '8 GB RAM, 128 GB inbuilt', '4800 mAh Battery with 125W Fast Charging', '6.7 inches, 1080 x 2460 px, 165 Hz Display with Punch Hole', '50 MP + 50 MP + 12 MP Triple Rear & 60 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/motorola40.avif'),
(340, 'OnePlus 9 Pro', '712.80', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 888, Octa Core, 2.84 GHz Processor', '8 GB RAM, 128 GB inbuilt', '4500 mAh Battery with 65W Fast Charging', '6.7 inches, 1440 x 3216 px, 120 Hz Display with Punch Hole', '48 MP Quad Rear & 16 MP Front Camera', 'Memory Card Not Supported', 'Android v11', 0, 0, 'CSS/Others/Phones/oneplus9.webp'),
(362, 'Xiaomi 12T Pro 5G', '659.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC, IR Blaster', 'Snapdragon  8+ Gen1, Octa Core, 3.2 GHz Processor', '8 GB RAM, 128 GB inbuilt', '5000 mAh Battery with 120W Fast Charging', '6.67 inches, 1220 x 2712 px, 120 Hz Display with Punch Hole', '200 MP + 8 MP + 2 MP Triple Rear & 20 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/xiaomi12tpro.webp'),
(630, 'Sony Xperia 1 II', '769.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon  865 , Octa Core, 2.84 GHz Processor', '8 GB RAM, 256 GB inbuilt', '4000 mAh Battery with 21W Fast Charging', '6.5 inches, 1644 x 3840 px Display', '12 MP Quad Rear & 8 MP Front Camera', 'Memory Card (Hybrid)', 'Android v10', 0, 0, 'CSS/Others/Phones/sony2.png'),
(631, 'Motorola Edge Plus', '637.99', '89', 'Single Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon  865 , Octa Core, 2.84 GHz Processor', '12 GB RAM, 256 GB inbuilt', '5000 mAh Battery with 18W Fast Charging', '6.7 inches, 1080 x 2340 px, 90 Hz Display with Punch Hole', '108 MP + 16 MP + 8 MP Triple Rear & 25 MP Front Camera', 'Android v10.0', 'Android v12', 0, 0, 'CSS/Others/Phones/motorolaplus.webp'),
(121, 'Motorola Edge 30 Pro 5G', '384.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 8 Gen1, Octa Core, 3 GHz Processor', '8 GB RAM, 128 GB inbuilt', '4800 mAh Battery with 68W Fast Charging', '6.7 inches, 1080 x 2400 px, 144 Hz Display with Punch Hole', '50 MP + 50 MP + 2 MP Triple Rear & 60 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, 'CSS/Others/Phones/motorola30pro.webp'),
(685, 'Samsung Galaxy Note 10 Plus 5G', '1022.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC, IR Blaster', 'Exynos 9825, Octa Core, 2.7 GHz Processor', '12 GB RAM, 256 GB inbuilt', '4300 mAh Battery with Fast Charging', '6.8 inches, 1440 x 3040 px Display with Punch Hole', '12 MP Quad Rear & 10 MP Front Camera', 'Memory Card (Hybrid), upto 512 GB', 'Android v9.0 (Pie)', 0, 0, 'CSS/Others/Phones/galaxy10.webp'),
(699, 'Sony Xperia 5 IV 5G', '904.19', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 8 Gen1, Octa Core, 3 GHz Processor', '8 GB RAM, 256 GB inbuilt', '5000 mAh Battery with 30W Fast Charging', '6.1 inches, 1080 x 2520 px, 120 Hz Display', '12 MP + 12 MP + 12 MP Triple Rear & 12 MP Front Camera', 'Memory Card (Hybrid)', 'Android v12', 0, 0, 'CSS/Others/Phones/sony5.webp'),
(727, 'Huawei Mate Xs 2', '1792.89', '89', 'Dual Sim, 3G, 4G, VoLTE, Wi-Fi, NFC, IR Blaster', 'Snapdragon 888, Octa Core, 2.84 GHz Processor', '8 GB RAM, 512 GB inbuilt', '4600 mAh Battery with 66W Fast Charging', '7.8 inches, 2200 x 2480 px, 120 Hz Display with Punch Hole', '50 MP + 13 MP + 8 MP Triple Rear & 10.7 MP Front Camera', 'Memory Card (Hybrid), upto 256 GB', 'Android v12', 0, 0, 'CSS/Others/Phones/huawei2.webp'),
(750, 'Samsung Galaxy S20 5G', '824.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Exynos  990, Octa Core, 2.73 GHz Processor', '8 GB RAM, 128 GB inbuilt', '4000 mAh Battery with 25W Fast Charging', '6.2 inches, 1440 x 3200 px Display with Punch Hole', '64 MP + 12 MP + 12 MP Triple Rear & 10 MP Front Camera', 'Memory Card (Hybrid), upto 1 TB', 'Android v10.0', 0, 0, NULL),
(1008, 'Xiaomi 14', '604.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Vo5G, Wi-Fi, NFC, IR Blaster', 'Snapdragon 8 Gen2, Octa Core, 3.2 GHz Processor', '12 GB RAM, 256 GB inbuilt', '5000 mAh Battery with 67W Fast Charging', '6.43 inches, 1440 x 3200 px, 120 Hz Display with Punch Hole', '50 MP + 50 MP + 50 MP Triple Rear & 32 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v13', 0, 0, NULL),
(241, 'Xiaomi Redmi Note 12 Explorer', '274.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC, IR Blaster', 'Dimensity 1080, Octa Core, 2.6 GHz Processor', '8 GB RAM, 256 GB inbuilt', '4300 mAh Battery with 120W Fast Charging', '6.67 inches, 1080 x 2400 px, 120 Hz Display with Punch Hole', '200 MP + 8 MP + 2 MP Triple Rear & 16 MP Front Camera', 'Memory Card Supported, upto 512 GB', 'Android v12', 0, 0, 'CSS/Others/Phones/xiaomiredmi.avif'),
(1009, 'Motorola ThinkPhone', '549.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Vo5G, Wi-Fi, NFC', 'Snapdragon 8+ Gen1, Octa Core, 3.2 GHz Processor', '8 GB RAM, 128 GB inbuilt', '5000 mAh Battery with 68W Fast Charging', '6.6 inches, 1080 x 2400 px, 144 Hz Display', '50 MP + 13 MP + 2 MP Triple Rear & 32 MP + 16 MP Dual Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v13', 0, 0, NULL),
(1012, 'Oppo Find X6', '769.89', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Snapdragon 8 Gen2, Octa Core, 3.2 GHz Processor', '8 GB RAM, 256 GB inbuilt', '4700 mAh Battery with 120W Fast Charging', '6.73 inches, 1080 x 2400 px, 120 Hz Display with Punch Hole', '50 MP + 48 MP + 32 MP Triple Rear & 32 MP Front Camera', 'Memory Card Supported upto 512 GB', 'Android v12', 0, 0, NULL),
(252, 'Tecno Phantom X2 Pro', '549.99', '89', 'Dual Sim, 3G, 4G, 5G, VoLTE, Wi-Fi, NFC', 'Dimensity 9000, Octa Core, 3.05 GHz Processor', '12 GB RAM, 256 GB inbuilt', '5160 mAh Battery with 45W Fast Charging', '6.8 inches, 1080 x 2400 px, 120 Hz Display with Punch Hole', '50 MP + 50 MP + 13 MP Triple Rear & 32 MP Front Camera', 'Memory Card Supported, upto 1 TB', 'Android v12', 0, 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
