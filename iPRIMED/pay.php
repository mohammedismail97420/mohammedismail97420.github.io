<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

$servername = "iprimedweb.db.4432916.f3b.hostedresource.net";
$database = "iprimedweb";
$username = "iprimedweb";
$password = "Ipr@Web2020";

$firstName= $_GET["fname"];
$lastName= $_GET["lname"];
$email= $_GET["email"];
$phoneno= $_GET["phoneno"];
$receiptid= $_GET["receiptid"];
$price= $_GET["price"];
$courseTitle= $_GET["coursetitle"];
$eventDate= $_GET["eventdate"];

// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => $receiptid, //receipt id from transaction_details
    'amount'          => $price* 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$conn = new mysqli($servername,$username, $password, $database);

$sql = "UPDATE transaction_details SET orderid='$razorpayOrderId' WHERE receiptid='$receiptid'";
if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';
//$checkout = 'manual';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $firstName,
    "description"       => "",
    "image"             => "https://www.iprimed.com/Assets/Images/iprimed.png",
    "prefill"           => [
    "name"              => $firstName,
    "email"             => $email,
    "contact"           => $phoneno,
	

    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => $receiptid, //receipt id from transaction_details
	
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
    "receiptid"         => $receiptid,
    "price"             => $price,
	"courseTitle"       => $courseTitle,
	"eventDate"         => $eventDate,
];


if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("{$checkout}.php");
