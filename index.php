<!DOCTYPE html>
<html>
	<head> <!-- Entete du document -->
	<title>Mon Projet d'axe Page 1</title>
	<link rel="stylesheet" type="text/css" href="style/accueil.css">
	<script type="text/javascript" src="index.js"></script>
	<meta name="description" content="Ma description">
	<meta name="author"content="Bendafi-Schulmann Antoine">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1"> <!-- pour installer le responsive pour adapter appareils mobiles -->
	</head>
	<body class="light"> <!-- corps de la page -->

		<div class="btn-toggle">Night</div>
		
		<header class="dark"> <!-- haut de la page -->
		<h1>Pyke</h1>

		
		
		<?php
		session_start();

		if(isset($_SESSION["status"]) && $_SESSION['status'] == 'admin') {
			?><a href="dashboard.php"><div class="user_connected"><strong>Logged in as <?php echo $_SESSION['user'] ?></strong></div></a><?php
		}elseif(isset($_SESSION["user"])) {
			?><a href="user_interface.php"><div class="user_connected"><strong>Logged in as <?php echo $_SESSION['user'] ?></strong></div></a><?php 
		}else{ 
			?><a href="connexion.php"><div class="connection"><strong>Login / Register</strong></div></a><?php
		}
		
		?>

		
		


		
		<!-- si $_SESSION est up sa change  -->

		</header>
		<nav id="overlay"> <!-- menu du site -->
			<div id="menu"></div>
			<a href="histoire.php"><div class="menu2"><strong>History</strong></div></a>
			<a href="galerie.php"><div class="menu2"><strong>Image gallery</strong></div></a>
			
			<a href=""><div class="menu1"><strong>Guide</strong></div></a>
			
			<a href="contact.php"><div class="menu2"><strong>Contact</strong></div></a>

			<img src="img/close-button.png" alt="menu" class="close-button"  id="close-menu">
			
       		 <img src="img/burger-menu.png" alt="menu" class="menu-btn" id="open-menu"> 
      		 <ul>
            <li> <!-- les blanks servent à faire que les pages se chargent dans un nouvel onglet-->
                <a href="https://euw.op.gg/champion/pyke/statistics/support/rune" target="_blank">Runes</a>
                <span>Discover the runes of the moment</span>
            </li>

            <li>
                <a href="https://euw.op.gg/champion/pyke/statistics/support/item" target="_blank">Items</a>
                <span>Discover the best items</span>
            </li>

            <li>
                <a href="https://app.mobalytics.gg/lol/champions/pyke/combos" target="_blank">Combos</a>
                <span>Order of spells to maximize damage</span>
            </li>

            <li>
                <a href="https://euw.op.gg/champion/pyke/statistics/support/matchup" target="_blank">Matchups</a>
                <span>Screw-to-screw guide</span>
            </li>
        </ul>
         
       
		</nav>
		<section class="dark"><!-- section de la page -->
			<img id="pyke" src="img/pyke.jpg" title="Illustration du champion" alt="illustration du champion">

			<p>Renowned harpooner of the Slaughter Docks of Bilgewater, Pyke should have been killed in the belly of a huge sea creature… and yet he returned. Now he roams the dark alleys of his former home port, using his supernatural gifts to brutally assassinate the wealthy exploiters of the people. Bilgewater, the town of monster hunters, has become a monster's hunting ground.</p>

			<h2>"There is place for everyone <br> at the bottom of the sea."</h2>
		</section>
		<div class="dark"> <!-- pied de la page -->
			<div id="friseA" class="visible">
				<h3>season 2017</h3>
				<h4 id='description1'>teaser of the character on the roadmap</h4>	
			</div>
			<div id="frise1" class="visible">
				<h3>season 2018</h3>
				<h4 id='description2'>the champion is released on May 30</h4>		
			</div>
			<div id="frise2" class="visible">
				<h3>season 2019</h3>
				<h4 id='description3'>pyke is everywhere</h4>		
			</div>
			<div id="frise3" class="visible">
				<h3>season 2020</h3>
				<h4 id='description4'>pyke has found its place in supp / mid</h4>		
			</div>  <!-- a animer x4 en js -->

			<div class="timeline">
			<div id="carre"></div>
			</div>
			<div id="cercle1"><h7 id="date1"><strong>2017</strong></h7></div>
			<div id="cercle2"><h7 id="date2"><strong>2018</strong></h7></div>
			<div id="cercle3"><h7 id="date3"><strong>2019</strong></h7></div>
			<div id="cercle4"><h7 id="date4"><strong>2020</strong></h7></div>

			<div id="triangle"></div>

			

			<script src="javascript/index.js">
				
	

			</script>
			
		</div>
		<footer>


		<h4 id="credits">
		
		"™ & © 2021 Riot Games, Inc. League of Legends and all related logos, characters, names and distinctive likenesses thereof are exclusive property of Riot Games, Inc. All Rights Reserved."
		
		</h4>


		</footer>
	</body>
</html>