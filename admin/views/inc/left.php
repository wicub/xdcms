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
        <?php
          
          foreach ($leftlist as $v){
            $aname=htmlspecialchars($v->name);
            if(strncasecmp($v->otherurl,'http://',7)){
              $url=site_url().'/';
            }else{
              $url='';
            }
            if($v->menutype==0){
              echo "<dt><a onclick='fnOnMenuClick(this);' target='main' href='{$url}$v->otherurl'>$aname</a></dt>";
            }else{
              echo "<dt><a onclick='fnOnMenuClick(this);' href='javascript:;'>$aname</a></dt>";
              echo "<dd style='display:none' class='submenu'>";
              foreach ($alllist as $a){
                if(strncasecmp($a->otherurl,'http://',7)){
                    $url=site_url().'/';
                  }else{
                    $url='';
                  }
                if($a->pid==$v->id){
                  $bname=htmlspecialchars($a->name);
                  echo  "<p><a target='main' href='{$url}$a->otherurl'>$bname</a></p>";
                }
                continue;
              }
              echo "</dd>";
            }
          }
        ?>

      </dl>
    </dd>
    <div id="copyright">
    <p>Powered by <a href="" target="_blank">xdcms.com</a></p>
    <p>&copy; 2011, <a href="" target="_blank">xdcms Inc.</a></p>
  </div>
  </div>
</body>
</html>