<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vaimo Store</title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/__normalize.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="top-background">
    </div>

    <div class="container top">
      <!-- Header -->
        <div class="logo">
          <img src="img/logo.png" class="img-fluid" alt="">
        </div>
        <div class="cart">
          <i class="fas fa-shopping-cart"></i>
          <span>3 items in your cart <b>&euro;75</b></span>
        </div>
      <!-- End of Header -->

      <!-- Navigation -->
      <div class="navigation">
        <ul>
          <li><a href="#women">Women</a></li>
          <li><a href="#men">Men</a></li>
          <li><a href="#junior">Junior</a></li>
          <li><a href="#accessories">Accessories</a></li>
          <li><a href="#collections">Collections</a></li>
          <li id="sale"><a href="#sale">Sale</a></li>
        </ul>
        <div class="bottom-border"></div>
      </div>
      <!-- End of Navigation -->

      <!-- Splash -->

      <!-- End of Splash -->

      <!-- Our Favouries -->
      <div class="our-favourites">
        <h4>Our favourites</h4>

        <div class="products">
          @if(count($products) > 0)
            <ul>
              @foreach($products as $product)
                <li>{{$product['title']}}</li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
      <!-- End of Our Favourites -->
    </div>


    <!-- Footer -->
    <div class="footer">

    </div>
    <!-- End of Footer -->
  </body>
</html>
