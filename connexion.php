<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="style/connexion.css">
		<meta name="description" content="Ma description">
		<meta name="author"content="Bendafi-Schulmann Antoine">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"> <!-- pour installer le responsive pour adapter appareils mobiles -->

		
	</head>
	<body class="light"> <!-- corps de la page -->

		<div class="btn-toggle">Night</div>
		<header> <!-- haut de la page -->
		<h1>Pyke</h1>	
		</header>
		<nav> <!-- menu du site -->
		<div class="menu1"><strong>Registration</strong></div>
		<a href="index.php"><div class="menu2"><strong>Home</strong></div></a>
		<a href="galerie.php"><div class="menu2"><strong>Gallery</strong></div></a>
		<a href="histoire.php"><div class="menu2"><strong>History</strong></div></a>
        <a href="contact.php"><div class="menu2"><strong>Contact</strong></div></a>
		</nav>

		<section>
			
			<p class="title_form"><strong>Join the crew!</strong></p>

			<form name="myForm" onsubmit="return validateForm()" method="post">
         <table class="form-style">
            <tr>
               <td>
                  <label>
                  Your email address <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input id="email" type="email" name="email" class="long" placeholder="Email..."/>
                  <span class="error" id="erroremail"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                  Password <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="password" id="password" name="password" class="long field-textarea" placeholder="Password..." ></input>
                  <span class="error" id="errorpassword"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                  Repeat Password <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="password" id="repeatpassword" name="repeatpassword" class="long field-textarea" placeholder="Repeat password" ></input>
                  <span class="error" id="errorrepeatpassword"></span>
               </td>
            </tr>

            <tr>
 
               <td>
                  <input type="submit" name="submit" value="Register now">    
               </td>

            </tr>
         </table>





        <?php
      
      

       try {
            $database = new PDO('mysql:host=localhost;dbname=espace_admin','root','');
        
        
        }catch (PDOExeption $erreur) {
            echo "erreur de connexion" . $erreur;
            die;
        }/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/



        if(!empty($_POST["submit"])) {         /*lorsque submit est actionné  avec tout rempli tout est envoyé à la suite du code*/
         $email = $_POST["email"];              /*on crée les variables semblables aux cases de la base de donnée*/
         $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
         $repeat_password = password_hash($_POST["repeatpassword"], PASSWORD_DEFAULT); /*les mdp sont cryptés */
         
         
     
         $result = $database->prepare("INSERT INTO enregistrement_admin (email, password, repeat_password) VALUES ('" . $email. "', '" . $password. "','" . $repeat_password. "')");     /*transformer les names du form en infos qui sont dans la table de la base de donnée */
         $valider = $result->execute();
         /*la partie remplissage de la base de donnée qd le form est rempli est terminée */
         $_SESSION['id'] = $email;
         header('Location:espace_membre.php'); //renvoi à la page espace membre (page connexion)


         

     
       //manque un système pour voir sur un compte existe deja
     
     
     
     
     
     
      }
      
      ?>

		
   <a href="espace_membre.php"><div id="connexion_shortcut"><strong>-> Already an account, Log in!</strong></div></a>

   </section>






		<script src="javascript/connexion.js">
				
	

			</script>
			
	</body>
</html>