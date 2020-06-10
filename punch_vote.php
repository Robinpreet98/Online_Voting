<?php
$c_id=$_REQUEST['c_name'];
include "connection.php";
$select="select const from candidate where cand_id=".$c_id;
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
echo $const=$row[0];
date_default_timezone_set("Asia/Kolkata");
$date=date("d/m/Y");
$time=date("h:i:s A");
session_start();

$check="select `adhaar`,`check` from voter";
$check_res=mysqli_query($conn,$check);
$flag=0;
while($check_row=mysqli_fetch_array($check_res))
{
    if($check_row[0] == $_SESSION['adhaar'] && $check_row[1]==1)
    {
        $flag=1;
        break;
    }
}
echo $flag;
if($flag ==1)
{
    header("location:candidates.php?er=1");
}
else
{

    $update="update voter set cand_id=$c_id,const_id=$const, date_vote='$date',time_vote='$time',`check`='1' where adhaar=".$_SESSION['adhaar'];
    echo $update;
    mysqli_query($conn,$update);
    header("location:confirm_voting.php");

}
