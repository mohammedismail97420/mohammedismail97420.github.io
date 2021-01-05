<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Links-->




    <title>Primed Talent | Learning Management as a Service</title>
    <meta name="description"
        content="We are one of the leading custom LMS development solution provider company in UK. Security, scalability, integrations, implementation, are all built with Enterprise needs in mind. Boost your customer and partner performance today!">
    <meta name="keywords" content="Learning management , Digital Learning, Employee building, Employee training, Corporate Learning , Digital training , Mobile training,
learning measurement, learning metrics.
">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


    <!--End of links-->


    <!--Scripts-->



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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <script src="javascript/main.js"></script>
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
    <!--End of Nav bar-->

    <div class="img-text-div">
        <img class="womanj img-fluid w-100" src="Assets/Images/woman.jpg" alt="">

        <h1 class="text-on-imgh1">
            The easy way to<br>
            <span class="txt-rotate" data-period="2000"
                data-rotate='[ "Create Courses", "Train Your Teams", "Engage Learners"]'></span>
        </h1>
        <p class="text-center text-on-imgp">We are a one stop shop for your Learning Management needs<span
                style="font-size:12px">◼</span></p>

        <div class="watchbtndiv text-center">
            <button class="watchbtn" data-toggle="modal" data-target="#formmodal">
                <i class="far fa-play-circle" style=" vertical-align: middle;"></i>
                <span class="watchbtnp">Request for a Demo</span>
            </button>
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
                <form class="cuform" action="lmsformsprocess.php" method="post">

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








    <div class="lmsoffer">
        <div class="container pt-5 pb-5">
            <h2 class="text-center">What do we Offer?</h2>
            <hr class="w-25 mx-auto">

            <h5 class="text-center">We offer everything that a state of the art LMS
                offers</h5>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/1.png" class="img-fluid topimglms" alt="">
                        </div>
                        <p>Content Interoperability & Course Management</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/2.png" class="img-fluid  topimglms" alt="">
                        </div>
                        <p class="mt-3">User Management</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/3.png" class="img-fluid  topimglms" alt="">
                        </div>
                        <p class="mt-3">adaptive learning</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/4.png" class="img-fluid  topimglms" alt="">
                        </div>
                        <p>collaboration & communication tools</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/5.png" class="img-fluid  topimglms" alt="">
                        </div>
                        <p> automation & gamification</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/6.png" class="img-fluid  topimglms" alt="">
                        </div>
                        <p>integration<br> &
                            customization</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/7.png" class="img-fluid  topimglms" alt="">
                        </div>
                        <p class="mt-3">smart analytics</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/8.png" class="img-fluid  topimglms" alt="">
                        </div>
                        <p class="mt-3">security management</p>
                    </div>
                </div>
            </div>

            <h5 class="mt-5" style="line-height:1.5; text-align:center">We’ll be happy to
                demonstrate
                these to you. Just reach out to us!</h5>


            <div class="mt-4" style="display: flex;
  align-items: center;
  justify-content: center;">

                <button data-toggle="modal" data-target="#formmodal" class="sub-btn" style="border-radius:50px">Request
                    for a Demo</button>

            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 cdflex mt-5" style="font-size:20px;">
                <p>Instead, we’d like to draw your attention to our ability to deliver <span
                        style="font-size:22px"><b>Browser based
                            Bespoke
                            IT/Software
                            Technology Training.</b></span></p>
                <p>You just need a standard computing device (e.g. laptop) to be able to experience this
                    without
                    any
                    additional
                    infrastructure requirement. </p>
            </div>
            <div class="col-lg-6">
                <img src="Assets/Images/lms/4.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>


    </div>
    <div class="container">
        <div class="mb-5 mt-2" style="display: flex;
  align-items: center;
  justify-content: center;">
            <a href="bespoke">
                <button class="sub-btn" style="border-radius:50px">Know more</button>
            </a>
        </div>
    </div>

    <div class="container pt-5">
        <h2 class="text-center">How does this work?</h2>
        <hr class="mx-auto w-25">
        <h5 style="line-height:2">Whether you are a large corporation or a small enterprise (SME) or an
            individual
            looking to offer your
            training program(s) virtually, we have you covered.</h5>
        <h5 style="line-height:2">Whether you want to go online for the first time or want to migrate from
            another
            LMS,
            we are there to
            help
            you.</h5><br>
        <h5 class="text-center" style="font-weight:bold;">
            Our 3 step approach helps ensure efficiency and effectiveness</h5>
        <br>
    </div>



    <div class="container-fluid">

        <div class="multisteps-form">
            <!--progress bar-->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto mb-4">
                    <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Step
                            1</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Address">Step 2</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Order Info">Step
                            3</button>

                    </div>
                </div>
            </div>
            <!--form panels-->
            <div class="row">
                <div class="col-12 col-lg-8 m-auto">
                    <form class="multisteps-form__form">
                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                            data-animation="scaleIn">

                            <div class="multisteps-form__content">
                                <img src="Assets/Images/lms/1.png" class="img-fluid" alt="">
                                <div class="button-row d-flex mt-4">
                                    <button class="btn ml-auto js-btn-next" type="button" title="Next">
                                        <i class="fas fa-2x fa-chevron-circle-right js-btn-next"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">

                            <img src="Assets/Images/lms/2.png" class="img-fluid" alt="">
                            <div class="button-row d-flex mt-4">
                                <button class="btn js-btn-prev" type="button" title="Prev"><i
                                        class="fas fa-chevron-circle-left js-btn-prev fa-2x"></i></button>
                                <button class="btn ml-auto js-btn-next" type="button" title="Next"><i
                                        class="fas fa-chevron-circle-right js-btn-next fa-2x"></i></button>
                            </div>
                        </div>



                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                            <img src="Assets/Images/lms/3.png" class="img-fluid w-75 mx-auto" alt="">
                            <div class="button-row d-flex mt-4">
                                <button class="btn  js-btn-prev" type="button" title="Prev"><i
                                        class="fas fa-chevron-circle-left js-btn-prev fa-2x"></i></button>

                            </div>
                        </div>
                </div>

            </div>

        </div>


        <div class="mb-5 mt-5" style="display: flex;
  align-items: center;
  justify-content: center;">

            <button class="sub-btn" data-toggle="modal" data-target="#formmodal" style="border-radius:50px">Request
                for a Demo</button>

        </div>
    </div>

    <div class="valueadds">
        <div class="container pb-5">
            <h2 class="text-center">Value Adds</h2>
            <hr class="mx-auto w-25">
            <p class="text-center font-italic" style="font-size:20px">We are flexible!</p>

            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card shadow emodelcard">
                        <div class="row">
                            <div class="col-4 d-flex flex-column justify-content-center">
                                <img src="Assets/Images/emodels/1.png" class="img-fluid emimg" alt="">
                            </div>
                            <div class="col-8 d-flex flex-column justify-content-center">
                                <p class="mb-0">Post Go Live, you can choose to leave the <b>day to day
                                        administration</b>
                                    with us or
                                    do it yourself</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card shadow emodelcard">
                        <div class="row">
                            <div class="col-4 d-flex flex-column justify-content-center"><img
                                    src="Assets/Images/emodels/3.png" class="img-fluid emimg" alt=""></div>
                            <div class="col-8 d-flex flex-column justify-content-center">
                                <p class="mb-0">If you need to leverage our <b>library of self-paced learning
                                        content</b>,
                                    we will be
                                    happy to
                                    offer
                                    the
                                    same to you</p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card shadow emodelcard">
                        <div class="row">
                            <div class="col-4 d-flex flex-column justify-content-center">
                                <img src="Assets/Images/emodels/2.png" class="img-fluid emimg" alt="">
                            </div>
                            <div class="col-8 d-flex flex-column justify-content-center">
                                <p class="mb-0">If you’d like, we can deliver <b>Bespoke Training</b> for you or you can
                                    do
                                    it yourself or we
                                    can do
                                    it
                                    jointly. Whatever works for you works for us!</p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card shadow emodelcard">
                        <div class="row">
                            <div class="col-4 d-flex flex-column justify-content-center"><img
                                    src="Assets/Images/emodels/4.png" class="img-fluid emimg" alt=""></div>
                            <div class="col-8 d-flex flex-column justify-content-center">
                                <p class="mb-0">While we encourage you to author your own content, just in case the
                                    need arises,
                                    we are
                                    there
                                    to
                                    design & develop <b>Bespoke content</b> for you</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>




            <div class="mt-5" style="display: flex;
  align-items: center;
  justify-content: center;">
                <button class="sub-btn" data-toggle="modal" data-target="#formmodal" style="border-radius:50px">Request
                    for a Demo</button>

            </div>
        </div>


    </div>

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



    <?php include "footer.html" ?>

    <!-- End of footer -->

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

</body>

</html>