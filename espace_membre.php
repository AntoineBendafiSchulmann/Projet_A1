<!DOCTYPE html>
<html>
	<head>
		<title>espace_membre</title>
		<link rel="stylesheet" type="text/css" href="style/espace_membre.css">
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
		<div class="menu1"><strong>Log in</strong></div>
		<a href="index.php"><div class="menu2"><strong>Home</strong></div></a>
		<a href="galerie.php"><div class="menu2"><strong>Gallery</strong></div></a>
		<a href="histoire.php"><div class="menu2"><strong>History</strong></div></a>
      <a href="contact.php"><div class="menu2"><strong>Contact</strong></div></a>
		</nav>

		<section>
			
			<p class="title_form"><strong>Join the crew!</strong></p>

			<form name="myForm" onsubmit="return validateForm()" method="POST">
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
                  <input type="submit" name="Login" value="Log in">    
               </td>

            </tr>
         </table>


<!--ce formulaire serviras à se connecter + faire le droits administrateurs       -->


<?php


session_start();


include("includes/config.php"); // On inclut la connexion à la base de données    





if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
{

    $email = htmlspecialchars($_POST['email']); 
    $password = htmlspecialchars($_POST['password']);

    
    $email = strtolower($email); // email transformé en minuscule (si jamais ya des caps)
    
    // On regarde si l'utilisateur est inscrit dans la table utilisateurs
    $check = $pdo->prepare('SELECT  email, password, status FROM enregistrement_admin WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetchAll();
    $row = $check->rowCount();
    
    

    // Si row == 1 alors l'utilisateur existe
    if($row == 1)
    {

            // Si le mot de passe est le bon
            if(password_verify($password, $data[0]['password'])) {
            // On créer la session et on redirige sur user_interface.php car c pas un admin
            $_SESSION['status'] = $data[0]['status'];
            $_SESSION['user'] = $data[0]['email'];
            
            if(isset($_SESSION["status"]) && $_SESSION['status'] == 'admin') {
               header('Location: dashboard.php');
            } elseif(isset($_SESSION["user"]) && $_SESSION['user'] == 'user') { 
               header('Location: user_interface.php?Login_err=Password');
            }else header('Location: user_interface.php?Login_err=Email');
            
        
        
    }else('Location : espace_membre');
   
   } 

}  



      
      
      ?>

		</section>






		<script src="javascript/espace_membre.js">
				
	

			</script>
			
	</body>
</html>