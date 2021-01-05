<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPRIMED | Learning Management as a Service</title>
    <meta name="description"
        content="All in one Learning management Hosting and support platform LMS to build your Business, Multifunctional and affordable LMS for all courses.Educate and train online  with the Best corporate training and learning platform hosting.The best Hosted Learning management system ">

    <meta name="keywords"
        content="lms, learning management system,No 1 Learning Management system, e-learning, online, training, online training, online courses, Java, C, programming, iprimed, placement, jobs, software development, testing, software testing, Android development, Web development, recruitment, learn English">
    <meta name="robots" content="index, follow">

    <!--Links-->




    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162925337-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-162925337-1');
    </script>


    <!--End of scripts-->

    <style>
    .navservices {
        color: #ff696a !important;
    }

    .navservices {
        position: relative;
        padding-bottom: 5px;
        color: #ff696a !important;
    }

    .navservices:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 0.5px;
        bottom: 0;
        left: 0;
        background-color: #ff696a;
        visibility: visible;
        transform: scaleX(1);
        transition: all 0.5s ease-in-out;
    }

    .navlms {
        color: #ff696a !important;
    }
    </style>

</head>



<body>

    <?php include "header.html" ?>
    <!--End of Nav bar-->






    <div class="img-text-div">
        <img class="womanj img-fluid w-100" src="Assets/Images/LMS.jpg" alt="LMS background">

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
                            <option value="Apna Complex">Apna Complex</option>
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
                            <img src="Assets/Images/lms/offer/Content.png" class="img-fluid topimglms"
                                alt="Content Interoperability">
                        </div>
                        <p>Content Interoperability & Course Management</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/User.png" class="img-fluid topimglms"
                                alt="User Management">
                        </div>
                        <p class="mt-3">User Management</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/Learning.png" class="img-fluid topimglms"
                                alt="adaptive learning">
                        </div>
                        <p class="mt-3">adaptive learning</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/Tools.png" class="img-fluid topimglms"
                                alt="collaboration & communication tools">
                        </div>
                        <p>collaboration & communication tools</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/Automation.png" class="img-fluid  topimglms"
                                alt="automation & gamification">
                        </div>
                        <p>automation & gamification</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/Integration.png" class="img-fluid  topimglms" alt="integration &
                            customization">
                        </div>
                        <p>integration<br> &
                            customization</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/Analytics.png" class="img-fluid topimglms"
                                alt="smart analytics">
                        </div>
                        <p class="mt-3">smart analytics</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="card offercardlms">
                        <div class="lmscardback">
                            <img src="Assets/Images/lms/offer/Security.png" class="img-fluid topimglms"
                                alt="security management">
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

                <button data-toggle="modal" data-target="#formmodal" class="sub-btn reqbtn"
                    style="border-radius:50px">Request for a Demo</button>

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
                <img src="Assets/Images/lms/Browser-based-Bespoke.png" class="img-fluid" alt="Browser based Bespoke">
            </div>
        </div>
    </div>


    </div>
    <div class="container">


        <div class="mb-5 mt-2" style="display: flex;
  align-items: center;
  justify-content: center;">
            <a href="bespoke">
                <button class="sub-btn reqbtn" style="border-radius:50px">Know more</button>
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
                                <img src="Assets/Images/lms/Assess.png" class="img-fluid"
                                    alt="Assess and ensure readiness">
                                <div class="button-row d-flex mt-4">
                                    <button class="btn ml-auto js-btn-next" type="button" title="Next">
                                        <i class="fas fa-2x fa-chevron-circle-right js-btn-next"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">

                            <img src="Assets/Images/lms/golive.png" class="img-fluid" alt="Go live">
                            <div class="button-row d-flex mt-4">
                                <button class="btn js-btn-prev" type="button" title="Prev"><i
                                        class="fas fa-chevron-circle-left js-btn-prev fa-2x"></i></button>
                                <button class="btn ml-auto js-btn-next" type="button" title="Next"><i
                                        class="fas fa-chevron-circle-right js-btn-next fa-2x"></i></button>
                            </div>
                        </div>



                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                            <img src="Assets/Images/lms/maintain.png" class="img-fluid w-75 mx-auto"
                                alt="Maintain and enhance">
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

            <button class="sub-btn reqbtn" data-toggle="modal" data-target="#formmodal"
                style="border-radius:50px">Request
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
                                <img src="Assets/Images/emodels/administration.png" class="img-fluid emimg"
                                    alt="Administration">
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
                                    src="Assets/Images/emodels/Learning-content.png" class="img-fluid emimg"
                                    alt="Learning content">
                            </div>
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
                                <img src="Assets/Images/emodels/bespoke-training.png" class="img-fluid emimg"
                                    alt="Bespoke training">
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
                                    src="Assets/Images/emodels/bespoke-content.png" class="img-fluid emimg"
                                    alt="Bespoke content"></div>
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

                <button class="sub-btn reqbtn" data-toggle="modal" data-target="#formmodal"
                    style="border-radius:50px">Request for a Demo</button>

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



</body>

</html>