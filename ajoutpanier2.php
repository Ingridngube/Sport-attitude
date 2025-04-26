<?php
  //inclure la page de connexion
  include_once "con_dbb.php";
  //verifier qu'une session existe
  if (!isset($_SESSION)) {
      //Si non demarrer la session
    session_start();
  }//créer un session

  if (!isset($_SESSION["panier"])){
    //s'il n'existe pas une session on crée et on mets un tableau à l'intérieur
    $_SESSION["panier"] = array();
  }
   //récupere de l'id dans le lien
    if(isset($_GET["id"])){// si un id a été envoyé alors:
    $id = $_GET["id"];
    //verifier grace à l'id si le produit existe dans la base de donnée
    $produit = mysqli_query($con, "SELECT * FROM articles WHERE id =$id");
    if(empty(mysqli_fetch_assoc($produit))){
        //si ce produit n'existe pas
        die("Ce produit n'existe pas");
    }
  //ajouter un produit dans le panier
    if(isset($_SESSION["panier"][$id])){//si le produit est déjà dans le panier
        $_SESSION["panier"][$id]++;//Représente la quantité
    }else{
        //Si non on ajoute le produit
        $_SESSION["panier"][$id]= 1;
    } 

    header("Location: shop22.php");
}
?>