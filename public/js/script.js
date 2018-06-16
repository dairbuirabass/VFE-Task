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
    var email = $("#newsletter-email");
    $.ajax({
      url: "newsletter/subscribe/" + email,
      success: function(result) {
        console.log("yay");
      }
    })
    console.log($("#newsletter-email").val());
  });
});
