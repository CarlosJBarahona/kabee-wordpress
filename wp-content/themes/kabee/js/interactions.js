$(document).ready(function() {

  var owl = $("#productos");

  owl.owlCarousel({
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
    });

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })

});

$(document).ready(function() {

  var owl = $("#owl-demo");

  owl.owlCarousel({
    items : 2, //10 items above 1000px browser width
    itemsDesktop : [1000,2], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,1], // betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0
    itemsMobile : [400,1]// itemsMobile disabled - inherit from itemsTablet option
  })

    // Custom Navigation Events
    $(".next").click(function(){
      owl.trigger('owl.next');
    })
    $(".prev").click(function(){
      owl.trigger('owl.prev');
    });

  });

$(document).ready(function() {

  var owl = $("#movilhome");

  owl.owlCarousel({
    items : 1,
    itemsMobile : [400,1], // itemsMobile disabled - inherit from itemsTablet option
  })

    // Custom Navigation Events
    $(".sig").click(function(){
      owl.trigger('owl.next');
    })
    $(".ant").click(function(){
      owl.trigger('owl.prev');
    });

  });





$(document).ready(function() {


    // Custom Navigation Events
    $(".maspro").click(function(){
      owl.trigger('owl.next');
    })
    $(".menospro").click(function(){
      owl.trigger('owl.prev');
    })
    if ($(window).width() < 400){

      var owl = $("#productoshomemovile");
      owl.owlCarousel({
    itemsMobile : [400,1] // itemsMobile disabled - inherit from itemsTablet option
  });
    } 

  });

