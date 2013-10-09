<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>
        <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
            <tr height="30" style="padding:3px 10px;">
              <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;友情链接管理</span></td>
              <td width="40%" align="right"><a href="<?php echo site_url();?>/link/add">添加友情链接</a>&nbsp;&nbsp;</td>
            </tr>
        </table>

        <form name='formSort' enctype="multipart/form-data" action="" method="post">
            <table width="100%" bgcolor="#FFFFFF" class="tableList" cellpadding="1" cellspacing="1" >
              <tr>
                <td width="5%" align="center">ID</td>
                <td width="35%" align="center">链接名称</td>
                <td width="7%" align="center">链接logo</td>
                <td width="10%" align="center">链接地址</td>
                <td width="25%" align="center">管理操作</td>
              </tr>
              <?php
                foreach($list as $v):
              ?>
              <tr>
                <td align="center"><?php echo $v->id?></td>
                <td align="left"><?php echo htmlspecialchars($v->title);?></td>
                <td align="center"><?php echo $v->logo;?></td>
                <td align="center"><?php echo $v->url;?></td>
                <td align="center">

                    <a href="<?php echo site_url();?>/link/edit/<?php echo $v->id?>">编辑</a>
                     | <a href="<?php echo site_url();?>/link/delete/<?php echo $v->id?>" onclick="return confirm('警告！数据删除，无法恢复，你确定要删除吗？')">删除</a></td>
              </tr>
            <?php endforeach;?>

            <tr><td colspan="6">
            </td></tr>
          </table>
        </form>

<?php include dirname(__FILE__) . '/../inc/footer.php'; ?>

