<?php 
    if(isset($_POST['btn-sendtrial']))
    {	
       $ParentEmail = $_POST['email'];
       $ParentName = $_POST['name'];
       $Phone = $_POST['phone'];
       $KidName = $_POST['kname'];
       $courseId = $_POST['tcpcourse'];
       $Grade = $_POST['grade'];
       $Laptop = $_POST['lapradio'];
	   $to = "website@iprimed.com";
       $Subject = "Opted for Coding for Kids (Free trial)";
       $How = $_POST['howhear'];
       $Otherclr = $_POST['otherclr'];
       if($How=="Others"){
           $How="Others(".$Otherclr.")";
       }
       $Msg2 = "Parent Email: ".$ParentEmail."\nParent Name: ".$ParentName."\nPhone: ".$Phone."\nKid Name: ".$KidName."\nCourse: ".$courseId."\nGrade: ".$Grade."\nHas laptop: ".$Laptop."\nHow I heard: ".$How;
       if(empty($ParentEmail) || empty($ParentName) || empty($Phone) || empty($KidName) || empty($Grade) || empty($Laptop) || empty($courseId))
	   
       {
           header('location:freetrial.php?error');
       }
       else
       {
        	mail($to,$Subject,$Msg2);
			$subject2="Registration Confirmation";
			$msg3="\nHi ".$ParentName.",\n\nThanks for your interest in The Coding Prodigy. We have received your demo request for ".$KidName.".\nOur team will reach out to you shortly for booking a demo slot for your kid!\nHappy Coding!\n\nThanks\nTeam TCP";
            mail($ParentEmail,$subject2,$msg3);
            header('location:freetrial.php?success');

	   }
    }
    else
    {
        header("location:freetrial.php");
    }
?>