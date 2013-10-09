<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>

        <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
          <tr height="30" style="padding:3px 10px;">
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;数据块添加</span></td>
            <td width="40%" align="right"><a href="<?php echo site_url();?>/block">返回数据块浏览</a>&nbsp;&nbsp;</td>
          </tr>
        </table>
 <?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
        <form name='myform' enctype="multipart/form-data" action="" method="post">
        <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
          <tr>
            <td width="10%" align="right">标题</td>
            <td width="90%"> <input name="title" type="text"  size="50" maxlength="200"> 
            <font color="#FF0000">*</font>长度最大值为100字符</td>
          </tr> 
          <tr> 
            <td align="right">配图</td>
            <td>

              <div style='line-height: 25px;margin:0;width:300px;float:left;overflow: hidden;'><input name="imgurl" id="imgurl1" type="text"  size="50" readonly></div>
              <div style='height: 25px;width:350px;float:left;overflow: hidden;'><iframe src="<?php echo site_url();?>/upload/index/imgurl1/all" frameborder=0 scrolling=no width="350" height="25"></iframe></div><font color="#FF0000">最大上传为5M</font>
              
            </td>
          </tr>
          <tr> 
            <td align="right">详细内容</td>
            <td>
              <textarea name="content" style='width:650px'></textarea>
              <script type="text/javascript">
                var editor;
                KindEditor.ready(function(K) {
                  editor = K.create('textarea[name="content"]');
                });
              </script>
            </td>
          </tr>
          <tr> 
            <td height="30" colspan="2" align="center" > 
              <input class="button" type="submit" value="提 交" >&nbsp;&nbsp;&nbsp;&nbsp;  
              <input class="button" type="reset" value="重 置" > 
            </td>
          </tr>
        </table>
      </form>
<?php include dirname(__FILE__) . '/../inc/footer.php'; ?>