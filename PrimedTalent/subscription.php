<?php 

if(isset($_POST['btn-send']))
{
   
   $Email = $_POST['email'];
   $Subject = "New Subscriber";
   $Msg="Hi, I am a new Subscriber\n".$Email;
   $to = "info@primedtalent.com";
       if(mail($to,$Subject,$Msg))
       {
           header("location:index.php?success");
       }
       else
       {
           header("location:index.php?error");
       }
}
else
{
    header("location:index.php");
}
?>