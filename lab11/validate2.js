function validate2()
{
	var b=document.forms.myform2.search.value;
	
	if(b==null || b=="")
	{
	alert("You forgot to enter the information that you want to search");
	return false;
	}
	
	
	var s=document.forms.myform2.field;
	
	for(var i=0;i<s.length;i++)
		{
		if(s[i].checked)
			{
			break;
			}
		}
	
	if(i>=s.length)
	{
		alert("You forgot to choose the field");
		return false;
	}
}