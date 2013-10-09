<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>产品中心 - 酷纬企业网站管理系统-企业网站系统-企业建站系统-企业网站程序-企业网站模板 - 酷纬信息--Powered by Kuwebs--Powered by kuwebs.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Robots" content="All">
<meta name="googlebot" content="All">
<meta name="keywords" content="model">
<meta name="description" content="model">
<meta name="author" content="酷维,www.kuwebs.com">
<meta name="Copyright" content="Copyright 2005-2010 Kuwebs">

<link href="" rel="shortcut icon">
<script type="text/javascript" src="<?php echo template_url();?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo template_url();?>/js/index.js"></script>
<script type="text/javascript" src="<?php echo template_url();?>/js/jquery.paginate.js"></script>
<script type="text/javascript">
	
	$(function(){ 
	
	$(".productListText").load("<?php echo site_url('product/myajax/0');?>");
   
    $(".ProductListPaging").paginate({ 
        count         : <?php echo $page_max?>, 
        start         : 1, 
        display     : <?php echo $num?>, 
        border                    : true, 
        border_color            : '#BEF8B8', 
        text_color              : '#79B5E3', 
        background_color        : '#E3F2E1',     
        border_hover_color        : '#68BA64', 
        text_hover_color          : '#2573AF', 
        background_hover_color    : '#CAE6C6',  
        images                    : false, 
        mouse                    : 'press', 
        onChange                 : function(page){
                                    
                                    $(".productListText").load("<?php echo site_url('product/myajax');?>"+'/' +page );
                                 } 
    }); 
}); 
</script>
<!--
<script type="text/javascript" src="<?//php echo base_url() . URL_TEMPLATE;?>/js/product.js"></script>
-->
<link href="<?php echo template_url();?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo template_url();?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo template_url();?>/css/page.css" rel="stylesheet" type="text/css">



<!--<script type="text/javascript" src="http://localhost/Kuwebs/upload/images/js/prototype.js"></script>-->



</head>
<body><div class="wrapper">
<div class="page">

<div class="headerContainer">
  <div class="header">
    <a href="<?php echo site_url();?>" class="logo"><img src="<?php echo base_url();?>uploads/logo.png" alt="兄弟企业网站管理系统" border="0"></a>
    <div class="headerShortcuts">
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
  <?php include dirname(dirname(__FILE__)) . '/inc/menu.php'; ?>
  </div>
  <div class="clear"></div>
  </div>
</div>

<div class="bannerContainer">
  <div class="banner" style="width:950px; height:220px; background:url() left top no-repeat">
    <embed type="application/x-shockwave-flash" wmode="transparent" src="<?php echo base_url()?>/template/images/1316188911.swf" height="220" width="950">
  </div>
</div>



<div class="mainContainer col2-left-layout">
    <div class="col-left aboutListRight"> 
      <div class="commSideNav productListRightNav">
        <div class="commonSide nav3">
<div class="title nav3"><a href=""><span>产品中心</span></a></div>
<div class="content nav3"><ul class="content nav3"><li class="nav2"><a href="">电脑网络</a></li><li class="nav2"><a href="">家用电器</a></li><div class="divClear"></div>
</ul><div class="divClear"></div></div>
</div>
        <div class="divBlock blockcn2">
<div class="title blocktcn2">联系我们</div>
<div class="content blockccn2"><p>
	<span style="font-size: small;"><span style="font-family: Arial;">电话: 0755-36943966 13627483319<br>
	Email: <a href="">info@kuwebs.com</a><br>
	QQ: <a href="" target="_blank"><img alt="点击这里给我发消息" src="<?php echo base_url()?>/template/images/pa_002.gif" title="点击这里给我发消息" border="0"></a>&nbsp;<a target="_blank" href=""><img src="./images/pa.gif" alt="Kuwebs企业网站管理系统" title="Kuwebs企业网站管理系统" border="0"></a><br>
	地址：</span></span>深圳市福田区上梅林梅华路105号多丽工业区福田国际电子商务产业园2栋502</p>
</div>
</div>      </div>
    </div>
    <div class="col-main productListMain">
      <h3 class="righttitle"><span class="more"><a href="">首 页</a>&gt;<a href="">产品中心</a></span><span class="titlename">产品中心</span></h3>
      <div class="rightcontent">
        <div class="productListText">
		    
		  
        </div>   
        <div class='clear'></div>
        <div class="ProductListPaging">
      
		</div>
      </div>
    </div>
			<!--
		  
                   
                    <dl class="blockCon1">
              <dt>
                  <a href=""><img src="<?//php echo base_url()?>/upload/1315711436.jpg" width="180"></a>
              </dt>
              <dd>
                  <span class="title"><a href="">戴尔（DELL）Inspiron14V 14英寸笔记</a></span>
              </dd>
          </dl>
                    <dl class="blockCon1">
              <dt>
                  <a href=""><img src="<?//php echo base_url()?>/upload/1315711696.jpg" width="180"></a>
              </dt>
              <dd>
                  <span class="title"><a href="">飞利浦专用接口音箱</a></span>
              </dd>
          </dl>
                    <dl class="blockCon1">
              <dt>
                  <a href=""><img src="<?//php echo base_url()?>/upload/1315711665.jpg" width="180"></a>
              </dt>
              <dd>
                  <span class="title"><a href="">万和嵌入式燃气灶</a></span>
              </dd>
          </dl>
                    <dl class="blockCon1">
              <dt>
                  <a href=""><img src="<?//php echo base_url()?>/upload/1315710207.jpg" width="180"></a>
              </dt>
              <dd>
                  <span class="title"><a href="">康佳全高清LED电视</a></span>
              </dd>
          </dl>
			-->
                    
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
<!-- JiaThis Button BEGIN -->
<!-- JiaThis Button END -->


</body></html>