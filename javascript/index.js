    
				
				/*la frise en bas a gauche*/
					
					document.getElementById('cercle1').addEventListener('click', fonction1);
			function fonction1() {
				var first_date = document.getElementById('cercle1');
				var texte1 = document.getElementById('friseA');  //on declare la variable à partir de l'id du texte

				texte1.style.opacity = 1;  //on le fait apparaitre

				
				/*au clique sur le rond le texte apparait puis on le fait disparaitre*/
			}


				document.getElementById('cercle2').addEventListener('click', fonction2);
			function fonction2() {
				
				var first_date = document.getElementById('cercle2');
				var texte2 = document.getElementById('frise1');

				texte2.style.opacity = 1;
				/*au clique sur le rond le texte apparait puis on le fait disparaitre*/
			}




				document.getElementById('cercle3').addEventListener('click', fonction3);
			function fonction3() {
				

				var first_date = document.getElementById('cercle3');
				var texte3 = document.getElementById('frise2');

				texte3.style.opacity = 1;
				/*au clique sur le rond le texte apparait puis on le fait disparaitre*/
			}

				document.getElementById('cercle4').addEventListener('click', fonction4);
			function fonction4() {
				
				var first_date = document.getElementById('cercle4');
				var texte4 = document.getElementById('frise3');

				texte4.style.opacity = 1;
				/*au clique sur le rond le texte apparait puis on le fait disparaitre*/
			}

			/*pour faire fonctionner l'anim du menu burger du css*/

			const overlay = document.getElementById('overlay');
			const closeMenu = document.getElementById('close-menu');


			document.getElementById('open-menu') .addEventListener('click', function() {
   			 overlay.classList.add('show-menu');
			});

			document.getElementById('close-menu').addEventListener('click', function(){
   			 overlay.classList.remove('show-menu')
			});

/*script pour le lightmode*/


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



