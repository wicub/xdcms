function checkBasic()
{
  var message = '';
  if('' == document.myform.kuWebsiteURL.value)
  {
     message = '网站网址不能空, ';
  }
  
  var pattern = /^[0-9]+$/;
  if('' != document.myform.kuWebsiteUploadFileMax.value && !pattern.test(document.myform.kuWebsiteUploadFileMax.value))
  {
    message += '下载文件上传最大值只能为数字, ';
  }
  
  if('' != message)
  {
    alert('对不起，操作失败，'+message+'请重新操作');
    return false
  }
  return true;
}