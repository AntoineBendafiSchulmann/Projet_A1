<?php

session_start(); // demarrage de la session en cour
session_unset(); //purge la session
session_destroy(); // on détruit la/les session(s)
header('Location:../index.php'); // On redirige
die();