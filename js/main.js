// New files
$(".button-collapse").sideNav();

// add to cart button
$(".product").hover(function(){
  $(this).find(".quick-veiw").removeClass("hide").addClass("show");
});
$(".product").mouseleave(function(){
  $(".quick-veiw").removeClass("show").addClass("hide");
});

//promo code input reveal
$("#btn-promo").click(function(){
  $("#promo-code").removeClass("hide").addClass("show");
  $("#btn-promo").addClass("hide");
});

$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('#qv-modal').modal();
});
