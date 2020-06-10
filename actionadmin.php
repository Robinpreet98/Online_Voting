<?php
if(isset($_REQUEST["tbusername"])) {
    include_once("connection.php");
    $username = $_REQUEST["tbusername"];
    $tbpassword = $_REQUEST['tbpassword'];
    $tbcpassword = $_REQUEST['tbcpassword'];
    $fullname = $_REQUEST["tbfullname"];
    $gender = $_REQUEST["tbgender"];
    $address = $_REQUEST["tbaddress"];
    $email = $_REQUEST["tbemail"];
    $contactno = $_REQUEST["tbcontactno"];
    $usertype = $_REQUEST["tbusertype"];
    $select = "select * from admin";
    $res = mysqli_query($conn, $select);
    $flag = 0;
    while ($row = mysqli_fetch_array($res))
    {
        if ($username == $row[0]) {
            $flag = 1;
            break;
        }
    }
}
if($flag==1)
{
    header("location:addadmin.php?er=1");
}
else
{
    if($tbpassword == $tbcpassword)
    {
        $query="insert into admin VALUES ('".$username."','".$tbpassword."','".$fullname."','".$gender."','".$email."','".$contactno."','".$address."','".$usertype."')";
        echo $query;
        if(mysqli_query($conn,$query))
        {
            header("location:confirm_admin.php");
        }
        else
        {
            header("location:addadmin.php?er=2");
        }
    }
    else
    {
        header("location:addadmin.php?er=3");
    }

}


