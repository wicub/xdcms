<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0093)http://localhost/Kuwebs/upload/bdmin/index.php?lang=cn&path=product&menu=product_add&menuid=3 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>酷纬信息--Powered by Kuwebs</title>
<link href="<?php  echo template_url() ;?>/css/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo template_url() ;?>/css/uploadify.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	var up_swf="<?php echo template_url() ;?>/js/uploadify.swf";
	var up_loadify="<?php echo site_url('product/uploadify');?>";
	
</script>
<script src="<?php echo template_url() ;?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo template_url() ;?>/js/jquery.uploadify.min.js"></script>
<script src="<?php echo template_url() ;?>/js/product.js"></script>
<script charset="utf-8" src="<?php echo template_url() ;?>/kindeditor/kindeditor.js"></script>

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
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;产品添加</span></td>
            <td width="40%" align="right"><a href=" ">返回产品浏览</a></td>
          </tr>
        </tbody></table>
        <form name="myform" enctype="multipart/form-data" action="<?php echo site_url('product/insert')?>" method="post">
       <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
          <tbody><tr> 
            <td width="10%" align="right">产品标题</td>
            <td width="90%"> <input name="title" type="text" size="50" maxlength="200"><font color="#FF0000">*</font>长度最大值为100字符</td>
          </tr> 
          <tr> 
            <td align="right">所属栏目</td>
            <td>
              <div id="secondMenuNavDiv" style="float:left;">
                <select name="category_id" size="1" >
                  <option value="0" selected="selected">二级栏目</option>
<!--              -->
<option value="1">家用电器</option>
<!---->
<option value="2">电脑网络</option>
<!---->
                </select>
              </div>
              <div id="thirdMenuNavDiv" style="float:left; display:none;">
              </div>
             </td>
          </tr>
          <tr id="imgurl"> 
            <td align="right" height="20">图片地址<br>自动生成缩略图</td>
            <td height="20"> 
              <input  class="upimgurl" name="imgurl" type="text" size="45" maxlength="200" readonly="readonly"><font color="#FF0000">*</font> 
              <input id="file_upload" type="file" multiple="true">
			  <a class="startup" href="javascript:$('#file_upload').uploadify('upload','*')">开始上传</a>
			 
            </td>
          </tr> 
          <tr id="imgurls" height="20"> 
            <td align="right">缩略图</td>
            <td> 
              <input class='smallimg' name="imgurlpre" type="text" size="45" maxlength="200" readonly="readonly">
              &nbsp;&nbsp;<a href="">缩略图设置</a>
            </td>
          </tr>
          <tr id="imgurls" height="20"> 
            <td align="right">图片预览</td>
            <td>
              <img class='imgurlprebrowse' name="imgurlprebrowse"  border="0" style="margin:10px 10px;">
            </td>
          </tr>
<!---->       
          <tr> 
            <td align="right">内容关键词</td>
            <td>
              <input name="keywords" type="text" size="50" maxlength="200">用于搜索引擎优化，多个关键词请用用英文版逗号（“,”）隔开
            </td>
          </tr>
          <tr> 
            <td align="right">内容简短描述<br>用于搜索引擎优化</td>
            <td><textarea name="description" cols="60" rows="5"></textarea></td>
          </tr> 
           <tr> 
            <td align="right">新品展示</td>
            <td><input name="isnew" type="checkbox" value="1">选择将在新品展示中显示（需要网站模板支持）</td>
          </tr>  
           <tr> 
            <td align="right">推荐产品</td>
            <td><input name="isrecommend" type="checkbox" value="1">选择将在推荐产品中显示（需要网站模板支持）</td>
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
              <input type="checkbox" name="showindex" value="1" checked="checked">显示首页&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="showsub" value="1" checked="checked">显示子页
            </td>
          </tr>
          <tr> 
            <td align="right">点击次数</td>
            <td><input name="clicknum" type="text" size="10" maxlength="200" > <font color="#FF0000">*</font>（点击次数越多，热门信息中排名越靠前）</td>
          </tr>
          
         
          
          <tr>
            <td align="right">排序权值</td>
            <td align="left"><input type="text" name="sortnum" value="50" size="10"> 
            &nbsp;&nbsp;权值越小，排序越靠前</td>
          </tr>
          <tr> 
            <td align="right">详细内容</td>
            <td>

           <textarea name="content" style="width:700px;" ></textarea>
            <input type="submit" value="确定">  
<script>
    var editor;
    KindEditor.ready(function(K) {
      editor = K.create('textarea[name="content"]');
    });
</script> 

            </td>
          </tr>
           <tr> 
            <td align="right">排序原则</td>
            <td>优先按照排序权值排序（如需置顶请修改），然后按添加时间的先后顺序排序，如需其他排序方式请修改/config/frontend.cn.inc.php文件&nbsp;</td>
          </tr>
          <tr> 
            <td height="30" colspan="2" align="center"> 
              <input class="button" type="submit"  value="提 交">&nbsp;&nbsp;&nbsp;&nbsp;  
              <input class="button" type="reset"  value="重 置"> 
            </td>
          </tr>
        </tbody></table>
      </form>
      <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
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