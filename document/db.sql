/*
 * 
 * @author	如水(www.Rushui.net)
 */


/*建立并进入数据库*/
CREATE DATABASE IF NOT EXISTS rs_cms;
USE rs_cms;

/* 后台管理员 */
CREATE TABLE IF NOT EXISTS `rs_admin` (
  `id` int(11)  AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(20) UNIQUE DEFAULT '',
  `password` varchar(32) DEFAULT '',
  `realname` varchar(20) DEFAULT '',		/*真实姓名*/
  `sex` tinyint(1) DEFAULT '0',
  `tel` varchar(20) DEFAULT '',
  `email` varchar(200) UNIQUE DEFAULT '',
  `qq` varchar(20) UNIQUE DEFAULT '',
  `company` varchar(100) DEFAULT '',		/*公司*/
  `remark` varchar(200) DEFAULT '',		/*说明*/
  `ctime` int DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 插入管理员数据 */
INSERT INTO `rs_admin`(name,password) VALUES('admin',MD5('admin'));

/*角色*/
CREATE TABLE IF NOT EXISTS `rs_role`(
	id int auto_increment primary key,
	name varchar(255) not null,			/*角色名称*/
	remark varchar(255),
	system INT DEFAULT 0 					/*是否系统角色(系统角色不允许删除)*/
)ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=UTF8 ;

/*用户角色关系*/
CREATE TABLE IF NOT EXISTS `rs_user_role`(
	id int auto_increment primary key,
	user_id int not null,
	role_id int not null
) ENGINE=MyISAM  DEFAULT CHARSET=UTF8;

INSERT INTO rs_user_role (user_id,role_id) VALUES (1,1);

/*节点表*/
CREATE TABLE IF NOT EXISTS `rs_node` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,				/*名称(控制器名或动作名 )*/
  `title` varchar(255) ,						/*标题*/
  `pid` int default 0,							/*父ID*/
  `node_path` varchar(255) DEFAULT '',		/*路径，如 User/add  */
  `remark` text 
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=UTF8;

/*访问权限表*/
CREATE TABLE IF NOT EXISTS `rs_access` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `role_id` int  NOT NULL,
  `node_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=UTF8;

/* 网站配置表 */
CREATE TABLE IF NOT EXISTS `rs_config` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,		
  `title` varchar(100) NOT NULL DEFAULT '',				/*配置名称*/		
  `webname` varchar(100) NOT NULL DEFAULT '',			/*网站名称*/
  `weburl` varchar(100) NOT NULL DEFAULT '',				/*网站地址*/
  `weblogo` varchar(100) NOT NULL DEFAULT '',			/*网站logo*/
  `webtitle` varchar(100) NOT NULL DEFAULT '',			/*网站标题*/
  `webskin` varchar(100) NOT NULL DEFAULT '',			/*网站风格*/
  `keywords` varchar(200) DEFAULT '',						/*关键字*/
  `description` varchar(500) DEFAULT '',  				/*描述*/
  `uploadformat` varchar(100) NOT NULL DEFAULT '',		/*允许上传的格式*/
  `uploadmax` int(11) DEFAULT '5',						/*文件上传最大值默认为5M*/
  `footright` varchar(500) DEFAULT '',  					/*网站底部版权信息*/
  `footaddress` varchar(500) DEFAULT '',  				/*网站底部地址信息*/
  `footcontact` varchar(500) DEFAULT '',  				/*网站底部联系方式*/
  `footother` varchar(500) DEFAULT '',  					/*网站底部其他信息*/
  `showkefu` int(11) DEFAULT '0',							/*是否显示客服0不显示，1显示*/
  `showlink` int(11) DEFAULT '0',							/*显示友情链接0不显示，1显示*/
  `otherconfig` varchar(200) DEFAULT ''					/*其他配置文件路径*/
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 插入网站配置数据 */
INSERT INTO `rs_config` VALUES
	(1,'default','兄弟cms系统','http://www.rushui.net','images/logo.jpg','兄弟cms系统','default','兄弟,cms','兄弟CMS是兄弟联学员开发的新型网站管理系统','jpg,gif,png',5,'兄弟CMS 版权所有','上海闸北','QQ:282307576','兄弟传奇',0,1,'templte/config.php');

/* 分类id */
CREATE TABLE IF NOT EXISTS `rs_category` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL DEFAULT '',		/*分类名称*/		
  `title` varchar(100) NOT NULL DEFAULT '',		/*分类标题*/		
  `keywords` varchar(200) DEFAULT '',
  `description` varchar(500) DEFAULT '',
  `pid` INT NOT NULL DEFAULT 0,
  `path` VARCHAR(255) NOT NULL DEFAULT '0,',
  `menutype` int(11) DEFAULT '0',					/*栏目属性0内部栏目，1外部链接*/
  `otherurl` varchar(200) DEFAULT '',				/*外部链接地址（当分类属性为1时显示）*/
  `menumodule` int(11) DEFAULT '0',				/*栏目模块*/
  `navshow` int(11) DEFAULT '0',					/*显示位置，0都不显示，1主导航，2底部，3都显示*/
  `blankwindow` int(1) DEFAULT '0',				/*是否新窗口打开*/
  `sortnum` int(11) DEFAULT '50'					/*排序*/
) ENGINE=MyISAM AUTO_INCREMENT=801 DEFAULT CHARSET=utf8;

/* 前台栏目初始数据 */
INSERT INTO rs_category VALUES 
	(1,'关于我们','关于我们','','',0,'0,',0,'',0,1,0,3),
	(2,'新闻中心','新闻中心','','',0,'0,',0,'',1,1,0,5),
	(3,'产品中心','产品中心','','',0,'0,',0,'',2,1,0,7),
	(4,'图片中心','图片中心','','',0,'0,',0,'',3,1,0,9),
	(5,'下载中心','下载中心','','',0,'0,',0,'',4,1,0,11),
	(6,'招聘中心','招聘中心','','',0,'0,',0,'',5,1,0,13),
	(7,'在线留言','在线留言','','',0,'0,',0,'',6,1,0,15),
	(8,'常见问题','常见问题','','',0,'0,',0,'',7,1,0,17);


/* 关于我们 */
CREATE TABLE IF NOT EXISTS `rs_about` (
  `id` int(11)  AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,				/*分类id*/
  `title` varchar(200) DEFAULT '',
  `content` text,
  `keywords` varchar(200) DEFAULT '',
  `description` varchar(500) DEFAULT '',
  `clicknum` int(11) DEFAULT '0',				/*点击次数*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `ctime` int DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 新闻中心 */
CREATE TABLE IF NOT EXISTS `rs_news` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,				/*分类id*/
  `title` varchar(255) DEFAULT '',
  `content` text,
  `keywords` varchar(200) DEFAULT '',
  `description` text,
  `showindex` int(1) DEFAULT '0',
  `showsub` int(1) DEFAULT '1',
  `author` varchar(100) DEFAULT '',			/*作者*/
  `copyfrom` varchar(200) DEFAULT '',			/*来源*/
  `isrecommend` int(3) DEFAULT '0',			/*推荐*/
  `clicknum` int(11) DEFAULT '0',				/*点击次数*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `status` int(1) DEFAULT '1',				/*状态默认1为显示，0为不显示*/
  `ctime` int DEFAULT '0',
  `mtime` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 产品中心 */
CREATE TABLE IF NOT EXISTS `rs_product`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,				/*分类id*/
  `title` varchar(255) DEFAULT '',
  `content` text,
  `keywords` varchar(200) DEFAULT '',
  `description` text,
  `imgurl` varchar(200) DEFAULT '',			/*产品图片*/
  `imgurlpre` varchar(200) DEFAULT '',		/*缩略图*/
  `showindex` int(1) DEFAULT '0',
  `showsub` int(1) DEFAULT '1',
  `isnew` int(1) DEFAULT '0',					/*新品*/
  `isrecommend` int(1) DEFAULT '0',			/*推荐*/
  `clicknum` int(11) DEFAULT '0',				/*点击次数*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `status` int(1) DEFAULT '1',				/*状态默认1为显示，0为不显示*/
  `ctime` int DEFAULT '0',
  `mtime` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 图片中心 */
CREATE TABLE IF NOT EXISTS `rs_img`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,				/*分类id*/
  `title` varchar(255) DEFAULT '',
  `content` text,
  `keywords` varchar(200) DEFAULT '',
  `description` text,
  `imgurl` varchar(200) DEFAULT '',			/*图片地址*/
  `urlpre` varchar(200) DEFAULT '',			/*缩略图*/
  `showindex` int(1) DEFAULT '1',
  `showsub` int(1) DEFAULT '1',
  `clicknum` int(11) DEFAULT '0',				/*点击次数*/
  `isrecommend` int(1) DEFAULT '0',			/*推荐图片*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `status` int(1) DEFAULT '1',				/*状态默认1为显示，0为不显示*/
  `ctime` int DEFAULT '0',
  `mtime` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 下载中心 */
CREATE TABLE IF NOT EXISTS `rs_download` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,				/*分类id*/
  `title` varchar(255) DEFAULT '',
  `content` text,
  `keywords` varchar(200) DEFAULT '',			/*网页关键字*/
  `description` text,							/*网页描述*/
  `fileurl` varchar(200) DEFAULT '',			/*文件地址*/
  `filesize` int(11) DEFAULT '0',				/*文件大小*/
  `showindex` int(1) DEFAULT '1',				/*首页显示*/
  `showsub` int(1) DEFAULT '1',				/*栏目页显示*/
  `clicknum` int(11) DEFAULT '0',				/*点击次数*/
  `isrecommend` int(1) DEFAULT '0',			/*推荐下载*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `status` int(1) DEFAULT '1',				/*显示状态*/
  `ctime` int DEFAULT '0',						/*添加时间*/
  `mtime` int DEFAULT '0'						/*修改时间*/
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 招骋中心 */
CREATE TABLE IF NOT EXISTS `rs_job` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,				/*分类id*/
  `title` varchar(255) DEFAULT '',
  `content` text,
  `keywords` varchar(200) DEFAULT '',
  `description` text,
  `num` int(11) DEFAULT 0,					/*招骋人数*/
  `depart` varchar(200) DEFAULT '',			/*招骋部门*/
  `post` varchar(200) DEFAULT '',				/*招骋岗位*/
  `addr` varchar(200) DEFAULT '',				/*工作地点*/
  `salary` varchar(200) DEFAULT '',			/*工资待遇*/
  `expirytime` int(11) DEFAULT 0,			/*有效期*/
  `clicknum` int(11) DEFAULT 0,				/*点击次数*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `status` int(1) DEFAULT '1',				/*状态默认1为显示，0为不显示*/
  `ctime` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 简历表 */
CREATE TABLE IF NOT EXISTS `rs_resume` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `jobid` int(11) NOT NULL DEFAULT '0',			/*招骋id*/
  `userid` int(11) DEFAULT '0',					/*用户id*/
  `post` varchar(200) DEFAULT '',				/*岗位名称*/
  `name` varchar(200) NOT NULL,					/*应骋人名称*/
  `sex` int(1) DEFAULT '1',						/*性别男为1女为0*/
  `birthday` varchar(200) DEFAULT '',			/*出生年月*/
  `birthplace` varchar(200) DEFAULT '',		/*籍贯*/
  `tel` varchar(200) DEFAULT '',				/*电话*/
  `code` varchar(200) DEFAULT '',				/*邮编*/
  `email` varchar(200) NOT NULL,					/*E-mai*/
  `salary` int(11) DEFAULT '0',					/*薪资要求*/
  `education` varchar(200) DEFAULT '',			/*学历*/
  `professional` varchar(200) DEFAULT '',		/*专业*/
  `school` varchar(200) DEFAULT '',			/*毕业学校*/
  `address` varchar(200) DEFAULT '',			/*联系地址*/
  `eduexp` text,									/*教育经历*/
  `trainexp` text,									/*培训经历*/
  `jobexp` text,									/*工作经历*/
  `selfeval` text,									/*自我评价*/
  `remark` text,									/*备注*/
  `readok` int(11) DEFAULT '0',					/*回复*/
  `ctime` int DEFAULT '0',							/*应骋时间*/
  `mtime` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 在线留言表 */
CREATE TABLE IF NOT EXISTS `rs_message` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) DEFAULT '',
  `content` text,
  `recontent` text,								/*留言回复*/
  `keywords` varchar(200) DEFAULT '',
  `description` text,
  `showindex` int(1) DEFAULT '1',
  `showsub` int(1) DEFAULT '1',
  `username` varchar(200) DEFAULT '',		/*留言人名称*/
  `tel` varchar(200) DEFAULT '',			/*电话*/
  `email` varchar(200) DEFAULT '',			/*邮箱*/
  `qq` varchar(200) DEFAULT '',			/*QQ*/
  `address` varchar(200) DEFAULT '',		/*地址*/
  `ip` varchar(200) DEFAULT '',			/*留言ip*/
  `clicknum` int(11) DEFAULT '0',				/*点击次数*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `status` int(11) DEFAULT '0',				/*状态*/
  `ctime` int DEFAULT '0',						/*留言时间*/
  `mtime` int DEFAULT '0'						/*回复时间*/
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 常见问题表 */
CREATE TABLE IF NOT EXISTS `rs_faq` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` int(11) NOT NULL,				/*分类id*/
  `title` varchar(255) DEFAULT '',
  `content` text,
  `keywords` varchar(200) DEFAULT '',
  `description` text,
  `showindex` int(1) DEFAULT '1',				/*首页显示*/
  `showsub` int(1) DEFAULT '1',				/*栏目页显示*/
  `author` varchar(100) DEFAULT '',			/*添加人*/
  `clicknum` int(11) DEFAULT '0',				/*点击次数*/
  `sortnum` int(11) DEFAULT '50',				/*排序*/
  `status` int(1) DEFAULT '1',				/*状态默认1为显示，0为不显示*/
  `ctime` int DEFAULT '0',
  `mtime` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


/* 数据块表 */
CREATE TABLE IF NOT EXISTS `rs_block` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `imgurl` varchar(200) DEFAULT '',
  `title` varchar(200) DEFAULT '',
  `content` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


/* 友情链接表 */
CREATE TABLE IF NOT EXISTS `rs_link`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,				/*链接地址*/
  `logo` varchar(200) DEFAULT '',			/*链接logo*/
  `linktype` int(2) DEFAULT '1',				/*链接类型*/
  `info` varchar(200) NOT NULL,				/*链接说明*/
  `status` int(11) DEFAULT '1',				/*链接状态*/
  `ctime` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 后台操作日志 */
CREATE TABLE IF NOT EXISTS `rs_log`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `Log_Num` int(11) NOT NULL,			/*日志编号*/
  `Log_name` varchar(200) NOT NULL,			/*操作人*/
  `Log_ip` varchar(200) DEFAULT '',		/*操作ip*/
  `Log_info` varchar(200) NOT NULL,			/*日志说明*/
  `ctime` int DEFAULT '0'						/*操作时间*/
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 以下是后期加的 */

/* 用户表 */
CREATE TABLE IF NOT EXISTS `rs_user`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(20) DEFAULT '',
  `password` varchar(32) DEFAULT '',
  `nickname` varchar(20) DEFAULT '',			/*真实姓名*/
  `sex` tinyint(1) DEFAULT '1',
  `tel` varchar(20) DEFAULT '',
  `email` varchar(200) DEFAULT '',
  `qq` varchar(20) DEFAULT '',
  `ip` varchar(50) DEFAULT '',					/*注册ip*/
  `remark` varchar(200) DEFAULT '',			/*备注*/
  `ctime` int DEFAULT '0'							/*注册时间*/
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* 用户表测试数据 */
INSERT INTO `rs_user`(name,password) VALUES('test',md5('test'));


/* 附件表 */
CREATE TABLE IF NOT EXISTS `rs_annex` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(20) DEFAULT '',			/* 名称 */
  `url` varchar(200) DEFAULT '',			/* 附件地址 */
  `filesize` int(11) DEFAULT '0',				/* 附件大小 */
  `category_id` int(11) NOT NULL,				/* 分类id */
  `con_id` int(11) NOT NULL					/* 内容id */
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


/* 在线客服 */
CREATE TABLE IF NOT EXISTS `rs_server`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) DEFAULT '',
  `qqnum` varchar(100) DEFAULT '',
  `taobao` varchar(300) DEFAULT '',
  `skype` varchar(100) DEFAULT '',
  `enable` int(1) DEFAULT '1',
  `sortnum` int(11) DEFAULT '3',
  `reserved1` varchar(200) DEFAULT '',
  `reserved2` varchar(200) DEFAULT '',
  `reserved3` text
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

/* 后台菜单 */
CREATE TABLE IF NOT EXISTS `rs_admintree` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL DEFAULT '',		/*分类名称*/		
  `title` varchar(100) NOT NULL DEFAULT '',		/*分类标题*/		
  `pid` INT NOT NULL DEFAULT 0,
  `path` VARCHAR(255) NOT NULL DEFAULT '0,',
  `menutype` int(1) DEFAULT '0',					/*栏目属性0一级，1二级*/
  `sysmenu` int(1) DEFAULT '0',					/*是否为系统目录1为系统目录*/
  `otherurl` varchar(200) DEFAULT '',				/*链接地址*/
  `menumodule` int(11) DEFAULT '0',				/*栏目模块*/
  `sortnum` int(11) DEFAULT '50'					/*排序*/
) ENGINE=MyISAM AUTO_INCREMENT=600 DEFAULT CHARSET=utf8;

/* 后台菜单初始数据 */
INSERT INTO rs_admintree  VALUES 
	(1,'基本设置','基本设置',0,'0,',0,1,'','',3),
	(2,'内容管理','内容管理',0,'0,',0,1,'','',5),
	(3,'风格模板','风格模板',0,'0,',0,1,'','',7),
	(4,'高级设置','高级设置',0,'0,',0,1,'','',9),
	(5,'管理工具','管理工具',0,'0,',0,1,'','',11),
	(11,'基本信息','基本信息',1,'0,1,',0,1,'','',50),
	(12,'栏目管理','栏目管理',1,'0,1,',0,1,'','',50),
	(13,'数据块配置','数据块配置',1,'0,1,',0,1,'','',50),
	(14,'友情链接','友情链接',1,'0,1,',0,1,'','',50),
	(15,'在线帮助','在线帮助',1,'0,1,',0,1,'','',50),
	(21,'关于我们','关于我们',2,'0,2,',0,1,'','',50),
	(22,'新闻中心','新闻中心',2,'0,2,',1,1,'','',50),
	(23,'产品中心','产品中心',2,'0,2,',1,1,'','',50),
	(24,'图片中心','图片中心',2,'0,2,',1,1,'','',50),
	(25,'下载中心','下载中心',2,'0,2,',1,1,'','',50),
	(26,'招骋中心','招骋中心',2,'0,2,',1,1,'','',50),
	(27,'在线留言','在线留言',2,'0,2,',1,1,'','',50),
	(28,'常见问题','常见问题',2,'0,2,',1,1,'','',50),
	(31,'风格管理','风格管理',3,'0,3,',0,1,'','',50),
	(32,'参数设置','参数设置',3,'0,3,',0,1,'','',50),
	(41,'邮箱参数','邮箱参数',4,'0,4,',0,1,'','',50),
	(42,'图片参数','图片参数',4,'0,4,',0,1,'','',50),
	(43,'简历参数','简历参数',4,'0,4,',0,1,'','',50),
	(51,'管理员管理','管理员管理',5,'0,5,',0,1,'','',50),
	(52,'数据库备份','数据库备份',5,'0,5,',0,1,'','',50),
	(53,'数据库恢复','数据库恢复',5,'0,5,',0,1,'','',50),
	(54,'整站备份','整站备份',5,'0,5,',0,1,'','',50),
	(221,'添加新闻','添加新闻',22,'0,2,22,',0,1,'','',50),
	(222,'管理新闻','管理新闻',22,'0,2,22,',0,1,'','',50),
	(231,'添加产品','添加产品',23,'0,2,23,',0,1,'','',50),
	(232,'管理产品','管理产品',23,'0,2,23,',0,1,'','',50),
	(241,'添加图片','添加图片',24,'0,2,24,',0,1,'','',50),
	(242,'管理图片','管理图片',24,'0,2,24,',0,1,'','',50),
	(251,'添加下载','添加下载',25,'0,2,25,',0,1,'','',50),
	(252,'管理下载','管理下载',25,'0,2,25,',0,1,'','',50),
	(261,'添加招骋','添加招骋',26,'0,2,26,',0,1,'','',50),
	(262,'管理招骋','管理招骋',26,'0,2,26,',0,1,'','',50),
	(271,'添加在线留言','添加在线留言',27,'0,2,27,',0,1,'','',50),
	(272,'管理在线留言','管理在线留言',27,'0,2,27,',0,1,'','',50),
	(281,'添加常见问题','添加常见问题',28,'0,2,28,',0,1,'','',50),
	(282,'管理常见问题','管理常见问题',28,'0,2,28,',0,1,'','',50);



/* 风格模板 */
CREATE TABLE IF NOT EXISTS `rs_skin`(
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) DEFAULT '',
  `folder` varchar(100) DEFAULT '',
  `info` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;