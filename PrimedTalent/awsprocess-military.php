<?php
if (isset($_POST['btn-send'])) {
    $Subject = "AWS (Military)";
    $UserName = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Exp = $_POST['Exp'];
    $Noy = $_POST['years'];
    $Nom = $_POST['months'];
    $Ljr = $_POST['ljr'];
    $Industry = $_POST['industry'];
    $Indother = $_POST['indother'];
    $How = $_POST['howhear'];
    $Howother = $_POST['howother'];
    $Msg = $_POST['message'];
    $City = $_POST['milcity'];
    $Cityother = $_POST['othercity'];
    $Relocate = $_POST['relocate'];
    $Resume = $_POST['resume'];

    if ($How == "Others") {
        $How = "Others (" . $Howother . ")";
    }

    if ($Industry == "Others") {
        $Industry = "Others (" . $Indother . ")";
    }

    if ($City == "Other") {
        $City = "Other (" . $Cityother . ")";
    }


    $Msg2 = "Name: " . $UserName . "\nEmail: " . $Email . "\nPhone no: " . $Phone . "\nHas work Experience: " . $Exp;

    if ($Resume != "") {
        $Msg2 .= "\n\n<-----Resume----->\n\n" . $Resume;
    }

    if ($Exp == "Yes") {
        if ($Noy != "") {
            $Msg2 .= "\nNumber of years: " . $Noy;
        }
        if ($Nom != "") {
            $Msg2 .= "\nNumber of months: " . $Nom;
        }
        if ($Nom != "") {
            $Msg2 .= "\nLast job role: " . $Ljr;
        }
        if ($Industry != "") {
            $Msg2 .= "\nIndustry: " . $Industry;
        }
    }

    $Msg2 .= "\nMessage: " . $Msg . "\nHow I heard: " . $How;

    $Msg2 .= "\nCity: " . $City;

    if ($Relocate != "") {
        $Msg2 .= "\nReady to relocate: " . $Relocate;
    }

    if (empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)) {
        header('location:AWS-Military?error');
    } else {
        $to = "info@primedtalent.com";

        if (mail($to, $Subject, $Msg2)) {
            header("location:AWS-Military?success");
        }
    }
} else {
    header("location:AWS-Military");
}
