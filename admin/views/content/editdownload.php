<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xdcms--Powered by xdcms</title>
<link href="<?php echo template_url();?>/css/admin.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="<?php echo template_url();?>/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript">
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]');
	});
</script>
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
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;下载修改</span></td>
            <td width="40%" align="right"><a href="<?php echo site_url('down/showindex');?>">返回下载浏览</a></td>
          </tr>
        </table>
        <form name='myform' enctype="multipart/form-data" action="<?php echo site_url('down/downupdate');?>" method="post">
       
        <input type="text" value="<?php echo $list->id;?>" name="id" style="display:none" />
        
         <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
          <tr>
            <td width="10%" align="right">文件标题</td>
            <td width="90%"> <input name="title" type="text" size="50" maxlength="200" value="<?php echo $list->title;?>">*</font></td>
          </tr> 
          <tr> 
            <td align="right">所属栏目</td>
            <td>
              <div id="" style="float:left;">
                <select name="" onchange="ShowThirdMenuNav(this.value)">
                  <option value=0>二级栏目</option>  
                </select>
              </div>
              
             </td>
          </tr>
          <tr> 
            <td align="right">下载地址</td>
            <td>
                <div style='line-height: 25px;margin:0;width:300px;float:left;overflow: hidden;'><input name="fileurl" id="fileurl" type="text" value="<?php echo $list->fileurl;?>"  size="50" readonly></div>
              <div style='height: 25px;width:350px;float:left;overflow: hidden;'><iframe src="<?php echo site_url();?>/upload/index/fileurl/all" frameborder=0 scrolling=no width="350" height="25"></iframe></div><font color="#FF0000">最大上传为5M</font>
            </td>
          </tr> 

          </tr> 
          <tr > 
            <td align="right">下载大小</td>
            <td> <input id="filesizepath" name="filesize" type="text" size="10" maxlength="200"  value="<?php echo $list->filesize;?>"> K</td>
          </tr> 
<!---->       
          <tr> 
            <td align="right">内容关键词</td>
            <td><input name="keywords" type="text" size="50" maxlength="200"  value="<?php echo $list->keywords;?>" >用于搜索引擎优化，多个关键词请用用英文版逗号（“,”）隔开</td>
          </tr>
          <tr> 
            <td align="right">内容简短描述<br>用于搜索引擎优化</td>
            <td><textarea name="description" cols="60" rows="5"><?php echo $list->description;?></textarea></td>
          </tr>  
           <tr> 
            <td align="right">推荐下载</td>
            <td><input name="isrecommend" type="checkbox" value="<?php echo $list->isrecommend;?>" >选择将在推荐文件中显示（需要网站模板支持）</td>
          </tr> 
           <tr> 
            <td align="right">状态</td>
            <td>
              <input name="status" type="radio" value="<?php echo $list->status;?>" checked='checked'>发布
              <input name="status" type="radio" value="<?php echo $list->status;?>" >草稿
            </td>
          </tr>
          <tr> 
            <td align="right">显示方式</td>
            <td>
              <input type="checkbox" name="showindex" value="<?php echo $list->showindex;?>" checked='checked'/>显示首页&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="showsub" value="<?php echo $list->showsub;?>"  checked='checked'/>显示子页
            </td>
          </tr>
          <tr> 
            <td align="right">点击次数</td>
            <td><input name="clicknum" type="text"  size="10" maxlength="200" value="<?php echo $list->clicknum;?>"> <font color="#FF0000">*</font>（点击次数越多，热门信息中排名越靠前）</td>
          </tr>
          <tr> 
            <td align="right">发布时间</td>
            <td><input name="mtime" type="text"  size="20" maxlength="200" value="<?php echo date('Y-m-d H:i:s',time());?>"> <font color="#FF0000">*</font>注意不要改变格式，当前时间为<?php echo date('Y-m-d H:i:s');?></td>
          </tr>
          <tr> 
            <td align="right">更新时间</td>
            <td><input name="ctime" type="text"  size="20" maxlength="200" value="<?php echo date('Y-m-d H:i:s',time());?>"> <font color="#FF0000">*</font>注意不要改变格式，当前时间为<?php echo date('Y-m-d H:i:s');?></td>
          </tr>
          
          <tr>
            <td align="right">网页模板 </td>
            <td align="left">
            <select name="">
<!---->
     <option value="default" selected>default</option>
<!---->
     
<!---->
    </select>
    &nbsp;&nbsp;默认和系统设置保持一致&nbsp;&nbsp;<a href="">新模板添加</a></td>
          </tr>
          <tr>
            <td align="right">排序权值</td>
            <td align="left"><input type="text" name="sortnum" value="<?php echo $list->sortnum;?>" size="10" /> 
            &nbsp;&nbsp;权值越小，排序越靠前</td>
          </tr>
          <tr> 
            <td  align="right">详细内容</td>
            <td>
              <textarea name="content" style="width:700px;height:300px;"><?php echo $list->content;?></textarea><font color="#FF0000">*</font>&nbsp;&nbsp;

            </td>
          </tr>
           <tr> 
            
          </tr>
          
          
          <tr> 
            <td height="30" colspan="2" align="center" > 
              <input class="button" type="submit"  value="提 交" >&nbsp;&nbsp;&nbsp;&nbsp;  
              <input class="button" type="reset"  value="重 置" > 
            </td>
          </tr>
        </table>
      </form>
      <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
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