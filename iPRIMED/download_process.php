<?php 
    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['name'];
       $Company = $_POST['company'];
       $Email = $_POST['email'];
       $Phone = $_POST['phone'];
       $Subject = "Download brochure";
       $Msg2 = "Hey, I am trying to download brochure.\nName:".$Name."\nCompany: ".$Company."\nEmail: ".$Email."\nPhone: $Phone";
       if(empty($Name) || empty($Email) || empty($Company) || empty($Phone))
       {
           header('location:download_brochure.php?error');
       }
       else
       {
           $to = "website@iprimed.com";

           if(mail($to,$Subject,$Msg2))
           {
               header("location:download_brochure.php?success");
           }
       }
    }
    else
    {
        header("location:download_brochure.php?hehe");
    }
?>