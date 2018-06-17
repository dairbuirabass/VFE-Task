$( document ).ready(function() {
  $.getJSON("cart/get", function(result){
    $("#cart-total-items").html(result.totalItems);
    $("#cart-total-price").append(result.totalPrice);
    for (let i=0; i < result.items.length; i ++) {
      var a =
      "<div>" +
        "<img src='" + result.items[i].imgSrc + "' alt='" + result.items[i].name + "'>" +
        "<i class='fas fa-times'></i>" +
        "<a>" +
          "<h4>" + result.items[i].name + "</h4>" +
          "<h6>" + result.items[i].qty + " x &euro; " + result.items[i].price + "</h6>" +
        "</a>" +
      "</div>";
      $("#cart-content").prepend(a);
    }
  });

  $("#subscribe-button").click(function() {
    var email = $("#newsletter-email").val();

    $("#subscription-successful").hide();
    $("#subscription-unsuccessful").hide();
    $("#subscription-ongoing").show();
    $.ajax({
      url: "newsletter/subscribe?email=" + email,
      success: function(response) {
        $("#subscription-ongoing").hide();
        if (response.valid) {
          $("#subscription-successful").show();
        } else {
          $("#subscription-unsuccessful").show();
        }
      }
    })
  });

  $("#navigation-toggle").on("click", function () {
    var x = document.getElementById("navigation");
    if (x.className === "") {
        x.className = "responsive";
    } else {
        x.className = "";
    }
  })

  $("#cart-collapse").on("click", function () {
    var x = document.getElementById("cart-content");
    if (x.className === "") {
        x.className = "responsive";
    } else {
        x.className = "";
    }
    console.log("hm");
  })
});
