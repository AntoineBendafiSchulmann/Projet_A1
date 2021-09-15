<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="style/dashboard.css">
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
		<div class="menu1"><strong>Admin area</strong></div>
        <a href="index.php"><div class="menu2"><strong>Home</strong></div></a>
		</nav>

		
		<div id="modify_user" >




		<?php
		include("includes/config.php"); // On inclut la connexion à la base de données   
		?>
		

		<?php
    if ($_POST){

        if(isset($_POST['modifyUser'])) {
			$id = $_POST['id'];    //   erreur ya pas de changement sur les utilisateurs
            $donnees = array(
                'email' => $_POST['email'],
                'status' => $_POST['status'],
				'status' => $_POST['status'],
				'id' => $id
            );

            $Update = $pdo->prepare("UPDATE enregistrement_admin set email = :email, id = :id, status = :status WHERE id = :id");
            $Update->execute($donnees);
        }elseif(isset($_POST['deleteUser'])) 
        {
            $id = $_POST['id'];
            $UserDelete = $pdo->prepare("DELETE FROM enregistrement_admin WHERE id = '$id' ");
            $UserDelete->execute();
        }
        else
        {
        // gestion de la secu sql
        $_POST['email'] = addslashes($_POST['email']);
        // gestion de la secu html
        $_POST['email'] = htmlspecialchars($_POST['email']);
        // gestion hash du password
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // insertion Sql
        $bdd->exec("INSERT INTO enregistrement_admin (email, password, status) VALUES ('$_POST[email]', '$_POST[password]', 'user')");
        }

    }

    $request = $pdo->prepare("SELECT * FROM enregistrement_admin");
    $request->execute();
    $User_list = $request->fetchAll(PDO::FETCH_ASSOC);
    ?>

<table class="tableau">
          <h2 id="title_table">User management</h2> 
            <thead>
                <tr class="tbl" >
                    <th>Email</th>

                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            foreach($User_list as $User) {
        ?>
            <tr class="tableau_donnee">
                <form action="dashboard.php" method="POST">
                    <td>
                    <input type="hidden" name="id" value="<?= $User["id"]?> "></input>  
                    <input type="text" name="email" value="<?= $User["email"]?> "></td>
                    <td>
                    <select name="status" class="status">
                            <option value="admin" <?php if($User['status'] == 'admin') { 
                                echo 'selected'; } ?> > Admin </option>
                            <option value="user" <?php if($User['status'] == 'user') { 
                                echo 'selected'; } ?> > User </option>
                        </select>
                        </td>
                    <td><input type="submit" name='modifyUser' class="send-btn" value='Update'></td>
                    <td><input type="submit" name='deleteUser' class="del-btn" value='Suppress'></td>
                </form>
            </tr>
        <?php 
        }            
        ?>
            </tbody>
</table>
	
	
	
	
	
	
	
	
	
		</div>
		
		<div id="blog">

        <a id="blog" href="blog.php"><strong>-> Blog access as admin</strong></a>
        
        </div>
		
        <div id="manage_blog" >







        
        </div>



        <div id="contact">
        
        <?php

try {
  $database = new PDO('mysql:host=localhost;dbname=contact_form','root','');


 }catch (PDOExeption $erreur) {
  echo "erreur de connexion" . $erreur;
  die;
 }/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/



?>       
        
        
        
        
        
 </div>






		
		
		
		<div>


		<a id="disconnect" href="includes/déconnexion.php"><strong> X Logout</strong></a> <!-- le lien est relié a du code qui vas fermer la connexion    -->



		</div>

		<script src="javascript/dashboard.js">
				
	

			</script>
			
	</body>
</html>