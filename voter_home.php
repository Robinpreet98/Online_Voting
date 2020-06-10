<html>
<head>
    <title>homepage</title>
</head>
<body>
<?php
include_once "voter_header.php";
echo "welcome ".$_SESSION["voter"];
include "connection.php";
$select="select mobile_no from voter where adhaar=".$_SESSION['voter'];
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
$no=$row[0];
$pass="";
for($i=1;$i<=6;$i++)
{
    $choice=rand(1,10);
    if($choice>5)
    {
        $x=rand(48,57);
    }
    else
    {
        $x=rand(65,90);
    }
    $pass=$pass.chr($x);
}
$request =""; //initialise the request variable
$param['method']= "sendMessage";
$param['send_to'] = $no;
$param['msg'] = "Your OTP for Online Voting is $pass";
$param['userid'] = "2000036319";
$param['password'] = "vsssmsserver";
$param['v'] = "1.1";
$param['msg_type'] = "TEXT"; //Can be "FLASH”/"UNICODE_TEXT"/”BINARY”
$param['auth_scheme'] = "PLAIN";
//Have to URL encode the values
foreach($param as $key=>$val) {
    $request.= $key."=".urlencode($val);
//we have to urlencode the values
    $request.= "&";
//append the ampersand (&) sign after each  parameter/value pair
}
$request = substr($request, 0, strlen($request)-1);
//remove final (&) sign from the request
$url =
    "http://enterprise.smsgupshup.com/GatewayAPI/rest?".$request;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
$result=$curl_scraped_page;
echo $result;
$update="update voter set pin2='$pass' where adhaar=".$_SESSION['adhaar'];
mysqli_query($conn,$update);
header("location:candidates.php");

?>

</body>
</html>
