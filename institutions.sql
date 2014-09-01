/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : schools_kr

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-09-01 09:21:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `institutions`
-- ----------------------------
DROP TABLE IF EXISTS `institutions`;
CREATE TABLE `institutions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `municipality_id` int(11) NOT NULL,
  `institution_kind_id` int(11) NOT NULL,
  `institution_type_id` int(11) NOT NULL,
  `full_title` varchar(255) NOT NULL,
  `short_title` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `ogrn_inn` varchar(45) DEFAULT NULL,
  `data_json` text,
  `latitude` float NOT NULL,
  `longtitude` float NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of institutions
-- ----------------------------
INSERT INTO `institutions` VALUES ('2', '2', '2', '4', 'Полное название школы 3', 'Школа 3', 'Адрес 3', '432-43-43', 'google.com', '123', null, '44.8927', '38.9008', '1409136755', '1409136755');
