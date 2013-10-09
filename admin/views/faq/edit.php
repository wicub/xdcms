<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>
        <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
          <tr height="30" style="padding:3px 10px;">
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;数据块添加</span></td>
            <td width="40%" align="right"><a href="<?php echo site_url();?>/faq">返回常见问题浏览</a>&nbsp;&nbsp;</td>
          </tr>
        </table>
 <?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
        <form name='myform' enctype="multipart/form-data" action="" method="post">
          <input name="id" type="hidden" value='<?php echo $faq->id?>'>
        <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
          <tr>
            <td width="10%" align="right">标题</td>
            <td width="90%"> <input name="title" type="text"  value='<?php echo $faq->title?>' size="50" maxlength="200"> 
            <font color="#FF0000">*</font>长度最大值为100字符</td>
          </tr>
          <tr>
            <td width="10%" align="right">所属分类</td>
            <td width="90%"> 
              <select name="category_id">
                <option>-请选择-</option>
                <?php 
                foreach ($category as $v){
                  $sel=$faq->category_id==$v->id?'select':'';
                  echo "<option value='$v->id' $sel>$v->name</option>";
                }?>
              </select> 
            <font color="#FF0000">*</font></td>
          </tr>
          <tr>
            <td width="30%" align="right">关键字 </td>
            <td width="70%" align="left">
              <input type="text" name="keywords" value="" size="40" />
            </td>
          </tr>
          <tr>
            <td width="30%" align="right"><?php echo $faq->content?></td>
            <td width="70%" align="left" id='dsfsfas'>
              <?php echo $faq->content?>
            </td>
          </tr>
          <tr>
            <td width="30%" align="right">描述 </td>
            <td width="70%" align="left">
              <textarea name="description"><?php echo $faq->content?></textarea>
            </td>
          </tr>
          <tr> 
            <td align="right">详细内容</td>
            <td>
              <textarea name="content" style='width:650px'><?php echo $faq->content?></textarea>
              <script type="text/javascript">
                $(".lang-html").text($(".lang-html").html());
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