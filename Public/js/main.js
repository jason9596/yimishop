//注册验证
function chk() {
 	var user=$('#user').val();
 	var pwd=$('#pwd').val();
 	var repwd=$('#repwd').val();
 	var yzm=$('#pwd').val();
 	if(user.length<4||user.length>20) {
 		alert("账号在4到20个字符");
 		$('#user').focus();
 		return false;
 	}
 	if(pwd.length<4||pwd.length>20) {
 		alert("密码在4到20个字符");
 		$('#pwd').focus();
 		return false;
 	}
 	if(repwd!=pwd) {
 		alert("两次密码不一致");
 		$('#repwd').focus();
 		return false;
 	}	 	
}
function pchk() {
    var title=$('#title').val();
    var ori_price=$('#ori_price').val();
    var price=$('#price').val();
    var count=$('#count').val();
    if(title=='') {
    	$('#title').focus();
    	return false;
    }
    if($("select[name=cat] option:selected").val()==0) {
    	$("select[name=cat]").focus();
    	return false;
    }
    if(price=='') {
    	$('#price').focus();
    	return false;
    }
    if(ori_price=='') {
    	$('#ori_price').focus();
    	return false;
    }
    if(count=='') {
    	$('#count').focus();
    	return false;
    }
    if($("input[name=ptype]:checked").length==0) {
    	alert("请选择商品类型");
    	return false;
    }
//  if($("input[name=upload_img['main']]").val()='') {
//  	alert('sdjashak');
//  	return false;
//  }
    
}
//检验是否为数字
function isint(obj) {
	var aa=obj.value;
	if(isNaN(aa) || aa<1) {
		obj.value=1;
		obj.focus();
		return false;
	}
}
