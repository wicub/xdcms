
	
	$(function(){
		
		$('form[name="msgmyform"]').submit(function(){
				//alert($('form[name="msgmyform"]').serialize());
				//alert(myurl);
				//alert()
				$.ajax({
					type: "POST",
					dataType: "html",
					url: myurl,
					data: $('form[name="msgmyform"]').serialize(),
					success: function(result){
									var strresult=result;
									alert(strresult);
									/*
									if(strresult==1){
										alert('保存成功');
									}else{
										alert('系统错误');
									}
									*/
							},
					error: function(data){
									alert("error:"+data.responseText);
							}
				})
				
				return false;
		})
		
	})
		
		
		
		