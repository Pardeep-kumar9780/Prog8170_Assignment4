function Validate_Form()
{
   let name=document.getElementById('Seller_Name').value;
   let address=document.getElementById('Seller_Address').value;
   let city=document.getElementById('City').value; 
   let phone=document.getElementById('Phone_Number').value; 
   let email=document.getElementById('Email').value; 
   let vehicleMake=document.getElementById('Vehicle_Make').value;
   let model=document.getElementById('Model').value;
   let year=document.getElementById('Year').value;
   let link=document.getElementById('link').href="https://www.jdpower.com/cars/"+vehicleMake+"/"+model+"/"+year;
   
   if ((name=="") || (!(isNaN(name))))
   {
       alert("Enter valid Seller name");
   }
   else if(address=="")
   {
       alert("Enter Address");
   }
   else if((city=="") || (!(isNaN(city))))
   {
       alert("Enter valid City");
   }
   else if(phone=="" || (isNaN(phone)))
   {
       alert("Enter valid Phone number");
   }
   else if(email=="")
   {
       alert("Enter valid Email-Address");
   }
   else if((vehicleMake=="")|| (!(isNaN(vehicleMake))))
   {
       alert("Enter valid Vehicle Make");
   }
   
   else if((model=="")|| (!(isNaN(model))))
   {
       alert("Enter valid Model");
   }
   else if((year=="")|| (isNaN(year)))
   {
       alert("Enter valid Year");
   }
   else{
      
      alert(document.getElementById('link').innerHTML = link);
   }
  
}
function GenerateLink()

{
   let vehicleMake=document.getElementById('Vehicle_Make').value;
   let model=document.getElementById('Model').value;
   let year=document.getElementById('Year').value;
   let link=document.getElementById('link').href="https://www.jdpower.com/cars/"+vehicleMake+"/"+model+"/"+year;
     if((vehicleMake=="")|| (!(isNaN(vehicleMake))))
    {
        alert("Enter valid Vehicle Make");
    }
    
    else if((model=="")|| (!(isNaN(model))))
    {
        alert("Enter valid Model");
    }
    else if((year=="")|| (isNaN(year)))
    {
        alert("Enter valid Year");
    }
    else{
    
        document.getElementById('link').innerHTML = link;
       }
}