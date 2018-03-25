$(document).ready(function(){
	
	//var checkpassword = $('.ckpwd').keyup().val();
	$('.ckpwd').keyup(function(){
		var password = $('.pwd').val();
		var checkpassword =$(this).val();
		if(password == checkpassword){
		$('.msg').html('matched');
		$('.msg').css('color','green');
	}else{
		$('.msg').html('password mismatched');
		$('.msg').css('color','red');
	}
		
	});
	

	
})