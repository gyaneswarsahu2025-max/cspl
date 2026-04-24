// JavaScript Document
/**********************************/
/*document use to call all ajax functions*/
/*author :- Cakiweb				*/
/*	on :- 30-11-2019				*/				
/**********************************/

function loadAllclass(ctrlId,selectedId = 0){
		$.ajax({
			method:'post',
			url: appUrl+'/Ajax_requests/loadAllclass',
			dataType:'json',
			data:{},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var datares = res.result;
					bindData += '<option value="">-Select-</option>';
					$.each(datares, function(i){
					   var selected = (selectedId > 0 && datares[i].class_id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+datares[i].class_id+'" '+selected+'>'+datares[i].class_name+'</option>';
					});
					
				}else{
					bindData += '<option value="">-Select-</option>';
				}
				
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}


function loadsubJect(ctrlId,classId = 0,selectedId = 0){
		$.ajax({
			method:'post',
			url: appUrl+'/Ajax_requests/loadsubJect',
			dataType:'json',
			data:{classId:classId},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var datares = res.result;
					bindData += '<option value="">-Select-</option>';
					$.each(datares, function(i){
					   var selected = (selectedId > 0 && datares[i].subject_id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+datares[i].subject_id+'" '+selected+'>'+datares[i].subject_name+'</option>';
					});
					
				}else{
					bindData += '<option value="">-Select-</option>';
				}
				
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}


