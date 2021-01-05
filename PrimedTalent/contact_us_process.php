<?php 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Phone = $_POST['phone'];
       $Subject = "Contact Us";
       $Msg = $_POST['message'];
       $How = $_POST['howhear'];
       $Otherclr = $_POST['otherclr'];
       if($How=="Others"){
           $How="Others(".$Otherclr.")";
       }
       $Msg2 = "Name:".$UserName."\nPhone no: ".$Phone."\nMessage: ".$Msg."\nHow I heard: ".$How;
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact-us.php?error');
       }
       else
       {
           $to = "info@primedtalent.com";

           if(mail($to,$Subject,$Msg2,$Email))
           {
               header("location:contact-us.php?success");
           }
       }
    }
    else
    {
        header("location:contact-us.php");
    }
?>