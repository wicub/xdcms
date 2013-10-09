<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>酷纬信息--Powered by Kuwebs</title>
<link href="<?php  echo template_url() ;?>/css/admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php  echo template_url() ;?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
		var  myurl="<?php echo site_url('message/adminajax');?>";
</script>
<script type="text/javascript" src="<?php  echo template_url() ;?>/js/message.js"></script>

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
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;在线留言设置管理</span></td>
            <td width="40%" align="right">&nbsp;&nbsp;</td>
          </tr>
        </table>
        <form name='msgmyform'  method="post" >
         <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
          <tr> 
            <td align="right" width="30%">防刷新时间</td>
            <td width="70%"><input name="MessageRefreshTime" type="text" size="3" maxlength="20" value="120">秒，同一IP两次提交的最小间接时间<font color="#FF0000">*</font></td>
          </tr> 
          <tr> 
            <td align="right">敏感字符过滤</td>
            <td><textarea name="MessageSpecialWord" cols="50" rows="3" >操你妈|他妈的|Fuck</textarea>多个字符请用"|"隔开</td>
          </tr>
          <tr> 
            <td align="right">显示方式</td>
            <td><input name="MessageRevertAudit" type="checkbox" value="1" checked='checked'>客户留言后需要在后台回复审核才显示</td>
          </tr>
          <tr> 
            <td align="right">发送邮件</td>
            <td><input name="MessagePostEmail" type="checkbox" value="1" checked='checked' onclick="checkMessageDisplayAutoRevertEmailSetting()">是否将客户留言自动发生到指定邮箱</td>
          </tr>
          <tr>
            <td colspan="2">
              <div id="autoRevertEmailAddressSetting" style=" width:100%; padding:1px 1px; ">
                <table width="100%" height="100%" bgcolor="#FFFFFF" cellpadding="1" cellspacing="1">
                  <tr> 
                    <td width="30%" align="right">接收邮件地址</td>
                    <td width="70%"><input name="MessageAcceptEmailAddress" type="text" size="30" maxlength="200" value="3375074@qq.com|info@kuwebs.com">多个邮件地址请用"|"隔开</td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>  
           <tr> 
            <td align="right">自动回复</td>
            <td><input name="MessageAutoRevert" type="checkbox" value="1"  checked='checked' >是否自动向提交反馈的客户回复邮件</td>
          </tr>
          <tr>
            <td colspan="2">
              <div id="autoRevertSetting" style=" width:100%; padding:1px 1px; ">
                <table width="100%" height="100%" bgcolor="#FFFFFF" cellpadding="1" cellspacing="1">
                  <tr> 
                    <td align="right" width="30%">回复邮件地址</td>
                    <td width="70%"><input name="MessageAutoRevertEmailAddress" type="text" size="30" maxlength="200" value="info@kuwebs.com">自动回复邮件地址</td>
                  </tr>
                  <tr> 
                    <td align="right">回复邮件标题</td>
                    <td><input name="MessageTitle" type="text" size="30" maxlength="200" value="您好，欢迎光顾webs官方网站">自动回复邮件的标题</td>
                  </tr>
                  <tr> 
                    <td align="right">回复邮件内容</td>
                    <td><textarea name="MessageContent" cols="50" rows="3" >您好，你的邮件已被系统邮件接收，请等待工作人员处理<br>更多资讯请访问http://www.kuwebs.com</textarea>支持HTML语言</td>
                  </tr>  
                </table>
              </div>
            </td>
          </tr>
          <tr> 
            <td height="30" colspan="2" align="center" > 
              <input class="button" type="submit" name="Submit" value="提 交">&nbsp;&nbsp;&nbsp;&nbsp;  
              <input class="button" type="reset" name="Submit" value="重 置" > 
            </td>
          </tr>
        </table>
      </form>
      <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
      <tr height="40" style="padding:3px 10px;">
        <td align="center" valign="middle">
          <font style="color:#9DACAF">
              酷纬信息--Powered by Kuwebs          </font>
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

<!---->