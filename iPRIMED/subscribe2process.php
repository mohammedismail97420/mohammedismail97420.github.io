<?php 
    if(isset($_POST['btn-send2']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Phone = $_POST['phone'];
       $Subject = "QA Page : Signup Form Submission ";
       $Msg2 = "Email: ".$Email."\nName: ".$UserName."\nPhone no: ".$Phone;
      
         if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg2))
       {
           header('location:standard.php?error');
       }
       else
       {
           if(preg_match('/^[0-9]{10}+$/', $Phone)==true)
              {
           $to = "website@iprimed.com";

           if(mail($to,$Subject,$Msg2,$Email))
           {
              
               header("location:standard.php?success");
               
           }
              }
              else{
                  header('location:standard.php?error2');
              }
       }
    }
    else
    {
        header("location:standard.php");
    }
?>