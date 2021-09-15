<?php

try {
  $database = new PDO('mysql:host=localhost;dbname=contact_form','root','');


 }catch (PDOExeption $erreur) {
  echo "erreur de connexion" . $erreur;
  die;
 }/*connexion base de donnée contact_form ; + erreur si $connexion marche pas*/