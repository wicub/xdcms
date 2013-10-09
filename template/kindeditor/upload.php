<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>文件上传</title>
        <script charset="utf-8" src="./kindeditor.js"></script>
</head>
<body> 
<button>上传</button>
<input type="submit" value="提交"  id="ke-upload-button"/>
<script type="text/javascript">
        var uploadbutton = K.uploadbutton({
                button : K('#ke-upload-button')[0],
                fieldName : 'imgFile',
                url : './php/upload_json.php',
                afterUpload : function(data) {
                        if (data.error === 0) {
                                alert(data.url);
                        } else {
                                alert(data.message);
                        }
                }
        });
        uploadbutton.fileBox.change(function(e) {
                uploadbutton.submit();
        });
</script>

</body>
</html>