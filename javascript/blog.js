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



/*image parrallax : elle change qd on scroll*/

const background = document.querySelector('#illustr_background'); /*on crée une constante avc l'id de l'image*/


const scrollAmount = -900;  /*on recup la quantitée de scroll la c 900px donc un peut plus que l'image*/
console.log('scrollAmount'); /*consol log pr bien "calibrer"*/ 
window.addEventListener('scroll', (event) => {
    const {top} = background.getBoundingClientRect();  
    if (top - window.innerHeight < scrollAmount) {
        background.style.opacity = 0;    /*on change l'opacitée de l'image quand on scroll 900px;*/ 

    } else {
        background.style.opacity = 1;   /*si le scroll amount n'atteint pas 900px alors on voit l'image*/ 
    }
});

//texte premier plan pr le parrallax il apparait qd l'img s'en vas

const text = document.querySelector('#titre_page'); /*on crée une constante avc l'id de l'image*/


const scrollQuantity = -400;  /*on recup la quantitée de scroll la c 400px donc un peut plus que l'image en déclarant une variable*/
window.addEventListener('scroll', (event) => {
    const {top} = text.getBoundingClientRect();  
    if (top - window.innerHeight < scrollQuantity) {
        text.style.opacity = 1;    /*on change l'opacitée de l'image quand on scroll 400px;*/ 

    } else {
        text.style.opacity = 0;   /**/ 
    }
});


const arrow = document.querySelector('#arrow'); /*on crée une constante avc l'id de l'image*/


const scrollKantity = -400;  /*on recup la quantitée de scroll la c 400px donc un peut plus que l'image*/
window.addEventListener('scroll', (event) => {
    const {top} = text.getBoundingClientRect();  
    if (top - window.innerHeight < scrollKantity) {
        arrow.style.opacity = 1;    /*on change l'opacitée de l'image quand on scroll 400px;*/ 

    } else {
        arrow.style.opacity = 0;   /**/ 
    }
});


function validateForm()                                    
{ 
    var nom = document.forms["myForm"]["nom"]; 
    var article = document.forms["myForm"]["article"];


     if (nom.value == "")                           
    {
        document.getElementById('errorname').innerHTML="An article subject is required"; 
        nom.focus(); 
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }
   
    

      if (article.value == "")                           
    {
        document.getElementById('errorarticle').innerHTML="Please write an article"; 
        article.focus(); 
        return false; 
    }else{
        document.getElementById('errorarticle').innerHTML="";  
    }

   
}