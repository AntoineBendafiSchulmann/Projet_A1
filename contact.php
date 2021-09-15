<!DOCTYPE html>
<html>
	<head>
		<title>Page Contact</title>
		<head> <!-- Entete du document -->
	<title>Mon Projet d'axe Page 1</title>
	<link rel="stylesheet" type="text/css" href="style/contact.css">
	<meta name="description" content="Ma description">
	<meta name="author"content="Bendafi-Schulmann Antoine">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1"> <!-- pour installer le responsive pour adapter appareils mobiles -->
	</head>
   <body class="light"> <!-- corps de la page -->

      <div class="btn-toggle">Night</div>

		<header> <!-- haut de la page -->
		<h1>Pyke</h1>	
      <?php
		session_start();

		if(isset($_SESSION["status"]) && $_SESSION['status'] == 'admin') {
			?><a href="dashboard.php"><div class="user_connected"><strong>Logged in as <?php echo $_SESSION['user'] ?></strong></div></a><?php
		}elseif(isset($_SESSION["user"])) {
			?><a href="user_interface.php"><div class="user_connected"><strong>Logged in as <?php echo $_SESSION['user'] ?></strong></div></a><?php 
		}else{ 
			?><a href="connexion.php"><div class="connection"><strong>
         Login / Register</strong></div></a><?php
		}
		
		?>
		</header>
		<nav> <!-- menu du site -->
			<div id="menu"></div>
			<div class="menu1"><strong>Contact</strong></div>
			<a href="index.php"><div class="menu2"><strong>
Home</strong></div></a>
         <a href="histoire.php"><div class="menu3"><strong>
History</strong></div></a>
         <a href="galerie.php"><div class="menu4"><strong>
Gallery</strong></div></a>
		</nav>
		<section>
			<!--ligne du lien vers base de donnée methode post en php!-->
		 <form name="myForm" onsubmit="return validateForm()" method="post">
         <table class="form-style">
            <tr>
               <td>
                  <label>
                     Votre nom <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="text" name="name" class="long" placeholder="Name..."/>
                  <span class="error" id="errorname"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Votre adresse e-mail <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="email" name="email" class="long" placeholder="Email..."/>
                  <span class="error" id="erroremail"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Sujet  <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <textarea name="subject" class="subject" placeholder="Your request..."></textarea>
                  <span class="error" id="errorsubject"></span>
               </td>
            </tr>
             <tr>
               <td>
                  <label>
                     Message <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <textarea name="message" class="long field-textarea" placeholder="Message..." ></textarea>
                  <span class="error" id="errormessage"></span>
               </td>
            </tr>
            <tr>
 
               <td>
                  <input type="submit" name="submit" value="To send">      
                  <input type="reset" value="
Reset"> 
               </td>

            </tr>
         </table>
         
   <?php

 try {
   $database = new PDO('mysql:host=localhost;dbname=contact_form','root','');


  }catch (PDOExeption $erreur) {
   echo "erreur de connexion" . $erreur;
   die;
  }/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/

  if(!empty($_POST["submit"])) {         /*lorsque submit est actionné  avec tout rempli tout est envoyé à la suite du code*/
    $name = $_POST["name"];              /*on crée les variables semblables aux cases de la base de donnée*/
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    

    $result = $database->prepare("INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");     /*transformer les names du form en infos qui sont dans la table de la base de donnée */
    $valider = $result->execute();
    ?><p> <?php echo 'Thank you for the info!'?></p> <?php
/*partie réaffichage*/

}



   
?>

      </form>


		<script src="javascript/contact.js">


		</script>

	</body>
</html>