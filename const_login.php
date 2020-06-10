<html>
<head>
    <title>Login Page</title>
</head>
<body>
<?php include "admin_header.php" ?>

<?php
include "connection.php";
$select="select const_name from constituency where const_id=".$_REQUEST['q'];
//echo $select;
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
$const_name=$row[0];
echo "<h2>Constituency : $const_name</h2>";
?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">ADD CONSTITUENCY LOGIN</h1>
<form action="actionconst_login.php" method="post">
    <input type="hidden" name="tbconst_id" value="<?php echo $_REQUEST['q'] ?>">
    <table border="1" align="center">

        <tr>
            <td>email</td>
            <td><input type="email" name="tbemail" required=""></td>
        </tr>
        <tr>
            <td>officer name</td>
            <td><input type="text" name="tboff_name" required=""></td>
        </tr>
        <tr>
            <td>mobile no</td>
            <td><input type="number" name="tbmob_no" required=""></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="tbpassword" required=""></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Add Login">
            </td>
        </tr>

    </table>
</form>
            </div>
        </section>
    </section>
<?php
include "footer.html";
?>
</body>
</html>
