<?php
if (isset($_REQUEST["tbemail"])) {
    include_once "connection.php";
    $email = $_REQUEST["tbemail"];
    $password = $_REQUEST["tbpassword"];
    $country=$_REQUEST['tbcountry'];
    $query = "Select * from signup";
    $result = mysqli_query($conn, $query);
    $flag = false;
    while ($row = mysqli_fetch_array($result)) {
        if ($row[0] == $email && $password == $row[1] && $country == $row[6]) {
            $flag = true;
            break;
        }
    }
}
if ($flag==true)
{
    session_start();
    $_SESSION['user']=$email;
    header('location:userhome.php');
}
else
{


}
