<?php 
   session_start();
   include_once "con_dbb.php";

   //supprimer
   if(isset($_GET["del"])){
    $id_del = $_GET["del"];
//suppression
    unset($_SESSION["panier"][$id_del]);

   }

 ?>
 <!DOCTYPE html>
    <html>
        <head>

            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>Mon Panier</title>
            <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
            <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
            <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  <!-- font awesome style -->
            <link href="font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
            <link href="style.css" rel="stylesheet" />
  <!-- responsive style -->
            <link href="responsive.css" rel="stylesheet" />
            <link href="style-panier.css" rel="stylesheet" />
            
      
        </head>

        <body className='panier'>
     <header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index2.php">
          <span>
            Sport Attitude
          </span>
        </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <style type="text/css">
        #navbarSupportedContent {
  width: 100%;
  background-color:;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 20px 0;
  border-radius: 15px 15px 0 0;
}

#navbarSupportedContent.innerpage_navbar {
  background-color: black;
  border-radius: 10px;
  -webkit-box-shadow: 0 0 3px 0 rgba(248, 241, 241, 0.966);
          box-shadow: 0 0 3px 0 rgba(235, 233, 233, 0.904);
}

#navbarSupportedContent.innerpage_navbar .nav-item.active .nav-link {
  background-color: black;
}

#navbarSupportedContent .navbar-nav .nav-link {
  padding: 5px 25px;
  color: white;
  text-align: center;
  text-transform: uppercase;
  border-radius: 5px;
}

#navbarSupportedContent .nav-item.active .nav-link {
  background-color: ;
}

a,
a:hover,
a:focus {
  text-decoration: none;
}

a:hover,
a:focus {
  color: initial;
}

.btn,
.btn:focus {
  outline: none !important;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.navbar-brand {
  margin: 15px 20px;
  padding: 0;
}
color: #007bff;
    text-decoration: none;
    background-color: transparent;
}

}</style>
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index2.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop22.php">
                Boutique
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about2.php">
                A propos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog2.php">
                Blog
              </a>
            </li>
          </ul>
          <div class="user_option">
            <a href="panier2.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"><span><?=array_sum($_SESSION['panier'])?></span></i>
            </a>
          </div>

          <div class="bienvenue">
            <i class="fa fa-user" aria-hidden="true"></i>
              <span >  <style type="text/css"> .bienvenue{color: white; margin: 15px 40px;
                padding: 0;}</style>
                <a>Bienvenue, Aucun compte !</a>
                <a href="inscription.php">Se connecter</a>
              </span>
          </div>
        </div>
      </nav>
    </div>
  </header>
     <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Produit</th>
                                    <th scope="col" width="120">Quantité</th>
                                    <th scope="col" width="120">Prix</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>

                            <tbody>
                                 <?php
                                 $total=0;
                                 $reduction = 0;
                                 $totalAvecReduction = 0;
                                 // Vérifier si un code promo a été soumis
if (isset($_GET['code_promo'])) {
    $code_promo = strtoupper(trim($_GET['code_promo']));

    if ($code_promo === 'BIENVENUE25') {
        $_SESSION['code_promo'] = 'BIENVENUE25';
        $messagePromo = "✅ Code promo appliqué avec succès !";
    } else {
        unset($_SESSION['code_promo']);
        $messagePromo = "❌ Code promo invalide.";
    }
}


                               //liste des produits
                               //récuperer les clés du tableau session
                            $ids = array_keys($_SESSION["panier"]);
                            //s'il n'ya aucune clé dans le tableau
                            if(empty($ids)){
                                echo "Votre panier est vide";
                            }else {
                                //si oui
                            $articles= mysqli_query($con, "SELECT * FROM articles WHERE id IN (".implode(",", $ids).")");
                                //liste des produits avec foreach
                               foreach($articles as $produit):
                                //calculer le total et additionner
                                $total= $total + $produit["prix"] * $_SESSION["panier"][$produit["id"]];

                                // Appliquer la réduction si le code est encore en session
if (isset($_SESSION['code_promo']) AND $_SESSION['code_promo'] === 'BIENVENUE25') {
    $reduction = $total * 0.25;
}

$totalAvecReduction = $total - $reduction;
                         
                            ?>

                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="<?=$produit["miniature"]?>" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?=$produit["nom"]?> 
                                            </a>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td><?=$_SESSION["panier"][$produit["id"]]?> </td> 
                                    <td>
                                        <div class="price-wrap"> <var class="Prix"><?=$produit["prix"]?>f</var> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="panier2.php?del=<?=$produit["id"]?>" class="btn btn-light" data-abc="true"> supprimer</a> </td>
                                </tr>
                                </tbody>
                                 <?php endforeach ;} ?> 

                             </table>
                          </div>
                      </div>
                  </aside>
              

            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <label>As tu un coupon?</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="code_promo" placeholder="Coupon code"><?= isset($_SESSION['code_promo']) ? $_SESSION['code_promo'] : '' ?> <span class="input-group-append"> <button type="submit" class="btn btn-primary btn-apply coupon">Appliquer</button> </span> </div>
                            </div>
                             <?php if (isset($messagePromo)) { echo "<small>$messagePromo</small>"; } ?>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total prix:</dt>
                            <dd class="text-right ml-3"><?=$total?>f</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Reduction:</dt>
                            <dd class="text-right text-danger ml-3">-<?= number_format($reduction, 0, ',', ' ') ?> f </dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong><?= number_format($totalAvecReduction, 0, ',', ' ') ?>f</strong></dd>
                        </dl>
                        
                        <hr> <a href="inscription.php" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Achat </a> <a href="shop22.php" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continuer Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                               <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="js/bootstrap.css"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
                            
 </body>
 </html>