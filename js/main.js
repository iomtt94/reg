jQuery(function ($) {
  $("#countdown").countdown("2017/06/05", function(event) {
    $("#countdown-day").text(
      event.strftime('%D')
    );

    $("#countdown-hour").text(
      event.strftime('%H')
    );

    $("#countdown-minute").text(
      event.strftime('%M')
    );

    $("#countdown-second").text(
      event.strftime('%S')
    );
  });

  
  $("#accordion").accordion({ heightStyle: "content", collapsible: true });
  $("#accordion1").accordion({ heightStyle: "content", collapsible: true });
  
  $(".owl-carousel").owlCarousel({
    responsiveClass: true,
    responsiveRefreshRate: true,
    margin: 30,
    dots: false,
    nav: true,
    responsive : {
        0 : {
            items: 1
        },
        480 : {
          items: 2
        },
        768 : {
            items: 3
        },
        960 : {
            items: 4
        },
        1200 : {
            items: 6
        },
        1920 : {
            items: 6
        }
    }
     
  }); 
  
//  $('.faq .link').click(function(){
//    $(this).toggleClass('active');
//    $(this).next().toggle();
//    return false;
//  });
  
 
  
  $("a.scrollto").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    return false;
  });
  
  $("a#hidden-content").fancybox({
		'hideOnContentClick': true
	});
  
});




