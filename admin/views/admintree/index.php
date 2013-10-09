<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台分类树</title>
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
                      <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;后台栏目管理</span></td>
                      <td width="40%" align="right"><a href="<?php echo site_url();?>/admintree/add">添加一级栏目</a>&nbsp;&nbsp;</td>
                    </tr>
                </table>

                <form name='formSort' enctype="multipart/form-data" action="index.php?lang=cn&path=menu&menu=menu_action&action=sort" method="post">
                    <table width="100%" bgcolor="#FFFFFF" class="tableList" cellpadding="1" cellspacing="1" >
                      <tr>
                        <td width="5%" align="center" height="25"><span style="font-size:12px; font-weight:bold">排序</span></td>
                        <td width="5%" align="center">ID</td>
                        <td width="35%" align="center">栏目名称</td>
                        <td width="7%" align="center">链接地址</td>
                        <td width="10%" align="center">系统分类</td>
                        <td width="25%" align="center">管理操作</td>
                      </tr>


                      <?php 
                        foreach($list as $v):
                        $count=substr_count($v->path,',')-1;
                        $str=str_repeat(' &nbsp &nbsp &nbsp',$count);
                        $str=$count>=1?$str.'|--':$str;
                      ?>
                      <tr>
                        <td width="5%" align="center"><input type="text" name="sortnum[<?php echo $v->sortnum?>]"  value='<?php echo $v->sortnum?>' size="3" /></td>
                        <td align="center"><?php echo $v->id?></td>
                        <td align="left"><?php echo $str.htmlspecialchars($v->name);?></td>
                        <td align="center"><?php echo $count?></td>
                        <td align="center"><?php echo $v->id<600?'是':'否';?></td>
                        <td align="center">
                        <?php if($count<2){?>
                            <a href="<?php echo site_url();?>/admintree/add/<?php echo $v->id?>">添加子栏目</a> | 
                        <?}?>
                            <a href="<?php echo site_url();?>/admintree/edit/<?php echo $v->id?>">编辑</a>
                        <?php if($v->id>=600){?>
                             | <a href="<?php echo site_url();?>/admintree/delete/<?php echo $v->id?>" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a></td>
                        <?}?>
                      </tr>
                    <?php endforeach;?>

                    <tr><td colspan="6"><input type="submit" value="排序" class="button"/></td></tr>
                    </table>
                </form>

                <?php include dirname(__FILE__) . '/../inc/footer.php'; ?>
            </td>
            <td width="1%"></td>
        </tr>
        <tr>
            <td colspan="3" height="10">&nbsp;</td>
        </tr>
    </table>
</body>
</html>
