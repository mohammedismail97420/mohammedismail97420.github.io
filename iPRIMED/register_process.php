<?php 
    if(isset($_POST['btn-reg']))
    {
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $cemail = $_POST['cemail'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $course = $_POST['course'];
       $subject = "New user registered";
       $msg = "First Name: ".$fname."\nLirst Name: ".$lname."\nEmail: ".$email."\nConfirm email: ".$cemail."\nPhone no: ".$phone."\nAddress: ".$address."\nCourse: ".$course;
       if(empty($fname) || empty($lname) || empty($email) || empty($cemail) || empty($phone) || empty($address) || empty($course) || (!strcmp($email, $cemail)==0))
       { 
           header('location:register.php?error');
       }
       else
       {
           $to = "website@iprimed.com";

           if(mail($to,$subject,$msg))
           {
               header("location:register.php?success");
           }
       }
    }
    else
    {
        header("location:register.php");
    }
?>