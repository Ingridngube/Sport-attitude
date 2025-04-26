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
                <a href="index2.php">Se déconnecter</a>
              </span>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
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
              <a href="">
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
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

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
                <img src="images/p2.png" alt="">
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
              Chez Sport Attitude, notre mission est simple : rendre le sport accessible à tous. Nous croyons que chaque personne mérite de se sentir bien dans sa peau et d'atteindre ses performances maximales. C'est pourquoi nous proposons une sélection rigoureuse d'équipements de qualité, adaptés à tous les niveaux.
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
                Douala-Cameroun
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
        &copy; <span id="displayYear"></span> All Rights Reserved By NGUBE
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