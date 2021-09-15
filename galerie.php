<!DOCTYPE html>
	<html>
	<head>
	<title>Galerie d'image</title>
	<link rel="stylesheet" type="text/css" href="style/galerie.css">
	<meta name="description" content="Ma description">
	<meta name="author"content="Bendafi-Schulmann Antoine">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1"> <!-- pour installer le responsive pour adapter appareils mobiles -->
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	
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
			<a href="index.php"><div class="menu2"><strong>Home</strong></div></a>
			<div class="menu1"><strong>Image gallery</strong></div>
			<a href="histoire.php"><div class="menu2"><strong>History</strong></div></a>
             <a href="contact.php"><div class="menu2"><strong>Contact</strong></div></a>
			
		</nav>

		<section>
		<img src="img/chibi.png" title="chibi" id="image1" alt="chibi" class="petite">
		<img src="img/detail-couteau.jpg" title="detail couteau" id="image" alt="detail harpon" class="petite">
		<img src="img/detail-vetements.jpg" title="detail-vetements" id="image" alt="detail vetements" class="petite">

		
		</section>

		<section id="img2">
			<img src="img/concept-art1.jpg" title="concept-art"  id="image2" alt="concept art" class="petite">
			<img src="img/modele-3d.jpg" title="modele 3d" id="image3" alt="modele 3d" class="petite">
			<img id="fanart" src="img/fanart.jpg" title="fanart" id="image4" alt="fanart" class="petite">
		</section>

		<section id="img3">
			<img src="img/skin1.jpg" title="skin spectre des sables" id="image5" alt="sandwraith" class="petite">
			<img src="img/skin2.jpg" title="skin lune de sang"  id="image6" alt="bloodmoon" class="petite">
			<img src="img/skin3.jpg" title="skin projet"  data-tags="image7" alt="project" class="petite">
		</section>
		<section id="img4">
			<img src="img/skin4.jpg" title="skin rose noire"  id="image8" alt="blackrose" class="petite">
			<img src="img/ruinedking.jpg" title="pyke est de la partie dans ruined king" id="image9" alt="pyke-ruined-king" class="petite">
			<img src="img/death.jpg" title="pyke étais le plus habile, cela lui couteras la vie" id="image" alt="death" class="petite">
		</section>
		<section id="img5">
			<img src="img/hmmm.jpg" title="frustrant pour les adversaires mais jouissif"  id="memes1" alt="plaisirultime" class="petite">
			<img src="img/atm.png" title="Pyke n'est pas ingrat et partage l'or" id="memes2" alt="pykeledistributeur" class="petite">
			<img src="img/leaguepartner.png" title="chromas obtenable uniquement avec le league partner"  id="memes3" alt="leaguepartner" class="petite">
			<div class="grande">
				
			</div>
<button id="filtre1">images</button>
<button id="filtre2">memes</button>
<button id="filtre3">See everything</button>
		</section>



<div id="comm">
	



<h1 id="commentaire"> Comments area</h1>
<form method="POST" >
   <input type="text" id="pseudo" name="pseudo" placeholder="
Your username" /><br />
   <textarea name="commentaire" id="message" placeholder="your commentary..."></textarea><br />
   <input type="submit" id="postercomm" value="Poster mon commentaire" name="submit_commentaire" />

</form>

 

	<!-- le but du code serait d'envoyer le pseudo et le comm à la base de donnée espace_commentaires -->


<?php
include("includes/connect.php");



// verification 
//print_r($pdo);   

// si le form valide le form 
if ($_POST){

    // je gére les ' pour pas tout casser 
    $_POST['pseudo'] = addslashes($_POST['pseudo']);
    $_POST['commentaire'] = addslashes($_POST['commentaire']);
    
    
    //envoie des info 
    $pdo->exec("INSERT INTO commentaires (pseudo, commentaire, date_heure_message) VALUE ('$_POST[pseudo]', '$_POST[commentaire]', NOW())");
}

if(isset($_SESSION["status"]) && $_SESSION['status'] == 'admin') {


$r = $pdo->query('SELECT * FROM commentaires ORDER BY date_heure_message DESC');     //on peut faire des vardump() pr voir les erreurs à une ligne présence  
while($commentaire = $r->fetch(PDO::FETCH_ASSOC)) {
	$delete_comment = $commentaire['id']; /*recup l'id de la bdd*/ //envoi à delete.php 
	echo "<p class='commentary'>" . $commentaire['pseudo'] . " : " . $commentaire['commentaire'] . "- écrit le " . $commentaire['date_heure_message'] . ' ' . "<a class='button_delete' href='includes/delete.php?id=$delete_comment'>&times</a>" . '<br></p'; //met l'id de la ligne dans la barre de recherche avc le lien
}  

}else{

$r = $pdo->query('SELECT * FROM commentaires ORDER BY date_heure_message DESC');     //on peut faire des vardump() pr voir les erreurs à une ligne présence  
while($commentaire = $r->fetch(PDO::FETCH_ASSOC)) {
	$delete_comment = $commentaire['id']; /*recup l'id de la bdd*/ //envoi à delete.php 
	echo "<p class='commentary'>" . $commentaire['pseudo'] . " : " . $commentaire['commentaire'] . "- écrit le " . $commentaire['date_heure_message'] . ' '  . '<br></p'; //met l'id de la ligne dans la barre de recherche avc le lien
}  


}

?>





</div>








</div>



		
			


			<script src="javascript/galerie.js">
				
	

			</script>

			

		<footer></footer> <!-- pied de la page -->
</html>


