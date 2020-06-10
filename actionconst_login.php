<?php
if (isset($_REQUEST["tbemail"])) {
    include_once "connection.php";

    $const_id = $_REQUEST["tbconst_id"];
    $email = $_REQUEST["tbemail"];
    $off_name = $_REQUEST["tboff_name"];
    $mob_no = $_REQUEST["tbmob_no"];
    $password = $_REQUEST["tbpassword"];

    error_reporting(E_STRICT);

    date_default_timezone_set('Asia/Kolkata');

    require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail             = new PHPMailer();

    /*$body             = file_get_contents('contents.html');
    $body             = preg_replace('/[\]/','',$body);*/

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host       = "mail.yourdomain.com"; // SMTP server
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "tania.vmmteachers23@gmail.com";  // GMAIL username
    $mail->Password   = "vmmteachers@23";            // GMAIL password

    $mail->SetFrom('tania.vmmteachers23@gmail.com', 'Online Voting');

    $mail->AddReplyTo("tania.vmmteachers23@gmail.com","Online Voting");

    $mail->Subject    = "Constituency Login Credentials";

    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $body="You have been successfully registered for Login Constituencies<br>
Your Email Id : ".$email." and password is : $password";
    $mail->MsgHTML($body);

    $address = $email;
    $mail->AddAddress($address, "$off_name");

    /*$mail->AddAttachment("images/phpmailer.gif");      // attachment
    $mail->AddAttachment("images/phpmailer_mini.gif"); */// attachment

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

    $query = "insert into const_login  VALUES (null,'" . $const_id . "','" . $email . "','" . $off_name . "','" . $mob_no . "','" . $password . "')";
    echo "<br>".$query;
    if (mysqli_query($conn, $query)) {
        header('location:confirmconst_login.php');

    }


}