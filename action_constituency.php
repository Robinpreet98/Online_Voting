<?php

    include_once("connection.php");
    $const_name = $_REQUEST['tbconst_name'];
    $population = $_REQUEST['tbpopulation'];
    $wards = $_REQUEST["tbwards"];
    $state = $_REQUEST["tbstate"];

    $select = "select * from constituency";
    $result = mysqli_query($conn, $select);
    $flag = false;
    while ($row = mysqli_fetch_array($result))
    {
        if ($row[0] == $const_name)
            {
            $flag = true;
            break;
        }
    }

if ($flag==true)
{
    header('location:constituency.php?er=1b ,,');
}
else
{
    $query="insert into constituency VALUES ('".$const_id."','".$const_name."','".$population."','".$wards."','".$state."')";
    if (mysqli_query($conn, $query)) {
        header('location:confirm_constituency.php');

    }

}