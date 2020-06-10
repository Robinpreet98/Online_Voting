<?php
$email=$_REQUEST['tbemail'];
$off_name=$_REQUEST['tboff_name'];
$mob_no=$_REQUEST['tbmob_no'];
include "connection.php";
$query="update const_login set email='$email',off_name='$off_name',mob_no='$mob_no'";
echo $query;
mysqli_query($conn,$query);
header("location:view_const_login.php");