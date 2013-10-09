<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>

      <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
        <tr height="30" style="padding:3px 10px;">
          <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;添加友情链接</span></td>
          <td width="40%" align="right"><a href="<?php echo site_url();?>/link/index">返回友情链接管理</a>&nbsp;&nbsp;</td>
        </tr>
      </table>
<?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
<form name='formSort' enctype="multipart/form-data" action="" method="post">
    <table width="100%" bgcolor="#FFFFFF" class="tableList" cellpadding="1" cellspacing="1">
        <tr>
            <td align="right">链接名称</td>
            <td align="left"><input type="text" name="title" value="" size="40" /> <span style="color:#FF0000">*</span></td>
        </tr>
        <tr>
            <td align="right">链接地址</td>
            <td align="left"><input type="text" name="url" value="http://" size="40" /></td>
        </tr>
        <tr>
            <td align="right">链接说明</td>
            <td align="left"><input type="text" name="info" value="" size="40" /></td>
        </tr>
        <tr>
          <td align="right">链接类型</td>
          <td align="left">
            <input name="linktype" type="radio" value="0" onclick="document.getElementById('outlink').style.display='none'" checked="checked">文字链接
            &nbsp;
            <input name="linktype" type="radio" value="1" onclick="document.getElementById('outlink').style.display=''">图片链接
          </td>
        </tr>
        <tr id="outlink" style=" display:none;"> 
            <td align="right">上传logo</td>
            <td>
              <div style='line-height: 25px;margin:0;width:300px;float:left;overflow: hidden;'><input name="logo" id="imgurl" type="text"  size="50" readonly></div>
              <div style='height: 25px;width:350px;float:left;overflow: hidden;'><iframe src="<?php echo site_url();?>/upload/index/imgurl/all" frameborder=0 scrolling=no width="350" height="25"></iframe></div><font color="#FF0000">最大上传为5M</font>
            </td>
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



