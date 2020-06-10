
<body>
<?php include "admin_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">CREATE NEW ADMIN</h1>
<form action="actionadmin.php" method="post">

    <table border="1" align="center">

<tr>
    <td>username</td><td><input type="text" name="tbusername" required=""></td>
</tr>
    <tr>
        <td>password</td><td><input type="password" name="tbpassword" required=""></td>
    </tr>
        <tr>
            <td>confirm password</td><td><input type="password" name="tbcpassword" required=""></td>
        </tr>
    <tr>
        <td>fullname</td><td><input type="text" name="tbfullname"required=""></td>
    </tr>
    <tr>
        <td>gender</td><td><input type="radio" name="tbgender" value="male" checked>male
        <input type="radio" name="tbgender" value="female">female
        </td>
    </tr>
    <tr>
        <td>email</td><td><input type="email"name="tbemail" required=""></td>
    </tr>
    <tr>
        <td>contactno</td><td><input type="number"name="tbcontactno" required=""></td>
    </tr>
    <tr>
        <td>address</td><td><textarea rows="5"cols="22" name="tbaddress"></textarea> </td>
    </tr>
    <tr>
        <td>usertype</td><td><select name="tbusertype" required>
                <option value="">---Select---</option>
                <option value="admin">Admin</option>
                <option value="subadmin">Sub Admin</option>
                <option value="poweradmin">Power User</option>
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
            <td><input type="submit" value="Add Admin"></td>
        </tr>
    </table>
</form>
</div>
        </section>
    </section>
</body>
<?php include "footer.html";