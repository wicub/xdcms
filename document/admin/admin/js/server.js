function checkServer()
{
  var message = '';
  var pattern = /^[0-9]+$/;
  if(!pattern.test(document.myform.sortnum.value))
  {
    message += '显示排序只能为数字, ';
  }
  if('' != message)
  {
    alert('对不起，操作失败，'+message+'请重新操作');
    return false
  }
  
  return true;
} 