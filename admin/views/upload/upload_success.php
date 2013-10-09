<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php echo $f_id;?>
	<script>
		window.parent.document.getElementById("<?php echo $f_id;?>").value='<?php echo $upload_data['file_name'];?>'
	</script>
	<script>
		window.alert("文件上传成功!请不要修改生成的链接地址！");
		location.replace('<?php echo site_url();?>/upload');
	</script>

</body>
</html>


