// JavaScript Document
function checkMessage()
{
  var message = '';
  var pattern = /^[0-9]+$/;
  if('' != document.myform.kuWebsiteMessageRefreshTime.value && !pattern.test(document.myform.kuWebsiteMessageRefreshTime.value))
  {
    message += '防刷新时间不能为空且只能为数字, ';
  }
  
  /*多邮箱验证*/
  var patternEmail = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
   var kuWebsiteMessageAcceptEmailAddress =  document.myform.kuWebsiteMessageAcceptEmailAddress.value;
  var arrKuWebsiteMessageAcceptEmailAddress = kuWebsiteMessageAcceptEmailAddress.split("|");
  for($i =0; $i < arrKuWebsiteMessageAcceptEmailAddress.length; $i++)
  {
    if(!patternEmail.test(arrKuWebsiteMessageAcceptEmailAddress[$i]))
    {
      message += '反馈邮件接收邮箱无效, ';
      alert('对不起，操作失败，'+message+'请重新操作');
      return false
    }
  }
  /*
  if(!patternEmail.test(document.myform.kuWebsiteMessageAcceptEmailAddress.value))
  {
    message += '反馈邮件接收邮箱无效, ';
  }
  */
  if('' != message)
  {
    alert('对不起，操作失败，'+message+'请重新操作');
    return false
  }
  return true;
}

function checkMessageDisplayAutoRevertSetting()
{
  if(document.myform.kuWebsiteMessageAutoRevert.checked)
  {
    document.getElementById('autoRevertSetting').style.display = 'block';
  }
  else
  {
    document.getElementById('autoRevertSetting').style.display = 'none';
  }
}

function checkMessageDisplayAutoRevertEmailSetting()
{
  if(document.myform.kuWebsiteMessagePostEmail.checked)
  {
    document.getElementById('autoRevertEmailAddressSetting').style.display = 'block';
  }
  else
  {
    document.getElementById('autoRevertEmailAddressSetting').style.display = 'none';
  }
}
