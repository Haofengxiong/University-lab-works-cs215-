function validate()
{
	var x=document.myForm.id.value,
	y=document.myForm.first.value,
	z=document.myForm.last.value,
	last="You forgot to input the following field(s) ";
	
	var wx=document.getElementById("i");
	var wy=document.getElementById("f");
	var wz=document.getElementById("l");
	
	if(x==null || x=="")
	{
		last+="ID, ";
		wx.innerHTML="<p style='color:red;text-decoration:underline;'>Please enter ID</p>";
	}
	else
		wx.innerHTML="";
	
	if(y==null || y=="")
	{
		last+="First name, ";
		wy.innerHTML="<p style='color:red;text-decoration:underline;'>Please enter first name</p>";
	}
	else
		wy.innerHTML="";
	
	if(z==null || z=="")
	{
		last+="Last name.";
		wz.innerHTML="<p style='color:red;text-decoration:underline;'>Please enter last name</p>";
	}
	else
		wz.innerHTML="";
	
	if(x==null || x=="")
		alert(last);
	else if(y==null || y=="")
		alert(last);
	else if(z==null || z=="")
		alert(last);
	else
	{
		var node_div=document.getElementById("mydiv");
		node_div.innerHTML="<br>"+"ID: "+x+"<br>"+"First name: "+y+"<br>"+"Last name: "+z;
	}
	
}
	
	
