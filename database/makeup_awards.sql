/*
Navicat MySQL Data Transfer

Source Server         : MYSMS
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : makeup_awards

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2021-10-20 09:26:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for beauty_retail_business
-- ----------------------------
DROP TABLE IF EXISTS `beauty_retail_business`;
CREATE TABLE `beauty_retail_business` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `contact_list` text,
  `customer_list` text,
  `total_retail_sponsored` varchar(255) DEFAULT '',
  `top_retail_sponsorship_event1` text,
  `top_retail_sponsorship_event2` text,
  `top_retail_sponsorship_event3` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of beauty_retail_business
-- ----------------------------
INSERT INTO `beauty_retail_business` VALUES ('1', 'Beauty Retail Business of the Year', 'Lucy Siaw', 'lqueencyartistry@gmail.com', '0243430003', '', 'Lqueencybeautystore', 'Lqueencybeautystore', 'Www.Lqueency.com', 'Lqueencybeautystore', '', 'Lqueencybeautystore', 'Lqueencybeautystore', 'Www.Lqueency.com', 'Lqueencybeautystore', '0243430002', 'lqueencybeautystore@gmail.com', '', '', '', '', '', '', 'a618f5663cff8780197d77', '2021-09-27 22:57:37');
INSERT INTO `beauty_retail_business` VALUES ('2', 'Beauty Retail Business of the Year', 'Ann-Marie Ofei-Kwatia', 'shopbeautybooth@gmail.com', '0557338797', 'A passionate and customer-oriented entrepreneur who has disrupted Ghana\'s skincare and beauty retail business in a relatively short period. Ann-Marie complements her great customer service with her astute knowledge of skin types, skincare products and gen', '@Shopbeautyboothgh', '', '', 'Shopbeautyboothgh', 'Shopbeautybooth was conceived at a time of clamor for not only authentic skincare and makeup products from all over the world by Ghanaians, but also ones they could get at very affordable prices. Out of this demand, Shopbeautybooth was birthed in 2017 as ', '@Shopbeautyboothgh', '', '', 'Shopbeautyboothgh', '0557338797', 'shopbeautybooth@gmail.com', '1. Mufidah Mukhtar\n0202174341\nmuphidaht@gmail.com\nTamale - Northern Region\n2. Sarah-Michelle Mills\n0500408604\nkuukua.adobea.mills@gmail.com\nAccra, Greater Accra\n3. Genevieve Datsomor\n0544059439\nHo, Volta Region\n4. Anne-Marie Amissah\n0557325902\nCape Coast, Central Region\n5. Precious Boakye\n0209099795\nKumasi, Ashanti Region', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'af2728d588f80eab00a88b', '2021-10-12 20:19:28');
INSERT INTO `beauty_retail_business` VALUES ('3', 'Beauty Retail Business of the Year', 'Habiba Faaza', 'faazahabiba@gmail.com', '0243075206', 'BA Psychology UG\nFormer Banker\nEntrepreneur', 'The_general_merchant', 'The General Merchant', '', 'The General Merchant', 'Wholesale and retail of makeup products and accessories \nWide range of African, European and American brands', 'The _general_merchant', 'The General Merchant', '', 'The General Merchant', '0243075206', 'faazahabiba@gmail.com', 'Reggies makeover-050 248 5483\nMinalyn touch-024 991 6150\nH&amp;amp;E Elegance -024 392 9135\nAdele&amp;acirc;€™s makeover-020 902 9082\nDivine Cassey -+233 54 351 9557', '', '', '', '', '', '264254d8fcc24fb45234dd', '2021-10-13 23:10:07');
INSERT INTO `beauty_retail_business` VALUES ('4', 'Beauty Retail Business of the Year', 'Habiba Faaza', 'faazahabiba@gmail.com', '0243075206', 'BA Psychology UG\nFormer Banker\nEntrepreneur', 'The_general_merchant', 'The General Merchant', '', 'The General Merchant', 'Wholesale and retail of makeup products and accessories \nWide range of African, European and American brands', 'The _general_merchant', 'The General Merchant', '', 'The General Merchant', '0243075206', 'faazahabiba@gmail.com', 'Reggies makeover-050 248 5483\nMinalyn touch-024 991 6150\nH&amp;amp;E Elegance -024 392 9135\nAdele&amp;acirc;€™s makeover-020 902 9082\nDivine Cassey -+233 54 351 9557', '', '', '', '', '', '264254d8fcc24fb45234dd', '2021-10-13 23:10:09');
INSERT INTO `beauty_retail_business` VALUES ('5', 'Beauty Retail Business of the Year', 'WINNIE ADJEI', 'afiasika200@yahoo.com', '0242915621', 'Winnie Adjei-Addo is an accountant by profession and is currently the Finance and Admin Manager of Juben House of Beauty. Having gathered more than 10 years of experience in her line of duty, she has become one of the finest business professionals', 'akumandela', 'afiamandela', '', 'JUBEN HOUSE OF BEAUTY', 'Juben House of Beauty is Ghana&amp;acirc;€™s leading beauty retailer for high quality and innovative beauty solutions. An award-winning beauty haven, which strives to\nrevolutionise the Ghanaian beauty industry by offering the world&amp;acirc;€™s best bran', 'jubenhseofbeauty', '', 'jubenbeauty.com', 'Mrs Mame Serwaa Achampong-Kyei', '0244380131', 'masakjuben@gmail.com', '1. Jemimah, Techiman, 0544054464\n2. Anita, Tema, 0501452301\n3. Aunty Akua, East Legon, 0244383946\n4. Aunty Alice, Achimota, 0244709869\n5.Balchisu Karim, Pokuase, 0552023739, kblachisu@gmail.com', 'Tesano Branch /Delivery service - 0302244579, 0244380131, 0552752779', '4', 'Juben sponsored and participated in the Ghana International Products Awards held at Movenpick on 25/06/2021.\nJuben picked the award for the &amp;quot;Best Makeup Products Retailer of the Year&amp;quot; at the event', 'Juben sponsored the Makeup Ghana Awards 4th edition held at Labadi Beach Hotel on 13/11/2020. The CEO in the person of Mrs Mame Serwaa Achampong-Kyei presented an award at the event.', 'Juben is sponsored and participated in the National Customer\'s Choice Awards 2020 held at Movenpick on 06/11/2020.\nJuben picked the award for the &amp;quot;Makeup Retailer of the Year&amp;quot; at the event.\nJuben is sponsoring and participating in the National Customer\'s Choice Awards 2021 to be held at Movenpick on 15/10/2021 and is likely to pick the award for the &amp;quot;Makeup Retailer of the Year&amp;quot; for 2021 at the event.', '2208bf3513b08cbdb00d87', '2021-10-14 12:53:41');

-- ----------------------------
-- Table structure for beauty_school
-- ----------------------------
DROP TABLE IF EXISTS `beauty_school`;
CREATE TABLE `beauty_school` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `total_graduants` varchar(255) DEFAULT '',
  `graduant_2017_name1` varchar(255) DEFAULT '',
  `graduant_2017_email1` varchar(255) DEFAULT '',
  `graduant_2017_phone1` varchar(255) DEFAULT '',
  `accomplishment1_2017` text,
  `graduant_2017_name2` varchar(255) DEFAULT '',
  `graduant_2017_email2` varchar(255) DEFAULT '',
  `graduant_2017_phone2` varchar(255) DEFAULT '',
  `accomplishment2_2017` text,
  `graduant_2017_name3` varchar(25) DEFAULT '',
  `graduant_2017_email3` varchar(25) DEFAULT '',
  `graduant_2017_phone3` varchar(25) DEFAULT '',
  `accomplishment3_2017` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of beauty_school
-- ----------------------------
INSERT INTO `beauty_school` VALUES ('1', 'Beauty School of the Year', '', 'clintboaa@gmail.com', '0266684000', '', '2ndimage_int', '2nd Image International', 'www.facebook.com/2ndimageinternational/', '2nd Image International Skills College', '2nd Image International was established in 1986 by Nikki Boa-Amponsem currently the Executive Principal and CEO. It started as a beauty and slimming clinic, which has treated thousands of clients with skincare and overweight problems. 2nd Image Internatio', '2ndimage_int', '2nd Image International', 'https://www.2ndimageghana.com', '2nd Image International Skills College', '0266684000', 'info@2ndimageghana.com', '199', 'Reina Mavis Abbey', 'reinaabbey233@gmail.com', '0245972417', '1. Best Body therapy student\n2. Massage Facilitator at 2nd Image International Skills College Accra Branch', 'Janet Sowah', 'ghanagirls573@gmail.com', '0241611387', '1. Best Make-up student\n2. Retailer for Max Cosmetics\n3. Successfully done Make-up for over 20 people after completing school', 'Vera Adwoa Safoa', 'adwoasafowaa55@gmail.com', '0206805544', '1. Best Facial therapy student\n2. Successfully done facials for 3 brides\n3. Back to school studying fashion at Libelt Institute', '523618d02d82c088838eb9', '2021-10-11 14:05:30');

-- ----------------------------
-- Table structure for beauty_vlog
-- ----------------------------
DROP TABLE IF EXISTS `beauty_vlog`;
CREATE TABLE `beauty_vlog` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `vlog_name` varchar(255) DEFAULT '',
  `vlog_url` text,
  `vlog_cat1_post1` text,
  `vlog_cat1_post2` text,
  `vlog_cat2_post1` text,
  `vlog_cat2_post2` text,
  `vlog_cat3_post1` text,
  `vlog_cat3_post2` text,
  `vlog_cat4_post1` text,
  `vlog_cat4_post2` text,
  `vlog_engagement_post1` text,
  `vlog_engagement_post2` text,
  `vlog_engagement_post3` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of beauty_vlog
-- ----------------------------

-- ----------------------------
-- Table structure for bridal_makeup_artist
-- ----------------------------
DROP TABLE IF EXISTS `bridal_makeup_artist`;
CREATE TABLE `bridal_makeup_artist` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `photo_link2` varchar(255) DEFAULT NULL,
  `bridal_project_description1` text,
  `photo_link1` varchar(255) DEFAULT NULL,
  `bridal_project_description2` text,
  `photo_link3` varchar(255) DEFAULT NULL,
  `bridal_project_description3` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bridal_makeup_artist
-- ----------------------------
INSERT INTO `bridal_makeup_artist` VALUES ('1', 'Best Bridal Makeup Artist', 'Regina  Dumah', 'reginadumah@gmail.com', '0502485483', 'A young  resilient and passionate lady who has all things beauty at heart and determined to put Ghana beauty industry on the globe', 'Reggielipsy', 'Lipsy Eyesy', '', 'Reggies makeovers', 'Reggies Makeovers is a well known brand built on hard-work The brand began in 2014 and has over the years seen massive improvement and growth all over the globe. This beauty brand of choice is currently one of the most sought after in Ghana and it&amp;aci', 'reggies_makeovers', 'Reggies Makeovers', 'www.reggiesmakeovers.com', 'Reggies makeovers', '0502485483', 'reginadumah@gmail.com', 'https://www.instagram.com/reel/CTp8_iDlM2o/?utm_medium=copy_link', 'A bridal beauty shoot aimed at enhancing confidence in Rich melanin brides that , they can look flawless in their skin.', 'https://www.bellanaijaweddings.com/reggies-makeover-bridal-beauty-look/', 'Bridal makeup done on a serve acne and textured skin which came out looking flawless', 'https://www.instagram.com/p/CP3uFm3lObZ/?utm_medium=copy_link', 'This bridal makeup project was done to prove that regardless of your skin tone or Race , you are safe with our brand', 'ccaf31ff0aa515559a8e02', '2021-09-23 18:43:42');
INSERT INTO `bridal_makeup_artist` VALUES ('2', 'Best Bridal Makeup Artist', 'Cynthia Domie', 'delorm1983@gmail.com', '0207195919', '', 'Paintedperfectgh', 'Paintedperfectgh', '', 'Paintedperfectgh', '', '', '', '', 'Paintedperfectgh', '0207195919', 'delorm1983@gmail.com', '', '', '', '', '', '', '4b2d92af63f8980b28b943', '2021-09-27 22:50:14');
INSERT INTO `bridal_makeup_artist` VALUES ('3', 'Best Bridal Makeup Artist', 'Portia Gyeni-Boateng', 'kinsdaryl@yahoo.com', '+233 249 138 826', 'Multiple award winning entrepreneur , Portia Gyeni-Boateng is a young and vibrant cosmetic and beauty advocate. Rising from an ordinary makeup artist in 2013 to the Excutive Director of one Ghana&amp;acirc;€™s biggest owned private makeup brands ( CUTIEBR', '@cutie_inspires', 'Portia Gyeni-Boateng', '', 'Cutiebridal', 'CUTIEBRIDAL was established in 2013 in Accra Ghana by Miss Portia Gyeni-Boateng who is a certified makeup artist and a licensed beauty facilitator from Rapheal Oliver in Sao Paola Brazil and a trainer of several Ghana beauty programs in Ghana. CUTIEBRIDAL', '@cutiebridal_gh', '@cutiebridal_gh', '', 'Cutiebridal', '0262842640', 'cutiebridal_gh@yahoo.com', 'https://www.instagram.com/p/CCd-a8eA5gM/?utm_medium=copy_link', 'I created a subtle yet sultry glowy bridal glam that would be picture-perfect and great on client dark skin tone and also meet client&amp;acirc;€™s craving all out for glamour . \nThe look features a shimmery soft cut crease eye (Applying shadow to the crease and blending it slightly up and out to draw attention to the eye, but is not an overly dramatic look). I also applied a tiny bit of shadow to the lower lid to create a slight &amp;quot;v&amp;quot; that frames the eyes.\nA glowing complexion calls for groomed brows, a soft rich blush color in an apricot rose shade to enhance cheeks and copious quantities of lip gloss.', 'https://www.instagram.com/p/CCvh_EFAnjy/?utm_medium=copy_link', 'I created a timeless Bridal engagement makeup look. \nClient requested for fuller eyes, hence a green smokey eye without being overpowering, complimented with lush lashes for more flair and statement brows to achieve the clients eye-work request. \nHaving a concave nose , I had to snatch it using contours and bronzing. \nAlso considering where the light naturally falls on the face (cheekbones, nose, and forehead), I applied a highlighter to those areas that was slightly lighter than client natural skin tone creating client&amp;acirc;€™s glowing cheeks and skin.\nI finally paired the skin with a glossy neutral lip since the eyes were the focus.\nThis entire technique works with the client skin tone which keeps the look balanced.', 'https://www.instagram.com/p/CIJC86TA-Ph/?utm_medium=copy_link', 'I created subtle blush smokey to dark grey lids for client&amp;acirc;€™s bridal look. False lashes to enhance client&amp;acirc;€™s natural lashes, making them appear fuller and longer. They help define the lashline and really make the eyes &amp;quot;pop,&amp;quot; keeping the rest of the makeup quite minimal and natural lip color to balance out the dramatic eye look.', 'fca3492420d53ba454349f', '2021-10-03 19:17:57');
INSERT INTO `bridal_makeup_artist` VALUES ('4', 'Best Bridal Makeup Artist', 'Ida Osei Tutu', 'idaoseitutu@gmail.com', '0243431078', 'An excellent 33years old makeup artist based in Kumasi who prides herself in giving her brides the best glamorous look for the marriage ceremonies to look themselves at their best.', '', 'Akosua Nyantakyiwaa', '', 'Idazzle Makeup Artistry', 'Idazzle came into being since 2017 and prides herself into serving soft yet glamorous looks to ladies for all occasions', 'idazzle_by_obaahemaa', 'Idazzle', '', 'Idazzle Makeup Artistry', '0243431078', 'idaoseitutu@gmail.com', 'https://www.instagram.com/p/CJJd-0vpgrj/?utm_medium=copy_link', 'A subtle but glamorous look for Traditional Marriage Ceremony.', 'https://www.instagram.com/p/CKOtpawJ1Pw/?utm_medium=copy_link', 'Subtle with bold lips perfectly matching her kente outfit for Traditional marriage ceremony.', 'https://www.instagram.com/p/CQfu8Jyj20r/?utm_medium=copy_link', 'Glowy glossy look for that rich Ghanaian traditional marriage ceremony.', 'aa11006116f096dfdf336a', '2021-10-12 10:53:38');
INSERT INTO `bridal_makeup_artist` VALUES ('5', 'Best Bridal Makeup Artist', 'Ida Osei Tutu', 'idaoseitutu@gmail.com', '0243431078', 'An excellent 33years old makeup artist based in Kumasi who prides herself in giving her brides the best glamorous look for the marriage ceremonies to look themselves at their best.', '', 'Akosua Nyantakyiwaa', '', 'Idazzle Makeup Artistry', 'Idazzle came into being since 2017 and prides herself into serving soft yet glamorous looks to ladies for all occasions', 'idazzle_by_obaahemaa', 'Idazzle', '', 'Idazzle Makeup Artistry', '0243431078', 'idaoseitutu@gmail.com', 'https://www.instagram.com/p/CJJd-0vpgrj/?utm_medium=copy_link', 'A subtle but glamorous look for Traditional Marriage Ceremony.', 'https://www.instagram.com/p/CKOtpawJ1Pw/?utm_medium=copy_link', 'Subtle with bold lips perfectly matching her kente outfit for Traditional marriage ceremony.', 'https://www.instagram.com/p/CQfu8Jyj20r/?utm_medium=copy_link', 'Glowy glossy look for that rich Ghanaian traditional marriage ceremony.', 'aa11006116f096dfdf336a', '2021-10-12 10:53:40');
INSERT INTO `bridal_makeup_artist` VALUES ('6', 'Best Bridal Makeup Artist', 'Ida Osei Tutu', 'idaoseitutu@gmail.com', '0243431078', 'An excellent 33years old makeup artist based in Kumasi who prides herself in giving her brides the best glamorous look for the marriage ceremonies to look themselves at their best.', '', 'Akosua Nyantakyiwaa', '', 'Idazzle Makeup Artistry', 'Idazzle came into being since 2017 and prides herself into serving soft yet glamorous looks to ladies for all occasions', 'idazzle_by_obaahemaa', 'Idazzle', '', 'Idazzle Makeup Artistry', '0243431078', 'idaoseitutu@gmail.com', 'https://www.instagram.com/p/CJJd-0vpgrj/?utm_medium=copy_link', 'A subtle but glamorous look for Traditional Marriage Ceremony.', 'https://www.instagram.com/p/CKOtpawJ1Pw/?utm_medium=copy_link', 'Subtle with bold lips perfectly matching her kente outfit for Traditional marriage ceremony.', 'https://www.instagram.com/p/CQfu8Jyj20r/?utm_medium=copy_link', 'Glowy glossy look for that rich Ghanaian traditional marriage ceremony.', 'aa11006116f096dfdf336a', '2021-10-12 10:53:41');
INSERT INTO `bridal_makeup_artist` VALUES ('7', 'Best Bridal Makeup Artist', 'Martina Asante', 'asante.martina@gmail.com', '0201145118', 'Creative and outgoing with a proven track record of success and client satisfaction in providing professional services', 'Facemechanicgh', 'Facemechanicgh', '', 'Facemechanicgh', '5 years of experience in applying bridal makeup aiming to leverage my knowledge and experience in creating timeless bridal looks.', 'Facemechanicgh', 'Facemechanicgh', '', 'Facemechanicgh', '0201145118', 'facemechanicgh@gmail.com', 'https://www.instagram.com/p/CMmcRYJJIB7/?utm_medium=copy_link', 'Subtle bridal look for a client. Subtle shimmer eyeshadow paired with a glossy nude lipstick on a light skin', 'https://www.instagram.com/p/CSOwMyBgHuC/?utm_medium=copy_link', 'Bold eyes paired with glossy nude lipstick on a caramel skin', 'https://www.instagram.com/p/B0A6F2dAVTL/?utm_medium=copy_link', 'Subtle nude glam on a dark skin bride', '7293a5cd69b1d2b580569a', '2021-10-14 15:12:03');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for digital_marketing
-- ----------------------------
DROP TABLE IF EXISTS `digital_marketing`;
CREATE TABLE `digital_marketing` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `midea_category_list` text,
  `digital_campaign_summmary` text,
  `digital_insight` text,
  `digital_big_idea` text,
  `digital_execution` text,
  `digital_results` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of digital_marketing
-- ----------------------------

-- ----------------------------
-- Table structure for editorial
-- ----------------------------
DROP TABLE IF EXISTS `editorial`;
CREATE TABLE `editorial` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `editorial_project_name1` varchar(255) DEFAULT '',
  `photo_link1` varchar(255) DEFAULT NULL,
  `editorial_project_description1` text,
  `editorial_project_name2` varchar(255) DEFAULT '',
  `photo_link2` varchar(255) DEFAULT NULL,
  `editorial_project_description2` text,
  `editorial_project_name3` varchar(255) DEFAULT '',
  `photo_link3` varchar(255) DEFAULT NULL,
  `editorial_project_description3` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of editorial
-- ----------------------------
INSERT INTO `editorial` VALUES ('1', 'Best Editorial Makeup Artist', 'ANITA KARIKARI', 'anitavictorious@gmail.com', '0549582379', 'Hand skills in art with the use of makeup only to express ideas', 'KK_MAKEOVER', '', '', 'Kk_makeover', 'Use of makeup products only to crafts art on the body and face', 'Kk_makeover', '', '', 'Kk_makeover', '+233 54 958 2379', 'anitavictorious@gmail.com', 'TWO PREDATORS', 'https://www.Instagram.com/p/CGSIQ2wIMcO/?utm_medium=copy_link', 'The art depicts how a snake can stills be a prey in the hands of an eagle using eyebrow pencil,eyeshadow palette an concealer for te craft', 'KITTY POP', 'https://www.instagram.com/p/CEo5VHsFmjI/?utm_medium=copy_link', 'This hand drawn art depicts a cat drawn on one side of the face where it gives an illusion of an actual kitty popping out', 'CULTURAL INSPIRATION', 'https://www.instagram.com/p/CKgrd8vFo8-/?utm_medium=copy_link', 'This work was created with ideas of our Adinkra signs to create a whole new traditional art with creative hairstyle to form a modernised Ghanaian traditon', '1860794043', '2021-10-07 07:51:18');
INSERT INTO `editorial` VALUES ('2', 'Best Editorial Makeup Artist', 'ANITA KARIKARI', 'anitavictorious@gmail.com', '0549582379', 'Hand skills in art with the use of makeup only to express ideas', 'KK_MAKEOVER', '', '', 'Kk_makeover', 'Use of makeup products only to crafts art on the body and face', 'Kk_makeover', '', '', 'Kk_makeover', '+233 54 958 2379', 'anitavictorious@gmail.com', 'TWO PREDATORS', 'https://www.Instagram.com/p/CGSIQ2wIMcO/?utm_medium=copy_link', 'The art depicts how a snake can stills be a prey in the hands of an eagle using eyebrow pencil,eyeshadow palette an concealer for te craft', 'KITTY POP', 'https://www.instagram.com/p/CEo5VHsFmjI/?utm_medium=copy_link', 'This hand drawn art depicts a cat drawn on one side of the face where it gives an illusion of an actual kitty popping out', 'CULTURAL INSPIRATION', 'https://www.instagram.com/p/CKgrd8vFo8-/?utm_medium=copy_link', 'This work was created with ideas of our Adinkra signs to create a whole new traditional art with creative hairstyle to form a modernised Ghanaian traditon', '1860794043', '2021-10-07 07:51:20');
INSERT INTO `editorial` VALUES ('3', 'Best Editorial Makeup Artist', 'ASARE PRINCE OWUSU', 'princeowusuasare@gmail.com', '0501185862', 'I am a professional makeup artist and a beauty consultant with 8 years working experience. I have worked with almost all the major Fashion weeks in Ghana. ( Glitz fashion week, Kumasi fashion week etc).  And have head the makeup section for most fashion h', '@thereal_asareprince', 'Asare Prince Beauty', '', 'Asare Prince Beauty', 'We provide professional makeup services for Print/Magazines,Bridal Parties, Fashion/Trunk shows and a professional Beauty consultant services', '@thereal_asareprince', 'Asare Prince Beauty', '', 'Asare Prince Beauty', '0540688005', 'princeowusuasare@gmail.com', 'BROWNS. DEEP BROWNS. STONES', 'https://instagram.com/p/CQVlIcCjRv5/', 'The above editorial look is depicting how rich gems and stones look rich and the different range of melanin shades.', 'FRUITS. HEALTH', 'https://www.instagram.com/p/B1Wp7IJJa9x/?utm_medium=copy_link', 'The above editorial look was created to show how fruits do make us healthy and how nature can be so colorful and vibrant yet we often turn a blind eyes on it. Nature has got all we need to be healthy .', 'THE COLOR SPLASH', 'https://www.instagram.com/p/BLmp8vyA3r2/?utm_medium=copy_link', 'The above color splash was done to create awareness Autism. Irrespective of how broken you are as an autist, you still matter.', '833803352', '2021-10-14 08:23:28');
INSERT INTO `editorial` VALUES ('4', 'Best Editorial Makeup Artist', 'ASARE PRINCE OWUSU', 'princeowusuasare@gmail.com', '0501185862', 'I am a professional makeup artist and a beauty consultant with 8 years working experience. I have worked with almost all the major Fashion weeks in Ghana. ( Glitz fashion week, Kumasi fashion week etc).  And have head the makeup section for most fashion h', '@thereal_asareprince', 'Asare Prince Beauty', '', 'Asare Prince Beauty', 'We provide professional makeup services for Print/Magazines,Bridal Parties, Fashion/Trunk shows and a professional Beauty consultant services', '@thereal_asareprince', 'Asare Prince Beauty', '', 'Asare Prince Beauty', '0540688005', 'princeowusuasare@gmail.com', 'BROWNS. DEEP BROWNS. STONES', 'https://instagram.com/p/CQVlIcCjRv5/', 'The above editorial look is depicting how rich gems and stones look rich and the different range of melanin shades.', 'FRUITS. HEALTH', 'https://www.instagram.com/p/B1Wp7IJJa9x/?utm_medium=copy_link', 'The above editorial look was created to show how fruits do make us healthy and how nature can be so colorful and vibrant yet we often turn a blind eyes on it. Nature has got all we need to be healthy .', 'THE COLOR SPLASH', 'https://www.instagram.com/p/BLmp8vyA3r2/?utm_medium=copy_link', 'The above color splash was done to create awareness Autism. Irrespective of how broken you are as an autist, you still matter.', '833803352', '2021-10-14 08:23:30');
INSERT INTO `editorial` VALUES ('5', 'Best Editorial Makeup Artist', 'LEONARD AHIA', 'leomclloyd77@gmail.com', '0248163963', 'I&amp;acirc;€™M A GHANAIAN AND CHRISTIAN. A YOUNG AMBITIOUS AND DETERMINE MAKEUP ARTIST,STYLIST AND CONTENT CREATOR WHO INTERPRET ART IN DIVERSE WAYS THROUGH ART,FASHION AND CULTURE AND DESIRES TO TAKE AFRICA TO THE WORLD. I&amp;acirc;€™M A LOVER OF MUSIC', 'Da_therapizt', 'Datherapizt', '', 'DATHERAPIZT', 'THE BRAND DATHERAPIZT IS 3 YEARS. WE SPECIALIZE IN MAKEUP, BEAUTY THERAPY, HAIRSTYLING, STYLING AND CREATING ARTISTIC CONTENT.', 'Da_therapizt', 'DATHERAPIZT', '', 'DATHERAPIZT', '0248163963', 'leomclloyd77@gmail.com', 'DIVINITY', 'https://www.instagram.com/p/CUvjSFBjP16/?utm_medium=copy_link', 'IT TAKES ABOUT THE LIGHT IN US AS HUMAN AND THE FACT THAT WE HAVE TO ALSO AFFECT PEOPLE AROUND US WITH WHAT WE HAVE INSIDE', 'Esther 2:17', 'https://www.instagram.com/p/CUXTOKTMhKU/?utm_medium=copy_link', 'IT TALKS  ABOUT ESTHER WHERE THE KING LOVED HER ABOVE ALL THE WOMEN AND OBTAINED GRACE AND FAVOR IN HIS SIGHT', 'THE NEW AFRICA', 'https://www.instagram.com/p/CTkNXe4jaIP/?utm_medium=copy_link', 'It&amp;acirc;€™s perceived and accepted that makeup especially eyebrows should follow a style,groove and pattern. But if not done so, will you still shine?', '1949282648', '2021-10-14 17:37:45');
INSERT INTO `editorial` VALUES ('6', 'Best Editorial Makeup Artist', 'LEONARD AHIA', 'leomclloyd77@gmail.com', '0248163963', 'I&amp;acirc;€™M A GHANAIAN AND CHRISTIAN. A YOUNG AMBITIOUS AND DETERMINE MAKEUP ARTIST,STYLIST AND CONTENT CREATOR WHO INTERPRET ART IN DIVERSE WAYS THROUGH ART,FASHION AND CULTURE AND DESIRES TO TAKE AFRICA TO THE WORLD. I&amp;acirc;€™M A LOVER OF MUSIC', 'Da_therapizt', 'Datherapizt', '', 'DATHERAPIZT', 'THE BRAND DATHERAPIZT IS 3 YEARS. WE SPECIALIZE IN MAKEUP, BEAUTY THERAPY, HAIRSTYLING, STYLING AND CREATING ARTISTIC CONTENT.', 'Da_therapizt', 'DATHERAPIZT', '', 'DATHERAPIZT', '0248163963', 'leomclloyd77@gmail.com', 'DIVINITY', 'https://www.instagram.com/p/CUvjSFBjP16/?utm_medium=copy_link', 'IT TAKES ABOUT THE LIGHT IN US AS HUMAN AND THE FACT THAT WE HAVE TO ALSO AFFECT PEOPLE AROUND US WITH WHAT WE HAVE INSIDE', 'Esther 2:17', 'https://www.instagram.com/p/CUXTOKTMhKU/?utm_medium=copy_link', 'IT TALKS  ABOUT ESTHER WHERE THE KING LOVED HER ABOVE ALL THE WOMEN AND OBTAINED GRACE AND FAVOR IN HIS SIGHT', 'THE NEW AFRICA', 'https://www.instagram.com/p/CTkNXe4jaIP/?utm_medium=copy_link', 'It&amp;acirc;€™s perceived and accepted that makeup especially eyebrows should follow a style,groove and pattern. But if not done so, will you still shine?', '1949282648', '2021-10-14 17:37:45');
INSERT INTO `editorial` VALUES ('7', 'Best Editorial Makeup Artist', 'LEONARD AHIA', 'leomclloyd77@gmail.com', '0248163963', 'I&amp;acirc;€™M A GHANAIAN AND CHRISTIAN. A YOUNG AMBITIOUS AND DETERMINE MAKEUP ARTIST,STYLIST AND CONTENT CREATOR WHO INTERPRET ART IN DIVERSE WAYS THROUGH ART,FASHION AND CULTURE AND DESIRES TO TAKE AFRICA TO THE WORLD. I&amp;acirc;€™M A LOVER OF MUSIC', 'Da_therapizt', 'Datherapizt', '', 'DATHERAPIZT', 'THE BRAND DATHERAPIZT IS 3 YEARS. WE SPECIALIZE IN MAKEUP, BEAUTY THERAPY, HAIRSTYLING, STYLING AND CREATING ARTISTIC CONTENT.', 'Da_therapizt', 'DATHERAPIZT', '', 'DATHERAPIZT', '0248163963', 'leomclloyd77@gmail.com', 'DIVINITY', 'https://www.instagram.com/p/CUvjSFBjP16/?utm_medium=copy_link', 'IT TAKES ABOUT THE LIGHT IN US AS HUMAN AND THE FACT THAT WE HAVE TO ALSO AFFECT PEOPLE AROUND US WITH WHAT WE HAVE INSIDE', 'Esther 2:17', 'https://www.instagram.com/p/CUXTOKTMhKU/?utm_medium=copy_link', 'IT TALKS  ABOUT ESTHER WHERE THE KING LOVED HER ABOVE ALL THE WOMEN AND OBTAINED GRACE AND FAVOR IN HIS SIGHT', 'THE NEW AFRICA', 'https://www.instagram.com/p/CTkNXe4jaIP/?utm_medium=copy_link', 'It&amp;acirc;€™s perceived and accepted that makeup especially eyebrows should follow a style,groove and pattern. But if not done so, will you still shine?', '1949282648', '2021-10-14 17:37:45');
INSERT INTO `editorial` VALUES ('8', 'Best Editorial Makeup Artist', 'LEONARD AHIA', 'leomclloyd77@gmail.com', '0248163963', 'I&amp;acirc;€™M A GHANAIAN AND CHRISTIAN. A YOUNG AMBITIOUS AND DETERMINE MAKEUP ARTIST,STYLIST AND CONTENT CREATOR WHO INTERPRET ART IN DIVERSE WAYS THROUGH ART,FASHION AND CULTURE AND DESIRES TO TAKE AFRICA TO THE WORLD. I&amp;acirc;€™M A LOVER OF MUSIC', 'Da_therapizt', 'Datherapizt', '', 'DATHERAPIZT', 'THE BRAND DATHERAPIZT IS 3 YEARS. WE SPECIALIZE IN MAKEUP, BEAUTY THERAPY, HAIRSTYLING, STYLING AND CREATING ARTISTIC CONTENT.', 'Da_therapizt', 'DATHERAPIZT', '', 'DATHERAPIZT', '0248163963', 'leomclloyd77@gmail.com', 'DIVINITY', 'https://www.instagram.com/p/CUvjSFBjP16/?utm_medium=copy_link', 'IT TAKES ABOUT THE LIGHT IN US AS HUMAN AND THE FACT THAT WE HAVE TO ALSO AFFECT PEOPLE AROUND US WITH WHAT WE HAVE INSIDE', 'Esther 2:17', 'https://www.instagram.com/p/CUXTOKTMhKU/?utm_medium=copy_link', 'IT TALKS  ABOUT ESTHER WHERE THE KING LOVED HER ABOVE ALL THE WOMEN AND OBTAINED GRACE AND FAVOR IN HIS SIGHT', 'THE NEW AFRICA', 'https://www.instagram.com/p/CTkNXe4jaIP/?utm_medium=copy_link', 'It&amp;acirc;€™s perceived and accepted that makeup especially eyebrows should follow a style,groove and pattern. But if not done so, will you still shine?', '1949282648', '2021-10-14 17:37:45');

-- ----------------------------
-- Table structure for general_nomination
-- ----------------------------
DROP TABLE IF EXISTS `general_nomination`;
CREATE TABLE `general_nomination` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `contact1` varchar(255) DEFAULT NULL,
  `contact2` varchar(255) DEFAULT NULL,
  `contact3` varchar(255) DEFAULT NULL,
  `contact4` varchar(255) DEFAULT NULL,
  `contact5` varchar(255) DEFAULT NULL,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of general_nomination
-- ----------------------------
INSERT INTO `general_nomination` VALUES ('1', 'Most Promising Barber', 'George Kwame DOGBE', 'omegaunisex@gmail.com', '+233243561773', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'gkwame47', 'George Quame George', '', 'George Kwame Dogbe, Omega Unisex Salon, Nungua Old Town, +233243561773, omegaunisex@gmail.com.', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '1c41a828578c16a1e9d306', '2021-09-22 22:22:49');
INSERT INTO `general_nomination` VALUES ('2', 'Most Promising Barber', 'George Kwame DOGBE', 'omegaunisex@gmail.com', '+233243561773', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'gkwame47', 'George Quame George', '', 'George Kwame Dogbe, Omega Unisex Salon, Nungua Old Town, +233243561773', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '021c994843df017c3199f5', '2021-09-22 22:41:14');
INSERT INTO `general_nomination` VALUES ('3', 'Most Promising Barber', 'George Kwame  Dogbe', 'omegaunisex@gmail.com', '0243561773', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'gkwame47', 'George Quame George', '', 'George Kwame Dogbe, Nungua Old Town , 0243561773,', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'omegaunisex', 'omega Unisex Salon', '', '', '', '', '', '', '', '', '', 'dde3d6194b5ac9489110e2', '2021-09-22 22:47:06');
INSERT INTO `general_nomination` VALUES ('4', 'Most Promising Barber', 'George Kwame Dogbe', 'omegaunisex@gmail.com', '0243561773', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'gkwame47', 'George Quame George', '', 'George Kwame Dogbe', 'Role: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mecha', 'omegaunisex', 'Omega Unisex salon', '', '', '', '', '', '', '', '', '', '6923c2a760df8be3a2a853', '2021-09-22 22:53:03');
INSERT INTO `general_nomination` VALUES ('5', 'Barber of the Year', 'Bernard Joachim  Dzordzi', 'jorji.bs.bj@gmail.com', '0558200640', 'God fearing, ambitious gentleman aspiring to build the biggest barbering brand through hard work and consistency.', 'dzordzi_elorm', 'Dzordzi Elorm', '', 'Jorji Barbering Salon', 'Jorji barbering salon is a professional grooming Center providing quality services in a friendly environment. We envisage the biggest barbering brand in Ghana by training other professionals and introducing quality products.', 'Jorji_barbering_salon', 'Jorji barbering salon', 'Jorji Barbering Salon would love your feedback. Post a review to our profile. https://g.page/r/CW6_wuqOAOPNEAo/review', '', '', '', '', '', '', '', '', 'c4218a891c39a658d2cc3b', '2021-09-23 12:11:10');
INSERT INTO `general_nomination` VALUES ('6', 'Most Promising Barber', 'George Kwame  Dogbe', 'omegaunisex@gmail.com', '0243561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', 'George Kwame Dogbe', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '76606ff19d476f902f1340', '2021-09-23 13:13:10');
INSERT INTO `general_nomination` VALUES ('7', 'Most Promising Barber', 'George Kwame  Dogbe', 'omegaunisex@gmail.come', '0243561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', 'George Kwame Dogbe, Nungua Old Town Nuumo Borketey Lawerh Road. 0243561773, omegaunisex@gmail.com', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'Omegaunisex', 'Omega Unisex Salon', '', '', '', '', '', '', '', '', '', '1dd954b6ab260812d77aaa', '2021-09-23 13:34:24');
INSERT INTO `general_nomination` VALUES ('8', 'Most Promising Barber', 'George  Dogbe', 'omegaunisex@gmail.com', '+233 24 356 1773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)', 'gkwame47', 'George Quame George', '', 'George Dogbe', 'Ultimate Goal\nThe ultimate goal of Mr. Dogbe is to ensure that, standards of practice and regulatory mechanism for the industries is installed.\nAchievements\n&amp;acirc;€&amp;cent; He played a major role in manual and curriculum development for the industr', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '59c3c660769d1a6c3cc7a8', '2021-09-23 16:42:54');
INSERT INTO `general_nomination` VALUES ('9', 'Most Promising Barber', 'George Kwame Dogbe', 'omegaunisex@gmail.com', '0243561773', 'George has secured a steady clientele throughout the years who appreciate his keen sense of style. His willingness to stay current with new barbershop phases and trends, as well as his ability to also remain true to the classic cuts bodes well for anyone ', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '45f38729d7fba83fe5188e', '2021-09-23 17:53:35');
INSERT INTO `general_nomination` VALUES ('10', 'Most Promising Barber', 'George Kwame DOGBE', 'omegaunisex@gmail.com', '0243561773', 'George Kwame Dogbe is a young Ghanaian, a Barber and an Entrepreneur.\nRole: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of M', 'gkwame47', 'Omega unisex salon', '', 'George Kwame DOGBE', 'George Kwame Dogbe is a young Ghanaian, a Barber and an Entrepreneur.\nRole: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of M', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '42bd1d1c41d4a66f17ede1', '2021-09-24 08:30:09');
INSERT INTO `general_nomination` VALUES ('12', 'Most Promising Barber', 'George Kwame DOGBE', 'omegaunisex@gmail.com', '0244561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', '', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole: \nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n\nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '8a276a4b21aeff5d4270c5', '2021-09-24 20:38:05');
INSERT INTO `general_nomination` VALUES ('13', 'Most Promising Barber', 'George  Kwame Dogbe', 'omegaunisex@gmail.com', '0243561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', 'Omega Unisex Salon, Nungua Old Town. 0243561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '0364c7333344f78f227d71', '2021-09-25 22:12:03');
INSERT INTO `general_nomination` VALUES ('14', 'Most Promising Barber', 'George  Kwame Dogbe', 'omegaunisex@gmail.com', '0243561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', '', '', 'George Kwame Dogbe', '', 'gkwame47', '', '', '', '', '', '', '', '', '', '', '84de080b725499b448a529', '2021-09-25 22:22:57');
INSERT INTO `general_nomination` VALUES ('15', 'Most Promising Barber', 'George  Kwame Dogbe', 'omegaunisex@gmail.com', '0243561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', 'George Kwame Dogbe 0243561773', 'George Kwame Dogbe is a young Ghanaian, a barber and entrepreneur.\nRole:\nMr Dogbe is the CEO of OMEGA UNISEX SALON and the National Secretary of the Ghana Association of Barbers and Barbering Salon Owners {GABBSO)\n \nUltimate Goal\nThe ultimate goal of Mr. ', 'gkwame47', 'George Quame George', '', '', '', '', '', '', '', '', '', '84de080b725499b448a529', '2021-09-25 22:25:54');
INSERT INTO `general_nomination` VALUES ('16', 'Beauty Entrepreneur of the Year', 'Portia Gyeni-Boateng', 'kinsdaryl@yahoo.com', '+233 249138826', 'Multiple award winning entrepreneur , Portia Gyeni-Boateng is a young and vibrant cosmetic and beauty advocate. Rising from an ordinary makeup artist in 2013 to the Excutive Director of one Ghana&amp;acirc;€™s biggest owned private makeup brands ( CUTIEBR', '@cutie_inspires', 'Portia Gyeni Boateng', '', 'Cutiebridal', 'CUTIEBRIDAL was established in 2013 in Accra Ghana by Miss Portia Gyeni-Boateng who is a certified makeup artist and a licensed beauty facilitator from Rapheal Oliver in Sao Paola Brazil and a trainer of several Ghana beauty programs in Ghana. CUTIEBRIDAL', '@cutiebridal_gh', 'Cutiebridal_gh', '', '', '', '', '+233 26 611 6925', '+233 57 190 1526', '+233 26 218 1829', '', '', '43785d0be0812fe6a0d038', '2021-10-03 20:28:39');
INSERT INTO `general_nomination` VALUES ('20', 'People`s Choice Award', 'Portia Gyeni-Boateng', 'kinsdaryl@yahoo.com', '+233 249138826', 'Multiple award winning entrepreneur , Portia Gyeni-Boateng is a young and vibrant cosmetic and beauty advocate. Rising from an ordinary makeup artist in 2013 to the Excutive Director of one Ghana&amp;acirc;€™s biggest owned private makeup brands ( CUTIEBR', '@cutie_inspires', 'Portia Gyeni-Boateng', '', 'CUTIEBRIDAL &amp;amp; ASPIRE INSTITUTE OF ARTS AND VOCATIONAL STUDIES', 'CUTIEBRIDAL is a fully certified and experienced beauty brand that specializes in taking account of ideas and desires to create a CUTE FLAWLESS AND RADIANT LOOK Cutiebridal has touched over 600 faces with majority been brides . With our consistent skills ', '@cutiebridal_gh @aiavs_gh', 'Cutiebridal_gh Aiavs', '', '', '', '', '', '', '', '', '', '64783adfedc9f8ea71d765', '2021-10-04 09:27:09');
INSERT INTO `general_nomination` VALUES ('19', 'People`s Choice Award', 'Regina Baah-Mante', 'cordial@mobilecontent.com.gh', '0540116637', 'xyz', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cc778820dffa4b400da879', '2021-10-04 08:55:52');
INSERT INTO `general_nomination` VALUES ('21', 'Discovery of the Year', 'Kareena Amoah', 'kareenaamoah@gmail.com', '0247651870', 'A 29year old young lady who holds a Bachelor of Arts degree in Business Studies from the University for Development studies(UDS-Wa Campus). I believe makeup is only a fashion statement someone can have.', '18_70_makeover', '18_70_makeover', '', '18_70_makeover', 'My 18_70_makeover started as just a hobby, over the period the drive to make many friends smile on their special days brought forth this company. Started full time service provision in 2017 in Takoradi and moved to Accra in the late 2018. There has been a', '18_70_makeover', '18_70_mskeover', '', '', '', '', '', '', '', '', '', 'abe243d1ec1a98574c20d2', '2021-10-04 14:32:44');
INSERT INTO `general_nomination` VALUES ('22', 'Discovery of the Year', 'Kareena Amoah', 'kareenaamoah@gmail.com', '0247651870', 'A 29year old young lady who holds a Bachelor of Arts degree in Business Studies from the University for Development studies(UDS-Wa Campus). I believe makeup is only a fashion statement someone can have.', '18_70_makeover', '18_70_makeover', '', '18_70_makeover', 'My 18_70_makeover started as just a hobby, over the period the drive to make many friends smile on their special days brought forth this company. Started full time service provision in 2017 in Takoradi and moved to Accra in the late 2018. There has been a', '18_70_makeover', '18_70_mskeover', '', '', '', '', '', '', '', '', '', 'abe243d1ec1a98574c20d2', '2021-10-04 14:32:46');
INSERT INTO `general_nomination` VALUES ('23', 'Discovery of the Year', 'Kareena Amoah', 'kareenaamoah@gmail.com', '0247651870', '29years of age, a Bachelor of Arts degree holder in Business Studies from the University for Development studies(UDS-Wa Campus). I believe makeup is only a fashion statement someone can have.', 'Iam_Kareena', 'Kareena Amoah', '', '18_70_makeover', 'My 18_70_makeover started as just a hobby, over the period the drive to make many friends smile on their special days brought forth this company. Started full time service provision in 2017 in Takoradi and moved to Accra in the late 2018. There has been a', '18_70_makeover', '18_70_makeover', '', '', '', '', '', '', '', '', '', 'f54a38e0bcc07600ce689d', '2021-10-04 15:31:07');
INSERT INTO `general_nomination` VALUES ('24', 'Discovery of the Year', 'Kareena Amoah', 'kareenaamoah@gmail.com', '0247651870', '29years of age, a Bachelor of Arts degree holder in Business Studies from the University for Development studies(UDS-Wa Campus). I believe makeup is only a fashion statement someone can have.', 'Iam_Kareena', 'Kareena Amoah', '', '18_70_makeover', 'My 18_70_makeover started as just a hobby, over the period the drive to make many friends smile on their special days brought forth this company. Started full time service provision in 2017 in Takoradi and moved to Accra in the late 2018. There has been a', '18_70_makeover', '18_70_makeover', '', '', '', '', '', '', '', '', '', 'f54a38e0bcc07600ce689d', '2021-10-04 15:31:09');
INSERT INTO `general_nomination` VALUES ('25', 'Beauty Entrepreneur of the Year', 'Saida Mariam Haruna', 'seidaharuna@gmail.com', '05555949752', 'B', 'Seysglow', 'Seysglow', '', 'Seysglow', 'Ghanaian makeup artist', 'Seysglow', 'Seysglow', '', '', '', '', '0273034812', '0555949751', 'O', '', '', 'b18fdfefc75b4156743c7a', '2021-10-05 17:35:47');
INSERT INTO `general_nomination` VALUES ('26', 'Barber of the Year', 'Andrews Asare', 'andyasare.54@gmail.com', '0557414123', 'Andrews is a Professional Barber with 10years Experience, \nHe has a foundation that&amp;acirc;€™s help train barbers and give them place to work, and also visit Orphanage homes,\nHe the first barber to host Ghana Barber summit in Accra with American Top Ba', 'andisbarber1', 'Andis barber', 'www.andisbarber.com', 'Active barbershop', 'Andrews known as Andisbarber1 have 4 branches here in Accra\nAnd have 8 Employees,\nYou locate us at Fadama,legon campus, bushcanten,Penthostel', 'ghactivebarbers', 'GH Active Barber', '', '', '', '', '', '', '', '', '', '11c1fd3fc6cb399634e125', '2021-10-05 18:32:57');
INSERT INTO `general_nomination` VALUES ('27', 'Beauty Entrepreneur of the Year', 'Sylvia  Djanie', 'hairbureaugh18@gmail.com', '242308376', 'We are a healthy hair care entity for  everyone but with our main focus on children.', '@hairbureaugh', 'Hairbureaugh', '', 'Hairbureaugh', 'We are a healthy hair studio where we empower everyone but with our focus on children how to keep and maintain healthy hair practices. Our services include \n1.Hair care consultation for individuals and businesses\n2. Sale of quality hair products and hair ', 'Hairbureaugh', 'Hairbureaugh', '', '', '', '', '0242308376', '0240181387', '0503605759', '', '', 'cc29647bff6a950cb206c4', '2021-10-06 07:18:22');
INSERT INTO `general_nomination` VALUES ('28', 'Beauty Entrepreneur of the Year', 'Sylvia  Djanie', 'hairbureaugh18@gmail.com', '242308376', 'We are a healthy hair care entity for  everyone but with our main focus on children.', '@hairbureaugh', 'Hairbureaugh', '', 'Hairbureaugh', 'We are a healthy hair studio where we empower everyone but with our focus on children how to keep and maintain healthy hair practices. Our services include \n1.Hair care consultation for individuals and businesses\n2. Sale of quality hair products and hair ', 'Hairbureaugh', 'Hairbureaugh', '', '', '', '', '0242308376', '0240181387', '0503605759', '', '', 'cc29647bff6a950cb206c4', '2021-10-06 07:18:25');
INSERT INTO `general_nomination` VALUES ('29', 'Beauty Entrepreneur of the Year', 'Sylvia  Djanie', 'hairbureaugh18@gmail.com', '242308376', 'We are a healthy hair care entity for  everyone but with our main focus on children.', '@hairbureaugh', 'Hairbureaugh', '', 'Hairbureaugh', 'We are a healthy hair studio where we empower everyone but with our focus on children how to keep and maintain healthy hair practices. Our services include \n1.Hair care consultation for individuals and businesses\n2. Sale of quality hair products and hair ', 'Hairbureaugh', 'Hairbureaugh', '', '', '', '', '0242308376', '0240181387', '0503605759', '', '', 'cc29647bff6a950cb206c4', '2021-10-06 07:18:38');
INSERT INTO `general_nomination` VALUES ('30', 'Spa and Wellness Center', 'Gifty Fuachie', 'giftyefiafuachie@gmail.com', '+233244636427', 'Gifty Fuachie is a young business and industrious lady that is making waves in the business cycle with the success and achievements in her line of businesses. She is passionate and very focused which has brought about the level of success being achieved.', '', '', 'www.torysskincare.com', 'Tory\'s Skincare and Wellness Spa', 'Tory\'s Skincare and Wellness Spa has a comprehensive array of services and products that are targeted at giving the customer an experience of total satisfaction. The ambiance of the spa is carefully designed to bring healing of the soul to it\'s cherished ', 'Torysskincare', '', 'www.torysskincare.com', '', '', '', '+233244729229', '+233246190078', '+233202432075', '+233200850528', '+233246994005', 'e0f30bd72c9fda0cac9ff7', '2021-10-10 18:13:01');
INSERT INTO `general_nomination` VALUES ('31', 'Discovery of the Year', 'Elizabeth Nkrumah', 'lisaopare10@gmail.com', '0242134180', 'Elizabeth Nkrumah is an entrepreneur, a hard working lady, who is persistent, creative, risk taker and lovely.', 'kayneds_essentials_', 'Kayneds essentials', '', 'Kayneds essentials', 'Kayneds essentials is a makeup and hair artistry. Geared towards providing subtle flawless long wearing makeup matching every skin tone and a hairstyle to compliment clients beauty needs.', 'Kayneds_essentials_', 'Kayneds essentials', '', '', '', '', '', '', '', '', '', '7d625b29c101cfa682da2c', '2021-10-12 12:05:37');
INSERT INTO `general_nomination` VALUES ('32', 'Nail Technician of the Year', 'Baaba Yorke', 'nailsgeekgh@gmail.com', '0509480183', '', '_nails_geek', 'nails_geek', '', 'Nails Geek', '', '_nails_geek', '_nails_geek', '', '', '', '', '', '', '', '', '', '4b812206b8dc1e91033127', '2021-10-12 12:15:37');
INSERT INTO `general_nomination` VALUES ('33', 'Nail Technician of the Year', 'Baaba Yorke', 'nailsgeekgh@gmail.com', '0509480183', '', '_nails_geek', 'Nails_geek', '', 'Nails Geek', '', '_nails_geek', 'Nails_geek', '', '', '', '', '', '', '', '', '', 'a0bdacac80476afc0cc6d5', '2021-10-12 12:51:03');
INSERT INTO `general_nomination` VALUES ('34', 'Best Salon/Studio', 'Serwah Akoto', 'prikelshairltd@gmail.com', '0248442316', 'Serwah Akoto is the CEO and founder of Prikel\'s Hair Ltd. An Entrepreneur and woman advocate who aims at enhancing and encouraging the inner beauty of other women and believes in doing this through the hair industry. She is a specialized Frontal Lace Expe', 'Serwahakoto_', 'Hair Boss Gh', 'www.prikelshair.com', 'Prikel&amp;acirc;€™s Hair Ltd', 'We are devoted to providing the highest quality Lace Frontals and Premium raw and virgin hair to all insightful and quality conscious women across the continent.\nWe have been in the industry for almost 5 years now and have evolved successfully over the ye', 'Prikelshairltd', 'Prikels hair lounge &amp;amp;spa', 'www.prikelshair.com', '', '', '', '+233Â 50Â 562Â 4839', '+233Â 24Â 886Â 5823', '+233Â 50Â 760Â 7959', '054Â 029Â 1137', '+233Â 24Â 552Â 1259', 'd811f0244ead5fe7bf639b', '2021-10-12 17:08:09');
INSERT INTO `general_nomination` VALUES ('35', 'Beauty Entrepreneur of the Year', 'Ann-Marie Ofei-Kwatia', 'shopbeautybooth@gmail.com', '0557338797', 'A young entrepreneur who is passionate about bringing authentic and affordable skincare and beauty products to Ghanaians across the country. In a short time of existence, Ann-Marie has been able to build a brand that has top of mind awareness among skinca', '@Shopbeautyboothgh', '', '', 'Shopbeautyboothgh', 'Shopbeautybooth was conceived at a time of clamor for not only authentic skincare and makeup products from all over the world by Ghanaians, but also ones they could get at very affordable prices. Out of this demand, Shopbeautybooth was birthed in 2017 as ', '@Shopbeautyboothgh', '', '', '', '', '', 'Benjamin Joe Danso - 0242035685', 'Michael Fianko - 0243200950', 'David Atta - 0543255810', '', '', '248e8b61f351cbccab6aaf', '2021-10-12 20:29:42');
INSERT INTO `general_nomination` VALUES ('36', 'Discovery of the Year', 'Ann-Marie Ofei-Kwatia', 'shopbeautybooth@gmail.com', '0557338797', 'A young entrepreneur who is passionate about bringing authentic and affordable skincare and beauty products to Ghanaians across the country. In a short time of existence, Ann-Marie has been able to build a brand that has top of mind awareness among skinca', '@Shopbeautyboothgh', '', '', 'Shopbeautyboothgh', 'Shopbeautybooth was conceived at a time of clamor for not only authentic skincare and makeup products from all over the world by Ghanaians, but also ones they could get at very affordable prices. Out of this demand, Shopbeautybooth was birthed in 2017 as ', '@Shopbeautyboothgh', '', '', '', '', '', '', '', '', '', '', '57f930e1800ecf06b98e64', '2021-10-12 20:32:07');
INSERT INTO `general_nomination` VALUES ('37', 'People`s Choice Award', 'Ann-Marie Ofei-Kwatia', 'shopbeautybooth@gmail.com', '0557338797', 'A young entrepreneur who is passionate about bringing authentic and affordable skincare and beauty products to Ghanaians across the country. In a short time of existence, Ann-Marie has been able to build a brand that has top of mind awareness among skinca', '@Shopbeautyboothgh', '', '', 'Shopbeautyboothgh', 'Shopbeautybooth was conceived at a time of clamor for not only authentic skincare and makeup products from all over the world by Ghanaians, but also ones they could get at very affordable prices. Out of this demand, Shopbeautybooth was birthed in 2017 as ', '@Shopbeautyboothgh', '', '', '', '', '', '', '', '', '', '', 'c14e55c3a1d97c243d9adc', '2021-10-12 20:36:11');
INSERT INTO `general_nomination` VALUES ('38', 'Best Customer Service Experience', 'Ann-Marie Ofei-Kwatia', 'shopbeautybooth@gmail.com', '0557338797', 'A young entrepreneur who is passionate about bringing authentic and affordable skincare and beauty products to Ghanaians across the country. In a short time of existence, Ann-Marie has been able to build a brand that has top of mind awareness among skinca', '@Shopbeautyboothgh', '', '', 'Shopbeautyboothgh', 'Shopbeautybooth was conceived at a time of clamor for not only authentic skincare and makeup products from all over the world by Ghanaians, but also ones they could get at very affordable prices. Out of this demand, Shopbeautybooth was birthed in 2017 as ', '@Shopbeautyboothgh', '', '', '', '', '', 'Precious Boakye - 0209099795', 'Sara-Michelle Mills - 0500408604', 'Mufidah Mukhtar - 0202174341', 'Abena Nyantakyi - 0244388251', 'Anne-Marie Amissah - 0500026842', '0c4728bb50f4ac81f555ec', '2021-10-12 20:42:41');
INSERT INTO `general_nomination` VALUES ('39', 'Best Customer Service Experience', 'Sophia  Boatemaa Boateng', 'sophia2g2@yahoo.com', '0243849598', 'Sophia boatemaa Boateng is a graduate of Central university and founder of Bibibeautystore \n\nStarting Bibibeautystore though challenging came naturally considering the experience from family background of entrepreneurs\n\nShe is strong-willed and achieves h', 'bibibeautystore', 'Bibibeautystore', '', 'Bibibeautystore', 'Bibibeautystore is the premier beauty destination for makeup, skin care products, fragrances and beauty accessories located at Darkuman. Though our location is in a high-volume area, we are currently the only high-end beauty supply store in the community ', 'Bibibeautystore', 'Bibibeautystore', '', '', '', '', '0242709930', '0209136860', '0554922453', '0242025167', '0243755350', 'ebd1e43b52604e26294067', '2021-10-13 10:52:33');
INSERT INTO `general_nomination` VALUES ('40', 'Beauty Entrepreneur of the Year', 'Stephanie Adu', 'stephanieadu@colorboxcosmetics.com', '+233540590618', 'Stephanie&amp;acirc;€™s experience within the beauty industry spans across 14 years, and Colorbox Cosmetics was created following a degree in Biomedical sciences and a career in investment banking. \nStephanie is now passionate about empowering female entr', 'stephaniemudikongo', '', 'www.colorboxcosmetics.com', 'Colorbox Cosmetics Limited', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. They are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no', 'colorboxcosmetics', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', '', '', '', 'Prince Fara Sarr (Business Manager) - +233206712856', 'Grace Johnson (Business Associate) - +233546979861', 'Hillary Baidoo (CRO) - +233558347300', '', '', '8b2d3f2440874f67cd1cc9', '2021-10-13 12:21:42');
INSERT INTO `general_nomination` VALUES ('41', 'People`s Choice Award', 'Stephanie Adu', 'stephanieadu@coloboxcosmetics.com', '+233540590618', 'Stephanie&amp;acirc;€™s experience within the beauty industry spans across 14 years, and Colorbox Cosmetics was created following a degree in Biomedical sciences and a career in investment banking. \nStephanie is now passionate about empowering female entr', 'stephaniemudikongo', '', '', 'Colorbox Cosmetics Limited', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. They are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no', 'colorboxcosmetics', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', '', '', '', '', '', '', '', '', 'a4a73fc626387007081cc1', '2021-10-13 12:28:41');
INSERT INTO `general_nomination` VALUES ('42', 'Beauty Entrepreneur of the Year', 'Martha Asare', 'yaamartha76@gmail.com', '+1 (630) 703-3451', 'Martha is a Ghanaian-US based beauty entrepreneur. With over 20years experience in hair braiding and Beauty Supply Martha is the 1st African to own the 1st and biggest braiding and beauty Supply shop in bolingbrook, Chicago with over 15 Professional braid', 'martha_beauty_supply_illinois', 'Martha Asare', '', 'Martha\'s Beauty Supply International', 'Martha\'s Beauty Supply International \nMartha\'s Braiding shop.\n\nMartha is a Ghanaian-US based beauty entrepreneur. With over 20years experience in hair braiding and Beauty Supply Martha is the 1st African to own the 1st and biggest braiding and beauty Supp', '@marthasbeautysupplynbraiding @coneprofessionalmakeup_gh @marthasbeautysupply_gh', '', 'www.marthasbeautysupply.us', '', '', '', '0545480638', '0552496991', '0242145906', '', '', 'eb8d64f31c00de46fc188e', '2021-10-13 12:41:02');
INSERT INTO `general_nomination` VALUES ('43', 'People`s Choice Award', 'Polish&amp;acirc;€™d  Beauty Bar', 'polishdgh@gmail.com', '0208916401', 'Polish&amp;acirc;€™d Nail + Beauty Bar is a luxury Unisex Nail Bar in Labone, and East Legon! The beauty havens mission is to deliver unparalleled nail care in a clean,safe and chic atmosphere. At Polish&amp;acirc;€™d Nail Bar, customer satisfaction is ou', 'polishdbeautybargh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'bff4a3cbc23687d36e71f2', '2021-10-13 13:01:49');
INSERT INTO `general_nomination` VALUES ('44', 'Discovery of the Year', 'Yasmine Kamagate', 'yasminekamagate.yk@gmail.com', '0200390557', 'Hey! I\'m Yasmine. I love makeup and all the fun it comes with. To me makeup is not about changing your entire look but enhancing your facial features to make you look the best version &amp;Acirc;&amp;nbsp;of yourself.\n&amp;Acirc;&amp;nbsp;\nIt is exploring', '', '', '', 'Remaynne', 'Remaynne aims for natural and luxurious looks that make our brides stand out on their big day and leaves them grinning from ear to ear. \nAt Remaynne, we are a family of satisfied and happy brides.', 'Remaynne', 'Remaynne', '', '', '', '', '', '', '', '', '', '556cb15bc9b206c32c765d', '2021-10-13 13:37:25');
INSERT INTO `general_nomination` VALUES ('45', 'Best Customer Service Experience', 'Sophia  Boatemaa Boateng', 'sophia2g2@yahoo.com', '0243849598', 'Sophia boatemaa Boateng is a graduate of Central university and founder of Bibibeautystore \n\nStarting Bibibeautystore though challenging came naturally considering the experience from family background of entrepreneurs\n\nShe is strong-willed and achieves h', 'Bibibeautystore', 'Maame boatemaa', '', 'Bibibeautystore', 'Bibibeautystore is the premier beauty destination for makeup, skin care products, fragrances and beauty accessories located at Darkuman. Though our location is in a high-volume area, we are currently the only high-end beauty supply store in the community ', 'Bibibeautystore', 'Bibibeautystore', '', '', '', '', '0242709930', '0209136860', '0554922453', '0242025167', '0243755350', '5518d19750c1c914bce233', '2021-10-13 15:10:33');
INSERT INTO `general_nomination` VALUES ('46', 'Best Customer Service Experience', 'Colorbox Cosmetics', 'info@colorboxcosmetics.com', '+233502734866', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. They are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no', 'colorboxcosmetics.com', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', 'Colorbox Cosmetics Limited', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. They are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no', 'colorboxcosmetics', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', '', '', '', 'Naa Oboshie +233501189753', 'Firdaus Abubakar +233241152639', 'Vanessa Barbara +233243364667', 'CylviAnn +233502080532', 'Andy +233501218749', 'e93521b47a4694f0ff9ec0', '2021-10-13 15:19:48');
INSERT INTO `general_nomination` VALUES ('47', 'Beauty Entrepreneur of the Year', 'Stephanie Adu', 'stephanieadu@colorboxcosmetics.com', '+233540590618', 'Stephanie&amp;acirc;€™s experience within the beauty industry spans across 14 years, and Colorbox Cosmetics was created following a degree in Biomedical sciences and a career in investment banking. \nStephanie is now passionate about empowering female entr', 'stephaniemudikongo', '', '', 'Colorbox Cosmetics Limited', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. They are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no', 'colorboxcosmetics', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', '', '', '', 'Prince Fara Sarr (Business Manager)  +233206712856', 'Grace Johnson (Business Associate) +233546979861', 'Hillary Baidoo  (CRO) +233558347300', '', '', '5c9651c03754551a7b594a', '2021-10-13 15:32:31');
INSERT INTO `general_nomination` VALUES ('48', 'Discovery of the Year', 'Boatemaa  Emmanuella', 'emmanuella.boatemaa94@gmail.com', '0561339275', 'Emmanuella Boatemaa is the brains or face behind Bella Makeover.At a young age of 24,I have been able to reach a lot stones in my career as a makeup artist.I&amp;acirc;€™m a SLOPSAN and still claiming the academic ladder.I am innovative talented and disci', 'Bella__Makeover', 'Boatemaa Emmanuella', '', 'Bella Makeover', 'Bella&amp;acirc;€™s make over is a brand known for outstanding artworks in make up. December, 2018 saw the birth of Bella&amp;acirc;€™s makeover as a brand. Over the years the brand has built a strong clientele base of over a one hundred people. Our brand', 'Bella__Makeover', 'Bella__Makeover', '', '', '', '', '', '', '', '', '', '8ef94b1b2c306f064a3eb4', '2021-10-13 18:27:18');
INSERT INTO `general_nomination` VALUES ('49', 'Discovery of the Year', 'Boatemaa  Emmanuella', 'emmanuella.boatemaa94@gmail.com', '0561339275', 'Emmanuella Boatemaa is the brains or face behind Bella Makeover.At a young age of 24,I have been able to reach a lot stones in my career as a makeup artist.I&amp;acirc;€™m a SLOPSAN and still claiming the academic ladder.I am innovative talented and disci', 'Bella__Makeover', 'Boatemaa Emmanuella', '', 'Bella Makeover', 'Bella&amp;acirc;€™s make over is a brand known for outstanding artworks in make up. December, 2018 saw the birth of Bella&amp;acirc;€™s makeover as a brand. Over the years the brand has built a strong clientele base of over a one hundred people. Our brand', 'Bella__Makeover', 'Bella__Makeover', '', '', '', '', '', '', '', '', '', '8ef94b1b2c306f064a3eb4', '2021-10-13 18:27:20');
INSERT INTO `general_nomination` VALUES ('50', 'Best Customer Service Experience', 'WINNIE ADJEI', 'afiasika200@yahoo.com', '0242915621', 'Winnie Adjei-Addo is an accountant by profession and is curently the Finance and Admin Manager of Juben House of Beauty. Having gathered more than 10 years of  experince in her line of duty, she has become one of the finest business professionals.', 'akumandela', 'afiamandela', '', 'JUBEN HOUSE OF BEAUTY', 'Juben House of Beauty is Ghana&amp;acirc;€™s leading beauty retailer for high quality and innovative beauty solutions. An award-winning beauty haven, which strives to\nrevolutionise the Ghanaian beauty industry by offering the world&amp;acirc;€™s best bran', 'jubenhseofbeauty', '', 'jubenbeauty.com', '', '', '', '0242915621', '0242915621', '0242915621', '0242915621', '0242915621', '9eeca1fe8f47200b855ee8', '2021-10-13 18:36:01');
INSERT INTO `general_nomination` VALUES ('51', 'Discovery of the Year', 'Akosua Okyerewa Ofosu', 'akosuaofosu4@gmail.com', '0573503277', 'I am a young and hardworking  lady who&amp;acirc;€™s passionate about everything relating to beauty. I&amp;acirc;€™m on a mission to add great value to the beauty industry in Ghana and the world at large.', '', 'Akosua Okyerewaa', '', 'Garnet Aesthetic', 'Garnet Aesthetic is primarily a makeup service brand that seeks to create luxurious skin centered looks suitable for every woman. Beauty, Elegance and Radiance are the values we promise to every one of our clients.', 'garnet__aesthetic', 'Garnet Aesthetic', '', '', '', '', '', '', '', '', '', 'cbc4b538d746d0081fd52f', '2021-10-13 20:21:29');
INSERT INTO `general_nomination` VALUES ('52', 'Discovery of the Year', 'Akosua Okyerewa Ofosu', 'akosuaofosu4@gmail.com', '0573503277', 'I am a young and hardworking lady who is passionate about everything relating to beauty. I am on a mission to add great value to the beauty industry in Ghana and the world at large.', '', 'Akosua Okyerewaa', '', 'Garnet Aesthetic', 'Garnet Aesthetic is primarily a makeup service brand that seeks to create luxurious skin centered looks suitable for every woman. Beauty, Elegance and Radiance are the values we promise to every one of our clients.', 'garnet__aesthetic', 'Garnet Aesthetic', '', '', '', '', '', '', '', '', '', '1f6001d3bb8792cdf30f8d', '2021-10-13 20:36:49');
INSERT INTO `general_nomination` VALUES ('53', 'Beauty Entrepreneur of the Year', 'Lordgreat Mawunyo', 'rexmerlo@gmail.com', '0543645688', '', '', '', '', 'Mobilecontent ltd', '', '', '', '', '', '', '', '22', '22', '22', '', '', '40c2c2032528557d1b175c', '2021-10-13 20:52:16');
INSERT INTO `general_nomination` VALUES ('54', 'Best Salon/Studio', 'Joana  Asiedu', 'joana_asiedu@yahoo.com', '0242601165', 'Passion driven to a go-getter.  Believes in self improvement and ever ready to teach others. A wife and a mother to a beautiful girl. A Christian who loves the Lord with all her heart. Nursing background now a business woman.', 'Jfrimps', 'Joana Asiedu', '', 'Silverhair salon and spa', 'Beauty salon that specializes in braids and offers other services like wig making, nails, spa and training. We are known for our unique way of braiding and how versatile we are. Located at Madina new road opposite Presec.', 'Silverhairgh', 'Silverhair unisex spa', 'Www.silverhairgh.com', '', '', '', '+233 20 906 3000', '+233 50 339 4199', '+233 24 079 0784', '050 951 9062', '+233 50 208 0206', 'b8512bc666bf0d40972843', '2021-10-13 20:58:39');
INSERT INTO `general_nomination` VALUES ('55', 'Best Customer Service Experience', 'Winnie Adjei-Addo', 'afiasika200@yahoo.com', '0242915621', 'Winnie Adjei-Addo is an accountant by profession and is currently the Finance and Admin Manager of Juben House of Beauty. Having gathered more than 10 years of experience in her line of duty, she has become one of the finest business professionals', 'akumandela', 'afiamandela', '', 'Juben House of Beauty', 'Juben House of Beauty is Ghana&amp;acirc;€™s leading beauty retailer for high quality and innovative beauty solutions. An award-winning beauty haven, which strives to\nrevolutionise the Ghanaian beauty industry by offering the world&amp;acirc;€™s best bran', 'jubenhseofbeauty', '', 'jubenbeauty.com', '', '', '', '0552023739', '0501259909', '0246667699', '0242908885', '0558374161', '9bd2753e95340c7d27595c', '2021-10-13 22:18:03');
INSERT INTO `general_nomination` VALUES ('56', 'Discovery of the Year', 'Zara Ibrahim Tanko', 'znasara18@gmail.com', '0249569108', 'Zara Nasara Ibrahim-Tanko is a Professional Makeup Artist based in Accra. With a little over two years experience in the Ghanaian makeup industry, through passion, hard work and consistency she has been able to grow and establish herself and her business ', 'Slaybyzara', 'Slaybyzara', '', 'Slaybyzara Beauty', 'At Slaybyzara Beauty, we provide impeccable beauty solutions tailored to each client to celebrate their femininity through timeless, sultry glam. We aim to enhance, educate and serve the woman with an eye quality in Ghana and beyond.', 'Slaybyzara', 'Slaybyzara', '', '', '', '', '', '', '', '', '', '28d1079301425e6f4b64eb', '2021-10-14 00:35:54');
INSERT INTO `general_nomination` VALUES ('57', 'Discovery of the Year', 'Faustina Teye', 'teeboss.studios@gmail.com', '0271715430', 'A makeup up artist with over 5 years experience in makeup application and training. I have learnt from my clients that, every woman wants to look flawless, beautiful and illuminate from their skin when wearing makeup.That is why I based my craft on flawle', '@thetinateye', '', '', 'Teeboss', 'At TeeBoss, we enhance women&amp;acirc;€™s beauty using makeup and beauty tools, thereby bringing out confidence, class and sophistication.\nTeeBoss is known for creating Luxury, seamless, skin-focused and natural looking makeup, making women look flawless', '@teeboss__', '', '', '', '', '', '', '', '', '', '', '1560e2e050a17c6e01f6db', '2021-10-14 19:46:20');
INSERT INTO `general_nomination` VALUES ('58', 'Discovery of the Year', 'Faustina Teye', 'teeboss.studios@gmail.com', '0271715430', 'A makeup up artist with over 5 years experience in makeup application and training. I have learnt from my clients that, every woman wants to look flawless, beautiful and illuminate from their skin when wearing makeup.That is why I based my craft on flawle', '@thetinateye', '', '', 'Teeboss', 'At TeeBoss, we enhance women&amp;acirc;€™s beauty using makeup and beauty tools, thereby bringing out confidence, class and sophistication.\nTeeBoss is known for creating Luxury, seamless, skin-focused and natural looking makeup, making women look flawless', '@teeboss__', '', '', '', '', '', '', '', '', '', '', '1560e2e050a17c6e01f6db', '2021-10-14 19:46:21');
INSERT INTO `general_nomination` VALUES ('59', 'Beauty Entrepreneur of the Year', 'Victoria  Quaynor', 'asante_victoria@yahoo.com', '0557471464', 'Sales and Marketing Director, Educator and Nail Technician at Bio Sculpture Ghana. Passionate about empowering women to be their own bosses. Passionate about educating nail technicians and clients on healthy nail care.', '@quayn_vee', 'Victoria Quaynor', '', 'Bio Sculpture Ghana', 'Bio Sculpture Ghana is a Nail Training and Supply Centre. Bio Sculpture is the inventor of the first UV Soak off gel. BSG is the sole distributor in West Africa. Our nail products are vegan, non toxic, cruelty free and provides a healthier alternative in ', '@biosculptureghana', 'Bio Sculpture Ghana', '', '', '', '', 'Racheal Bosman - 0502448622', 'Yaa Lartebea - 0558293057', 'Dorcas Twumudu - 0540531189', '', '', 'd27c2d73594aafff3db607', '2021-10-14 20:40:24');
INSERT INTO `general_nomination` VALUES ('60', 'Best Customer Service Experience', 'Akwasi Ansong', 'djunior71@gmail.com', '0544001688', 'I love everything made in Africa', '', '', '', 'Kaeme Body Care', 'KAEME is a premium Ghanaian company specialising in personal care products such as shea souffl&amp;Atilde;&amp;copy;, liquid black soap, soy candles and African-print toiletry bags. Inspired by the joy of unforgettable memories and cherished experiences, ', 'hellokaeme', 'hellokaeme', 'www.kaeme.com', '', '', '', 'Anita - 0243786569', 'Danielle - 0558341345', 'Dziffa - 0559512170', 'Alex - 0241527706', 'Akosua - 0595622370', 'c1a31c236ef9a3ab861fe2', '2021-10-15 08:08:49');

-- ----------------------------
-- Table structure for hair_brand
-- ----------------------------
DROP TABLE IF EXISTS `hair_brand`;
CREATE TABLE `hair_brand` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `total_hair_brand_sponsored` varchar(25) DEFAULT '',
  `media_links` text,
  `contact_lists` varchar(255) DEFAULT NULL,
  `top_sponsorship1` text,
  `top_sponsorship2` text,
  `top_sponsorship3` text,
  `total_brand_outlet` varchar(25) DEFAULT '',
  `total_csr_events` varchar(25) DEFAULT '',
  `photo_link_csr` text,
  `top_csr_project1` text,
  `top_csr_project2` text,
  `top_csr_project3` text,
  `total_brand_training` varchar(25) DEFAULT '',
  `photo_training_link` text,
  `top_training_project1` text,
  `top_training_project2` text,
  `top_training_project3` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hair_brand
-- ----------------------------

-- ----------------------------
-- Table structure for hair_stylist
-- ----------------------------
DROP TABLE IF EXISTS `hair_stylist`;
CREATE TABLE `hair_stylist` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `hairstylist_bridal_link1` varchar(255) DEFAULT NULL,
  `hairstylist_bridal_description1` text,
  `hairstylist_bridal_link2` varchar(255) DEFAULT NULL,
  `hairstylist_bridal_description2` text,
  `hairstylist_editorial_link1` varchar(255) DEFAULT NULL,
  `hairstylist_editorial_description1` text,
  `hairstylist_editorial_link2` varchar(255) DEFAULT NULL,
  `hairstylist_editorial_description2` text,
  `hairstylist_redcarpet_link1` varchar(255) DEFAULT NULL,
  `hairstylist_redcarpet_description1` text,
  `hairstylist_redcarpet_link2` varchar(255) DEFAULT NULL,
  `hairstylist_redcarpet_description2` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hair_stylist
-- ----------------------------
INSERT INTO `hair_stylist` VALUES ('1', 'Hair Cutting Stylist', 'Stella  Laryea', 'stellalaryea@yahoo.com', '0209795668', 'Stella Laryea (blackgirl) is a hair cutting stylist known for her sleek, modern looks inspired by the city she lives in. Blackgirl&amp;acirc;€™s works has appeared in City Magazines and she has worked with Focus and Blur on an inspired shoot featuring Nan', 'Miznaa', '', '', 'Blackgirl', 'Blackgirl Hairstylist \nOffice location East Legon (oh my hair salon)\nTelephone: 0547722590', 'Blackgirl', '', '', 'Blackgirl', '0547722590', 'stellalaryea@yahoo.com', 'https://www.instagram.com/p/CJoMahDJjwM/?utm_medium=copy_link', 'The name of this style is called pin curls. My bride wanted tight curls so i preferred to give a touch of the pin curl that fit perfectly on her face, shape and the style of her dress', 'https://www.instagram.com/p/CCYtKZqJ8N-/?utm_medium=copy_link', 'The name of this style is called Pixie wave. My bride has a coarse hair in texture so i preferred to give a touch of soft wave to look different and a perfect hair for her face shape and make-up', 'https://www.instagram.com/p/CUDT9QJsxZ9/?utm_medium=copy_link', 'Soft pin curls', 'https://www.instagram.com/p/CIvm_TQJq8p/?utm_medium=copy_link', 'Waves', 'https://www.instagram.com/p/CEy0jTrDY9X/?utm_medium=copy_link', 'Pixie perfection', 'https://www.instagram.com/p/B9T4KSDJL94/?utm_medium=copy_link', 'Bump volume Hairstyle', '4ff004402ca4bfcf60ed8a', '2021-09-28 23:19:00');
INSERT INTO `hair_stylist` VALUES ('2', 'Hair Stylist of the Year', 'Emmanuel  Arthur Baiden', 'realestbarber2@gmail.com', '0543319392', '', '@realest_barber1', 'Emmanuel Baiden(realest barber)', '', '', '', '', '', 'Realest barber', 'Realest barber', '0543319392', 'realestbarber2@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'daffa6240830a950016313', '2021-09-30 06:42:22');
INSERT INTO `hair_stylist` VALUES ('3', 'Hair Cutting Stylist', 'Frank  Naro', 'franknaro450@gmail.con', '0553517362', 'Barber', 'naro_cuts', 'Frank Naro', '', 'Celebrity barber', 'Celebrity Barber studio', 'naro_cuts', 'Frank Naro', 'Celebrity barber', 'Celebrity barber studio', '0553517362', 'franknaro450@gmail.com', 'Naro_cuts', 'Techniques', 'Celebrity barber studio', 'Requirements', 'naro_cuts', 'Project theme', 'Naro_cuts', 'Project theme', '', '', '', '', '14ffd20438fa0424f8a58c', '2021-10-12 11:01:37');
INSERT INTO `hair_stylist` VALUES ('4', 'Hair Cutting Stylist', 'Frank  Naro', 'franknaro450@gmail.con', '0553517362', 'Barber', 'naro_cuts', 'Frank Naro', '', 'Celebrity barber', 'Celebrity Barber studio', 'naro_cuts', 'Frank Naro', 'Celebrity barber', 'Celebrity barber studio', '0553517362', 'franknaro450@gmail.com', 'Naro_cuts', 'Techniques', 'Celebrity barber studio', 'Requirements', 'naro_cuts', 'Project theme', 'Naro_cuts', 'Project theme', '', '', '', '', '14ffd20438fa0424f8a58c', '2021-10-12 11:01:37');
INSERT INTO `hair_stylist` VALUES ('5', 'Hair Stylist of the Year', 'Serwah  Akoto', 'prikelshairltd@gmail.com', '0248442316', 'I am a specialized Frontal Lace Expert and my  works are amazing with my professional skills in the Lace system in Ghana. I aim to please when creating wigs. With four years Experience in the beauty industry, Serwah Akoto has worked witha mass number of b', 'Serwahakoto_', 'Hair Boss Gh', 'www.Prikelshair.com', 'Prikel&amp;acirc;€™s Hair Limited', 'We are specialists in Glueless lace wigs, Lace frontal installations and Ponytails. We make custom and ready to ship wigs. Our salon is located is on the main Adjiringanor road stretch. We are devoted to providing the highest quality Lace Frontals and Pre', 'Prikelshairltd', 'Prikel&amp;acirc;€™s Hair Lounge &amp;amp; spa', 'www.prikelshair.com', 'Prikel&amp;acirc;€™s Hair Limited', '0248442316 / 0240950891', 'prikelshairltd@gmail.com', 'https://www.instagram.com/p/CHyKFlYAYds/?utm_medium=copy_link', 'Lace was installed absolutely Glueless using a 13x4 normal lace frontal, hair coloured ombr&amp;Atilde;&amp;copy;,and styled to achieve this look on this beauty for her engagement.', 'https://www.instagram.com/p/CJRUh9LgiHT/?utm_medium=copy_link', 'This look was installed absolutely Glueless using HD lace ,and styled with a bun with side swoop on this beautiful bride for her white wedding.', 'https://www.instagram.com/reel/CTmTGzEAfG6/?utm_medium=copy_link', 'This hair was installed absolutely Glueless using 5x5 HD lace,coloured Burgundy blisss and styled perfectly on my muse .', 'https://www.instagram.com/p/CUM4FSug-cM/?utm_medium=copy_link', 'This is a half up half down look using Hd lace frontal! Yes we used a frontal for a half up half down.', 'https://www.instagram.com/p/CRTp9rnrP_W/?utm_medium=copy_link', 'This look was achieved by coloring hair from black to golden blonde, wigged and installed Absolutely Glueless using a 13x4 HDlace frontal on this beauty.', 'https://www.instagram.com/p/CQ-8mT4CkFB/?utm_medium=copy_link', 'The perfect frontal ponytail for any special occasion! This look was achieved using a 13x4 Hd lace frontal and bone straight bundles.', '7cc84a93934b747a8208d2', '2021-10-12 12:08:53');
INSERT INTO `hair_stylist` VALUES ('6', 'Best Bridal Hair Stylist of the Year', 'Alberta Ampomah', 'strandsghana@gmail.com', '0543104470', 'Full time bridal hairstylist and a full time medical practitioner', 'Strandsghana', '', '', 'Styles by Strands', 'Specialized and committed to creating unique hairstyles to complements the unique personalities of our brides', 'Strandsghana', '', '', 'Styles by Strands', '+233 50 136 7065', 'strandsghana@gmail.com', 'https://www.instagram.com/reel/CKn9zFdJN2X/?utm_medium=share_sheet', 'Pixie wig bridal styling', 'https://www.instagram.com/p/CSB57ASD4oN/?utm_medium=share_sheet', 'Middle part frontal updo', '', '', '', '', '', '', '', '', 'f27424e931a4f6cbb0e58a', '2021-10-13 16:47:15');
INSERT INTO `hair_stylist` VALUES ('7', 'Best Bridal Hair Stylist of the Year', 'Marilyn Ahinee  Laryea', 'hairlikegewels.bookings@gmail.com', '0595855112', 'Growing Up, \nArt  Influenced my Passion For Hair. \nHairstyling is my Craft , my creative way to make every Bride Beautiful On Her Special Day', 'hairlikegewels', 'Hair Like Gewels', '', 'Hair Like Gewels', 'Premium Bridal Styling \nCustom Lace Wigs\nLace Wig Installation Services \n&amp;amp; Bridal HairStyling', 'hairlikegewels', 'Hair Like Gewels', '', 'Hair Like Gewels', '0507756879', 'hairlikegewels.bookings@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'f0a515fa29dd2c278c4e18', '2021-10-14 11:01:31');
INSERT INTO `hair_stylist` VALUES ('8', 'Best Bridal Hair Stylist of the Year', 'Marilyn Ahinee  Laryea', 'hairlikegewels.bookings@gmail.com', '0595855112', 'Growing Up, \nArt  Influenced my Passion For Hair. \nHairstyling is my Craft , my creative way to make every Bride Beautiful On Her Special Day', 'hairlikegewels', 'Hair Like Gewels', '', 'Hair Like Gewels', 'Premium Bridal Styling \nCustom Lace Wigs\nLace Wig Installation Services \n&amp;amp; Bridal HairStyling', 'hairlikegewels', 'Hair Like Gewels', '', 'Hair Like Gewels', '0507756879', 'hairlikegewels.bookings@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'f0a515fa29dd2c278c4e18', '2021-10-14 11:01:33');
INSERT INTO `hair_stylist` VALUES ('9', 'Best Bridal Hair Stylist of the Year', 'Marilyn Ahinee  Laryea', 'hairlikegewels.bookings@gmail.com', '0595855112', 'Growing Up, \nArt  Influenced my Passion For Hair. \nHairstyling is my Craft , my creative way to make every Bride Beautiful On Her Special Day', 'hairlikegewels', 'Hair Like Gewels', '', 'Hair Like Gewels', 'Premium Bridal Styling \nCustom Lace Wigs\nLace Wig Installation Services \n&amp;amp; Bridal HairStyling', 'hairlikegewels', 'Hair Like Gewels', '', 'Hair Like Gewels', '0507756879', 'hairlikegewels.bookings@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'f0a515fa29dd2c278c4e18', '2021-10-14 11:01:34');

-- ----------------------------
-- Table structure for indiginous_brand
-- ----------------------------
DROP TABLE IF EXISTS `indiginous_brand`;
CREATE TABLE `indiginous_brand` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `media_links` text,
  `total_indiginous_product_sponsored` varchar(25) DEFAULT '',
  `ghanaian_sponsorship1` text,
  `ghanaian_sponsorship2` text,
  `ghanaian_sponsorship3` text,
  `total_indiginous_outlet` varchar(25) DEFAULT '',
  `photo_link_csr` varchar(255) DEFAULT NULL,
  `total_indiginous_csr_projects` varchar(25) DEFAULT '',
  `ghanaian_top_csr_project1` text,
  `ghanaian_top_csr_project2` text,
  `ghanaian_top_csr_project3` text,
  `total_indiginous_training` varchar(25) DEFAULT '',
  `photo_link_events` varchar(255) DEFAULT NULL,
  `ghanaian_top_training_project1` text,
  `ghanaian_top_training_project2` text,
  `ghanaian_top_training_project3` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of indiginous_brand
-- ----------------------------
INSERT INTO `indiginous_brand` VALUES ('1', 'Indigenous Brand of the Year', 'Stephanie  Adu', 'stephanieadu@colorboxcosmetics.com', '05040590618', 'Mrs Stephanie Adu is the CEO of Colorbox Cosmetics.\nStephanie&amp;acirc;€™s experience within the beauty industry spans across 14 years, and Colorbox Cosmetics was created following a degree in Biomedical sciences and a career in investment banking. \nStep', 'stephaniemudikongo', '', '', 'Colorbox Cosmetics Ltd', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. We are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no m', 'colorboxcosmetics', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', 'Stephanie Adu', '0540590618', 'stephanieadu@colorboxcosmetics.com', '', '3', 'The Obuasi Business Resource Centre Makeup Artistry Training: February 2021\nColorbox were proud sponsors of a Free Makeup Class held in Obuasi which catered to over 60 students. We supported them with high quality makeup tools to aid the centre in teaching new life long skills that can create sustained employment and help eradicate poverty.', 'Master Bridal Class By Glitz and Foy: October 2021\nColorbox Cosmetics and their CEO were proud sponsors &amp;amp; contributors of this just past Bridal Masterclass. Both the international makeup artists who hosted the event- Glitz n Foy &amp;amp; Colorbox, strongly believe in the sharing of knowledge to better oneself. Therefore, not only did we sponsor over 40 makeup artist attendees with products, but the CEO gave a talk on the topic: How Makeup Artists can work for and improve relationships with Beauty Brands. Colorbox also sponsored the event with 3 surprise giveaway boxes of best-selling CB brush sets. The event was a great success filled with networking, makeup demonstrations to upgrade skills and career impacting knowledge.', 'During the Colorbox sponsored Dubai trip, the brand organised and sponsored a brunch event that hosted a variety of women that a Ghanaian audience could relate and learn from.\nThe entire trip was documented on social media, with the sole aim to bring the Colorbox community - The CB Family - along to experience Dubai and expose our community to discover new beauty trends, places and career ambitions.', '20 Outlets: Niiney Beauty', 'https://www.instagram.com/p/CR8-0P8jcvR/ - https://www.instagram.com/p/CRV1eXZjSv1/ - CB in Dubai recap video: https://www.instagram.com/tv/CQ6ibgXpVRo/?utm_medium=copy_link - https://www.instagram.com/p/CRTyxOijxqF/ -  https://www.instagram.com/p/CPcxCFI', 'CBBI - Colorbox Beauty In', 'CBBI - The Colorbox Beauty Initiative (July 2021): \nThis initiative was started in collaboration with Makeup Ghana to give back to future and current students learning makeup artistry. The core emphasis is to help make beauty training more affordable, and support accredited beauty educators across the industry. Colorbox believes that this initiative will not only attract the best talent and create jobs, but also support teachers in their careers.', 'Colorbox in Dubai: Taking CB Staff and Online Community to Dubai (August 2021):\nColorbox Cosmetics organised and sponsored an all expenses paid trip for one of its most hard-working employees (@noirbeautie_) with our CEO. \nThe CB employee and CEO documented the entire journey with a strong focus on women empowerment for their online community. The aim was for the viewers to be given the opportunity to live vicariously through the CB staff member, as for many, it would be their first time visiting Dubai (even virtually!). Colorbox also wanted the trip to inspire the wider beauty industry to grow their brands both nationally and internationally.', 'Vera King Signature Student Contribution (July 2021) - The brand was approached by @veraking_signature, a budding Makeup Artist with a plea to assist her new student @easy_glam_gh with makeup tools in order to teach her how to make a living as a makeup artist. The heartfelt message touched the CB team and so the brand invited both parties into the studio to film a video (in order to grow their platforms) and offer them both a free package.\nThe edited video and all behind the scenes are set to be published by early November across all of Colorbox Cosmetics social media platforms.', '3', 'Face makeup beat: IG live https://www.instagram.com/tv/CPtB_3rlAp5/?utm_medium=copy_link - MTN pulse: https://www.instagram.com/p/CUM402aFPvE/?utm_medium=copy_link', 'Colorbox in Dubai Instagram Live - Providing virtual training tips on how to ensure your makeup lasts longer in the heat (plus the reveal of a Limited Edition Package)\nArmed with new makeup knowledge and recognising that Dubai in August has similar heat intensity to Accra, Ghana - the brand decided to host an intensive Live Demo session whilst in Dubai. The focus was on sharing tips and tricks to improve makeup longevity whilst also hosting a business Q&amp;amp;A session on IG Live.', 'Video Editing Class for CB Staff to support their careers in Makeup Artistry (June 2021) - Colorbox organised private video editing training from a rising content creator star in Kumasi @aframdanielle for the Colorbox team.\nThe aim was to improve their editing skills, so they can better showcase their work online and in turn increase their revenue streams outside of their roles at Colorbox. \nThe next training session is going to be on Photo editing which is scheduled in Oct 2021. The brand wanted to support local creators in Ghana by patronising their services, and increase the opportunities for revenue income for CB staff outside the workplace.', 'MTN Pulse Ahaspora event (September 2021) - The Colorbox CEO was invited onto the panel with 3 other key speakers with a keen focus on training, motivating and inspiring young people with entrepreneurial skills and aspirations to build sustainable businesses. The event was streamed across MTN Facebook and YouTube platforms, and our CEO focused her efforts on reaching any interested parties in the Ghanaian beauty industry.', '34c4478f465e3f780f6011', '2021-10-13 14:08:11');

-- ----------------------------
-- Table structure for makeup_artist
-- ----------------------------
DROP TABLE IF EXISTS `makeup_artist`;
CREATE TABLE `makeup_artist` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `photo_link1` varchar(255) DEFAULT NULL,
  `makeupart_description1` varchar(255) DEFAULT '',
  `photo_link2` varchar(255) DEFAULT NULL,
  `makeupart_description2` varchar(255) DEFAULT '',
  `photo_editorial_link1` varchar(255) DEFAULT NULL,
  `editorial_description1` varchar(255) DEFAULT '',
  `photo_editorial_link2` varchar(255) DEFAULT NULL,
  `editorial_description2` varchar(255) DEFAULT '',
  `photo_bridal_link1` varchar(255) DEFAULT NULL,
  `bridal_work_description1` varchar(255) DEFAULT '',
  `photo_bridal_link2` varchar(255) DEFAULT NULL,
  `bridal_work_description2` varchar(255) DEFAULT '',
  `user_value` varchar(255) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of makeup_artist
-- ----------------------------
INSERT INTO `makeup_artist` VALUES ('1', 'Makeup Artist of the Year', 'Amewugah Nathaniel', 'amewugahnathaniel3@gmail.com', '0544463325', 'Nathaniel Amewugah popularly known as Kruz_K. The 26-year-old Ghanaian Special Effects and MakeUp artist holds a Diploma in Theater Arts from GH Media School, where he majored in Makeup and costuming.  \nCurrently an SFX makeup facilitator at Gh cosmetolog', 'Kruz_k', 'Nathaniel kruz', '', 'Kruz_k makeup', 'Kruz_k makeup established since 2016 provides makeup services .Located at Achimota-Abofu\nTel:0544463325', 'Kruz_k', 'Nathaniel kruz', '', 'Kruz_k Makeup', '0200624588', 'amewugahnathaniel3@gmail.com', '', '', '', '', 'https://www.instagram.com/p/CSUSUXwsUs7/?utm_medium=copy_link', 'Theme: ROCK\nClient : Abrewa Mafia\nArtistic goal: This was made for a tik tok challenge .', 'https://www.instagram.com/p/CSUSJEpM3Sv/?utm_medium=copy_link', 'Theme: BEAUTY\nClient : Abrewa Mafia\nArtistic goal: This was made for a tik tok challenge .', 'https://drive.google.com/drive/folders/14hUatHS2ZCxvHb8e_Z7gMIXVIwGwm8xM', 'Theme : Traditional Bride\nClient: Tv3 network\nGoal: This is to achieve a traditional bridal showcasing our beautiful culture .', 'https://drive.google.com/drive/folders/1-BAZICjcDx316tgT_KnB29uOkcQfMhrZ', 'Theme : White wedding \nClient: James Adofu', 'be0106d8786d64c1a401a5', '2021-09-22 17:15:24');
INSERT INTO `makeup_artist` VALUES ('2', 'Makeup Artist of the Year', 'Linda Mensah', 'info@blackcherrygh.com', '0243482969', 'Mrs Linda Mensah Vidzro\nProfessional  cosmetologist and certified cosmetic formulator.\nFounder Blackcherry skin and Beauty Klinik.\nSey Naturelle cosmetic. \nBrand ambassador Max international Beauty.', 'Blackcherrygh', 'Blackcherrygh', 'www.blackcherrygh.com', 'Blackcherry Gh', 'Blackcherrygh is a beauty company focused on providing beauty services and training for women of color. Our aim is to offer world standard services and training at affordable prices', 'Blackcherrygh', 'Blackcherrygh', 'www.blackcherrygh.com', 'Blackcherrygh', '0243482969', 'obaahemayaa@yahoo.com', '', '', '', '', 'https://www.instagram.com/p/CIP5DVcJ1wQ/?utm_medium=copy_link', 'Theme: The Euphoria \nThe goal was to create an exciting mood with an alluring skin tone.\nThis was achieved using different shades of neon pigments.', 'https://www.instagram.com/p/CSQAhkmjYfu/?utm_medium=copy_link', 'Theme: The Reflection of A Golden Queen\nRequirement was to create a mimic of an Egyptian queen. \nArtistic Goals: Dewy skin with natural tones yet glowy. \nThe look was achieved using shea based products, warm hues and iridescent pigments.', 'https://www.instagram.com/p/CTppdhpjwzA/?utm_medium=copy_link', 'Client requirement was to maintain her deep melanin tone with Glow.', 'https://www.instagram.com/p/CRIxosHjjO6/?utm_medium=copy_link', 'Client required a really glam look with clean and matte skin finish.', 'd2b20140f26e5104cc84fb', '2021-09-23 14:50:28');
INSERT INTO `makeup_artist` VALUES ('3', 'Makeup Artist of the Year', 'Ada  Atayobor', 'vendajules@yahoo.com', '0260772879', 'Ada Atayobor is a professional makeup artist who has passion and vision for Makeup artistry. Ada has also impacted lives through her teachings as Makeup artist.', 'Vendajules', 'Vendajules', 'Www.vendajules.com', 'Vendajules slay World Ltd.', 'Vendajules has been in existence for over 5years. It&amp;acirc;€™s Goal is to reach the world globally while giving hope to others for a better future.', 'Vendajules', 'Vendajules', 'Www.vendajules.com', 'Vendajules slay World Ltd', '0549199456', 'info@vendajules.com', '', '', '', '', 'https://www.instagram.com/p/CUPwmIoo-AP/?utm_medium=copy_link', 'The Goddess. Work done on Selly Galley using hand made  Crown. Keep the look bold to make a statement.', 'https://www.instagram.com/p/Bt29NUogBYA/?utm_medium=copy_link', 'Love on Val&amp;acirc;€™s. Look was created focusing on the theme color red. Inspired to keep it dreamy. Flawless skin with a red lips paired to it. Love is from the heart we made sure the project depicts that scenario.', 'https://www.instagram.com/p/CGH2V2Wj8Lt/?utm_medium=copy_link', 'This is a dream for every bride to be. Look and project was created to meet a target of brides to be. Soft glam with soft eye look paired with a gloss to keep hydrated.', 'https://www.instagram.com/p/CGYRX4KD_MY/?utm_medium=copy_link', 'The Ghanaian Bride is made to look like Gold on her engagement day. The inspiration is to acknowledge the beautiful Ghanaian culture for a Ghanaian bride.', 'f1fadc87725242fb75ebef', '2021-09-28 09:37:01');
INSERT INTO `makeup_artist` VALUES ('4', 'Makeup Artist of the Year', 'Raymond  Atayobor', 'bbankieskay@gmail.com', '0264983711', 'Business Man', 'Kaymotiv', 'Kaymotiv', 'https://instagram.com/kaymotiv?utm_medium=copy_link', 'Vendajules slay world', 'A professional Makeup Artist, Beauty Educator with excellent service and passion for her work.', 'Vendajules', 'Vendajules', 'www.Vendajules.com', 'Vendajules', '0260772879', 'info@vendajules.com', '', '', '', '', 'https://www.instagram.com/p/CUPwmIoo-AP/?utm_medium=copy_link', 'Editorial Makeup done on Selly Galley by   Vendajules.', 'https://www.instagram.com/p/COlrmKpj3Jf/?utm_medium=copy_link', 'Editorial makeup by Vendajules.', 'https://www.instagram.com/reel/CSO0rubIBvz/?utm_medium=copy_link', 'Vendajules Boss Queen Bride.', 'https://www.instagram.com/p/CMpTHdzjp-w/?utm_medium=copy_link', 'Vendajules Bridal work on her beautiful bride.', '699be7dace20fa203397a8', '2021-09-28 23:18:53');
INSERT INTO `makeup_artist` VALUES ('5', 'Makeup Artist of the Year', 'Portia Gyeni-Boateng', 'kinsdaryl@yahoo.com', '+233 249 138 826', 'Multiple award winning entrepreneur , Portia Gyeni-Boateng is a young and vibrant cosmetic and beauty advocate. Rising from an ordinary makeup artist in 2013 to the Excutive Director of one Ghana&amp;acirc;€™s biggest owned private makeup brands ( CUTIEBR', '@cutie_inspires', 'Portia Gyeni-Boateng', '', 'CUTIEBRIDAL', 'CUTIEBRIDAL was established in 2013 in Accra Ghana by Miss Portia Gyeni-Boateng who is a certified makeup artist and a licensed beauty facilitator from Rapheal Oliver in Sao Paola Brazil and a trainer of several Ghana beauty programs in Ghana. CUTIEBRIDAL', '@cutiebridal_gh', 'CUTIEBRIDAL_GH', '', 'CUTIEBRIDAL', '+233 262 842 640', 'cutiebridal_gh@yahoo.com', '', '', '', '', 'https://www.instagram.com/p/CBganx5DN5N/?utm_medium=copy_link', 'Sometimes in an editorial makeup look, only the eyes get the full treatment. \nHeartbreakingly beautiful look, but it was also speckled with incredible little Swarovski details on and around the eyes and feathery eyebrows. In a feat of makeup mastery, I cu', 'https://www.instagram.com/p/CBLM7jrAae5/?utm_medium=copy_link', 'I created a divine glow that makes the skin look warmer showcasing a cross between makeup and accessories. The effect of this celestial glow was achieved by applying the light-weight sheer foundation to the Skin framed by bold eyebrows\nA black eye kohl wa', 'https://www.instagram.com/p/CCvh_EFAnjy/?utm_medium=copy_link', 'I created a subtle yet sultry glowy bridal glam that would be picture-perfect and great on client dark skin tone and also meet client&amp;acirc;€™s craving all out for glamour . \nThe look features a shimmery soft cut crease eye (Applying shadow to the cre', 'https://www.instagram.com/p/CCd-a8eA5gM/?utm_medium=copy_link', 'I created a timeless Bridal engagement makeup look. \nClient requested for fuller eyes, hence a green smokey eye without being overpowering, complimented with lush lashes for more flair and statement brows to achieve the clients eye-work request. \nHaving a', '14d6a5e9817c7d60a88c46', '2021-10-03 17:01:36');
INSERT INTO `makeup_artist` VALUES ('6', 'Makeup Artist of the Year', 'Reine  Degni', 'reinedegni7@gmail.com', '0209559620', 'You can find us on whasup 0n 0209559620', 'Ingrid baby', 'Reine degni', '', 'Eclabelle', 'Makeup artist', 'Eclabelle', 'Eclabelle beauty', '', 'Eclabelle', '0209559620 or 0596059616', 'reinedegni7@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '7d628119460f270bf059a3', '2021-10-04 10:41:15');
INSERT INTO `makeup_artist` VALUES ('7', 'Makeup Artist of the Year', 'Reine  Degni', 'gpnanza@gmail.com', '0209559620', 'Eclabelle makeup offers top class beauty makeup in Bridal and Editorials, with several years of expertise. Eclabelle offers home services no matter where you are on the globe. Eclabelle gives more sophisticated applications such as color balance, contour,', 'eclabelle', 'eclabelle', '', 'Eclabelle', 'Eclabelle offers:\n1.  Home services (soft glam,  full glam)\n2. Bridal Shoot', 'eclabelle', 'eclabelle', '', 'eclabelle', '0209559620', 'reinedegni7@gmail.com', '', '', '', '', 'https://www.instagram.com/p/CEFIjPQJ6q-/', '', 'https://www.instagram.com/p/B1a2jUcH3Wv/', '', 'https://www.instagram.com/p/CDybPusp7XH/', '', 'https://www.instagram.com/p/B6uxLicnNU2/', '', '6b0edf0d65585a5656a0ef', '2021-10-04 14:07:49');
INSERT INTO `makeup_artist` VALUES ('8', 'Makeup Artist of the Year', 'Zara Ibrahim Tanko', 'slaybyzarabeauty@gmail.com', '0249569108', 'Zara Nasara Ibrahim-Tanko is a Professional Makeup Artist based in Accra. With a little over two years experience in the Ghanaian makeup industry, throughout ough passion, hard work and consistency she has been able to grow and establish herself and her b', 'Slaybyzara', 'Slaybyzara', '', 'Slaybyzara Beauty', 'At Slaybyzara Beauty, we provide impeccable beauty solutions tailored to each client to celebrate their femininity through timeless, sultry glam. We aim to enhance, educate and serve the woman with an eye quality in Ghana and beyond.', 'Slaybyzara', 'Slaybyzara', '', 'Slaybyzara', '0249569108', 'slaybyzarabeauty@gmail.com', '', '', '', '', 'https://www.instagram.com/p/COAR9Y2prYZ/?utm_medium=copy_link', 'Inspired by high fashion magazine covers celebrating inclusivity and the beauty of brown skin.\nMetallic green eyes, defined brows and berry glossy lips.', 'https://www.instagram.com/p/CUUmNCfsZtI/?utm_medium=copy_link', 'Inspired by vintage 80s glam. Warm, sculpted dewy skin and a reversed Smokey eye.', 'https://www.instagram.com/p/CT1sMHisneU/?utm_medium=copy_link', 'Signature timeless bridal glam', 'https://www.instagram.com/reel/CTwdUBFjqGA/?utm_medium=copy_link', 'Melanin bridal inspo. Matte eyes and a bold glossy red lip', '4b1f0b3ee8dff196cf3335', '2021-10-14 00:27:05');

-- ----------------------------
-- Table structure for makeup_brand
-- ----------------------------
DROP TABLE IF EXISTS `makeup_brand`;
CREATE TABLE `makeup_brand` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `media_links` varchar(255) DEFAULT NULL,
  `total_brand_sponsored` varchar(25) DEFAULT '',
  `photo_link_sponsor` varchar(255) DEFAULT NULL,
  `top_brand_sponsorship_event1` text,
  `top_brand_sponsorship_event2` text,
  `top_brand_sponsorship_event3` text,
  `total_brand_distribution_outlet` varchar(25) DEFAULT '',
  `total_brand_csr_events` varchar(25) DEFAULT '',
  `photo_link_csr` varchar(255) DEFAULT NULL,
  `top_brand_csr_events1` text,
  `top_brand_csr_events2` text,
  `top_brand_csr_events3` text,
  `total_brand_training_event` varchar(25) DEFAULT '',
  `photo_link_events` varchar(255) DEFAULT NULL,
  `top_brand_training_initiative1` text,
  `top_brand_training_initiative2` text,
  `top_brand_training_initiative3` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of makeup_brand
-- ----------------------------
INSERT INTO `makeup_brand` VALUES ('3', 'Beauty Brand of the Year', 'Colorbox Cosmetics', 'info@colorboxcosmetics.com', '+233502734866', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. They are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no', 'colorbooxcosmetics', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', 'Colorbox Cosmetics Limited', 'Colorbox Cosmetics is the proudly Ghanaian award-winning affordable luxury beauty brand of choice for the modern women. They are committed to offering world-class products at unbeatable value, and most importantly, meeting women at their point of need, no', 'colorboxcosmetics', 'Colorbox Cosmetics', 'www.colorboxcosmetics.com', 'Stephanie Adu', '+233540590618', 'stephanieadu@colorboxcosmetics.com', '', '3', 'https://www.instagram.com/p/CUAMZoEsx-5/?utm_medium=copy_link https://www.instagram.com/p/CTaMav_jcE_/?utm_medium=copy_link https://www.instagram.com/p/CTC8abiDK4n/?utm_medium=copy_link https://www.instagram.com/p/CRwMlmcj0AB/?utm_medium=copy_link https:/', 'The Obuasi Business Resource Center Makeup Artistry Training &amp;acirc;€“ Colorbox Cosmetics sponsored the event which was a makeupp training class for about 50 students with products', 'Master Bridal Class By Glitz and Foy &amp;acirc;€“ Colorbox Cosmetics sponsored the event organised by Glitz and Foy for about 40 students with products.', 'African Women in Beauty Entrepreneurship Brunch in Dubai &amp;acirc;€“ Colorbox Cosmetics hosted and sponsored the event which was for women entrepreneurs in the beauty industry in Dubai.', '17 (7 prepaid and 10 post', '5', 'https://www.instagram.com/p/CUAMZoEsx-5/?utm_medium=copy_link https://www.instagram.com/p/CTaMav_jcE_/?utm_medium=copy_link https://www.instagram.com/p/CTC8abiDK4n/?utm_medium=copy_link https://www.instagram.com/p/CRwMlmcj0AB/?utm_medium=copy_link https:/', 'CB Dubai Trip with CB Family and Yaa Dubai &amp;acirc;€“ Colorbox Cosmetics decided to take Yaa Dubai and the entire CB family on a women empowerment trip to dubai.', 'CEO&amp;acirc;€™S BIRTHDAY GIVEAWAY &amp;acirc;€“ The CEO decided to give back to the CB Family to mark her 35th birthday.', 'CBBI &amp;acirc;€“ The Colorbox Cosmetics Beauty Initiative was started in collaboration with Makeup Ghana to give back to the beauty teachers, emphasise on the importance of the professional accreditation for beauty teachers and also to make beauty training affordable to currents and potential beauty students.', '5', 'https://www.instagram.com/p/CUpXLeDFSsU/?utm_medium=copy_link https://www.instagram.com/reel/CUSN1cVlATp/?utm_medium=copy_link https://www.instagram.com/reel/CTzVFJYlnuS/?utm_medium=copy_link https://www.instagram.com/p/CTrchwdMJiX/?utm_medium=copy_link h', 'Training Colorbox staff Hillary and Grace to acquire skills for their careers in the beauty industry outside Colorbox Cosmetics', 'Instagram live makeup tutorial training sessions', 'CEO\'s  talk at the MTTN Pulse Ahaspora event, training, motivating and inspiring young people with entrepreneurial skills and experiences for their entrepreneurial journeys.', '95d7f45a53ba2190b4b423', '2021-10-13 15:01:31');

-- ----------------------------
-- Table structure for makeup_television
-- ----------------------------
DROP TABLE IF EXISTS `makeup_television`;
CREATE TABLE `makeup_television` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `tvstation_name` varchar(255) DEFAULT '',
  `website_url` text,
  `tvstation_video` text,
  `tvstation_video_description` text,
  `tvstation_video2` text,
  `tvstation_video_description2` text,
  `tvstation_video3` text,
  `tvstation_video_description3` text,
  `tvstation_video4` text,
  `tvstation_video_description4` text,
  `tvstation_video5` text,
  `tvstation_video_description5` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of makeup_television
-- ----------------------------
INSERT INTO `makeup_television` VALUES ('1', 'Beauty Brand Ambassador of the Year', 'Linda Mensah', 'info@blackcherrygh.com', '0243482969', 'Linda Mensah\nProfessional cosmetologist and certified cosmetic formulator.\nBrand ambassador for Max international beauty', 'Blackcherrygh', 'Blackcherrygh', 'Www. Blackcherrygh.com', 'Max international beauty', 'Max beauty is a luxury makeup line formulated with the African woman in mind. \nMax beauty is specially formulated with no toxi ingredients like other brands.\nSpecifically made to suit and stand the harsh african weather.', 'Maxintlbeauty', 'Maxintlbeauty', 'Www.max.com', 'Blackcherrygh', '0243482969', 'info@blackcherrygh.com', '', '', '', 'Miriam Mahama\nCountry Manager', '', 'Larry Lowe\nCMO', '', 'Larry Lowe\nCMO', '', '', '', '', '1deff446e5846e1f7578b1', '2021-09-22 09:52:52');
INSERT INTO `makeup_television` VALUES ('2', 'Beauty Brand Ambassador of the Year', 'Linda Mensah', 'info@blackcherrygh.com', '0243482969', 'Linda Mensah\nProfessional cosmetologist and certified cosmetic formulator.\nBrand ambassador for Max international beauty', 'Blackcherrygh', 'Blackcherrygh', 'Www. Blackcherrygh.com', 'Max international beauty', 'Max beauty is a luxury makeup line formulated with the African woman in mind. \nMax beauty is specially formulated with no toxi ingredients like other brands.\nSpecifically made to suit and stand the harsh african weather.', 'Maxintlbeauty', 'Maxintlbeauty', 'Www.max.com', 'Blackcherrygh', '0243482969', 'info@blackcherrygh.com', '', '', '', 'Miriam Mahama\nCountry Manager', '', 'Larry Lowe\nCMO', '', 'Larry Lowe\nCMO', '', '', '', '', '1deff446e5846e1f7578b1', '2021-09-22 09:52:53');

-- ----------------------------
-- Table structure for photographer
-- ----------------------------
DROP TABLE IF EXISTS `photographer`;
CREATE TABLE `photographer` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `photo_link_editorial` varchar(255) DEFAULT NULL,
  `editorial_photo_description1` text,
  `editorial_photo_description2` text,
  `photo_link_bridal` varchar(255) DEFAULT NULL,
  `bridal_photo_description1` text,
  `bridal_photo_description2` text,
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of photographer
-- ----------------------------

-- ----------------------------
-- Table structure for skincare_brand
-- ----------------------------
DROP TABLE IF EXISTS `skincare_brand`;
CREATE TABLE `skincare_brand` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` varchar(255) DEFAULT '',
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `skincare_product_comment` text,
  `media_links` varchar(255) DEFAULT NULL,
  `skincare_total_outlets` varchar(255) DEFAULT '',
  `user_value` varchar(25) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of skincare_brand
-- ----------------------------
INSERT INTO `skincare_brand` VALUES ('1', 'Beauty Product of the Year', 'Benedicta  Peprah', 'equiyahpeprah@gmail.com', '+233 24 022 7083', 'My name is Benedicta Peprah. I am a Ghanaian born Medical Provider who believes in making an impact in the beauty industry by providing healthy alternative beauty products. Back in Krobo Girls&amp;acirc;€™ Senior High School, my bestfriends and I are were', '@dicta_xo', '', 'www.bmvcosmetics.com', 'BMV COSMETICS', 'BMV cosmetics is a Ghanaian Owned Cruelty-free makeup brand. We are three women entrepreneurs with over 15 years of friendship who believe in creating effortless beauty products. We are currently based in Ghana and the United States of America. \nWe were t', '@bmv.cosmetics', '', 'www.bmvcosmetics.com', 'BMV Cosmetics', '+233 24 022 7083', 'info@bmvcosmetics.com', 'https://bmvcosmetics.com/', 'https://bmvcosmetics.com/\nhttps://instagram.com/bmv.cosmetics?utm_medium=copy_link', '4', '2a5b19167a57c94a300976', '2021-09-26 05:31:15');
INSERT INTO `skincare_brand` VALUES ('2', 'Beauty Product of the Year', 'Benedicta  Peprah', 'equiyahpeprah@gmail.com', '+233 24 022 7083', 'My name is Benedicta Peprah. I am a Ghanaian born Medical Provider who believes in making an impact in the beauty industry by providing healthy alternative beauty products. Back in Krobo Girls&amp;acirc;€™ Senior High school, my bestfriends and I are were', '@dicta_xo', 'Dicta Peprah', 'www.bmvcosmetics.com', 'BMV Cosmetics', 'BMV cosmetics is a Ghanaian Owned Cruelty-free makeup brand. We are three women entrepreneurs&amp;Acirc;&amp;nbsp;with over 15 years of friendship who believe in creating effortless&amp;Acirc;&amp;nbsp;beauty products. We are currently based in Ghana and ', '@bmv.cosmetics', '', 'www.bmvcosmetics.com', 'BMV Cosmetics', '+233 24 022 7083', 'info@bmvcosmetics.com', 'Makeup product of the year: LashNETIC  by BMV Cosmetics \nhttps://www.instagram.com/p/CJXDAKnHlOr/?utm_medium=copy_link\n https://www.instagram.com/p/CJXD6gPnD3C/?utm_medium=copy_link\nhttps://www.instagram.com/p/CREpyr9jONV/?utm_medium=copy_link\nhttps://bmvcosmetics.com/products/baddie?_pos=1&amp;amp;_psq=b&amp;amp;_ss=e&amp;amp;_v=1.0\nhttps://www.instagram.com/reel/CP1kU2THiYZ/?utm_medium=copy_link', 'https://bmvcosmetics.com/products/baddie?_pos=1&amp;amp;_psq=b&amp;amp;_ss=e&amp;amp;_v=1.0\nhttps://bmvcosmetics.com/products/hunny?_pos=1&amp;amp;_psq=hu&amp;amp;_ss=e&amp;amp;_v=1.0\nhttps://bmvcosmetics.com/products/wifey?_pos=1&amp;amp;_psq=w&amp;amp;_', '4', 'd5bca6b2d8c5901a07e25c', '2021-09-26 06:07:33');
INSERT INTO `skincare_brand` VALUES ('3', 'Beauty Product of the Year', 'Evita Joseph Asare', 'evita@evitajoseph.com', '0544680080', 'Evita is the Founder of Evita Joseph Beauty, a leading family-owned beauty brand in Ghana. Her passion for building a generation of confident, beautiful, and influential women today, to be role models for tomorrow&amp;acirc;€™s generations led to her star', 'https://www.instagram.com/evitajosephasare/', 'https://www.facebook.com/nanaoye.amaah/', 'www.josephslab.com', 'Evita Joseph Beauty', 'An African beauty brand with a unique focus on the woman of color. Since 2015, Evita Joseph has been researching, designing and producing world-class beauty and makeup products for the woman of color. Created for the woman of color by a woman of color. Ev', 'https://www.instagram.com/evita_joseph/', 'https://www.facebook.com/evitajosephbeauty', 'https://evitajoseph.com/', 'Evita Joseph Beauty', '0544680080', 'evita@evitajoseph.com', 'A lightweight ,intensely opaque gloss formula with a melted smooth texture that glides on smoothly and moisturizes the lips. The luxurious opaque lip gloss is super comfortable to wear and the formula is one that&amp;acirc;€™s non-sticky.\n\nWhy We Love It\n\nWeightless formula that hugs the lips smoothly\nA unique gloss formula infused with Vitamin E and B Complex\nInfused with rich essentials oils like Jojoba Oil and Macadamia Ternifolia Seed Oil\nWell blend mixture of rich essentials oils that boost the appearance and health of your lips\nSuper hydrating formula that will keep your lips moist and supple all-day\nMacadamia nut seed oil is a very capable anti-aging ingredient, full of antioxidants, essential fatty acids, and other nutrients to nourish, hydrate, and protect the skin.', 'https://evitajoseph.com/collections/lips/products/lip-gloss-league-collection', '8 outlets', '044c6b16901a43a4e2b857', '2021-10-12 11:39:54');
INSERT INTO `skincare_brand` VALUES ('4', 'Skincare Brand of the Year', 'Valerie Obaze', 'gigi@randrluxury.com', '0544921934', 'Beauty entrepreneur', 'Randrluxury', 'Randrluxury', 'RandrluxuryGhana.com', 'R&amp;amp;R Luxury', 'R&amp;amp;R is a sustainable beauty brand based in Ghana. The brand produces all natural, Shea-based skincare products', 'Randrluxury', 'Randrluxury', 'Randrluxury', 'Gigi', '0544921934', 'gigi@randrluxury.com', 'Sleek packaging of international standard', '', '7 within Ghana', 'e81425ca061d6fb8a643dd', '2021-10-12 13:18:27');
INSERT INTO `skincare_brand` VALUES ('5', 'Skincare Brand of the Year', 'Valerie Obaze', 'gigi@randrluxury.com', '0544921934', 'Beauty entrepreneur', 'Randrluxury', 'Randrluxury', 'RandrluxuryGhana.com', 'R&amp;amp;R Luxury', 'R&amp;amp;R is a sustainable beauty brand based in Ghana. The brand produces all natural, Shea-based skincare products', 'Randrluxury', 'Randrluxury', 'Randrluxury', 'Gigi', '0544921934', 'gigi@randrluxury.com', 'Sleek packaging of international standard', '', '7 within Ghana', 'e81425ca061d6fb8a643dd', '2021-10-12 13:18:28');
INSERT INTO `skincare_brand` VALUES ('6', 'Skincare Brand of the Year', 'Angel Amoako', 'angelcomfort27@gmail.com', '0506735189', 'I am a young female entrepreneur who started her shea business immediately after national service (2018) due to how the job market is in Ghana. I&amp;acirc;€™ll be grateful if I am nominated for this award. Thank you.', 'angel_comfort_', 'Angel Comfort Amoako', 'www.thinkshea.com', 'Think Shea', 'Think shea is a skin/hair beauty brand that helps its customers (both male and female not forgetting babies) achieve that beautiful hair and skin they long for with the use of our all natural shea butter.', 'think_shea', 'Think shea', 'www.thinkshea.com', 'Angel Comfort Amoako', '0506735189', 'angelcomfort27@gmail.com', 'Our products can be used for for both hair and skin.', '', '2', '21ab38b89f74da525465f1', '2021-10-12 15:24:32');
INSERT INTO `skincare_brand` VALUES ('7', 'Skincare Brand of the Year', 'Jolene Atchulo', 'sheajo1@yahoo.com', '0544739743', 'Shea Jo&amp;acirc;€™ is an all natural skincare band', 'shea_jo_', 'Shea Jo', '', 'Shea Jo&amp;acirc;€™', 'Shea Jo&amp;acirc;€™ is an all natural skincare band', 'shea_jo_', 'Shea&amp;acirc;€”jo_', '', 'Shea Jo&amp;acirc;€™', '0544749743', 'sheajo1@yahoo.com', 'Very beautiful and eco friendly packaging, very effective products', '', '2', '95e99649d1edb36be56896', '2021-10-12 16:58:06');
INSERT INTO `skincare_brand` VALUES ('8', 'Skincare Brand of the Year', 'Akwasi  Ansong', 'djunior71@gmail.com', '0544001688', 'An avid fan of skincare products from Africa', '', '', '', 'Kaeme Body Care', 'KAEME is a premium Ghanaian company specialising in personal care products such as shea souffl&amp;Atilde;&amp;copy;, liquid black soap, soy candles and African-print toiletry bags. Inspired by the joy of unforgettable memories and cherished experiences, ', 'hellokaeme', 'hellokaeme', 'www.kaeme.com', 'Enoch Appiah Jr', '0507011213', 'hello@kaeme.com', '', '', '20', '222ade52ffe16708871f11', '2021-10-14 08:11:10');
INSERT INTO `skincare_brand` VALUES ('9', 'Skincare Brand of the Year', 'Angel Amoako', 'angelcomfort27@gmail.com', '0506735189', 'I am a young entrepreneur who started her business immediately after national service in 2018. I went into starting my own business because of how the job market is in Ghana. I&amp;acirc;€™ll be grateful if I am nominated for this awards. Thank you.', 'angel_comfort_', 'Angel Comfort Amoako', '', 'Think shea', 'Think shea is a cosmetic beauty brand that seeks to provide the best skin/hair care for both male and female.', 'think_shea', 'Think shea', 'Www.thinkshea.com', 'Think shea', '0506735189', 'thinkshea01@gmail.com', 'Think shea products are all natural and can be used for both hair and skin', '', '2', '7929f5c05632f98c2c81fa', '2021-10-14 15:29:30');
INSERT INTO `skincare_brand` VALUES ('10', 'Beauty Product of the Year', 'Victoria Quaynor', 'asante_victoria@yahoo.com', '0557471464', 'Sales and Marketing Director, Educator and Nail Technician at Bio Sculpture Ghana. Passionate about educating nail technicians and clients on healthy nail care', '@quayn_vee', 'Victoria Quaynor', '', 'Bio Sculpture Ghana', 'Bio Sculpture Ghana is a Nail Training and Distribution Centre Based in Accra. The brand has been in existence for over 33 years however this is the first distribution centre in West Africa. Bio Sculpture is the inventor of the first UV soak off gel. Prod', '@biosculptureghana', 'Bio Sculpture Ghana', '', 'Victoria Quaynor', '0558149557', 'info@biosculptureghana.com', 'Bio Gel, the original UV soak off gel is available in in a 4.5g, 10g or 25g jar. A gel brush is used to apply the gel on the nails. Gel cures in 30sec.Lats 3-4 weeks. No chipping, no excessive filing, minimal dust, no fumes.', 'Instagram: https://www.instagram.com/biosculptureghana/\nFacebook: https://web.facebook.com/biosculptureghana?_rdc=1&amp;amp;_rdr', '10', '03ed3db4681f0b8f646c81', '2021-10-14 20:08:15');

-- ----------------------------
-- Table structure for special_effects
-- ----------------------------
DROP TABLE IF EXISTS `special_effects`;
CREATE TABLE `special_effects` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT '',
  `nominee_name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `mobile_number` varchar(255) DEFAULT '',
  `nominee_bio` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `other` varchar(255) DEFAULT '',
  `company_details` varchar(255) DEFAULT '',
  `comapny_bio` text,
  `company_instagram` varchar(255) DEFAULT '',
  `company_facebook` varchar(255) DEFAULT '',
  `company_other` varchar(255) DEFAULT '',
  `company_name` varchar(255) DEFAULT '',
  `phone_number` varchar(255) DEFAULT '',
  `company_email` varchar(255) DEFAULT '',
  `photo_link` varchar(255) DEFAULT NULL,
  `photo_description` text,
  `special_effect_link` varchar(255) DEFAULT NULL,
  `special_effect_print` text,
  `theatre_link` varchar(255) DEFAULT NULL,
  `theatre_description` text,
  `social_media_link` varchar(255) DEFAULT NULL,
  `social_media_description` text,
  `user_value` varchar(255) DEFAULT '',
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of special_effects
-- ----------------------------
INSERT INTO `special_effects` VALUES ('1', 'Best Special Effects Makeup Artist', 'Amewugah Nathaniel', 'amewugahnathaniel3@gmail.com', '0544463325', 'Nathaniel Amewugah popularly known as Kruz_K. The 26 year-old Ghanaian Special Effects and MakeUp artist holds a Diploma in Theater Arts from GH Media School, where he majored in Makeup and costuming. \nOriginally from Peki in the Volta Region.After breaki', 'Kruz_k', 'Nathaniel kruz', '', '', '', '', '', '', 'Kruz_k Makeup', '0200624588', 'amewugahnathaniel3@gmail.com', 'https://drive.google.com/drive/folders/14hUatHS2ZCxvHb8e_Z7gMIXVIwGwm8xM', 'This makeup I did was for Ghana most beautiful promo advertisement for Tv3 broadcasting network', 'https://www.instagram.com/p/CT5iX41MOvk/?utm_medium=copy_link', 'A young lady suffering from breast cancer was traumatized by loosing her hair .', 'https://www.instagram.com/p/BsWQ49kBGbU/?utm_medium=copy_link', 'This was a stage production titled &amp;acirc;€œThe Trial Of Jj Rawlings &amp;acirc;€œ.', '', '', '1169747505', '2021-09-22 16:28:49');
INSERT INTO `special_effects` VALUES ('2', 'Best Special Effects Makeup Artist', 'Amewugah Nathaniel', 'amewugahnathaniel3@gmail.com', '0544463325', 'Nathaniel Amewugah popularly known as Kruz_K. The 26 year-old Ghanaian Special Effects and MakeUp artist holds a Diploma in Theater Arts from GH Media School, where he majored in Makeup and costuming. \nOriginally from Peki in the Volta Region.After breaki', 'Kruz_k', 'Nathaniel kruz', '', '', '', '', '', '', 'Kruz_k Makeup', '0200624588', 'amewugahnathaniel3@gmail.com', 'https://drive.google.com/drive/folders/14hUatHS2ZCxvHb8e_Z7gMIXVIwGwm8xM', 'This makeup I did was for Ghana most beautiful promo advertisement for Tv3 broadcasting network', 'https://www.instagram.com/p/CT5iX41MOvk/?utm_medium=copy_link', 'A young lady suffering from breast cancer was traumatized by loosing her hair .', 'https://www.instagram.com/p/BsWQ49kBGbU/?utm_medium=copy_link', 'This was a stage production titled &amp;acirc;€œThe Trial Of Jj Rawlings &amp;acirc;€œ.', '', '', '1169747505', '2021-09-22 16:28:51');
INSERT INTO `special_effects` VALUES ('3', 'Best Special Effects Makeup Artist', 'Grace Hayfron', 'hayfronadom@gmail.com', '0241634964', 'Grace Hayforn is a fanti from cape coast and a graduate from Tarkoradi Technical University who studied fashion design nd technology. She is a mother of 2 and the CEO of Gh Beauty Artistry. She is a trained Facilitator who has been in the industrial for 5', '', 'Adom Hayfron', '', 'G.H Beauty Artistry', 'G.H Beauty Artistry is a beauty service provider dedicated in delivering flawless make over.. we ve been in the industry for the past 5years. We started as a beauty store at achimota but now has it own school at Dansoman that we train students on how to do special effect.', 'Ghbeauty_artistry', 'Gh Beauty Artistry', '', 'G.h Beauty Artistry', '0241634964', 'hayfronadom@gmail.com', 'https://www.facebook.com/558158390911082/posts/3746109992115890/', 'This television make up which is a character make up look was used for babyfit baby diaper commercial on almost all tv stations.', 'https://www.instagram.com/p/CE81rU-HnGA/?utm_medium=copy_link', 'This zombie make up was done for CONK MULTIMEDIA for a movie titled sika ye mogya.', 'https://www.instagram.com/p/CE4DhT1jp8w/?utm_medium=copy_link', 'This was an effect created to shiw a pregnant woman who has been murdered in a theatre art at saint Margaret parish hall.', '', '', '224982973', '2021-10-06 17:54:00');
INSERT INTO `special_effects` VALUES ('4', 'Best Special Effects Makeup Artist', 'Anita Karikari', 'anitavictorious@gmail.com', '0549582379', 'Handskills in face painting,wound effects and prosthetics', 'Kk_makeover', '', '', 'KK_MAKEOVER', 'handskills in face painting, prosthetics and wound makeup for movie and IG Champaign', 'KK_MAKEOVER', '', '', 'KK_MAKEOVER', '0549582379', 'anitavictorious@gmail.com', 'https://www.instagram.com/P/CC32VEaJKdu/?utm_medium=copy_link', 'IGTV Champaign exhibiting my skills in wound makeup from Road traffic accident on the face', 'https://www.instagram.com/P/ClbC0WqF4z9/?utm_medium=copy_link', 'Series of effect makeup of face boils,infected wound on skin in a short film called Half the pain', 'https://www.instagram.com/P/CKWm1npIspg/?utm_medium=copy_link', 'Series of effect makeup of open wound exposing the bone,gunshot wound,face bruises for the Dejavu Series season 3', '', '', '1376899837', '2021-10-06 20:20:27');
INSERT INTO `special_effects` VALUES ('5', 'Best Special Effects Makeup Artist', 'Faruza  Yakubu', 'faruzayakubu97@gmail.com', '0503297797', 'I&amp;acirc;€™m faruza Yakubu, a 21 year old student of the university of Ghana, studying geography and sociology. Aside schooling, I&amp;acirc;€™m a self taught makeup artist who is not only into everyday makeup looks but creative and very artistic speci', 'faruza_yakubu', 'faruza_yakubu', '', 'faruza_yakubu', '', 'faruza_yakubu', 'faruza_yakubu', '', 'faruza_yakubu', '0503297797', 'faruzayakubu97@gmail.com', 'https://www.instagram.com/p/CU0Q7k7sdeF/?utm_medium=copy_link', '', '', '', '', '', '', '', '752272478', '2021-10-13 07:42:47');

-- ----------------------------
-- Table structure for upload_photo
-- ----------------------------
DROP TABLE IF EXISTS `upload_photo`;
CREATE TABLE `upload_photo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_value` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `business_photo_url` longtext,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of upload_photo
-- ----------------------------
INSERT INTO `upload_photo` VALUES ('1', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-2nd image COT.jpg', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('2', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-Business reg1.jpg', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('3', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-business reg2.jpg', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('4', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-December fashion show.png', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('5', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-Facials project.png', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('6', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-Fashion show 2.png', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('7', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-fashion show 3.png', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('8', '', '523618d02d82c088838eb9', 'Beauty School of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/-523618d02d82c088838eb9-massage project.png', '2021-10-11 14:35:47');
INSERT INTO `upload_photo` VALUES ('9', 'Ann-Marie', '0c4728bb50f4ac81f555ec', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Ann-Marie-0c4728bb50f4ac81f555ec-PHOTO-2021-03-29-10-10-56.jpg', '2021-10-12 20:43:57');
INSERT INTO `upload_photo` VALUES ('10', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 2.jpg', '2021-10-13 14:27:27');
INSERT INTO `upload_photo` VALUES ('11', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 3.jpg', '2021-10-13 14:27:27');
INSERT INTO `upload_photo` VALUES ('12', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI.jpg', '2021-10-13 14:27:27');
INSERT INTO `upload_photo` VALUES ('13', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Colorbox in Dubai.jpeg', '2021-10-13 14:27:27');
INSERT INTO `upload_photo` VALUES ('14', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Glitz N Foy Giveaway.jpeg', '2021-10-13 14:27:27');
INSERT INTO `upload_photo` VALUES ('15', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-MTN Pulse Ahaspora.jpeg', '2021-10-13 14:27:27');
INSERT INTO `upload_photo` VALUES ('16', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-VeraKing Signature CSR.jpeg', '2021-10-13 14:27:27');
INSERT INTO `upload_photo` VALUES ('17', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 2.jpg', '2021-10-13 14:27:34');
INSERT INTO `upload_photo` VALUES ('18', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 3.jpg', '2021-10-13 14:27:34');
INSERT INTO `upload_photo` VALUES ('19', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI.jpg', '2021-10-13 14:27:34');
INSERT INTO `upload_photo` VALUES ('20', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Colorbox in Dubai.jpeg', '2021-10-13 14:27:34');
INSERT INTO `upload_photo` VALUES ('21', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Glitz N Foy Giveaway.jpeg', '2021-10-13 14:27:34');
INSERT INTO `upload_photo` VALUES ('22', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-MTN Pulse Ahaspora.jpeg', '2021-10-13 14:27:34');
INSERT INTO `upload_photo` VALUES ('23', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-VeraKing Signature CSR.jpeg', '2021-10-13 14:27:34');
INSERT INTO `upload_photo` VALUES ('24', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 2.jpg', '2021-10-13 14:27:36');
INSERT INTO `upload_photo` VALUES ('25', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 3.jpg', '2021-10-13 14:27:36');
INSERT INTO `upload_photo` VALUES ('26', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI.jpg', '2021-10-13 14:27:36');
INSERT INTO `upload_photo` VALUES ('27', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Colorbox in Dubai.jpeg', '2021-10-13 14:27:36');
INSERT INTO `upload_photo` VALUES ('28', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Glitz N Foy Giveaway.jpeg', '2021-10-13 14:27:36');
INSERT INTO `upload_photo` VALUES ('29', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-MTN Pulse Ahaspora.jpeg', '2021-10-13 14:27:36');
INSERT INTO `upload_photo` VALUES ('30', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-VeraKing Signature CSR.jpeg', '2021-10-13 14:27:36');
INSERT INTO `upload_photo` VALUES ('31', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 2.jpg', '2021-10-13 14:27:39');
INSERT INTO `upload_photo` VALUES ('32', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 3.jpg', '2021-10-13 14:27:39');
INSERT INTO `upload_photo` VALUES ('33', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI.jpg', '2021-10-13 14:27:39');
INSERT INTO `upload_photo` VALUES ('34', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Colorbox in Dubai.jpeg', '2021-10-13 14:27:39');
INSERT INTO `upload_photo` VALUES ('35', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Glitz N Foy Giveaway.jpeg', '2021-10-13 14:27:39');
INSERT INTO `upload_photo` VALUES ('36', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-MTN Pulse Ahaspora.jpeg', '2021-10-13 14:27:39');
INSERT INTO `upload_photo` VALUES ('37', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-VeraKing Signature CSR.jpeg', '2021-10-13 14:27:39');
INSERT INTO `upload_photo` VALUES ('38', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 2.jpg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('39', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 3.jpg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('40', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI.jpg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('41', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Colorbox in Dubai.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('42', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Glitz N Foy Giveaway.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('43', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-MTN Pulse Ahaspora.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('44', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-VeraKing Signature CSR.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('45', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 2.jpg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('46', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI 3.jpg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('47', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-CBBI.jpg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('48', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Colorbox in Dubai.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('49', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-Glitz N Foy Giveaway.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('50', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-MTN Pulse Ahaspora.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('51', 'Stephanie', '34c4478f465e3f780f6011', 'Indigenous Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Stephanie-34c4478f465e3f780f6011-VeraKing Signature CSR.jpeg', '2021-10-13 14:27:41');
INSERT INTO `upload_photo` VALUES ('52', 'Sophia', '5518d19750c1c914bce233', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Sophia-5518d19750c1c914bce233-6F5EFD0C-B10D-437D-A7F0-06A5991E4B15.png', '2021-10-13 15:12:11');
INSERT INTO `upload_photo` VALUES ('53', 'Sophia', '5518d19750c1c914bce233', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Sophia-5518d19750c1c914bce233-304AA39D-3E6B-4208-91C6-BFEEDF842E92.jpeg', '2021-10-13 15:12:11');
INSERT INTO `upload_photo` VALUES ('54', 'Sophia', '5518d19750c1c914bce233', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Sophia-5518d19750c1c914bce233-6F5EFD0C-B10D-437D-A7F0-06A5991E4B15.png', '2021-10-13 15:12:32');
INSERT INTO `upload_photo` VALUES ('55', 'Sophia', '5518d19750c1c914bce233', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Sophia-5518d19750c1c914bce233-6F5EFD0C-B10D-437D-A7F0-06A5991E4B15.png', '2021-10-13 15:12:32');
INSERT INTO `upload_photo` VALUES ('56', 'Sophia', '5518d19750c1c914bce233', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Sophia-5518d19750c1c914bce233-6F5EFD0C-B10D-437D-A7F0-06A5991E4B15.png', '2021-10-13 15:12:32');
INSERT INTO `upload_photo` VALUES ('57', 'Colorbox', 'e93521b47a4694f0ff9ec0', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Colorbox-e93521b47a4694f0ff9ec0-Image_1634129492.jpg', '2021-10-13 15:22:06');
INSERT INTO `upload_photo` VALUES ('58', 'Colorbox', 'e93521b47a4694f0ff9ec0', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Colorbox-e93521b47a4694f0ff9ec0-Image_1634129554.jpg', '2021-10-13 15:22:06');
INSERT INTO `upload_photo` VALUES ('59', 'Colorbox', 'e93521b47a4694f0ff9ec0', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Colorbox-e93521b47a4694f0ff9ec0-Image_1634129522.jpg', '2021-10-13 15:22:06');
INSERT INTO `upload_photo` VALUES ('60', 'Habiba', '264254d8fcc24fb45234dd', 'Beauty Retail Business of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Habiba-264254d8fcc24fb45234dd-FBB0BBF0-B340-4F8B-A237-1E1376870A9F.jpeg', '2021-10-13 23:15:25');
INSERT INTO `upload_photo` VALUES ('61', 'Winnie', '9bd2753e95340c7d27595c', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Winnie-9bd2753e95340c7d27595c-assisting clients for in store experience.jpg', '2021-10-14 10:53:58');
INSERT INTO `upload_photo` VALUES ('62', 'Winnie', '9bd2753e95340c7d27595c', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Winnie-9bd2753e95340c7d27595c-christmas celebration with clients.jpeg', '2021-10-14 10:53:58');
INSERT INTO `upload_photo` VALUES ('63', 'Winnie', '9bd2753e95340c7d27595c', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Winnie-9bd2753e95340c7d27595c-mothers day give away.jpeg', '2021-10-14 10:53:58');
INSERT INTO `upload_photo` VALUES ('64', 'WINNIE', '2208bf3513b08cbdb00d87', 'Beauty Retail Business of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/WINNIE-2208bf3513b08cbdb00d87-customers choice award.jpeg', '2021-10-14 13:20:19');
INSERT INTO `upload_photo` VALUES ('65', 'WINNIE', '2208bf3513b08cbdb00d87', 'Beauty Retail Business of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/WINNIE-2208bf3513b08cbdb00d87-international products award.jpeg', '2021-10-14 13:20:19');
INSERT INTO `upload_photo` VALUES ('66', 'WINNIE', '2208bf3513b08cbdb00d87', 'Beauty Retail Business of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/WINNIE-2208bf3513b08cbdb00d87-makeup Awards.jpeg', '2021-10-14 13:20:19');
INSERT INTO `upload_photo` VALUES ('67', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-_B5A9336.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('68', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Copy of Fullish-Art-KAEME-2020-selormjay-2-16.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('69', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-1-13.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('70', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-2-11.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('71', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0025.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('72', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0313 copy.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('73', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0409.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('74', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0006.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('75', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0009.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('76', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0014_1 copy.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('77', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_9504.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('78', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Biz registration.jpg', '2021-10-15 08:45:09');
INSERT INTO `upload_photo` VALUES ('79', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-_B5A9336.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('80', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Copy of Fullish-Art-KAEME-2020-selormjay-2-16.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('81', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-1-13.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('82', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-2-11.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('83', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0025.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('84', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0313 copy.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('85', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0409.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('86', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0006.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('87', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0009.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('88', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0014_1 copy.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('89', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_9504.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('90', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Biz registration.jpg', '2021-10-15 08:45:14');
INSERT INTO `upload_photo` VALUES ('91', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Biz registration.jpg', '2021-10-15 08:45:24');
INSERT INTO `upload_photo` VALUES ('92', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0004_1.jpg', '2021-10-15 08:45:24');
INSERT INTO `upload_photo` VALUES ('93', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0006_1 copy.jpg', '2021-10-15 08:45:24');
INSERT INTO `upload_photo` VALUES ('94', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0020_1 copy.jpg', '2021-10-15 08:45:24');
INSERT INTO `upload_photo` VALUES ('95', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-_B5A9336.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('96', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Copy of Fullish-Art-KAEME-2020-selormjay-2-16.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('97', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-1-13.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('98', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-2-11.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('99', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0025.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('100', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0313 copy.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('101', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0409.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('102', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0006.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('103', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0009.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('104', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_0014_1 copy.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('105', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-IMG_9504.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('106', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Biz registration.jpg', '2021-10-15 08:45:31');
INSERT INTO `upload_photo` VALUES ('107', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-_B5A9336.jpg', '2021-10-15 08:51:08');
INSERT INTO `upload_photo` VALUES ('108', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-_B5A9336.jpg', '2021-10-15 08:51:08');
INSERT INTO `upload_photo` VALUES ('109', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-_B5A9336.jpg', '2021-10-15 09:00:03');
INSERT INTO `upload_photo` VALUES ('110', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Copy of Fullish-Art-KAEME-2020-selormjay-2-16.jpg', '2021-10-15 09:00:03');
INSERT INTO `upload_photo` VALUES ('111', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-1-13.jpg', '2021-10-15 09:00:03');
INSERT INTO `upload_photo` VALUES ('112', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-2-11.jpg', '2021-10-15 09:00:03');
INSERT INTO `upload_photo` VALUES ('113', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0025.jpg', '2021-10-15 09:00:03');
INSERT INTO `upload_photo` VALUES ('114', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-_B5A9336.jpg', '2021-10-15 09:06:29');
INSERT INTO `upload_photo` VALUES ('115', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Copy of Fullish-Art-KAEME-2020-selormjay-2-16.jpg', '2021-10-15 09:06:29');
INSERT INTO `upload_photo` VALUES ('116', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-1-13.jpg', '2021-10-15 09:06:29');
INSERT INTO `upload_photo` VALUES ('117', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-2-11.jpg', '2021-10-15 09:06:29');
INSERT INTO `upload_photo` VALUES ('118', 'Akwasi', 'c1a31c236ef9a3ab861fe2', 'Best Customer Service Experience', 'http://mysmsinbox.com/gma/nomination/category/uploads/general/Akwasi-c1a31c236ef9a3ab861fe2-Fullish-Art-KAEME-2020-selormjay-0025.jpg', '2021-10-15 09:06:29');

-- ----------------------------
-- Table structure for upload_photo_non_bussiness
-- ----------------------------
DROP TABLE IF EXISTS `upload_photo_non_bussiness`;
CREATE TABLE `upload_photo_non_bussiness` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_value` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `project_photo_url` longtext,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of upload_photo_non_bussiness
-- ----------------------------
INSERT INTO `upload_photo_non_bussiness` VALUES ('1', 'George Kwame', '1c41a828578c16a1e9d306', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-1c41a828578c16a1e9d306-20190826_195501-1.jpg', '2021-09-22 22:36:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('2', 'George Kwame', '021c994843df017c3199f5', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-021c994843df017c3199f5-IMG-20200608-WA0018-1.jpg', '2021-09-22 22:43:02');
INSERT INTO `upload_photo_non_bussiness` VALUES ('3', 'George Kwame', 'dde3d6194b5ac9489110e2', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-dde3d6194b5ac9489110e2-FB_IMG_1480491244986.jpg', '2021-09-22 22:50:42');
INSERT INTO `upload_photo_non_bussiness` VALUES ('4', 'George Kwame', '6923c2a760df8be3a2a853', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-6923c2a760df8be3a2a853-IMG_20210718_185009_14.jpg', '2021-09-22 22:54:02');
INSERT INTO `upload_photo_non_bussiness` VALUES ('5', 'Bernard Joachim', 'c4218a891c39a658d2cc3b', 'Barber of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Bernard Joachim-c4218a891c39a658d2cc3b-3EB83EE6-2AE8-4B51-941C-082F83D2E8AC.jpeg', '2021-09-23 12:41:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('6', 'Bernard Joachim', 'c4218a891c39a658d2cc3b', 'Barber of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Bernard Joachim-c4218a891c39a658d2cc3b-7711563D-961E-45A6-AE11-03A68DB2A75B.jpeg', '2021-09-23 12:41:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('7', 'Bernard Joachim', 'c4218a891c39a658d2cc3b', 'Barber of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Bernard Joachim-c4218a891c39a658d2cc3b-21032243-1EBA-4227-877F-C490407D16E1.jpeg', '2021-09-23 12:41:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('8', 'George Kwame', '76606ff19d476f902f1340', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-76606ff19d476f902f1340-A76ED10C-13DE-4D62-84DD-2FCFDDA383C3.jpeg', '2021-09-23 13:20:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('9', 'George Kwame', '76606ff19d476f902f1340', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-76606ff19d476f902f1340-1F3F2E66-AD3D-45C3-ABC9-D61C6FF645E7.jpeg', '2021-09-23 13:20:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('10', 'George Kwame', '76606ff19d476f902f1340', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-76606ff19d476f902f1340-1F5225AF-CCF7-4056-914F-D3BA0DF41E85.jpeg', '2021-09-23 13:20:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('11', 'George Kwame', '76606ff19d476f902f1340', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-76606ff19d476f902f1340-A76ED10C-13DE-4D62-84DD-2FCFDDA383C3.jpeg', '2021-09-23 13:25:38');
INSERT INTO `upload_photo_non_bussiness` VALUES ('12', 'George Kwame', '76606ff19d476f902f1340', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-76606ff19d476f902f1340-1F3F2E66-AD3D-45C3-ABC9-D61C6FF645E7.jpeg', '2021-09-23 13:25:38');
INSERT INTO `upload_photo_non_bussiness` VALUES ('13', 'George Kwame', '76606ff19d476f902f1340', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-76606ff19d476f902f1340-1F5225AF-CCF7-4056-914F-D3BA0DF41E85.jpeg', '2021-09-23 13:25:38');
INSERT INTO `upload_photo_non_bussiness` VALUES ('14', 'George Kwame', '1dd954b6ab260812d77aaa', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-1dd954b6ab260812d77aaa-DB0D3EFE-5E3B-4D8A-916E-C0030BB7F7E7.jpeg', '2021-09-23 13:49:14');
INSERT INTO `upload_photo_non_bussiness` VALUES ('15', 'George Kwame', '1dd954b6ab260812d77aaa', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-1dd954b6ab260812d77aaa-8313F80C-BDE3-4B2C-8C13-C0699499449C.jpeg', '2021-09-23 13:49:14');
INSERT INTO `upload_photo_non_bussiness` VALUES ('16', 'George Kwame', '1dd954b6ab260812d77aaa', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-1dd954b6ab260812d77aaa-358BB141-D374-41FA-8051-4BC7C069AC50.jpeg', '2021-09-23 13:49:14');
INSERT INTO `upload_photo_non_bussiness` VALUES ('17', 'George', '59c3c660769d1a6c3cc7a8', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-59c3c660769d1a6c3cc7a8-4FAE4912-AB1F-479B-A207-CEEBCF1C5DF7.jpeg', '2021-09-23 16:44:23');
INSERT INTO `upload_photo_non_bussiness` VALUES ('18', 'George', '59c3c660769d1a6c3cc7a8', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-59c3c660769d1a6c3cc7a8-D80E7D45-0874-4E17-A276-ED4DB85DE1FD.jpeg', '2021-09-23 16:44:23');
INSERT INTO `upload_photo_non_bussiness` VALUES ('19', 'George', '59c3c660769d1a6c3cc7a8', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-59c3c660769d1a6c3cc7a8-BB7C8188-4A75-42DE-A57F-96520BE05DB0.jpeg', '2021-09-23 16:44:23');
INSERT INTO `upload_photo_non_bussiness` VALUES ('20', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-D018294F-1A97-4DD6-B7AF-D7FD95D752E2.jpeg', '2021-09-23 18:48:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('21', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-12DDF4F7-DF5F-4193-A9A0-94A68BAA7199.jpeg', '2021-09-23 18:48:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('22', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-3261985F-1A0E-4A9F-AED8-5A38A5EDD484.png', '2021-09-23 18:48:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('23', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-17CAE6D4-239F-4537-AC88-52B06F2F2E1D.png', '2021-09-23 18:48:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('24', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-D018294F-1A97-4DD6-B7AF-D7FD95D752E2.jpeg', '2021-09-23 18:48:57');
INSERT INTO `upload_photo_non_bussiness` VALUES ('25', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-12DDF4F7-DF5F-4193-A9A0-94A68BAA7199.jpeg', '2021-09-23 18:48:57');
INSERT INTO `upload_photo_non_bussiness` VALUES ('26', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-D018294F-1A97-4DD6-B7AF-D7FD95D752E2.jpeg', '2021-09-23 18:48:58');
INSERT INTO `upload_photo_non_bussiness` VALUES ('27', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-12DDF4F7-DF5F-4193-A9A0-94A68BAA7199.jpeg', '2021-09-23 18:48:58');
INSERT INTO `upload_photo_non_bussiness` VALUES ('28', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-D018294F-1A97-4DD6-B7AF-D7FD95D752E2.jpeg', '2021-09-23 18:48:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('29', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-12DDF4F7-DF5F-4193-A9A0-94A68BAA7199.jpeg', '2021-09-23 18:48:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('30', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-D018294F-1A97-4DD6-B7AF-D7FD95D752E2.jpeg', '2021-09-23 18:48:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('31', 'Regina', 'ccaf31ff0aa515559a8e02', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Regina-ccaf31ff0aa515559a8e02-12DDF4F7-DF5F-4193-A9A0-94A68BAA7199.jpeg', '2021-09-23 18:48:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('32', 'George Kwame', '42bd1d1c41d4a66f17ede1', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-42bd1d1c41d4a66f17ede1-IMG-20210924-WA0002.jpg', '2021-09-24 08:39:05');
INSERT INTO `upload_photo_non_bussiness` VALUES ('33', 'George Kwame', '42bd1d1c41d4a66f17ede1', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-42bd1d1c41d4a66f17ede1-IMG-20210924-WA0001.jpg', '2021-09-24 09:07:50');
INSERT INTO `upload_photo_non_bussiness` VALUES ('47', 'George Kwame', '8a276a4b21aeff5d4270c5', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George Kwame-8a276a4b21aeff5d4270c5-IMG-20200608-WA0020.jpg', '2021-09-24 20:43:05');
INSERT INTO `upload_photo_non_bussiness` VALUES ('48', 'George', '0364c7333344f78f227d71', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-0364c7333344f78f227d71-06241744-2B82-4F0D-8C79-5E8B580C7AFA.jpeg', '2021-09-25 22:15:17');
INSERT INTO `upload_photo_non_bussiness` VALUES ('49', 'George', '0364c7333344f78f227d71', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-0364c7333344f78f227d71-29BA7131-8AE7-4A1A-9BF8-C51E21A08B65.jpeg', '2021-09-25 22:15:17');
INSERT INTO `upload_photo_non_bussiness` VALUES ('50', 'George', '0364c7333344f78f227d71', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-0364c7333344f78f227d71-506BB57A-F843-4D32-B0C6-EEC2D11A6939.jpeg', '2021-09-25 22:15:17');
INSERT INTO `upload_photo_non_bussiness` VALUES ('51', 'George', '84de080b725499b448a529', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-84de080b725499b448a529-8F80CE73-F74E-4CDF-8F6F-D87DFBAFC035.jpeg', '2021-09-25 22:26:26');
INSERT INTO `upload_photo_non_bussiness` VALUES ('52', 'George', '84de080b725499b448a529', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-84de080b725499b448a529-AF528A99-5A6B-4FA9-8D77-CF3719F3D7F3.jpeg', '2021-09-25 22:26:26');
INSERT INTO `upload_photo_non_bussiness` VALUES ('53', 'George', '84de080b725499b448a529', 'Most Promising Barber', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/George-84de080b725499b448a529-D86CDB36-ACA4-4295-AFB6-BAA067E966D2.jpeg', '2021-09-25 22:26:26');
INSERT INTO `upload_photo_non_bussiness` VALUES ('54', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-4D9CA00B-62D3-40A1-B169-A54C07F26585.jpeg', '2021-09-27 23:00:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('55', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-D8CEB090-9ADF-4FE0-9C74-2984FA7F5E3A.jpeg', '2021-09-27 23:00:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('56', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-BFAD9976-3BD9-4EE1-943E-96D4DD3C9A4D.jpeg', '2021-09-27 23:00:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('57', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-B1FB4DE5-40F3-4EB6-B7B4-D8B03127CEBC.jpeg', '2021-09-27 23:00:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('58', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-A5FD667C-8291-4761-B7A4-BE68DD46E0DD.jpeg', '2021-09-27 23:00:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('59', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-4D9CA00B-62D3-40A1-B169-A54C07F26585.jpeg', '2021-09-27 23:00:42');
INSERT INTO `upload_photo_non_bussiness` VALUES ('60', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-4D9CA00B-62D3-40A1-B169-A54C07F26585.jpeg', '2021-09-27 23:00:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('61', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-D8CEB090-9ADF-4FE0-9C74-2984FA7F5E3A.jpeg', '2021-09-27 23:00:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('62', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-BFAD9976-3BD9-4EE1-943E-96D4DD3C9A4D.jpeg', '2021-09-27 23:00:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('63', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-4D9CA00B-62D3-40A1-B169-A54C07F26585.jpeg', '2021-09-27 23:00:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('64', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-D8CEB090-9ADF-4FE0-9C74-2984FA7F5E3A.jpeg', '2021-09-27 23:00:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('65', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-BFAD9976-3BD9-4EE1-943E-96D4DD3C9A4D.jpeg', '2021-09-27 23:00:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('66', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-27 23:06:32');
INSERT INTO `upload_photo_non_bussiness` VALUES ('67', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-EE2C6709-9B01-4A42-AD4C-77E80B834966.jpeg', '2021-09-27 23:06:32');
INSERT INTO `upload_photo_non_bussiness` VALUES ('68', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-BA388A6E-D6BF-44F8-B856-6B331885418B.jpeg', '2021-09-27 23:06:32');
INSERT INTO `upload_photo_non_bussiness` VALUES ('69', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-27 23:06:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('70', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-EE2C6709-9B01-4A42-AD4C-77E80B834966.jpeg', '2021-09-27 23:06:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('71', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-BA388A6E-D6BF-44F8-B856-6B331885418B.jpeg', '2021-09-27 23:06:41');
INSERT INTO `upload_photo_non_bussiness` VALUES ('72', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-27 23:06:48');
INSERT INTO `upload_photo_non_bussiness` VALUES ('73', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-EE2C6709-9B01-4A42-AD4C-77E80B834966.jpeg', '2021-09-27 23:06:48');
INSERT INTO `upload_photo_non_bussiness` VALUES ('74', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-28 06:01:21');
INSERT INTO `upload_photo_non_bussiness` VALUES ('75', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-EE2C6709-9B01-4A42-AD4C-77E80B834966.jpeg', '2021-09-28 06:01:21');
INSERT INTO `upload_photo_non_bussiness` VALUES ('76', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-BA388A6E-D6BF-44F8-B856-6B331885418B.jpeg', '2021-09-28 06:01:21');
INSERT INTO `upload_photo_non_bussiness` VALUES ('77', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-28 06:01:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('78', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-28 06:01:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('79', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-EE2C6709-9B01-4A42-AD4C-77E80B834966.jpeg', '2021-09-28 06:01:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('80', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-28 06:01:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('81', 'Cynthia', '4b2d92af63f8980b28b943', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Cynthia-4b2d92af63f8980b28b943-1013CB26-1623-4997-9EF8-2B600EC3DDF8.jpeg', '2021-09-28 06:01:37');
INSERT INTO `upload_photo_non_bussiness` VALUES ('82', 'Ada', 'f1fadc87725242fb75ebef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ada-f1fadc87725242fb75ebef-E5E34626-C76E-4949-8402-34F214971BED.jpeg', '2021-09-28 09:38:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('83', 'Ada', 'f1fadc87725242fb75ebef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ada-f1fadc87725242fb75ebef-E1EA9D4E-E0D0-4FDE-92B0-ED5C1C73D0A6.jpeg', '2021-09-28 09:38:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('84', 'Ada', 'f1fadc87725242fb75ebef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ada-f1fadc87725242fb75ebef-DEF659AF-2A35-43B7-B083-7B9125B5DF84.jpeg', '2021-09-28 09:38:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('85', 'Ada', 'f1fadc87725242fb75ebef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ada-f1fadc87725242fb75ebef-E5E34626-C76E-4949-8402-34F214971BED.jpeg', '2021-09-28 09:38:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('86', 'Ada', 'f1fadc87725242fb75ebef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ada-f1fadc87725242fb75ebef-E5E34626-C76E-4949-8402-34F214971BED.jpeg', '2021-09-28 09:38:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('87', 'Ada', 'f1fadc87725242fb75ebef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ada-f1fadc87725242fb75ebef-E5E34626-C76E-4949-8402-34F214971BED.jpeg', '2021-09-28 09:38:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('88', 'Ada', 'f1fadc87725242fb75ebef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ada-f1fadc87725242fb75ebef-E5E34626-C76E-4949-8402-34F214971BED.jpeg', '2021-09-28 09:38:59');
INSERT INTO `upload_photo_non_bussiness` VALUES ('89', 'Raymond', '699be7dace20fa203397a8', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Raymond-699be7dace20fa203397a8-6179DC7E-EC6D-4E47-AF1D-01CB4B83F270.jpeg', '2021-09-28 23:20:53');
INSERT INTO `upload_photo_non_bussiness` VALUES ('90', 'Raymond', '699be7dace20fa203397a8', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Raymond-699be7dace20fa203397a8-A6967D5E-1C12-421E-860B-64263B646CDE.jpeg', '2021-09-28 23:20:53');
INSERT INTO `upload_photo_non_bussiness` VALUES ('91', 'Raymond', '699be7dace20fa203397a8', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Raymond-699be7dace20fa203397a8-8B9A11D3-CBA3-49BA-95FC-F755E3ED31F3.jpeg', '2021-09-28 23:20:53');
INSERT INTO `upload_photo_non_bussiness` VALUES ('92', 'Stella', '4ff004402ca4bfcf60ed8a', 'Hair Cutting Stylist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Stella-4ff004402ca4bfcf60ed8a-A90D36E5-8708-483F-8FF8-82B41AF47A8F.jpeg', '2021-09-28 23:21:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('93', 'Stella', '4ff004402ca4bfcf60ed8a', 'Hair Cutting Stylist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Stella-4ff004402ca4bfcf60ed8a-D4796EFF-2382-4EEA-BDE3-0AED36B2972F.jpeg', '2021-09-28 23:21:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('94', 'Stella', '4ff004402ca4bfcf60ed8a', 'Hair Cutting Stylist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Stella-4ff004402ca4bfcf60ed8a-958E4F55-7137-4EA6-AEDC-0BA45CBFEDA5.jpeg', '2021-09-28 23:21:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('95', 'Portia', '14d6a5e9817c7d60a88c46', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-14d6a5e9817c7d60a88c46-29203BF3-90D6-47EC-B4CD-D55D51428F5B.jpeg', '2021-10-03 17:09:31');
INSERT INTO `upload_photo_non_bussiness` VALUES ('96', 'Portia', '14d6a5e9817c7d60a88c46', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-14d6a5e9817c7d60a88c46-B6F0DE74-27DD-4468-B1C5-E206A0C68A10.jpeg', '2021-10-03 17:09:31');
INSERT INTO `upload_photo_non_bussiness` VALUES ('97', 'Portia', '14d6a5e9817c7d60a88c46', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-14d6a5e9817c7d60a88c46-CB064475-A053-4D6B-9AF2-1BB64C00DDEB.jpeg', '2021-10-03 17:09:31');
INSERT INTO `upload_photo_non_bussiness` VALUES ('98', 'Portia', '14d6a5e9817c7d60a88c46', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-14d6a5e9817c7d60a88c46-29203BF3-90D6-47EC-B4CD-D55D51428F5B.jpeg', '2021-10-03 17:09:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('99', 'Portia', 'fca3492420d53ba454349f', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-fca3492420d53ba454349f-DCAE8CEA-0B6B-4790-B840-5C02B65746DC.jpeg', '2021-10-03 19:22:34');
INSERT INTO `upload_photo_non_bussiness` VALUES ('100', 'Portia', 'fca3492420d53ba454349f', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-fca3492420d53ba454349f-26150352-4868-4171-B655-64BB737CE9CC.jpeg', '2021-10-03 19:22:34');
INSERT INTO `upload_photo_non_bussiness` VALUES ('101', 'Portia', 'fca3492420d53ba454349f', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-fca3492420d53ba454349f-30953053-2D26-4832-8006-E3418DF18451.jpeg', '2021-10-03 19:22:34');
INSERT INTO `upload_photo_non_bussiness` VALUES ('102', 'Portia', 'fca3492420d53ba454349f', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-fca3492420d53ba454349f-DCAE8CEA-0B6B-4790-B840-5C02B65746DC.jpeg', '2021-10-03 19:22:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('103', 'Portia', 'fca3492420d53ba454349f', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-fca3492420d53ba454349f-26150352-4868-4171-B655-64BB737CE9CC.jpeg', '2021-10-03 19:22:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('104', 'Portia', 'fca3492420d53ba454349f', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-fca3492420d53ba454349f-30953053-2D26-4832-8006-E3418DF18451.jpeg', '2021-10-03 19:22:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('117', 'Kareena', 'abe243d1ec1a98574c20d2', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Kareena-abe243d1ec1a98574c20d2-A89B4DF7-C5BF-43A1-BAE5-290F4545C79E.png', '2021-10-04 14:47:56');
INSERT INTO `upload_photo_non_bussiness` VALUES ('106', 'Portia', '64783adfedc9f8ea71d765', 'People`s Choice Award', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-64783adfedc9f8ea71d765-35D5F330-F155-4E9C-9E43-02957B8F1695.jpeg', '2021-10-04 09:35:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('107', 'Portia', '64783adfedc9f8ea71d765', 'People`s Choice Award', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-64783adfedc9f8ea71d765-D94429C8-264D-4E0C-9018-F65D59E1464C.jpeg', '2021-10-04 09:35:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('108', 'Portia', '64783adfedc9f8ea71d765', 'People`s Choice Award', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-64783adfedc9f8ea71d765-ABCE70BE-D692-4DB5-80CD-364A860C6285.jpeg', '2021-10-04 09:35:43');
INSERT INTO `upload_photo_non_bussiness` VALUES ('109', 'Portia', '64783adfedc9f8ea71d765', 'People`s Choice Award', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Portia-64783adfedc9f8ea71d765-35D5F330-F155-4E9C-9E43-02957B8F1695.jpeg', '2021-10-04 09:36:07');
INSERT INTO `upload_photo_non_bussiness` VALUES ('114', 'Reine', '6b0edf0d65585a5656a0ef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Reine-6b0edf0d65585a5656a0ef-WhatsApp Image 2021-10-04 at 12.28.27(4).jpeg', '2021-10-04 14:10:19');
INSERT INTO `upload_photo_non_bussiness` VALUES ('115', 'Reine', '6b0edf0d65585a5656a0ef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Reine-6b0edf0d65585a5656a0ef-WhatsApp Image 2021-10-04 at 12.28.27(3).jpeg', '2021-10-04 14:10:19');
INSERT INTO `upload_photo_non_bussiness` VALUES ('116', 'Reine', '6b0edf0d65585a5656a0ef', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Reine-6b0edf0d65585a5656a0ef-WhatsApp Image 2021-10-04 at 12.28.27(1).jpeg', '2021-10-04 14:10:19');
INSERT INTO `upload_photo_non_bussiness` VALUES ('118', 'Kareena', 'abe243d1ec1a98574c20d2', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Kareena-abe243d1ec1a98574c20d2-B793B834-1F68-4937-B66B-27005FA73240.jpeg', '2021-10-04 14:47:56');
INSERT INTO `upload_photo_non_bussiness` VALUES ('119', 'Kareena', 'abe243d1ec1a98574c20d2', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Kareena-abe243d1ec1a98574c20d2-B6D5B5AD-6BE4-4D21-B292-43E0378EB555.jpeg', '2021-10-04 14:47:56');
INSERT INTO `upload_photo_non_bussiness` VALUES ('120', 'Kareena', 'f54a38e0bcc07600ce689d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Kareena-f54a38e0bcc07600ce689d-5586C21E-6EDD-4A8B-85E0-C50349642676.jpeg', '2021-10-04 15:31:44');
INSERT INTO `upload_photo_non_bussiness` VALUES ('121', 'Andrews', '11c1fd3fc6cb399634e125', 'Barber of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Andrews-11c1fd3fc6cb399634e125-A38BB195-CF71-4683-9606-411D4E3E01E5.jpeg', '2021-10-05 18:45:12');
INSERT INTO `upload_photo_non_bussiness` VALUES ('122', 'Andrews', '11c1fd3fc6cb399634e125', 'Barber of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Andrews-11c1fd3fc6cb399634e125-4BD09D74-7DFA-4A0F-B8A7-4AC6B4E5916B.jpeg', '2021-10-05 18:45:12');
INSERT INTO `upload_photo_non_bussiness` VALUES ('123', 'Andrews', '11c1fd3fc6cb399634e125', 'Barber of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Andrews-11c1fd3fc6cb399634e125-822C9A08-393F-4758-ACB5-C8582ED97237.jpeg', '2021-10-05 18:45:12');
INSERT INTO `upload_photo_non_bussiness` VALUES ('124', 'Grace', '224982973', 'Best Special Effects Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Grace-224982973-Screenshot_20211006-180510.jpg', '2021-10-06 18:11:22');
INSERT INTO `upload_photo_non_bussiness` VALUES ('125', 'Anita', '1376899837', 'Best Special Effects Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Anita-1376899837-kk_makeover-20211006-0006.jpg', '2021-10-06 20:22:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('126', 'Anita', '1376899837', 'Best Special Effects Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Anita-1376899837-kk_makeover-20211006-0001.jpg', '2021-10-06 20:23:55');
INSERT INTO `upload_photo_non_bussiness` VALUES ('127', 'Anita', '1376899837', 'Best Special Effects Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Anita-1376899837-kk_makeover-20211006-0003.jpg', '2021-10-06 20:24:05');
INSERT INTO `upload_photo_non_bussiness` VALUES ('128', 'Anita', '1376899837', 'Best Special Effects Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Anita-1376899837-kk_makeover-20211006-0003.jpg', '2021-10-06 20:24:33');
INSERT INTO `upload_photo_non_bussiness` VALUES ('129', 'Ida', 'aa11006116f096dfdf336a', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Ida-aa11006116f096dfdf336a-Rate Card pic 3.JPG', '2021-10-12 10:55:02');
INSERT INTO `upload_photo_non_bussiness` VALUES ('130', 'Elizabeth', '7d625b29c101cfa682da2c', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Elizabeth-7d625b29c101cfa682da2c-897A0DB2-C456-4565-9F61-1930161FC6D8.jpeg', '2021-10-12 12:14:28');
INSERT INTO `upload_photo_non_bussiness` VALUES ('131', 'Elizabeth', '7d625b29c101cfa682da2c', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Elizabeth-7d625b29c101cfa682da2c-7D1AE9BE-AFB7-4201-9EBE-299039A3DA5A.jpeg', '2021-10-12 12:14:28');
INSERT INTO `upload_photo_non_bussiness` VALUES ('132', 'Elizabeth', '7d625b29c101cfa682da2c', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Elizabeth-7d625b29c101cfa682da2c-ADE13FA1-2D18-4534-9674-E7B1A51D95AD.jpeg', '2021-10-12 12:14:28');
INSERT INTO `upload_photo_non_bussiness` VALUES ('133', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-8EF30D2B-D9F5-466F-9A1D-AB723E0DA051.jpeg', '2021-10-12 12:20:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('134', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-53A04A55-E8D9-4CF0-92B3-40F641BE7690.jpeg', '2021-10-12 12:20:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('135', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-9D7EF4AA-132E-4117-A76C-7EAE06B42ECA.jpeg', '2021-10-12 12:20:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('136', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-8EF30D2B-D9F5-466F-9A1D-AB723E0DA051.jpeg', '2021-10-12 12:20:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('137', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-53A04A55-E8D9-4CF0-92B3-40F641BE7690.jpeg', '2021-10-12 12:20:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('138', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-9D7EF4AA-132E-4117-A76C-7EAE06B42ECA.jpeg', '2021-10-12 12:20:47');
INSERT INTO `upload_photo_non_bussiness` VALUES ('139', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-8EF30D2B-D9F5-466F-9A1D-AB723E0DA051.jpeg', '2021-10-12 12:20:48');
INSERT INTO `upload_photo_non_bussiness` VALUES ('140', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-53A04A55-E8D9-4CF0-92B3-40F641BE7690.jpeg', '2021-10-12 12:20:48');
INSERT INTO `upload_photo_non_bussiness` VALUES ('141', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-8EF30D2B-D9F5-466F-9A1D-AB723E0DA051.jpeg', '2021-10-12 12:20:48');
INSERT INTO `upload_photo_non_bussiness` VALUES ('142', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-53A04A55-E8D9-4CF0-92B3-40F641BE7690.jpeg', '2021-10-12 12:20:48');
INSERT INTO `upload_photo_non_bussiness` VALUES ('143', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-9D7EF4AA-132E-4117-A76C-7EAE06B42ECA.jpeg', '2021-10-12 12:20:48');
INSERT INTO `upload_photo_non_bussiness` VALUES ('144', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-F1628B18-0A1F-4B8F-ABB1-5E86C27345F9.jpeg', '2021-10-12 12:21:01');
INSERT INTO `upload_photo_non_bussiness` VALUES ('145', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-D025AED3-1848-4CED-B9F0-82A24070EF3D.jpeg', '2021-10-12 12:21:01');
INSERT INTO `upload_photo_non_bussiness` VALUES ('146', 'Serwah', '7cc84a93934b747a8208d2', 'Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Serwah-7cc84a93934b747a8208d2-725EE39C-79F1-481E-8D6D-3E9BEA6CF2FF.jpeg', '2021-10-12 12:21:01');
INSERT INTO `upload_photo_non_bussiness` VALUES ('147', 'Baaba', 'a0bdacac80476afc0cc6d5', 'Nail Technician of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Baaba-a0bdacac80476afc0cc6d5-EC37B3C6-CFF9-4882-8781-CD9C906C9F48.jpeg', '2021-10-12 12:52:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('148', 'Baaba', 'a0bdacac80476afc0cc6d5', 'Nail Technician of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Baaba-a0bdacac80476afc0cc6d5-A2C9DAB7-F397-4924-B8FD-712DD9C076EB.jpeg', '2021-10-12 12:52:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('149', 'Baaba', 'a0bdacac80476afc0cc6d5', 'Nail Technician of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Baaba-a0bdacac80476afc0cc6d5-612AE787-EB9F-4C62-9B5F-E5F06494FF6F.jpeg', '2021-10-12 12:52:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('150', 'Baaba', 'a0bdacac80476afc0cc6d5', 'Nail Technician of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Baaba-a0bdacac80476afc0cc6d5-EC37B3C6-CFF9-4882-8781-CD9C906C9F48.jpeg', '2021-10-12 12:52:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('151', 'Baaba', 'a0bdacac80476afc0cc6d5', 'Nail Technician of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Baaba-a0bdacac80476afc0cc6d5-A2C9DAB7-F397-4924-B8FD-712DD9C076EB.jpeg', '2021-10-12 12:52:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('152', 'Baaba', 'a0bdacac80476afc0cc6d5', 'Nail Technician of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Baaba-a0bdacac80476afc0cc6d5-612AE787-EB9F-4C62-9B5F-E5F06494FF6F.jpeg', '2021-10-12 12:52:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('153', 'Stephanie', 'a4a73fc626387007081cc1', 'People`s Choice Award', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Stephanie-a4a73fc626387007081cc1-Image_1634129492.jpg', '2021-10-13 12:53:12');
INSERT INTO `upload_photo_non_bussiness` VALUES ('154', 'Stephanie', 'a4a73fc626387007081cc1', 'People`s Choice Award', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Stephanie-a4a73fc626387007081cc1-Image_1634129522.jpg', '2021-10-13 12:53:12');
INSERT INTO `upload_photo_non_bussiness` VALUES ('155', 'Stephanie', 'a4a73fc626387007081cc1', 'People`s Choice Award', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Stephanie-a4a73fc626387007081cc1-Image_1634129554.jpg', '2021-10-13 12:53:12');
INSERT INTO `upload_photo_non_bussiness` VALUES ('156', 'Yasmine', '556cb15bc9b206c32c765d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Yasmine-556cb15bc9b206c32c765d-7D3A42EB-44B5-4F4D-AF24-A6C47DB07F37.jpeg', '2021-10-13 13:43:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('157', 'Yasmine', '556cb15bc9b206c32c765d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Yasmine-556cb15bc9b206c32c765d-D06B38CC-C60D-46D2-AB34-96202FBADA17.jpeg', '2021-10-13 13:43:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('158', 'Yasmine', '556cb15bc9b206c32c765d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Yasmine-556cb15bc9b206c32c765d-7DAA685B-51CE-4B5B-AB8B-675D6629039E.jpeg', '2021-10-13 13:43:36');
INSERT INTO `upload_photo_non_bussiness` VALUES ('159', 'Colorbox', '95d7f45a53ba2190b4b423', 'Beauty Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Colorbox-95d7f45a53ba2190b4b423-Image_1634129492.jpg', '2021-10-13 15:02:38');
INSERT INTO `upload_photo_non_bussiness` VALUES ('160', 'Colorbox', '95d7f45a53ba2190b4b423', 'Beauty Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Colorbox-95d7f45a53ba2190b4b423-Image_1634129522.jpg', '2021-10-13 15:02:38');
INSERT INTO `upload_photo_non_bussiness` VALUES ('161', 'Colorbox', '95d7f45a53ba2190b4b423', 'Beauty Brand of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Colorbox-95d7f45a53ba2190b4b423-Image_1634129554.jpg', '2021-10-13 15:02:38');
INSERT INTO `upload_photo_non_bussiness` VALUES ('162', 'Alberta', 'f27424e931a4f6cbb0e58a', 'Best Bridal Hair Stylist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Alberta-f27424e931a4f6cbb0e58a-IMG_5690.JPG', '2021-10-13 16:59:52');
INSERT INTO `upload_photo_non_bussiness` VALUES ('163', 'Boatemaa', '8ef94b1b2c306f064a3eb4', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Boatemaa-8ef94b1b2c306f064a3eb4-2571751C-E1B9-4E71-99EA-614A8A31F4F3.jpeg', '2021-10-13 18:30:25');
INSERT INTO `upload_photo_non_bussiness` VALUES ('164', 'Boatemaa', '8ef94b1b2c306f064a3eb4', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Boatemaa-8ef94b1b2c306f064a3eb4-568B7AC6-9A9E-4FD8-86F2-E0CB4F31BFD3.jpeg', '2021-10-13 18:30:25');
INSERT INTO `upload_photo_non_bussiness` VALUES ('165', 'Boatemaa', '8ef94b1b2c306f064a3eb4', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Boatemaa-8ef94b1b2c306f064a3eb4-6D0280E3-D3A2-4BE8-A9C2-3548D0413156.jpeg', '2021-10-13 18:30:25');
INSERT INTO `upload_photo_non_bussiness` VALUES ('169', 'Akosua', '1f6001d3bb8792cdf30f8d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Akosua-1f6001d3bb8792cdf30f8d-Garnet 3.jpg', '2021-10-13 20:38:49');
INSERT INTO `upload_photo_non_bussiness` VALUES ('170', 'Akosua', '1f6001d3bb8792cdf30f8d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Akosua-1f6001d3bb8792cdf30f8d-Garnet 3.jpg', '2021-10-13 20:38:53');
INSERT INTO `upload_photo_non_bussiness` VALUES ('171', 'Akosua', '1f6001d3bb8792cdf30f8d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Akosua-1f6001d3bb8792cdf30f8d-Garnet 3.jpg', '2021-10-13 20:38:54');
INSERT INTO `upload_photo_non_bussiness` VALUES ('172', 'Akosua', '1f6001d3bb8792cdf30f8d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Akosua-1f6001d3bb8792cdf30f8d-Garnet 1.jpg', '2021-10-13 20:44:37');
INSERT INTO `upload_photo_non_bussiness` VALUES ('173', 'Akosua', '1f6001d3bb8792cdf30f8d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Akosua-1f6001d3bb8792cdf30f8d-Garnet 2.jpg', '2021-10-13 20:44:37');
INSERT INTO `upload_photo_non_bussiness` VALUES ('174', 'Akosua', '1f6001d3bb8792cdf30f8d', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Akosua-1f6001d3bb8792cdf30f8d-Garnet 3.jpg', '2021-10-13 20:44:37');
INSERT INTO `upload_photo_non_bussiness` VALUES ('175', 'Zara', '4b1f0b3ee8dff196cf3335', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Zara-4b1f0b3ee8dff196cf3335-5B6C8163-E616-49F4-BD30-6242A80AF8B9.jpeg', '2021-10-14 00:31:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('176', 'Zara', '4b1f0b3ee8dff196cf3335', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Zara-4b1f0b3ee8dff196cf3335-74DEF560-DB86-453A-A0CE-1A451BAD09FC.jpeg', '2021-10-14 00:31:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('177', 'Zara', '4b1f0b3ee8dff196cf3335', 'Makeup Artist of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Zara-4b1f0b3ee8dff196cf3335-15A46946-3681-4D8A-9480-3B07A8D1B6A0.jpeg', '2021-10-14 00:31:46');
INSERT INTO `upload_photo_non_bussiness` VALUES ('178', 'Zara', '28d1079301425e6f4b64eb', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Zara-28d1079301425e6f4b64eb-51066AC2-48C6-4247-849A-5B3BD98ED9BA.jpeg', '2021-10-14 00:39:03');
INSERT INTO `upload_photo_non_bussiness` VALUES ('179', 'Zara', '28d1079301425e6f4b64eb', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Zara-28d1079301425e6f4b64eb-7D90B3CF-289F-4FCC-9FA2-AFA5E12CEF61.jpeg', '2021-10-14 00:39:03');
INSERT INTO `upload_photo_non_bussiness` VALUES ('180', 'Zara', '28d1079301425e6f4b64eb', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Zara-28d1079301425e6f4b64eb-6341A07E-4C0E-4877-A49F-48BAB75E9F79.jpeg', '2021-10-14 00:39:03');
INSERT INTO `upload_photo_non_bussiness` VALUES ('181', 'Zara', '28d1079301425e6f4b64eb', 'Discovery of the Year', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Zara-28d1079301425e6f4b64eb-C4A260F0-A3F1-413D-A61E-D26F223E16A9.jpeg', '2021-10-14 00:39:03');
INSERT INTO `upload_photo_non_bussiness` VALUES ('182', 'ASARE', '833803352', 'Best Editorial Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/ASARE-833803352-568B094A-E954-4A3B-A706-3799CDEE48E5.jpeg', '2021-10-14 08:25:37');
INSERT INTO `upload_photo_non_bussiness` VALUES ('183', 'ASARE', '833803352', 'Best Editorial Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/ASARE-833803352-5C4BB9F1-36F6-42EC-AAFD-1A63708FA7FB.jpeg', '2021-10-14 08:25:37');
INSERT INTO `upload_photo_non_bussiness` VALUES ('184', 'ASARE', '833803352', 'Best Editorial Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/ASARE-833803352-E2CCBF15-8110-44C2-BE25-0C96124568A1.jpeg', '2021-10-14 08:25:37');
INSERT INTO `upload_photo_non_bussiness` VALUES ('185', 'Martina', '7293a5cd69b1d2b580569a', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Martina-7293a5cd69b1d2b580569a-7FCE8BFE-B236-497D-9FB9-2C2A842B0D42.png', '2021-10-14 15:16:06');
INSERT INTO `upload_photo_non_bussiness` VALUES ('186', 'Martina', '7293a5cd69b1d2b580569a', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Martina-7293a5cd69b1d2b580569a-E59BECA8-B809-440C-BD07-70CE982AFABD.jpeg', '2021-10-14 15:16:06');
INSERT INTO `upload_photo_non_bussiness` VALUES ('187', 'Martina', '7293a5cd69b1d2b580569a', 'Best Bridal Makeup Artist', 'http://mysmsinbox.com/gma/nomination/category/uploads/non_bussiness/Martina-7293a5cd69b1d2b580569a-8C4062DD-F376-47D6-9143-DD222A855B88.jpeg', '2021-10-14 15:16:06');
