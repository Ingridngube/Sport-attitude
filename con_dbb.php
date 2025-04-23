<?php
//connexio à la base de donnée
$con= mysqli_connect("localhost:3308","root","","panier");
//verifier la connexion
if(!$con) die("Erreur:".mysqli_connect_error());


?>