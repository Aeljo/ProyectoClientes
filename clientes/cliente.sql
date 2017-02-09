/*
Navicat MySQL Data Transfer

Source Server         : Alejandro
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cliente

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-08 14:33:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'test1', 'pass1', 'test1@example.com');
INSERT INTO `tbl_user` VALUES ('2', 'test2', 'pass2', 'test2@example.com');
INSERT INTO `tbl_user` VALUES ('3', 'test3', 'pass3', 'test3@example.com');
INSERT INTO `tbl_user` VALUES ('4', 'test4', 'pass4', 'test4@example.com');
INSERT INTO `tbl_user` VALUES ('5', 'test5', 'pass5', 'test5@example.com');
INSERT INTO `tbl_user` VALUES ('6', 'test6', 'pass6', 'test6@example.com');
INSERT INTO `tbl_user` VALUES ('7', 'test7', 'pass7', 'test7@example.com');
INSERT INTO `tbl_user` VALUES ('8', 'test8', 'pass8', 'test8@example.com');
INSERT INTO `tbl_user` VALUES ('9', 'test9', 'pass9', 'test9@example.com');
INSERT INTO `tbl_user` VALUES ('10', 'test10', 'pass10', 'test10@example.com');
INSERT INTO `tbl_user` VALUES ('11', 'test11', 'pass11', 'test11@example.com');
INSERT INTO `tbl_user` VALUES ('12', 'test12', 'pass12', 'test12@example.com');
INSERT INTO `tbl_user` VALUES ('13', 'test13', 'pass13', 'test13@example.com');
INSERT INTO `tbl_user` VALUES ('14', 'test14', 'pass14', 'test14@example.com');
INSERT INTO `tbl_user` VALUES ('15', 'test15', 'pass15', 'test15@example.com');
INSERT INTO `tbl_user` VALUES ('16', 'test16', 'pass16', 'test16@example.com');
INSERT INTO `tbl_user` VALUES ('17', 'test17', 'pass17', 'test17@example.com');
INSERT INTO `tbl_user` VALUES ('18', 'test18', 'pass18', 'test18@example.com');
INSERT INTO `tbl_user` VALUES ('19', 'test19', 'pass19', 'test19@example.com');
INSERT INTO `tbl_user` VALUES ('20', 'test20', 'pass20', 'test20@example.com');
INSERT INTO `tbl_user` VALUES ('21', 'test21', 'pass21', 'test21@example.com');
INSERT INTO `tbl_user` VALUES ('22', 'Luis Alejandro', 'scorpion18', 'xcorpion87@gmail.com');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `Cedula` int(12) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Fecha_Cumpleanos` date DEFAULT NULL,
  `FotoDir` varchar(100) DEFAULT NULL,
  `Estatus` int(2) NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1100950386', 'Luis ALejandro', 'cancino0118@hotmail.com', '1987-01-18', 'IMG_20140413_201217.jpg', '1');
