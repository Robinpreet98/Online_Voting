<?php
$tbusername=$_REQUEST['tbusername'];
$tbfullname=$_REQUEST['tbfullname'];
$tbgender=$_REQUEST['tbgender'];
$tbemail=$_REQUEST['tbemail'];
$tbcontactno=$_REQUEST['tbcontactno'];
$tbaddress=$_REQUEST['tbaddress'];
$tbusertype=$_REQUEST['tbusertype'];
include "connection.php";
$query="update admin set fullname='$tbfullname',gender='$tbgender',email='$tbemail',contactno='$tbcontactno',address='$tbaddress',
usertype='$tbusertype' where username='$tbusername'";
echo $query;
mysqli_query($conn,$query);
header("location:view_admin.php");