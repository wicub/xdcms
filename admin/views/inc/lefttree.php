<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo template_url();?>/css/admin.css">
<script src="<?php echo template_url();?>/js/jquery.js"></script>
<script language="javascript">
function fnOnMenuClick(menu)
{
    $("#menus > dl > dt").removeClass("current");
    $("#menus > dl > dd").css("display","none");
    $(menu).parent().addClass("current");
    $(menu).parent().next("dd").css("display","block");
}
</script>
</head>
<body style="overflow:hidden">
  <?php var_dump($leftlist)?>
  <div id="sidebar">
    <div id="menus">
      <dl>
         <dt><a onclick='fnOnMenuClick(this);' target='main' href='<?php echo site_url();?>/admintree/index'>后台分类树</a></dt>
      </dl>
    </dd>
    <div id="copyright">
    <p>Powered by <a href="" target="_blank">xdcms.com</a></p>
    <p>&copy; 2011, <a href="" target="_blank">xdcms Inc.</a></p>
  </div>
  </div>
</body>
</html>