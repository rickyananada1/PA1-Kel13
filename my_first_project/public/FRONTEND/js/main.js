(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 550) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    
})(jQuery);





/* Pie Chart */

    $(document).ready(function(){

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Belum Tamat/ Belum Sekolah', 18],
        ['Tamat Kuliah', 31],
        ['Tamat Stara', 10],
        ['Tamat SD', 10],
        ['Tamat SMA', 17],
        ['Tamat SMP ', 22],
        ['Tamat S1' , 9],
        ['Tamat S2', 3],
        ['Tamat D3', 20],
        
        
        ]);
        
        var options = {
        title: 'Data Pendidikan',
        pieSliceText: 'value',
        is3D:true
        };
        
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart3d'));
        
        chart.draw(data, options);
        }
        
        
        });


/* Galeri di Home */
$(document).ready(function(){
    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
          
          $(this).addClass('transition');
      }, function(){
          
          $(this).removeClass('transition');
      });
  });

  
/* Dropdown Login */
  $(window).on('resize', function(){
    var dropdownMenu = $('#drop-login .dropdown-menu');
    var offsetLeft = dropdownMenu.offset().left;
    if (offsetLeft + dropdownMenu.outerWidth() > $(window).width()) {
        $('#drop-login').addClass('dropup');
    } else {
        $('#drop-login').removeClass('dropup');
    }
});



