<?php
include_once "connection.php";
if(isset($_REQUEST['q']))
{
    $id=$_REQUEST["q"];
    $delete_login="delete from const_login where id=$id";
  //  mysqli_query($conn,$delete_login);
   // $query="delete from constituency WHERE const_id=$const_id";
    if(mysqli_query($conn,$delete_login))
    {
        header('location:view_const_login.php');
    }
    else
    {
        echo "Record Not Deleted";
    }
}
