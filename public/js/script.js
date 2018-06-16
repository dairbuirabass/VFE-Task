$( document ).ready(function() {
  $.getJSON("cart/get", function(result){
    $("#cart-total-items").html(result.totalItems);
    $("#cart-total-price").html(result.totalPrice);
    for (let i=0; i < result.items.length; i ++) {
      var a = "<a>" + result.items[i].name;
      a += result.items[i].qty + " x &euro; " + result.items[i].price + "</a>";
      $("#cart-content").append(a);
    }
    console.log(result)
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
        console.log(response)
      }
    })
    console.log($("#newsletter-email").val());
  });
});
