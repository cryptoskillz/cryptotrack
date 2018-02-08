(function($) {
  "use strict"; // Start of use strict


  //get the current prices
      //var currencies = 'BTC,XRP,ETH,BCH,ADA,LTC,NEM,XLM,TRX,IOTA'

   



  $("#logoutbutton").click(function() {
    lscache.set('loggedin', {'state':"0"});
    window.location.href = "/login";

  });


  // Configure tooltips for collapsed side navigation
  $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
    template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
  })
  // Toggle the side navigation
  $("#sidenavToggler").click(function(e) {
    e.preventDefault();
    $("body").toggleClass("sidenav-toggled");
    $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
    $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
  });
  // Force the toggled class to be removed when a collapsible nav link is clicked
  $(".navbar-sidenav .nav-link-collapse").click(function(e) {

    e.preventDefault();
    $("body").removeClass("sidenav-toggled");
  });
  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
    var e0 = e.originalEvent,
      delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += (delta < 0 ? 1 : -1) * 30;
    e.preventDefault();
  });
  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });
  // Configure tooltips globally
  $('[data-toggle="tooltip"]').tooltip()
  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
})(jQuery); // End of use strict




  //console.log("dd")
  //console.log(cashexchangelist);
//local storage stuff


function processJSON(json) {
  // ..
}

function fetchJSON() {
 
}

/*note (chris) quick ls test pad this out in the future */
if (!lscache.supported()) {
  alert('Local storage is unsupported in this browser');
}
else
{
  var key = 'loggedin';
  var json = lscache.get(key);
  //console.log("json"+json)

  ///var account = lscache.get("account");
  //console.log(account);
  if (json == null)
  {
        if (window.location.href.indexOf("login") !=-1) 
        {
          //do nothing
          //alert('login page')
        }
        else
        {
          window.location.href = "/login";
        }
  }
  else
  {
    if (json.state == 0)
      {
        //alert('no account')
        //redirect them to login
        if (window.location.href.indexOf("login") !=-1) 
        {
          //do nothing
          //alert('login page')
        }
        else
        {
          window.location.href = "/login";
        }
      

      } 
      else 
      {
        //alert('accunt')
      }
  }
  
}
