jQuery(function(){
    jQuery('.carousel').carousel({
      interval: 6000
    });
});

jQuery('.owl-carousel').owlCarousel({
    // items:1,
    margin:10,
    autoHeight:true
});

jQuery(function($) {
jQuery(document).ready(function(){
  jQuery('ul.gallery').bsPhotoGallery({
    "classes" : "col-lg-3 col-md-4 col-sm-3 col-xs-12 col-xxs-12",
    "hasModal" : true
  });
});

//menu script//

function scrollTo(element) {
    if (element.length > 0) {
        var top = element.offset().top;
          if( $('.navbar-header').css('display')=='none') {
            var $menu = jQuery("#menu");
          }
          else {
            var $menu = jQuery(".navbar-header");
          }
        }
          var scrollTo = top - ($menu.css("position") === "fixed" ? $menu.height() : $menu.height());

          jQuery('html,body').animate({scrollTop: scrollTo}, 1500);
};

jQuery(document).on("click", ".carousel-caption a[href*=#]", function(e){     
    if (this.pathname === location.pathname) {
        e.preventDefault();
        scrollTo(jQuery(this.hash + "_"));
    }
});
jQuery(document).on("click", " a[href*=#]", function(e){     
    if (this.pathname === location.pathname) {
        e.preventDefault();
        scrollTo(jQuery(this.hash + "_"));
    }
});

jQuery(function() {
    if (location.hash) {
        scroll(0,0);
        setTimeout(function() { scroll(0,0); }, 100) ;
        setTimeout(function() { scrollTo(jQuery(location.hash + "_")); }, 200);
    }
});


jQuery(function (jQuery) {
    var scrollingStartDistance = jQuery("#menu").offset().top;

    jQuery(document).scroll(function () {
        var scrollTop = jQuery(document).scrollTop();
        
        jQuery("#menu").toggleClass("scrolling", scrollTop > scrollingStartDistance);
    });
});



jQuery(function() {
    jQuery('.nav a').on('click', function(){ 
        if(jQuery('.navbar-toggle').css('display') !='none'){
            jQuery(".navbar-toggle").trigger( "click" );
        }
    });
});


jQuery(window).scroll(function(){
   if( jQuery(document).scrollTop() > 300 ) {
      jQuery('#brand').show();
   } else {
      jQuery('#brand').hide();
   }
});

if($("#porady_").length !== 0) {
  $('html, body').animate({
      scrollTop: $("#porady_").offset().top
  }, 2000);
};
});


var moreBtn = document.querySelectorAll('.aboutus button');

moreBtn.forEach(button => button.addEventListener('click', toggleOpen));

function toggleOpen() {
  var openBtn = this.dataset.target; 
  var currentCollapse = document.querySelector(`${openBtn}`);
  if (currentCollapse.classList.contains('collapse')){
      this.innerText = "Ukryj informacje";
  } else {
      this.innerText = "Więcej o mnie";
  };
};