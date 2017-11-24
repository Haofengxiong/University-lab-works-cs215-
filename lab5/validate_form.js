function validateForm()
{
	var last="";
	var x=document.forms.myForm.firstName.value;
	
	if(x==null || x=="")
		{
		alert("First name must be filled out");
		return false;
		}
	
	if(x.length>50)
		{
		alert("First name can't exced 50 characters");
		return false;
		}
	
	last=last+"First name is: "+x+"\n";
	
	var xx=document.forms.myForm.lastName.value;
	
	if(xx==null || xx=="")
	{
	alert("Last name must be filled out");
	return false;
	}
	
	if(xx.length>50)
		{
		alert("Last name can't exced 50 characters");
		return false;
		}
	
	last=last+"Last name is: "+xx+"\n";
	
	var na=document.forms.myForm.nation.value;
	
	for(var i=0;i<na.length;i++)
		{
		if(na[i].checked)
			{
			last=last+"Your nationality is: "+na[i].value+"\n";
			}
		
		}
	
	var y=document.forms.myForm.choice;
	
	for(var i=0;i<y.length;i++)
		{
		if(y[i].checked)
			{
			break;
			}
		}
	
	if(i>=y.length)
	{
		alert("Please select your gender");
		return false;
	}
	
	last=last+"Your gender is: "+y[i].value+"\n";
		
	var t=document.forms.myForm.address.value;
	
	if(t==0)
		{
		alert("Please enter your address")
		return false;
		}
	
	if(t.length>300)
		{
		alert("address can't exced 300 characters")
		return false;
		}
	
	last=last+"Your address is: "+t+"\n";
	
	var h=document.forms.myForm.history;
	
	for(var i=0;i<h.length;i++)
		{
		if(h[i].checked)
			{
			break;
			}
		}
	
	if(i>=h.length)
		{
		alert("Please select none if you don't have those medical history")
		return false;
		}
	
	for(var i=0;i<h.length-1;i++)
		{
		if(h[4].checked && h[i].checked)
			{
			alert("don't select any medical history if you have selected none")
			return false;
			}
		}
	last=last+"For medical history, you selected: ";
	
	for(var i=0;i<h.length;i++)
		{
		if(h[i].checked)
			{
			last=last+h[i].value+" ";
			}
		}
	
	last=last+"\n";
	
	var c=document.forms.myForm.current.value;
	var yn=document.forms.myForm.YesNo;
	
	for(var i=0;i<yn.length;i++)
		{
		if(yn[i].checked)
			{
			if(i==0 && c==0)
				{
				alert("Please enter your list of current medication")
				return false;
				}
			else if(i==1 && c!=0)
				{
				alert("Don't enter anything if you don't have current medication")
				return false;
				}
			break;
			}
		}
	
	if(i>=yn.length)
		{
		alert("please select yes or no for the current medication")
		return false;
		}
	
	last=last+"For current medication, you selected: "+yn[i].value+"\n";
	if(i==0)
		{
	    last=last+"Your current medication is: "+c;
	    }
	alert(last);

}

