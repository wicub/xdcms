<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>在线留言 - 酷纬企业网站管理系统-企业网站系统-企业建站系统-企业网站程序-企业网站模板 - 酷纬信息--Powered by Kuwebs--Powered by kuwebs.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Robots" content="All">
<meta name="googlebot" content="All">
<meta name="keywords" content="企业网站系统,企业网站程序,企业网站模板,企业网站建设,企业网站源码,企业网站优化,企业网站推广">
<meta name="description" content="xdcms企业网站系统是一个赠送企业网站模板的营销型免费企业网站管理平台，PHP+MYSQL后台，DIV+CSS前台架构，内置SEO，操作简洁，是非常一款非常实用的快速企业建站系统。">
<meta name="author" content="酷维">
<meta name="Copyright" content="Copyright 2005-2010 Kuwebs">

<link href="" rel="shortcut icon">
<script type="text/javascript" src="<?php echo template_url();?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	var myurl="<?php echo site_url('message/myajax');?>"
</script>
<script type="text/javascript" src="<?php echo template_url();?>/js/index.js"></script>

<link href="<?php echo template_url();?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo template_url();?>/css/style.css" rel="stylesheet" type="text/css">




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
  <div class="banner" style="width:950px; height:220px;">
    <img src="./images/professional.jpg" alt=""  height="220" width="950"/>
  </div>
</div>



<div class="mainContainer col2-left-layout">
    <div class="col-left messageListRight"> 
      <div class="commSideNav messageListRightNav">
                <div class="divBlock blockcn2">
<div class="title blocktcn2">联系我们</div>
<div class="content blockccn2"><p>
	<span style="font-size: small;"><span style="font-family: Arial;">电话: 021-0000000<br>
	Email: <a href="">it6780@163.com</a><br>
	QQ: <a href="" target="_blank"><img alt="" src="<?php echo template_url();?>/images/pa_002.gif" title="点击这里给我发消息" border="0"></a>&nbsp;<a target="_blank" href=""><img src="<?php echo template_url();?>/images/pa.gif" alt="企业网站管理系统" title="企业网站管理系统" border="0"></a><br>
	地址：</span></span>上海市  上海市</p>
</div>
</div>      </div>
    </div>
    <div class="col-main messageListMain">
      <h3 class="righttitle"><span class="more"><a href="">首 页</a>&gt;<a href="">在线留言</a><a href="">发表留言</a></span><span class="titlename">在线留言</span></h3>
      <div class="rightcontent">
	      <div class="commonText messageListText">
          
		  <?php foreach($results as $v):?>
		  
		  <dl class="blockCon6">
            <dt>
                <span class="right"><a href="">查看详细</a></span><a href=""><?php echo $v->title;?></a>
                  <p>留言者：<?php echo $v->username;?>&nbsp;&nbsp; 留言类别：在线留言&nbsp;&nbsp;留言时间：<?php echo date('Y-m-d H:i:s',$v->ctime + 8*60*60);?>&nbsp;&nbsp;</p>
              </dt>
              <dd>
                <p class="answer"><?php echo $v->content;?></p>
                  <p class="reply"><?php echo $v->recontent;?></p>
              </dd>
          </dl>
		  <?php endforeach;?>

          
          
         
			
          </div>   
		 
          <div class="commonPaging messageListPaging">
                <?php echo $page?>      <div class="divClear"></div>
          </div>
		  <hr>
		  <div class="commonText commonTableOutsideDiv">
          <form  name="myform"  method='post' onsubmit="return messageadd()">
            <input name="ip" style="display:none" type="text" value='<?php echo $_SERVER["REMOTE_ADDR"];?>'>
            <table id="message" border="0" cellspacing="0">
                        <tbody><tr>
              <td class="commonTableCaption"><font color="red">*</font>标题</td>
              <td><input class="commonTableInputText" name="title" id="title" type="text"></td>
            </tr>
            <tr>
              <td class="commonTableCaption"><font color="red">*</font>姓名</td>
              <td><input class="commonTableInputText" name="username" id="username" type="text"></td>
            </tr>
            <tr>
              <td class="commonTableCaption">联系电话</td>
              <td><input class="commonTableInputText" name="tel" id="tel" type="text"></td>
            </tr>
            <tr>
              <td class="commonTableCaption"><font color="red">*</font>电子邮件</td>
              <td><input class="commonTableInputText" name="email" id="email" type="text"></td>
            </tr>
            <tr>
              <td class="commonTableCaption">QQ</td>
              <td><input class="commonTableInputText" name="qq" id="qq" type="text"></td>
            </tr>
            <tr>
              <td class="commonTableCaption"><font color="red">*</font>留言内容 </td>
              <td><textarea name="content" id="content" class="commonTableInputTextarea" cols="40" rows="5"></textarea></td>
            </tr>
            <tr>
              <td colspan="2" align="center">                        
                <input name="Submit" value="提交" class="commonTableInputBottom" type="submit">
                <input name="Submit" value="重置" class="commonTableInputBottom" type="reset">
              </td>
            </tr>
            </tbody></table>
          </form>
        </div>   
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
<!-- wrapper -->
<!-- JiaThis Button BEGIN -->
<!-- JiaThis Button END -->

</body></html>