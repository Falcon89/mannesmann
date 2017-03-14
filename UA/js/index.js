// ----- On render -----
$(function() {
  var el = $('.new.price')[0];

  od = new Odometer({
    el: el,
    value: 4080,
    duration: 1000,
    format: '(ddd).dd'
  });

  setTimeout(function() {
    $('.old.price').addClass('strike');
   $('.special-offer').addClass('show');

    TweenMax.fromTo($('.new.price'), 0.4, {
      y: 50,
      alpha: 0,
      scale: 0.5
    }, {
      y: 0,
      scale: 1.2,
      alpha: 1,
      delay: 0.23,
      onComplete: function() {
        od.update(2850);
        TweenMax.to($('.price.new'), 0.5, {
          scale: 1,
          delay: 2,
          ease: Elastic.easeOut.config(1, 0.5),
        });
        setTimeout(function(){
          $('button').addClass('sheen');
        }, 2350) 
      }
    });
  }, 2000)

});