<html>
<head>
	<title>文件上传</title>
	<style type="text/css">
		body{margin: 0;}
	</style>
</head>
<body>

<?php echo form_open_multipart('fileupload/do_upload');?>

<input type="file" name="userfile" size="20" />
<input type="submit" value="上传" />

</form>

</body>
</html>