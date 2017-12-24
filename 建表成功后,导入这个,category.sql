/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : myproject1

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-02 00:47:46
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '分类名称',
  `parentid` tinyint(4) NOT NULL DEFAULT '0' COMMENT '上级分类ID,0为第一级',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态:1上架 默认,0下架',
  `url` varchar(255) DEFAULT NULL COMMENT '外链网址',
  `thumb` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `displayorder` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO category VALUES ('1', '课程', '0', '1', null, null, null, '1', '2017-11-28 12:34:17', '2017-11-28 12:34:17');
INSERT INTO category VALUES ('2', '班级', '0', '1', null, null, null, '2', '2017-11-28 12:34:50', '2017-11-28 12:34:50');
INSERT INTO category VALUES ('3', 'HTML5+CSS切图布局精讲', '1', '1', null, null, null, '1', '2017-11-28 15:19:08', '2017-12-01 14:10:29');
INSERT INTO category VALUES ('4', 'Less与Sass专题实战', '1', '1', null, null, null, '2', '2017-11-28 15:20:16', '2017-11-28 15:20:16');
INSERT INTO category VALUES ('5', 'BootStrap响应式布局实战精讲', '1', '1', null, null, null, '3', '2017-11-28 15:23:06', '2017-11-28 15:23:06');
INSERT INTO category VALUES ('6', '移动端布局实战专题精讲', '1', '1', null, null, null, '4', '2017-11-28 15:23:33', '2017-11-28 15:23:33');
INSERT INTO category VALUES ('7', '前端基础班', '2', '1', null, null, null, '1', '2017-11-28 15:24:17', '2017-11-28 15:24:17');
INSERT INTO category VALUES ('8', '公开试图课', '2', '1', null, null, null, '2', '2017-11-28 15:24:34', '2017-11-28 15:24:34');
INSERT INTO category VALUES ('9', 'PHP后台基础班', '2', '1', null, null, null, '3', '2017-11-28 15:24:58', '2017-11-28 15:24:58');

CREATE TABLE `products` (
`id` int(10) unsigned AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`price` decimal(10,2) NOT NULL,
`desciption` varchar(255),

)