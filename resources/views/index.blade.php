<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vaimo Store</title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="instruction-assets/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/__normalize.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="js/__jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div class="top-background">
    </div>

    <div class="container top">
      <!-- Header -->
      <div class="header">
        <div class="logo">
          <img src="img/logo.png" class="img-fluid" alt="">
        </div>
        <div class="collapse">
          <a id="navigation-toggle" href="javascript:void(0);" class="icon">
            <i class="fa fa-bars"></i>
          </a>
        </div>
        <div class="cart">
          <i class="fas fa-shopping-cart"></i>
          <span><span id="cart-total-items"></span> items in your cart <b><span id="cart-total-price">&euro;</span></b></span>
          <div id="cart-content">
            <button class="custom-button" type="button" name="button">Go to checkout</button>
          </div>
        </div>
      </div>
      <!-- End of Header -->

      <!-- Navigation -->
      <div id="navigation">
        <ul class="main-navigation">
          <li><a href="#women">Women</a></li>
          <li><a href="#men">Men</a></li>
          <li><a href="#junior">Junior</a></li>
          <li><a href="#accessories">Accessories</a></li>
          <li id="collections"><a href="#collections">Collections</a>
            <ul class="collection-dropdown">
              <li class="collection-year"><a>2014</a>
                <ul>
                  <li><a>Summer</a></li>
                  <li><a>Autumn</a></li>
                  <li><a>Winter</a></li>
                  <li><a>Spring</a></li>
                </ul>
              </li>
              <li class="collection-year"><a>2013</a>
                <ul>
                  <li><a>Summer</a></li>
                  <li><a>Autumn</a></li>
                  <li><a>Winter</a></li>
                  <li><a>Spring</a></li>
                </ul>
              </li>
              <li class="collection-year"><a>2012</a>
                <ul>
                  <li><a>Summer</a></li>
                  <li><a>Autumn</a></li>
                  <li><a>Winter</a></li>
                  <li><a>Spring</a></li>
                </ul>
              </li>
              <li class="collection-year"><a>2011</a>
                <ul>
                  <li><a>Summer</a></li>
                  <li><a>Autumn</a></li>
                  <li><a>Winter</a></li>
                  <li><a>Spring</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li id="sale"><a href="#sale">Sale</a></li>
          <li id="myaccount"><a href="#myaccount">My account</a></li>
        </ul>
        <div class="bottom-border"></div>
      </div>
      <!-- End of Navigation -->

      <!-- Info -->
      <div class="container-fluid info">
        <div class=" row">
          <div class="col-12 col-md-6">
            <div class="splash">
              <img class="img-fluid" src="img/splash_image.jpg" alt="">
              <div class="background-box">
              </div>
              <div class="caption">
                <h2>Get ready for the autumn</h2>
                <h4>We have prepared everything for you!</h4>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 ">
            <div class="info-text">
              <h2>This is Vaimo Store</h4>
              <h4>Your one step fashion destination</h3>
              <p>Shop from over 850 of the best brands, including VAIMO’s own label. Plus, get your daily fix of the freshest style, celebrity and music news.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Info -->

      <!-- Products -->
      <div class="container-fluid products">
        <div class="our-favourites">
          <div class="white-box">
            <!-- <h4>Our favourites</h4> -->
          </div>
          <div class="black-line"></div>
        </div>

        @if(count($products) > 0)
          <div class="row products-list">
            @foreach($products as $product)
              <div class="col-md-3 col-sm-6 products-list-column">
                <img src="{{$product['image']}}" alt="{{$product['title']}}">
                <div class="text-center">
                  <h4>{{$product['title']}}</h4>
                  <p class="price">
                    @if(empty($product['specialPrice']))
                    &euro; {{$product['price']}}
                    @else
                    <span class="old-price">&euro; {{$product['price']}} </span> <span class="special-price">&euro; {{$product['specialPrice']}}</span>
                    @endif
                  </p>
                  <button class="custom-button" type="button" name="button">Add to cart</button>
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>
      <!-- End of Products -->
    </div>

    <!-- Footer -->
    <div class="container-fluid footer">
      <div class="container row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-column">
            <h4>Top categories</h4>
            <ul>
              <li><a>Women</a></li>
              <li><a>Men</a></li>
              <li><a>Junior</a></li>
              <li><a>Accessories</a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-column">
            <h4>Customer service</h4>
            <ul>
              <li><a>Returns</a></li>
              <li><a>Shipping</a></li>
              <li><a>About us</a></li>
              <li><a>Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <div class="footer-column newsletter">
            <h4>Newsletter Subscribe</h4>
            <input class="custom-input" id="newsletter-email" type="text" name="email" value="" placeholder="Enter your email address">
            <button class="custom-button" id="subscribe-button" type="button" name="button">Subscribe</button>

            <div class="subscription-result">
              <div id="subscription-successful">
                <i class="fas fa-check"></i>Subscription successful.
              </div>
              <div id="subscription-unsuccessful">
                <i class="fas fa-exclamation-triangle"></i> Email verification failed...
              </div>
              <div id="subscription-ongoing">
                <i class="fas fa-spinner"></i> Subscribing to newsletter...
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Footer -->
  </body>
</html>
