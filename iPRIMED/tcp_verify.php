<?php

require('config.php');

session_start();

$servername = "a2plcpnl0022.prod.iad2.secureserver.net"; 
$database = "iprimedweb";
$username = "iprimedweb";
$password = "Ipr@Web2020";

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['tcp_razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
$razorpay_order_id=$_POST['razorpay_order_id'];
$razorpay_payment_id=$_POST['razorpay_payment_id'];
$razorpay_signature=$_POST['razorpay_signature'];
$timestamp = date('Y-m-d H:i:s');
$receipt_id = $_POST['receiptid'];
$price = $_POST['price'];

$conn = new mysqli($servername,$username, $password, $database);
$sql = "INSERT INTO tcp_transaction_response (order_id,payment_id, signature,createddt) VALUES ('$razorpay_order_id','$razorpay_payment_id', '$razorpay_signature','$timestamp')";
if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if ($success === true)
{
    $sql = "UPDATE tcp_transaction_details SET status='Success',amount_paid='$price' WHERE receiptid='$receipt_id'";
    if (mysqli_query($conn, $sql)) {
        // echo "transaction details successfully updated";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    $html = "<h3>Your payment was successful. Someone from the team will get in touch with you soon.
In case of any query, please write to us at tcp@iprimed.com.</h3>
             <h3>Order ID: {$_POST['razorpay_order_id']}</h3>";
			 // aftre this need to update the  response in transaction_reponse and redirect to homepage
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Private Coding Classes for Kids | iPRIMED</title>
    <meta name="description" content="We strongly believe that every hire counts and one wrong hire can spoil the game! We don’t focus much on the “exact match” model used for Just in Time hiring – but, rather look at a different approach!
For a Client, we source candidates who are not an exact fit for the job requirement but are trainable to meet the requirement in a span of a few weeks/months via our unique and transformational learning model. We check for trainability via our proprietary Assessment & Profiling tool (iPAT). Post successful completion of training, the candidate gets engaged with the Client in a productive manner. This is our USP
">
    <meta name="keywords"
        content="hire employees, hire staff, hire office staff, find employees to hire, hiring new employees, best way to hire employees, best way to hire new employees, ways to hire employees, I want to hire staff, best site to hire employees, digital marketing course, devops training, online marketing courses, train employee, training supervisors, employee train, online employee training, training and developing employees, training workers, training to staff, training and developing staff, staff induction">
    <meta name="robots" content="index, follow">
    <!--Links-->


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="Assets_TCP/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles_tcp.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <!--End of links-->


    <!--Scripts-->



    <!-- BotPenguin bot script starts here -->
    <script id="Ym90cGVuZ3VpbkFwaQ" src="https://cdn.botpenguin.com/bot.js?apiKey=GC49b%28-%3E%29VsCVCWo%7ED6X%3EI"
        async></script>
    <!-- BotPenguin bot script ends here -->
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


    <script src="javascript/main.js">
    </script>


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

    <!-- <style>
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

    .navrec {
        color: #ff696a !important;
    }
    </style> -->

	

</head>



<body style="overflow-x:hidden !important;" id="tcphome">

    <!--Nav bar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="box-shadow: none !important; position: sticky; top: 0;">
        <div class="container" style="
      position: sticky;
      top: 0;
      background-color: white;
      z-index: 10000000;
    ">
            <a class="navbar-brand navbarbrand logo1" href="tcp.php">
                <img class="img-fluid" id="tcplogo" src="Assets_TCP/Images/logo.png" />
            </a>

            <div class="navbar-toggler" id="nav-mhweb-hamburger" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-other-items navhome" href="/tcp.php#tcphome">
                            Home<span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-other-items navabout" href="/tcp.php#tcpcourses">Courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-other-items navabout" href="/tcp.php#whyus">Why Us?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-other-items navabout" href="/tcp.php#hitw">How it works</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-other-items buybtn" href="tcpregister.php">Buy a Course</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-other-items navabout" href="/tcp.php#faq">FAQ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link cont conttrial" href="#">&nbsp;&nbsp;&nbsp;Book a Free
                            Trial</a>
                    </li>
                </ul>
            </div>

    </nav>

    <!--End of Nav bar-->

    <div class="container mt-5 mb-5 text-center" style="min-height:51vh;">
        <?php
            echo $html; 
        ?>
    </div>
    
	<!-- Footer -->
    <section>
        <div class="container-fluid tcpfooter" style="overflow:hidden">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <a href="https://iprimed.com" target="_blank">
                        <img class="img-fluid footipr" src="Assets_TCP/Images/iprimed.png" alt="">
                    </a>
                </div>
                <div class="col-lg-6 text-center tcplinks">
                    <h6><b>The Coding Prodigy - Learn from the Masters at the game!</b></h6>
                    <a href="tcp.php">Home&nbsp;&nbsp;</a>᛫
                    <a href="/tcp.php#tcpcourses">&nbsp;Courses&nbsp;&nbsp;</a>᛫
                    <a href="/tcp.php#whyus">&nbsp;Why Us?&nbsp;&nbsp;</a>᛫
                    <a href="/tcp.php#hitw">&nbsp;How it works&nbsp;&nbsp;</a>᛫
                    <a href="/tcp.php#faq">&nbsp;FAQ&nbsp;</a>
                    <p>iPRIMED Education Solutions Pvt Ltd © 2020</p>
                </div>
                <div class="col-lg-3 text-center mt-4">
                    <div class="footer-icons">
                        <a href="https://www.facebook.com/iprimedIndia/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/iprimed"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/school/iprimed-education-solutions-private-ltd/"><i
                                class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/iprimed_official/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCfOFyLFWCeBmjIF6MtTx8Pg"><i
                                class="fa fa-youtube"></i></a>
                        <a href="privacy_policy.html"><i class="fas fa-file-contract"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 1000,
    });
    </script>

    <script>
    $('input').on('focusin', function() {
        $(this).parent().find('label').addClass('active');
    });

    $('input').on('focusout', function() {
        if (!this.value) {
            $(this).parent().find('label').removeClass('active');
        }
    });
    </script>

    <script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's logo's size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("tcplogo").style.height = "70px";
        } else {
            document.getElementById("tcplogo").style.height = "100px";
        }
    }
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