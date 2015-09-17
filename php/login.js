function logincheck()
{
	var formid=$('#loginform').serialize();
$.ajax({
	type:'POST',
	url:'ajax/login.php',
	data:formid+'&check=1',
	success:function (data)
	{
		//alert(data);
		if(data==1)
		{
			window.location.reload();
		}
	}
	
	
	
	})
}


