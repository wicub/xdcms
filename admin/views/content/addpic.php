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
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;图片添加</span></td>
            <td width="40%" align="right"><a href="<?php echo site_url('pic/showindex');?>">返回图片浏览</a></td>
          </tr>
        </table>
        <form name='myform' enctype="multipart/form-data" action="<?php echo site_url('pic/picform');?>" onclick="save();" method="post">
		
         
        
        <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
<!---------------------------------------------------------------------------------------------------------------------->	
          <tr id="imgurlid"> 
            <td align="right" height="20">图片名称<br></td>
            <td height="20"> 
            <input id="imgurlpath" name="imgurl" type="text"  size="45" maxlength="200" readonly="readonly" value=""><font color="#FF0000">*</font> 
			
			  <iframe src="<?php echo site_url('picupload/index');?>" border="0" frameborder="no" scrolling="no" style="padding:0px;margin:0px;" width="300" height="35"></iframe>
            </td>
		 </tr>

          <tr id="imgurls" height="20"> 
            <td align="right">图片预览</td>
            <td>
              <img id="imgurlprebrowse"name="" src="" border="0" style="width:300px;height:150px;margin:10px 10px;"/>
			 
            </td>
          </tr>
<!---------------------------------------------------------------------------------------------------------------------->		
           <tr> 
            <td width="10%" align="right">图片标题</td>
            <td width="90%"> <input name="title" type="text" size="50" maxlength="200">&nbsp;<font color="#FF0000">*</font>长度最大值为100字符</td>
          </tr> 
          <tr> 
            <td align="right">所属栏目</td>
            <td>
              <div id="secondMenuNavDiv" style="float:left;">
                <select name="" size="1" onchange="ShowThirdMenuNav(this.value)">
                  <option value="" selected="selected">二级栏目</option>
<!--              -->

<!---->

<!---->
                </select>
              </div>
              <div id="thirdMenuNavDiv" style="float:left; display:none;">
              </div>
             </td>
          </tr>
<!---->  
           <tr> 
            <td align="right">内容关键词</td>
            <td><input name="keywords" type="text" size="50" maxlength="200">用于搜索引擎优化，多个关键词请用用英文版逗号（“,”）隔开</td>
          </tr>
          <tr> 
            <td>内容简短描述<br>用于搜索引擎优化</td>
            <td><textarea name="description" cols="60" rows="5"></textarea></td>
          </tr> 
          <tr> 
            <td align="right">推荐图片</td>
            <td><input name="isrecommend" type="checkbox" value="1">选择将在推荐图片中显示（需要网站模板支持）</td>
          </tr> 
      
          <tr> 
            <td align="right">状态</td>
            <td>
              <input name="status" type="radio" value="1" checked="checked">发布
              <input name="status" type="radio" value="2">草稿
            </td>
          </tr>
          <tr> 
            <td align="right">显示方式</td>
            <td>
              <input type="checkbox" name="showindex" value="1" checked="checked"/>显示首页&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="showsub" value="1" checked="checked"/>显示子页
            </td>
          </tr>
          <tr> 
            <td align="right">点击次数</td>
            <td><input name="clicknum" type="text"  size="10" maxlength="200" value="0"> <font color="#FF0000">*</font>（点击次数越多，热门信息中排名越靠前）</td>
          </tr>
          <tr> 
            <td align="right">发布时间</td>
            <td><input name="mtime" type="text"  size="20" maxlength="200" value="<?php echo date('Y-m-d H:i:s');?>"> <font color="#FF0000">*</font>注意不要改变格式，当前时间为<?php echo date('Y-m-d H:i:s');?></td>
          </tr>
          <tr> 
            <td align="right">更新时间</td>
            <td><input name="ctime" type="text"  size="20" maxlength="200" value="<?php echo date('Y-m-d H:i:s');?>"> <font color="#FF0000">*</font>注意不要改变格式，当前时间为<?php echo date('Y-m-d H:i:s');?></td>
          </tr>
          
          <tr>
            <td align="right">网页模板 </td>
            <td align="left">
            <select name="">
<!---->
     <option value="default" selected>default</option>

    </select>
    
          </tr>
          <tr>
            <td align="right">排序权值</td>
            <td align="left"><input type="text" name="sortnum" value="50" size="10" /> 
            &nbsp;&nbsp;权值越小，排序越靠前</td>
          </tr>
          <tr> 
            <td  align="right">详细内容</td>
            <td>
              <textarea name="content" style="width:700px;height:300px;"></textarea><font color="#FF0000">*</font>&nbsp;&nbsp;

            </td>
          </tr>           
          <tr> 
           
          </tr>
          
          
          
          
          
          <tr> 
            <td height="30"  align="center" colspan="2" > 
              <input class="button" type="submit" value="提 交" >&nbsp;&nbsp;&nbsp;&nbsp;  
              <input class="button" type="reset" value="重 置" > 
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