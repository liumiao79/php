<script src="js/jquery-3.1.1.min.js"></script>
<script>
	$(function(){
		$('#img').hide();
		$('#myfile').change(function(){
			$('#img').hide();
			//获取文件域中的文件对象
			// var fileobj=document.getElementById('myfile').files[0];
			// var fileobj = $('#myfile').get(0).files[0];
			var fileobj = $('#myfile')[0].files[0];
			// alert(fileobj);// [object File]

			//实例化一个表单对象FormData
                     var form=new FormData()
                     // alert(form);// [object FormData]

                     form.append('uplfile',fileobj);// uplfile为input表单的name

       	    $.ajax({
       	    	url:'ajaxuploadPro.php',
       	    	type:'post',
       	    	data:form,
       	    	dataType:'text',
       	    	contentType:false,
                     processData:false,
       	    	success:function(data){
                            if (data==-2) {
                                   alert('未到达处理页面');
                            }
       	    		else if (data==-1) {
       	    			alert('文件不合法');
       	    		}
       	    		else if (data==0) {
       	    			alert('上传失败');
       	    		}
       	    		else{
       	    			$('#img').prop('src',data);
       	    			$('#img').show();
       	    		}
                     // switch(data)
                     // {
                     //        case "-2":alert("未到达处理页面");break;
                     //        case "-1":alert("文件不合法");break;
                     //        case "0":alert("上传失败");break;
                     //        default:$('#img').prop('src',data);
                     //        $('#img').show();
                     // }
       	    		
       	    	}
       	    })

		})
	})
</script>
<meta charset="utf-8">
<title>ajax上传</title>
<input type="file" id="myfile" style="position: fixed;">
<img src="" alt="" id="img" width="200px" height="150px" style="position: fixed;top: 50px">