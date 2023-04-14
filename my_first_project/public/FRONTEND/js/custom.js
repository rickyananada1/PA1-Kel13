$(window).scroll(function() {
    var navbar = $('#navbar');
    var utama = $('.bg-image');

    if ($(window).scrollTop() >= utama.height() - navbar.height()) {
        navbar.css('position', 'fixed');
        navbar.css('top', '0');
        navbar.css('background-color', 'rgba(255, 255, 255, 0.9)');
        navbar.css('box-shadow', '0 2px 4px rgba(0, 0, 0, 0.1)');
        navbar.css('width', '100%');
        navbar.css('transition', 'all 0.2s ease-in-out'); // transisi pada posisi fixed
    } else {
        navbar.css('position', 'static');
        navbar.css('background-color', 'transparent');
        navbar.css('box-shadow', 'none');
        navbar.css('width', 'auto');
        navbar.css('transition', 'all 0.2s ease-in-out'); // transisi pada posisi awal
    }
});




/* Card Slider - Swiper */
var swiper = new Swiper('.card-slider', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });


  // Ambil elemen menu dropdown
var dropdowns = document.querySelectorAll('.dropdown');

// Tambahkan event listener pada setiap elemen menu dropdown
dropdowns.forEach(function(dropdown) {
  dropdown.addEventListener('mouseover', function() {
    this.querySelector('.dropdown-menu').classList.add('show');
    this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'true');
  });

  dropdown.addEventListener('mouseleave', function() {
    this.querySelector('.dropdown-menu').classList.remove('show');
    this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false');
  });
});


var dropdownMenu = document.querySelector('#drop-login .dropdown-menu');
var dropdownToggle = document.querySelector('#drop-login .dropdown-toggle');

dropdownToggle.addEventListener('click', function () {
  if (dropdownMenu.classList.contains('show')) {
    dropdownMenu.classList.remove('show');
    dropdownMenu.removeAttribute('style');
  } else {
    dropdownMenu.classList.add('show');
    dropdownMenu.style.left = dropdownToggle.offsetLeft + 'px';
  }
});

