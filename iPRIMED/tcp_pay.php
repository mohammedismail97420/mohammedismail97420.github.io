<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

$servername = "a2plcpnl0022.prod.iad2.secureserver.net"; 
$database = "iprimedweb";
$username = "iprimedweb";
$password = "Ipr@Web2020";

$ParentName= $_GET["ParentName"];
$KidName= $_GET["KidName"];
$ParentEmail= $_GET["ParentEmail"];
$Phone= $_GET["Phone"];
$receiptid= $_GET["receiptid"];
$price= $_GET["price"];
$courseTitle= $_GET["coursetitle"];
$eventDate= date('Y-m-d H:i:s');

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

$sql = "UPDATE tcp_transaction_details SET orderid='$razorpayOrderId' WHERE receiptid='$receiptid'";
if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

$_SESSION['tcp_razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'tcp_automatic';
//$checkout = 'manual';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['tcp_automatic','automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $ParentName,
    "description"       => "",
    "image"             => "https://www.iprimed.com/Assets/Images/iprimed.png",
    "prefill"           => [
    "name"              => $ParentName,
    "email"             => $ParentEmail,
    "contact"           => $Phone,
	

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
