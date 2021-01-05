<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if (isset($_POST['btn-send'])) {
    // Get the submitted form data
    $postData = $_POST;
    $subject = "AWS (Leeds)";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Exp = $_POST['Exp'];
    $Noy = $_POST['years'];
    $Nom = $_POST['months'];
    $Ljr = $_POST['ljr'];
    $Industry = $_POST['industry'];
    $Indother = $_POST['indother'];
    $How = $_POST['howhear'];
    $Howother = $_POST['howother'];
    $message = $_POST['message'];

    if ($How == "Others") {
        $How = "Others (" . $Howother . ")";
    }
    if ($Industry == "Others") {
        $Industry = "Others (" . $Indother . ")";
    }
    $Msg2 = '<p><b>Name: </b>' . $name . '</p>
    <p><b>Email: </b>' . $email . '</p>
    <p><b>Phone no: </b>' . $Phone . '</p>
    <p><b>Has work Experience: </b>' . $Exp . '</p>';

    if ($Exp == "Yes") {
        if ($Noy != "") {
            $Msg2 .= '<p><b>Number of years: </b>' . $Noy . '</p>';
        }
        if ($Nom != "") {
            $Msg2 .= '<p><b>Number of months: </b>' . $Nom . '</p>';
        }
        if ($Nom != "") {
            $Msg2 .= '<p><b>Last job role: </b>' . $Ljr . '</p>';
        }
        if ($Industry != "") {
            $Msg2 .= '<p><b>Industry: </b>' . $Industry . '</p>';
        }
    }

    $Msg2 .= '<p><b>Message: </b>' . $message . '</p>
    <p><b>How I heard: </b>' . $How . '</p>';

    // Check whether submitted data is not empty
    if (!empty($email) && !empty($name) && !empty($subject) && !empty($Msg2)) {


        $uploadStatus = 1;

        // Upload attachment file
        if (!empty($_FILES["attachment"]["name"])) {

            // File path config
            $targetDir = "uploads/";
            $fileName = basename($_FILES["attachment"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Allow certain file formats
            $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to the server
                if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)) {
                    $uploadedFile = $targetFilePath;
                } else {
                    $uploadStatus = 0;
                    // header('location:AWS-Leeds?error');
                    // $statusMsg = "Sorry, there was an error uploading your file.";
                }
            } else {
                $uploadStatus = 0;
                header('location:AWS-Leeds?fileerror');
                // $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
            }
        }

        if ($uploadStatus == 1) {

            // Recipient
            $toEmail = 'info@primedtalent.com';

            // Sender
            $from = $email;
            $fromName = 'Primed Talent';

            // Subject
            $emailSubject = "AWS(Leeds)";

            // Message 
            $htmlContent = $Msg2;

            // Header for sender info
            $headers = "From: $fromName" . " <" . $from . ">";

            if (!empty($uploadedFile) && file_exists($uploadedFile)) {

                // Boundary 
                $semi_rand = md5(time());
                $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                // Headers for attachment 
                $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

                // Multipart boundary 
                $Msg2 = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

                // Preparing attachment
                if (is_file($uploadedFile)) {
                    $Msg2 .= "--{$mime_boundary}\n";
                    $fp =    @fopen($uploadedFile, "rb");
                    $data =  @fread($fp, filesize($uploadedFile));
                    @fclose($fp);
                    $data = chunk_split(base64_encode($data));
                    $Msg2 .= "Content-Type: application/octet-stream; name=\"" . basename($uploadedFile) . "\"\n" .
                        "Content-Description: " . basename($uploadedFile) . "\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"" . basename($uploadedFile) . "\"; size=" . filesize($uploadedFile) . ";\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                }

                $Msg2 .= "--{$mime_boundary}--";
                $returnpath = "-f" . $email;

                // Send email
                $mail = mail($toEmail, $emailSubject, $Msg2, $headers, $returnpath);

                // Delete attachment file from the server
                @unlink($uploadedFile);
            } else {
                // Set content-type header for sending HTML email
                $headers .= "\r\n" . "MIME-Version: 1.0";
                $headers .= "\r\n" . "Content-type:text/html;charset=UTF-8";

                // Send email
                $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
            }

            // If mail sent
            if ($mail) {
                $postData = '';
                header("location:AWS-Leeds?success");
            } else {
                header('location:AWS-Leeds?error');
            }
        }
    }
} else {
    header("location:AWS-Leeds");
}
