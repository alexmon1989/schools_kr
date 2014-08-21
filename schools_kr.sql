/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : schools_kr

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-08-21 17:10:15
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
  `short_title` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `ogrn_inn` varchar(45) DEFAULT NULL,
  `data_json` text,
  `latitude` float DEFAULT NULL,
  `longtitude` float DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of institutions
-- ----------------------------

-- ----------------------------
-- Table structure for `institution_kinds`
-- ----------------------------
DROP TABLE IF EXISTS `institution_kinds`;
CREATE TABLE `institution_kinds` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of institution_kinds
-- ----------------------------
INSERT INTO `institution_kinds` VALUES ('2', 'Вид 1', '1408534594', null);

-- ----------------------------
-- Table structure for `institution_types`
-- ----------------------------
DROP TABLE IF EXISTS `institution_types`;
CREATE TABLE `institution_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of institution_types
-- ----------------------------
INSERT INTO `institution_types` VALUES ('2', 'Тип 1', '1408529373', null);
INSERT INTO `institution_types` VALUES ('3', 'Тип 2', '1408529543', null);
INSERT INTO `institution_types` VALUES ('4', 'Тип 3', '1408529551', null);

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('app', 'default', '001_create_institutions');
INSERT INTO `migration` VALUES ('package', 'auth', '001_auth_create_usertables');
INSERT INTO `migration` VALUES ('package', 'auth', '002_auth_create_grouptables');
INSERT INTO `migration` VALUES ('package', 'auth', '003_auth_create_roletables');
INSERT INTO `migration` VALUES ('package', 'auth', '004_auth_create_permissiontables');
INSERT INTO `migration` VALUES ('package', 'auth', '005_auth_create_authdefaults');
INSERT INTO `migration` VALUES ('package', 'auth', '006_auth_add_authactions');
INSERT INTO `migration` VALUES ('package', 'auth', '007_auth_add_permissionsfilter');
INSERT INTO `migration` VALUES ('package', 'auth', '008_auth_create_providers');
INSERT INTO `migration` VALUES ('package', 'auth', '009_auth_create_oauth2tables');
INSERT INTO `migration` VALUES ('package', 'auth', '010_auth_fix_jointables');
INSERT INTO `migration` VALUES ('app', 'default', '002_create_municipalities');
INSERT INTO `migration` VALUES ('app', 'default', '003_create_institution_types');
INSERT INTO `migration` VALUES ('app', 'default', '004_create_institution_kinds');
INSERT INTO `migration` VALUES ('app', 'default', '005_rename_field_institiution_type_id_to_institution_type_id_in_institutions');

-- ----------------------------
-- Table structure for `municipalities`
-- ----------------------------
DROP TABLE IF EXISTS `municipalities`;
CREATE TABLE `municipalities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `latitude` float NOT NULL,
  `longtitude` float NOT NULL,
  `data_json` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of municipalities
-- ----------------------------
INSERT INTO `municipalities` VALUES ('2', 'Краснодарский район', '45.0225', '38.9715', '{\"educational_institution\":\"4\",\"this_year_repair\":\"200\",\"last_year_repair\":\"1\"}', '1408625713', '1408627011');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `last_login` varchar(25) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '3QH0dwAwtrpYL0/aRtjkjkx0YUgqKOBSclSJ1Di3hEE=', '100', 'alex.mon1989@gmail.com', '1408599972', 'eeaa1fe59595b9e42b6702f5a8a88b1b01f0227f', 'a:0:{}', '1408347389', '1408626090');

-- ----------------------------
-- Table structure for `users_clients`
-- ----------------------------
DROP TABLE IF EXISTS `users_clients`;
CREATE TABLE `users_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT '0',
  `autonomous` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `notes` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_clients
-- ----------------------------

-- ----------------------------
-- Table structure for `users_providers`
-- ----------------------------
DROP TABLE IF EXISTS `users_providers`;
CREATE TABLE `users_providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_providers
-- ----------------------------

-- ----------------------------
-- Table structure for `users_scopes`
-- ----------------------------
DROP TABLE IF EXISTS `users_scopes`;
CREATE TABLE `users_scopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_scopes
-- ----------------------------

-- ----------------------------
-- Table structure for `users_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `users_sessions`;
CREATE TABLE `users_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oauth_sessions_ibfk_1` (`client_id`),
  CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_sessions
-- ----------------------------

-- ----------------------------
-- Table structure for `users_sessionscopes`
-- ----------------------------
DROP TABLE IF EXISTS `users_sessionscopes`;
CREATE TABLE `users_sessionscopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`),
  KEY `access_token` (`access_token`),
  KEY `scope` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_sessionscopes
-- ----------------------------
