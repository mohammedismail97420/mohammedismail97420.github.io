<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPRIMED | Brochure</title>
    <meta name="description" content="Updates from iPRIMED">
    <meta name="keywords"
        content="Learn more, know more, brochure, read, recruitment, training, Capgemini, Infosys, Tech Mahindra, tata steels, hiring, skill, LMS, content development, school">
    <meta name="robots" content="index, nofollow">
    <!--Links-->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
    body {
        background-image: url('Assets/Images/brochure-background.png');
        background-size: 100%;
    }
    </style>
    <style>
    .navresources {
        color: #ff696a !important;
    }

    .navresources {
        position: relative;
        padding-bottom: 5px;
        color: #ff696a !important;
    }

    .navresources:before {
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

    .navbroc {
        color: #ff696a !important;
    }
    </style>

</head>


<body>


    <?php include "header.html" ?>

    <!-- Download form -->
    <section>
        <div class="container text-center">
            <h3 class="text-center mt-3"><b>REQUEST BROCHURE</b></h3>
            <form class="m-5 mt-3" action="download_process.php" method="post">
                <div class="row">
                    <div class="form-row col-lg-3">

                    </div>
                    <div class="form-row col-lg-6">
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
 
                            if(isset($_GET['success']))
                            {
                                $Msg = "Thank you for contacting iPRIMED, will share the brochure on provided email ID soon !!";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                            ?>
                        <div class="form-group col-md-12">
                            <label class="float-left" for="inputName4">Name*</label>
                            <input type="text" name="name" class="inp form-control" id="inputName4" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="float-left" for="inputComp4">Company*</label>
                            <input type="text" name="company" class="inp form-control" id="inputComp4" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="float-left" for="inputName4">Email address*</label>
                            <input type="email" name="email" class="inp form-control" id="inputEmail4" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="float-left" for="inputPhone4">Phone*</label>
                            <input id="demo" name="phone" type="text" class="inp form-control"
                                placeholder="+91 9123456789" required>
                        </div>

                    </div>
                    <div class="form-row col-lg-3">

                    </div>
                </div>


                <button class="buttondown" href="" type="submit" name="btn-send"><span>Submit</span></button>

            </form>

        </div>




    </section>





















    <?php include "footer.html" ?>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 1500,
    });
    </script>

    <!-- AOS.init({
   easing: 'ease-out-back',
   duration: 800,
   delay: 300,
   once: true,
   disable: 'mobile'
}); -->


</body>

</html>