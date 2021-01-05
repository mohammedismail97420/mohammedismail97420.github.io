<?php 

$servername = "iprimedweb.db.4432916.f3b.hostedresource.net";
$database = "iprimedweb";
$username = "iprimedweb";
$password = "Ipr@Web2020";

//$gstrate=1.18;
$gstrate=1;
//$userid = rand(1,9999);
//$receiptid = rand(1,9999);
$userid = '';
$receiptid = '';
$timestamp = date('Y-m-d H:i:s');

// Create connection
$conn = new mysqli($servername,$username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    if(isset($_POST['btn-sendtcp']))
    {
		
       $ParentEmail = $_POST['email'];
       $ParentName = $_POST['name'];
       $Phone = $_POST['phone'];
       $KidName = $_POST['kname'];
       $courseId = $_POST['tcpcourse'];
       $Grade = $_POST['grade'];
       $Laptop = $_POST['lapradio'];

	   $selectsql = "SELECT coursename,price FROM   `tcp_course_master_temp` where courseid='$courseId'";
	   $result = mysqli_query($conn, $selectsql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result))
			{
				$Course =  $row['coursename'];
				$finalPrice = $row['price'];	

			}

		}

	  /* $coursesplit = explode(" - ", $Course);
	   $finalPrice = $coursesplit[2];
	   $bad_symbols = array(",", ".", "₹");
	   $finalPrice = str_replace($bad_symbols, "", $finalPrice); */


	   $to = "website@iprimed.com";
       $Subject = "Opted for Coding for Kids";
       $Msg2 = "Parent Email: ".$ParentEmail."\nParent Name: ".$ParentName."\nPhone: ".$Phone."\nKid Name: ".$KidName."\nCourse: ".$Course."\nPrice: ".$finalPrice."\nGrade: ".$Grade."\nHas laptop: ".$Laptop;
       if(empty($ParentEmail) || empty($ParentName) || empty($Phone) || empty($KidName) || empty($Grade) || empty($Laptop) || empty($Course))
	   
       {
           header('location:tcpregister_tmp.php?error');
       }
       else
       {

		   $finalPrice = $finalPrice * $gstrate;

		   $sql = "INSERT INTO tcp_user (parentemail, parentname, parentphone, kidname,course,grade,laptop,amount,createddt) VALUES ('$ParentEmail', '$ParentName', '$Phone','$KidName','$courseId','$Grade','$Laptop','$finalPrice','$timestamp')";
			if (mysqli_query($conn, $sql)) {
				$userid =mysqli_insert_id($conn);
			  echo "New record created successfully";
			  echo $userid;
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			$sql = "INSERT INTO tcp_transaction_details (userid, amount, currency,createddt) VALUES ('$userid', '$finalPrice', 'inr','$timestamp')";
			if (mysqli_query($conn, $sql)) {
				$receiptid =mysqli_insert_id($conn);
			  echo "New record created successfully";
			  echo $receiptid;
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

			mail($to,$Subject,$Msg2);
			$subject2="Registration Confirmation";
			$msg3="\nHi ".$ParentName.",\n\nThanks for your interest in The Coding Prodigy. We have received demo request for ".$KidName.".\nOur team will reach out to you shortly for booking a demo slot for your kid!\nHappy Coding!\n\nThanks\nTeam TCP";
			mail($ParentEmail,$subject2,$msg3);

			// header('Location: pay.php?userid=user109&fname='$firstName'&lname='$lastName'&email='$email'&price='$finalPrice'&contact='$phoneno');
			// header('Location: pay.php?userid=user109&fname='.$firstName.'&lname='.$lastName.'');
			header('Location: tcp_pay.php?userid='.$userid.'&ParentName='.$ParentName.'&KidName='.$KidName.'&ParentEmail='.$ParentEmail.'&Phone='.$Phone.'&receiptid='.$receiptid.'&price='.$finalPrice.
			'&coursetitle='.$Course.'');

	   }
    }
    else
    {
        header("location:tcpregister.php");
    }
?>