$(function(){
 $('#menu-icon').click(function(){
      $('.header .menu ul') .slideToggle(1000);
      $('.product-list') .hide();
      $('.services') .hide();
      $('.discount') .hide();
  });
});

$(function(){
 $('.double-split #truck-product').click(function(){
      $('.bus') .hide();
      $('.truck') .show();
      $('.main-car') .hide();
  });
});
$(function(){
 $('.double-split #bus-product').click(function(){
      $('.bus') .show();
      $('.truck') .hide();
      $('.main-car') .hide();
  });
});