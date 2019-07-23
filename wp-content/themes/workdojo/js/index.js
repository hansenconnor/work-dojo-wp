jQuery(document).ready(function($) {
    
    // Initialize Smooth scroll plugin
    // https://www.jqueryscript.net/animation/Smooth-Scroll-To-Anchor-Plugin-jQuery.html
    $('a[href*="#"]').smoothscroll();

    // Handle page progress bar
    $(window).on('scroll', function() {

        var $progressBar = $('#progress_bar');
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;

        $progressBar.css('width', `${scrolled}%`);
    });
});