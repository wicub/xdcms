<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站管理系统</title>
<style type="text/css">
<!--
a{ color:#008EE3}
a:link  { text-decoration: none;color:#008EE3}
A:visited {text-decoration: none;color:#666666}
A:active {text-decoration: underline}
A:hover {text-decoration: underline;color: #0066CC}
A.b:link {
	text-decoration: none;
	font-size:12px;
	font-family: "Helvetica,微软雅黑,宋体";
	color: #FFFFFF;
}
A.b:visited {
	text-decoration: none;
	font-size:12px;
	font-family: "Helvetica,微软雅黑,宋体";
	color: #FFFFFF;
}
A.b:active {
	text-decoration: underline;
	color: #FF0000;

}
A.b:hover {text-decoration: underline; color: #ffffff}

.table1 {
	border: 1px solid #CCCCCC;
}
.font {
	font-size: 12px;
	text-decoration: none;
	color: #999999;
	line-height: 20px;
	

}
.input {
	font-size: 12px;
	color: #999999;
	text-decoration: none;
	border: 0px none #999999;
}

td {
	font-size: 12px;
	color: #007AB5;
}
form {
	margin: 1px;
	padding: 1px;
}
input {
	border: 0px;
	height: 26px;
	color: #007AB5;
}
.unnamed1 {
	border: thin none #FFFFFF;
}
select {
	border: 1px solid #cccccc;
	height: 18px;
	color: #666666;
}
body {
	background-color: #9CDCF9;

}
.tablelinenotop {
	border-top: 0px solid #CCCCCC;
	border-right: 1px solid #CCCCCC;
	border-bottom: 0px solid #CCCCCC;
	border-left: 1px solid #CCCCCC;
}
.tablelinenotopdown {

	border-top: 1px solid #eeeeee;
	border-right: 1px solid #eeeeee;
	border-bottom: 1px solid #eeeeee;
	border-left: 1px solid #eeeeee;
}

-->
</style>
</head>
<body>
<table width="681" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="353" height="259" align="center" valign="bottom" background="<?php echo template_url();?>/images/login/login_1.gif"><table width="90%" border="0" cellspacing="3" cellpadding="0">
      <tr>
        <td height="30" align="right" valign="middle" style="color:#05B8E4">Power by <a href="http://www.rushui.net" target="_blank">Rushui.net</a> Copyright 2008-<?php echo date('Y',time())?>&nbsp;&nbsp; </td>
      </tr>
    </table></td>
    <td width="195" background="<?php echo template_url();?>/images/login/login_2.gif"><table width="190" height="106" border="0" align="center" cellpadding="2" cellspacing="0">
       <form id="form1" name="form1" method="post" action="<?php echo APPPATH .'login/checklog'?>">
            <tr>
              <td height="50" colspan="2" align="left">&nbsp;</td>
            </tr>
            <tr>
              <td width="60" height="30" align="left">登陆名称</td>
              <td><input name="dname" type="TEXT" style="background:url(<?php echo template_url();?>/images/login/login_6.gif) repeat-x; border:solid 1px #27B3FE; height:20px; background-color:#FFFFFF" id="Uname"size="16"></td>
            </tr>
            <tr>
              <td height="30" align="left">登陆密码</td>
              <td><input name="dpass" TYPE="PASSWORD" style="background:url(<?php echo template_url();?>/images/login/login_6.gif) repeat-x; border:solid 1px #27B3FE; height:20px; background-color:#FFFFFF" id="Upass" size="16"></td>
            </tr>
            <tr>
              <td height="30"> 验 证 码</td>
			  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><input name="dcode" type="text" id="Ucode" size="6" style="background:url(<?php echo template_url();?>/images/login/login_6.gif) repeat-x; border:solid 1px #27B3FE; height:20px; background-color:#FFFFFF" maxlength="4">
			  </td>
                  <td><img src='<?php echo base_url();?>libraries/code.php' border="0" align="absmiddle" onclick="this.src='<?php echo base_url();?>libraries/code.php?c='+Math.random()" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="40" colspan="2" align="center"><img src="<?php echo template_url();?>/images/login/tip.gif" width="16" height="16"> 请勿非法登陆！</td>
          <tr>
              <td colspan="2" align="center">
                <input type="submit" style="background:url(<?php echo template_url();?>/images/login/login_5.gif) no-repeat; width:69px; height:24px;" value=" 登  录 " onClick="return checklogin();"> 
                <input type="reset" style="background:url(<?php echo template_url();?>/images/login/login_5.gif) no-repeat;width:69px; height:24px;" value=" 取  消 " onClick="document.form1.reset();">
              </td>
            <tr>
              <td height="5" colspan="2"></td>
        </form>
    </table></td>
    <td width="133" background="<?php echo template_url();?>/images/login/login_3.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="161" colspan="3" background="<?php echo template_url();?>/images/login/login_4.gif"></td>
  </tr>
</table>
</body>
</html>