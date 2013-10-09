<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>
      <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
        <tr height="30" style="padding:3px 10px;">
          <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;修改栏目</span></td>
          <td width="40%" align="right"><a href="<?php echo site_url();?>/category/index">返回栏目管理</a>&nbsp;&nbsp;</td>
        </tr>
      </table>
<?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
<form name='formSort' enctype="multipart/form-data" action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row->id;?>" />
    <input type="hidden" name="pid" value="<?php echo $row->pid;?>" />
    <input type="hidden" name="path" value="<?php echo $row->path;?>" />
    <table width="100%" bgcolor="#FFFFFF" class="tableList" cellpadding="1" cellspacing="1">
        <tr>
            <td width="30%" align="right">上级栏目名称</td>
            <td width="70%" align="left"><input type="text" name="athername" value="<?php echo $name;?>" size="40" disabled/></td>
        </tr>
        <tr>
            <td align="right">栏目名称</td>
            <td align="left"><input type="text" name="name" value="<?php echo $row->name;?>" size="40" /> <span style="color:#FF0000">*</span></td>
        </tr>
        <tr>
            <td align="right">栏目标题</td>
            <td align="left"><input type="text" name="title" value="<?php echo $row->title;?>" size="40" /></td>
        </tr>
        <tr>
            <td align="right">同级目录排序</td>
            <td align="left">
              <input type="text" name="sortnum" value="<?php echo $row->sortnum;?>" size="10" />数字越小，排序越靠前
            </td>
        </tr>
        <tr>
          <td align="right">导航显示</td>
          <td align="left">
            <?php 
                foreach ($navshow as $k => $v){
                  $checked=$row->navshow==$k?'checked':'';
                  echo "<input type='radio' name='navshow' value='$k' $checked/> $v";
                }
              ?>
          </td>
        </tr>
        <tr>
          <td align="right">新窗口打开</td>
          <td align="left"><input type="checkbox" name="blankwindow" value="1" size="40" <?php echo $row->blankwindow==1?'checked':'';?>/>是</td>
        </tr>
        <tr>
          <td align="right">所属模块</td>
          <td align="left">
              <?php if($pid!=0){?>
                <input type="hidden" name="menumodule" value="<?php echo $row->menumodule;?>"/>
                <select name="menumoduleshow" disabled>
              <?php }else{
                      echo "<select name='menumodule'>";
                    }
                foreach ($modelshow as $k => $v){
                   $selected=$row->menumodule==$k?'selected':'';
                  echo "<option value='$k' $selected>$v</option>";
                }
              ?>
            </select>&nbsp;<font color="#FF0000">*</font>
          </td>
        </tr>
        <tr>
          <td align="right">栏目属性</td>
          <td align="left">
            <input name="menutype" type="radio" value="0" <?php echo $row->menutype==0?'checked':'';?> onclick="document.getElementById('outlink').style.display='none'" checked="checked">内部栏目
            &nbsp;
            <input name="menutype" type="radio" value="1" <?php echo $row->menutype==1?'checked':'';?> onclick="document.getElementById('outlink').style.display=''">外部链接
          </td>
        </tr>
        <tr id="outlink" <?php echo $row->menutype==0?'style="display:none;"':'';?>> 
            <td width="30%" align="right">链接地址</td>
            <td width="70%"> <input name="otherurl" type="text" value="<?php echo $row->otherurl;?>" size="40" maxlength="200">&nbsp;<font color="#FF0000">*</font>外部网址请用“http://www.xxx.com"的形式</td>
        </tr> 
        <tr> 
          <td align="right" height="25"><b>搜索引擎优化设置</b></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td align="right">关键词</td>
          <td><input name="keywords" type="text" value="<?php echo $row->keywords;?>" size="40" maxlength="200">&nbsp;多个关键词请用英文版逗号（“,”）隔开</td>
        </tr>
         <tr> 
          <td align="right">简短描述</td>
          <td><textarea name="description" cols="50" rows="4" ><?php echo $row->description;?></textarea></td>
        </tr>

        <tr>
            <td colspan="2" align="center" valign="middle">
              <input type="submit" value="确 定" class="button" onclick="return checkMenu()" />
              <input type="reset" value="重 置" class="button" />
            </td>
        </tr>
    </table>
</form>

<?php include dirname(__FILE__) . '/../inc/footer.php'; ?>


