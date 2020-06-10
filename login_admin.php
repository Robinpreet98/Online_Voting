<body>
<?php include "public_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
<h1 align="center">ADMIN LOGIN</h1>
<form action="actionlogin_admin.php" method="post">
    <table border="1" align="center">
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="tbusername" required="">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="tbpassword" required="">
            </td>
        </tr>
        <tr>
            <td>usertype</td><td><select name="tbusertype" required="">
                    <option value="">---Select---</option>
                    <option value="admin">Admin</option>
                    <option value="subadmin">Sub Admin</option>
                    <option value="poweradmin">Power User</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php
                if(isset($_REQUEST["msg"]))
                {
                    echo $_REQUEST["msg"];
                }
                ?>
            </td>
        </tr>
         <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Login">
            </td>
        </tr>
    </table>
</form>
            </div>
        </section>
    </section>
<?php include "footer.html" ?>
</body>