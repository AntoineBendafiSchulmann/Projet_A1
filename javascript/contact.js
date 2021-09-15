			
			function validateForm()                                    
{ 
    var name = document.forms["myForm"]["name"];               
    var email = document.forms["myForm"]["email"]; 
    var subject = document.forms["myForm"]["subject"];   
    var message = document.forms["myForm"]["message"];   
   
    if (name.value == "")                                  
    { /*vérifications formulaire de contact*/
        document.getElementById('errorname').innerHTML="Please enter a valid name";  
        name.focus(); 
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }
       
    if (email.value == "")                                   
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        email.focus(); 
        return false; 
    }else{
        document.getElementById('erroremail').innerHTML="";  
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        email.focus(); 
        return false; 
    } 

     if (subject.value == "")                           
    {
        document.getElementById('errorsubject').innerHTML="What are you looking for ?"; 
        subject.focus(); 
        return false; 
    }else{
        document.getElementById('errorsubject').innerHTML="";  
    }
   
    
   
    if (message.value == "")                           
    {
        document.getElementById('errormessage').innerHTML="Please enter a valid message "; 
        message.focus(); 
        return false; 
    }else{
        document.getElementById('errormessage').innerHTML="";  
    }
   
    return true; 
}


/*bouton lightmode*/

const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

    const body = document.body;
    

    if(body.classList.contains('light')){
        
        body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.innerHTML = "Day"


    } else if(body.classList.contains('dark')){
       
        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.innerHTML = "Night"
    }

})
