/*
 Navicat Premium Data Transfer

 Source Server         : test
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : webc

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 03/12/2023 23:05:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

create database ctfer;
use ctfer

-- ----------------------------
-- Table structure for flag
-- ----------------------------
DROP TABLE IF EXISTS `flag`;
CREATE TABLE `flag`  (
  `flag` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of flag
-- ----------------------------
INSERT INTO `flag` VALUES ('flag2{17013e65-4e6f-b9f6-a308-ce3878e8212c}');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `is_admin` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `username`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10004 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;


ALTER TABLE posts 
ADD CONSTRAINT s_id FOREIGN KEY (author) REFERENCES user (username);
-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1,'guest', 'guest123456', 0);
INSERT INTO `user` VALUES (2,'admin', 'dG5hcGdzNjY2QGFyamZnbmU=', 1);

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, '今天坐火车', '刚才我在高铁上，一个乘务员过来跟我说：“请出示你的学生证和身份证。”我心里一慌 ：“有什么事吗？”\r\n\r\n\r\n\r\n“你买的是学生票吧，我来核验一下你的学生资格。”我长舒一口气，把学生证和身份证给了他，还好我是骄傲的南昌航空大学科技学院学生。\r\n\r\n\r\n\r\n他拿着我的学生证，嘀咕着“南昌航空大学科技学院” ？是什么学校？我怎么没听说过？ ”他的语气逐渐凶狠起来“区区大专也敢冒充本科？”，我不服气，俺们昌航科院可是正规本科！\r\n\r\n\r\n\r\n这时候，旁边一个人突然冷笑一声，嚣张地说道：“臭科院么，不过是所带专而已，你也配买学生票？！”\r\n\r\n\r\n\r\n说完，他把他金光闪闪的学生证亮了出来，“南昌大学”！！！看到上面的字，我有点慌了， 这下碰到硬骨头了。\r\n\r\n\r\n\r\n“我们昌带是211！臭科院算什么东西！垃圾带专罢了！ ”他恶狠狠的声音传来，就像针一样深深的刺入我的心里。我一下子泄了气，浑身冰冷，仿佛掉入冰窖一般 ，不知道怎么反驳他。\r\n\r\n\r\n\r\n这时候乘务员也说：“我说怎么没听说过呢，原来是带专啊，哼，给你这样的人学生票就是浪费国家的钱！ ”这句话给了我最后一击，我的脸色苍白，冷汗在衣服下面流淌，全身都僵住了。\r\n\r\n\r\n\r\n就在这时，一个温柔的女声从后面传来：“不要这样说，大专也是大学生，按国家规定也是能享受学生票优惠的。大专是社会的重要组成部分，我们不应该歧视大专生。”\r\n\r\n\r\n\r\n仿佛春风回暖，冰雪消融，生机又回到我的身体里。我缓缓回头，看到她白皙娇嫩的手里轻捏这一本学生证，上面几个赫赫的大字“江西师范大学!”，我的眼神瞬间呆滞了 。“我虽然是江师大的学生，但我从来都不会歧视大专生。”她温柔的声音又传入我的耳中，在这个冰冷的社会给了我一丝温暖，让我重获自信。\r\n\r\n\r\n\r\n然而，还未等我还她以谢意，我邻座那位正看书的青年的嘴角发出了一声轻蔑的“切” ，我立马呆住了，心里忐忑起来。只见他拿出了学生证——江西财经大学！“我能进花伪你能吗？垃圾带专就是垃圾带专，永远也不配跟我们同车，让他们让他们赶快下车。” 在这一瞬间我突然失去了意识，竟不知道我身处何处……\r\n\r\n\r\n\r\n“对，下车、下车，让他们赶紧下车，他们不配与我们同车”此起彼伏的呼喊声一下子将我拉了回来，我意识到我还在高铁上。我环顾整个车厢，发现所有的人都举着他们的学生证要我下车，学生证上南昌大学，江西财经大学，江西理工大学，还有几本来不及细看的金色大字在我眼前晃来晃去，刺痛着我双眼。\r\n\r\n\r\n\r\n就在我准备下车的时候，我突然发现在这一排座位最后面的角落里，一个女生战战兢兢的蹲在那里。我走上去，询问她那里不舒服。她颤抖的手里紧紧的攥着一张学生证，旁边的人一把夺了过来，恶狠狠的嘲笑到“江西科技学院”，就是那个要学费三万的带专？你也配坐高铁？”\r\n\r\n\r\n\r\n我一把夺过学生证，大声说到“请你们放尊重些”他们却一齐回应到“你们也配？”形势瞬间变得剑拔弩张。就在这时，列车里的广播响了起来“各位乘客，终点站马上就要到了……”终于到站了，我长舒一口气，只想赶紧下去。突然，角落里的她也站了起来，“我也到了”。我们四眼相对，终于都露出了久违的微笑。列车门打开了，我们走下列车，朝着远方走去……\r\n\r\n\r\n\r\n身后的车厢传来了阵阵笑声“哈哈哈哈，哈哈哈哈，哈哈……辣鸡带专”笑声此起彼伏，响彻整个车站……\r\n\r\n\r\n\r\n我只好在南昌站转车，而望向那女孩好像也进了火车站，但是我知道，火车还是到不了我们的暖巢，我还是早晚要换车的……', '2023-12-03 21:49:37', 'admin','');
INSERT INTO `posts` VALUES (2, '你说的对', '但是《原神》是由米哈游自主研发的一款全新开放世界冒险游戏。游戏发生在一个被称作「提瓦特」的幻想世界，在这里，被神选中的人将被授予「神之眼」，导引元素之力。你将扮演一位名为「旅行者」的神秘角色，在自由的旅行中邂逅性格各异、能力独特的同伴们，和他们一起击败强敌，找回失散的亲人——同时，逐步发掘「原神」的真相。', '2023-12-02 17:46:41', 'admin','');
INSERT INTO `posts` VALUES (3, 'windows', '你说得对，但是 Windows 是由 Microsoft 自主研发的一款具有自主知识产权的操作系统。该系统被撰写在一个被称为「改名与砍刀」的部门里，在这里，被 比尔•盖茨 选中的人将被授予「MVP」，引导 永恒的NT 6 之力。Microsoft 中一位名为「大卫•卡特勒」的暴躁老哥，在堆屎山的旅途中邂逅IBM、DEC的员工们，和OEM们一起击败OS/2，寻找失散的MS-DOS——同时，逐步发现「VAX/VMS」的真相。', '2023-12-03 18:31:17', 'guest','');

SET FOREIGN_KEY_CHECKS = 1;