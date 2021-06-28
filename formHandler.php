<?php

    $myemail = $name = $email = $msg = $subject = $headers = "";

    if(isset($_POST['submit'])) {
        if($_POST['submit'] == "submit") {

            $myemail="ad16ms156@iiserkol.ac.in";
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $msg = strip_tags($_POST['message']);
            $subject = "Personal website data";

            $headers =  'From: '.$email."\r\n".
            $headers .= 'X-Mailer: PHP/' . phpversion().
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
            $sucess_msg = "Here is success msg";

            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mail_send = mail($myemail, $subject, $msg, $headers);
                if($mail_send) {
                    echo "<script>alert('".$sucess_msg."');
                     window.location.href='index.html';</script>";
                } else {
                    echo "<script>alert('This is embarassing, but seems that something went wrong. Please try again.');
                     window.location.href='index.html';</script>";
                }
            } else {
                echo "<script>alert('Please enter a valid email address');
                     window.location.href='index.html';</script>";
            }

        }
    }

?>
