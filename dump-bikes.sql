-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Haz 2023, 16:28:54
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bikes`
--
DROP DATABASE IF EXISTS `bikes`;
CREATE DATABASE IF NOT EXISTS `bikes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bikes`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE IF NOT EXISTS `anasayfa` (
  `carousel_sira` int(11) DEFAULT NULL,
  `carousel_baslik` varchar(100) DEFAULT NULL,
  `carousel_baslik_2` varchar(100) DEFAULT NULL,
  `carousel_resim` varchar(100) DEFAULT NULL,
  `carousel_buton` varchar(100) DEFAULT NULL,
  `form_action` varchar(100) DEFAULT NULL,
  `form_input_id` varchar(100) DEFAULT NULL,
  `form_input_name` varchar(100) DEFAULT NULL,
  `form_input_value` varchar(100) DEFAULT NULL,
  `carousel_active` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`carousel_sira`, `carousel_baslik`, `carousel_baslik_2`, `carousel_resim`, `carousel_buton`, `form_action`, `form_input_id`, `form_input_name`, `form_input_value`, `carousel_active`) VALUES
(2, 'Yılın En İyi', 'Yol Bisikletleri', 'bikes3.jpg', 'Şimdi İncele', 'bisikletler.php', 'tur', 'tur[]', 'ROAD', '1'),
(1, 'Yılın En İyi', 'Dağ Bisikletleri', 'bikes2.jpg', 'Şimdi İncele', 'bisikletler.php', 'tur', 'tur[]', 'MTB', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_feature`
--

CREATE TABLE IF NOT EXISTS `anasayfa_feature` (
  `anabaslik` text DEFAULT NULL,
  `anayazi` text DEFAULT NULL,
  `butonyazi` varchar(100) DEFAULT NULL,
  `butonlink` varchar(100) DEFAULT NULL,
  `simge1` text DEFAULT NULL,
  `baslik1` text DEFAULT NULL,
  `yazi1` text DEFAULT NULL,
  `simge2` text DEFAULT NULL,
  `baslik2` text DEFAULT NULL,
  `yazi2` text DEFAULT NULL,
  `simge3` text DEFAULT NULL,
  `baslik3` text DEFAULT NULL,
  `yazi3` text DEFAULT NULL,
  `simge4` text DEFAULT NULL,
  `baslik4` text DEFAULT NULL,
  `yazi4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `anasayfa_feature`
--

INSERT INTO `anasayfa_feature` (`anabaslik`, `anayazi`, `butonyazi`, `butonlink`, `simge1`, `baslik1`, `yazi1`, `simge2`, `baslik2`, `yazi2`, `simge3`, `baslik3`, `yazi3`, `simge4`, `baslik4`, `yazi4`) VALUES
('Sizlere bu hizmeti sunmaktan gurur duyuyoruz!', '15 yılda bu alanın en iyi dükkanı olmaktan gurur duyuyoruz. Başarı hikayemizi hakkında daha fazla bilgi almak için alttaki butona tıklayın.', 'Başarı Hikayemiz!', 'about.php', 'bi bi-bicycle', 'Ürün Çeşitliliği', 'Her kişiye hitap eden bir bisiklet bulunduruyoruz.', 'bi bi-shop', 'Dükkan Güvenirliği', 'Alanındaki en iyi ustalara sahip olmaktan gurur duyuyoruz. Bisikletlerinizi bıraktığınızda gözünüz arkada kalmayacak.', 'bi bi-tools', 'Bakım Hizmeti', 'En yakın bayimize giderek bakım randevunuzu oluşturabilirsiniz.', 'bi bi-airplane', 'Kargo Hizmeti', '1 İş günü içinde Türkiye içi her yere kargo yapıyoruz. (Yurt dışı alımları için süre garantisi veremiyoruz.)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bisikletler`
--

CREATE TABLE IF NOT EXISTS `bisikletler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bisiklet_marka` varchar(100) NOT NULL,
  `bisiklet_marka_2` varchar(100) DEFAULT NULL,
  `bisiklet_model` varchar(100) NOT NULL,
  `bisiklet_model_2` varchar(100) DEFAULT NULL,
  `bisiklet_fiyat` int(11) NOT NULL DEFAULT 0,
  `bisiklet_renk` varchar(100) NOT NULL,
  `bisiklet_tur` varchar(100) DEFAULT NULL,
  `bisiklet_tarz` varchar(100) DEFAULT NULL,
  `bisiklet_aciklama` varchar(255) DEFAULT NULL,
  `bisiklet_diger` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `bisikletler`
--

INSERT INTO `bisikletler` (`id`, `bisiklet_marka`, `bisiklet_marka_2`, `bisiklet_model`, `bisiklet_model_2`, `bisiklet_fiyat`, `bisiklet_renk`, `bisiklet_tur`, `bisiklet_tarz`, `bisiklet_aciklama`, `bisiklet_diger`) VALUES
(1, 'Specialized', 'S-Works', 'Epic', '', 12000, 'SATIN CARBON / COLOR RUN BLUE MURANO PEARL / GLOSS CHROME FOIL LOGOS', 'MTB', 'Cross Country', '', ''),
(2, 'Specialized', NULL, 'Epic EVO', 'Pro', 8900, 'Gloss Birch/Bronze Pearl/Pearl', 'MTB', 'Cross Country', NULL, NULL),
(3, 'Specialized', NULL, 'Rockhopper', '', 650, 'SATIN OLIVE GREEN / BLACK', 'MTB', 'Cross Country', NULL, NULL),
(4, 'Specialized', NULL, 'Rockhopper', 'Sport', 750, 'GLOSS BLAZE / ICE PAPAYA', 'MTB', 'Cross Country', NULL, NULL),
(5, 'Specialized', NULL, 'Rockhopper', 'Expert', 1400, 'GLOSS LAGOON BLUE / SATIN LIGHT SILVER', 'MTB', 'Cross Country', NULL, NULL),
(6, 'Specialized', NULL, 'Stumpjumper', 'Alloy', 2800, 'SATIN BLACK / SMOKE', 'MTB', 'Trail', NULL, NULL),
(7, 'Specialized', NULL, 'Stumpjumper EVO', 'Expert', 6300, 'SATIN CARBON / OLIVE GREEN / BLACK', 'MTB', 'Trail', NULL, NULL),
(8, 'Specialized', NULL, 'Chisel', '', 1800, 'GLOSS MAROON / ICE PAPAYA', 'MTB', 'Cross Country', NULL, NULL),
(9, 'Specialized', NULL, 'Chisel', 'Comp', 2400, 'SATIN LIGHT SILVER / GLOSS SPECTRAFLAIR', 'MTB', 'Cross Country', NULL, NULL),
(10, 'Specialized', NULL, 'Epic Hardtail', '', 2500, 'GLOSS LAGOON / CHAMELEON EYRIS', 'MTB', 'Cross Country', NULL, NULL),
(11, 'Specialized', NULL, 'Epic Hardtail', 'Expert', 4500, 'SATIN CARBON/SPECTRAFLAIR', 'MTB', 'Cross Country', NULL, NULL),
(12, 'Specialized', NULL, 'Epic Hardtail', 'Comp', 2900, 'SATIN CARBON/OIL CHAMELEON/FLAKE SILVER', 'MTB', 'Cross Country', NULL, NULL),
(13, 'Specialized', NULL, 'Epic Hardtail', 'Pro', 5800, 'GLOSS ABALONE/SATIN BLACK', 'MTB', 'Cross Country', NULL, NULL),
(14, 'Specialized', NULL, 'Crux', 'Comp', 4200, 'Gloss Arctic Blue/Tarmac Black', 'ROAD', 'Cyclocross', NULL, NULL),
(15, 'Specialized', NULL, 'Diverge', 'Elite', 2000, 'Gloss Lagoon Blue/Smoke/Chrome/Clean', 'ROAD', 'Gravel', NULL, NULL),
(16, 'Specialized', 'S-Works', 'Diverge STR', '', 14000, 'Satin Forest Green/Dark Moss Green/Black Pearl', 'ROAD', 'Gravel', NULL, NULL),
(17, 'Specialized', NULL, 'Diverge STR', 'Pro', 9500, 'Satin Blaze/Violet Ghost Pearl Fade', 'ROAD', 'Gravel', NULL, NULL),
(18, 'Specialized', NULL, 'Tarmac SL7', 'Expert', 8300, 'Gloss Carbon/Oil Tint/Forest Green', 'ROAD', 'Performance', NULL, NULL),
(19, 'Specialized', NULL, 'Roubaix', 'Expert', 8000, 'Teal Tint/ Ice Papaya/ Black Reflective', 'ROAD', 'Performance', NULL, NULL),
(20, 'Specialized', NULL, 'Aethos', 'Expert', 8000, 'Pine Green / White', 'ROAD', 'Performance', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bisiklet_detay`
--

CREATE TABLE IF NOT EXISTS `bisiklet_detay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bisiklet_id` int(11) NOT NULL,
  `kadro` varchar(500) DEFAULT NULL,
  `sele_kelepcesi` varchar(255) DEFAULT NULL,
  `aksesuarlar` varchar(255) DEFAULT NULL,
  `arka_suspansiyon` varchar(255) DEFAULT NULL,
  `masa` varchar(255) DEFAULT NULL,
  `gidon_bogazi` varchar(255) DEFAULT NULL,
  `gidon` varchar(255) DEFAULT NULL,
  `elcik` varchar(255) DEFAULT NULL,
  `sele` varchar(255) DEFAULT NULL,
  `sele_borusu` varchar(255) DEFAULT NULL,
  `on_fren` varchar(255) DEFAULT NULL,
  `arka_fren` varchar(255) DEFAULT NULL,
  `arka_aktarici` varchar(255) DEFAULT NULL,
  `on_aktarici` varchar(255) DEFAULT NULL,
  `vites_kollari` varchar(255) DEFAULT NULL,
  `ruble` varchar(255) DEFAULT NULL,
  `zincir` varchar(255) DEFAULT NULL,
  `aynakol` varchar(255) DEFAULT NULL,
  `aynakol_dislisi` varchar(255) DEFAULT NULL,
  `orta_gobek` varchar(255) DEFAULT NULL,
  `jantlar` varchar(255) DEFAULT NULL,
  `on_gobek` varchar(255) DEFAULT NULL,
  `arka_gobek` varchar(255) DEFAULT NULL,
  `jant_teli` varchar(255) DEFAULT NULL,
  `on_lastik` varchar(255) DEFAULT NULL,
  `arka_lastik` varchar(255) DEFAULT NULL,
  `ic_lastik` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bisiklet_id` (`bisiklet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `bisiklet_detay`
--

INSERT INTO `bisiklet_detay` (`id`, `bisiklet_id`, `kadro`, `sele_kelepcesi`, `aksesuarlar`, `arka_suspansiyon`, `masa`, `gidon_bogazi`, `gidon`, `elcik`, `sele`, `sele_borusu`, `on_fren`, `arka_fren`, `arka_aktarici`, `on_aktarici`, `vites_kollari`, `ruble`, `zincir`, `aynakol`, `aynakol_dislisi`, `orta_gobek`, `jantlar`, `on_gobek`, `arka_gobek`, `jant_teli`, `on_lastik`, `arka_lastik`, `ic_lastik`) VALUES
(1, 1, 'S-Works FACT 13m Carbon, Progressive XC Race Geometry, Rider-First Engineered™, threaded BB, 12x148mm rear spacing, internal cable routing, 100mm of travel', 'Specialized Alloy 34.9, Titanium Bolt', '', 'RockShox-Specialized BRAIN, Rx XC Tune, 5 Position Platform Adjust, Rebound Adjust, Integraded Extension, 265x52.5mm', 'RockShox SID SL ULTIMATE BRAIN, Top-Adjust Brain damper, Debon Air, 15x110mm, 44mm offset, 100mm Travel', 'S-Works SL, alloy, titanium bolts, 6-degree rise', 'S-Works Carbon XC Mini Rise, 6-degree upsweep, 8-degree backsweep, 10mm rise, 760mm, 31.8mm', 'Specialized Trail Grips', 'Body Geometry S-Works Power, carbon fiber rails, carbon fiber base', 'RockShox Reverb AXS, 30.9, 1X remote, (SM:100mm, M: 125mm, L-XL: 150mm travel)', 'SRAM Level Ultimate, 2-piston caliper, hydraulic disc', 'SRAM Level Ultimate, 2-piston caliper, hydraulic disc', 'SRAM XX1 Eagle AXS', '', 'SRAM Eagle AXS Rocker Paddle', 'Sram XG-1299, 12-Speed, 10-52t', 'SRAM XX1 Eagle', 'Quarq XX1 Powermeter, DUB, 170/175mm, 34t', '34T', 'SRAM DUB, BSA 73mm, Threaded', 'Roval Control SL, Carbon offset design, 29mm internal width, 4mm hook width, Tubeless ready, 24h', 'Roval Control SL, DT Swiss Internals, Ceramic Bearings, 6-bolt, 15mm thru-axle, 110mm spacing, Torque caps, 24h straight pull t-head', 'Roval Control SL, DT Swiss Internals, Ceramic Bearings, 6-bolt, 15mm thru-axle, 110mm spacing, Torque caps, 24h straight pull t-head', 'DT Swiss Aerolite T-head', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35', 'RENEGADE CONTROL 2BR, 29x2.35, T5', 'Specialized Turbo Tube'),
(2, 2, 'FACT 11m Full Carbon, Progressive XC Geometry, Rider-First Engineered™, threaded BB, 12x148mm rear spacing, internal cable routing, 110mm of travel', 'Specialized Alloy, 34.9mm', NULL, 'FOX FLOAT DPS Factory, Rx XC Tune, EVOL Air sleeve, Kashima Coat, 3-position adjustment w/ Open Mode Adjustment, 190x40mm', 'FOX FLOAT 34 Factory, Fit4 damper, Kashima Coating, 15x110mm, 44mm offset, 120mm of travel', 'Race Face Turbine R, 60mm, 35mm clamp', 'Roval Control Rise Carbon Handlebar, 760mm wide, 20mm rise, 35mm', 'Specialized Trail Grips', 'Body Geometry Power Expert, titanium rails', 'Fox Transfer Factory, 30.9, 1X remote, (S:125mm, M/L: 150mm, XL: 175mm)\r\n\r\n', 'SRAM G2 RSC, 4-piston caliper, hydraulic disc, 180mm rotor\r\n\r\n', 'SRAM G2 RSC, 4-piston caliper, hydraulic disc, 180mm rotor\r\n\r\n', 'SRAM X01 Eagle AXS\r\n\r\n', NULL, 'SRAM Eagle AXS Rocker Paddle\r\n\r\n', 'SRAM XG-1295 Eagle, 10-52t\r\n\r\n', 'SRAX X01 Eagle, 12-speed\r\n\r\n', 'SRAM X1 Carbon, DUB, S:170mm, M-XL: 175mm\r\n\r\n', '32T', 'SRAM DUB, BSA 73mm, Threaded\r\n\r\n', 'Roval Control, Carbon offset design, 29mm internal width, 4mm hook width, Tubeless ready, 28h', 'DT Swiss 350, 6-bolt, 15mm Thru-axle, 110mm spacing, 28h straight -pull', 'DT Swiss 350 straight-pull, 6-bolt, DT Swiss Ratchet, 12x148mm thru axle, XD freehub body, 28h straight-pull', 'DT Swiss Comp Race', 'Specialized Ground Control, GRID Casing, T7 Compound, 29x2.35', 'Specialized Ground Control, GRID Casing, T7 Compound, 29x2.35', 'Specialized Turbo Tube'),
(3, 3, 'Specialized A1 premium butted alloy, zero-stack head tube, internal cable routing, 135x9mm forged dropouts, chainstay-mounted disc brake, replaceable alloy derailleur hanger, stealth rack mounts, dropper post compatible', 'Alloy, quick release, 34.9', NULL, NULL, 'SR Suntour XCE 29, 28mm stanchions, Rx Tune, coil spring, QR, 90/100mm travel (size-specific), 46mm offset', '3D-forged alloy, 31.8mm, 7-degree rise', 'Stout Mini Rise, alloy, 9-degree backsweep, 15mm rise, 31.8mm', 'Specialized MTB Grip, lock-on', 'Bridge Sport, Steel rails, 155/143mm\r\n\r\n', 'Alloy, 2-bolt clamp, 30.9mm\r\n\r\n', 'Radius CX7, mechanical disc, 160mm', 'Radius CX7, mechanical disc, 160mm', 'Microshift Mezzo, 8spd\r\n\r\n', 'microSHIFT FD-M462, 2-speed\r\n\r\n', 'microSHIFT, TS39-8R, 2x8-speed', 'SunRace, 8-speed, 11-34t', 'KMC X8 EPT, anti-rust coating, 8-speed w/ reusable Missing Link™', 'Stout 2x, forged alloy', NULL, 'Square-tapered, 73mm, internal bearings, 122.5mm spindle', 'Specialized alloy, disc only, double-wall, 25mm inner width, 32h', 'Formula 6-Bolt, disc, 100x9mm spacing, quick-release, 32H\r\n\r\n', 'Formula SP-2125, 6-Bolt freehub, disc, 135x9mm spacing, quick-release', 'Stainless, 14g', 'Fast Trak Sport, 29x2.35\"', 'Fast Trak Sport, 29x2.35\"', 'Schrader, 40mm valve'),
(4, 4, 'Specialized A1 premium butted alloy, zero-stack head tube, internal cable routing, 135x9mm forged dropouts, chainstay-mounted disc brake, replaceable alloy derailleur hanger, stealth rack mounts, dropper post compatible', 'Alloy, quick release, 34.9', NULL, NULL, 'SR Suntour XCM 29, 30mm stanchions, Rx Tune, coil spring, QR, 90/100mm travel (size-specific), 42mm offset', '3D-forged alloy, 31.8mm, 7-degree rise', 'Stout Mini Rise, alloy, 9-degree backsweep, 15mm rise, 31.8mm', 'Specialized MTB Grip, lock-on', 'Bridge Sport, Steel rails, 155/143mm', 'Alloy, 2-bolt clamp, 30.9mm', 'Shimano BR-MT200, hydraulic disc, 180mm', 'Shimano BR-MT200, hydraulic disc, 180mm', 'Microshift RD-M46L, 9spd', 'microSHIFT FD-M462, 2-speed', 'Microshift, SL-M859R, 2x9', 'SunRace, 9-Speed, 11-36t', 'KMC X9EPT, 9-speed, anti-corrosion coating w/ reusable Missing Link™', 'Stout 2x, forged alloy', NULL, 'Square-tapered, 73mm, internal bearings, 122.5mm spindle', 'Specialized alloy, disc only, double-wall, 25mm inner width, 32h', 'Formula 6-Bolt, disc, 100x9mm spacing, quick-release, 32H', 'Formula SP-2125, 6-Bolt freehub, disc, 135x9mm spacing, quick-release', 'Stainless, 14g', 'Fast Trak Sport, 29x2.35\"', 'Fast Trak Sport, 29x2.35\"', 'Schrader, 40mm valve'),
(5, 5, 'Specialized A1 premium butted alloy, zero-stack head tube, internal cable routing, 135x9mm forged dropouts, chainstay-mounted disc brake, replaceable alloy derailleur hanger, stealth rack mounts, dropper post compatible', 'Alloy, quick release, 34.9', NULL, NULL, 'RockShox Judy, Solo Air, Turnkey damper, 46mm offset, QR, 80/90/100mm travel (size-specific), alloy steerer', '3D-forged alloy, 31.8mm, 7-degree rise', 'Stout Mini Rise, alloy, 9-degree backsweep, 15mm rise, 31.8mm', 'Specialized MTB Grip, lock-on', 'Bridge Sport, Steel rails, 155/143mm', 'Alloy, 2-bolt clamp, 30.9mm', 'SRAM Level, hydraulic disc, 180/160mm', 'SRAM Level, 2-piston caliper, hydraulic disc, 180mm', 'SRAM SX Eagle, 12-speed', NULL, 'SRAM SX Eagle, trigger, 12-speed', 'SRAM PG-1210 Eagle, 11-50t', 'SRAM SX Eagle, 12-speed\r\n\r\n', 'SRAM SX Eagle, Powerspline', NULL, 'SRAM Powerspline', 'Specialized Alloy, hookless, Tubeless ready, 25mm inner width', 'Formula DC-20, 6-Bolt, disc, 100x9mm spacing, quick-release', 'Formula DC-22, 6-Bolt freehub, disc, 135x9mm spacing, quick-release', 'Stainless, 14g', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35', 'Presta, 40mm valve'),
(6, 6, 'Alloy chassis and rear-end, asymmetrical design, 29 Trail Geometry, horst pivot BB adjustment, threaded BB, 12x148mm dropouts, sealed cartridge bearing pivots, replaceable derailleur hanger, 130mm of travel', 'Alloy, 38.6mm', NULL, 'X-Fusion 02 Pro RL, Rx Trail Tune, rebound adjust, lockout S1:190x42.5mm, S2-S6: 190x45mm', 'RockShox 35 Silver, Solo Air, 44mm offset, rebound adjust, TurnKey lockout, 15x110mm Boost™ Maxle® Lite thru-axle, 140mm of travel\r\n\r\n', 'Alloy Trail Stem, 35mm bar bore\r\n\r\n', 'Specialized, 6061 alloy, 6-degree upsweep, 8-degree backsweep, 30mm rise, 780mm width\r\n\r\n', 'Specialized Trail Grips\r\n\r\n', 'Body Geometry Bridge Saddle, steel rails\r\n\r\n', 'TranzX dropper, 34.9mm, S1: 100mm, S2: 125mm, S3: 150mm. S4-S5: 170mm, S6- 200mm\r\n\r\n', 'Tektro Gemini Comp, hydraulic disc, resin pad, 200mm\r\n\r\n', 'Tektro Gemini Comp, hydraulic disc, resin pad, 180mm\r\n\r\n', 'SRAM SX Eagle, 12-speed\r\n\r\n', NULL, 'SRAM SX Eagle, trigger, 12-speed', 'SRAM PG-1210 Eagle, 11-50t', 'SRAM SX Eagle, 12-speed', 'SRAM SX Eagle, S1:165mm, S2-S5: 170mm, S6: 175mm', '30T', 'SRAM Powerspline', 'Double-wall alloy, 27mm internal width, 28h', 'Alloy, sealed cartridge bearings, 15x110mm thru-axle, 28h', 'Alloy, sealed cartridge bearings, 12x148mm thru-axle, 28h', 'Stainless, 14g', 'Butcher, GRID casing, GRIPTON® T7 compound, 29x2.3\"', 'Purgatory, GRID casing, GRIPTON® T7 compound, 29x2.3\"', 'TUBES,STANDARD 48MM PV LOW LEAD 29x1.75/2.4, MAXXIS BRAND'),
(7, 7, 'FACT 11m carbon chassis and rear-end, asymmetrical design, 29 Trail Geometry, SWAT™ Door integration, head tube angle adjustment, horst pivot BB adjustment, threaded BB, fully enclosed internal cable routing, 12x148mm dropouts, sealed cartridge bearing pivots, replaceable derailleur hanger, 150mm of travel', 'Alloy, 38.6mm', NULL, 'FOX FLOAT X Performance Elite, Rx Trail Tune, EVOL Air sleeve, 2-position lever w/ LSC adjustment, S1:210x50mm, S2-S6:210x55mm', 'FOX FLOAT 36 Performance Elite, GRIP2 damper, 15x110mm, 44mm offset, S1: 150mm of travel, S2-S6: 160mm of travel', 'Alloy Trail Stem, 35mm bar bore', 'Specialized Trail, 7050 alloy, 8-degree backsweep, 6-degree upsweep, 30mm rise, 800mm, 35mm clamp', 'Deity, Knuckleduster, Black', 'Bridge Comp, Hollow Cr-mo rails, 155/143mm', 'OneUp, Dropper Post-V2, MMX lever, 34.9 (S1:120mm, S2/S3:150mm, S4: 180mm, S5/S6: 210mm)', 'SRAM Code RS, 4-piston caliper, hydraulic disc, 200mm', 'SRAM Code RS, 4-piston caliper, hydraulic disc, 200mm', 'Sram X01 Eagle, 12-speed', NULL, 'SRAM X01 Eagle, trigger, 12-speed', 'SRAM XG-1295 Eagle, 10-52t', 'SRAM GX Eagle, 12-speed', 'SRAM Descendant 7K, DUB, S1:165mm, S2-S5: 170mm, S6: 175mm', 'Alloy, 30T', 'SRAM DUB, BSA 73mm, Threaded', 'Roval Traverse 29 Alloy, 30mm inner width, hand-built, 2Bliss Ready', 'Roval, sealed cartridge bearings, 15x110mm spacing, 28h', 'Roval DT Swiss 370, Ratchet LN, SRAM XD driver body, 12mm thru-axle, 148mm spacing, 28h', 'DT Swiss Competition Race', 'Butcher, GRID TRAIL casing, GRIPTON® T9 compound, 2Bliss Ready, 29x2.3\"', 'Eliminator, GRID TRAIL casing, GRIPTON® T7 compound, 29x2.3\"', 'TUBES,STANDARD 48MM PV LOW LEAD 29x1.75/2.4, MAXXIS BRAND'),
(8, 8, 'Specialized D\'Aluisio Smartweld M5 Alloy, Hydroformed tubes, Progressive XC Geometry, internal cable routing, BSA BB, 12x148mm spacing, 30.9mm Dropper post compatible', 'Specialized Alloy, 34.9mm', NULL, NULL, 'RockShox Judy Silver, TurnKey damper, Solo Air, 42mm offset, 15x110mm thru-axle, 100mm of travel (XS - 80mm travel)', '3D-forged alloy, 31.8mm, 7-degree rise', 'Specialized Alloy XC minirise, double-butted alloy, 8-degree backsweep, 6-degree upsweep, 10mm rise, 31.8mm', 'Specialized Trail Grips', 'Body Geometry Power Sport, steel rails', 'Alloy, 2-bolt clamp, 30.9mm', 'SRAM Level T hydraulic disc, 2-Piston Caliper', 'SRAM Level T hydraulic disc, 2-Piston Caliper', 'SRAM SX Eagle, 12-speed', NULL, 'SRAM SX Eagle, trigger, 12-speed', 'SRAM PG-1210 Eagle, 11-50t', 'SRAM, SX Eagle, 12-speed', 'SRAM SX Eagle, Powerspline', NULL, 'SRAM Powerspline', 'Specialized Alloy, hookless, Tubeless ready, 25mm inner width', 'Alloy, sealed cartridge bearings, 15x110mm thru-axle, 28h', 'Alloy, sealed cartridge bearings, 12x148mm thru-axle, 32h', 'Stainless, 14g', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35', 'Standard 40mm PV 29x1.75-2.4'),
(9, 9, 'Specialized D\'Aluisio Smartweld M5 Alloy, Hydroformed tubes, Progressive XC Geometry, internal cable routing, BSA BB, 12x148mm spacing, 30.9mm Dropper post compatible', 'Specialized Alloy, 34.9mm', NULL, NULL, 'RockShox Judy Gold, Motion Control damper, Solo Air, 42mm offset, 15x110mm thru-axle, 100mm of travel (XS - 80mm travel)', '3D-forged alloy, 31.8mm, 7-degree rise', 'Specialized Alloy XC minirise, double-butted alloy, 8-degree backsweep, 6-degree upsweep, 10mm rise, 31.8mm', 'Specialized Trail Grips', 'Body Geometry Power Sport, steel rails', 'Specialized Alloy, Single Bolt, 30.9mm', 'SRAM Level T hydraulic disc, 2-Piston Caliper, Centerline Rotor, 160mm (XS/S/M), 180mm (L/XL)', 'SRAM Level T, Post Mount, 160mm Centerline Rotor', 'SRAM NX Eagle, 12-speed', NULL, 'SRAM NX Eagle, trigger, 12-speed', 'SRAM NX Eagle, 12-speed, 11-50t', 'SRAM, SX Eagle, 12-speed', 'SRAM X1000 Eagle, DUB, 170/175mm 32T', NULL, 'SRAM DUB, BSA 73mm, Threaded', 'Specialized Alloy, hookless, Tubeless ready, 25mm inner width', 'Alloy, sealed cartridge bearings, 15x110mm thru-axle, 28h', 'Alloy, sealed cartridge bearings, 12x148mm thru-axle, 28h', 'Stainless, 14g', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35\r\n\r\n', 'Standard 40mm PV 29x1.75-2.4'),
(10, 10, 'Specialized FACT 11m, Progressive XC Geometry, Rider-First Engineered™, threaded BB, 12x148mm rear spacing, internal cable routing', 'Specialized Alloy, 34.9mm', NULL, NULL, 'RockShox Judy Gold, Motion Control damper, Solo Air, 42mm offset, 15x110mm thru-axle, 100mm of travel (XS - 80mm travel)', '3D-forged alloy, 31.8mm, 7-degree', 'Specialized Alloy XC minirise, double-butted alloy, 8-degree backsweep, 6-degree upsweep, 10mm rise, 31.8mm', 'Specialized Trail Grips', 'Body Geometry Power Sport, steel rails', 'Specialized Alloy, Single Bolt, 30.9mm', 'SRAM Level T hydraulic disc, 2-Piston Caliper', 'SRAM Level T hydraulic disc, 2-Piston Caliper', 'SRAM NX Eagle, 12-speed', NULL, 'SRAM NX Eagle, trigger, 12-speed', 'SRAM NX Eagle, 12-speed, 11-50t', 'SRAM SX Eagle, 12-speed w/ PowerLock®', 'SRAM X1000 Eagle, DUB, 170/175mm 32T', '32T', 'SRAM DUB, BSA 73mm, Threaded', 'Specialized Alloy, Tubeless Ready, 25mm internal width, 28h', 'Alloy, sealed cartridge bearings, 15x110mm thru-axle, 28h', 'Alloy, sealed cartridge bearings, 12x148mm thru-axle, 28h', 'Stainless, 14g', 'Specialized Fast Trak, Control Casing, T5 Compound, 29x2.35', 'Specialized Renegade, Control Casing, T5 Compound, 29x2.35', 'Standard, Presta valve'),
(11, 11, 'Specialized FACT 11m, XC Geometry, Rider-First Engineered™, threaded BB, 12x148mm rear spacing, internal cable routing', 'Specialized Alloy, 34.9mm', NULL, NULL, 'RockShox SID SL BRAIN, Bottom-Adjust Brain damper, Debon Air, 15x110mm, 44mm offset, 100mm Travel (XS-80mm Travel)', 'Specialized XC, 3D-forged alloy, 4-bolt, 6-degree rise', 'Specialized Alloy Minirise, 10mm rise, 750mm, 31.8mm clamp', 'Specialized Trail Grips', 'Body Geometry Power Sport, steel rails', 'Specialized Alloy, Single Bolt, 30.9mm', 'SRAM Level TL, 2-piston caliper, hydraulic disc', 'SRAM Level TL, 2-piston caliper, hydraulic disc', 'Sram X01 Eagle, 12-speed', NULL, 'SRAM X01, trigger, 12-speed', 'SRAM XG-1275 Eagle, 12-speed, 10-50t', 'SRAM GX Eagle, 12-speed', 'SRAM X1 Eagle, DUB, 32T, XS: 165mm, SM: 170mm, M-XL: 175mm', NULL, 'SRAM DUB, BSA 73mm, threaded', 'Roval Control Carbon, 25mm internal width, Zero bead hook, Tubeless ready, 28h', 'DT Swiss 350, 15x110mm spacing, Torque caps, 6-bolt, 28h', 'DT Swiss 350, Star Ratchet, SRAM XD driver body, 12mm thru-axle, 148mm spacing, 28h', 'DT Swiss Competition Race', 'Fast Trak, Control Casing, 29x2.3', 'Fast Trak, Control casing, GRIPTON® compound, 60 TPI, 2Bliss Ready, 29x2.3\"', 'Presta, 60mm valve'),
(12, 12, 'Specialized FACT 11m, XC Geometry, Rider-First Engineered™, threaded BB, 12x148mm rear spacing, internal cable routing', 'Specialized Alloy, 34.9mm', NULL, NULL, 'RockShox Reba RL, Motion Control damper, Solo Air, 42mm offset, 15x110mm thru-axle, 100mm of travel', 'Specialized XC, 3D-forged alloy, 4-bolt, 6-degree rise', 'Specialized Alloy Minirise, 10mm rise, 750mm, 31.8mm clamp', 'Specialized Trail Grips', 'Body Geometry Power Sport, steel rails', 'Specialized Alloy, Single Bolt, 30.9mm', 'Shimano SLX M7100, 2-piston caliper, hydraulic disc', 'Shimano SLX M7100, 2-piston caliper, hydraulic disc', 'Shimano SLX M7100, SGS, 12-speed', NULL, 'Shimano SLX, M7100, 12spd', NULL, 'Shimano SLX, M7100, 12-speed', 'Shimano SLX 7100, Hollowtech 2, 32T Chainring', NULL, NULL, 'Specialized Alloy, Tubeless Ready, 25mm internal width, 28h', 'Shimano MT400-B, Centerlock 28h, 15x110 Boost', 'Shimano MT510-B, Centerlock 28h, 12x148 Boost, Microspline', 'DT Swiss Industry', NULL, NULL, 'Presta, 60mm valve'),
(13, 13, 'Specialized FACT 11m, Progressive XC Geometry, Rider-First Engineered™, threaded BB, 12x148mm rear spacing, internal cable routing', 'Specialized Alloy, 34.9mm, Titanium bolt', NULL, NULL, 'RockShox SID SL BRAIN, Top-Adjust Brain damper, Debon Air, 15x110mm, 44mm offset, 100mm Travel', 'Specialized XC, 3D-forged alloy, 4-bolt, 6-degree rise', 'S-Works Carbon XC Mini Rise, 6-degree upsweep, 8-degree backsweep, 10mm rise, 760mm, 31.8mm', 'Specialized Trail Grips', 'Body Geometry Power Expert, titanium rails', 'S-Works FACT carbon, 10mm offset, 30.9mm', 'SRAM Level TLM, 2-piston caliper, hydraulic disc', 'SRAM Level TLM, 2-piston caliper, hydraulic disc', 'SRAM X01 Eagle AXS', NULL, 'SRAM AXS Eagle Controller', 'SRAM XG-1295 Eagle, 12-speed, 10-50t', 'SRAX X01 Eagle, 12-speed', 'SRAM X1 carbon Eagle, Boost™ 148, DUB, 32T, SM: 170mm, M-XL 175mm', NULL, 'SRAM DUB, BSA 73mm, Threaded', 'Roval Control Carbon, 25mm internal width, Zero bead hook, Tubeless ready, 28h', 'DT Swiss 350, 15x110mm spacing, Torque caps, 6-bolt, 28h', 'DT Swiss 350, Star Ratchet, SRAM XD driver body, 12mm thru-axle, 148mm spacing, 28h', 'DT Swiss Competition Race', 'Fast Trak, Control casing, GRIPTON® compound, 60 TPI, 2Bliss Ready, 29x2.3\"', 'Fast Trak, Control casing, GRIPTON® compound, 60 TPI, 2Bliss Ready, 29x2.3\"', 'Presta, 60mm valve'),
(14, 14, 'Crux FACT 10r Carbon, Rider First Engineered™, Threaded BB, 12x142mm thru-axle, flat-mount disc', 'Specialized Alloy, 30mm', NULL, NULL, 'FACT Carbon, 12x100mm thru-axle, flat-mount disc', 'Specialized, 3D-forged alloy, 4-bolt, 7-degree rise', 'Specialized Adventure Gear, 118.9mm drop x 70mm reach x 12º flare', 'Supacaz Super Sticky Kush', 'Body Geometry Power Sport, steel rails', 'Roval Terra Carbon Seat Post, 20mm Offset', 'SRAM Rival, hydraulic disc', 'SRAM Rival, hydraulic disc', 'SRAM Rival 1, long cage', NULL, 'SRAM Rival 1, hydraulic', 'SunRace, 11-speed, 11-42t', 'KMC X11 Extra Lightweight, 11-speed', 'SRAM Rival 1x', '40T', 'Sram GXP', 'DT Swiss G540 Disc', 'DT Swiss G540 Disc', 'DT Swiss G540 Disc', NULL, 'Pathfinder Pro 2BR, 700x38', 'Pathfinder Pro 2BR, 700x38', 'Presta valve, 48mm'),
(15, 15, 'Specialized Diverge E5 Premium Aluminum, threaded BB, internal routing, 12x142mm thru-axle, flat-mount disc', 'Alloy, 30.8mm', NULL, NULL, 'FACT carbon, full carbon steerer, 12x100 mm thru-axle, flat-mount disc', 'Specialized, 3D-forged alloy, 4-bolt, 7-degree rise', 'Specialized Shallow Drop, 6061, 70x125mm, 31.8mm clamp', 'Specialized S-Wrap', 'Body Geometry Bridge Saddle, steel rails', 'Alloy, 2-bolt Clamp, 12mm offset, 27.2mm, anti-corrosion hardware', 'Shimano GRX RX400, Hydraulic disc', 'Shimano GRX RX400, Hydraulic disc', 'Shimano GRX RX400, 10-speed', 'Shimano GRX RX400, braze-on', 'Shimano GRX RX400 hydraulic brake levers, 2x10 speed mechanical shifting', 'Shimano CS-HG50-10, 10-Speed 11-36t', 'KMC X10, 10-speed w/ reusable Missing Link™', 'Shimano GRX RX600', '46/30T', 'Shimano 68mm threaded', 'AXIS Elite Disc', 'AXIS Elite Disc', 'AXIS Elite Disc', NULL, 'Specialized Pathfinder Sport, 700x38c', 'Specialized Pathfinder Sport, 700x38c', '700x28/38mm, 48mm Presta valve'),
(16, 16, 'S-Works Diverge FACT 11r carbon frameset with front and rear Future Shock suspension, SWAT™ Door integration, threaded BB, internal routing, 12x142mm thru-axle, flat-mount disc', 'Specialized Alloy, 33.3mm', NULL, NULL, 'Future Shock 2.0 w/ Damper, Smooth Boot, FACT carbon, 12x100 mm thru-axle, flat-mount', 'S-Works Future Stem w/ Integrated Computer mount', 'Roval Terra, carbon, 103mm drop x 70mm reach x 12º flare', 'Supacaz Super Sticky Kush', 'Body Geometry S-Works Power with Mirror, carbon fiber rails, carbon fiber base', 'S-Works Carbon Seat Post, 20mm Offset', 'SRAM Red eTap AXS, hydraulic disc, 160mm CenterLine XR rotor', 'SRAM Red eTap AXS, hydraulic disc, 160mm CenterLine XR rotor', 'SRAM XX1 Eagle AXS', NULL, 'SRAM Red eTap AXS', 'SRAM XG-1295 Eagle, 12-speed, 10-50t', 'SRAM XX1 Eagle, 12-speed', 'SRAM Red 1 AXS', '40T', 'SRAM DUB BSA 68', 'Roval Terra CLX II, 25mm internal width, 32mm depth, 21h, Tubeless ready, Roval LFD hub with ceramic SINC bearings, Centerlock disc, DT Swiss Aerolite spokes', 'Roval Terra CLX II, 25mm internal width, 32mm depth, 21h, Tubeless ready, Roval LFD hub with ceramic SINC bearings, Centerlock disc, DT Swiss Aerolite spokes', 'Roval Terra CLX II, 25mm internal width, 32mm depth, 24h, Tubeless ready, Roval LFD hub with ceramic SINC bearings, Centerlock disc, DT Swiss Aerolite spokes', NULL, 'Tracer Pro 2BR, 700x42', 'Tracer Pro 2BR, 700x42', '700x28/38mm, 48mm Presta valve'),
(17, 17, 'Diverge FACT 11r carbon frameset with front and rear Future Shock suspension, SWAT™ Door integration, threaded BB, internal routing, 12x142mm thru-axle, flat-mount disc', 'Specialized Alloy, 33.3mm', NULL, NULL, 'Future Shock 2.0 w/ Damper, Smooth Boot, FACT carbon, 12x100 mm thru-axle, flat-mount', 'Future Stem, Pro', 'Roval Terra, carbon, 103mm drop x 70mm reach x 12º flare', 'Supacaz Super Sticky Kush', 'Body Geometry Power Pro, hollow titanium rails', 'S-Works Carbon Seat Post, 20mm Offset', 'SRAM Force, hydraulic disc, 160mm Paceline rotor', 'SRAM Force, hydraulic disc, 160mm Paceline rotor', 'SRAM X01 Eagle AXS', NULL, 'SRAM Force eTap AXS', 'SRAM XG-1275 Eagle, 12-speed, 10-50t', 'SRAM X01 Eagle, 12-speed', 'SRAM Force 1x', '40T', 'SRAM DUB BSA 68', 'Roval Terra CL, 25mm internal width, 32mm depth, 24h, Tubeless ready, DT for Roval 350 hub, Centerlock disc, DT Swiss Competition Race spokes', 'Roval Terra CL, 25mm internal width, 32mm depth, 24h, Tubeless ready, DT for Roval 350 hub, Centerlock disc, DT Swiss Competition Race spokes', 'Roval Terra CL, 25mm internal width, 32mm depth, 24h, Tubeless ready, DT for Roval 350 hub, Centerlock disc, DT Swiss Competition Race spokes', NULL, 'Tracer Pro 2BR, 700x42', 'Tracer Pro 2BR, 700x42', '700x28/38mm, 48mm Presta valve'),
(18, 18, 'Tarmac SL7 FACT 10r Carbon, Rider First Engineered™, Win Tunnel Engineered, Clean Routing, Threaded BB, 12x142mm thru-axle, flat-mount disc', 'Tarmac integrated wedge', NULL, NULL, 'FACT Carbon, 12x100mm thru-axle, flat-mount disc', 'Tarmac integrated stem, 6-degree', 'Specialized Expert Shallow Drop, alloy, 125mm drop x 75mm reach', 'Supacaz Super Sticky Kush', 'Body Geometry Power Expert, titanium rails', '2021 S-Works Tarmac Carbon seat post, FACT Carbon, 20mm offset', 'Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra R8170, hydraulic disc', 'Di2 Shimano Ultegra R8150, 12-speed', 'Di2 Shimano Ultegra R8150, braze-on', 'Di2 Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra, 12-speed, 11-30t', 'Shimano Ultegra, 12-speed', 'Shimano Ultegra R8100', '52/36T', 'Shimano Threaded BSA BB', 'Roval C38, 21mm internal width carbon rim', 'Roval C38, 21mm internal width carbon rim', 'Roval C38, 21mm internal width carbon rim', NULL, 'S-Works Turbo, 120 TPI, folding bead, BlackBelt protection, 700x26mm', 'S-Works Turbo, 120 TPI, folding bead, BlackBelt protection, 700x26mm', 'Turbo Ultralight, 48mm Presta valve'),
(19, 19, 'FACT 10R, Rider First Engineered™ (RFE), FreeFoil Shape Library tubes, threaded BB, 12x142mm thru-axle, flat-mount disc', 'Hidden drop clamp', NULL, NULL, 'Future Shock 2.0 w/ Smooth Boot, 12x100mm thru-axle, flat-mount disc', 'Future Stem, Pro', 'Specialized Hover Expert, Alloy, 125mm Drop, 75mm Reach w/Di2 Hole', 'Supacaz Super Sticky Kush', 'Body Geometry Power Expert, titanium rails', 'S-Works Pave', 'Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra R8150, 12-speed', 'Shimano Ultegra R8150, braze-on', 'Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra, 12-speed, 11-34t', 'Shimano Ultegra, 12-speed', 'Shimano Ultegra R8100', '50/34T', 'Shimano Threaded BSA BB', 'Roval C38, 21mm internal width carbon rim', 'Roval C38, 21mm internal width carbon rim', 'Roval C38, 21mm internal width carbon rim', NULL, 'Specialized Turbo Pro, 700x30mm', 'Specialized Turbo Pro, 700x30mm', 'Presta, 48mm valve'),
(20, 20, 'Aethos FACT 10R Carbon, Rider First Engineered™, Threaded BB, 12x142mm thru-axle, flat-mount disc\r\n\r\n', 'Specialized Alloy, 30mm', NULL, NULL, 'FACT Carbon, 12x100mm thru-axle, flat-mount disc', 'Specialized Pro SL, alloy, 4-bolt', 'Specialized Expert Shallow Drop, alloy, 125mm drop x 75mm reach', 'Supacaz Super Sticky Kush', 'Body Geometry Power Expert, titanium rails', 'Roval Alpinist Carbon Seatpost', 'Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra R8150, 12-speed', 'Shimano Ultegra R8150, braze-on', 'Shimano Ultegra R8170, hydraulic disc', 'Shimano Ultegra, 12-speed, 11-30t', 'Shimano XT M8100, 12-speed w/ quick link', 'Shimano Ultegra R8100', '52/36T', 'Shimano Threaded BSA BB', 'Roval C38, 21mm internal width carbon rim', 'Roval C38, 21mm internal width carbon rim', 'Roval C38, 21mm internal width carbon rim', NULL, 'S-Works Turbo, 120 TPI, folding bead, BlackBelt protection, 700x26mm', 'S-Works Turbo, 120 TPI, folding bead, BlackBelt protection, 700x26mm', 'Turbo Ultralight, 48mm Presta valve');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `baslik1` text DEFAULT NULL,
  `yazi1` text DEFAULT NULL,
  `resim1` varchar(100) DEFAULT NULL,
  `baslik2` text DEFAULT NULL,
  `yazi2` text DEFAULT NULL,
  `resim2` varchar(100) DEFAULT NULL,
  `baslik3` text DEFAULT NULL,
  `yazi3` text DEFAULT NULL,
  `resim3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`baslik1`, `yazi1`, `resim1`, `baslik2`, `yazi2`, `resim2`, `baslik3`, `yazi3`, `resim3`) VALUES
('First featurette heading. It’ll blow your mind.', 'Some great placeholder content for the first featurette here. Imagine some exciting prose here.', 'https://hips.hearstapps.com/hmg-prod/images/bke060120colquiddity-001-1594841814.jpg?resize=1200:*', 'Oh yeah, it’s that good. See for yourself.', 'Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.', 'https://hips.hearstapps.com/hmg-prod/images/bke060120colquiddity-001-1594841814.jpg?resize=1200:*', 'And lastly, this one. Checkmate.', 'And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.', 'https://hips.hearstapps.com/hmg-prod/images/bke060120colquiddity-001-1594841814.jpg?resize=1200:*');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullaniciyorumlari`
--

CREATE TABLE IF NOT EXISTS `kullaniciyorumlari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bisiklet_id` int(11) NOT NULL,
  `isim` varchar(100) DEFAULT NULL,
  `eposta` varchar(100) DEFAULT NULL,
  `puan` int(11) DEFAULT NULL,
  `yorum_baslik` varchar(100) DEFAULT NULL,
  `yorum` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kullaniciyorumlari_FK` (`bisiklet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullaniciyorumlari`
--

INSERT INTO `kullaniciyorumlari` (`id`, `bisiklet_id`, `isim`, `eposta`, `puan`, `yorum_baslik`, `yorum`) VALUES
(11, 1, 'Oğuz', 'ogzvatansever@gmail.com', 5, 'Mükemmel', 'Alınabilecek en iyi bisikletlerden biri. Üzerindeki parçaların kalitesini kullanırken hissediyorsunuz. Ücreti yüksek olmasına rağmen Dünya XC kupasında kullanılan bir bisiklet olduğunu da unutmamak lazım.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE IF NOT EXISTS `sepet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT 0,
  `user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `status`, `user`) VALUES
(1, 1, NULL),
(11, 1, NULL),
(12, 1, NULL),
(13, 1, NULL),
(14, 1, NULL),
(15, 1, NULL),
(16, 0, NULL),
(17, 0, NULL),
(18, 0, ''),
(19, 1, 'test@gmail.com'),
(20, 1, 'test1@gmail.com'),
(21, 1, 'test1@gmail.com'),
(22, 1, 'test1@gmail.com'),
(23, 1, 'test1@gmail.com'),
(24, 1, 'test1@gmail.com'),
(25, 1, 'test@gmail.com'),
(26, 1, 'test1@gmail.com'),
(27, 1, 'test1@gmail.com'),
(28, 0, 'test2@gmail.com'),
(29, 0, 'test1@gmail.com'),
(30, 1, 'test@gmail.com'),
(31, 0, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet_detay`
--

CREATE TABLE IF NOT EXISTS `sepet_detay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sepet_id` int(11) NOT NULL,
  `bisiklet_id` varchar(100) NOT NULL,
  `bisiklet_beden` varchar(100) NOT NULL,
  `miktar` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sepet_detay`
--

INSERT INTO `sepet_detay` (`id`, `sepet_id`, `bisiklet_id`, `bisiklet_beden`, `miktar`) VALUES
(36, 1, '1', 'L', 1),
(37, 1, '14', 'L', 1),
(42, 11, '15', 'M', 1),
(43, 12, '3', 'M', 1),
(44, 13, '11', 'S', 3),
(45, 13, '14', 'XL', 4),
(46, 14, '9', 'M', 1),
(47, 15, '8', 'S', 1),
(49, 19, '14', 'M', 1),
(50, 20, '8', 'M', 1),
(51, 21, '14', 'M', 1),
(52, 26, '8', 'M', 1),
(53, 28, '4', 'M', 1),
(54, 27, '16', 'M', 1),
(55, 25, '16', 'L', 1),
(57, 30, '2', 'M', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE IF NOT EXISTS `siparis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sepet_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `buyer_fname` varchar(100) DEFAULT NULL,
  `buyer_sname` varchar(100) DEFAULT NULL,
  `buyer_adress` varchar(255) DEFAULT NULL,
  `buyer_adress2` varchar(255) DEFAULT NULL,
  `buyer_country` varchar(100) DEFAULT NULL,
  `buyer_city` varchar(100) DEFAULT NULL,
  `buyer_zip` varchar(100) DEFAULT NULL,
  `buyer_cc_owner` varchar(100) DEFAULT NULL,
  `buyer_cc_number` varchar(100) DEFAULT NULL,
  `buyer_cc_expiry` int(11) DEFAULT NULL,
  `buyer_cc_cvv` int(11) DEFAULT NULL,
  `buyer` varchar(100) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `sepet_id`, `status`, `buyer_fname`, `buyer_sname`, `buyer_adress`, `buyer_adress2`, `buyer_country`, `buyer_city`, `buyer_zip`, `buyer_cc_owner`, `buyer_cc_number`, `buyer_cc_expiry`, `buyer_cc_cvv`, `buyer`, `date`) VALUES
(18, 1, 1, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '1', '1', 1, 1, 'test@gmail.com', '2023-05-24 14:21:20'),
(19, 11, 0, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '2', '2', 2, 2, '', '2023-05-24 14:21:20'),
(20, 12, 1, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '3', '3', 3, 3, 'test@gmail.com', '2023-05-24 14:21:20'),
(21, 13, 1, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '1', '1', 1, 1, '', '2023-05-26 14:21:20'),
(22, 14, 1, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '1', '1', 1, 1, '', '2023-05-27 14:21:20'),
(23, 15, 0, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '1', '1', 1, 1, '', '2023-05-28 14:21:20'),
(24, 20, 0, 'Ahmet', 'Süleyha', '1234 Hilal Sk', '', 'Türkiye', 'Kocaeli', '41780', 'Ahmet Süleyha', '1', 4, 4, '', '2023-05-25 14:21:20'),
(25, 21, 0, 'Jale', 'Sürüç', '1234 Hilal sk', '1', 'Türkiye', 'Kocaeli', '41780', '1', '1', 1, 1, '', '2023-05-25 14:21:20'),
(28, 19, 0, '2', '2', '2', '2', 'Türkiye', 'Kocaeli', '2', '2', '2', 2, 2, 'test@gmail.com', '2023-05-29 14:21:20'),
(30, 26, 1, '3', '3', '3', '3', 'Türkiye', 'Kocaeli', '3', '3', '3', 3, 3, 'test1@gmail.com', '2023-05-29 14:21:20'),
(31, 27, 0, '4', '4', '4', '4', 'Türkiye', 'Kocaeli', '4', '4', '4', 4, 4, 'test1@gmail.com', '2023-05-29 14:21:20'),
(32, 25, 0, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '6', '6', 6, 6, 'test@gmail.com', '2023-05-30 08:53:43'),
(33, 30, 0, 'Oğuz', 'Vatansever', 'Kuzey Mahallesi Zümrüt Sokak', '8/3', 'Türkiye', 'Kocaeli', '41780', '4', '4', 4, 4, 'test@gmail.com', '2023-05-31 12:10:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `adress1` varchar(100) DEFAULT NULL,
  `adress2` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`mail`),
  UNIQUE KEY `uyeler_un` (`id`,`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `mail`, `password`, `adress1`, `adress2`, `country`, `city`, `zip`, `level`) VALUES
(4, 'test1@gmail.com', '$2y$10$F2PRIM3xeZ1jx2/Gh7a64.MtrhEKK8jWSFiFKeCWQ7GG57XDuEBWq', 'Jale sokak', 'Cüneyt Mahallesi', 'Türkiye', 'Kocaeli', '41780', 0),
(5, 'test2@gmail.com', '$2y$10$BbB8M6Lxgsj9RBzYDcg5NOk3h90C1obaN5SO0yGf3MgIKgI2uiuLC', '2', '2', 'Türkiye', 'Kocaeli', '41780', 0),
(1, 'test@gmail.com', '$2y$10$MaYoPT0gouizGZFTyiq5VuIT/O7HYoOZqiZlX34Bthx4qY4DUr9Sm', '', '', '', '', '', 1);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `bisiklet_detay`
--
ALTER TABLE `bisiklet_detay`
  ADD CONSTRAINT `bisiklet_detay_ibfk_1` FOREIGN KEY (`bisiklet_id`) REFERENCES `bisikletler` (`id`);

--
-- Tablo kısıtlamaları `kullaniciyorumlari`
--
ALTER TABLE `kullaniciyorumlari`
  ADD CONSTRAINT `kullaniciyorumlari_FK` FOREIGN KEY (`bisiklet_id`) REFERENCES `bisikletler` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
