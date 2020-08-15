

function AllLetters(data,error){ 
      var letters = /^[A-Za-z ]+$/;
      var first_name = data;
	  
	  //check firstname input box
      if(first_name.value.match(letters))
		{
			first_name.style.border="";
			error.innerHTML="";
			return true;
		}
      else
		{
		  error.innerHTML="Input Can Only contain alphabet";
		  first_name.style.border="3px solid #cc3333";
		  //alert('Username must have alphabet characters only');
		  //country.focus();
		  return false;
		}
      }
	  
	  
	  function alphanumeric(uadd,error)
      { 
      var letters = /^[0-9a-zA-Z]+$/;
      if(uadd.value.match(letters))
      {
        uadd.style.border="";
        error.innerHTML="";
        return true;
		if (uadd.length<6){
			 alert("Password must be at least 6 characters long.");  
return false;
		}
      
      }
      else
      {
        uadd.style.border="3px solid #cc3333";
        error.innerHTML="Password must have alphanumeric or characters only";
        return false;
      }
      }
	  
	  
	  
	  function passwordMatch(pass,cpass,error)
      { 
      // var letters = /^[0-9a-zA-Z]+$/;
      if(pass.value==cpass.value)
      {
        uadd.style.border="";
        error.innerHTML="";
        return true;
      
      }
      else
      {
        uadd.style.border="3px solid #cc3333";
        error.innerHTML="Passwords Do NOT Match";
        return false;
      }
      }