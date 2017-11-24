function validate()
{

	var x=document.forms.myform.id.value;
	var y=document.forms.myform.fn.value;
	var z=document.forms.myform.ln.value;
	
	if(x==null || x=="")
		{
		alert("You forgot to enter ID");
		return false;
		}
	
	if(y==null || y=="")
	{
	alert("You forgot to enter first name");
	return false;
	}
	
	if(z==null || z=="")
	{
	alert("You forgot to enter last name");
	return false;
	}
	

	
}