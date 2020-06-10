<?php
session_start();
if(isset($_SESSION['user']))
{

}
else
{
    header("location:userlogin.php");
}
?>
<div>
    <a href="userhome.php">Home</a>
    <a href="logout_user.php">Logout</a>
</div>