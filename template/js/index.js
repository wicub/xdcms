$(function(){
	
	//二级菜单的方法
	$(".navbg li").hover(
		function(){
			$(this).attr("style",'background:#3DC2FA');
			$(this).find(".second").show();
		},
		function(){
			$(this).attr("style",'');
			$(this).find(".second").hide();
		}
		)
	
})
//message.html   DIV-commonText提交的form表单;
function messageadd(){

	/*
	$.post(myurl,$(".commonText form[name='myform']").serialize(),function(data){
		alert(data);
		});
		return false;
	*/	
	//alert(myurl);exit;
	//alert($(".commonText form[name='myform']").serialize());
	
	$.ajax({
		type:"POST",
		dataType: "html",
		url:myurl,
		data: $(".commonText form[name='myform']").serialize(),
		success: function (result){
							//var objresult=eval( " ( " + result + ")" );
							//直接将返回的内容添加到li的最前面
							$(".messageListText").prepend(result);
							//删除本页的最后一条,防止翻页
							$(".messageListText>dl:last").remove(); 
					},
		error: function(data) {
                        alert("error:"+data.responseText);
                     }		
	
	})
	return false;
	
}


