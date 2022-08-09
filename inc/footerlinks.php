<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
<script>
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
        $('.banner-sec .world-flag-wrapper button').hover(function() {
            $('.banner-sec .all-dish-wrapper').css('opacity', 1);
        })
        // Mobile Nav
        $('header  .canvas-icon img').click(function() {
            $("header .mobile-header").addClass('show');
        });

        $('header .mobile-header .cancel').click(function() {
            $("header .mobile-header").removeClass('show');
        });
        // Mobile Nav
    })
</script>