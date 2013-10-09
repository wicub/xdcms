function checkMenu()
{
  var message = '';
  if('' == document.formSort.kuMenuContent.value)
  {
     message = '栏目名称不能空, ';
  }
  
  /*合法表示符检测*/
  /*var pattern = /^([a-zA-Z0-9_-])+$/;
  if('' == document.formSort.kuMenuDirName.value || 3 > document.formSort.kuMenuDirName.value.length || 20 < document.formSort.kuMenuDirName.value.length || !pattern.test(document.formSort.kuMenuDirName.value))
  {
     message += '栏目目录名称只能为英文字母、数字，长度为3-30之内, ';
  }*/
  
  /*radio 检测*/
  var arrKuWebsitModelType = document.formSort.kuWebsitModelType;
  if(arrKuWebsitModelType[1].checked)
  {
    if('' == document.formSort.kuWebsitOutLink.value)
    {
      message += '外部网址不能为空， ';
    }
  }
  
  if('' != message)
  {
    alert('对不起，操作失败，'+message+'请重新操作');
    return false
  }
  return true;
}


