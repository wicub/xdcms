<!--
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>酷纬信息--Powered by Kuwebs</title>
<link href="<?php echo template_url() ;?>/css/admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="<?php  echo template_url() ;?>/js/common.js"></script>
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
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;在线留言浏览</span></td>
            <td width="40%" align="right">&nbsp;&nbsp;</td>
          </tr>
        </table>
        <form action="" method="post">
          <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
            <tr height="30" style="padding:3px 10px;">
              <td width="100%" align="left" height="20">
                <span style="font-size:12px; font-weight:bold">
                  <a href="">所有信息</a>&nbsp;&nbsp;&nbsp;&nbsp;    
                  <a href="">未回复信息</a>&nbsp;&nbsp;&nbsp;&nbsp;  
                  <a href="">已回复信息</a>&nbsp;&nbsp;&nbsp;&nbsp;    
                </span>
              </td>
            </tr>
          </table>
        </form>
        <form name='myform' action="" method="post">
          <input type="text" name="menuid" value="7" style="display:none" />
          <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
            <tr >
              <td width="5%" align="center">选中</td>
              <td width="5%" align="center">ID</td>
              <td width="20%" align="center">留言标题</td>
              <td width="10%" align="center" >二级栏目</td>
              <td width="10%" align="center" >三级栏目</td>
              <td width="10%" align="center">留言者姓名</td>
              <td width="10%" align="center">Email</td>
              <td width="5%" align="center">审核</td>
              <td width="10%" align="center">来源IP</td>
              <td width="10%"align="center">操作</td>
            </tr>
<!---->
            <tr>
              <td align="center"><input type="checkbox" name="id[]" value="64" /></td>
              <td align="center">64</td>
              <td align="center">如何修改菜单上面联系我们的内容？</td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center">Kuwebs用户</td>
              <td align="center" >shflg1234@163.com</td>
              <td align="center" >             
{$labelCommonYes}              </td>
              <td align="center" >127.0.0.1</td>
              <td align="center" >
                <a href="">编辑</a>
                <a href="" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a>
              </td> 
            </tr>
<!---->
            <tr>
              <td align="center"><input type="checkbox" name="id[]" value="63" /></td>
              <td align="center">63</td>
              <td align="center">如何修改主页上面的公司简介？</td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center">迷惑着</td>
              <td align="center" >shflg1234@163.com</td>
              <td align="center" >             
{$labelCommonYes}              </td>
              <td align="center" >127.0.0.1</td>
              <td align="center" >
                <a href="">编辑</a>
                <a href="" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a>
              </td> 
            </tr>
<!---->
            <tr>
              <td align="center"><input type="checkbox" name="id[]" value="62" /></td>
              <td align="center">62</td>
              <td align="center">请问如何购买版权？</td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center">小叶子</td>
              <td align="center" >info@kuwes.com</td>
              <td align="center" >             
{$labelCommonYes}              </td>
              <td align="center" >127.0.0.1</td>
              <td align="center" >
                <a href="">编辑</a>
                <a href="" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a>
              </td> 
            </tr>
<!---->
            <tr>
              <td align="center"><input type="checkbox" name="id[]" value="54" /></td>
              <td align="center">54</td>
              <td align="center">请问如何修改网页LOGO?</td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center">中兴通讯</td>
              <td align="center" >info@kuwes.com</td>
              <td align="center" >             
{$labelCommonYes}              </td>
              <td align="center" >127.0.0.1</td>
              <td align="center" >
                <a href="">编辑</a>
                <a href="" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a>
              </td> 
            </tr>
<!---->
            <tr>
              <td align="center"><input type="checkbox" name="id[]" value="53" /></td>
              <td align="center">53</td>
              <td align="center">请问如何修改网站标题？</td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center">华为</td>
              <td align="center" >info@kuwes.com</td>
              <td align="center" >             
{$labelCommonYes}              </td>
              <td align="center" ></td>
              <td align="center" >
                <a href="">编辑</a>
                <a href="" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a>
              </td> 
            </tr>
<!---->
            
            <tr> 
              <td height="20" align="left" colspan="11">
                <input name="selectAllCheckBox"  type="checkbox" onclick="checkCheckBoxAll(this.form)">
                选中本页显示的所有在线留言 
                <input name="submit" type='submit' value='删除选定的条目' onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')"> 
              </td>
            </tr>
            <tr>
              <td colspan="11" align="center"><a href=""><span>第一页</span></a><a href=""><span>上一页</span></a>   <font color=red>〖1〗</font>    <a href=""><span>下一页</span></a> <a href=""><span>最后一页</span></a>              </td>
            </tr>
          </table>
        </form>    <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
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