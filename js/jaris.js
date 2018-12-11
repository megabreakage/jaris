$(document).ready(function(){
$("#breadtype, #breadWeightDiv, #quantityDiv, #cookiesWeight, #add_info, #cookietype, #cupcaketype").addClass("hidden");

$("#product").change(function(){
  filter = $("#product").val();
  product_id = $("#product").val();
})

var subtotal = 0.00;

  $("#product").change(function(){
    val = $("#product").val();
    console.log($("#product option:selected").text());

    switch ($("#product").val()) {
      case "102":
        $("#kgsDiv, #icing, #inscriptions, #color, #cookiesWeight, #cookietype").addClass("hidden");
        $("#breadtype, #breadWeightDiv, #add_info, #quantityDiv").removeClass("hidden");
        // When weight is selected
        $("#breadWeight").change(function(){
          var weight = $("#breadWeight").val();
          console.log(product_id);
          console.log(weight);
          console.log($("#product option:selected").text());
          $.ajax({
            url:'pick_price',
            type:'POST',
            data: {"weight": weight, "product_id":product_id},
            dataType: 'json',
            success: function(data){
              console.log(data);
              subtotal = parseFloat(data * $("#quantity").val()).toFixed(2);
              $("#subtotal").val(subtotal);
              $("span#deposit").html( "(Sh. "+ (subtotal/2) +".00)" );

              $("#amount").keyup(function(){
                if( $("#amount").val() < (subtotal/2) ){
                  $("p#notice").html("The deposit amount is less than 50% expected");
                }else{
                  $("p#notice").html("");
                }
              });
            }
          });
        });
        // When quantity changes
        $("#quantity").keyup(function(){
          var weight = $("#breadWeight").val();
          $.ajax({
            url:'pick_price',
            type:'POST',
            data: {"weight": weight, "product_id":product_id},
            dataType: 'json',
            success: function(data){
              console.log(data);
              subtotal = parseFloat(data * $("#quantity").val()).toFixed(2);
              $("#subtotal").val(subtotal);
              $("span#deposit").html( "(Sh. "+ (subtotal/2) +".00)" );

              $("#amount").keyup(function(){
                if( $("#amount").val() < (subtotal/2) ){
                  $("p#notice").html("The deposit amount is less than 50% expected");
                }else{
                  $("p#notice").html("");
                }
              });
            }
          });
        });
        break;
      case "Cookies":
        $("#kgsDiv, #icing, #inscriptions, #color, #breadtype, #breadWeightDiv, #quantityDiv, #cupcaketype").addClass("hidden");
        $("#cookiesWeight, #cookietype, #add_info").removeClass("hidden");
        break;
      case "Cupcakes":
        $("#kgsDiv, #inscriptions, #color, #cookietype, #cookiesWeight, #breadtype, #breadWeightDiv").addClass("hidden");
        $("#cupcaketype, #icing, #quantityDiv, #add_info").removeClass("hidden");
        break;
      default:
        $("#cookiesWeight, #breadtype, #cupcaketype, #cookietype, #breadWeightDiv, #quantityDiv, #add_info").addClass("hidden");
        $("#kgsDiv, #icing, #color, #inscriptions").removeClass("hidden");
        var weight = $("#kgs").val();
        $.ajax({
          url:'pick_price',
          type:'POST',
          data: {"weight": weight, "product_id":product_id},
          dataType: 'json',
          success: function(data){
            console.log(data);
            subtotal = parseFloat(data).toFixed(2);
            $("#subtotal").val(subtotal);
            $("span#deposit").html( "(Sh. "+ (subtotal/2) +".00)" );

            $("#amount").keyup(function(){
              if( $("#amount").val() < (subtotal/2) ){
                $("p#notice").html("The deposit amount is less than the expected 50%");
              }else{
                $("p#notice").html("");
              }
            });
          }
        });
        // When weight changes
        $("#kgs").change(function(){
          var weight = $("#kgs").val();
          $.ajax({
            url:'pick_price',
            type:'POST',
            data: {"weight": weight, "filter":filter, "product_id":product_id},
            dataType: 'json',
            success: function(data){
              console.log(data);
              subtotal = parseFloat(data).toFixed(2);
              $("#subtotal").val(subtotal);
              $("span#deposit").html( "(Sh. "+ (subtotal/2) +")" );

              $("#amount").keyup(function(){
                if( $("#amount").val() < subtotal ){
                  $("p#notice").html("The deposit amount is less than 50% expected");
                }else{
                  $("p#notice").html("");
                }
              });
            }
          });
        });
        break;
     }

  });

  $("#amount").keyup(function(){
    if( $("#amount").val() < subtotal ){
      $("p#notice").html("The deposit amount is less than 50% expected");
    }
  });

  $("#placeOrde").submit(function(e){
    e.preventDefault();
    var contents = $(this).serialize();
    console.log(contents);

    $.ajax({
      url: 'place_order',
      type: 'POST',
      data: contents,
      dataType: 'json',
      success: function(response){
        if (response == 0) {
          $("#orderResponse").removeClass("hidden");
          $("#orderResponse").addClass("alert-danger");
          $("#orderResponse").html("Your order failed...Kindly try again later!");
        } else {
          $("#orderResponse").removeClass("hidden");
          $("#orderResponse").addClass("alert-success");
          $("#orderResponse").html("Thank you...We will get back to you shortly!");
        }
        console.log(response);
        $("#contactForm")[0].reset();
      }
    });
  });

  $("#contactForm").submit(function(e){
    e.preventDefault();
    var contents = $(this).serialize();
    $.ajax({
      url: 'send_email',
      method: 'POST',
      data: contents,
      datatype: 'json',
      success: function(data){
        if (data == 0) {
          $("#emailResponse").removeClass("hidden");
          $("#emailResponse").addClass("alert-danger");
          $("#emailResponse").html("Oops, Email sending failed! Kindly try again later");
        } else {
          $("#emailResponse").removeClass("hidden");
          $("#emailResponse").addClass("alert-success");
          $("#emailResponse").html("Thank you, Email sent. We will get back to you shortly");
        }
        console.log(data);
        $("#contactForm")[0].reset();
      }
    });
  });

});
