<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primed Talent | Contact Us</title>
    <meta name="description"
        content="Contact Us Now for Further Service-related Information. Hire Staff, Training, Deployment, Content Development only in One Place. Whether you have a question about features, pricing, or need a demo, our team is ready to answer all your questions ">
    <!-- Links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5e6131c1bd.js" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="javascript/main.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177924410-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-177924410-1');
    </script>
     <!-- BotPenguin bot script starts here -->
    <!-- <script id="Ym90cGVuZ3VpbkFwaQ" src="https://cdn.botpenguin.com/bot.js?apiKey=GC49b%28-%3E%29VsCVCWo%7ED6X%3EI"
        async></script> -->
    <!-- BotPenguin bot script ends here -->


</head>

<body>


    <?php include "header.html" ?>

    </div>
    <div class="img-text-div">
        <img src="Assets/Images/contact/1.jpg" class="img-fluid w-100 banner1" alt="">
        <h1 class="text-on-img-cont">Contact Us</h1>
        <p class="text-on-img-cont2">If you’re here, you must be just a little curious about
            what we could do for your business</p>


        <div class="shadow text-center contcard">
            <img src="Assets/Images/contact/3.png" class="img-fluid" alt="">
            <h1>Get in touch with us</h1>
            <p>Whether you have a question about features, pricing, or need a demo, our team is ready to
                answer all your questions</p>
            <button class="btn" data-toggle="modal" data-target="#formmodal">
                Let's Connect</button>
            </a>
        </div>
    </div>

    <div class="modal fade contmodal" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="z-index:100000000">
        <div class="modal-dialog modal-dialog-centered modal-dialog-cont" role="document">

            <div class="modal-content">
                <div class="modal-header mh-cont">
                    <h1 class="modal-title pb-2">Hello</h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <p class="mb-0">Let’s get this conversation started. Tell us a bit about yourself, and we’ll get in
                    touch as soon as we can.</p><br />
                <form class="cuform" action="contact_us_process.php" method="post">

                    <input type="hidden" data-form-email="true" value="">
                    <div class="row row-sm-offset">
                        <div class="col-md-12 multi-horizontal nm" data-for="name">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7"
                                    for="name-form1-2w">Name*</label>
                                <input type="text" class="form-control inpfield" name="name" data-form-field="Name"
                                    required="" id="name-form1-2w">
                            </div>
                        </div>
                        <div class="col-md-12 multi-horizontal em" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7"
                                    for="email-form1-2w">Email*</label>
                                <input type="email" class="form-control inpfield" name="email" data-form-field="Email"
                                    required="" id="email-form1-2w">
                            </div>
                        </div>
                        <div class="col-md-12 multi-horizontal" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7"
                                    for="phone-form1-2w">Phone*</label>
                                <input type="tel" class="form-control inpfield" name="phone" data-form-field="Phone"
                                    id="phone-form1-2w" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label mbr-fonts-style display-7">How did you
                            hear about us?*</label>
                        <select class="form-control" name="howhear" onchange='checkvalue(this.value)' required>
                            <option value="">Please select</option>
                            <option value="Facebook">Facebook</option>
                            <option value="LinkedIn">LinkedIn</option>
                            <option value="Google Search">Google Search</option>
                            <option value="YouTube">YouTube</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Others">Others</option>
                        </select>
                        <input class="form-control inpfield mt-3" type="text" placeholder="Please specify*"
                            name="otherclr" id="howhearinp" />
                    </div>

                    <div class="form-group" data-for="message">
                        <label class="form-control-label mbr-fonts-style display-7"
                            for="message-form1-2w">Message*</label>
                        <textarea type="text" class="form-control inpfield" name="message" rows="4"
                            data-form-field="Message" id="message-form1-2w" required></textarea>
                    </div>


                    <span class="input-group-btn ml-1">
                        <button href="" type="submit" class="btn ml-0 btn-form display-4 sub-btn"
                            name="btn-send">SUBMIT</button>
                    </span>
                </form>
            </div>
        </div>
    </div>

    <img src="Assets/Images/contact/2.png" class="img-fluid banner2 w-100" alt="">

    <section>
        <div class="container-fluid mb-5">
            <h2 class="text-center mt-5">Office Locations</h2>
            <hr class="mx-auto w-25">
            <div class="row mt-3">
                <div class="col-lg-12 col-md-12 col-12 addresses">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 mx-auto">
                                <div class=" text-center address m-3">
                                    <img data-aos="zoom-in" class="img-fluid w-25" src="Assets/Images/address/UK.png"
                                        alt="">
                                    <h1 class="place">Europe - London (HQ)</h1>
                                    <p class="addr">Primed Talent Limited,
                                        27 Old Gloucester Street,
                                        London WC1N 3AX,
                                        United Kingdom
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 mx-auto">
                                <div class=" text-center address m-3">
                                    <img data-aos="zoom-in" class="img-fluid w-25"
                                        src="Assets/Images/address/Bangalore.png" alt="">
                                    <h1 class="place">Asia - India</h1>
                                    <p class="addr">
                                        c/o iPrimed Education Solutions Pvt Ltd.
                                        62B, Electronic City, Phase 1
                                        Bangalore – 560 100
                                        India
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="thankmodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered thankmodal">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body"> <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center mt-4 mb-3">Thank you for contacting us.</h2>
                    <p class="text-center">You are very important to us, all information received will always remain
                        confidential. We’ll get
                        back to you very soon.</p>
                </div>
                <div class="modal-footer"></div>
            </div>

        </div>
    </div>

    <div id="errormodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered thankmodal">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h1 class="text-center">Please try again</h1>
                </div>
                <div class="modal-footer"></div>
            </div>

        </div>
    </div>





    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 1000,

    });
    </script>

    <script>
    $(document).ready(function() {
        if (window.location.href.indexOf('?success') != -1) {
            $('#thankmodal').modal('show');
        }
    });

    $(document).ready(function() {
        if (window.location.href.indexOf('?error') != -1) {
            $('#errormodal').modal('show');
        }
    });
    </script>

    <script>
    function checkvalue(val) {
        if (val === "Others") {
            document.getElementById('howhearinp').style.width = '100%';
            document.getElementById('howhearinp').style.opacity = '1';
            document.getElementById('howhearinp').style.float = 'none';
            document.getElementById('howhearinp').setAttribute("required", "");

        } else {
            document.getElementById('howhearinp').style.width = '0';
            document.getElementById('howhearinp').style.opacity = '0';
            document.getElementById('howhearinp').style.float = 'right';
            document.getElementById('howhearinp').removeAttribute("required");
        }
    }
    </script>

    <?php include "footer.html" ?>
</body>

</html>