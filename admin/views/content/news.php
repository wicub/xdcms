<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xdcms--Powered by xdcms</title>
<link href="<?php echo template_url();?>/css/admin.css" rel="stylesheet" type="text/css">

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
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;新闻浏览</span></td>
            <td width="40%" align="right"><a href="<?php echo site_url('news/addnews');?>">新闻添加</a></td>
          </tr>
        </table>
          <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
            <tr height="30" style="padding:3px 10px;">
              <td width="100%" align="left" height="20">
                <span style="font-size:12px; font-weight:bold">

                </span>
              </td>
            </tr>
          </table>
        <form name='myform' action="" method="post">
          <input type="text" name="menuid" value="2" style="display:none" />
          <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
            <tr >
              
              <td width="5%" align="center">ID</td>
              <td width="40%" align="center">新闻标题</td>
              <td width="10%" align="center" >二级栏目</td>
              <td width="10%" align="center" >状态</td>
              <td width="10%" align="center" >更新日期</td>
              <td width="10%"align="center" >操作</td>
            </tr>
<!---->
           <?php foreach($list as $v):?> 
			<tr>
              <td align="center"><?php echo $v->id;?></td>
              <td align="center"><?php echo $v->title;?></td>
              <td align="center"></td>
              <td align="center" ><?php echo $v->status==0?'发布':'草稿';?></td>
              <td align="center" ><?php echo $v->mtime;?></td>
              <td align="center" >
                <a href='<?php echo site_url("news/edit/{$v->id}");?>'>编辑</a>
                <a href="<?php echo site_url("news/newsdel/{$v->id}");?>" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a>
              </td>
           </tr>
		   <?php endforeach;?>
<!---->
            
<!---->
            <tr> 
              <td height="20" align="left" colspan="8">
                
                
              </td>
            </tr>
            <tr>
              <?php echo $this->pagination->create_links();?>
            </tr>
          </table>
        </form>    <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
      <tr height="40" style="padding:3px 10px;">
        <td align="center" valign="middle">
          <font style="color:#9DACAF">
              xdcms--Powered by xdcms          </font>
        </td>
      </tr>
    </table>

  
  </td>
      <td width="1%"></td>
    </tr>
  <tr><td colspan="3" height="10">&nbsp;</td></tr>
  </table>
</body>
</html>