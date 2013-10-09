<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XD CMS Management System</title>
<link href="<?php echo template_url();?>/css/admin.css" rel="stylesheet" type="text/css" />
<script src="<?php echo template_url();?>/js/jquery.js"></script>
<script language="javascript">
  function fnOnTabClick(tab){
    //修改Tab样式
      $("#header_tabs > ul > li").removeClass("current");
      $(tab).parent().parent().addClass("current");
  }
  function changelang(){
    if('en' == $("#lang").val()){top.location.href='index.php?lang=en';}
    else top.location.href='index.php?lang=cn';
  }
</script>
</head>

<body>
<body style="overflow:hidden">
<div id="header">
  <div id="logo"> XDcms Management System</div>
  <div id="panel">

    <div id="header_tabs">
      <ul>
        <?php foreach($toplist as $k=>$v):?>
        <li <?php if($k==0){
          echo 'class = "current"';
        }?>>
          <span>
            <a href="<?php echo site_url()?>/welcome/left/<?php echo $v->id;?>" onclick="fnOnTabClick(this);" target="menu"><?php echo htmlspecialchars($v->name);?></a>
          </span>
        </li>
        <?php endforeach;?>
        <li>
          <span>
            <a href="<?php echo site_url()?>/welcome/lefttree" onclick="fnOnTabClick(this);" target="menu">后台设置</a>
          </span>
        </li>
      </ul>

      <div id="header_links">
        <p style="margin-right:20px;"><iframe style="margin:8px 0px 0px 0px;" src="<?php echo dirname(site_url());?>/views/ad/top.html" frameborder=0 scrolling=no width="600" height="20"></iframe></p>
        <p>您好，<strong><?php echo $username?></strong> &nbsp;&nbsp;[&nbsp;<a target="_parent" href="<?php echo site_url();?>/login/out">注 销</a>&nbsp;]</p>
        <p><a href="help.html" class="btnlink" target="_blank">在线帮助</a> </p>
      </div>
      <div id="header_lang">
        
      </div>
    </div>


  </div>
</div>
</body>
</html>