<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPRIMED | 404</title>
    <meta name="description"
        content="iPRIMED is focused on unlocking potential of our clients, students, employees, and other stakeholders and putting them on a fast-track growth trajectory.">
    <meta name="keywords"
        content="e-learning, online, training, online training, online courses, Java, C, programming, iprimed, placement, jobs, software development, testing, software testing, Android development, Web development, recruitment, learn English">
    <meta name="robots" content="index, follow">
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


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162925337-1"></script>

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




</head>



<body>

    <?php include "header.html" ?>
    <!--End of Nav bar-->


    <div class="container text-center">
        <h1>Oops!</h1>
        <h2>Page not found</h2>
        <img class="img-fluid" src="Assets/Images/404.png" alt="404-image"><br>
        <p>Looks like the page is missing.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


    <?php include "footer.html" ?>

    <!-- End of footer -->



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

    <script>
    // $(document).ready(function(){
    // 	$('div#loading').removeAttr('id');
    // });
    var preloader = document.getElementById("loading");
    // window.addEventListener('load', function(){
    // 	preloader.style.display = 'none';
    // 	})

    function myFunction() {
        preloader.style.display = 'none';
    };
    </script>





</body>

</html>