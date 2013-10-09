<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加栏目</title>
<link href="<?php echo base_url();?>views/css/admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="<?php echo template_url();?>/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo template_url();?>/js/msg.js"></script>
</head>

<body>

<table width="100%" border="0" background="#EEEEEE">
  <tr>
    <td colspan="3" height="10">&nbsp;</td>
  </tr>
  <tr>
    <td width="1%"></td>
    <td width="98%"> 
      <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
        <tr height="30" style="padding:3px 10px;">
          <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;添加栏目</span></td>
          <td width="40%" align="right"><a href="<?php echo site_url();?>/admintree/index">返回栏目管理</a>&nbsp;&nbsp;</td>
        </tr>
      </table>
<?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
<form name='formSort' enctype="multipart/form-data" action="" method="post">
    <input type="hidden" name="pid" value="<?php echo $pid?>" />
    <input type="hidden" name="path" value="<?php echo $path?>" />
    <table width="100%" bgcolor="#FFFFFF" class="tableList" cellpadding="1" cellspacing="1">
        <tr>
            <td width="30%" align="right">上级栏目名称</td>
            <td width="70%" align="left"><input type="text" name="athername" value="<?php echo $name?>" size="40" readonly="readonly" disabled="disabled"/></td>
        </tr>
        <tr>
            <td align="right">栏目名称</td>
            <td align="left"><input type="text" name="name" value="" size="40" /> <span style="color:#FF0000">*</span></td>
        </tr>
        <tr>
            <td align="right">栏目标题</td>
            <td align="left"><input type="text" name="title" value="" size="40" /></td>
            </tr>
            <tr>

            <td align="right">链接地址</td>
            <td align="left"><input type="text" name="otherurl" value="" size="40" /> <span style="color:#FF0000">*(外链请加http://)</span></td>
        </tr>
        <tr>
            <td align="right">同级目录排序</td>
            <td align="left">
              <input type="text" name="sortnum" value="50" size="10" />数字越小，排序越靠前
            </td>
        </tr>
        <?php if($count==2){?>
        <tr>
            <td align="right">栏目属性</td>
            <td align="left">
              <input name="menutype" type="radio" value="0" checked="checked">无下级
              &nbsp;
              <input name="menutype" type="radio" value="1" >有下级 <span style="color:#FF0000">（仅对二级分类有效）</span>
            </td>
        </tr>
        <?php }?>
        <tr>
            <td colspan="2" align="center" valign="middle">
              <input type="submit" value="确 定" class="button" onclick="return checkMenu()" />
              <input type="reset" value="重 置" class="button" />
            </td>
        </tr>
    </table>
</form>

  <?php include dirname(__FILE__) . '/../inc/footer.php'; ?>

</td>
    <td width="1%"></td>
  </tr>
<tr><td colspan="3" height="10">&nbsp;</td></tr>
</table>
</body>
</html>

