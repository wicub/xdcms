<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title><?php echo $conf->webname?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Robots" content="All">
<meta name="googlebot" content="All">
<meta name="keywords" content="兄弟CMS">
<meta name="description" content="兄弟CMS">
<meta name="author" content="">

<link href="" rel="shortcut icon">
<script type="text/javascript" src="<?php echo template_url();?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo template_url();?>/js/index.js"></script>
<link href="<?php echo template_url();?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo template_url();?>/css/style.css" rel="stylesheet" type="text/css">

<!--<script type="text/javascript" src="http://localhost/Kuwebs/upload/./images/js/prototype.js"></script>-->

</head>
<body><div class="wrapper">
<div class="page">

<div class="headerContainer">
  <div class="header">
    <a href="<?php echo site_url();?>" title="<?php echo $conf->webname?>" class="logo"><img src="<?php echo base_url();?>uploads/logo.png" alt="兄弟企业网站管理系统" border="0"></a>
    <div class="headerShortcuts">
      <ul class="links">
        <li><a href="Javascript:window.external.addFavorite(document.location.href,document.title)" >加入收藏</a></li>
        <li class="first"><a href=""  onClick="this.style.behavior='url(#default#homepage)';this.setHomePage(document.location.host);event.returnValue=false;" title="设为首页">设为首页</a></li>
        <div class="divClear"></div>
      </ul>
    </div>
    <div class="divSearch">
      <form id="formSearch" action="" method="post">
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
  
  
<?php include dirname(__FILE__) . '/menu.php'; ?>
  </div>
  <div class="clear"></div>
  </div>
</div>
<div class="bannerContainer">
<div class="banner">
<div id="banner_1_1">
  <div id="bannerContent" ><img src="<?php echo base_url();?>uploads/banner.jpg" alt=""  height="220" width="950"/></div>


</div>
</div>
</div>