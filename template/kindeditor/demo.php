<!DOCTYPE html>
<html>
<head>
	<meta charset="gb2312">
	<title></title>
	<script charset="utf-8" src="./kindeditor.js"></script>
	<script>
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="msg"]');
		});
	</script>
</head>
<body>
	<form action="2.php" method="post">
		<textarea name="msg" cols="65" rows="10"></textarea>
		<input type="submit" value="确定">
	</form>
</body>
</html>