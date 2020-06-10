<?php
if (isset($_REQUEST["tbusername"])) {
    include_once "connection.php";
    $username = $_REQUEST["tbusername"];
    $password = $_REQUEST["tbpassword"];
    $tbusertype=$_REQUEST['tbusertype'];
    $query = "Select * from admin";
    $result = mysqli_query($conn, $query);
    $flag = false;
    while ($row = mysqli_fetch_array($result)) {
        if ($row[0] == $username && $row[1] == $password && $row[7] == $tbusertype) {
            $flag = true;
            break;
        }
    }
}
    if ($flag==true)
    {
        session_start();
        $_SESSION["username"]= $username;
        header('location:admin_home.php');
   }
    else
    {

        header('location:login_admin.php?msg=invalid username or password or user type');
    }

