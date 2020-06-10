<?php
include_once "connection.php";
if(isset($_REQUEST['username']))
{
    $username=$_REQUEST["username"];
    $query="delete from admin WHERE username='".$username."'";
    if(mysqli_query($conn,$query))
    {
        header('location:view_admin.php');
    }
    else
    {
        echo "Record Not Deleted";
    }
}