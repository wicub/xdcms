<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xdcms--Powered by xdcms</title>
<link href="<?php echo template_url();?>/css/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo template_url();?>/css/page.css" rel="stylesheet" type="text/css">

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
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;图片浏览</span></td>
            <td width="40%" align="right"><a href="<?php echo site_url('pic/addpic');?>">图片添加</a></td>
          </tr>
        </table>
        
        <form name='myform' action="" method="post">
          <input type="text" name="menuid" value="4" style="display:none" />
          <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
            <tr >
              
              <td width="5%" align="center">ID</td>
              <td width="25%" align="center">图片标题</td>
              <td width="15%" align="center">图片浏览</td>
              <td width="10%" align="center" >二级栏目</td>
              <td width="10%" align="center" >状态</td>
              <td width="10%" align="center" >更新日期</td>
              <td width="10%"align="center" >操作</td>
            </tr>
<!---->		<?php foreach($list as $v):?>
            <tr>
              
              <td align="center"><?php echo $v->id;?></td>
              <td align="center"><?php echo $v->title;?></td>
              <td align="center"><img src="<?php echo base_url();?>../uploads/<?php echo $v->imgurl;?>" style="width:200px;height:100px;" /></td>
              <td align="center"></td>
              <td align="center" ><?php echo $v->status==1?'发布':'草稿';?></td>
              <td align="center" ><?php echo $v->ctime;?></td>
              <td align="center" >
                <a href="<?php echo site_url("pic/edit/{$v->id}");?>">编辑</a>
                <a href="<?php echo site_url("pic/delete/{$v->id}"); ?>" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a>
              </td>
            </tr>
			<?php endforeach;?>
<!---->
            
<!---->
            
            <tr>
              <td colspan="9" align="center">
				<?php echo $this->pagination->create_links();?>
			  </td>
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