<?php

    include_once "connection.php";
    $email = $_REQUEST["tbemail"];
    $password = $_REQUEST["tbpassword"];
    $first_name=$_REQUEST["tbfirstname"];
    $last_name=$_REQUEST["tblastname"];
    $mobileno=$_REQUEST["tbmobileno"];
    $address=$_REQUEST["tbaddress"];
    $country=$_REQUEST['tbcountry'];
    $query = "Select * from signup";
    $result = mysqli_query($conn, $query);
    $flag = false;
    while ($row = mysqli_fetch_array($result))
    {
        if ($row[0] == $email)
        {
            $flag = true;
            break;
        }
    }

    if ($flag==true)
{

   header('location:signup.php?er=1');
}
else
{

    $query = "insert into signup values('" . $email . "','" . $password . "','" . $first_name . "','" . $last_name . "','" . $mobileno . "','" . $address . "','" . $country . "')";
    if (mysqli_query($conn, $query)) {
        header('location:confirm_signup.php');

    }

}
