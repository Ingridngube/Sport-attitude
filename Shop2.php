<?php 
   session_start();
   include_once "con_dbb.php";

 ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/u-2.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Sport Attitude</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  <!-- font awesome style -->
  <link href="font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="responsive.css" rel="stylesheet" />

</head>


<body>

   <!-- header section strats -->
  <header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
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
              <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Boutique
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">
                A propos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">
                Blog
              </a>
            </li>
          </ul>
          <div class="user_option">
            <a href="panier.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"><span><?=array_sum($_SESSION['panier'])?></span></i>
            </a>
          </div>

          <div class="bienvenue">
            <i class="fa fa-user" aria-hidden="true"></i>
              <span >  <style type="text/css"> .bienvenue{color: white; margin: 15px 40px;
                padding: 0;}</style>
                <a>Bienvenue, <?= htmlspecialchars($_SESSION['Nom']) ?> !</a>
                <a href="logout.php">Se déconnecter</a>
              </span>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
 
   <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Equipement musculation
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/4.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  vélo d'intérieur
                </h6>
                <h6>
                  Prix
                  <span>
                    129.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 40px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images5.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Siège de Musculation
                </h6>
                <h6>
                  Prix
                  <span>
                    49.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images11.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Musculation Epaule
                </h6>
                <h6>
                  Prix
                  <span>
                    149.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New 
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images10.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Appareil Musculation
                </h6>
                <h6>
                  Prix
                  <span>
                    165.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images9.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Appareil pied
                </h6>
                <h6>
                  Price
                  <span>
                    84.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images8.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  vélo d'intérieur
                </h6>
                <h6>
                  Prix
                  <span>
                    111.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  20%
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images7.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    69.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        
         <div class="heading_container heading_center">
        <h2>
          Tenue de sport Homme
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/sporteq2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble football
                </h6>
                <h6>
                  Prix
                  <span>
                    49.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue3.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Haut longue manche
                </h6>
                <h6>
                  Prix
                  <span>
                    4.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue5.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble sport
                </h6>
                <h6>
                  Prix
                  <span>
                    10.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue6.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble culotte 
                </h6>
                <h6>
                  Prix
                  <span>
                    8.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue7.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble moullant
                </h6>
                <h6>
                  Prix
                  <span>
                    10.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue8.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    12.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue9.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble culotte et pantalon
                </h6>
                <h6>
                  Prix
                  <span>
                    15.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue11.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble culotte
                </h6>
                <h6>
                  Prix
                  <span>
                    10.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  10%
                </span>
              </div>
            </a>
          </div>
        </div>
       <div class="heading_container heading_center">
        <h2>
          Tenue sport femme
        </h2>
       </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue1.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    5.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble 3pièces
                </h6>
                <h6>
                  Prix
                  <span>
                    10.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue4.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble sport
                </h6>
                <h6>
                  Prix
                  <span>
                    6.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/imagebeta.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble 2pièces
                </h6>
                <h6>
                  Prix
                  <span>
                    8.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  10%
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue2.2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble 2pièces
                </h6>
                <h6>
                  Prix
                  <span>
                    8.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue2.1.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble body et collant
                </h6>
                <h6>
                  Prix
                  <span>
                    6.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/tenue16.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    5.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
     <div class="heading_container heading_center">
        <h2>
          Chaussure de sport
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Chaussure1.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure
                </h6>
                <h6>
                  Prix
                  <span>
                    10.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Chaussure2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure HOKA
                </h6>
                <h6>
                  Prix
                  <span>
                    6.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/chaussure3.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure 
                </h6>
                <h6>
                  Prix
                  <span>
                    10.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/chaussure4.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure ASCIS
                </h6>
                <h6>
                  Prix
                  <span>
                    8.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="#" class="id_article" style="margin-top: 30px;
  display: inline-block;
  padding: 5px 10px;
  background-color: #fd9c6b;
  color: #ffffff;
  border-radius: 5px;
  border: 1px solid #fd9c6b;
  -webkit-transition: all .2s;
  transition: all .2s;">Ajouter au panier</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/chaussure5.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure PUMA
                </h6>
                <h6>
                  Prix
                  <span>
                    15.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
         <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/chaussure6.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure ASCIS
                </h6>
                <h6>
                  Prix
                  <span>
                    8.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/chaussure7.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure ADIDAS
                </h6>
                <h6>
                  Prix
                  <span>
                    12.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/chaussure9.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure ADIDAS
                </h6>
                <h6>
                  Prix
                  <span>
                    25.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/chaussure10.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  chaussure 
                </h6>
                <h6>
                  Prix
                  <span>
                    18.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      </div>
             
      </div>
         <div class="heading_container heading_center">
        <h2>
          Accessoires GYM
        </h2>
      </div>
      <div class="row">
       <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images6.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    39.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/pilate1.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Appareil flexion
                </h6>
                <h6>
                  Prix
                  <span>
                    59.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/pilate2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Appareil tension
                </h6>
                <h6>
                  Prix
                  <span>
                    54.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/pilate3.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    29.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/pilate4.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Appareil souplesse
                </h6>
                <h6>
                  Prix
                  <span>
                    99.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/pilate5.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    25.000f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/pilate6.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Appareil
                </h6>
                <h6>
                  Price
                  <span>
                    49.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/images7.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ensemble
                </h6>
                <h6>
                  Prix
                  <span>
                    49.999f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end shop section -->

    <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row info_form_social_row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">

          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row info_main_row">
        <div class="col-md-6 col-lg-3">
          <div class="info_links">
            <h4>
              Menu
            </h4>
            <div class="info_links_menu">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="shop.php">Shop</a>
              <a href="blog.php">Blog</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_insta">
            <h4>
              Instagram
            </h4>
            <div class="insta_box">
              <div class="img-box">
                <img src="images/images9.jpeg" alt="">
              </div>
              <p>
                Appareil de musculation
              </p>
            </div>
            <div class="insta_box">
              <div class="img-box">
                <img src="images/tenue8.jpeg" alt="">
              </div>
              <p>
                Ensemble tenue sport homme
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_detail">
            <h4>
             A propos
            </h4>
            <p class="mb-0">
               Bienvenue sur Sport Attitude ! Nous sommes passionnés par le sport et dédiés à vous fournir le meilleur équipement pour vous aider à atteindre vos objectifs. Que vous soyez un athlète professionnel ou un amateur, nous avons tout ce qu'il vous faut, des vêtements aux accessoires.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h4>
            Contactez-nous
          </h4>
          <div class="info_contact">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Douala-cameroun
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +237 693011467
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
                sportattitude@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  
</body>

</html>