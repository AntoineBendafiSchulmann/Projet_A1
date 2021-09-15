<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="style/blog.css">
		<meta name="description" content="Ma description">
		<meta name="author"content="Bendafi-Schulmann Antoine">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"> <!-- pour installer le responsive pour adapter appareils mobiles -->
	
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="style/summernote-lite.css" rel="stylesheet">
    <script src="javascript/summernote-lite.js"></script>
	

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
			?><a href="connexion.php"><div class="connection"><strong>Login / Register</strong></div></a><?php
		}
		
		?>


		</header>
		<nav> <!-- menu du site -->
		<div class="menu1"><strong>Blog</strong></div>
        <a href="index.php"><div class="menu2"><strong>Home</strong></div></a>
		</nav>

		<section class="background">

        <img id="illustr_background" src="img/img_background.jpg" alt="affiche promotionnelle">

        <h2 id='titre_page'>OUR RECENT ARTICLES</h2>
		<h3 id='arrow'><strong>↓</strong></h3>
        </section>
        

		<div id="articles">

		<?php 
	
	

		if(isset($_SESSION["status"]) && $_SESSION['status'] == 'admin') {
?>
	<?php
	 try {
		$pdo = new PDO('mysql:host=localhost;dbname=blog','root','');
	
	
	}catch (PDOExeption $erreur) {
		echo "erreur de connexion" . $erreur;
		die;
	}/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/
	
	
	
	if(isset($_POST['submit_article'])) {
		
		$data = [ 
			'title' => htmlspecialchars($_POST['nom']),
			'article' => htmlspecialchars($_POST['article']),
			'img_link' => 'upload/img/' . $_FILES['image'],
			'img_file' => $_FILES['image']['tmp_name']
		];

		move_uploaded_file($data['img_file'], $data['img_link']);

	}
	?>	

		<div class="wisiwigg" >
			
			</div>

		<div>
			<h4>Write article/Choose image</h4>
		</div>


        <form   class="form-style" name="myForm" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
   <input type="text" id="nom" name="nom" placeholder="Name of your article" /><br />
   <span class="error" id="errorname"></span>
   <textarea id="summernote" type='article' name="article" id="article" placeholder="Write your article"></textarea><br />
   <span class="error" id="errorarticle"></span>
   <div>
	   <label class="add_img" for="photo"> choose image</label><br>
	   <input class="add_img" type="file" accept="image/png, image/jpeg" name="image">

   </div>
   <input type="submit" id="posterarticle" value="Publish my article" name="submit_article" />
		
		</form>
<?php }elseif(isset($_SESSION["user"])) {
	
	
	?>

        <form class="form-style "name="myForm" onsubmit="return validateForm()" method="POST" >
   <input type="text" id="nom" name="nom" placeholder="Name of your article" /><br />
   <span class="error" id="errorname"></span>
   <textarea type='article' name="article" id="article" placeholder="Write your article"></textarea><br />
   <span class="error" id="errorarticle"></span>
   <input type="submit" id="posterarticle" value="Publish my article" name="submit_article" />
		
	
<?php	
	
}?>

	<?php  
	  try {
		$pdo = new PDO('mysql:host=localhost;dbname=blog','root','');
	
	
	}catch (PDOExeption $erreur) {
		echo "erreur de connexion" . $erreur;
		die;
	}/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/


		if(!empty($_POST["submit_article"])) {         /*lorsque submit est actionné  avec tout rempli tout est envoyé à la suite du code*/
    $nom = $_POST["nom"];              /*on crée les variables semblables aux cases de la base de donnée*/
    $article = $_POST["article"];
    

    $result = $pdo->prepare("INSERT INTO systeme_blog (nom, article) VALUES ('" . $nom. "', '" . $article. "')");     /*transformer les names du form en infos qui sont dans la table de la base de donnée */
    $valider = $result->execute();
    ?><p id='success_message'> <?php echo 'published article'?></p> <?php


	/*partie réaffichage*/


}






?>    
        
    <?php    if(isset($_SESSION["status"]) && $_SESSION['status'] == 'admin') {
		?>
        
        <?php

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=blog','root','');
        
        
        }catch (PDOExeption $erreur) {
            echo "erreur de connexion" . $erreur;
            die;
        }/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/

		$print = $pdo -> query("SELECT * FROM systeme_blog ORDER BY id_article DESC");
		
			while($a =$print->fetch()) { ?>
			<p><strong><?php echo $a['nom']?></strong></p>
			<p id="article_organisation"><img id="illustr_article" src="img/illustr_article.jpg" alt="illustr"><?php echo $a['article']?></p><a id="links" href=<?php  echo $a['link']; ?> target="_blank">->read in full</a>
			
			
			
		<?php }

        ?>

	<?php	
		}elseif(isset($_SESSION["user"])) {
	?>

<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=blog','root','');


}catch (PDOExeption $erreur) {
	echo "erreur de connexion" . $erreur;
	die;
}/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/

$print = $pdo -> query("SELECT * FROM systeme_blog ORDER BY id_article DESC");

	while($a =$print->fetch()) { ?>
	<p><strong><?php echo $a['nom']?></strong></p>
	<p id="article_organisation"><img id="illustr_article" src="img/illustr_article.jpg" alt="illustr"><?php echo $a['article']?></p><a id="links" href=<?php  echo $a['link']; ?> target="_blank">->read in full</a>
	
	
	
<?php }

?>


<?php	
		}
	?>


        </div>
        
    
        

        





		
		
		<script>
     	$('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

	  $(document).ready(function() {
 	 $('#summernote').summernote();
	});

	 </script>
<script src="javascript/blog.js">	
</script>

			
			
			
	</body>
</html>