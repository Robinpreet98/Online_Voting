<?php
$pin1=$_REQUEST['pin1'];
include "connection.php";
session_start();
$select="select * from voter where adhaar=".$_SESSION['adhaar'];
echo $select;
$res=mysqli_query($conn,$select);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($row[10]==$pin1)
    {
        $flag=1;
        break;
    }
}
if($flag == 1)
{
    echo "Done";
    header("location:voter_home.php");
}
else
{
    echo "Error";
    header("location:valid_pin1.php?er=1");
}