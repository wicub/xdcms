<html>
<head>
	<title>文件上传</title>
	<style type="text/css">
		body{margin: 0;}
	</style>
</head>
<body>
<?php 
	if($error==true){
		$site_url=site_url();
		echo "文件不合法 <a href='$site_url/upload'>返回</a>";
		exit;
	}
?>
<?php echo form_open_multipart('upload/do_upload');?>

<input type="hidden" name="f_id" value="<?php echo $f_id?>"/>
<input type="hidden" name="f_type" value="<?php echo $f_type?>"/>
<input type="file" name="userfile" size="20" />
<input type="submit" value="上传" />

</form>

</body>
</html>