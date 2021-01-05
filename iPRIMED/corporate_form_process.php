<?php 
    if(isset($_POST['btn-send5']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Phone = $_POST['phone'];
       $Subject = "Someone just tried Contacting you..";
       $Msg = $_POST['message'];
       $Msg2 = "Name:".$UserName."\nPhone: ".$Phone."\nEmail: ".$Email."\nMessage: ".$Msg;
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Phone))
       {
           header('location:corporate.php?error');
       }
       else
       {
           $to = "website@iprimed.com";
           if(mail($to,$Subject,$Msg2,$Email))
           {
               header("location:corporate.php?success");
           }
       }
    }
    else
    {
        header("location:corporate.php");
    }
?>