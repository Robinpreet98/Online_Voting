<?php
include_once("connection.php");
$adhaar = $_REQUEST['tbadhaar'];
$election_no = $_REQUEST["tbelectno"];
$name = $_REQUEST["tbname"];
$fathername = $_REQUEST["tbfname"];
$reason = $_REQUEST["tbreason"];
$mobile_no = $_REQUEST["tbmobile_no"];
$email = $_REQUEST["tbemail"];
$security_pin = $_REQUEST["tbs_pin"];
$pin1 = $_REQUEST["tbpin1"];
//$candidate_id = $_REQUEST["tbcand_id"];
//$date_vote = $_REQUEST["tbdate_vote"];
//$time_vote = $_REQUEST["tbtime_vote"];
$officer_name = $_REQUEST["tboff_login"];
//$const_id = $_REQUEST["tbconst_id"];
//$check = $_REQUEST["tbcheck"];
$select = "select * from voter";
$result = mysqli_query($conn, $select);
$flag = false;
while ($row = mysqli_fetch_array($result))
{
    if ($row[1] == $adhaar)
    {
        $flag = true;
        break;
    }
}

if ($flag==true)
{
    header('location:add_voter.php?er=1');
}
else
{
    session_start();
    $officer="select * from const_login where email='".$_SESSION['const']."'";
    $of_res=mysqli_query($conn,$officer);
    $off_row=mysqli_fetch_array($of_res);
    $off_id=$off_row[0];
    $query="INSERT INTO `voter`(`vid`, `adhaar`, `electno`, `name`, `fname`, `reason`, `mobile_no`, `email`, `s_pin`, `pin1`, `off_login`)
VALUES (null,$adhaar,'$election_no','$name','$fathername','$reason',$mobile_no,'$email','$security_pin','$pin1',$off_id)";
    echo $query;

//error_reporting(E_ALL);
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

    $mail->Subject    = "Online Voting Credentials";

    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $body="Your Voting Credentials are as follows : <br>
    Your adhaar No. is required and Pins required are as follows  : <br>
     Secret Pin : $security_pin and Pin 1 : $pin1 ";
    $mail->MsgHTML($body);

    $address = $email;
    $mail->AddAddress($address, "$name");

    /*$mail->AddAttachment("images/phpmailer.gif");      // attachment
    $mail->AddAttachment("images/phpmailer_mini.gif"); */// attachment

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
        if (mysqli_query($conn, $query)) {
            header('location:confirm_add_voter.php');

        }

    }


}