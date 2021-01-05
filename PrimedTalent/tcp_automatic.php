<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!--Links-->


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="Assets_TCP/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/styles_tcp.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
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


    <script src="javascript/main.js">
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177924410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177924410-1');
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

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '2549187348632094');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=2549187348632094&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

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

    <?php
		$name = $data['name'];
		$courseTitle = $data['courseTitle'];
		$price =number_format($data['price'], 2, '.', ',' );

		

	  /*  $coursesplit = explode(" - ", $courseTitle1);
	    $courseTitle = $coursesplit[0]." ".$coursesplit[1];
		
		*/


	?>




    <div class="container text-center" style="min-height:58vh">

        <h5 class="mt-5"> Dear <?php echo $name ?>,You have decided to purchase the below Course being offerd by "Coding for Kids".
            Please proceed further to complete your purcahse.</h5>

        <table class="mb-5" id="course-table" style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th>
                        Title
                    </th>
                   

                    <th>
                        Price
                    </th>


                </tr>
            </thead>
            <tbody id="course-table-body">
                <tr>
                    <td><?php echo $courseTitle ?></td>
                    <td class="price-td">&#xa3 <?php echo $price ?></td> 
                </tr>

            </tbody>
        </table>




        <form class="mb-5" action="tcp_verify.php" method="POST">
            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $data['key']?>"
                data-amount="<?php echo $data['amount']?>" data-currency="GBP" data-buttontext="Pay with Razorpay"
                data-name="<?php echo $data['name']?>" data-image="<?php echo $data['image']?>"
                data-description="<?php echo $data['description']?>"
                data-prefill.name="<?php echo $data['prefill']['name']?>"
                data-prefill.email="<?php echo $data['prefill']['email']?>"
                data-prefill.contact="<?php echo $data['prefill']['contact']?>"
                data-notes.shopping_order_id="<?php echo $data["receiptid"]?>"
                data-order_id="<?php echo $data['order_id']?>" <?php if ($displayCurrency !== 'INR') { ?>
                data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
                <?php if ($displayCurrency !== 'INR') { ?>
                data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
                data-theme.color="<?php echo $data['theme']['color']?>" data-modal.escape="false">
            </script>
            <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
            <input type="hidden" name="receiptid" value="<?php echo $_GET["receiptid"]?>">
            <!--  receipt id from transaction_details -->
            <input type="hidden" name="price" value="<?php echo $_GET["price"]?>">
            <!--  receipt id from transaction_details -->


        </form>
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

    <!-- End of footer -->

    <script>
    function number_format(number, decimals, decPoint, thousandsSep) {
        decimals = decimals || 0;
        number = parseFloat(number);

        if (!decPoint || !thousandsSep) {
            decPoint = '.';
            thousandsSep = ',';
        }

        var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
        var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
        var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
        var formattedNumber = "";

        while (numbersString.length > 3) {
            formattedNumber += thousandsSep + numbersString.slice(-3)
            numbersString = numbersString.slice(0, -3);
        }

        return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint +
            decimalsString) : '');
    }
    </script>



</body>

</html>