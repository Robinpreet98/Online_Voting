<?php
include "public_header.php";
?>

<body>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
<form action="action_constituency_login.php" method="post">
    <h1 align="center">CONSTITUENCY LOGIN</h1>
    <table border="1" align="center">
        <tr>
            <td>Email</td>
            <td><input type="email" name="tbemail" required> </td>
        </tr>
        <tr>
        <td>Password</td>
        <td>
        <input type="password" name="tbpassword" required></td>
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
<?php include "footer.html";