$(function () {            /*c'est en lien avec la balise jquery du header*/

    $(".petite").click(function () {
        var SourcePetiteImage = $(this).attr('src');
        var SourceGrandeImage = SourcePetiteImage.replace("petites", "grandes");
        $(".grande").html("<img src='" + SourceGrandeImage + "'>");
        $(".grande").fadeIn("slow").css("display", "flex");
    });

    $(".grande").click(function () {
        $(".grande").fadeOut("fast");
    });

});     /*au clic l'mage s'agrandit et passe de class petite a grand , si l'utilisateur clique hors sa fait l'inverse , 
        le fond s'assombrit*/




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

