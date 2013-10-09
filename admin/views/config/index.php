<?php include dirname(__FILE__) . '/../inc/main_top.php'; ?>
        <table width="100%" bgcolor="#F4FAFB" style="border:1px solid #99d3fb">
          <tr height="30" style="padding:3px 10px;">
            <td width="40%" align="left" height="40"><span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;网站基本信息设置</span></td>
            <td width="40%" align="right">&nbsp;&nbsp;</td>
          </tr>
        </table>
<?php include dirname(__FILE__) . '/../inc/msg.php'; ?>
        <form name='myform' enctype="multipart/form-data" action="" method="post">
          <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
         <table width="100%" bgcolor="#F4FAFB" class="tableList" cellpadding="1" cellspacing="1">
          <tr>
            <td width="30%" align="right">配置名称 </td>
            <td width="70%" align="left">
              <input type="text" name="title" value="<?php echo $row->title;?>" size="40" />
           </td>
          </tr>
          <tr>
            <td width="30%" align="right">网站名称 </td>
            <td width="70%" align="left">
              <input type="text" name="webname" value="<?php echo $row->webname;?>" size="40" />
            </td>
          </tr>
          <tr>
            <td width="30%" align="right">网站网址</td>
            <td width="70%" align="left"><input type="text" name="weburl" value="<?php echo $row->weburl;?>" size="40"/></td>
          </tr>
          <tr>
            <td width="30%" align="right">网站logo </td>
            <td width="70%" align="left">
              <input type="text" name="weblogo" value="<?php echo $row->weblogo;?>" size="40" />
              &nbsp;&nbsp;上传logo
            </td>
          </tr>
          <tr>
            <td width="30%" align="right">网站风格 </td>
            <td width="70%" align="left">
              <input type="text" name="webskin" value="<?php echo $row->webskin;?>" size="40" />
            </td>
          </tr>
          <tr>
            <td width="30%" align="right">网站标题 </td>
            <td width="70%" align="left">
              <input type="text" name="webtitle" value="<?php echo $row->webtitle;?>" size="40" />
            </td>
          </tr>
          <tr>
            <td width="30%" align="right">关键字 </td>
            <td width="70%" align="left">
              <input type="text" name="keywords" value="<?php echo $row->keywords;?>" size="40" />
            </td>
          </tr>
          <tr>
            <td width="30%" align="right">描述 </td>
            <td width="70%" align="left">
              <textarea name="description"><?php echo $row->description;?></textarea>
            </td>
          </tr>

          <tr>
            <td width="30%" align="right">上传文件上传最大值 </td>
            <td width="70%" align="left">
              <input type="text" name="uploadmax" value="<?php echo $row->uploadmax;?>" size="5" />Mb 
            </td>
          </tr>
          <tr>
            <td width="30%" align="right">允许上传的格式 </td>
            <td width="70%" align="left">
              <input type="text" name="uploadformat" value="<?php echo $row->uploadformat;?>" size="40" /> &nbsp;&nbsp;多种格式请用“|”隔开
            </td>
          </tr>

          <tr>
            <td width="30%" align="right">网站底部信息 </td>
            <td width="70%" align="left">
              <textarea name="footright"><?php echo $row->footright;?></textarea>
            </td>
          </tr>

          <tr> 
            <td height="30" colspan="2" align="center" > 
              <input class="button" type="submit"  value="提 交" onclick="return checkBasic()">&nbsp;&nbsp;&nbsp;&nbsp;  
              <input class="button" type="reset"  value="重 置" > 
            </td>
          </tr>
        </table>
      </form>
<?php include dirname(__FILE__) . '/../inc/footer.php'; ?>