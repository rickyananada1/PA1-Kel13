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
