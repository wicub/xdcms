/*
 * 后台提示信息js库
 * @author	如水(www.Rushui.net)
 */
 
//调用到计时函数
function djs(url=false){
	var djstime=2;
	setTimeout(aa,1000);
	function aa(){
		$('#djs').html(djstime);
		
		//alert(url);
		if(url && djstime==0){
			window.location.replace(url)
		}
		if(djstime==0){
			$('#showmsg').hide(500);
		}
		if(djstime>0){
			djstime--;
		}
		setTimeout(aa,1000);
		
	}
}

	