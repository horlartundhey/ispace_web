// $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
//   var next = $(this).next();
//   if (!next.length) {
//     next = $(this).siblings(':first');
//   }
//   next.children(':first-child').clone().appendTo($(this));

//   for (var i=0;i<4;i++) {
//     next=next.next();
//     if (!next.length) {
//       next=$(this).siblings(':first');
//     }
//     next.children(':first-child').clone().appendTo($(this));
//   }
// });

// $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
//     var next = $(this).next();
//     if (!next.length) {
//       next = $(this).siblings(':first');
//     }
//     next.children(':first-child').clone().appendTo($(this));
  
//     for (var i=0;i<4;i++) {
//       next=next.next();
//       if (!next.length) {
//         next=$(this).siblings(':first');
//       }
//       next.children(':first-child').clone().appendTo($(this));
//     }
//   });


  // smooth Scrolling Effects and Animations

  // $(function() {
  //     // Smooth Scrolling
  //     $('a[href*="#"]:not([href="#"])').click(function() {
  //       if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
  //         var target = $(this.hash);
  //         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  //         if (target.length) {
  //           $('html, body').animate({
  //             scrollTop: target.offset().top
  //           }, 1000);
  //           return false;
  //         }
  //       }
  //     });
  //   });

  $(document).ready(function(){
    $('.customer-logos').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });