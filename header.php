<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.min.css"  media="screen,projection"/>
    <script src="https://use.typekit.net/gax4jpx.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <!--Import jQuery before materialize.js-->
  <header>
    <nav>
    	<div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center"><img src="img/revel-logo.png" alt=""></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
              <ul id="nav-primary" class="right">
                <li><a href="checkout-account.php" class="waves-effect">Login</a></li>
                <li><a href="checkout.php" class="waves-effect"><i class="material-icons md-18">shopping_cart</i></a><span class="btn-floating btn">2</span></li>        
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php" class="waves-effect">Front Page</a></li>
                <li><a href="categories-quickview.php" class="waves-effect">Categories View</a></li>
                <li><a href="item.php" class="waves-effect">Single Item View</a></li>
                <li><a href="http://revelsystems.com" class="waves-effect">Back to Revel</a></li>
              </ul>
        </div>
      </div>
    </nav>
  </header>