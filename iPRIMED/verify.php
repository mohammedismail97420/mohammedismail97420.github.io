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
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
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
$sql = "INSERT INTO transaction_reponse (order_id,payment_id, signature,createddt) VALUES ('$razorpay_order_id','$razorpay_payment_id', '$razorpay_signature','$timestamp')";
if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if ($success === true)
{
    $sql = "UPDATE transaction_details SET status='Success',amount_paid='$price' WHERE receiptid='$receipt_id'";
    if (mysqli_query($conn, $sql)) {
        // echo "transaction details successfully updated";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    $html = "<h3>Your payment was successful. Someone from the team will get in touch with you soon.
In case of any query, please write to us at info@iprimed.com.</h3>
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
    <title>iPRIMED Educational Solutions</title>


    <!--Links-->




    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">




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


    <script src="javascript/main.js"></script>





</head>



<body>

    <?php include "header.html" ?>
    <div class="container mt-5 mb-5 text-center" style="min-height:51vh;">
        <?php
            echo $html; 
        ?>
    </div>
    <!-- Footer -->

    <?php include "footer.html" ?>

    <!-- End of footer -->





</body>

</html>