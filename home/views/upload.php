<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>下载中心 - 酷纬企业网站管理系统-企业网站系统-企业建站系统-企业网站程序-企业网站模板 - 酷纬信息--Powered by Kuwebs--Powered by kuwebs.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Robots" content="All">
<meta name="googlebot" content="All">
<meta name="keywords" content="Download">
<meta name="description" content="Download">
<meta name="author" content="酷维,www.kuwebs.com">
<meta name="Copyright" content="Copyright 2005-2010 Kuwebs">

<link href="" rel="shortcut icon">
<script type="text/javascript" src="<?php echo template_url();?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo template_url();?>/js/index.js"></script>
<link href="<?php echo template_url();?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo template_url();?>/css/style.css" rel="stylesheet" type="text/css">
<!--<script type="text/javascript" src="http://localhost/Kuwebs/upload/images/js/prototype.js"></script>-->


</head>
<body><div class="wrapper">
<div class="page">

<div class="headerContainer">
  <div class="header">
    <a href="<?php echo site_url();?>" class="logo"><img src="<?php echo base_url();?>uploads/logo.png" alt="兄弟企业网站管理系统" border="0"></a>
      <ul class="links">
        <li class="last"><a href="">English</a></li>
        <li class="last"><a href="">简体中文</a></li>
        <li><a href="" target="_self" title="加入收藏">加入收藏</a></li>
        <li class="first"><a href="" style="BEHAVIOR: url(#default#homepage)" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://localhost/Kuwebs/upload/');return(false);" title="设为首页">设为首页</a></li>
        <li class="first"><a href="">站点地图</a></li>
        <div class="divClear"></div>
      </ul>
    </div>
    <div class="divSearch">
      <form id="formSearch" action="http://localhost/Kuwebs/upload/search.php?lang=cn" method="post">
        <input name="searchmodelflag" value="all" style="display:none;" type="text">
        <input id="search" name="searchkeyword" class="inputText" type="text">
        <button type="submit" title="搜索" class="button">搜索</button>
      </form>
    </div>
    <div class="divClear"></div>
  </div>
  <div class="divClear"></div>
</div>
	
<div class="navContainer">
	<div class="nav">
  <div class="navbg">
   <?php include dirname(__FILE__) . '/inc/menu.php'; ?>
  </div>
  <div class="clear"></div>
  </div>
</div>


<div class="bannerContainer">
  <div class="banner" style="width:950px; height:220px; background:url() left top no-repeat">
    <embed type="application/x-shockwave-flash" wmode="transparent" src="" height="220" width="950">
  </div>
</div>



<div class="mainContainer col2-left-layout">
    <div class="col-left downloadListRight"> 
      <div class="commSideNav downloadListRightNav">
        <div class="commonSide nav5">
<div class="title nav5"><a href=""><span>下载中心</span></a></div>
<div class="content nav5"><ul class="content nav5"><li class="nav2"><a href="">公司软件</a></li><li class="nav2"><a href="">常用工具</a></li><div class="divClear"></div>
</ul><div class="divClear"></div></div>
</div>
        <div class="divBlock blockcn2">
<div class="title blocktcn2">联系我们</div>
<div class="content blockccn2"><p>
	<?php echo $v->content;?>
</div>
</div>      </div>
    </div>
    <div class="col-main downloadListMain">
      <h3 class="righttitle"><span class="more"><a href="">首 页</a>&gt;<a href="">下载中心</a></span><span class="titlename">下载中心</span></h3>
      <div class="rightcontent">
        <div class="commonText downloadListText">
		<?php foreach($list as $v):?>
        <div class="blockCon3">
            <div class="title">
                <span class="right"><a href="">查看详细</a>|<a href="<?php echo base_url();?>../uploads/<?php echo $v->fileurl;?>">立即下载</a></span><a href=""><?php echo $v->title;?></a>
            </div>
            <div class="content">
                <p>文件大小: <?php echo $v->filesize;?>KB&nbsp;&nbsp;</p>
                <p>下载次数: &nbsp;&nbsp;</p>
                <p>更新时间: <?php echo $v->ctime;?>&nbsp;&nbsp;</p>
                <p></p>
                <div class="clear"></div>
            </div>
        </div>
		<?php endforeach;?>
        
        </div>   
        <div class="commonPaging downloadListPaging">
           <?php echo $this->pagination->create_links();?>
        </div>
      </div>
    </div>
    <div class="divClear"></div>
</div>

<div class="footerContainer">
  <div class="footer">
    <ul class="footerNav">
      <li class="mainMenu nav8"><a href=""><span>公司简介</span></a></li>
<li class="mainMenu nav2"><a href=""><span>新闻中心</span></a></li>
<li class="mainMenu nav3"><a href=""><span>产品中心</span></a></li>
<li class="mainMenu nav4"><a href=""><span>图片中心</span></a></li>
<li class="mainMenu nav5"><a href=""><span>下载中心</span></a></li>
<li class="mainMenu nav6"><a href=""><span>招聘中心</span></a></li>
<li class="mainMenu nav7"><a href=""><span>在线留言</span></a></li>
<li class="mainMenu nav9"><a href=""><span>联系我们</span></a></li>
      <li><a href=""><span>站内搜索</span></a></li>
      <li><a href=""><span>站点地图</span></a></li>
    </ul>

    <ul class="footerInfo">
    	<li>©版权所有 2003-2011 Kuwebs 粤ICP备 82122530号 在线帮助:<a href="">http://docs.kuwebs.com</a></li>
      <li><span style="float:left"><a href="">Powered by Kuwebs V3.0</a></span>电话：0755-36943966 E-mail：<a href="">info@kuwebs.com</a>联系地址：深圳市福田区上梅林梅华路105号多丽工业区福田国际电子商务产业园2栋502</li>
    </ul>

  </div>
</div>


</div><!-- page -->
</div><!-- wrapper -->



</body></html>