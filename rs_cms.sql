-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2013 年 07 月 25 日 05:43
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `rs_cms`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_about`
-- 

CREATE TABLE `rs_about` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) default '',
  `content` text,
  `keywords` varchar(200) default '',
  `description` varchar(500) default '',
  `clicknum` int(11) default '0',
  `sortnum` int(11) default '50',
  `ctime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `rs_about`
-- 

INSERT INTO `rs_about` VALUES (1, 0, '', '333', '111', '222', 0, 20, 0);
INSERT INTO `rs_about` VALUES (2, 0, '', 'tttttt<img src="attached/image/20130712/20130712065750_28470.gif" alt="" height="152" width="279" />', 'aaa', 'bbbbb', 0, 30, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_admin`
-- 

CREATE TABLE `rs_admin` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) default '',
  `password` varchar(32) default '',
  `realname` varchar(20) default '',
  `sex` tinyint(1) default '0',
  `tel` varchar(20) default '',
  `email` varchar(200) default '',
  `qq` varchar(20) default '',
  `company` varchar(100) default '',
  `remark` varchar(200) default '',
  `ctime` int(11) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `qq` (`qq`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `rs_admin`
-- 

INSERT INTO `rs_admin` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 0, '', '', '', '', '', 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_admintree`
-- 

CREATE TABLE `rs_admintree` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `pid` int(11) NOT NULL default '0',
  `path` varchar(255) NOT NULL default '0,',
  `menutype` int(1) default '0',
  `sysmenu` int(1) default '0',
  `otherurl` varchar(200) default '',
  `menumodule` int(11) default '0',
  `sortnum` int(11) default '50',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=603 ;

-- 
-- 导出表中的数据 `rs_admintree`
-- 

INSERT INTO `rs_admintree` VALUES (1, '基本设置', '基本设置', 0, '0,', 0, 1, '', 0, 3);
INSERT INTO `rs_admintree` VALUES (2, '内容管理', '内容管理', 0, '0,', 0, 1, '', 0, 5);
INSERT INTO `rs_admintree` VALUES (3, '风格模板', '风格模板', 0, '0,', 0, 1, '', 0, 7);
INSERT INTO `rs_admintree` VALUES (4, '高级设置', '高级设置', 0, '0,', 0, 1, 'welcome/a', 0, 9);
INSERT INTO `rs_admintree` VALUES (5, '管理工具', '管理工具', 0, '0,', 0, 1, '', 0, 11);
INSERT INTO `rs_admintree` VALUES (11, '基本信息', '基本信息', 1, '0,1,', 0, 1, 'conf', 0, 50);
INSERT INTO `rs_admintree` VALUES (12, '栏目管理', '栏目管理', 1, '0,1,', 0, 1, 'category', 0, 50);
INSERT INTO `rs_admintree` VALUES (13, '数据块配置', '数据块配置', 1, '0,1,', 0, 1, 'block', 0, 50);
INSERT INTO `rs_admintree` VALUES (14, '友情链接', '友情链接', 1, '0,1,', 0, 1, 'link', 0, 50);
INSERT INTO `rs_admintree` VALUES (15, '在线帮助', '在线帮助', 1, '0,1,', 0, 1, 'http://www.baidu.com', 0, 50);
INSERT INTO `rs_admintree` VALUES (21, '关于我们', '关于我们', 2, '0,2,', 0, 1, 'block/edit/4', 0, 50);
INSERT INTO `rs_admintree` VALUES (22, '新闻中心', '新闻中心', 2, '0,2,', 1, 1, '', 0, 50);
INSERT INTO `rs_admintree` VALUES (23, '产品中心', '产品中心', 2, '0,2,', 1, 1, '', 0, 50);
INSERT INTO `rs_admintree` VALUES (24, '图片中心', '图片中心', 2, '0,2,', 1, 1, '', 0, 50);
INSERT INTO `rs_admintree` VALUES (25, '下载中心', '下载中心', 2, '0,2,', 1, 1, '', 0, 50);
INSERT INTO `rs_admintree` VALUES (26, '招骋中心', '招骋中心', 2, '0,2,', 1, 1, '', 0, 50);
INSERT INTO `rs_admintree` VALUES (27, '在线留言', '在线留言', 2, '0,2,', 1, 1, '', 0, 50);
INSERT INTO `rs_admintree` VALUES (28, '常见问题', '常见问题', 2, '0,2,', 1, 1, '', 0, 50);
INSERT INTO `rs_admintree` VALUES (31, '风格管理', '风格管理', 3, '0,3,', 0, 1, 'welcome/a', 0, 50);
INSERT INTO `rs_admintree` VALUES (32, '参数设置', '参数设置', 3, '0,3,', 0, 1, 'welcome/a', 0, 50);
INSERT INTO `rs_admintree` VALUES (41, '留言参数', '留言参数', 4, '0,4,', 0, 1, 'http://localhost/xdcms/xdcms/bdmin/index.php/message/site', 0, 50);
INSERT INTO `rs_admintree` VALUES (42, '图片参数', '图片参数', 4, '0,4,', 0, 1, 'welcome/a', 0, 50);
INSERT INTO `rs_admintree` VALUES (43, '简历参数', '简历参数', 4, '0,4,', 0, 1, 'welcome/a', 0, 50);
INSERT INTO `rs_admintree` VALUES (51, '管理员管理', '管理员管理', 5, '0,5,', 0, 1, 'welcome/a', 0, 50);
INSERT INTO `rs_admintree` VALUES (52, '数据库备份', '数据库备份', 5, '0,5,', 0, 1, 'backup', 0, 50);
INSERT INTO `rs_admintree` VALUES (53, '数据库恢复', '数据库恢复', 5, '0,5,', 0, 1, 'welcome/a', 0, 50);
INSERT INTO `rs_admintree` VALUES (54, '整站备份', '整站备份', 5, '0,5,', 0, 1, 'welcome/a', 0, 50);
INSERT INTO `rs_admintree` VALUES (221, '添加新闻', '添加新闻', 22, '0,2,22,', 0, 1, 'news/addnews', 0, 50);
INSERT INTO `rs_admintree` VALUES (222, '管理新闻', '管理新闻', 22, '0,2,22,', 0, 1, 'news/showindex', 0, 50);
INSERT INTO `rs_admintree` VALUES (231, '添加产品', '添加产品', 23, '0,2,23,', 0, 1, 'http://localhost/xdcms/xdcms/bdmin/index.php/product/add', 0, 50);
INSERT INTO `rs_admintree` VALUES (232, '管理产品', '管理产品', 23, '0,2,23,', 0, 1, 'http://localhost/xdcms/xdcms/bdmin/index.php/product/manage', 0, 50);
INSERT INTO `rs_admintree` VALUES (241, '添加图片', '添加图片', 24, '0,2,24,', 0, 1, 'pic/addpic', 0, 50);
INSERT INTO `rs_admintree` VALUES (242, '管理图片', '管理图片', 24, '0,2,24,', 0, 1, 'pic/showindex', 0, 50);
INSERT INTO `rs_admintree` VALUES (251, '添加下载', '添加下载', 25, '0,2,25,', 0, 1, 'down/adddownload', 0, 50);
INSERT INTO `rs_admintree` VALUES (252, '管理下载', '管理下载', 25, '0,2,25,', 0, 1, 'down/showindex', 0, 50);
INSERT INTO `rs_admintree` VALUES (261, '添加招骋', '添加招骋', 26, '0,2,26,', 0, 1, 'http://localhost/xdcms/xdcms/bdmin/index.php/job/add', 0, 50);
INSERT INTO `rs_admintree` VALUES (262, '管理招骋', '管理招骋', 26, '0,2,26,', 0, 1, 'http://localhost/xdcms/xdcms/bdmin/index.php/job/manage', 0, 50);
INSERT INTO `rs_admintree` VALUES (271, '添加在线留言', '添加在线留言', 27, '0,2,27,', 0, 1, 'http://localhost/xdcms/xdcms/index.php/message', 0, 50);
INSERT INTO `rs_admintree` VALUES (272, '管理在线留言', '管理在线留言', 27, '0,2,27,', 0, 1, 'http://localhost/xdcms/xdcms/bdmin/index.php/message/online', 0, 50);
INSERT INTO `rs_admintree` VALUES (281, '添加常见问题', '添加常见问题', 28, '0,2,28,', 0, 1, 'faq/add/8', 0, 50);
INSERT INTO `rs_admintree` VALUES (282, '管理常见问题', '管理常见问题', 28, '0,2,28,', 0, 1, 'faq', 0, 50);
INSERT INTO `rs_admintree` VALUES (600, 'wret', 'qwerw', 0, '0,', 0, 0, '$', 0, 50);
INSERT INTO `rs_admintree` VALUES (601, 'rewqewqr', 'qrqr', 600, '0,600,', 0, 0, 'faq', 0, 50);
INSERT INTO `rs_admintree` VALUES (602, '权限控制', '权限控制', 5, '0,5,', 0, 0, '/admin/rods', 0, 50);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_block`
-- 

CREATE TABLE `rs_block` (
  `id` int(11) NOT NULL auto_increment,
  `imgurl` varchar(200) default '',
  `title` varchar(200) default '',
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `rs_block`
-- 

INSERT INTO `rs_block` VALUES (2, '1373612824.jpg', '首页关于我们', '兄弟企业网站管理系统是兄弟传奇(www.xdcms.com)开发的为企业网站提供一揽子解决方案的营销型网站系统，后台采用PHP+Mysql架构，\r\n内置企业简介模块、新闻模块、产品模块、图片模块、下载模块、在线留言模块、常见问题模块、友情链接模块。前台采用DIV+CSS，遵循SEO标准，通过\r\n模板或者定制为企业提供专业的营销型网站。 &nbsp;<br />\r\n兄弟传奇专注于为企业信息化提供完整的解决方案，包括企业网站建设、空间域名以及网络营销推广。 我们以为合作伙伴创造价值为愿景，一切以客户价值为依归，运用互联网领域专业经验，帮助企业专业地接入到信息世界，消除数字鸿沟。');
INSERT INTO `rs_block` VALUES (3, '1374484529.jpg', '首页项目介绍', '<p>\r\n	<strong>兄弟连第二项目</strong> \r\n</p>\r\n<p>\r\n	<strong>组名：兄弟传奇</strong> \r\n</p>\r\n<p>\r\n	<strong>项目名称：</strong> \r\n</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp; </strong>兄弟CMS网站管理系统\r\n</p>\r\n<p>\r\n	<strong>小组成员：</strong> \r\n</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp; </strong>如水\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;贾旭召\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;诸菲\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>');
INSERT INTO `rs_block` VALUES (4, '', '关于我们', '关于我们');
INSERT INTO `rs_block` VALUES (5, '', '联系我们', '联系我们');

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_category`
-- 

CREATE TABLE `rs_category` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `keywords` varchar(200) default '',
  `description` varchar(500) default '',
  `pid` int(11) NOT NULL default '0',
  `path` varchar(255) NOT NULL default '0,',
  `menutype` int(11) default '0',
  `otherurl` varchar(200) default '',
  `menumodule` int(11) default '0',
  `navshow` int(11) default '0',
  `blankwindow` int(1) default '0',
  `sortnum` int(11) default '50',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=804 ;

-- 
-- 导出表中的数据 `rs_category`
-- 

INSERT INTO `rs_category` VALUES (1, '关于我们', '关于我们', '', '', 0, '0,', 0, '', 0, 1, 0, 3);
INSERT INTO `rs_category` VALUES (2, '新闻中心', '新闻中心', '', '', 0, '0,', 0, '', 1, 1, 0, 5);
INSERT INTO `rs_category` VALUES (3, '产品中心', '产品中心', '', '', 0, '0,', 0, '', 2, 1, 0, 7);
INSERT INTO `rs_category` VALUES (4, '图片中心', '图片中心', '', '', 0, '0,', 0, '', 3, 1, 0, 9);
INSERT INTO `rs_category` VALUES (5, '下载中心', '下载中心', '', '', 0, '0,', 0, '', 4, 1, 0, 11);
INSERT INTO `rs_category` VALUES (6, '招聘中心', '招聘中心', '', '', 0, '0,', 0, '', 5, 1, 0, 13);
INSERT INTO `rs_category` VALUES (7, '在线留言', '在线留言', '', '', 0, '0,', 0, '', 6, 1, 0, 15);
INSERT INTO `rs_category` VALUES (8, '常见问题', '常见问题', '', '', 0, '0,', 0, '', 7, 1, 0, 17);
INSERT INTO `rs_category` VALUES (801, '常见问题1', '常见问题1', '常见问题1', '常见问题1', 8, '0,8,', 0, '', 7, 0, 0, 50);
INSERT INTO `rs_category` VALUES (802, 'fzggd', 'zxcvcvz', 'cxvczxv', 'cvxxzcvzcv', 801, '0,8,801,', 0, '', 7, 0, 0, 50);
INSERT INTO `rs_category` VALUES (803, 'adfadsf', 'adfadsf', 'adsfasdf', 'adsfafds', 2, '0,2,', 0, '', 1, 0, 0, 50);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_config`
-- 

CREATE TABLE `rs_config` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `webname` varchar(100) NOT NULL default '',
  `weburl` varchar(100) NOT NULL default '',
  `weblogo` varchar(100) NOT NULL default '',
  `webtitle` varchar(100) NOT NULL default '',
  `webskin` varchar(100) NOT NULL default '',
  `keywords` varchar(200) default '',
  `description` varchar(500) default '',
  `uploadformat` varchar(100) NOT NULL default '',
  `uploadmax` int(11) default '5',
  `footright` varchar(500) default '',
  `footaddress` varchar(500) default '',
  `footcontact` varchar(500) default '',
  `footother` varchar(500) default '',
  `showkefu` int(11) default '0',
  `showlink` int(11) default '0',
  `otherconfig` varchar(200) default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `rs_config`
-- 

INSERT INTO `rs_config` VALUES (1, 'default', '兄弟cms系统1', 'http://www.rushui.net', 'images/logo.jpg', '兄弟cms系统', 'default', '兄弟,cms', '兄弟CMS是兄弟联学员开发的新型网站管理系统', 'jpg,gif,png', 5, '兄弟CMS 版权所有 兄弟传奇小组制作', '上海闸北', 'QQ:282307576', '兄弟传奇', 0, 1, 'templte/config.php');

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_download`
-- 

CREATE TABLE `rs_download` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) default '',
  `content` text,
  `keywords` varchar(200) default '',
  `description` text,
  `fileurl` varchar(200) default '',
  `filesize` int(11) default '0',
  `showindex` int(1) default '1',
  `showsub` int(1) default '1',
  `clicknum` int(11) default '0',
  `isrecommend` int(1) default '0',
  `sortnum` int(11) default '50',
  `status` int(1) default '1',
  `ctime` int(11) default '0',
  `mtime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `rs_download`
-- 

INSERT INTO `rs_download` VALUES (3, 0, '栞枯干大规模', '大本营', '大规模', '大本营', '1373865439.jpg', 0, 1, 1, 0, 0, 50, 1, 2013, 2013);
INSERT INTO `rs_download` VALUES (2, 0, 'REQTRWETWRET', 'RETWERTWRETWE', '', 'WERTWRET', '1373865430.jpg', 0, 1, 1, 0, 0, 50, 1, 2013, 2013);
INSERT INTO `rs_download` VALUES (4, 0, 'asdfadsf', 'reatretgre', 'erwtwre', 'rsetger', '1373878226.jpg', 0, 1, 1, 0, 0, 50, 1, 2013, 2013);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_faq`
-- 

CREATE TABLE `rs_faq` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) default '',
  `content` text,
  `keywords` varchar(200) default '',
  `description` text,
  `showindex` int(1) default '1',
  `showsub` int(1) default '1',
  `author` varchar(100) default '',
  `clicknum` int(11) default '0',
  `sortnum` int(11) default '50',
  `status` int(1) default '1',
  `ctime` int(11) default '0',
  `mtime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `rs_faq`
-- 

INSERT INTO `rs_faq` VALUES (4, 0, '如何修改网站LOGO?', '<a href="http://localhost/Kuwebs/faq/faq.php?lang=cn&amp;itemid=13">如何修改网站LOGO?</a>', '如何修改网站LOGO?', '如何修改网站LOGO?', 1, 1, '', 0, 50, 1, 0, 0);
INSERT INTO `rs_faq` VALUES (3, 0, '如何修改网站LOGO?', '<pre class="prettyprint lang-html"><a href="http://www.rushui.net">如水博客</a></pre>', '', '<pre class="prettyprint lang-html"><a href="http://www.rushui.net">如水博客</a></pre>', 1, 1, '', 0, 50, 1, 0, 0);
INSERT INTO `rs_faq` VALUES (5, 0, '天气热啊=吗', 'ewrqewrqwer', 'wqerqwer', 'ewqrewqrewr', 1, 1, '', 0, 50, 1, 0, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_img`
-- 

CREATE TABLE `rs_img` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) default '',
  `content` text,
  `keywords` varchar(200) default '',
  `description` text,
  `imgurl` varchar(200) default '',
  `urlpre` varchar(200) default '',
  `showindex` int(1) default '1',
  `showsub` int(1) default '1',
  `clicknum` int(11) default '0',
  `isrecommend` int(1) default '0',
  `sortnum` int(11) default '50',
  `status` int(1) default '1',
  `ctime` int(11) default '0',
  `mtime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `rs_img`
-- 

INSERT INTO `rs_img` VALUES (1, 0, '大规模塔顶塔顶', '需要', '', '东奔西走东奔西走', '1373854215.jpg', '', 1, 1, 0, 0, 50, 1, 2013, 2013);
INSERT INTO `rs_img` VALUES (2, 0, 'adsasdfsadfdasfadf', '<p>\r\n					左			  ', '左', '基本', '1373854232.jpg', '', 1, 1, 0, 0, 50, 1, 2013, 2013);
INSERT INTO `rs_img` VALUES (3, 0, 'asdfadsfadsf', '<p>\r\n					adsfdsfasd			  ', 'fasfasd', 'dfsdfd', '1373865685.gif', '', 1, 1, 0, 0, 50, 1, 2013, 2013);
INSERT INTO `rs_img` VALUES (4, 0, 'asfdafdsasf', 'fsfgsdfgsgfs', 'asfdadf', 'adsfdsafa', '1373878168.jpg', '', 1, 1, 0, 0, 50, 1, 2013, 2013);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_job`
-- 

CREATE TABLE `rs_job` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) default '',
  `content` text,
  `keywords` varchar(200) default '',
  `description` text,
  `num` int(11) default '0',
  `depart` varchar(200) default '',
  `post` varchar(200) default '',
  `addr` varchar(200) default '',
  `salary` varchar(200) default '',
  `expirytime` int(11) default '0',
  `clicknum` int(11) default '0',
  `sortnum` int(11) default '50',
  `status` int(1) default '1',
  `ctime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `rs_job`
-- 

INSERT INTO `rs_job` VALUES (1, 0, '答', '东奔西走', '需要', '二', 0, '扔', ' 要', '', '', 0, 368, 50, 1, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_link`
-- 

CREATE TABLE `rs_link` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `logo` varchar(200) default '',
  `linktype` int(2) default '1',
  `info` varchar(200) NOT NULL,
  `status` int(11) default '1',
  `ctime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `rs_link`
-- 

INSERT INTO `rs_link` VALUES (1, 'sdafasdf', 'http://asdfasdf.com', '', 0, 'asdfasdfaf', 1, 0);
INSERT INTO `rs_link` VALUES (2, 'adsfsafasd', 'http://adsfadsfads.com', '1373595852.jpg', 1, 'adsfadsf', 1, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_log`
-- 

CREATE TABLE `rs_log` (
  `id` int(11) NOT NULL auto_increment,
  `Log_Num` int(11) NOT NULL,
  `Log_name` varchar(200) NOT NULL,
  `Log_ip` varchar(200) default '',
  `Log_info` varchar(200) NOT NULL,
  `ctime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `rs_log`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `rs_message`
-- 

CREATE TABLE `rs_message` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default '',
  `content` text,
  `recontent` text,
  `keywords` varchar(200) default '',
  `description` text,
  `showindex` int(1) default '1',
  `showsub` int(1) default '1',
  `username` varchar(200) default '',
  `tel` varchar(200) default '',
  `email` varchar(200) default '',
  `qq` varchar(200) default '',
  `address` varchar(200) default '',
  `ip` varchar(200) default '',
  `clicknum` int(11) default '0',
  `sortnum` int(11) default '50',
  `status` int(11) default '0',
  `ctime` int(11) default '0',
  `mtime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- 
-- 导出表中的数据 `rs_message`
-- 

INSERT INTO `rs_message` VALUES (1, '如何修改菜单上面联系我们的内容？', '如何修改菜单上面联系我们的内容？不是主页上的。', '首先从【基本设置->栏目管理】中找到【联系我们】栏目所属的顶级栏目，一般属于关于我们栏目，在【内容管理->管理关于我们】中编辑该项的内容，然后刷新前台查看更改。\r\n			当前台已经被静态化之后，需要重新生成页面方可生效。', '', NULL, 1, 1, 'Kuwebs用户 ', '0755-36943966', 'info@kuwes.com', '3375074', '', '127.0.0.1', 0, 50, 0, 1372842056, 0);
INSERT INTO `rs_message` VALUES (2, '请问如何修改网站标题？', '请问如何修改Kuwebs的网站标题？', '如何修改Kuwebs的网站浏览器标题？\r\n登录到系统后台，在基本【基本设置->基本信息】当中设置【网站名称】。点击确定之后，刷新前台看标题栏的变更。\r\n当然，由于Kuwebs提供SEO标题优化，优化字段标题需要在【基本设置->SEO设置】当中设置SEO标题。刷新前台查看标题栏的变更。 当前台已经被静态化之后，需要重新生成页面方可生效。 \r\n', '', NULL, 1, 1, '华为', '0755-36943966', 'info@kuwes.com', '3375074', '', '127.0.0.1', 0, 50, 0, 1372842056, 0);
INSERT INTO `rs_message` VALUES (3, '请问如何购买版权？', '我公司想使用这套系统开发自己的企业网站，请问如何购买版权？', '您好，请访问<a href="http://www.kuwebs.com/about/index.php?lang=cn&menuid=183">http://www.kuwebs.com/about/index.php?lang=cn&menuid=183</a>了解授权详情。\r\n官方网站上也联系Kuwebs售前客服。\r\n', '', NULL, 1, 1, '小叶子', '0755-36943966', 'info@kuwes.com', '3375074', '', '127.0.0.1', 0, 50, 0, 1372842056, 0);
INSERT INTO `rs_message` VALUES (4, '如何修改主页上面的公司简介？', '如何修改主页的公司简介，以及右侧的联系我们？', '主页上的公司简介和右侧的联系我们是数据块，在管理后台选择【数据块管理】，左侧会出现公司简介和联系我们栏目，点击分别修改标题和内容，刷新前台显示。<br>\r\n当前台已经被静态化之后，需要重新生成页面方可生效。', '', NULL, 1, 1, '迷惑着', '0755-36943966', 'shflg1234@163.com', '3375074', '', '127.0.0.1', 0, 50, 0, 0, 0);
INSERT INTO `rs_message` VALUES (23, 'dada', 'dsadsad', NULL, '', NULL, 1, 1, 'dasdsa', '', 'dsadsa', '', '', '127.0.0.1', 0, 50, 1, 1373263470, 0);
INSERT INTO `rs_message` VALUES (24, 'dasda', 'dsadsad', NULL, '', NULL, 1, 1, 'dsadsad', '', 'sadsa', '', '', '127.0.0.1', 0, 50, 1, 1373263515, 0);
INSERT INTO `rs_message` VALUES (25, 'dasda', 'dsadsad', NULL, '', NULL, 1, 1, 'dsadsad', '', 'sadsa', '', '', '127.0.0.1', 0, 50, 1, 1373263523, 0);
INSERT INTO `rs_message` VALUES (26, 'dsadsad', 'hahaha', NULL, '', NULL, 1, 1, 'dsadsa', '', 'dsadsadsa', '', '', '127.0.0.1', 0, 50, 1, 1373334459, 0);
INSERT INTO `rs_message` VALUES (27, 'dfsfadsf', 'dsfadsf', NULL, '', NULL, 1, 1, 'adsfadsf', '', 'adsfadsf', '', '', '127.0.0.1', 0, 50, 1, 1373793620, 0);
INSERT INTO `rs_message` VALUES (28, '东奔西走', 'adsfdasf', NULL, '', NULL, 1, 1, '苦', '', '工', 'afjakd@adfdas.com', '', '127.0.0.1', 0, 50, 1, 1373865564, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_news`
-- 

CREATE TABLE `rs_news` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) default '',
  `content` text,
  `keywords` varchar(200) default '',
  `description` text,
  `showindex` int(1) default '0',
  `showsub` int(1) default '1',
  `author` varchar(100) default '',
  `copyfrom` varchar(200) default '',
  `isrecommend` int(3) default '0',
  `clicknum` int(11) default '0',
  `sortnum` int(11) default '50',
  `status` int(1) default '1',
  `ctime` int(11) default '0',
  `mtime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `rs_news`
-- 

INSERT INTO `rs_news` VALUES (1, 0, '测试新闻一。。。。', '					ASDsdaSDA			  ', 'SAD', 'sdaASD', 1, 1, 'admin', 'SADS', 1, 368, 50, 0, 2013, 2013);
INSERT INTO `rs_news` VALUES (2, 0, '测试新闻二。。。。', '', '', '', 1, 1, 'admin', '', 0, 368, 50, 0, 2013, 2013);
INSERT INTO `rs_news` VALUES (3, 0, '测试新闻三。。。。', '', '', '', 1, 1, 'admin', '', 0, 368, 50, 0, 2013, 2013);
INSERT INTO `rs_news` VALUES (4, 0, '测试新闻四。。。。', '', '', '', 1, 1, 'admin', '', 0, 368, 50, 0, 2013, 2013);
INSERT INTO `rs_news` VALUES (5, 0, '测试新闻5。。。。', '', '', '', 1, 1, 'admin', '', 0, 368, 50, 0, 2013, 2013);
INSERT INTO `rs_news` VALUES (6, 0, 'asdfasfd', 'asdfadsfa', '', 'sadfsadf', 1, 1, 'admin', '', 0, 368, 50, 0, 2013, 2013);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_product`
-- 

CREATE TABLE `rs_product` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) default '',
  `content` text,
  `keywords` varchar(200) default '',
  `description` text,
  `imgurl` varchar(200) default '',
  `imgurlpre` varchar(200) default '',
  `showindex` int(1) default '0',
  `showsub` int(1) default '1',
  `isnew` int(1) default '0',
  `isrecommend` int(1) default '0',
  `clicknum` int(11) default '0',
  `sortnum` int(11) default '50',
  `status` int(1) default '1',
  `ctime` int(11) default '0',
  `mtime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- 导出表中的数据 `rs_product`
-- 

INSERT INTO `rs_product` VALUES (10, 1, '水星MW300R 无线路由器', 'ATHEROS是全球第一的WiFi芯片供应商，在WiFi领域技术领先，其无线芯片方案在性能上有显著优越性，目前全球知名网络品牌厂商TP-LINK、Linksys Cisco、 NETGEAR等均采用ATHEROS芯片方案，水星MW300R也采用ATHEROS 11N技术300M无线芯片方案，无线性能强劲。', '', NULL, '', 'http://localhost/kukuku/cmscode/admin/../upload/thumb/1315711305.jpg', 0, 1, 0, 0, 0, 50, 1, 100000, 0);
INSERT INTO `rs_product` VALUES (11, 1, '惠普HP430 笔记本电脑', '智能多任务处理事半功倍，内置视觉特性为您带来耳目一新的视觉享受，轻松驾驭高清影音和主流3D游戏。无缝融合的核芯显卡，高效应对多任务处理，低发热长待机。', '', NULL, '', 'http://localhost/kukuku/cmscode/admin/../upload/thumb/1315711756.jpg', 0, 1, 0, 0, 0, 50, 1, 100000, 0);
INSERT INTO `rs_product` VALUES (12, 1, '戴尔（DELL）Inspiron14V 14英寸笔记', '我行我乐通过灵活迅捷、经济实惠的Inspiron灵越14，几乎可以任何地点轻松处理日常任务和保持联网1。通过这款外型小巧、响应迅速的笔记本电脑，您可以轻松访问最喜爱的音乐、照片和视频，让移动生活变得简单而充满乐趣。紧跟生活的脚步 与朋友保持联系。', '', NULL, '', 'http://localhost/kukuku/cmscode/admin/../upload/thumb/1315711436.jpg', 0, 1, 0, 0, 0, 50, 1, 100000, 0);
INSERT INTO `rs_product` VALUES (13, 1, '飞利浦专用接口音箱', '可同时播放 iPod/iPhone 音乐并为其充电一边为 iPod/iPhone 充电，一边欣赏您喜爱的 MP3 音乐！您可通过该设备将您的便携式设备直接连接到基座式娱乐系统，从而以卓越的音质聆听最爱音乐。它还能在 iPod/iPhone 的播放过程中为其充电，因此您可以尽情欣赏音乐，而不必担心便携式播放器的电池电量耗尽。插接便携式设备时，基座式娱乐系统会自动为其充电。.', '', NULL, '', 'http://localhost/kukuku/cmscode/admin/../upload/thumb/1315711696.jpg', 0, 1, 0, 0, 0, 50, 1, 100000, 0);
INSERT INTO `rs_product` VALUES (14, 2, '万和嵌入式燃气灶', '快速点火，使用方便采用“0”秒点火装置设计，快速启动点火，点火成功率100%，使用方便快捷。.', '', NULL, '', 'http://localhost/kukuku/cmscode/admin/../upload/thumb/1315711665.jpg', 0, 1, 0, 0, 0, 50, 1, 100000, 0);
INSERT INTO `rs_product` VALUES (15, 2, '康佳全高清LED电视', '简约外观 低调奢华源自欧洲文艺复的灵感，简单的线条勾勒尽显成熟与稳重！面板中创新加入璀璨珠光颗粒带来的磨砂手感，配合炫钢拉丝质感的高品质触摸按键，低调稳重，尽显奢华！。', '', NULL, '', 'http://localhost/kukuku/cmscode/admin/../upload/thumb/1315710207.jpg', 0, 1, 0, 0, 0, 50, 1, 100000, 0);
INSERT INTO `rs_product` VALUES (17, 0, '这是主题', '哈哈,这是内容', '主题', '主题', 'http://localhost/kukuku/cmscode/admin/../upload/51de2bc24d6de.png', 'http://localhost/kukuku/cmscode/admin/../upload/thumb/s120_51de2bc24d6de.png', 1, 1, 1, 1, 123, 50, 1, 0, 0);
INSERT INTO `rs_product` VALUES (18, 0, 'afafdadsfasf', 'adfadsf', 'asdfasdf', 'adsfasd', 'http://localhost/xdcms/xdcms/bdmin/../upload/51dfb45eb5a92.jpg', 'http://localhost/xdcms/xdcms/bdmin/../upload/thumb/s120_51dfb45eb5a92.jpg', 1, 1, 0, 0, 0, 50, 1, 0, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `rs_resume`
-- 

CREATE TABLE `rs_resume` (
  `id` int(11) NOT NULL auto_increment,
  `jobid` int(11) NOT NULL default '0',
  `userid` int(11) default '0',
  `post` varchar(200) default '',
  `name` varchar(200) NOT NULL,
  `sex` int(1) default '1',
  `birthday` varchar(200) default '',
  `birthplace` varchar(200) default '',
  `tel` varchar(200) default '',
  `code` varchar(200) default '',
  `email` varchar(200) NOT NULL,
  `salary` int(11) default '0',
  `education` varchar(200) default '',
  `professional` varchar(200) default '',
  `school` varchar(200) default '',
  `address` varchar(200) default '',
  `eduexp` text,
  `trainexp` text,
  `jobexp` text,
  `selfeval` text,
  `remark` text,
  `readok` int(11) default '0',
  `ctime` int(11) default '0',
  `mtime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `rs_resume`
-- 

