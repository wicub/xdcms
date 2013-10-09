function checkCheckBoxAll(form)
{
  for (var i = 0; i < form.elements.length; i++)
  {
    var obj = form.elements[i];
    if (obj.Name != "selectAllCheckBox")
    {
      obj.checked = form.selectAllCheckBox.checked;
    }
  }
}

//显示控制
function displayDiv(divIdFirst,divIdSecond)
{ 
  document.getElementById(divIdFirst).style.display="block";
  document.getElementById(divIdSecond).style.display="none";
}

function changeColor(obj, varColor) 
{ 
  document.getElementById(obj).style.color = varColor; 
  document.getElementById('wateColorId').value = varColor;
}