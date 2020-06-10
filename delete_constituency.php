<?php
include_once "connection.php";
if(isset($_REQUEST['q']))
{
    $const_id=$_REQUEST["q"];
    $delete_login="delete from const_login where const_id=$const_id";
    mysqli_query($conn,$delete_login);
    $query="delete from constituency WHERE const_id=$const_id";
    if(mysqli_query($conn,$query))
    {
        header('location:viewconstituency.php');
    }
    else
    {
        echo "Record Not Deleted";
    }
}
