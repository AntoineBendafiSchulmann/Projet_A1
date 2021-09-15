<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="style/user_interface.css">
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
		<div class="menu1"><strong>My Account</strong></div>
        <a href="index.php"><div class="menu2"><strong>Home</strong></div></a>
		</nav>

        <div>
        <?php  
		

		session_start();

		?><h5 id="identifiant">Logged in as <?php echo $_SESSION['user'];?></h5>
		
		
		
		
		
        <img id="user_icon" src="img/user_icon.png"  alt="icone utilisateur">
        <a id="blog" href="blog.php"><strong>->click here to access the blog</strong></a>
        
        </div>
		

        <div>


        <a id="disconnect" href="includes/déconnexion.php"><strong>X Logout</strong></a> <!-- le lien est relié a du code qui vas fermer la connexion    -->



        </div>





	

		<script src="javascript/user_interface.js">
				
	

			</script>
			
	</body>
</html>