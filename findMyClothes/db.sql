-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Servidor: 182.50.133.55
-- Tempo de Geração: Fev 12, 2018 as 01:54 AM
-- Versão do Servidor: 5.0.96
-- Versão do PHP: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `auxstudDB7c`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `214_country`
--

DROP TABLE IF EXISTS `214_country`;
CREATE TABLE IF NOT EXISTS `214_country` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

--
-- Extraindo dados da tabela `214_country`
--

INSERT INTO `214_country` VALUES(1, 'Afghanistan');
INSERT INTO `214_country` VALUES(2, 'Albania');
INSERT INTO `214_country` VALUES(3, 'Algeria');
INSERT INTO `214_country` VALUES(4, 'American Samoa');
INSERT INTO `214_country` VALUES(5, 'Andorra');
INSERT INTO `214_country` VALUES(6, 'Angola');
INSERT INTO `214_country` VALUES(7, 'Anguilla');
INSERT INTO `214_country` VALUES(8, 'Antarctica');
INSERT INTO `214_country` VALUES(9, 'Antigua and Barbuda');
INSERT INTO `214_country` VALUES(10, 'Argentina');
INSERT INTO `214_country` VALUES(11, 'Armenia');
INSERT INTO `214_country` VALUES(12, 'Aruba');
INSERT INTO `214_country` VALUES(13, 'Australia');
INSERT INTO `214_country` VALUES(14, 'Austria');
INSERT INTO `214_country` VALUES(15, 'Azerbaijan');
INSERT INTO `214_country` VALUES(16, 'Bahamas');
INSERT INTO `214_country` VALUES(17, 'Bahrain');
INSERT INTO `214_country` VALUES(18, 'Bangladesh');
INSERT INTO `214_country` VALUES(19, 'Barbados');
INSERT INTO `214_country` VALUES(20, 'Belarus');
INSERT INTO `214_country` VALUES(21, 'Belgium');
INSERT INTO `214_country` VALUES(22, 'Belize');
INSERT INTO `214_country` VALUES(23, 'Benin');
INSERT INTO `214_country` VALUES(24, 'Bermuda');
INSERT INTO `214_country` VALUES(25, 'Bhutan');
INSERT INTO `214_country` VALUES(26, 'Bolivia');
INSERT INTO `214_country` VALUES(27, 'Bosnia and Herzegovina');
INSERT INTO `214_country` VALUES(28, 'Botswana');
INSERT INTO `214_country` VALUES(29, 'Bouvet Island');
INSERT INTO `214_country` VALUES(30, 'Brazil');
INSERT INTO `214_country` VALUES(31, 'British Indian Ocean Territory');
INSERT INTO `214_country` VALUES(32, 'Brunei Darussalam');
INSERT INTO `214_country` VALUES(33, 'Bulgaria');
INSERT INTO `214_country` VALUES(34, 'Burkina Faso');
INSERT INTO `214_country` VALUES(35, 'Burundi');
INSERT INTO `214_country` VALUES(36, 'Cambodia');
INSERT INTO `214_country` VALUES(37, 'Cameroon');
INSERT INTO `214_country` VALUES(38, 'Canada');
INSERT INTO `214_country` VALUES(39, 'Cape Verde');
INSERT INTO `214_country` VALUES(40, 'Cayman Islands');
INSERT INTO `214_country` VALUES(41, 'Central African Republic');
INSERT INTO `214_country` VALUES(42, 'Chad');
INSERT INTO `214_country` VALUES(43, 'Chile');
INSERT INTO `214_country` VALUES(44, 'China');
INSERT INTO `214_country` VALUES(45, 'Christmas Island');
INSERT INTO `214_country` VALUES(46, 'Cocos (Keeling) Islands');
INSERT INTO `214_country` VALUES(47, 'Colombia');
INSERT INTO `214_country` VALUES(48, 'Comoros');
INSERT INTO `214_country` VALUES(49, 'Congo');
INSERT INTO `214_country` VALUES(50, 'Congo, the Democratic Republic of the');
INSERT INTO `214_country` VALUES(51, 'Cook Islands');
INSERT INTO `214_country` VALUES(52, 'Costa Rica');
INSERT INTO `214_country` VALUES(53, 'Cote D''Ivoire');
INSERT INTO `214_country` VALUES(54, 'Croatia');
INSERT INTO `214_country` VALUES(55, 'Cuba');
INSERT INTO `214_country` VALUES(56, 'Cyprus');
INSERT INTO `214_country` VALUES(57, 'Czech Republic');
INSERT INTO `214_country` VALUES(58, 'Denmark');
INSERT INTO `214_country` VALUES(59, 'Djibouti');
INSERT INTO `214_country` VALUES(60, 'Dominica');
INSERT INTO `214_country` VALUES(61, 'Dominican Republic');
INSERT INTO `214_country` VALUES(62, 'Ecuador');
INSERT INTO `214_country` VALUES(63, 'Egypt');
INSERT INTO `214_country` VALUES(64, 'El Salvador');
INSERT INTO `214_country` VALUES(65, 'Equatorial Guinea');
INSERT INTO `214_country` VALUES(66, 'Eritrea');
INSERT INTO `214_country` VALUES(67, 'Estonia');
INSERT INTO `214_country` VALUES(68, 'Ethiopia');
INSERT INTO `214_country` VALUES(69, 'Falkland Islands (Malvinas)');
INSERT INTO `214_country` VALUES(70, 'Faroe Islands');
INSERT INTO `214_country` VALUES(71, 'Fiji');
INSERT INTO `214_country` VALUES(72, 'Finland');
INSERT INTO `214_country` VALUES(73, 'France');
INSERT INTO `214_country` VALUES(74, 'French Guiana');
INSERT INTO `214_country` VALUES(75, 'French Polynesia');
INSERT INTO `214_country` VALUES(76, 'French Southern Territories');
INSERT INTO `214_country` VALUES(77, 'Gabon');
INSERT INTO `214_country` VALUES(78, 'Gambia');
INSERT INTO `214_country` VALUES(79, 'Georgia');
INSERT INTO `214_country` VALUES(80, 'Germany');
INSERT INTO `214_country` VALUES(81, 'Ghana');
INSERT INTO `214_country` VALUES(82, 'Gibraltar');
INSERT INTO `214_country` VALUES(83, 'Greece');
INSERT INTO `214_country` VALUES(84, 'Greenland');
INSERT INTO `214_country` VALUES(85, 'Grenada');
INSERT INTO `214_country` VALUES(86, 'Guadeloupe');
INSERT INTO `214_country` VALUES(87, 'Guam');
INSERT INTO `214_country` VALUES(88, 'Guatemala');
INSERT INTO `214_country` VALUES(89, 'Guinea');
INSERT INTO `214_country` VALUES(90, 'Guinea-Bissau');
INSERT INTO `214_country` VALUES(91, 'Guyana');
INSERT INTO `214_country` VALUES(92, 'Haiti');
INSERT INTO `214_country` VALUES(93, 'Heard Island and Mcdonald Islands');
INSERT INTO `214_country` VALUES(94, 'Holy See (Vatican City State)');
INSERT INTO `214_country` VALUES(95, 'Honduras');
INSERT INTO `214_country` VALUES(96, 'Hong Kong');
INSERT INTO `214_country` VALUES(97, 'Hungary');
INSERT INTO `214_country` VALUES(98, 'Iceland');
INSERT INTO `214_country` VALUES(99, 'India');
INSERT INTO `214_country` VALUES(100, 'Indonesia');
INSERT INTO `214_country` VALUES(101, 'Iran, Islamic Republic of');
INSERT INTO `214_country` VALUES(102, 'Iraq');
INSERT INTO `214_country` VALUES(103, 'Ireland');
INSERT INTO `214_country` VALUES(104, 'Israel');
INSERT INTO `214_country` VALUES(105, 'Italy');
INSERT INTO `214_country` VALUES(106, 'Jamaica');
INSERT INTO `214_country` VALUES(107, 'Japan');
INSERT INTO `214_country` VALUES(108, 'Jordan');
INSERT INTO `214_country` VALUES(109, 'Kazakhstan');
INSERT INTO `214_country` VALUES(110, 'Kenya');
INSERT INTO `214_country` VALUES(111, 'Kiribati');
INSERT INTO `214_country` VALUES(112, 'Korea, Democratic People''s Republic of');
INSERT INTO `214_country` VALUES(113, 'Korea, Republic of');
INSERT INTO `214_country` VALUES(114, 'Kuwait');
INSERT INTO `214_country` VALUES(115, 'Kyrgyzstan');
INSERT INTO `214_country` VALUES(116, 'Lao People''s Democratic Republic');
INSERT INTO `214_country` VALUES(117, 'Latvia');
INSERT INTO `214_country` VALUES(118, 'Lebanon');
INSERT INTO `214_country` VALUES(119, 'Lesotho');
INSERT INTO `214_country` VALUES(120, 'Liberia');
INSERT INTO `214_country` VALUES(121, 'Libyan Arab Jamahiriya');
INSERT INTO `214_country` VALUES(122, 'Liechtenstein');
INSERT INTO `214_country` VALUES(123, 'Lithuania');
INSERT INTO `214_country` VALUES(124, 'Luxembourg');
INSERT INTO `214_country` VALUES(125, 'Macao');
INSERT INTO `214_country` VALUES(126, 'Macedonia, the Former Yugoslav Republic of');
INSERT INTO `214_country` VALUES(127, 'Madagascar');
INSERT INTO `214_country` VALUES(128, 'Malawi');
INSERT INTO `214_country` VALUES(129, 'Malaysia');
INSERT INTO `214_country` VALUES(130, 'Maldives');
INSERT INTO `214_country` VALUES(131, 'Mali');
INSERT INTO `214_country` VALUES(132, 'Malta');
INSERT INTO `214_country` VALUES(133, 'Marshall Islands');
INSERT INTO `214_country` VALUES(134, 'Martinique');
INSERT INTO `214_country` VALUES(135, 'Mauritania');
INSERT INTO `214_country` VALUES(136, 'Mauritius');
INSERT INTO `214_country` VALUES(137, 'Mayotte');
INSERT INTO `214_country` VALUES(138, 'Mexico');
INSERT INTO `214_country` VALUES(139, 'Micronesia, Federated States of');
INSERT INTO `214_country` VALUES(140, 'Moldova, Republic of');
INSERT INTO `214_country` VALUES(141, 'Monaco');
INSERT INTO `214_country` VALUES(142, 'Mongolia');
INSERT INTO `214_country` VALUES(143, 'Montserrat');
INSERT INTO `214_country` VALUES(144, 'Morocco');
INSERT INTO `214_country` VALUES(145, 'Mozambique');
INSERT INTO `214_country` VALUES(146, 'Myanmar');
INSERT INTO `214_country` VALUES(147, 'Namibia');
INSERT INTO `214_country` VALUES(148, 'Nauru');
INSERT INTO `214_country` VALUES(149, 'Nepal');
INSERT INTO `214_country` VALUES(150, 'Netherlands');
INSERT INTO `214_country` VALUES(151, 'Netherlands Antilles');
INSERT INTO `214_country` VALUES(152, 'New Caledonia');
INSERT INTO `214_country` VALUES(153, 'New Zealand');
INSERT INTO `214_country` VALUES(154, 'Nicaragua');
INSERT INTO `214_country` VALUES(155, 'Niger');
INSERT INTO `214_country` VALUES(156, 'Nigeria');
INSERT INTO `214_country` VALUES(157, 'Niue');
INSERT INTO `214_country` VALUES(158, 'Norfolk Island');
INSERT INTO `214_country` VALUES(159, 'Northern Mariana Islands');
INSERT INTO `214_country` VALUES(160, 'Norway');
INSERT INTO `214_country` VALUES(161, 'Oman');
INSERT INTO `214_country` VALUES(162, 'Pakistan');
INSERT INTO `214_country` VALUES(163, 'Palau');
INSERT INTO `214_country` VALUES(164, 'Palestinian Territory, Occupied');
INSERT INTO `214_country` VALUES(165, 'Panama');
INSERT INTO `214_country` VALUES(166, 'Papua New Guinea');
INSERT INTO `214_country` VALUES(167, 'Paraguay');
INSERT INTO `214_country` VALUES(168, 'Peru');
INSERT INTO `214_country` VALUES(169, 'Philippines');
INSERT INTO `214_country` VALUES(170, 'Pitcairn');
INSERT INTO `214_country` VALUES(171, 'Poland');
INSERT INTO `214_country` VALUES(172, 'Portugal');
INSERT INTO `214_country` VALUES(173, 'Puerto Rico');
INSERT INTO `214_country` VALUES(174, 'Qatar');
INSERT INTO `214_country` VALUES(175, 'Reunion');
INSERT INTO `214_country` VALUES(176, 'Romania');
INSERT INTO `214_country` VALUES(177, 'Russian Federation');
INSERT INTO `214_country` VALUES(178, 'Rwanda');
INSERT INTO `214_country` VALUES(179, 'Saint Helena');
INSERT INTO `214_country` VALUES(180, 'Saint Kitts and Nevis');
INSERT INTO `214_country` VALUES(181, 'Saint Lucia');
INSERT INTO `214_country` VALUES(182, 'Saint Pierre and Miquelon');
INSERT INTO `214_country` VALUES(183, 'Saint Vincent and the Grenadines');
INSERT INTO `214_country` VALUES(184, 'Samoa');
INSERT INTO `214_country` VALUES(185, 'San Marino');
INSERT INTO `214_country` VALUES(186, 'Sao Tome and Principe');
INSERT INTO `214_country` VALUES(187, 'Saudi Arabia');
INSERT INTO `214_country` VALUES(188, 'Senegal');
INSERT INTO `214_country` VALUES(189, 'Serbia and Montenegro');
INSERT INTO `214_country` VALUES(190, 'Seychelles');
INSERT INTO `214_country` VALUES(191, 'Sierra Leone');
INSERT INTO `214_country` VALUES(192, 'Singapore');
INSERT INTO `214_country` VALUES(193, 'Slovakia');
INSERT INTO `214_country` VALUES(194, 'Slovenia');
INSERT INTO `214_country` VALUES(195, 'Solomon Islands');
INSERT INTO `214_country` VALUES(196, 'Somalia');
INSERT INTO `214_country` VALUES(197, 'South Africa');
INSERT INTO `214_country` VALUES(198, 'South Georgia and the South Sandwich Islands');
INSERT INTO `214_country` VALUES(199, 'Spain');
INSERT INTO `214_country` VALUES(200, 'Sri Lanka');
INSERT INTO `214_country` VALUES(201, 'Sudan');
INSERT INTO `214_country` VALUES(202, 'Suriname');
INSERT INTO `214_country` VALUES(203, 'Svalbard and Jan Mayen');
INSERT INTO `214_country` VALUES(204, 'Swaziland');
INSERT INTO `214_country` VALUES(205, 'Sweden');
INSERT INTO `214_country` VALUES(206, 'Switzerland');
INSERT INTO `214_country` VALUES(207, 'Syrian Arab Republic');
INSERT INTO `214_country` VALUES(208, 'Taiwan, Province of China');
INSERT INTO `214_country` VALUES(209, 'Tajikistan');
INSERT INTO `214_country` VALUES(210, 'Tanzania, United Republic of');
INSERT INTO `214_country` VALUES(211, 'Thailand');
INSERT INTO `214_country` VALUES(212, 'Timor-Leste');
INSERT INTO `214_country` VALUES(213, 'Togo');
INSERT INTO `214_country` VALUES(214, 'Tokelau');
INSERT INTO `214_country` VALUES(215, 'Tonga');
INSERT INTO `214_country` VALUES(216, 'Trinidad and Tobago');
INSERT INTO `214_country` VALUES(217, 'Tunisia');
INSERT INTO `214_country` VALUES(218, 'Turkey');
INSERT INTO `214_country` VALUES(219, 'Turkmenistan');
INSERT INTO `214_country` VALUES(220, 'Turks and Caicos Islands');
INSERT INTO `214_country` VALUES(221, 'Tuvalu');
INSERT INTO `214_country` VALUES(222, 'Uganda');
INSERT INTO `214_country` VALUES(223, 'Ukraine');
INSERT INTO `214_country` VALUES(224, 'United Arab Emirates');
INSERT INTO `214_country` VALUES(225, 'United Kingdom');
INSERT INTO `214_country` VALUES(226, 'United States');
INSERT INTO `214_country` VALUES(227, 'United States Minor Outlying Islands');
INSERT INTO `214_country` VALUES(228, 'Uruguay');
INSERT INTO `214_country` VALUES(229, 'Uzbekistan');
INSERT INTO `214_country` VALUES(230, 'Vanuatu');
INSERT INTO `214_country` VALUES(231, 'Venezuela');
INSERT INTO `214_country` VALUES(232, 'Viet Nam');
INSERT INTO `214_country` VALUES(233, 'Virgin Islands, British');
INSERT INTO `214_country` VALUES(234, 'Virgin Islands, U.s.');
INSERT INTO `214_country` VALUES(235, 'Wallis and Futuna');
INSERT INTO `214_country` VALUES(236, 'Western Sahara');
INSERT INTO `214_country` VALUES(237, 'Yemen');
INSERT INTO `214_country` VALUES(238, 'Zambia');
INSERT INTO `214_country` VALUES(239, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `214_history`
--

DROP TABLE IF EXISTS `214_history`;
CREATE TABLE IF NOT EXISTS `214_history` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `userId` int(11) unsigned NOT NULL,
  `productsId` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `UK_Unique` (`userId`,`productsId`),
  KEY `pidT` (`productsId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `214_history`
--

INSERT INTO `214_history` VALUES(1, 1, 2);
INSERT INTO `214_history` VALUES(2, 1, 1);
INSERT INTO `214_history` VALUES(3, 1, 3);
INSERT INTO `214_history` VALUES(4, 1, 4);
INSERT INTO `214_history` VALUES(5, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `214_products`
--

DROP TABLE IF EXISTS `214_products`;
CREATE TABLE IF NOT EXISTS `214_products` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `color` varchar(25) NOT NULL,
  `description` varchar(225) NOT NULL,
  `features` varchar(255) NOT NULL,
  `care` varchar(255) NOT NULL,
  `country` int(11) unsigned NOT NULL,
  `gender` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `214_products`
--

INSERT INTO `214_products` VALUES(1, 'Formal Dress', 'Green', 'Designed by CK Itself', 'Custom Fit, Hand Tailored', 'Dry Clean Only', 54, 0);
INSERT INTO `214_products` VALUES(2, 'Cutest Party Dress', 'Red', 'Express yourself!', 'Made To Measure', 'No Need of special care', 123, 0);
INSERT INTO `214_products` VALUES(3, 'Shabat Dress', 'Army Green', 'Made to shine', 'Bespoke', 'Dry Clean Only', 154, 0);
INSERT INTO `214_products` VALUES(4, 'V Tiger Shirt', 'Black and White', 'All the attention to details', 'Custom Fit, Hand Tailored', 'No Need of special care', 32, 0);
INSERT INTO `214_products` VALUES(5, 'Velvet Dress', 'Red', 'Wore by Jennifer Aniston', 'Oscar wore', 'Dry Only', 34, 0);
INSERT INTO `214_products` VALUES(6, 'Spring is Coming', 'Yellow', 'Designed by JJ', 'Pieace of art', 'Dry Only', 12, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `214_productsStores`
--

DROP TABLE IF EXISTS `214_productsStores`;
CREATE TABLE IF NOT EXISTS `214_productsStores` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `productsId` int(11) unsigned NOT NULL,
  `storeId` int(11) unsigned NOT NULL,
  `price` decimal(15,2) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `pidT` (`productsId`),
  KEY `sidT` (`storeId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `214_productsStores`
--

INSERT INTO `214_productsStores` VALUES(1, 2, 3, 200.64);
INSERT INTO `214_productsStores` VALUES(2, 1, 1, 181.82);
INSERT INTO `214_productsStores` VALUES(3, 4, 1, 448.44);
INSERT INTO `214_productsStores` VALUES(4, 4, 2, 251.09);
INSERT INTO `214_productsStores` VALUES(5, 4, 3, 150.08);
INSERT INTO `214_productsStores` VALUES(6, 4, 5, 281.81);
INSERT INTO `214_productsStores` VALUES(7, 2, 4, 372.39);
INSERT INTO `214_productsStores` VALUES(8, 1, 3, 210.44);
INSERT INTO `214_productsStores` VALUES(9, 3, 4, 228.38);
INSERT INTO `214_productsStores` VALUES(10, 1, 4, 424.58);
INSERT INTO `214_productsStores` VALUES(11, 3, 2, 424.58);

-- --------------------------------------------------------

--
-- Estrutura da tabela `214_stores`
--

DROP TABLE IF EXISTS `214_stores`;
CREATE TABLE IF NOT EXISTS `214_stores` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `214_stores`
--

INSERT INTO `214_stores` VALUES(1, 'Zara', 'Rotschild Blvd.', 104);
INSERT INTO `214_stores` VALUES(2, 'Calvin Klein', 'HaHashmonaim', 104);
INSERT INTO `214_stores` VALUES(3, 'Nike', 'Gordon St.', 104);
INSERT INTO `214_stores` VALUES(4, 'Bershka', 'Ben Yehuda', 104);
INSERT INTO `214_stores` VALUES(5, 'Mango', 'Ben Gurion', 104);

-- --------------------------------------------------------

--
-- Estrutura da tabela `214_users`
--

DROP TABLE IF EXISTS `214_users`;
CREATE TABLE IF NOT EXISTS `214_users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `push` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `214_users`
--

INSERT INTO `214_users` VALUES(1, 'Ella Cohen', 'ellacohen@gmail.com', 'Tel Aviv', 0);
