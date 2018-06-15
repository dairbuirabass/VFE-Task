<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vaimo Store</title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="instruction-assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/__normalize.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="top-background">
    </div>

    <div class="container top">
      <!-- Header -->
      <div class="header">
        <div class="logo">
          <img src="img/logo.png" class="img-fluid logo-img" alt="">
        </div>
        <div class="cart">
          <i class="fas fa-shopping-cart"></i>
          <span>3 items in your cart <b>&euro;75</b></span>
        </div>
      </div>
      <!-- End of Header -->

      <!-- Navigation -->
      <div class="navigation">
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
      <div class="info">
        <div class="splash">
          <img class="img-fluid" src="img/splash_image.jpg" alt="">
          <div class="background-box">
          </div>
          <div class="caption">
            <h2>Get ready for the autumn</h2>
            <h4>We have prepared everything for you!</h4>
          </div>
        </div>
        <div class="info-text">
          <h2>This is Vaimo Store</h4>
          <h4>Your one step fashion destination</h3>
          <p>Shop from over 850 of the best brands, including VAIMO’s own label. Plus, get your daily fix of the freshest style, celebrity and music news.</p>
        </div>
      </div>
      <!-- End of Info -->



      <!-- Products -->
      <div class="our-favourites">
        <h4>Our favourites</h4>

        <div class="products">
          @if(count($products) > 0)
            <div class="row mx-auto px-5">
              @foreach($products as $product)
                <div class="col-md-3 col-sm-6 px-2 py-2 my-2">
                  <img class="img-thumbnail" src="{{$product['image']}}" alt="{{$product['title']}}">
                  <div class="text-center">
                    <h4>{{$product['title']}}</h4>
                    <p class="price">
                      @if(empty($product['specialPrice']))
                      &euro; {{$product['price']}}
                      @else
                      <span class="old-price">&euro; {{$product['price']}} </span> <span class="special-price">&euro; {{$product['specialPrice']}}</span>
                      @endif
                    </p>
                    <button class="add-to-cart" type="button" name="button">Add to cart</button>
                  </div>
                </div>
              @endforeach
            </div>
          @endif
        </div>
      </div>
      <!-- End of Products -->
    </div>


    <!-- Footer -->
    <div class="footer">

    </div>
    <!-- End of Footer -->
  </body>
</html>
