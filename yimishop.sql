/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : yimishop

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-07-31 21:58:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for er_activities
-- ----------------------------
DROP TABLE IF EXISTS `er_activities`;
CREATE TABLE `er_activities` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '活动id',
  `aid` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动编号',
  `acname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动名称',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `stime` int(11) NOT NULL COMMENT '开始时间',
  `etime` int(11) NOT NULL COMMENT '结束时间',
  `actype` tinyint(1) NOT NULL COMMENT '1、满减，满100减10 2、满几件几折',
  `ac_num1` int(10) NOT NULL COMMENT '优惠条件',
  `ac_nums1` float NOT NULL COMMENT '优惠的内容',
  `ac_num2` int(11) NOT NULL COMMENT '优惠条件2',
  `ac_nums2` float NOT NULL COMMENT '优惠内容2',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `ac_status` tinyint(1) NOT NULL COMMENT '活动状态：0：未开启 1：已开启 2：已暂停 3：已结束',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_activities
-- ----------------------------
INSERT INTO `er_activities` VALUES ('1', 'A6340869817', '活动一', '2', '1463450711', '1464314715', '1', '2', '2', '3', '5', '1463408698', '1');
INSERT INTO `er_activities` VALUES ('2', 'A6356166329', '活动二', '3', '1463561639', '1464339242', '1', '2', '2', '3', '5', '1463561663', '1');
INSERT INTO `er_activities` VALUES ('3', 'A6362838081', '活动三', '13', '1463628360', '1464405962', '1', '2', '3', '3', '6', '1463628380', '1');

-- ----------------------------
-- Table structure for er_address
-- ----------------------------
DROP TABLE IF EXISTS `er_address`;
CREATE TABLE `er_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '收货地址id',
  `auid` int(11) NOT NULL COMMENT '属于谁',
  `aname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '收货人姓名',
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '收货地址',
  `atel` char(11) NOT NULL COMMENT '联系电话',
  `id_defa` blob NOT NULL COMMENT '是否为默认地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of er_address
-- ----------------------------
INSERT INTO `er_address` VALUES ('2', '3', '董俊桐', '石家庄学院南校区2号宿舍楼下', '18231150251', 0x31);
INSERT INTO `er_address` VALUES ('3', '3', '董俊桐', '石家庄新华区与高柱路交叉口', '15731115053', '');
INSERT INTO `er_address` VALUES ('5', '4', '王蕾', '衡水市安平县', '15620138796', '');
INSERT INTO `er_address` VALUES ('6', '3', 'aa', 'aaa', '15632489752', 0x31);

-- ----------------------------
-- Table structure for er_adm
-- ----------------------------
DROP TABLE IF EXISTS `er_adm`;
CREATE TABLE `er_adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `logtime` int(11) NOT NULL,
  `logip` varchar(50) NOT NULL,
  `role` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of er_adm
-- ----------------------------
INSERT INTO `er_adm` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1464099000', '0.0.0.0', '1');

-- ----------------------------
-- Table structure for er_admin
-- ----------------------------
DROP TABLE IF EXISTS `er_admin`;
CREATE TABLE `er_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理者id',
  `uid` int(4) NOT NULL COMMENT '用户id',
  `a_logip` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '上次登录ip',
  `a_logtime` int(10) NOT NULL COMMENT '上次登录时间',
  `a_power` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_admin
-- ----------------------------
INSERT INTO `er_admin` VALUES ('2', '1', '0.0.0.0', '1460641059', '1');
INSERT INTO `er_admin` VALUES ('3', '2', '110.249.135.249', '1450791171', '0');

-- ----------------------------
-- Table structure for er_approve
-- ----------------------------
DROP TABLE IF EXISTS `er_approve`;
CREATE TABLE `er_approve` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL,
  `applicant` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '申请人',
  `truename` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '真实姓名',
  `stuid` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '学号',
  `stuid_pic` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT '学生证图片',
  `app_time` int(11) NOT NULL COMMENT '提交认证时间',
  `statu` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_approve
-- ----------------------------
INSERT INTO `er_approve` VALUES ('9', '3', '2425399474@qq.com', '董俊桐', '20120104046', 'approve/20160519/573d0e18ab1fc.jpg', '1461680755', '2');
INSERT INTO `er_approve` VALUES ('10', '4', '18712680254', '王贝', '20120104038', 'approve/20160519/573d0e18ab1fc.jpg', '1462976456', '2');
INSERT INTO `er_approve` VALUES ('11', '2', '15731115053', '张杰', '20120105036', 'approve/20160519/573d0e18ab1fc.jpg', '1462977041', '2');
INSERT INTO `er_approve` VALUES ('12', '6', '18231150251', 'aaaaa', '20120104046', 'approve/20160519/573d0e18ab1fc.jpg', '1463061611', '2');
INSERT INTO `er_approve` VALUES ('16', '13', '15632483259', '董童', '20120104045', 'approve/20160519/573d3121e7322.jpg', '1463628065', '2');

-- ----------------------------
-- Table structure for er_category
-- ----------------------------
DROP TABLE IF EXISTS `er_category`;
CREATE TABLE `er_category` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `c_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '分类名称',
  `pid` int(4) NOT NULL DEFAULT '0' COMMENT '父类id',
  `is_look` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_category
-- ----------------------------
INSERT INTO `er_category` VALUES ('2', '图书教材', '0', '1');
INSERT INTO `er_category` VALUES ('3', '代步车辆', '0', '1');
INSERT INTO `er_category` VALUES ('4', '体育用品', '0', '1');
INSERT INTO `er_category` VALUES ('5', '考试耳机', '0', '1');
INSERT INTO `er_category` VALUES ('6', '其他', '0', '1');
INSERT INTO `er_category` VALUES ('7', '专业书籍', '2', '1');
INSERT INTO `er_category` VALUES ('8', '公共书籍', '2', '1');
INSERT INTO `er_category` VALUES ('9', '考研', '2', '1');
INSERT INTO `er_category` VALUES ('10', '生活', '6', '1');

-- ----------------------------
-- Table structure for er_comm
-- ----------------------------
DROP TABLE IF EXISTS `er_comm`;
CREATE TABLE `er_comm` (
  `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `co_mark` tinyint(2) NOT NULL COMMENT '评分',
  `co_content` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论内容',
  `co_gid` int(11) NOT NULL COMMENT '评论的商品id',
  `co_time` int(11) NOT NULL COMMENT '评论时间',
  `co_uid` int(11) NOT NULL COMMENT '评论者id',
  `co_username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_comm
-- ----------------------------
INSERT INTO `er_comm` VALUES ('11', '4', '请求权', '63', '1463627400', '3', '你的左耳耳钉');
INSERT INTO `er_comm` VALUES ('8', '4', '很好用的网球拍 棒棒的！！！', '45', '1463549871', '3', '你的左耳耳钉');
INSERT INTO `er_comm` VALUES ('9', '5', '哈哈哈哈哈哈！！！', '60', '1463588427', '3', '你的左耳耳钉');
INSERT INTO `er_comm` VALUES ('10', '1', '差评！！！！！', '35', '1463589564', '3', '你的左耳耳钉');

-- ----------------------------
-- Table structure for er_goods
-- ----------------------------
DROP TABLE IF EXISTS `er_goods`;
CREATE TABLE `er_goods` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `ptype` blob NOT NULL COMMENT '商品属性',
  `g_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名',
  `g_desc` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品描述',
  `ori_price` float NOT NULL COMMENT '商品原价',
  `price` float NOT NULL COMMENT '现价',
  `g_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片地址',
  `img_more` text COLLATE utf8_unicode_ci NOT NULL COMMENT '详情图片',
  `g_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '发布时间',
  `g_sum` int(4) NOT NULL COMMENT '库存',
  `t_limit` tinyint(2) NOT NULL COMMENT '限时特卖',
  `sales` int(11) NOT NULL COMMENT '销量',
  `is_lock` tinyint(2) NOT NULL DEFAULT '1' COMMENT '是否显示',
  `uid` int(11) NOT NULL COMMENT '发布者id',
  `cid` int(3) NOT NULL COMMENT '物品分类',
  `score` tinyint(1) DEFAULT '5',
  `actid` int(11) NOT NULL COMMENT '活动id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_goods
-- ----------------------------
INSERT INTO `er_goods` VALUES ('41', 0x30, '男士半袖2016年新款', '买的不太合适 没有穿过  M码的', '100', '80', 'goods/20160512/57348d4642d7a.jpg', 'goods/20160512/57348d4678129.jpg', '1463061830', '12', '0', '1', '1', '6', '10', '3', '0');
INSERT INTO `er_goods` VALUES ('40', 0x31, '安新牌篮球九成新', '篮球篮球篮球', '40', '20', 'goods/20160512/57348cdef1262.jpg', 'goods/20160512/57348cdf5a716.jpg,goods/20160512/57348cdf8a52d.jpg', '1463061726', '31', '0', '3', '1', '6', '4', '4', '0');
INSERT INTO `er_goods` VALUES ('39', 0x31, '数学复习题+学姐笔记', '数学复习题 附赠一个《写作高分攻略》', '36', '16', 'goods/20160511/573342d68e5af.jpg', 'goods/20160511/573342d6b2da5.jpg,goods/20160511/573342d6cac39.jpg,goods/20160511/573342d6e2da3.jpg', '1462977238', '21', '0', '15', '1', '2', '9', '2', '0');
INSERT INTO `er_goods` VALUES ('38', 0x30, '滋源无硅油洗发水未拆封', '滋源无硅油洗发水', '100', '80', 'goods/20160511/573341cc9d953.jpg', '', '1462976972', '11', '0', '0', '1', '4', '10', '5', '0');
INSERT INTO `er_goods` VALUES ('36', 0x31, '明若晓溪珍藏版全册', '明若晓溪珍藏版', '40', '20', 'goods/20160511/5733409940681.jpg', 'goods/20160511/573340996a284.jpg,goods/20160511/5733409981be5.jpg', '1462977880', '0', '0', '10', '1', '4', '8', '5', '0');
INSERT INTO `er_goods` VALUES ('35', 0x30, '计算机二级题库加答案', 'c语言版，里面有上级测试题还有选择题，囊括了多年的考试题', '30', '20', 'goods/20160511/57333c57e2cdf.jpg', 'goods/20160511/57333c581719b.jpg,goods/20160511/57333c582f78c.jpg', '1463588571', '26', '0', '5', '1', '3', '9', '4', '2');
INSERT INTO `er_goods` VALUES ('45', 0x31, '九成新网球拍，价格优惠', '九成新的网球拍', '90', '60', 'goods/20160516/5739d2853e841.jpg', 'goods/20160516/5739d2858295a.jpg,goods/20160516/5739d2859b4b3.jpg', '1463407237', '29', '0', '6', '1', '2', '4', '5', '1');
INSERT INTO `er_goods` VALUES ('63', 0x31, '电脑耳机，适用各种品牌电脑waa', '需要的同学短信联系我吧，价格很便宜哟', '120', '80', 'goods/20160518/573c034c75ea2.jpg', 'goods/20160518/573c034cd3bbe.jpg', '1463627861', '18', '0', '2', '1', '3', '5', '4', '0');
INSERT INTO `er_goods` VALUES ('47', 0x30, '白帆布鞋，没有穿过', '白帆布鞋白帆布鞋白帆布鞋白帆布鞋白帆布鞋白帆布鞋', '100', '80', 'goods/20160517/573abcf5d5a54.jpg', 'goods/20160517/573abcf60887b.jpg,goods/20160517/573abcf620446.jpg,goods/20160517/573abcf6389bc.jpg', '1463467253', '16', '0', '0', '1', '2', '10', '5', '0');
INSERT INTO `er_goods` VALUES ('48', 0x30, '卡通体重计（超准的！）', '体重计体重计体重计体重计体重计体重计体重计', '60', '39', 'goods/20160517/573abd88e6050.jpg', '', '1463467400', '2', '0', '2', '1', '2', '4', '2', '0');
INSERT INTO `er_goods` VALUES ('49', 0x31, '普通山地自行车', '普通自行车普通自行车普通自行车普通自行车普通自行车普通自行车', '160', '100', 'goods/20160517/573abdf639e96.jpg', 'goods/20160517/573abdf65ea8a.jpg,goods/20160517/573abdf6788b7.jpg', '1463467510', '26', '0', '0', '1', '2', '3', '5', '0');
INSERT INTO `er_goods` VALUES ('50', 0x31, '滑冰鞋八成新', '附赠一个随身耳机', '300', '60', 'goods/20160517/573abe5f73adb.jpg', '', '1463467615', '10', '0', '6', '1', '2', '4', '4', '0');
INSERT INTO `er_goods` VALUES ('51', 0x30, '出售英语教材书', '出售几本书出售几本书出售几本书出售几本书', '80', '39', 'goods/20160517/573ac0eb8fadc.jpg', 'goods/20160517/573ac0ebb4a02.jpg', '1463468267', '10', '0', '0', '1', '2', '7', '4', '0');
INSERT INTO `er_goods` VALUES ('52', 0x31, '一号车铺个性车辆', '各类各样的个性车辆随您挑选', '300', '120', 'goods/20160517/573ac164ce789.jpg', '', '1463468388', '60', '0', '4', '1', '2', '3', '5', '0');
INSERT INTO `er_goods` VALUES ('66', 0x31, '测试商品', '啊啊啊啊啊啊', '200', '100', 'goods/20160519/573d316646f95.jpg', 'goods/20160519/573d316668ad3.jpg,goods/20160519/573d316693e54.jpg', '1463628134', '0', '0', '20', '1', '13', '3', '5', '3');
INSERT INTO `er_goods` VALUES ('53', 0x31, '机械制图第五册', '机械制图机械制图机械制图机械制图', '60', '20', 'goods/20160517/573ac2d8ae4e8.jpg', 'goods/20160517/573ac2d8d017f.jpg,goods/20160517/573ac2d904f86.jpg', '1463468760', '20', '0', '0', '1', '2', '7', '5', '0');
INSERT INTO `er_goods` VALUES ('54', 0x30, '新视野大学英语', '新视野大学英语新视野大学英语新视野大学英语', '30', '15', 'goods/20160517/573ac34c3cb44.jpg', 'goods/20160517/573ac34c63293.jpg', '1463468876', '12', '0', '3', '1', '2', '7', '4', '0');
INSERT INTO `er_goods` VALUES ('55', 0x31, '世界未解之迷', '世界未解之迷世界未解之迷世界未解之迷世界未解之迷', '60', '30', 'goods/20160517/573ac3f5ee67e.jpg', 'goods/20160517/573ac3f6218e2.jpg,goods/20160517/573ac3f63a0a3.jpg', '1463469045', '20', '0', '4', '1', '6', '7', '5', '0');
INSERT INTO `er_goods` VALUES ('56', 0x31, '锦绣全册九成新', '锦绣锦绣锦绣锦绣锦绣锦绣锦绣锦绣', '60', '20', 'goods/20160517/573ac5577ae16.jpg', 'goods/20160517/573ac557ab240.jpg', '1463469399', '6', '0', '1', '1', '6', '8', '4', '0');
INSERT INTO `er_goods` VALUES ('57', 0x31, '光明皇帝+插画', '光明皇帝光明皇帝光明皇帝光明皇帝光明皇帝光明皇帝', '69', '39', 'goods/20160517/573ac5b1463fa.jpg', 'goods/20160517/573ac5b1712c2.jpg,goods/20160517/573ac5b188f9d.jpg,goods/20160517/573ac5b1a3bea.jpg', '1463469489', '30', '0', '12', '1', '6', '8', '3', '0');
INSERT INTO `er_goods` VALUES ('58', 0x31, '致我们终将逝去的青春', '至我们终将逝去的青春至我们终将逝去的青春', '30', '15', 'goods/20160517/573ac600bbe6c.jpg', 'goods/20160517/573ac600dda5a.jpg,goods/20160517/573ac6010d4f7.jpg', '1463469568', '20', '0', '4', '1', '6', '8', '5', '0');
INSERT INTO `er_goods` VALUES ('59', 0x31, '出售gmat、toefl复习资料', '出售gmat、toefl复习资料 价格可议出售gmat、toefl复习资料 价格可议', '40', '25', 'goods/20160517/573ac6ac00658.jpg', 'goods/20160517/573ac6ac3cd14.jpg', '1463469739', '6', '0', '2', '1', '6', '9', '4', '0');
INSERT INTO `er_goods` VALUES ('60', 0x31, '土木考研，结构力学资料', '土木考研，结构力学资料土木考研，结构力学资料土木考研，结构力学资料土木考研，结构力学资料', '62', '26', 'goods/20160517/573ac71ad46b9.jpg', 'goods/20160517/573ac71b1f10f.jpg', '1463469850', '17', '0', '13', '1', '6', '9', '1', '0');
INSERT INTO `er_goods` VALUES ('61', 0x31, '全新HIFI音效蓝牙耳机', '全新HIFI音效蓝牙耳机可插内存卡', '300', '150', 'goods/20160517/573ac7c7b698c.jpg', 'goods/20160517/573ac7c7dd1e7.jpg,goods/20160517/573ac7c8017f8.jpg,goods/20160517/573ac7c818cc9.jpg', '1463473058', '18', '0', '10', '1', '4', '5', '5', '0');
INSERT INTO `er_goods` VALUES ('62', 0x31, '考试耳机立体式音质', '考试耳机考试耳机考试耳机考试耳机考试耳机', '69', '30', 'goods/20160517/573ac8902c86a.png', 'goods/20160517/573ac8905e837.jpg,goods/20160517/573ac890783db.jpg', '1463270224', '10', '0', '3', '1', '4', '5', '4', '0');

-- ----------------------------
-- Table structure for er_order
-- ----------------------------
DROP TABLE IF EXISTS `er_order`;
CREATE TABLE `er_order` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `order_sn` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单编号',
  `uid` int(4) NOT NULL COMMENT '用户id',
  `time` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单时间',
  `num` int(3) NOT NULL COMMENT '商品数量',
  `money` decimal(10,2) NOT NULL COMMENT '总钱数',
  `state` set('0','1','2','3') COLLATE utf8_unicode_ci NOT NULL COMMENT '订单状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='订单表';

-- ----------------------------
-- Records of er_order
-- ----------------------------

-- ----------------------------
-- Table structure for er_orderinfo
-- ----------------------------
DROP TABLE IF EXISTS `er_orderinfo`;
CREATE TABLE `er_orderinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单表信息',
  `or_id` int(10) NOT NULL COMMENT '订单号',
  `cid` int(4) NOT NULL COMMENT '商品id',
  `g_num` tinyint(3) NOT NULL COMMENT '商品数量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_orderinfo
-- ----------------------------

-- ----------------------------
-- Table structure for er_product_cart
-- ----------------------------
DROP TABLE IF EXISTS `er_product_cart`;
CREATE TABLE `er_product_cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `buyid` int(10) DEFAULT '0' COMMENT '会员ID',
  `gname` varchar(100) NOT NULL COMMENT '商品名称',
  `pic` varchar(100) NOT NULL,
  `gid` int(10) DEFAULT '0' COMMENT '产品ID',
  `sellid` int(10) DEFAULT '0' COMMENT '卖家ID',
  `price` decimal(10,2) DEFAULT '0.00' COMMENT '价格',
  `sumprice` decimal(10,2) NOT NULL COMMENT '单个商品总价',
  `num` mediumint(8) DEFAULT '0' COMMENT '数量',
  `create_time` int(10) unsigned DEFAULT '0' COMMENT '创建时间',
  `youhui` float(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='购物车';

-- ----------------------------
-- Records of er_product_cart
-- ----------------------------
INSERT INTO `er_product_cart` VALUES ('7', '7', '锦绣', 'goods/20160517/573ac5577ae16.jpg', '56', '6', '20.00', '40.00', '2', '1463554824', '0.00');
INSERT INTO `er_product_cart` VALUES ('8', '3', '锦绣全册九成新', 'goods/20160517/573ac5577ae16.jpg', '56', '6', '20.00', '20.00', '1', '1463627105', '0.00');
INSERT INTO `er_product_cart` VALUES ('9', '0', '一号车铺个性车辆', 'goods/20160517/573ac164ce789.jpg', '52', '2', '120.00', '120.00', '1', '1463755622', '0.00');
INSERT INTO `er_product_cart` VALUES ('10', '3', '普通山地自行车', 'goods/20160517/573abdf639e96.jpg', '49', '2', '100.00', '200.00', '2', '1463756071', '0.00');
INSERT INTO `er_product_cart` VALUES ('11', '3', '计算机二级题库加答案', 'goods/20160511/57333c57e2cdf.jpg', '35', '3', '20.00', '60.00', '3', '1463756098', '5.00');

-- ----------------------------
-- Table structure for er_product_order
-- ----------------------------
DROP TABLE IF EXISTS `er_product_order`;
CREATE TABLE `er_product_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `userid` int(10) DEFAULT NULL COMMENT '会员ID',
  `username` varchar(30) NOT NULL,
  `order_id` varchar(20) DEFAULT NULL COMMENT '订单ID',
  `seller_id` int(10) DEFAULT NULL COMMENT '卖家ID',
  `logid` int(11) DEFAULT NULL COMMENT '收货id',
  `status` tinyint(1) DEFAULT NULL COMMENT '定单状态',
  `create_time` int(10) unsigned DEFAULT NULL COMMENT '下定单时间',
  `payment_time` int(10) DEFAULT NULL COMMENT '支付时间',
  `uptime` int(10) unsigned DEFAULT NULL COMMENT '更新时间',
  `sum` float(10,2) NOT NULL COMMENT '最后付款钱数',
  `youhui` float(10,2) DEFAULT '0.00' COMMENT '优惠价格',
  PRIMARY KEY (`id`),
  KEY `seller_id` (`seller_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='订单表';

-- ----------------------------
-- Records of er_product_order
-- ----------------------------
INSERT INTO `er_product_order` VALUES ('3', '4', '笨女孩', 'O146347311074', null, '5', null, '1463473110', null, null, '59.00', '0.00');
INSERT INTO `er_product_order` VALUES ('6', '3', '你的左耳耳钉', 'O146355029699', null, '3', null, '1463550296', null, null, '210.00', '0.00');
INSERT INTO `er_product_order` VALUES ('12', '3', '2425399474@qq.com', 'O146358924169', null, '3', null, '1463589241', null, null, '38.00', '0.00');
INSERT INTO `er_product_order` VALUES ('13', '3', '2425399474@qq.com', 'O146362201276', null, '3', null, '1463622012', null, null, '300.00', '0.00');
INSERT INTO `er_product_order` VALUES ('14', '3', '2425399474@qq.com', 'O146362737465', null, '3', null, '1463627374', null, null, '160.00', '0.00');
INSERT INTO `er_product_order` VALUES ('15', '3', '2425399474@qq.com', 'O146362772477', null, '3', null, '1463627724', null, null, '20.00', '0.00');
INSERT INTO `er_product_order` VALUES ('16', '3', '2425399474@qq.com', 'O146362821474', null, '3', null, '1463628214', null, null, '100.00', '0.00');
INSERT INTO `er_product_order` VALUES ('17', '3', '2425399474@qq.com', 'O146362825177', null, '2', null, '1463628251', null, null, '1900.00', '0.00');
INSERT INTO `er_product_order` VALUES ('18', '3', '你的左耳耳钉', 'O146375607949', null, null, null, '1463756079', null, null, '220.00', '0.00');
INSERT INTO `er_product_order` VALUES ('19', '3', '你的左耳耳钉', 'O146375611197', null, null, null, '1463756111', null, null, '255.00', '0.00');

-- ----------------------------
-- Table structure for er_product_order_pro
-- ----------------------------
DROP TABLE IF EXISTS `er_product_order_pro`;
CREATE TABLE `er_product_order_pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `order_id` varchar(20) DEFAULT NULL COMMENT '订单ID',
  `buyer_id` int(10) unsigned NOT NULL COMMENT '买家ID',
  `seller_id` int(11) NOT NULL,
  `pid` int(10) unsigned DEFAULT NULL COMMENT '产品ID',
  `pcatid` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL COMMENT '产品名',
  `pic` varchar(100) NOT NULL COMMENT '产品图片',
  `price` float(10,2) unsigned DEFAULT '0.00' COMMENT '价格',
  `num` mediumint(8) unsigned DEFAULT NULL COMMENT ' 数量',
  `time` int(10) unsigned DEFAULT NULL COMMENT '创建时间',
  `status` tinyint(1) DEFAULT '0',
  `youhui` float(10,2) DEFAULT '0.00' COMMENT '运费',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='订单产品表';

-- ----------------------------
-- Records of er_product_order_pro
-- ----------------------------
INSERT INTO `er_product_order_pro` VALUES ('4', 'O146347311074', '4', '2', '51', null, '出售英语教材书', 'goods/20160517/573ac0eb8fadc.jpg', '39.00', '1', '1463473110', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('5', 'O146347311074', '4', '6', '43', null, '乒乓球', 'goods/20160512/57348e448fa9d.jpg', '20.00', '1', '1463473111', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('9', 'O146355029699', '3', '4', '61', null, '全新HIFI音效蓝牙耳机', 'goods/20160517/573ac7c7b698c.jpg', '150.00', '1', '1463550296', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('10', 'O146355029699', '3', '2', '45', null, '九成新网球拍', 'goods/20160516/5739d2853e841.jpg', '60.00', '1', '1463550296', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('17', 'O146358924169', '3', '3', '35', null, '计算机二级题库加答案', 'goods/20160511/57333c57e2cdf_160x160.jpg', '20.00', '2', '1463589241', '5', '2.00');
INSERT INTO `er_product_order_pro` VALUES ('18', 'O146362201276', '3', '4', '61', null, '全新HIFI音效蓝牙耳机', 'goods/20160517/573ac7c7b698c_160x160.jpg', '150.00', '2', '1463622012', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('19', 'O146362737465', '3', '3', '63', null, '电脑耳机，适用各种品牌电脑', 'goods/20160518/573c034c75ea2_160x160.jpg', '80.00', '2', '1463627374', '5', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('20', 'O146362772477', '3', '4', '36', null, '明若晓溪珍藏版全册', 'goods/20160511/5733409940681_160x160.jpg', '20.00', '1', '1463627724', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('21', 'O146362821474', '3', '13', '66', null, '测试商品', 'goods/20160519/573d316646f95_160x160.jpg', '100.00', '1', '1463628214', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('22', 'O146362825177', '3', '13', '66', null, '测试商品', 'goods/20160519/573d316646f95_160x160.jpg', '100.00', '19', '1463628251', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('23', 'O146375607949', '3', '6', '56', null, '锦绣全册九成新', 'goods/20160517/573ac5577ae16.jpg', '20.00', '1', '1463756079', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('24', 'O146375607949', '3', '2', '49', null, '普通山地自行车', 'goods/20160517/573abdf639e96.jpg', '100.00', '2', '1463756079', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('25', 'O146375611197', '3', '2', '49', null, '普通山地自行车', 'goods/20160517/573abdf639e96.jpg', '100.00', '2', '1463756111', '4', '0.00');
INSERT INTO `er_product_order_pro` VALUES ('26', 'O146375611197', '3', '3', '35', null, '计算机二级题库加答案', 'goods/20160511/57333c57e2cdf.jpg', '20.00', '3', '1463756111', '4', '5.00');

-- ----------------------------
-- Table structure for er_school
-- ----------------------------
DROP TABLE IF EXISTS `er_school`;
CREATE TABLE `er_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学校id',
  `city` int(11) NOT NULL COMMENT '省份id',
  `school` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '学校名字',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of er_school
-- ----------------------------
INSERT INTO `er_school` VALUES ('1', '1', '石家庄学院');
INSERT INTO `er_school` VALUES ('2', '1', '石家庄经济学院');
INSERT INTO `er_school` VALUES ('3', '1', '燕山大学');
INSERT INTO `er_school` VALUES ('4', '1', '石家庄铁道大学');
INSERT INTO `er_school` VALUES ('5', '1', '河北工程大学');
INSERT INTO `er_school` VALUES ('6', '1', '衡水学院');
INSERT INTO `er_school` VALUES ('7', '1', '河北经贸大学');
INSERT INTO `er_school` VALUES ('8', '1', '河北医科大学');
INSERT INTO `er_school` VALUES ('9', '1', '河北大学');
INSERT INTO `er_school` VALUES ('10', '1', '石家庄信息工程职业学院');
INSERT INTO `er_school` VALUES ('11', '1', '唐山职业技术学院');
INSERT INTO `er_school` VALUES ('12', '2', '清华大学');
INSERT INTO `er_school` VALUES ('13', '2', '北京大学');
INSERT INTO `er_school` VALUES ('14', '2', '中国人民大学');
INSERT INTO `er_school` VALUES ('15', '2', '北京航空航天大学');
INSERT INTO `er_school` VALUES ('16', '2', '北京邮电大学');
INSERT INTO `er_school` VALUES ('17', '2', '北京师范大学');
INSERT INTO `er_school` VALUES ('18', '3', '太原理工大学');
INSERT INTO `er_school` VALUES ('19', '3', '山西大学');
INSERT INTO `er_school` VALUES ('20', '3', '太原科技大学');
INSERT INTO `er_school` VALUES ('21', '3', '中北大学');

-- ----------------------------
-- Table structure for er_user
-- ----------------------------
DROP TABLE IF EXISTS `er_user`;
CREATE TABLE `er_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `account` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '账号',
  `username` varchar(6) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户昵称',
  `truename` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT '真实姓名',
  `pwd` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `face` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户头像',
  `tel` char(11) COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号',
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户邮箱',
  `time` int(11) NOT NULL COMMENT '注册时间',
  `order_addr` int(11) NOT NULL DEFAULT '0' COMMENT '默认收货地址',
  `scid` int(11) NOT NULL COMMENT '学校',
  `is_approve` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否认证 0没认证 1申请认证 2认证成功 3认证失败',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of er_user
-- ----------------------------
INSERT INTO `er_user` VALUES ('1', '', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '女', 'avatar/touxiang.jpeg', '18231150251', '', '1457573558', '0', '0', '0');
INSERT INTO `er_user` VALUES ('2', '15731115053', 'dita', '董蓓', '96e79218965eb72c92a549dd5a330112', '女', 'avatar/touxiang.jpeg', '15731115053', '', '1456753558', '0', '0', '2');
INSERT INTO `er_user` VALUES ('3', '2425399474@qq.com', '你的左耳耳钉', '张杰', '96e79218965eb72c92a549dd5a330112', '男', 'avatar/20160517/573b09f680bf1.jpg', '15845970524', '2425399474@qq.com', '1457753558', '0', '14', '2');
INSERT INTO `er_user` VALUES ('4', '18712680254', '笨女孩', '王贝', '96e79218965eb72c92a549dd5a330112', '女', 'avatar/20160511/5733456e387ba.jpg', '18712680254', '1563248@qq.com', '1457702558', '0', '19', '2');
INSERT INTO `er_user` VALUES ('6', '18231150251', '测试账号', '', '96e79218965eb72c92a549dd5a330112', '', 'avatar/touxiang.jpeg', '18231150251', '242539474@qq.com', '1463061512', '0', '13', '2');
INSERT INTO `er_user` VALUES ('7', '15811235837', '小妹妹', '', '827ccb0eea8a706c4c34a16891f84e7b', '', 'avatar/touxiang.jpeg', '15811235837', '1025634588@qq.com', '1463554698', '0', '1', '0');
INSERT INTO `er_user` VALUES ('8', '1823568974', '', '', '96e79218965eb72c92a549dd5a330112', '', 'avatar/touxiang.jpeg', '', '', '1463616891', '0', '0', '0');
INSERT INTO `er_user` VALUES ('13', '15632483259', '', '', '96e79218965eb72c92a549dd5a330112', '', 'avatar/touxiang.jpeg', '15632483259', '', '1463628031', '0', '0', '2');

-- ----------------------------
-- Table structure for pay_member
-- ----------------------------
DROP TABLE IF EXISTS `pay_member`;
CREATE TABLE `pay_member` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_email` varchar(100) DEFAULT NULL,
  `pay_mobile` varchar(30) DEFAULT NULL,
  `login_pass` varchar(32) DEFAULT NULL,
  `pay_pass` varchar(32) DEFAULT NULL,
  `real_name` varchar(30) DEFAULT NULL,
  `identity_card` varchar(30) DEFAULT NULL,
  `identity_pic` varchar(255) DEFAULT NULL,
  `profession` varchar(20) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `userid` int(11) unsigned DEFAULT NULL,
  `cash` decimal(8,2) DEFAULT '0.00',
  `unreachable` decimal(10,2) DEFAULT '0.00',
  `email_verify` enum('true','false') DEFAULT 'false',
  `mobile_verify` enum('true','false') DEFAULT 'false',
  `identity_verify` enum('true','false') DEFAULT 'false',
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `regtime` int(10) DEFAULT NULL,
  `lastLoginTime` int(10) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='支付会员表';

-- ----------------------------
-- Records of pay_member
-- ----------------------------
