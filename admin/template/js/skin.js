// JavaScript Document
function checkSkin()
{
  var message = '';
  var pattern  = /^([0-9])+$/;
  if(!pattern.test(document.formSkin.kuWebsiteProductsPagingNumber.value) || '' == document.formSkin.kuWebsiteProductsPagingNumber.value)
  {
     message += '产品列表页面、 ';
  }
  if(!pattern.test(document.formSkin.kuWebsiteNewsPagingNumber.value) || '' == document.formSkin.kuWebsiteNewsPagingNumber.value)
  {
     message += '新闻列表页面、 ';
  }
  if(!pattern.test(document.formSkin.kuWebsiteDownloadPagingNumber.value) || '' == document.formSkin.kuWebsiteDownloadPagingNumber.value)
  {
     message += '下载列表页面、 ';
  }
  if(!pattern.test(document.formSkin.kuWebsiteImagesPagingNumber.value) || '' == document.formSkin.kuWebsiteImagesPagingNumber.value)
  {
     message += '图片列表页面、 ';
  }
  if(!pattern.test(document.formSkin.kuWebsiteRecruitmentPagingNumber.value) || '' == document.formSkin.kuWebsiteRecruitmentPagingNumber.value)
  {
     message += '招聘列表页面、 ';
  }
  if(!pattern.test(document.formSkin.kuWebsiteSearchPagingNumber.value) || '' == document.formSkin.kuWebsiteSearchPagingNumber.value)
  {
     message += '搜索列表页面、 ';
  }
  if('' != message)
  {
    message = message.substr(0, message.length-2);
    alert('对不起，操作失败，'+message+'不能空且只能为数字， 请重新操作');
    return false
  }
  return true;
}