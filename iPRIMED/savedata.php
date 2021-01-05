<?php

$servername = "a2plcpnl0022.prod.iad2.secureserver.net"; 
$database = "iprimedweb";
$username = "iprimedweb";
$password = "Ipr@Web2020";

$gstrate=1.18;

// Create connection
$conn = new mysqli($servername,$username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$address = $_POST['address'];
$courseId = $_POST['courseId'];
$courseTitle = $_POST["courseTitle"];
$eventID = $_POST['eventID'];
//$eventDate = $_POST['eventDate'];
$eventDate = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$_POST['eventDate'])));
$finalPrice = $_POST['finalPrice'];
$finalPrice = $finalPrice * $gstrate;
//$userid = rand(1,9999);
//$receiptid = rand(1,9999);
$userid = '';
$receiptid = '';
$timestamp = date('Y-m-d H:i:s');


$sql = "INSERT INTO User (fname, lname, email, phone,address,courseid,eventid,evenetdt,price,createddt) VALUES ('$firstName', '$lastName', '$email','$phoneno','$address','$courseId','$eventID','$eventDate','$finalPrice','$timestamp')";
if (mysqli_query($conn, $sql)) {
	$userid =mysqli_insert_id($conn);
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO transaction_details (userid, amount, currency,createddt) VALUES ('$userid', '$finalPrice', 'inr','$timestamp')";
if (mysqli_query($conn, $sql)) {
	$receiptid =mysqli_insert_id($conn);
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// header('Location: pay.php?userid=user109&fname='$firstName'&lname='$lastName'&email='$email'&price='$finalPrice'&contact='$phoneno');
// header('Location: pay.php?userid=user109&fname='.$firstName.'&lname='.$lastName.'');
header('Location: pay.php?userid='.$userid.'&fname='.$firstName.'&lname='.$lastName.'&email='.$email.'&phoneno='.$phoneno.'&receiptid='.$receiptid.'&price='.$finalPrice.
'&coursetitle='.$courseTitle.'&eventdate='.$eventDate.'');

?>




