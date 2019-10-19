function phonenumber(inputtxt)
{
  var mobile = /^\d{10}$/;
  if(inputtxt.value.match(mobile))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }
  }