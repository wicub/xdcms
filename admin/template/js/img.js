// JavaScript Document
function checkImg()
{
  var message = '';
  var pattern = /^[0-9]+$/;
  if('' != document.myform.kuWebsiteUploadImgMax.value && !pattern.test(document.myform.kuWebsiteUploadImgMax.value))
  {
    message += '允许上传的最大尺寸只能为数字, ';
  }
  if(!pattern.test(document.myform.kuWebsiteImgNarrowWith.value))
  {
    message += '缩略图大小中宽只能为数字, ';
  }
  if(!pattern.test(document.myform.kuWebsiteImgNarrowHeight.value))
  {
    message += '缩略图大小中高只能为数字, ';
  }
  if('' != message)
  {
    alert('对不起，操作失败，'+message+'请重新操作');
    return false
  }
  
  return true;
}