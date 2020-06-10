<?php
if(isset($_REQUEST["username"]))
{
    include_once("connection.php");
    $username = $_REQUEST["username"];
    $query="select * from admin WHERE username='".$username."'";
    $result=mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);

        $username=$row[0];
        $fullname=$row[1];
        $gender=$row[2];
        $contactno=$row[5];
        $email=$row[4];
        $addresss=$row[6];
        $usertype=$row[7];

}
?>

<body>


<?php include_once "admin_header.php" ?>
    <section class="main__middle__container homepage">
        <section class="main__middle__container">
            <div class="container">
                <h1 align="center">EDIT ADMIN</h1>
                <form action="update_admin.php" method="post">
    <table border="1" align="center">

        <tr>
            <td>username</td><td><input type="text" name="tbusername" value="<?php echo $username ?>" readonly></td>
        </tr>

        <tr>
            <td>fullname</td><td><input type="text" name="tbfullname" value="<?php echo $fullname ?>" required=""></td>
        </tr>
        <tr>
            <td>gender</td>
            <td>
                <?php
                if($gender =="male")
                {
                    ?>
                    <input type="radio" name="tbgender" value="male" checked>male
                    <input type="radio" name="tbgender" value="female">female
                <?php
                }
                else
                {
                    ?>
                    <input type="radio" name="tbgender" value="male" >male
                    <input type="radio" name="tbgender" value="female" checked>female
                <?php
                }
                ?>

            </td>
        </tr>
        <tr>
            <td>email</td><td><input type="email"name="tbemail" value="<?php echo $email ?>" required=""></td>
        </tr>
        <tr>
            <td>contactno</td><td><input type="text"name="tbcontactno" value="<?php echo $contactno ?>" required=""></td>
        </tr>
        <tr>
            <td>address</td><td><textarea rows="5"cols="22" name="tbaddress"><?php echo $addresss ?></textarea> </td>
        </tr>
        <tr>
            <td>usertype</td><td><select name="tbusertype" required>
                    <?php
                    if($usertype == "admin")
                    {
                        ?>
                        <option value="admin" selected>Admin</option>
                        <option value="subadmin">Sub Admin</option>
                        <option value="poweradmin">Power User</option>
                    <?php
                    }
                    elseif($usertype == "subadmin")
                    {
                        ?>
                        <option value="admin">Admin</option>
                        <option value="subadmin" selected>Sub Admin</option>
                        <option value="poweradmin">Power User</option>
                        <?php
                    }
                    else
                    {
                        ?>
                        <option value="admin">Admin</option>
                        <option value="subadmin">Sub Admin</option>
                        <option value="poweradmin" selected>Power User</option>
                    <?php
                    }
                    ?>

                </select>
            </td>
        </tr>
        <tr>
            <th>
                <?php
                if(isset($_REQUEST['er']))
                {
                    if($_REQUEST['er']==1)
                    {
                        echo "Username already exists";
                    }
                    elseif($_REQUEST['er']==2)
                    {
                        echo "Data not Valid";
                    }
                    elseif($_REQUEST['er']==3)
                    {
                        echo "Password and Confirm Password not matched";
                    }
                }
                ?>
            </th>
            <td><input type="submit" value="Edit Admin"></td>
        </tr>
    </table>
</form>
                </div>
            </section>
        </section>

<?php include "footer.html"; ?>
</body>
