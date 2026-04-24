// JavaScript Document
/**********************************/
/*document use to call all ajax functions*/
/*author :- Cakiweb				*/
/*	on :- 30-11-2019				*/				
/**********************************/

function loadAlldepartment(ctrlId,selectedId = 0){
		$.ajax({
			method:'post',
			url: appUrl+'index.php/ajax/loadAlldepartment',
			dataType:'json',
			data:{},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var datares = res.res;
					bindData += '<option value="">-Select-</option>';
					$.each(datares, function(i){
					   var selected = (selectedId > 0 && datares[i].department_id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+datares[i].department_id+'" '+selected+'>'+datares[i].department_name+'</option>';
					});
					
				}else{
					bindData += '<option value="">-Select-</option>';
				}
				
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}


function loadstream(ctrlId,deptId = 0,selectedId = 0){
		$.ajax({
			method:'post',
			url: appUrl+'index.php/ajax/loadstream',
			dataType:'json',
			data:{deptId:deptId},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var datares = res.res;
					bindData += '<option value="">-Select-</option>';
					$.each(datares, function(i){
					   var selected = (selectedId > 0 && datares[i].stream_id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+datares[i].stream_id+'" '+selected+' data-semester="'+datares[i].no_of_sem+'">'+datares[i].stream_name+'</option>';
					});
					
				}else{
					bindData += '<option value="">-Select-</option>';
				}
				
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}




function loadsubagainstdept(ctrlId,deptId = 0,selectedId = 0){
		$.ajax({
			method:'post',
			url: appUrl+'index.php/ajax/loadsubagainstdept',
			dataType:'json',
			data:{deptId:deptId},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var datares = res.res;
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


function confirm_password(){
	var password = $("#password").val();
	var cpassword = $("#cpassword").val();
	if(password != '' && cpassword != ''){
	    if(password!=cpassword){
	      alert('Password does not match with the confirm password.');
	      $("#cpassword").val('');
	      return false;
	    }
	}
}



function loadsubagainststream(ctrlId,streamId = 0,selectedId = 0){
		$.ajax({
			method:'post',
			url: appUrl+'index.php/ajax/loadsubagainststream',
			dataType:'json',
			data:{streamId:streamId},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var datares = res.res;
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

function loadDays(ctrlId,selectedId = 0){
	$.ajax({
		method:'post',
		url: appUrl+'index.php/ajax/loadDays',
		dataType:'json',
		data:{},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var datares = res.res;
				bindData += '<option value="">-- Select --</option>';
				$.each(datares, function(i){
				  var selected = (selectedId > 0 && datares[i].id == selectedId)?'selected':'';
				  bindData += '<option value="'+datares[i].id+'" '+selected+'>'+datares[i].day+'</option>';
				});				
			}else{
				bindData += '<option value="">-Select-</option>';
			}			
			$('#'+ctrlId).html(bindData);
		}
	});	
}

function loadSemester(ctrlId,selectedId = 0){
	$.ajax({
		method:'post',
		url: appUrl+'index.php/ajax/loadSemester',
		dataType:'json',
		data:{},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var datares = res.res;
				bindData += '<option value="">-- Select --</option>';
				$.each(datares, function(i){
				  var selected = (selectedId > 0 && datares[i].id == selectedId)?'selected':'';
				  bindData += '<option value="'+datares[i].id+'" '+selected+'>'+datares[i].semester+'</option>';
				});				
			}else{
				bindData += '<option value="">-Select-</option>';
			}			
			$('#'+ctrlId).html(bindData);
		}
	});	
}


function loadTaggedEmployee(ctrlId, subjectId = 0, selectedId = 0){
	$.ajax({
		method:'post',
		url: appUrl+'index.php/ajax/loadTaggedEmployee',
		dataType:'json',
		data:{subjectId:subjectId},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var datares = res.res;
				//console.log(datares);
				bindData += '<option value="">-Select-</option>';
				$.each(datares, function(i){
				   var selected = (selectedId > 0 && datares[i].emp_id == selectedId)?'selected':'';				  
				  bindData += '<option value="'+datares[i].emp_id+'" '+selected+'>'+datares[i].fullname+'</option>';
				});
				
			}else{
				bindData += '<option value="">-Select-</option>';
			}
			
			
			$('#'+ctrlId).html(bindData);
		}
	});	
}

function getTaggedDepartment(ctrlId,teacherId = 0,selectedId = 0){
		$.ajax({
			method:'post',
			url: appUrl+'index.php/ajax/getTaggedDepartment',
			dataType:'json',
			data:{teacherId:teacherId},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var datares = res.res;
					bindData += '<option value="">-Select-</option>';
					$.each(datares, function(i){
					   var selected = (selectedId > 0 && datares[i].department_id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+datares[i].department_id+'" '+selected+'>'+datares[i].department_name+'</option>';
					});
					
				}else{
					bindData += '<option value="">-Select-</option>';
				}
				
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}

function getTaggedStream(ctrlId, department_id, emp_id, selectedId = 0){
	$.ajax({
		method:'post',
		url: appUrl+'index.php/ajax/getTaggedStream',
		dataType:'json',
		data:{department_id:department_id,emp_id:emp_id},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var datares = res.res;
				bindData += '<option value="">-Select-</option>';
				$.each(datares, function(i){
				   var selected = (selectedId > 0 && datares[i].stream_id == selectedId)?'selected':'';
				   bindData += '<option value="'+datares[i].stream_id+'" '+selected+'>'+datares[i].stream_name+'</option>';
				});				
			}else{
				bindData += '<option value="">-Select-</option>';
			}
			$('#'+ctrlId).html(bindData);
		}
	});	
}

function getTaggedSubject(ctrlId, stream_id, emp_id, selectedId = 0){
	$.ajax({
		method:'post',
		url: appUrl+'index.php/ajax/getTaggedSubject',
		dataType:'json',
		data:{stream_id:stream_id,emp_id:emp_id},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var datares = res.res;
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

function getTaggedUnit(ctrlId, subject_id, selectedId = 0){
	$.ajax({
		method:'post',
		url: appUrl+'index.php/ajax/getTaggedUnit',
		dataType:'json',
		data:{subject_id:subject_id},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var datares = res.res;
				bindData += '<option value="">-Select-</option>';
				$.each(datares, function(i){
				   var selected = (selectedId > 0 && datares[i].chapter_id == selectedId)?'selected':'';
				   bindData += '<option value="'+datares[i].chapter_id+'" '+selected+'>'+datares[i].chapter_name+'</option>';
				});				
			}else{
				bindData += '<option value="">-Select-</option>';
			}
			$('#'+ctrlId).html(bindData);
		}
	});	
}