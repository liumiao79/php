<script src="js/jquery-3.1.1.min.js"></script>
<script>
	$(function(){
		// $('#btn1').click(function(){
		// 	var jd=$('#jd').val();
		// 	var wd=$('#wd').val();
		// 	$.ajax({
		// 		url:'curlPro.php',
		// 		data:{'jd':jd,'wd':wd},
		// 		type:'get',
		// 		dataType:'json',
		// 		success:function(data){
		// 			// alert(data)
		// 			alert(data.result.addressComponent.city);
		// 		}
		// 	})
		// })
		$('#btn2').click(function(){
			var key=$('#key').val();
			var appid=$('#appid').val();
			var msg=$('#msg').val();
			$.ajax({
				url:'curlPro.php',
				data:{'key':key,'appid':appid,'msg':msg},
				type:'post',
				dataType:'text',
				success:function(data){
					alert(data)
					// alert(data.result.addressComponent.city);
				}
			})
		})
	})
</script>
<meta charset="utf-8">
<!-- <input type="text" id="jd" placeholder="经度">
<input type="text" id="wd" placeholder="纬度">
<input type="button" id="btn1" value="点击"> -->
<input type="text" id="key" placeholder="free">
<input type="text" id="appid" placeholder="0">
<input type="text" id="msg" placeholder="随意">
<input type="button" id="btn2" value="点击">