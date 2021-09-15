<?php


try {
            $pdo = new PDO('mysql:host=localhost;dbname=blog','root','');
        
        
        }catch (PDOExeption $erreur) {
            echo "erreur de connexion" . $erreur;
            die;
        }/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/