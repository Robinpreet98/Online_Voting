<?php
$const_name=$_REQUEST['tbconst_name'];
$population=$_REQUEST['tbpopulatuion'];
$wards=$_REQUEST['tbwards'];
$state=$_REQUEST['tbstate'];
include "connection.php";
$query="update constituency set const_name='$const_name',population='$population',wards='$wards',state='$state' where const_name='$const_name'";
echo $query;
mysqli_query($conn,$query);
header("location:viewconstituency.php");