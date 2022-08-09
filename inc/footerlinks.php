<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

        $('#courseModal .course-box button').click(function() {
            $('#courseModal').modal().hide();
            $('#courseModal').removeClass('show');
            $('.modal-backdrop.show').hide();

        })
        $('#MenuModal .cart-content .order-summary .button-group button').click(function() {
            $('#MenuModal').modal().hide();
            $('#checkoutModal').modal('show');
            $('.modal-backdrop.show').hide();
        })
        $('.close-icons i').click(function() {
            $('div[aria-labelledby="myLargeModalLabel"]').modal().hide();
            $('.modal-backdrop.show').hide();
        })
    })
</script>