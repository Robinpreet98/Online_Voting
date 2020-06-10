<?php

    include_once "connection.php";
    $username = $_REQUEST["tbusername"];
    $old_password = $_REQUEST["tbopassword"];
    $new_password = $_REQUEST["tbnpassword"];
    $con_password = $_REQUEST["tbcpassword"];
    $query = "Select * from admin";
    $result = mysqli_query($conn, $query);
    $flag = false;
    while ($row = mysqli_fetch_array($result))
    {
        if ($row[0] == $username && $row[1] == $old_password) {
            $flag = true;
            break;
        }
    }


        if($flag==true)
        {
            if($new_password == $con_password)
            {
                $update="update admin set password='$new_password' where username='$username'";
                echo $update;
                mysqli_query($conn,$update);
                header("location:admin_home.php");
            }
            else
            {
                echo "New and Confirm not";
                 header("location:changepassword_admin.php?er=2");
            }
        }
else
{
    echo "Old not";
    header("location:changepassword_admin.php?er=1");
}




