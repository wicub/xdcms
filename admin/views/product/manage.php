<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0096)http://localhost/Kuwebs/upload/bdmin/index.php?lang=cn&path=product&menu=product_action&menuid=3 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>酷纬信息--Powered by Kuwebs</title>
<link href="<?php echo template_url() ;?>/css/admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="<?php echo template_url()?>/js/common.js"></script>
</head>

<body>
  <table width="100%" border="0" background="index.php">
    <tbody><tr>
      <td colspan="3" height="10">&nbsp;</td>
    </tr>
    <tr>
      <td width="1%"></td>
      <td width="98%"> 
        <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
          <tbody><tr height="30" style="padding:3px 10px;">
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;产品浏览</span></td>
            <td width="40%" align="right"><a href="">产品添加</a></td>
          </tr>
        </tbody></table>
        <form action="" method="post">
          <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
            <tbody><tr height="30" style="padding:3px 10px;">
              <td width="100%" align="left" height="20">
                <span style="font-size:12px; font-weight:bold">
<!---->
<a href="">家用电器</a>&nbsp;&nbsp;&nbsp;&nbsp;            
<!---->
<a href="">电脑网络</a>&nbsp;&nbsp;&nbsp;&nbsp;            
<!---->
                </span>
              </td>
            </tr>
			
          </tbody></table>
        </form>
        <form name="myform" action="" method="post">
          <input type="text" name="menuid" value="3" style="display:none">
          <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
            <tbody><tr>
              <td width="5%" align="center">选中</td>
              <td width="5%" align="center">ID</td>
              <td width="25%" align="center">产品标题</td>
              <td width="15%" align="center">产品浏览</td>
              <td width="10%" align="center">二级栏目</td>
              <td width="10%" align="center">三级栏目</td>
              <td width="10%" align="center">状态</td>
              <td width="10%" align="center">更新日期</td>
              <td width="10%" align="center">操作</td>
            </tr>
<!---->		<?php foreach($result as $v):?>
            <tr>
              <td align="center"><input type="checkbox" name="id[]" value="<?php echo $v->id?>"></td>
              <td align="center"><?php echo $v->id?></td>
              <td align="center"><?php echo $v->title?></td>
              <td align="center"><a href="" target="_blank"><img src="<?php echo $v->imgurlpre?>" border="0" width="100"></a></td>
              <td align="center">电脑网络</td>
              <td align="center"></td>
              <td align="center">             发布              </td>
              <td align="center"><?php echo date('Y-m-d H:i:s',$v->ctime)?></td>
              <td align="center">
                <a href="">编辑</a>
                <a href="" onclick="return confirm(&#39;警告！数据删除，无法恢复，你确定要删除吗？&#39;)">删除</a>
              </td>
            </tr>
			<?php endforeach;?>
<!---->		
            
<!---->
            <tr> 
              <td height="20" align="left" colspan="9">
                <input type="text" name="menuid" value="3" style="display:none">
                <input name="selectAllCheckBox" type="checkbox" onclick="checkCheckBoxAll(this.form)">
                选中本页显示的所有产品 
                <input name="submit" type="submit" value="删除选定的条目" onclick="return confirm(&#39;警告！数据删除，无法恢复，你确定要删除吗？&#39;)"> 
              </td>
            </tr>
            <tr>
              <td colspan="9" align="center"><a href=""><span>第一页</span></a><a href=""><span>上一页</span></a>   <font color="red">〖1〗</font>    <a href=""><span>下一页</span></a> <a href=""><span>最后一页</span></a>              </td>
            </tr>
          </tbody></table>
        </form>    <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
      <tbody><tr height="40" style="padding:3px 10px;">
        <td align="center" valign="middle">
          <font style="color:#9DACAF">
              酷纬信息--Powered by Kuwebs          </font>
        </td>
      </tr>
    </tbody></table>

  
  </td>
      <td width="1%"></td>
    </tr>
  <tr><td colspan="3" height="10">&nbsp;</td></tr>
  </tbody></table>



<!----></body></html>