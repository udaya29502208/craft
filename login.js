function productlist(type)
{
	//alert(id);
	//var formid=$('#loginform').serialize();
$.ajax({
	type:'POST',
	url:'ajax/product.php',
	data:'prod_type='+type,
	success:function (data)
	{
		//alert(data);
		
			$('#overall').html(data);
		
	}
	
	
	
	});
}



function cart(id,type,amount)
{
	//alert(id);
	//var formid=$('#loginform').serialize();
$.ajax({
	type:'POST',
	url:'ajax/cart.php',
	data:'cartcheck='+id+'&type='+type+'&amount='+amount,
	success:function (data)
	{
		//alert(data);
		if(data==1)
		{
			window.location.href="product_summary.php";
		}
	}
	
	
	
	});
}

function removecart(id)
{
	var con=confirm("Are ypu sure want to remove?");
	if(con)
	{
$.ajax({
	type:'POST',
	url:'ajax/delete.php',
	data:'cartid='+id,
	success:function (data)
	{
		//alert(data);
		if(data==1)
		{
			window.location.reload();
		}
	}
	
		});
	
	}
}


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
	
	
	
	});
}





