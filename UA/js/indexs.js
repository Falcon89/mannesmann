$(document).ready(function() {

  $('.fancybox').fancybox({
    type: 'image',
    openEffect: 'elastic',
    closeEffect: 'elastic',
    helpers: {
      title: {
        type: 'over'
      }
    }
  });

  $('.fancybox-media').fancybox({
    helpers: {
      media: {}
    }
  });

  $('.fancybox-inline').fancybox({
    type: 'inline'
  });
});