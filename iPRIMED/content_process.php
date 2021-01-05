<?php 
    if(isset($_POST['contentbtn-send']))
    {
       $Name = $_POST['name'];
       $Phone = $_POST['phone'];
       $Email = $_POST['email'];
       $Msg = $_POST['message'];
       $Subject = "Requesting to call back (Content page)";
       $Msg2 = "Name:".$Name."\nPhone no: ".$Phone."\nEmail: ".$Email."\nMessage: ".$Msg;
       if(empty($Name) || empty($Email) || empty($Subject) || empty($Phone))
       {
           header('location:content.php?error');
       }
       else
       {
           $to = "website@iprimed.com";

           if(mail($to,$Subject,$Msg2,$Email))
           {
               header("location:content.php?success");
           }
       }
    }
    else
    {
        header("location:content.php");
    }
?>