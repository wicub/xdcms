<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <TITLE>分割栏</TITLE>
  <link href="<?php echo dirname(site_url());?>/views/css/admin.css" rel="stylesheet" type="text/css" />
 </head>
<SCRIPT LANGUAGE="JavaScript">
<!--
  function showLeftFrame(){
    parent.document.getElementById('frameset').cols =  "160,10,*";
    document.getElementById('splitAnchor').onclick = hideLeftFrame;
    document.getElementById('splitAnchor').src = '<?php echo dirname(site_url());?>/views/images/first_20.gif';
  }
  function hideLeftFrame(){
    parent.document.getElementById('frameset').cols =  "0,10,*";
    document.getElementById('splitAnchor').onclick = showLeftFrame;
    document.getElementById('splitAnchor').src = '<?php echo dirname(site_url());?>/views/images/first_21.gif';
  }
//-->
</SCRIPT>
 <body style="overflow:hidden;background-color:#e0e0e0; margin:0px;padding:0px;text-align:left;" >
  <table width="10" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" valign="middle" class="bian1"><img src="<?php echo dirname(site_url());?>/views/images/first_20.gif" width="8" height="48" id="splitAnchor" onClick="hideLeftFrame();" style="cursor:pointer" /></td>
  </tr>
  </table>

</body>
</html>