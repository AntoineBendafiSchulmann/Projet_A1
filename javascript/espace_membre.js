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




            
            function validateForm()                                    
{ 
    var email = document.forms["myForm"]["email"]; 
    var password = document.forms["myForm"]["password"];
    var repeatpassword = document.forms["myForm"]["repeatpassword"];



       
    if (email.value == "")                                   
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address";  /*le js sert à ce que tous les champs soient remplis*/
        email.focus(); 
        return false;  /*l'execution se finniras alors ici*/ 
    }else{
        document.getElementById('erroremail').innerHTML="";  
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address";  /*nécessite un @*/
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        email.focus(); 
        return false; 
    } 

     if (password.value == "")                           
    {
        document.getElementById('errorpassword').innerHTML="A password is required"; 
        password.focus(); 
        return false; 
    }else{
        document.getElementById('errorpassword').innerHTML="";  
    }
   
    

      if (repeatpassword.value == "")                           
    {
        document.getElementById('errorrepeatpassword').innerHTML="A password is required"; 
        repeatpassword.focus(); 
        return false; 
    }else{
        document.getElementById('errorrepeatpassword').innerHTML="";  
    }
   
  

    
    if (repeatpassword.value !== password.value)                           
    {
        document.getElementById('errorrepeatpassword').innerHTML="Different passwords";   /*si les mdp sont differents alors erreur*/ 
        repeatpassword.focus(); 
        return false; 
    }else{
        document.getElementById('errorrepeatpassword').innerHTML="";  
    }
   
    return true;  
   
}