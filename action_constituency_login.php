<?php
if (isset($_REQUEST["tbemail"])) {
    include_once "connection.php";
    $email = $_REQUEST["tbemail"];
    $password = $_REQUEST["tbpassword"];
    $query = "Select * from const_login";
    $result = mysqli_query($conn, $query);
    $flag = false;
    while ($row = mysqli_fetch_array($result)) {
        if ($row[2] == $email && $row[5] == $password ) {
            $flag = true;
            break;
        }
    }
}
if ($flag==true)
{
 session_start();
   $_SESSION["const"]= $email;
    header('location:constituency_home.php');
}
else
{
    header('location:constituency_login.php');

}
