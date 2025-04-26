<?php
session_start();
include_once "con_dbb.php";
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
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
  <header class="header_section">
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
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="images/healthy-bg.jpg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-9 col-lg-8">
        <div class="detail-box">
          <h1>
            Meilleurs accessoires de sport
            <br> Collection
          </h1>
          <p>
            Atteignez vos objectifs sportifs avec des équipements qui font la différence.
            Votre passion, notre équipement: performez comme jamais!
          </p>
          <div>
            <a href="Shop2.php" class="slider-link">
              Shop Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Dernier produit
        </h2>
      </div>
      <div class="row">
                      <?php
      //inclure la page de connexion
      include_once "con_dbb.php";
      //afficher la liste des produits
      $req= mysqli_query($con, "SELECT * FROM articles");
      while($row=mysqli_fetch_assoc($req)){
      ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="<?=$row["miniature"]?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  <?=$row["nom"]?>
                </h6>
                <h6>
                  Prix
                  <span>
                    <?=$row["prix"]?>f
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
               <div class="content" >
                <a href="ajoutpanier2.php?id=<?=$row["id"]?>" class="id_product" style="margin-top: 30px; margin-bottom: 5px;
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
         <?php } ?>
      <div class="btn-box">
        <a href="Shop2.php">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section  ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/fitness.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                A propos
              </h2>
            </div>
            <p>
              Bienvenue sur Sport Attitude ! Nous sommes passionnés par le sport et dédiés à vous fournir le meilleur équipement pour vous aider à atteindre vos objectifs. Que vous soyez un athlète professionnel ou un amateur, nous avons tout ce qu'il vous faut, des vêtements aux accessoires.
            </p>
            <a href="about2.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- offer section -->

  <section class="offer_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="box offer-box1">
            <img src="images/imagebeta.jpg" alt="">
            <div class="detail-box">
              <h2>
                Réduction 10% 
              </h2>
              <a href="Shop22.php">
                Shop Now
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5 px-0">
          <div class="box offer-box2">
            <img src="images/tenue11.jpeg" alt="">
            <div class="detail-box">
              <h2>
                Réduction 10% 
              </h2>
              <a href="Shop22.php">
                Shop Now
              </a>
            </div>
          </div>
          <div class="box offer-box3">
            <img src="images/images8.jpeg" alt="">
            <div class="detail-box">
              <h2>
                Réduction 20%
              </h2>
              <a href="Shop22.php">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- blog section -->

  <section class="blog_section ">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest From Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/sport1.avif" alt="">
              <h4 class="blog_date">
                14 <br>
                July
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Excellente expérience d'achat 
              </h5>
              <p>
                J'ai récemment acheté une paire de chaussures de randonnée et je suis très satisfait de mon expérience. Le site est facile à naviguer, et j'ai pu trouver rapidement ce que je cherchais. La livraison a été rapide, et les chaussures sont conformes à la description. Je recommande vivement ce site pour tous vos besoins en équipement sportif ! 
              </p>
              <a href="blog2.php">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/sport2.jpeg" alt="">
              <h4 class="blog_date">
                15 <br>
                July
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                 Site intuitif, mais manque d'informations
              </h5>
              <p>
                 Le site est très intuitif et agréable à utiliser. J'ai trouvé facilement les équipements dont j'avais besoin, mais j'aurais aimé avoir plus d'informations sur certaines spécifications des produits. Par exemple, des vidéos explicatives ou des avis d'autres clients pourraient être utiles.
              </p>
              <a href="blog2.php">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Samantha Jonas
                      </h6>
                    </div>
                    <p>
                      J'ai récemment acheté une paire de chaussures de course sur Sport Attitude et je suis ravi de mon achat ! La livraison a été rapide et le produit est de très bonne qualité. Je recommande vivement ce site à tous les passionnés de sport !
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client2.jpeg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                         Bonnie Sarah
                      </h6>
                    </div>
                    <p>
                      J'ai récemment acheté une paire de chaussures de course sur Sport Attitude et je suis ravi de mon achat ! La livraison a été rapide et le produit est de très bonne qualité. Je recommande vivement ce site à tous les passionnés de sport !
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client3.jpeg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Klaus Mickaelson
                      </h6>
                    </div>
                    <p>
                      Le service client est exceptionnel. J'avais une question sur un produit et j'ai reçu une réponse rapide et utile. Les équipements sont variés et les prix sont compétitifs. Je reviendrai certainement 
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

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
              <a href="index2.php">Home</a>
              <a href="about2.php">About</a>
              <a href="shop2.php">Shop</a>
              <a href="blog2.php">Blog</a>
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


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">NGUBE INGRID CAROLE</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>

</html>