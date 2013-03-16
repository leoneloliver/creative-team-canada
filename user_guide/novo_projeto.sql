/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : novo_projeto

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2012-05-08 08:09:04
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categorias`
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Eletronicos', 'novo eletronicos');
INSERT INTO `categorias` VALUES ('2', 'Informatica', 'todos produtos de informatica');
INSERT INTO `categorias` VALUES ('4', 'Móveis', 'móveis planejados');
INSERT INTO `categorias` VALUES ('5', 'Eletrodomésticos', 'veja todos os eletros');

-- ----------------------------
-- Table structure for `produtos`
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `preco` decimal(9,2) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('1', '1', 'novo produto', '01.jpg', '27.00', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. ');
INSERT INTO `produtos` VALUES ('2', '2', 'esperiblegthi', '02.jpg', '39.80', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');
INSERT INTO `produtos` VALUES ('3', '2', 'Table Maximum', '04.jpg', '1244.30', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');
INSERT INTO `produtos` VALUES ('4', '2', 'C34ll hine', '03.jpg', '567.80', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');
INSERT INTO `produtos` VALUES ('5', '4', 'Jogo de sofá', '05.jpg', '989.90', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');
INSERT INTO `produtos` VALUES ('6', '5', 'Fogão a Gás', '06.jpg', '598.89', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\n');
INSERT INTO `produtos` VALUES ('7', '2', 'Testando mais', '01.jpg', '234.56', 'novos produtos para teste');
INSERT INTO `produtos` VALUES ('8', '2', 'mais produtos', '02.jpg', '234.90', 'vamos la');
INSERT INTO `produtos` VALUES ('9', '3', 'produto mais ', '04.jpg', '678.98', 'teste u');
