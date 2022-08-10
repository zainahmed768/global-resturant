<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Jquery JS -->
<script>
    new WOW().init();
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
        $('.banner-sec .world-flag-wrapper button').hover(function() {
            $('.banner-sec .all-dish-wrapper').css('opacity', 1).addClass('after-menu-show');
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
        $('.product-detail-wrapper .cart-btn-wrapper button').click(function() {
            $('div#productdetail').modal().hide();
            // $('#checkoutModal').modal('show');
            $('.modal-backdrop.show').hide();
        })
    })
</script>