<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><h3>上传成功</h3></title>
</head>
<body>

	<script>
		window.parent.document.getElementById("imgurlpath").value='<?php echo $upload_data['file_name'];?>'
		
		window.parent.document.getElementById("imgurlprebrowse").src='<?php echo base_url();?>../uploads/<?php echo $upload_data['file_name'];?>'
	</script>
	<script>
		//window.alert("<?php echo $upload_data['file_name'];?>");
		window.alert("文件上传成功!请不要修改生成的链接地址！");
		location.replace('<?php echo site_url();?>/upload');
	</script>

</body>
</html>


