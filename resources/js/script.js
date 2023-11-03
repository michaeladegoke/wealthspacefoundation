$(document).ready(function () {

    /*sticky navigation*/
    $('.js--section-feature').waypoint(function (direction) {
      if (direction == "down") {
        $('nav').addClass('sticky');
      } else {
        $('nav').removeClass('sticky');
      }
    }, {
      offset: '60px;'
    });
  
  });
