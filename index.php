<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> -->
    <title>www.joyalestore.com</title>
  </head>
  <body>
    <header>
    <div class="header_info">
        <div class="info_text">
          <div class="block_content">
            <img  src="img/ico_customer_service.png"  alt=""  width="35"  height="35"    />
            <p>
              Service client au : <a href="tel:0649549419">06 49 54 94 19</a>
            </p>
          </div>
          <div class="block_content">
            <img src="img/ico_shipping.png" width="35" height="35" />
            <p style="text-align: center">
              Livraison Mondial Relay offerte à partir de 100€
            </p>
          </div>
          <div class="block_content">
            <img src="img/ico_click_collect.png" width="35" height="35" />
            <p style="text-align: right">
              Click &amp; Collect - La Grande Motte
            </p> 
          </div>
        </div>
        <div class="leo-fly-cart-icon-wrapper">
          <a
            href="javascript:void(0)"
            class="leo-fly-cart-icon"><i class="shopping-cart fa fa-shopping-cart"></i
          ></a>
          <span class="leo-fly-cart-total">0</span>
        </div>
      </div>
      <div class="header_nav">
        <form method="get" action="https://www.joyalestore.com/recherche" class="popup-content">
          <input type="hidden" name="controller" value="search" />
          <input type="text" name="s" value="" placeholder="Faire une recherche dans notre catalogue"
            aria-label="Search"
          />
        </form>
        <div class="nav_nav">
          <div class="compte">
            <div class="compte_list">
              <i class="icon fa fa-user"></i>
              <h5>MOM COMPTE</h5>
              <i class="icon-arrow-down fa fa-sort-down"></i>
            </div>
            <ul class="mon_compte">
              <li>
                <a href="#"><i class="fa-solid fa-unlock-keyhole"></i><span>se connecter</span></a>
              </li>
              <li>
                <a href="#"><i class="icon fa fa-user"></i><span>Mon compte</span></a>
              </li>
              <li>
                <a href="#"><i class="shopping-cart fa fa-shopping-cart"></i><span>Check-out</span></a>
              </li>
            </ul>
          </div>
          <div class="panier">
            <i class="shopping-cart fa fa-shopping-cart"></i>
            <span>MOM PANIER</span>
            <span class="zeros">0</span>
          </div>
        </div>
      </div>
      <div class="header_logo">
        <img class="logo img-fluid" src="img/joyalestorecom-logo-1617790973.jpg" alt="Joya le store"/>
      </div>
      <ul class="list_nav">
        <li class="list_hover">
          <a href="produit.php" class="nav_list nav_header"
            ><span>PRÉT À PORTER</span><i class="icon-arrow-down fa fa-sort-down"></i
          ></a>
          <ul class="nav_header_list">
            <li class="navigation_list"><a href="robes.php">Robes</a></li>
            <li class="navigation_list"><a href="jupes.php">Jupes</a></li>
            <li class="navigation_list"><a href="pantalon.php">Pantalons & Shorts</a></li>
            <li class="navigation_list"><a href="veste.php">Vestes & Manteaux</a></li>
            <li class="navigation_list"><a href="chemise.php">Chemisiers</a></li>
          </ul>
        </li>
        <li class="list_hover">
          <a href="produit.php" class="nav_list nav_header"
            ><span>CHAUSSURES</span
            ><i class="icon-arhttp://localhost:3003row-down fa fa-sort-down"></i
          ></a>
          <ul class="nav_header_list">
            <li class="navigation_list"><a href="baskets.php">Baskets</a></li>
            <li class="navigation_list"><a href="escapins.php">Escarpins</a></li>
            <li class="navigation_list"><a href="sandales.php">Sandales</a></li>
            <li class="navigation_list"><a href="bote.php">Bottes & Bottines</a></li>
            <li class="navigation_list"><a href="tallon.php">Tallon</a></li>
          </ul>
        </li>
        <li class="list_hover">
          <a href="produit.php" class="nav_list nav_header"
            ><span>ACCESSOIR</span><i class="icon-arrow-down fa fa-sort-down"></i
          ></a>
          <ul class="nav_header_list">
            <li class="navigation_list"><a href="robes.php">Centures</a></li>
          </ul>
        </li>
        <li class="list_hover">
          <a href="produit.php" class="nav_list nav_header"
            ><span>PROPOSER À PORTER</span
            ><i class="icon-arrow-down fa fa-sort-down"></i
          ></a>
          <ul class="nav_header_list">
            <li class="navigation_list"><a href="combi.php">combi</a></li>
            <li class="navigation_list"><a href="pull.php">pull</a></li>
            <li class="navigation_list"><a href="top.php">top veste</a></li>
          </ul>
        </li>
        <li><a href="bijoux.php" class="nav_list">BIJOUX</a></li>
        <li><a href="home.php" class="nav_list">HOMME</a></li>
        <li><a href="nouvelle.php" class="nav_list">NOUVELLE CONNECTION</a></li>
        <li><a href="promo.php" class="nav_list">PROMO</a></li>
      </ul>

    </header>
    <main class="col-12 ">
       <div class="image-acceul d-flex justify-content-center col-12">
          <img src="img/nouvelle_collection.jpg" class="col-12 px-5" alt="">
       </div>
       <div class="nouveaute d-flex justify-content-center col-12">
          <h2>NOUVEAUTÉ</h2>
       </div>
       <div class="col-12" id="specifie-8" >
            <!-- produit -->
       </div>
       <div class="b d-sm-flex justify-content-center nav-nav-image">
         <a href="#" class="image">
          <img src="img/baskets/baskets-cl11-glitter-or-arriere-terra-cotta-.jpg" class="col-12" alt="">
          <div class="casque col-8">
          <h3>BASKETS</h3>
          </div>
        </a>
         <a href="#" class="image">
          <img src="img/sandales/sandales-multi-brides-a-talons-.jpg" class="col-12" alt="">
          <div class="casque col-8">
            <h3>SANDALES</h3>
          </div>
        </a>
         <a href="" class="image">
          <img src="img/robe/robe-longue-rouge-.jpg" class="col-12" alt="">
          <div class="casque col-8">
            <h3>ROBE</h3>
          </div>
        </a>
       </div>
       <div class=" col-12 d-md-flex justify-content-center a">
        <div class="icon  d-flex justify-content-center flex-column">
          <img src="img/rea_customer_service.png" class="col-6" alt="">
          <p class="anim">Service Client</p>
          <p>au 06 49 54 94 19</p>
        </div>
        <div class="icon d-flex justify-content-center flex-column">
          <img src="img/joya_33.jpg" class="col-6" alt="">
          <p class="anim">Paiement sécurisé</p>
          <p>& 3x sans frais avec Alma</p>
        </div>
        <div class="icon d-flex justify-content-center flex-column">
          <img src="img/rea_shipping.png" class="col-6" alt="">
          <p class="anim">Livraison Mondial Relay</p>
          <p>offerte à partir de 100€</p>
        </div>
        <div class="icon d-flex justify-content-center flex-column">
          <img src="img/rea_click_collect.png" class="col-6" alt="">
          <p class="anim">Click & Collect</p>
          <p>à La Grande Motte</p>
        </div>
       </div>
        
          <h2 class="title-femme d-flex justify-content-center flex-wrap">
            <span>Boutique de Mode pour femme | Joyalestore.com</span>
            <span>Soyez celle qui vous rend belle !</span>
          </h2>
      <div class="text d-flex justify-content-center col-12 c">
        <div class="cms_accueil_column_left col-12 col-md-6">
          <p>Boutique de mode pour toutes les femmes qui n’ont qu’un seul objectif se sentir belles.</p><p>Joyalestore.com c’est la promesse de looks actuels, personnalisés selon votre morphologie pour que chacune d’entre vous se sente belle.</p><p>- Notre Philosophie</p><p>Dans votre boutique en ligne de vêtements pour femme vous pourrez composer vos looks de la tête aux pieds puisque nous vous proposons un large choix de chaussures pour femme, prêt à porter féminin et accessoires de mode pour femme qui viendront parfaire vos looks.</p><p>- <a href="https://www.joyalestore.com/11-pret-a-porter">Prêt à porter pour femme</a></p>
          <p>- <a href="https://www.joyalestore.com/13-accessoires">Accessoires (Bijoux et Ceintures)</a></p>
          <p>- <a href="https://www.joyalestore.com/14-sacs-petite-maroquinerie">Sacs &amp; Petite Maroquinerie</a></p>
          <p>- <a href="https://www.joyalestore.com/12-chaussures">Chaussures (Baskets, Escarpins, Sandales, Bottes et Bottines)</a></p>
          <p></p>
          <p>Joya le store c’est aussi le choix de marques de mode pour femme tendances sélectionnées pour leur qualité et leur originalité. Des sacs <a href="http://www.milalouise.com">Mila Louise</a> en cuir qui n’ont absolument plus rien à prouver quant à leur qualité durable dans le temps aux baskets complètement dingues (beaucoup pailletées, oui oui on adore les paillettes) de la marque Semerdjian.</p>
        </div>
        <img src="img/joya_36.jpg" class="d-none d-md-block col-md-6" alt="">
       </div>
    </main>
    <footer>
      <?php require('php/footer.php');?>
    </footer>
   <script src="javascript/nouvelle.js"></script>
  </body>
</html>
