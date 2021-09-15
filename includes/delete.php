<?php
include("connect.php");
$id = $_GET["id"];   /*recup l'id ds l'url*/
$pdo->exec("DELETE FROM commentaires WHERE id = '$id'"); //suppr la ligne concernée avc l'id
header('Location:../galerie.php'); //renvoi à la page 