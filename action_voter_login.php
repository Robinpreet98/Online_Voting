<?php
if (isset($_REQUEST["tbadhaar"]))
{
    include_once "connection.php";
    $adhaar = $_REQUEST["tbadhaar"];
    $tbsecret_pin = $_REQUEST["tbsecret_pin"];
    $query = "Select * from voter";
    $result = mysqli_query($conn, $query);
    $flag = false;
    while ($row = mysqli_fetch_array($result))
    {
        if ($row[1] == $adhaar && $tbsecret_pin == $row[8] )
        {
            $flag = true;
            break;
        }
    }
}
if ($flag==true)
{
    session_start();
    $_SESSION['adhaar']=$adhaar;
    header('location:valid_pin1.php');
}
else
{
    header("location:voter_login.php?er=1");
}