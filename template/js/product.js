	$(function() {
		//alert(up_swf);
			$('#file_upload').uploadify({
				'swf'      : up_swf,
				'uploader' : up_loadify,
				'buttonText':"上传",
				'multi':false,
				'height':20,
				'width':40,
				'onUploadSuccess' : function(file, data, response) {
					var data=eval("("+data+")");
					//alert(data['path']);
					
					$('.upimgurl').val(data['path']);
					$('.smallimg').val(data['src']);
					$('.imgurlprebrowse').attr('src',data['src']);
					/*
					$("#showImage").append("<img src='uploads/"+file.name+"'>");
					*/
					$('#' + file.id).find('.data').html(' - 上传完成');
					
				},
				auto:false,
				//用什么方法上传数据,默认为post
				formData:{sessid:'69ccdb42d545715aa038533caf82a60a'},
				 'itemTemplate' : '\
					<div id="${fileID}" class="uploadify-queue-item">\
						<div class="cancel">\
								 <a href="javascript:$(\'#${instanceID}\').\
								 uploadify(\'cancel\', \'${fileID}\')">×</a>\
						</div>\
						<span class="fileName">${fileName} (${fileSize})</span>\
						<span class="data"></span>\
					</div>' ,
				'removeCompleted':false
				
				
			});
			
		});