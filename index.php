<?php include 'inc/app.php'; ?>

<!-- Stylesheet -->
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" href="css/course.css">
<!-- Stylesheet -->

<!-- banner starts here -->
<section class="banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="all-dish-wrapper">
                    <div class="dish-wrapper dish1-wrapper">
                        <div class="dish-img-wrapper">
                            <img src="img/dish1.png" class="img-fluid" alt="">
                        </div>
                        <div class="dish-content-wrapper">
                            <h4>BEEF</h4>
                        </div>
                    </div>
                    <div class="dish-wrapper dish2-wrapper">
                        <div class="dish-img-wrapper">
                            <img src="img/dish2.png" class="img-fluid" alt="">
                        </div>
                        <div class="dish-content-wrapper">
                            <h4>BEEF</h4>
                        </div>
                    </div>
                    <div class="dish-wrapper dish3-wrapper">
                        <div class="dish-img-wrapper">
                            <img src="img/dish3.png" class="img-fluid" alt="">
                        </div>
                        <div class="dish-content-wrapper">
                            <h4>BEEF</h4>
                        </div>
                    </div>
                    <div class="dish-wrapper dish4-wrapper">
                        <div class="dish-img-wrapper">
                            <img src="img/dish4.png" class="img-fluid" alt="">
                        </div>
                        <div class="dish-content-wrapper">
                            <h4>BEEF</h4>
                        </div>
                    </div>
                    <div class="dish-wrapper dish5-wrapper">
                        <div class="dish-img-wrapper">
                            <img src="img/dish5.png" class="img-fluid" alt="">
                        </div>
                        <div class="dish-content-wrapper">
                            <h4>BEEF</h4>
                        </div>
                    </div>
                    <div class="dish-wrapper dish6-wrapper">
                        <div class="dish-img-wrapper">
                            <img src="img/dish6.png" class="img-fluid" alt="">
                        </div>
                        <div class="dish-content-wrapper">
                            <h4>BEEF</h4>
                        </div>
                    </div>
                    <div class="dish-wrapper dish7-wrapper">
                        <div class="dish-img-wrapper">
                            <img src="img/dish7.png" class="img-fluid" alt="">
                        </div>
                        <div class="dish-content-wrapper">
                            <h4>BEEF</h4>
                        </div>
                    </div>
                </div>

                <div class="world-wrapper">
                    <div class="world-img-wrapper">
                        <img src="img/world.png" class="img-fluid" alt="">
                    </div>
                    <div class="world-flag-wrapper">
                        <div class="usa1-flag-wrapper">
                            <button class="usa">
                                <img src="img/usa.png" alt="">
                            </button>
                        </div>
                        <div class="italy-flag-wrapper">
                            <button class="italy">
                                <img src="img/italy.png" alt="">
                            </button>
                        </div>
                        <div class="uk-flag-wrapper">
                            <button class="uk">
                                <img src="img/uk.png" alt="">
                            </button>
                        </div>
                        <div class="usa-flag-wrapper">
                            <button class="usa2">
                                <img src="img/usa2.png" alt="">
                            </button>
                        </div>
                        <div class="russia-flag-wrapper">
                            <button class="russia">
                                <img src="img/russia.png" alt="">
                            </button>
                        </div>
                        <div class="germany-flag-wrapper">
                            <button class="germany">
                                <img src="img/germany.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MenuModal">
            Launch demo modal
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkoutModal">
            Checkout
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseModal">
            Course
        </button>
    </div>
</section>

<!-- Menu Modal -->
<div class="modal fade" id="MenuModal" tabindex="-1" role="dialog" aria-labelledby="MenuModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cart-content">
                    <div class="heading-wrapper">
                        <h2>MY CART</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue neque gravida in fermentum et sollicitudin ac. Magna ac placerat vestibulum lectus mauris ultrices. Nec feugiat nisl pretium fusce id. Sed risus pretium quam vulputate.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="cart-products">
                                <div class="cart-box">
                                    <div class="cancel">
                                        X
                                    </div>
                                    <div class="img-box">
                                        <figure><img src="img/cart1.png" alt="" class="img-fluid"></figure>
                                    </div>
                                    <div class="txt">
                                        <h4>Ivy Mode</h4>
                                        <p>psum dolor sit amet, consectetur adipiscing elit. Duis commodo cursus libero, non ornare eros tempus eu. </p>
                                        <h4 class="price"><span>PRICE :</span>$170.58</h4>
                                    </div>
                                </div>
                                <div class="cart-box">
                                    <div class="cancel">
                                        X
                                    </div>
                                    <div class="img-box">
                                        <figure><img src="img/cart1.png" alt="" class="img-fluid"></figure>
                                    </div>
                                    <div class="txt">
                                        <h4>Ivy Mode</h4>
                                        <p>psum dolor sit amet, consectetur adipiscing elit. Duis commodo cursus libero, non ornare eros tempus eu. </p>
                                        <h4 class="price"><span>PRICE :</span>$170.58</h4>
                                    </div>
                                </div>
                                <div class="cart-box">
                                    <div class="cancel">
                                        X
                                    </div>
                                    <div class="img-box">
                                        <figure><img src="img/cart1.png" alt="" class="img-fluid"></figure>
                                    </div>
                                    <div class="txt">
                                        <h4>Ivy Mode</h4>
                                        <p>psum dolor sit amet, consectetur adipiscing elit. Duis commodo cursus libero, non ornare eros tempus eu. </p>
                                        <h4 class="price"><span>PRICE :</span>$170.58</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="order-summary">
                                <div class="summary">
                                    <div class="title">
                                        <h2>ORDER SUMMARY</h2>
                                    </div>
                                    <ul class="charges">
                                        <li><span>DELIVERY CHARGES :</span>$170.58</li>
                                        <li><span>SUBTOTAL :</span>$170.58</li>
                                    </ul>
                                    <p><i>Taxes and discounts will be calculated at checkout</i></p>
                                </div>
                                <div class="button-group">
                                    <button class="btn"><i class="fa fa-angle-right" aria-hidden="true"></i> UPDATE CART</button>
                                    <button class="btn"><i class="fa fa-angle-right" aria-hidden="true"></i> CHECKOUT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu Modal -->

<!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cart-content">
                    <div class="heading-wrapper">
                        <h2>ORDER DETAILS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue neque gravida in fermentum et sollicitudin ac. Magna ac placerat vestibulum lectus mauris ultrices. Nec feugiat nisl pretium fusce id. Sed risus pretium quam vulputate.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="shipping">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Shipment Method</label>
                                                <select class="form-control">
                                                    <option>Select Shipment method</option>
                                                    <option>Method1</option>
                                                    <option>Method2</option>
                                                    <option>Method3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Suite, Apartment, etc </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country/Region</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="title">
                                                <h4>Payment Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="right-side">
                                <div class="heading">
                                    <h2>ORDER DETAILS</h2>
                                </div>
                                <div class="cart-products">
                                    <div class="cart-box">
                                        <div class="img-box">
                                            <figure><img src="img/cart1.png" alt="" class="img-fluid"></figure>
                                        </div>
                                        <div class="txt">
                                            <h4>VENISON WELLINGTON</h4>
                                            <p>psum dolor sit amet, consectetur adipiscing elit. Duis commodo cursus libero</p>
                                            <h4 class="price"><span>PRICE :</span>$170.58</h4>
                                        </div>
                                    </div>
                                    <div class="cart-box">
                                        <div class="img-box">
                                            <figure><img src="img/cart1.png" alt="" class="img-fluid"></figure>
                                        </div>
                                        <div class="txt">
                                            <h4>VENISON WELLINGTON</h4>
                                            <p>psum dolor sit amet, consectetur adipiscing elit. Duis commodo cursus libero</p>
                                            <h4 class="price"><span>PRICE :</span>$170.58</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary">
                                    <div class="summary">
                                        <div class="title">
                                            <h2>ORDER SUMMARY</h2>
                                        </div>
                                        <ul class="charges">
                                            <li><span>DELIVERY CHARGES :</span>$170.58</li>
                                            <li><span>SUBTOTAL :</span>$170.58</li>
                                            <li><span>Total :</span>$170.58</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-bar">
                        <div class="left">
                            <input type="checkbox" id="prvcy" class="form-control">
                            <label for="prvcy">Lorem ipsum dolor sit amet consectetur adipisicing</label>
                        </div>
                        <div class="right">
                            <button class="btn"><i class="fa fa-angle-right" aria-hidden="true"></i> SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout Modal -->

<!-- Course Modal -->
<div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="courseModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cart-content">
                    <div class="heading-wrapper">
                        <h2>CHOICE OF MAIN COURSE</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue neque gravida in fermentum et sollicitudin ac. Magna ac placerat vestibulum lectus mauris ultrices. Nec feugiat nisl pretium fusce id. Sed risus pretium quam vulputate.</p>
                    </div>
                    <div class="all-courses">
                        <div class="courses">
                            <div class="title-wrapper">
                                <h2>BEEF</h2>
                            </div>
                            <div class="course-flex">
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course3.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course4.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course5.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses">
                            <div class="title-wrapper">
                                <h2>PORK</h2>
                            </div>
                            <div class="course-flex">
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course3.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course4.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses">
                            <div class="title-wrapper">
                                <h2>POULTRY</h2>
                            </div>
                            <div class="course-flex">
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course3.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course4.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses">
                            <div class="title-wrapper">
                                <h2>SPECIALITY</h2>
                            </div>
                            <div class="course-flex">
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h4>CHOISE OF Entrée</h4>
                            <p>Noodles, Rice and Potatoes</p>
                        </div>
                        <div class="courses">
                            <div class="title-wrapper">
                                <h2>All things Noodles</h2>
                            </div>
                            <div class="course-flex">
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses">
                            <div class="title-wrapper">
                                <h2>All things RICE</h2>
                            </div>
                            <div class="course-flex">
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses">
                            <div class="title-wrapper">
                                <h2>We did noT forget about the potatoes!</h2>
                            </div>
                            <div class="course-flex">
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course1.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                                <div class="course-box">
                                    <a href="#">
                                        <div class="img_box">
                                            <figure><img src="img/course2.png" alt="" class="img-fluid"></figure>
                                            <div class="price">
                                                <h4>$10.50</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <h3>Korean Inspired</h3>
                                        <p>GALBI – SHORT RIBS (+ $2)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Course Modal -->

<!-- banner ends here -->
<?php include 'inc/footer.php'; ?>