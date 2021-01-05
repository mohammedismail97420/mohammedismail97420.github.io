<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPRIMED Educational Solutions</title>


    <!--Links-->




    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">






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


</head>



<body>

    <?php include "header.html" ?>

    <?php
		$name = $data['name'];
		$courseTitle1 = $data['courseTitle'];
		$price =number_format($data['price'], 2, '.', ',' );

		

	    $coursesplit = explode(" - ", $courseTitle1);
	    $courseTitle = $coursesplit[0]." ".$coursesplit[1];
		



	?>




    <div class="container text-center" style="min-height:58vh">

        <h5 class="mt-5"> Dear <?php echo $name ?>,You have decided to purchase the below Course being offerd by The Coding Prodigy.
            Please proceed further to complete your purcahse.</h5>

        <table class="mb-5" id="course-table" style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th>
                        Title
                    </th>
                   <!-- <th>
                        Date
                    </th>
                    <th>
                        Time
                    </th> -->

                    <th>
                        Price
                    </th>


                </tr>
            </thead>
            <tbody id="course-table-body">
                <tr>
                    <td><?php echo $courseTitle ?></td>
                    <!-- <td><?php echo $eventDay ?></td>
                    <td><?php echo $eventTime ?></td> -->
                    <td class="price-td">&#8377 <?php echo $price ?></td>
                </tr>

            </tbody>
        </table>




        <form class="mb-5" action="tcp_verify.php" method="POST">
            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $data['key']?>"
                data-amount="<?php echo $data['amount']?>" data-currency="INR" data-buttontext="Pay with Razorpay"
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

    <?php include "footer.html" ?>

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