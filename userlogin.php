<html>
<head>
    <title>Login Page</title>
</head>
<body>
<?php include "public_header.php" ?>
<form action="action_userlogin.php" method="post">
    <table border="1">
        <tr>
            <td>email</td>
            <td>
                <input type="email" name="tbemail" required="">
            </td>
        </tr>
        <tr>
            <td>password</td>
            <td>
                <input type="password" name="tbpassword" required="">
            </td>
        </tr>

        <tr>
            <td>country</td><td><select name="tbcountry" required="">
                    <option value="">---Select---</option>
                    <option value="india">India</option>
                    <option value="others">Others</option>

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
                <input type="submit" value="login">
            </td>
        </tr>

    </table>
</form>
</body>
</html>
