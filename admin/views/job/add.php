<!--
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>酷纬信息--Powered by Kuwebs</title>
<link href="<?php  echo template_url() ;?>/css/admin.css" rel="stylesheet" type="text/css">
<script  type="text/javascript" src="<?php  echo template_url() ;?>/js/common.js"></script>

<script src="<?php  echo template_url() ;?>/js/jquery-1.8.3.min.js"></script>
<script charset="utf-8" src="<?php  echo template_url() ;?>/kindeditor/kindeditor.js"></script>



<body>
  <table background="" border="0" width="100%">
    <tbody><tr>
      <td colspan="3" height="10">&nbsp;</td>
    </tr>
    <tr>
      <td width="1%"></td>
      <td width="98%"> 
        <table style="border:1px solid #99d3fb" bgcolor="#F4FAFB" width="100%">
          <tbody><tr style="padding:3px 10px;" height="30">
            <td align="left" height="40" width="40%"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;招聘添加</span></td>
            <td align="right" width="40%"><a href="">返回招聘浏览</a></td>
          </tr>
        </tbody></table>
        <form name="myform" enctype="multipart/form-data" action="<?php echo site_url('job/insert');?>" method="post">
         
        <table class="tableList" bgcolor="#F4FAFB" cellpadding="1" cellspacing="1" width="100%">
          <tbody><tr> 
            <td align="right" width="10%">招聘标题</td>
            <td width="90%"> <input name="title" size="40" maxlength="200" type="text">
            <font color="#FF0000"> *</font>长度最大值为100字符</td>
          </tr>  
          <tr> 
            <td align="right" width="10%">招聘部门</td>
            <td width="90%"> <input name="depart" size="40" maxlength="200" type="text">
            <font color="#FF0000"> *</font>长度最大值为100字符</td>
          </tr>
          <tr> 
            <td align="right" width="10%">工作岗位</td>
            <td width="90%"> <input name="post" size="40" maxlength="200" type="text"> 
            <font color="#FF0000">*</font>长度最大值为100字符</td>
          </tr> 
          <tr> 
            <td align="right">工作地点</td>
            <td><input name="addr" size="40" maxlength="200" type="text"></td>
          </tr>
           <tr> 
            <td align="right">工资待遇</td>
            <td><input name="salary" size="40" maxlength="200" type="text"></td>
          </tr>
          <tr> 
            <td align="right">所属栏目</td>
            <td>
              <div id="category_id" style="float:left;">
                <select name="category_id" size="1" onchange="ShowThirdMenuNav(this.value)">
                  <option value="0" selected="selected">二级栏目</option>
<!--              -->
<option value="49">技术部</option>
<!---->
<option value="68">销售部</option>
<!---->
                </select>
              </div>
              
             </td>
          </tr>
          <tr> 
            <td align="right">内容关键词</td>
            <td><input name="keywords" size="50" maxlength="200" type="text">用于搜索引擎优化，多个关键词请用用英文版逗号（“,”）隔开</td>
          </tr>
          <tr> 
            <td align="right">内容简短描述<br>用于搜索引擎优化</td>
            <td><textarea name="description" cols="60" rows="5"></textarea></td>
          </tr>  
          
          <tr> 
            <td align="right">招聘人数</td>
            <td><input name="num" size="5" maxlength="200" type="text">人 （留空为不限） </td>
          </tr>
           <tr> 
            <td align="right">有效期限</td>
            <td><input name="expirytime" size="5" maxlength="200" type="text">天 （留空为不限）</td>
          </tr>
          <tr> 
            <td align="right">点击次数</td>
            <td><input name="clicknum" size="10" maxlength="200" value="368" type="text"> <font color="#FF0000">*</font>（点击次数越多，热门信息中排名越靠前）</td>
          </tr>
          <tr> 
            <td align="right">状态</td>
            <td>
              <input name="status" value="1" checked="checked" type="radio">发布
              <input name="status" value="2" type="radio">草稿
            </td>
          </tr>
         
         
          <tr>
            <td align="right">排序权值</td>
            <td align="left"><input name="sortnum" value="50" size="10" type="text"> 
            &nbsp;&nbsp;权值越小，排序越靠前</td>
          </tr>
          <tr> 
            <td align="right">职位描述</td>
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
            <td>优先按照排序权值排序（如需置顶请修改），然后按添加时间的先后顺序排序，如需其他排序方式请修改/config/frontend.cn.inc.php文件</td>
          </tr>
          <tr> 
            <td colspan="2" align="center" height="30"> 
              <input class="button"  value="提 交" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;  
              <input class="button"  value="重 置" type="reset"> 
            </td>
          </tr>
        </tbody></table>
      </form>
      <table style="border:1px solid #99d3fb" bgcolor="#F4FAFB" width="100%">
      <tbody><tr style="padding:3px 10px;" height="40">
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



</body></html>
<!---->