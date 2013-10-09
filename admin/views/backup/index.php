<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>
        <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
            <tr height="30" style="padding:3px 10px;">
              <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;备份数据库</span></td>
              <td width="40%" align="right"><a href="<?php echo site_url();?>/category/add">添加一级栏目</a>&nbsp;&nbsp;</td>
            </tr>
        </table>
 <?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
        <form name='formSort' enctype="multipart/form-data" action="" method="post">
            <table width="100%" bgcolor="#FFFFFF" class="tableList" cellpadding="1" cellspacing="1" >
              <tr>
                <td width="5%" align="center">全选/取消</td>
                <td width="10%" align="center">数据表名</td>
              </tr>

              <?php
                foreach($list as $v):
              ?>
              <tr>
                <td align="center"><input type="checkbox" name="back" value="1" checked/></td>
                <td align="left"><?php echo $v;?></td>
              </tr>
              <?php endforeach;?>

            <tr><td colspan="6"><input type="submit" value="备份" class="button"/></td></tr>
          </table>
        </form>

<?php include dirname(__FILE__) . '/../inc/footer.php'; ?>

