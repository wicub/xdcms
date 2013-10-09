<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>
        <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
          <tr height="30" style="padding:3px 10px;">
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;数据块浏览</span></td>
            <td width="40%" align="right"><a href="<?php echo site_url();?>/block/add">添加数据块</a>&nbsp;&nbsp;</td>
          </tr>
        </table>
 <?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
        <form name='myform' action="index.php?lang=cn&path=about&menu=about_action&action=delete" method="post">
          <input type="text" name="menuid" value="1" style="display:none" />
          <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
            <tr >
              <td width="5%" align="center">ID</td>
              <td width="30%" align="center">标题</td>
              <td width="10%" align="center" >图片</td>
              <td width="10%" align="center" >操作</td>
            </tr>
            <?php foreach($list as $v):?>
            <tr>
              <td align="center"><?php echo $v->id?></td>
              <td align="center"><?php echo $v->title?></td>
              <td align="center"><?php echo $v->imgurl?></td>
              <td align="center" >
                <a href="<?php echo site_url()?>/block/edit/<?php echo $v->id?>">编辑</a> <a href="<?php echo site_url()?>/block/delete/<?php echo $v->id?>">删除</a>
              </td>
            </tr>
            <?php endforeach;?>
         
            <tr>
              <td colspan="10" align="center">
              </td>
            </tr>
          </table>
        </form>    

<?php include dirname(__FILE__) . '/../inc/footer.php'; ?>