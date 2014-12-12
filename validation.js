function alphanumcheck(pass){
   var count1 =0;
   var count2 =0;
   var count3 =0;
   for(var i=0 ; i<=pass.length; i++){
       if (pass.charAt(i)=== ""){
           if (pass.charAt(i) === pass.charAt(i).toUpperCase()){
               count1++;
           }
           else{
               count2++;
           }
       }
       if (isNaN(pass.charAt(i))){
           count3++;
       }
       
   }
   if (count1 <1 || count2<1 || count3< 1){
       return false;
   }
   else{
       return true;
   }
}

function validate (){
    var fname= document.forms["form"]["fname"];
    var lname= document.forms["form"]["lname"];
    var user=  document.forms["form"]["username"];
    var pass = document.forms["form"]["password"];
    var Rpass= document.forms["form"]["Rpassword"];
    var day  = document.forms["form"]["day"];
    var year = document.forms["form"]["year"];
    
    if (fname.value === ""){
         fname.style.borderColor="#A00000 ";
         alert("required field");
         fname.style.borderColor="black";
         return false;
        
    }
    
    if (lname.value === ""){
         lname.style.borderColor="#A00000 ";
         alert("required field");
         lname.style.borderColor="black ";
         return false;
        
    }
     
    if (user.value === ""){
         user.style.borderColor="#A00000 ";
         alert("required field");
          user.style.borderColor="black ";
         return false;
        
    }
    
   if (pass.value!=="" && alphanumcheck(pass.value)=== false && pass.value.length < 8){
        pass.style.borderColor="#A00000 ";
        alert("Invalid Password");
        pass.style.borderColor="black";
        return false;
        
    }
    else if (pass.value === ""){
         pass.style.borderColor="#A00000 ";
         alert("required field");
         pass.style.borderColor="black ";
         return false;
    }
    
    if (Rpass.value!= pass.value || Rpass.value === ""){
         Rpass.style.borderColor="#A00000 ";
         alert("Passwords don't match");
         Rpass.style.borderColor="black";
         return false;
        
    }
    if (day.value === ""){
        day.style.borderColor="#A00000 ";
        alert("required field");
        day.style.borderColor="black";
        return false;
    }
    
     if (year.value === ""){
        year.style.borderColor="#A00000 ";
        alert("required field");
        year.style.borderColor="black";
        return false;
     }
}
