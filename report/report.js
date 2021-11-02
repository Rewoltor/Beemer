$(function() {
  $('.scale-rating').each(function() {
    var rating = $(this).data('rating');
    $(this)
    .css({
      'width': rating + '%'
    })
    .addClass('color-step-' + function(rating) {
       return Math.floor((rating-1) / (100  / 4)) + 1;
     }(rating));
  });
})