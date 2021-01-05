<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPRIMED Educational Solutions</title>


    <!--Links-->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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

    <script src="javascript/main_ipr.js"></script>


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




    <!-- Header ribbon -->


    <?php include "header.html" ?>


    <!--End of Nav bar-->











    <!-- Default form register -->
    <div class="text-center container-fluid">
        <div class="row">

            <?php
        
        // $courseId= $_GET['courseId'];

    ?>
            <div class="col-lg-3 col-md-2 col-sm-0"></div>

            <div class="col-lg-6 col-md-8 col-sm-12">
                <form class=" text-center border border-light p-5 mx-auto " action="savedata.php" method="post">

                    <p class="h4 mb-4">Register</p>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" pattern="[A-Za-z]{1,32}" required name=" firstName" id="firstName"
                                class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" pattern="[A-Za-z]{1,32}" name=" lastName" id="lastName"
                                class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="email" name="email" id="email" required class="form-control mb-4" placeholder="E-mail">
                    <input type="email" id="confemail" required class="form-control mb-4" placeholder="Confirm E-mail"
                        onblur="confirmEmail()">


                    <input type=" phone" pattern="^\d{10}$" required name="phoneno" id="phoneno"
                        class="form-control mb-4" placeholder="10 digit phone number">

                    <textarea name="address" id="address" required cols="30" rows="3" class="form-control mb-4"
                        placeholder="Postal Address"></textarea>

                    <input type="text" name="courseTitle" id="courseTitle" class="form-control mb-4"
                        placeholder="Course" value="<?php echo $_GET["CourseTitle"]?>">
                    <input type="hidden" name="eventID" id="eventID" class="form-control mb-4" placeholder="Course"
                        value="<?php echo $_GET["eventId"]?>">
                    <input type="hidden" name="eventDate" id="eventDate" class="form-control mb-4" placeholder="Course"
                        value="<?php echo $_GET["eventDate"]?>">
                    <input type="hidden" name="finalPrice" id="finalPrice" class="form-control mb-4"
                        placeholder="Course" value="<?php echo $_GET["finalPrice"]?>">
                    <input type="hidden" name="courseId" id="courseId" class="form-control mb-4" placeholder="Course"
                        value="<?php echo $_GET["courseId"]?>">


                    <!-- Sign up button -->
                    <!-- <button class="btn btn-info my-4 btn-block"name="submit"onclick="savedata()" value="submit">Register</button> -->
                    <button class="btn btn-info my-4 btn-block" name="submit" value="submit">Register</button>


                    <hr>

                    <!-- Terms of service -->

                </form>
                <!-- Default form register -->
            </div>
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
        </div>



    </div>

    <script>
    function savedata() {
        <
        ?
        php

        $servername = "a2plcpnl0022.prod.iad2.secureserver.net"; 
        $database = "iprimedweb";
        $username = "iprimedweb";
        $password = "Ipr@Web2020";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn - > connect_error) {
            die("Connection failed: ".$conn - > connect_error);
        }
        // echo "Connected successfully";
        $firstName = $_POST['firstName'];
        $lastName = ($_POST['lastName']);
        $email = $_POST['email'];
        $email = $_POST['phoneno'];
        $address = $_POST['address'];

        $sql =
            "INSERT INTO User (userid,fname, lname, email, phone) VALUES ('user3','$firstName','$lastName','$phoneno')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: ".$sql.
            "<br>".mysqli_error($conn);
        }
        mysqli_close($conn);



        ?
        >
    }
    </script>



    <?php
        
        // $courseId= $_GET['courseId'];

    ?>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
         $( document ).ready(function() {
            var url_string= window.location.href; 
            var url = new URL(url_string);
            var c = url.searchParams.get("courseId");
            alert(c);

        });

    </script> -->





    <!--Footer-->

    <?php include "footer.html" ?>

    <!-- End of footer -->



</body>

</html>