// JavaScript Document
function checkFlash()
{
  var message = '';
  var pattern = /^[0-9]+$/;
  if(!pattern.test(document.myform.kuWebsiteFlashWidth.value))
  {
    message += 'Flash尺寸中宽度只能为数字, ';
  }
  if(!pattern.test(document.myform.kuWebsiteFlashHeight.value))
  {
    message += 'Flash尺寸中高度只能为数字, ';
  }
  if('' != message)
  {
    alert('对不起，操作失败，'+message+'请重新操作');
    return false
  }
  
  return true;
} 