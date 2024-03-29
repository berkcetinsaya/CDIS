-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2019 at 08:03 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdis`
--
CREATE DATABASE IF NOT EXISTS `cdis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cdis`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `hospital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `r_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `prescription` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disorder`
--

CREATE TABLE `disorder` (
  `id` int(2) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(5) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `disorder`
--

INSERT INTO `disorder` (`id`, `name`, `count`) VALUES
(1, 'Liver Disorder', 0),
(2, 'Anthrax', 0),
(3, 'Flu', 0),
(4, 'Diphtheria', 0),
(5, 'Cholera', 0),
(6, 'Tetanus', 0),
(7, 'Mumps', 0),
(8, 'Rabies', 0),
(9, 'Appendicitis', 0),
(10, 'Acute Lymphoblastic Leukemia(ALL)', 0),
(11, 'Acute Myeloid Leukemia (AML)', 0),
(12, 'Adrenocortical Carcinoma', 0),
(13, 'Adrenal Cortex Cancer', 0),
(14, 'Kaposi Sarcoma', 0),
(15, 'Lymphoma', 0),
(16, 'Primary Cerebral (CNS) Lymphoma', 0),
(17, 'Anal Cancer', 0),
(18, 'Appendix Cancer', 0),
(19, 'Astrocytomas', 0),
(20, 'Childhood Atypical Teratoid/Rhabdoid Tumor- Central Nervous System:', 0),
(21, 'Basal Cell Carcinoma (Nonmelanoma)', 0),
(22, 'Bile Duct Cancer', 0),
(23, 'Bladder Cancer', 0),
(24, 'Bone Cancer', 0),
(25, 'Brain Tumors', 0),
(26, 'Breast Cancer', 0),
(27, 'Bronchial Tumors', 0),
(28, 'Burkitt Lymphoma (Non-Hodgkin)', 0),
(29, 'Carcinoid Tumor (Gastrointestinal)', 0),
(30, 'Cardiac (Heart) Tumors', 0),
(31, 'Cervical Cancer', 0),
(32, 'Chordoma', 0),
(33, 'Colorectal Cancer', 0),
(34, 'Cutaneous T-Cell Lymphoma', 0),
(35, 'Ductal Carcinoma In Situ (DCIS)', 0),
(36, 'Endometrial Cancer', 0),
(37, 'Ependymoma(Childhood)', 0),
(38, 'Esophageal Cancer', 0),
(39, 'Esthesioneuroblastoma', 0),
(40, 'Ewing Sarcoma', 0),
(41, 'Extragonadal Germ Cell Tumor', 0),
(42, 'Eye Cancer', 0),
(43, 'Intraocular Melanoma', 0),
(44, 'Retinoblastoma', 0),
(45, 'Fallopian Tube Cancer', 0),
(46, 'Fibrous Histiocytoma of Bone- Malignant- and Osteosarcoma', 0),
(47, 'Gallbladder Cancer', 0),
(48, 'Gastric (Stomach) Cancer', 0),
(49, 'Gastrointestinal Stromal Tumors (GIST)', 0),
(50, 'Germ Cell Tumors', 0),
(51, 'Ovarian Cancer', 0),
(52, 'Testicular Cancer', 0),
(53, 'Gestational Trophoblastic Disease', 0),
(54, 'Gliomas', 0),
(55, 'Hairy Cell Leukemia', 0),
(56, 'Head and Neck Cancer', 0),
(57, 'Hepatocellular (Liver) Cancer', 0),
(58, 'Histiocytosis, Langerhans Cell', 0),
(59, 'Hodgkin Lymphoma', 0),
(60, 'Hypopharyngeal Cancer', 0),
(61, 'Islet Cell Tumors- Pancreatic Neuroendocrine Tumors', 0),
(62, 'Kidney Cancer', 0),
(63, 'Leukemia', 0),
(64, 'Lip and Oral Cavity Cancer', 0),
(65, 'Liver Cancer (Primary)', 0),
(66, 'Lung Cancer', 0),
(67, 'Lymphoma', 0),
(68, 'Waldenstrom Macroglobulinemia', 0),
(69, 'Male Breast Cancer', 0),
(70, 'Merkel Cell Carcinoma', 0),
(71, 'Mesothelioma', 0),
(72, 'Metastatic Squamous Neck Cancer with Occult Primary', 0),
(73, 'Mouth Cancer', 0),
(74, 'Multiple Myeloma/Plasma Cell Neoplasms', 0),
(75, 'Mycosis Fungoides', 0),
(76, 'Myelogenous Leukemia- Chronic (CML)', 0),
(77, 'Nasal Cavity and Paranasal Sinus Cancer', 0),
(78, 'Nasopharyngeal Cancer', 0),
(79, 'Neuroblastoma', 0),
(80, 'Non-Small Cell Lung Cancer', 0),
(81, 'Pancreatic Cancer and Pancreatic Neuroendocrine Tumors (Islet Cell Tumors)', 0),
(82, 'Paraganglioma', 0),
(83, 'Parathyroid Cancer', 0),
(84, 'Penile Cancer', 0),
(85, 'Pharyngeal Cancer', 0),
(86, 'Pheochromocytoma', 0),
(87, 'Pituitary Tumor', 0),
(88, 'Primary Central Nervous System (CNS) Lymphoma', 0),
(89, 'Prostate Cancer', 0),
(90, 'Rectal Cancer', 0),
(91, 'Retinoblastoma', 0),
(92, 'Salivary Gland Cancer', 0),
(93, 'Sarcoma', 0),
(94, 'Sezary Syndrome', 0),
(95, 'Throat Cancer', 0),
(96, 'Thymoma and Thymic Carcinoma', 0),
(97, 'Thyroid Cancer', 0),
(98, 'Transitional Cell Cancer of the Renal Pelvis and Ureter', 0),
(99, 'Uterine Cancer- Endometrial and Uterine Sarcoma', 0),
(100, 'Vaginal Cancer', 0),
(101, 'Vulvar Cancer', 0),
(102, 'Wilms Tumor', 0),
(103, 'Melanoma', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `s_id` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `name`, `count`) VALUES
(1, 'Headache', 12),
(2, 'Nausea', 12),
(3, 'Vomiting', 12),
(4, 'Anorexia', 12),
(5, 'Diarrhoea', 7),
(6, 'Constipation', 7),
(7, 'Gallstones', 20),
(8, 'Swelling', 2),
(9, 'Blistering', 5),
(10, 'Eschar', 6),
(11, 'Muscle-ache', 4),
(12, 'Pain', 9),
(13, 'Fever', 4),
(14, 'Chills', 7),
(15, 'Cough', 5),
(16, 'Sore-throat', 5),
(17, 'Runny-nose', 4),
(18, 'Fatigue', 3),
(19, 'Difficulty-swallowing', 4),
(20, 'Tonsillar-membrane', 4),
(21, 'Thirst', 4),
(22, 'Less-urination', 4),
(23, 'Stiff-jaw', 4),
(24, 'Convulsions', 2),
(25, 'Sweating', 5),
(26, 'Over-reflex', 5),
(27, 'Malaise', 5),
(28, 'Bite', 4),
(29, 'Mental-depression', 5),
(30, 'Restlessness', 4),
(31, 'Weight-loss', NULL),
(32, 'Night-sweats', NULL),
(33, 'Loss-of-appetite', NULL),
(34, 'Bleeding-from-the-gums', NULL),
(35, 'Bone-pain', NULL),
(36, 'Joint-pain', NULL),
(37, 'Frequent-infections', NULL),
(38, 'Frequent-nosebleeds', NULL),
(39, 'Swollen-lymph-nodes', NULL),
(40, 'Jaundice', NULL),
(41, 'Shortness-of-breath', NULL),
(42, 'Easy-bruising', NULL),
(43, 'Bleeding-under-the-skin', NULL),
(44, 'Lump-in-abdomen', NULL),
(45, 'Facial-pain', NULL),
(46, 'Feeling-of-fullness-in-the-abdomen', NULL),
(47, 'Weight-Gain', NULL),
(48, 'High-blood-pressure', NULL),
(49, 'Lesions-in-the-mouth/throat', 1),
(50, 'Colored-bumps-on-the-skin', 10),
(51, 'Chest-pain', 1),
(52, 'Stomach/intestinal-pain', NULL),
(53, 'Skin-rash', NULL),
(54, 'Abdominal-pain', NULL),
(55, 'Changes-in-speech', NULL),
(56, 'Changes-in-vision', NULL),
(57, 'Seizures', NULL),
(58, 'Moodiness/Irratibility', NULL),
(59, 'Numbness', NULL),
(60, 'Paralysis', NULL),
(61, 'Rectal-bleeding', NULL),
(62, 'Rectal-itching', NULL),
(63, 'Lump-at-the-anal-opening', 1),
(64, 'Narrowing-of-stool', 1),
(65, 'Abnormal-discharge-from-anus', 1),
(66, 'Bloating', NULL),
(67, 'Reflux', NULL),
(68, 'Trouble-with-motion,-balance,-coordination-and-mobility', 1),
(69, 'Increased-head-size(hydrocephalus)', 1),
(70, 'Pale-or-yellow-scars', NULL),
(71, 'Red-and-itchy-patches', NULL),
(72, 'Memory-loss', NULL),
(73, 'Itching', NULL),
(74, 'Light-colored-stools', NULL),
(75, 'Dark-urine', NULL),
(76, 'Non-healing-sores', NULL),
(77, 'Blood-in-urine(hematuria)', 1),
(78, 'Frequent-urination', 1),
(79, 'Painful-urination', NULL),
(80, 'Back-pain', NULL),
(81, 'Pelvic-pain', NULL),
(82, 'Joint-swelling', NULL),
(83, 'Joint-stiffness', NULL),
(84, 'Limping', NULL),
(85, 'Anemia', NULL),
(86, 'Myclonic', NULL),
(87, 'Tonic-clonic', 1),
(88, 'Loss-of-sensation', 1),
(89, 'Confusion', NULL),
(90, 'Changes-in-hearing', NULL),
(91, 'Breast-lumps', NULL),
(92, 'Skin-irritation', NULL),
(93, 'Dimpling', NULL),
(94, 'Breast-pain', NULL),
(95, 'Nipple-pain', NULL),
(96, 'Nipple-retraction(turning-inward)', 1),
(97, 'Redness-of-the-nipple', 1),
(98, 'Nipple-discharge(other-than-breast-milk)', 1),
(99, 'Cough-with-blood', NULL),
(100, 'Wheezing', NULL),
(101, 'Infections', NULL),
(102, 'Swollen-abdomen', NULL),
(103, 'Redness-over-the-face', NULL),
(104, 'Asthma', NULL),
(105, 'Heart-disease', NULL),
(106, 'Melena', NULL),
(107, 'Heart-failure', NULL),
(108, 'Abnormal-heart-rhythms', 1),
(109, 'Hypotension', NULL),
(110, 'Irregular-bleeding', NULL),
(111, 'Vaginal-discharge', NULL),
(112, 'Changes-in-bowel-habit', NULL),
(113, 'Incontinence', NULL),
(114, 'Impotence', NULL),
(115, 'Dizziness(vertigo)', NULL),
(116, 'Plaques', NULL),
(117, 'Skin-ulcers', NULL),
(118, 'Vaginal-bleeding', NULL),
(119, 'Swelling-of-the-nerve-at-the-back-of-the-eye', 1),
(120, 'Jerky-eye-movements', 1),
(121, 'Neck-pain', NULL),
(122, 'Hiccups', NULL),
(123, 'Pneumonia', NULL),
(124, 'Bleeding-into-the-esophagus', 1),
(125, 'Nasal-obstruction', NULL),
(126, 'Epistaxis', NULL),
(127, 'Nasal-discharge', NULL),
(128, 'Unilateral-polyp', NULL),
(129, 'Anosmia', NULL),
(130, 'Loose-teeth', NULL),
(131, 'Oral-ulcers', NULL),
(132, 'Swelling-of-face', NULL),
(133, 'Throat-pain', NULL),
(134, 'Cervical-mass', NULL),
(135, 'Broken-bone-for-no-cause', 1),
(136, 'Uterine-bleeding', NULL),
(137, 'Enlarged-ovaries', NULL),
(138, 'Pain-in-arm', NULL),
(139, 'Swollen-arm', NULL),
(140, 'Flashes-of-light', NULL),
(141, 'Bulging-of-the-eye', NULL),
(142, 'Lump-on-eyelid', 1),
(143, 'Lump-in-eye', NULL),
(144, 'Pain-in-or-around-eye', 1),
(145, 'Size-change-of-pupil', NULL),
(146, 'Eye-pain', NULL),
(147, 'Redness-of-the-eye', NULL),
(148, 'Bleeding-of-the-eye', NULL),
(149, 'Different-color-of-iris-in-each-eye', NULL),
(150, 'Swollen-bone', NULL),
(151, 'Heartburn', NULL),
(152, 'Urinary-retention', NULL),
(153, 'Difficulty-breathing', 1),
(154, 'Pressure-in-the-pelvis', 1),
(155, 'Testicular-lump', 1),
(156, 'Swollen-scrotum', NULL),
(157, 'Shrinking-of-a-testicle', NULL),
(158, 'Scrotal-heaviness', NULL),
(159, 'Testicular-pain', NULL),
(160, 'Enlargement-or-tenderness-of-the-breasts', 1),
(161, 'Ovarian-cysts', NULL),
(162, 'Pre-eclampsia', NULL),
(163, 'Hyperthyroidism', NULL),
(164, 'Small-red-spots(petechiae)', 1),
(165, 'Enlarged-liver', NULL),
(166, 'Enlarged-spleen', NULL),
(167, 'Red-or-white-patch-in-the-mouth', NULL),
(168, 'Foul-mouth-odor-not-explained-by-hygiene', NULL),
(169, 'Persistent-nasal-congestion', NULL),
(170, 'Ear-infection', NULL),
(171, 'Ear-pain', NULL),
(172, 'Jaw-pain', NULL),
(173, 'Blood-in-saliva', NULL),
(174, 'Loosening-of-teeth', NULL),
(175, 'Dentures-that-no-longer-fit', NULL),
(176, 'Lump-in-the-neck', NULL),
(177, 'Lump-in-the-back', NULL),
(178, 'Swollen-ankles/legs', NULL),
(179, 'Enlarged-tonsils', 1),
(180, 'neuropathy', NULL),
(181, 'Asymmetrical-shaped-mole', NULL),
(182, 'Mole-with-irregular-border', NULL),
(183, 'Mole-that-changes-color', 1),
(184, 'Mole-larger-than-0.25-inches(6-millimeters)', NULL),
(185, 'Mole-that-evolved-over-time', NULL),
(186, 'Pleural-effusions', NULL),
(187, 'Lump-in-the-cheek', NULL),
(188, 'Weakness-of-the-arms/legs.', NULL),
(189, 'Blockage-of-one-side-of-the-nose', NULL),
(190, 'Post-nasal-drip', NULL),
(191, 'Pus-draining-from-the-nose', NULL),
(192, 'Decreased-sense-of-smell', NULL),
(193, 'Growth-or-mass-of-the-face,-nose,-or-palate', NULL),
(194, 'Constant-watery-eyes', NULL),
(195, 'Reddening-of-the-skin', NULL),
(196, 'Dark-colored-stool', NULL),
(197, 'Blood-clot', NULL),
(198, 'Insomnia', NULL),
(199, 'Tremor', NULL),
(200, 'Crusty-bumps', NULL),
(201, 'Smelly-discharge(fluid)-under-the-foreskin', NULL),
(202, 'Dull-pain-behind-the-breastbone', NULL),
(203, 'Changes-in-menstrual-cycles-in-women', NULL),
(204, 'Infertility', NULL),
(205, 'Inappropriate-production-of-breast-milk', NULL),
(206, 'Enlargement-of-the-extremities-or-limbs-and-thickening-of-the-skull-and-jaw-caused-by-growth-hormone(Acromegaly)', NULL),
(207, 'Diplopia', NULL),
(208, 'Dysphagia', NULL),
(209, 'Facial-hypoesthesia', NULL),
(210, 'Blood-in-semen', NULL),
(211, 'Erectile-dysfunction', NULL),
(212, 'Not-being-able-to-completely-empty-the-bowel', NULL),
(213, 'Rectum-pain', NULL),
(214, 'Gas-pains', NULL),
(215, 'Muscle-weakness-on-face', NULL),
(216, 'Pain-in-the-area-of-salivary-gland', NULL),
(217, 'Lump/Mass', NULL),
(218, 'Diffuse-scaling-skin', NULL),
(219, 'Hair-thinning', NULL),
(220, 'Thickening-of-palms-and-soles', NULL),
(221, 'Eyelid-margin-thickening', NULL),
(222, 'Pain-during-sexual-intercourse', NULL),
(223, 'Lump-on-the-vulvar-area', NULL),
(224, 'Uneven-growth-of-one-side-of-their-body', NULL),
(225, 'Differently-textured-or-colored-skin-than-the-rest-of-the-vulvar-area', NULL),
(226, 'Persistent-itching,-pain,-soreness,-or-burning-in-the-vulvar-area', NULL),
(227, 'Vulvar-ulcer', NULL),
(228, 'Genital-wart', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `symp_dis`
--

CREATE TABLE `symp_dis` (
  `d_id` int(5) NOT NULL,
  `s_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `symp_dis`
--

INSERT INTO `symp_dis` (`d_id`, `s_id`) VALUES
(1, 7),
(2, 2),
(2, 3),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(3, 13),
(3, 1),
(3, 11),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(4, 16),
(4, 19),
(4, 20),
(5, 5),
(5, 3),
(5, 21),
(5, 22),
(6, 1),
(6, 13),
(6, 23),
(6, 24),
(6, 25),
(6, 26),
(7, 4),
(7, 1),
(7, 14),
(7, 19),
(7, 27),
(8, 13),
(8, 27),
(8, 28),
(8, 29),
(8, 30),
(9, 6),
(9, 12),
(9, 2),
(9, 3),
(10, 31),
(10, 13),
(10, 32),
(10, 18),
(10, 33),
(10, 34),
(10, 35),
(10, 36),
(10, 37),
(10, 38),
(10, 39),
(10, 40),
(10, 41),
(56, 168),
(56, 16),
(56, 55),
(56, 125),
(56, 169),
(56, 127),
(56, 153),
(56, 56),
(56, 59),
(56, 19),
(56, 171),
(56, 172),
(56, 173),
(56, 174),
(56, 175),
(56, 31),
(56, 18),
(57, 31),
(57, 33),
(57, 2),
(57, 3),
(57, 165),
(57, 166),
(57, 54),
(57, 102),
(57, 73),
(57, 40),
(58, 35),
(58, 135),
(58, 130),
(58, 170),
(58, 53),
(58, 39),
(58, 40),
(58, 5),
(58, 3),
(58, 141),
(58, 15),
(58, 153),
(58, 31),
(58, 33),
(58, 78),
(58, 13),
(58, 18),
(59, 31),
(59, 32),
(59, 73),
(59, 18),
(59, 33),
(60, 16),
(60, 15),
(60, 19),
(60, 171),
(60, 153),
(60, 31),
(60, 176),
(61, 5),
(61, 6),
(61, 102),
(61, 54),
(61, 40),
(62, 77),
(62, 80),
(62, 177),
(62, 178),
(62, 48),
(62, 85),
(62, 18),
(62, 33),
(62, 31),
(62, 13),
(63, 13),
(63, 18),
(63, 101),
(63, 31),
(63, 39),
(63, 165),
(63, 166),
(63, 42),
(63, 127),
(63, 164),
(63, 32),
(63, 35),
(64, 76),
(64, 176),
(64, 167),
(64, 59),
(64, 55),
(64, 130),
(64, 175),
(64, 19),
(64, 16),
(64, 31),
(65, 31),
(65, 33),
(65, 2),
(65, 3),
(65, 18),
(65, 13),
(65, 12),
(65, 165),
(65, 166),
(65, 102),
(65, 40),
(66, 15),
(66, 99),
(66, 153),
(66, 33),
(66, 18),
(66, 37),
(67, 39),
(67, 13),
(67, 32),
(67, 31),
(67, 33),
(67, 18),
(67, 15),
(67, 53),
(67, 179),
(67, 1),
(68, 18),
(68, 31),
(68, 166),
(68, 39),
(68, 180),
(68, 102),
(68, 5),
(68, 41),
(68, 101),
(68, 50),
(68, 56),
(69, 91),
(69, 92),
(69, 96),
(69, 98),
(103, 181),
(103, 182),
(103, 183),
(103, 184),
(103, 185),
(70, 50),
(71, 15),
(71, 100),
(71, 41),
(71, 51),
(71, 13),
(71, 186),
(71, 85),
(71, 18),
(71, 31),
(73, 168),
(73, 31),
(73, 176),
(73, 55),
(73, 172),
(73, 174),
(73, 175),
(73, 59),
(73, 23),
(73, 19),
(73, 16),
(73, 167),
(73, 187),
(73, 12),
(73, 76),
(72, 121),
(72, 176),
(74, 35),
(74, 135),
(74, 13),
(74, 42),
(74, 153),
(74, 188),
(74, 18),
(75, 53),
(76, 18),
(76, 32),
(76, 31),
(76, 13),
(76, 35),
(76, 166),
(76, 102),
(76, 33),
(77, 169),
(77, 146),
(77, 189),
(77, 190),
(77, 127),
(77, 191),
(77, 192),
(77, 59),
(77, 193),
(77, 194),
(77, 141),
(77, 56),
(77, 171),
(77, 23),
(77, 39),
(78, 39),
(78, 173),
(78, 127),
(78, 169),
(78, 90),
(78, 101),
(78, 1),
(79, 5),
(79, 13),
(79, 48),
(79, 108),
(79, 195),
(79, 32),
(80, 99),
(80, 15),
(80, 51),
(80, 55),
(80, 31),
(80, 33),
(80, 41),
(80, 18),
(80, 100),
(81, 40),
(81, 75),
(81, 73),
(81, 196),
(81, 54),
(81, 80),
(81, 197),
(81, 66),
(81, 18),
(81, 33),
(81, 2),
(81, 3),
(81, 13),
(81, 31),
(82, 108),
(82, 199),
(82, 1),
(82, 32),
(82, 40),
(82, 51),
(82, 54),
(82, 58),
(82, 198),
(83, 35),
(83, 80),
(83, 78),
(83, 54),
(83, 131),
(83, 18),
(83, 55),
(83, 3),
(83, 29),
(83, 89),
(83, 176),
(83, 198),
(83, 27),
(84, 155),
(84, 131),
(84, 53),
(84, 200),
(84, 201),
(85, 16),
(85, 176),
(85, 171),
(85, 172),
(85, 55),
(85, 153),
(85, 90),
(85, 38),
(85, 1),
(85, 202),
(85, 15),
(85, 19),
(85, 31),
(86, 48),
(86, 108),
(86, 32),
(86, 1),
(86, 199),
(86, 40),
(86, 41),
(87, 1),
(87, 56),
(87, 203),
(87, 114),
(87, 204),
(87, 205),
(87, 42),
(87, 206),
(87, 18),
(87, 58),
(88, 57),
(88, 1),
(88, 58),
(88, 13),
(88, 32),
(88, 31),
(88, 207),
(88, 208),
(88, 115),
(88, 56),
(88, 209),
(89, 22),
(89, 79),
(89, 210),
(89, 81),
(89, 35),
(89, 211),
(90, 5),
(90, 6),
(90, 212),
(90, 64),
(90, 65),
(90, 213),
(90, 54),
(90, 214),
(90, 66),
(90, 33),
(90, 31),
(90, 18),
(91, 56),
(91, 146),
(91, 147),
(91, 148),
(91, 141),
(91, 145),
(91, 149),
(92, 176),
(92, 59),
(92, 215),
(92, 216),
(92, 19),
(92, 23),
(93, 12),
(93, 18),
(93, 13),
(93, 31),
(93, 85),
(93, 68),
(93, 217),
(93, 218),
(94, 219),
(94, 220),
(94, 73),
(94, 221),
(94, 222),
(94, 39),
(95, 19),
(95, 55),
(95, 16),
(31, 221),
(95, 176),
(95, 127),
(95, 15),
(96, 15),
(96, 51),
(96, 153),
(97, 39),
(97, 176),
(97, 55),
(97, 19),
(97, 153),
(97, 121),
(97, 133),
(98, 77),
(98, 80),
(99, 118),
(99, 111),
(99, 79),
(99, 223),
(99, 81),
(100, 111),
(100, 79),
(100, 223),
(100, 81),
(100, 80),
(100, 178),
(101, 224),
(101, 226),
(101, 227),
(101, 79),
(101, 118),
(101, 228),
(101, 185),
(101, 229),
(102, 6),
(102, 54),
(102, 102),
(102, 2),
(102, 3),
(102, 18),
(102, 33),
(102, 13),
(102, 77),
(102, 48),
(102, 51),
(102, 41),
(102, 1),
(11, 13),
(11, 41),
(11, 42),
(11, 43),
(11, 18),
(11, 31),
(11, 32),
(11, 33),
(12, 44),
(12, 45),
(12, 46),
(13, 13),
(13, 47),
(13, 44),
(13, 46),
(13, 31),
(13, 42),
(13, 48),
(14, 49),
(14, 50),
(14, 39),
(14, 15),
(14, 51),
(14, 52),
(14, 5),
(15, 13),
(15, 32),
(15, 31),
(15, 18),
(15, 39),
(15, 53),
(15, 51),
(15, 54),
(16, 55),
(16, 56),
(16, 13),
(16, 1),
(16, 31),
(16, 57),
(16, 58),
(16, 59),
(16, 60),
(17, 61),
(17, 62),
(17, 63),
(17, 46),
(17, 64),
(17, 65),
(17, 39),
(18, 54),
(18, 66),
(18, 54),
(18, 67),
(18, 33),
(18, 41),
(18, 6),
(18, 5),
(19, 1),
(19, 57),
(19, 72),
(19, 58),
(20, 1),
(20, 2),
(20, 3),
(20, 18),
(20, 68),
(20, 69),
(21, 70),
(21, 71),
(21, 50),
(21, 76),
(22, 40),
(22, 73),
(22, 74),
(22, 75),
(22, 54),
(22, 33),
(22, 31),
(22, 13),
(22, 2),
(22, 3),
(23, 77),
(23, 78),
(23, 79),
(23, 80),
(23, 81),
(24, 12),
(24, 82),
(24, 83),
(24, 84),
(24, 13),
(24, 31),
(24, 85),
(25, 1),
(25, 57),
(25, 86),
(25, 87),
(25, 58),
(25, 2),
(25, 3),
(25, 18),
(25, 56),
(25, 88),
(25, 55),
(25, 89),
(25, 90),
(26, 91),
(26, 92),
(26, 93),
(26, 94),
(26, 95),
(26, 96),
(26, 97),
(26, 98),
(27, 15),
(27, 99),
(27, 100),
(27, 41),
(27, 51),
(27, 40),
(27, 101),
(28, 39),
(28, 102),
(28, 33),
(28, 51),
(28, 41),
(28, 15),
(28, 13),
(28, 31),
(28, 32),
(28, 18),
(28, 85),
(29, 56),
(29, 56),
(29, 56),
(29, 56),
(29, 56),
(29, 56),
(29, 56),
(29, 56),
(30, 107),
(30, 108),
(30, 109),
(30, 13),
(30, 18),
(30, 36),
(30, 71),
(31, 10),
(31, 111),
(31, 81),
(31, 80),
(31, 22),
(31, 39),
(31, 18),
(31, 31),
(32, 12),
(32, 112),
(32, 113),
(32, 59),
(32, 68),
(32, 114),
(32, 1),
(32, 56),
(32, 45),
(32, 90),
(32, 19),
(32, 115),
(33, 31),
(33, 33),
(33, 2),
(33, 3),
(33, 85),
(33, 40),
(33, 18),
(34, 71),
(34, 116),
(34, 117),
(35, 91),
(35, 98),
(36, 118),
(36, 111),
(37, 1),
(37, 57),
(37, 2),
(37, 3),
(37, 56),
(37, 68),
(37, 119),
(37, 120),
(37, 121),
(38, 51),
(38, 31),
(38, 55),
(38, 15),
(38, 3),
(38, 122),
(38, 123),
(38, 35),
(38, 124),
(39, 125),
(39, 126),
(39, 127),
(39, 128),
(39, 129),
(39, 130),
(39, 131),
(39, 132),
(39, 134),
(39, 1),
(39, 2),
(39, 45),
(39, 23),
(40, 138),
(40, 139),
(40, 51),
(40, 80),
(40, 39),
(40, 68),
(40, 13),
(40, 135),
(41, 54),
(41, 136),
(41, 137),
(41, 81),
(41, 31),
(42, 56),
(42, 140),
(42, 141),
(42, 142),
(42, 143),
(42, 144),
(43, 56),
(43, 140),
(43, 145),
(44, 56),
(44, 146),
(44, 147),
(44, 148),
(44, 141),
(44, 149),
(45, 118),
(45, 111),
(45, 54),
(45, 102),
(46, 150),
(46, 36),
(47, 40),
(47, 54),
(47, 2),
(47, 3),
(47, 66),
(47, 44),
(47, 13),
(48, 18),
(48, 66),
(48, 33),
(48, 151),
(48, 6),
(48, 2),
(48, 3),
(48, 31),
(48, 52),
(49, 54),
(49, 102),
(49, 2),
(49, 3),
(49, 33),
(49, 31),
(49, 19),
(50, 6),
(50, 152),
(50, 15),
(50, 153),
(51, 66),
(51, 6),
(51, 2),
(51, 33),
(51, 154),
(51, 78),
(51, 112),
(51, 102),
(51, 18),
(52, 155),
(52, 156),
(52, 157),
(52, 158),
(52, 54),
(52, 159),
(52, 160),
(52, 80),
(52, 39),
(53, 118),
(53, 85),
(53, 102),
(53, 161),
(53, 3),
(53, 162),
(53, 163),
(54, 1),
(54, 2),
(54, 3),
(54, 89),
(54, 72),
(54, 58),
(54, 68),
(54, 113),
(54, 56),
(54, 55),
(54, 57),
(55, 18),
(55, 31),
(55, 41),
(55, 32),
(55, 39),
(55, 13),
(55, 164),
(55, 165),
(55, 166),
(55, 42),
(55, 35);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` char(6) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2',
  `hospital` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disorder`
--
ALTER TABLE `disorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disorder`
--
ALTER TABLE `disorder`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16000009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
