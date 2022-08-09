<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/contact.css">


<!-- Contact section  -->
<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-all">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target=".bd-example-modal-lg">Contact</button>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contact secton  -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-sec-all">
                        <div class="close-icons">
                            <i class="fa fa-times" aria-hidden="true"></i>

                        </div>
                        <div class="contact-head">
                            <h3>CONTACT US</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut <br> labore et dolore magna aliqua. Augue neque gravida in fermentum et sollicitudin
                                ac.
                                Magna ac.</p>


                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="First Name">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Last Name">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Email ">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Phone Number">

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                placeholder="Comment Here..." rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-contact-submit-btn">
                                            <button> Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'inc/footer.php'; ?>